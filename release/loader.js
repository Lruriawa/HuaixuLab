// ===== loader.js - 通用加载动画 =====
(function() {
    // 创建加载动画 DOM
    var loaderHTML = `
        <div id="loader">
            <div class="logo">🧪</div>
            <div class="loader-text">槐序<span>Lab</span>-槐序实验室</div>
            <div class="loading-status">加载中...</div>
            <div class="loader-bar"><div class="fill"></div></div>
        </div>
    `;
    document.body.insertAdjacentHTML('afterbegin', loaderHTML);

    // 加载动画样式
    var style = document.createElement('style');
    style.textContent = `
        #loader {
            position:fixed;
            top:0; left:0; right:0; bottom:0;
            background: #0a0818;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            z-index:9999;
            transition:opacity 0.6s ease-out;
        }
        #loader.hide {
            opacity:0;
            pointer-events:none;
        }
        #loader .logo {
            font-size:4.5rem;
            animation: loaderPulse 1.2s ease-in-out infinite;
            margin-bottom:12px;
        }
        #loader .loader-text {
            color:rgba(255,255,255,0.4);
            font-size:1.1rem;
            letter-spacing:4px;
            font-weight:400;
            margin-bottom:20px;
        }
        #loader .loader-text span {
            color:#a78bfa;
            font-weight:600;
        }
        #loader .loading-status {
            color:rgba(255,255,255,0.15);
            font-size:0.8rem;
            letter-spacing:2px;
            margin-bottom:16px;
            animation: loadingDot 1.6s ease-in-out infinite;
        }
        @keyframes loadingDot {
            0%, 100% { opacity:0.3; }
            50% { opacity:1; }
        }
        #loader .loader-bar {
            width:180px;
            height:3px;
            background:rgba(255,255,255,0.06);
            border-radius:4px;
            overflow:hidden;
            position:relative;
        }
        #loader .loader-bar .fill {
            position:absolute;
            left:0; top:0; height:100%;
            width:0%;
            background:linear-gradient(90deg, #7c3aed, #6366f1, #06b6d4);
            border-radius:4px;
            animation: loaderFill 4.5s ease-in-out forwards;
        }
        @keyframes loaderPulse {
            0%, 100% { transform:scale(1); }
            50% { transform:scale(1.08); }
        }
        @keyframes loaderFill {
            0% { width:0%; }
            15% { width:18%; }
            35% { width:45%; }
            55% { width:68%; }
            75% { width:84%; }
            90% { width:94%; }
            100% { width:100%; }
        }
    `;
    document.head.appendChild(style);

    // 页面加载完成后隐藏
    function hideLoader() {
        var loader = document.getElementById('loader');
        if (loader) {
            loader.classList.add('hide');
        }
    }

    if (document.readyState === 'complete') {
        setTimeout(hideLoader, 500);
    } else {
        window.addEventListener('load', function() {
            setTimeout(hideLoader, 500);
        });
    }
})();