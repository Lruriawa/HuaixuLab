# 🧪 槐序Lab实验室

> 交互 · 视觉 · 工具 · 游戏 —— 一个由热爱驱动的在线工具体验中心。

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![纯静态](https://img.shields.io/badge/纯静态-HTML%2FCSS%2FJS-brightgreen)](https://lab.lruriawa.top)
[![无后端](https://img.shields.io/badge/无后端-纯前端-orange)](https://lab.lruriawa.top)
[![双端适配](https://img.shields.io/badge/适配-手机%20%7C%20电脑-success)](https://lab.lruriawa.top)

---

## 📖 简介

**槐序Lab实验室** 是一个集小游戏、视觉艺术、交互工具和实用工具于一体的在线工具体验中心。  
所有项目均为**纯前端应用**，无需下载安装，在电脑和手机上都能流畅运行。  
我们相信好的工具应该是 **干净、无广告、即开即用** 的。

- 🚀 在线体验：[https://lab.lruriawa.top](https://lab.lruriawa.top)
- 📋 项目列表：[https://lab.lruriawa.top/release/home.html](https://lab.lruriawa.top/release/home.html)
- 📝 博客：[https://blog.lruriawa.top](https://blog.lruriawa.top)
- 💌 官网：[https://tech.www.lruriawa.top](https://tech.www.lruriawa.top)

---

## ✨ 项目特色

- **纯静态**：仅使用 HTML / CSS / JavaScript，无需数据库或后端服务。
- **轻量高效**：所有项目开箱即用，加载迅速。
- **双端适配**：完美适配桌面端与移动端，触屏操作友好。
- **持续更新**：定期新增小游戏、工具与视觉特效。
- **完全免费**：无广告、无内购、无用户追踪。

---

## 📁 目录结构
lab.lruriawa.top/
├── index.html # 首页（实验室概览）
├── release/
│ ├── home.html # 项目列表页
│ ├── games/ # 小游戏（21款）
│ ├── tools/ # 实用工具（35款）
│ ├── visualarts/ # 视觉艺术（10款）
│ ├── interactivetool/ # 交互工具（11款）
│ └── dynamiceffects/ # 动态特效（9款）
└── ...

---

## 🎮 部分项目展示

### 小游戏
| 名称 | 说明 | 链接 |
|------|------|------|
| 消消乐 | 点击相邻水果消除，限时2分钟 | [play](https://lab.lruriawa.top/release/games/match3.html) |
| 贪吃蛇 | 经典方向键控制 | [play](https://lab.lruriawa.top/release/games/snake.html) |
| 2048 | 合并数字冲刺2048 | [play](https://lab.lruriawa.top/release/games/2048.html) |
| Flappy Bird | 点击/空格跳跃 | [play](https://lab.lruriawa.top/release/games/flappy.html) |
| 羊了个羊 | 多层堆叠消除 | [play](https://lab.lruriawa.top/release/games/yang.html) |
| ... | 更多游戏请访问项目列表 | |

### 实用工具
| 名称 | 说明 | 链接 |
|------|------|------|
| AI读心术 | 16道题测出你的思维类型 | [try](https://lab.lruriawa.top/release/tools/readmind.html) |
| AI测心理 | 10项心理健康测评 | [try](https://lab.lruriawa.top/release/tools/ai-psych.html) |
| 条形码工具 | 生成+解码，支持10种条码格式 | [try](https://lab.lruriawa.top/release/tools/barcode.html) |
| Markdown预览器 | 实时渲染 Markdown | [try](https://lab.lruriawa.top/release/tools/markdown.html) |
| 文本统计器 | 字数/行数/阅读时长统计 | [try](https://lab.lruriawa.top/release/tools/wordcount.html) |
| 渐变生成器 | 可视化生成 CSS 渐变代码 | [try](https://lab.lruriawa.top/release/tools/gradient.html) |
| 目标追踪器 | 管理并追踪你的目标 | [try](https://lab.lruriawa.top/release/tools/goals.html) |
| 剪贴板历史 | 保存并快速复制文本片段 | [try](https://lab.lruriawa.top/release/tools/clipboard.html) |
| ... | 更多工具请访问项目列表 | |

### 视觉艺术 & 动态特效
- 3D星系、粒子星系、万花尺、极光幻境、莫比乌斯环
- 3D粒子球、星空穿越、彩虹雨、分形树、心形粒子
- ……共 19 款视觉作品

### 交互工具
- 流体沙画、火焰粒子、音乐可视化、水墨丹青、像素画板
- ……共 11 款交互体验

---

## 🛠 技术栈

- **核心**：HTML5 / CSS3 / JavaScript (ES6+)
- **样式**：MiSans 字体、CSS 变量、Flex/Grid 布局
- **第三方库**（按需引入）：
  - [JsBarcode](https://github.com/lindell/JsBarcode) – 条形码生成
  - [html5-qrcode](https://github.com/mebjas/html5-qrcode) – 条形码/二维码解码
  - [marked](https://github.com/markedjs/marked) – Markdown 渲染
  - [Chart.js](https://www.chartjs.org/)（部分工具使用）
- **无框架**：所有项目均未使用 Vue/React 等框架，保持轻量与纯粹。

---

## 🚀 快速开始

1. **克隆仓库**
   ```bash
   git clone https://github.com/Lruriawa/HuaixuLab.git
直接打开
无需构建，直接用浏览器打开 index.html 即可。

部署
将整个目录上传至任意静态服务器（如 Nginx、Apache、Vercel、Netlify）即可。
# 🤝 参与贡献

这是一个个人项目，但非常欢迎你提出建议或反馈。

    发现 Bug？请提交 Issue

    有好的工具创意？欢迎在 讨论区 分享

    想要贡献代码？请先 Fork 并提交 Pull Request

# 📄 开源协议

本项目采用 MIT License 开源协议。
你可以自由使用、修改、分发，但需保留原作者版权声明。
🙏 致谢

    感谢 DeepSeek 提供的设计灵感与代码支持

    感谢所有开源库的作者

    感谢每一位访问和使用槐序Lab的朋友

    🧪 由热爱驱动，为探索而生。
    © 2023-2026 天津市槐序网络科技工作室
