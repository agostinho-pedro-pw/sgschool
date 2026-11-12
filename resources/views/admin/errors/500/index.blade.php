<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sgSchool - Plataforma moderna de gestão escolar para universidades">
    <meta name="keywords" content="education, dashboard, university, management, admin">
    <meta name="author" content="Agostinho Pedro">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">

    <title>500 - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <style>
        .error-page {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            display: flex;
            position: relative;
            overflow: hidden
        }

        .error-container {
            text-align: center;
            z-index: 10;
            max-width: 700px;
            margin: 0 auto;
            padding: 2rem
        }

        .error-icon {
            color: #fffc;
            margin-bottom: 30px;
            font-size: 80px;
            animation: 2s linear infinite rotate
        }

        @keyframes rotate {
            0% {
                transform: rotate(0)
            }

            to {
                transform: rotate(360deg)
            }
        }

        .error-code {
            color: #fff;
            text-shadow: 3px 3px 20px #0003;
            margin-bottom: 0;
            font-size: 10rem;
            font-weight: 700;
            line-height: 1;
            animation: .5s ease-in-out shake
        }

        @keyframes shake {

            0%,
            to {
                transform: translate(0)
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translate(-10px)
            }

            20%,
            40%,
            60%,
            80% {
                transform: translate(10px)
            }
        }

        .error-title {
            color: #fff;
            margin-top: 1rem;
            margin-bottom: 1rem;
            font-size: 2.5rem;
            font-weight: 600
        }

        .error-message {
            color: #ffffffe6;
            margin-bottom: 2rem;
            font-size: 1.25rem;
            line-height: 1.6
        }

        .error-actions {
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
            display: flex
        }

        .error-btn {
            border-radius: 50px;
            align-items: center;
            gap: 8px;
            padding: 12px 30px;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: none;
            transition: all .3s;
            display: inline-flex
        }

        .btn-primary-error {
            color: #f5576c;
            background: #fff;
            border: 2px solid #fff
        }

        .btn-primary-error:hover {
            color: #fff;
            background: 0 0;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px #0003
        }

        .btn-secondary-error {
            color: #fff;
            background: 0 0;
            border: 2px solid #fff
        }

        .btn-secondary-error:hover {
            color: #f5576c;
            background: #fff;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px #0003
        }

        .error-details {
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            text-align: left;
            background: #ffffff1a;
            border-radius: 12px;
            margin: 30px 0;
            padding: 25px
        }

        .error-details h4 {
            color: #fff;
            align-items: center;
            gap: 8px;
            margin-bottom: 15px;
            font-size: 18px;
            display: flex
        }

        .error-details ul {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .error-details li {
            color: #ffffffe6;
            border-bottom: 1px solid #ffffff1a;
            align-items: center;
            gap: 10px;
            padding: 8px 0;
            display: flex
        }

        .error-details li:last-child {
            border-bottom: none
        }

        .error-details li i {
            color: #ffffffb3;
            font-size: 16px
        }

        .status-info {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 30px;
            display: grid
        }

        .status-item {
            color: #fff;
            background: #ffffff1a;
            border-radius: 8px;
            padding: 15px
        }

        .status-item h5 {
            opacity: .8;
            margin-bottom: 5px;
            font-size: 14px
        }

        .status-item p {
            margin: 0;
            font-size: 20px;
            font-weight: 600
        }

        .refresh-hint {
            color: #fffc;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            font-size: 14px;
            display: flex
        }

        .spinner {
            border: 2px solid #ffffff4d;
            border-top-color: #fff;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            animation: 1s linear infinite spin;
            display: inline-block
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        .bg-shape {
            opacity: .1;
            position: absolute
        }

        .shape-1 {
            background: #fff;
            border-radius: 50%;
            width: 500px;
            height: 500px;
            animation: 20s ease-in-out infinite float;
            top: -250px;
            left: -250px
        }

        .shape-2 {
            background: #fff;
            border-radius: 50%;
            width: 300px;
            height: 300px;
            animation: 15s ease-in-out infinite reverse float;
            bottom: -150px;
            right: -150px
        }

        @keyframes float {

            0%,
            to {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-30px)
            }
        }

        @media (width<=768px) {
            .error-code {
                font-size: 6rem
            }

            .error-title {
                font-size: 1.8rem
            }

            .error-message {
                font-size: 1rem
            }

            .error-actions {
                flex-direction: column;
                align-items: center
            }

            .error-btn {
                justify-content: center;
                width: 200px
            }
        }

        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif
        }
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>

    <!-- Required DOM elements for dashboard.js -->
    <div class="search-backdrop" id="searchBackdrop"></div>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>


    <div class="error-page">
        <!-- Animated Background Shapes -->
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>

        <!-- Error Content -->
        <div class="error-container">
            <div class="error-icon">
                <i class="bi bi-gear"></i>
            </div>

            <h1 class="error-code">500</h1>
            <h2 class="error-title">Erro interno do servidor</h2>
            <p class="error-message">
                Lamentamos, mas ocorreu um erro no servidor. A nossa equipa foi notificada e está a resolver o problema.
            </p>

            <!-- Action Buttons -->
            <div class="error-actions">
                <a href="javascript:location.reload()" class="error-btn btn-primary-error">
                    <i class="bi bi-arrow-clockwise"></i>Tentar novamente</a>
                <a href="index.html" class="error-btn btn-secondary-error">
                    <i class="bi bi-house-door"></i>
                    Ir para o painel
                </a>
            </div>

            <!-- Error Details -->
            <div class="error-details">
                <h4><i class="bi bi-info-circle"></i> O que pode tentar:</h4>
                <ul>
                    <li>
                        <i class="bi bi-arrow-clockwise"></i>
                        Atualize a p?gina ? o problema pode ser tempor?rio.
                    </li>
                    <li>
                        <i class="bi bi-clock-history"></i>
                        Aguarde alguns minutos e tente novamente.
                    </li>
                    <li>
                        <i class="bi bi-trash3"></i>
                        Limpe a cache e os cookies do navegador.
                    </li>
                    <li>
                        <i class="bi bi-browser-chrome"></i>Experimente utilizar outro navegador</li>
                    <li>
                        <i class="bi bi-headset"></i>
                        Contacte o suporte se o problema persistir.
                    </li>
                </ul>
            </div>

            <!-- Status Information -->
            <div class="status-info">
                <div class="status-item">
                    <h5>Código de erro</h5>
                    <p>500</p>
                </div>
                <div class="status-item">
                    <h5>Time</h5>
                    <p id="currentTime">--:--</p>
                </div>
                <div class="status-item">
                    <h5>Estado</h5>
                    <p>Investigating</p>
                </div>
            </div>

            <!-- Auto-refresh hint -->
            <div class="refresh-hint">
                <div class="spinner"></div>
                <span>Auto-refresh in <span id="countdown">30</span> seconds</span>
            </div>
        </div>
    </div>

    <script>
        // Display current time
function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString('en-US', {
        hour: '2-digit',
        minute: '2-digit'
    });
    document.getElementById('currentTime').textContent = timeString;
}
updateTime();
setInterval(updateTime, 1000);

// Auto-refresh countdown
let countdown = 30;
const countdownElement = document.getElementById('countdown');

const countdownInterval = setInterval(() => {
    countdown--;
    countdownElement.textContent = countdown;

    if (countdown <= 0) {
        clearInterval(countdownInterval);
        location.reload();
    }
}, 1000);

// Allow user to stop auto-refresh by clicking anywhere
document.addEventListener('click', () => {
    clearInterval(countdownInterval);
    document.querySelector('.refresh-hint').style.display = 'none';
});

// Log 500 error for analytics (in production)
console.log('Erro 500 — Erro interno do servidor:', window.location.pathname);
    </script>

    <!-- Load JavaScript -->




</body>

</html>