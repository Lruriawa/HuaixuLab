<?php
/**
 * 消消乐排行榜 API（同域部署）
 * 支持 GET（获取排行榜）和 POST（提交分数）
 * 数据存储在同目录下的 data.json
 */

// 允许同域调用（无需跨域头，但保留以防万一）
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// 数据文件路径
$dataFile = __DIR__ . '/data.json';

// 读取数据（带共享锁）
function readData() {
    global $dataFile;
    if (!file_exists($dataFile)) {
        return ['ranking' => []];
    }
    $fp = fopen($dataFile, 'r');
    if (flock($fp, LOCK_SH)) {
        $content = stream_get_contents($fp);
        flock($fp, LOCK_UN);
        fclose($fp);
        $data = json_decode($content, true);
        return is_array($data) ? $data : ['ranking' => []];
    }
    fclose($fp);
    return ['ranking' => []];
}

// 写入数据（带独占锁）
function writeData($data) {
    global $dataFile;
    $fp = fopen($dataFile, 'w');
    if (flock($fp, LOCK_EX)) {
        fwrite($fp, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        flock($fp, LOCK_UN);
        fclose($fp);
        return true;
    }
    fclose($fp);
    return false;
}

// GET：返回排行榜
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = readData();
    echo json_encode(['success' => true, 'data' => $data['ranking']]);
    exit;
}

// POST：提交分数
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    if (!isset($input['name']) || !isset($input['score'])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => '缺少 name 或 score']);
        exit;
    }
    $name = trim(strip_tags($input['name']));
    $score = intval($input['score']);
    if ($name === '' || $score < 0) {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => '参数无效']);
        exit;
    }

    $data = readData();
    $now = new DateTime();
    $date = $now->format('Y-m-d');

    // 添加记录
    $data['ranking'][] = [
        'name' => $name,
        'score' => $score,
        'date' => $date
    ];

    // 按分数降序
    usort($data['ranking'], function($a, $b) {
        return $b['score'] - $a['score'];
    });

    // 只保留前 10 名
    if (count($data['ranking']) > 10) {
        $data['ranking'] = array_slice($data['ranking'], 0, 10);
    }

    if (writeData($data)) {
        echo json_encode(['success' => true, 'data' => $data['ranking']]);
    } else {
        http_response_code(500);
        echo json_encode(['success' => false, 'error' => '服务器写入失败']);
    }
    exit;
}

// 其他方法返回 405
http_response_code(405);
echo json_encode(['success' => false, 'error' => 'Method Not Allowed']);