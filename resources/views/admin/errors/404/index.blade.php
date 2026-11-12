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

    <title>404 - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <style>
        .error-page {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem
        }

        .error-code {
            color: #fff;
            text-shadow: 3px 3px 20px #0003;
            margin-bottom: 0;
            font-size: 10rem;
            font-weight: 700;
            line-height: 1;
            animation: 3s ease-in-out infinite float
        }

        @keyframes float {

            0%,
            to {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-20px)
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

        .btn-home {
            color: #667eea;
            background: #fff;
            border: 2px solid #fff
        }

        .btn-home:hover {
            color: #fff;
            background: 0 0;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px #0003
        }

        .btn-back {
            color: #fff;
            background: 0 0;
            border: 2px solid #fff
        }

        .btn-back:hover {
            color: #667eea;
            background: #fff;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px #0003
        }

        .bg-shape {
            opacity: .1;
            position: absolute
        }

        .shape-1 {
            background: #fff;
            border-radius: 50%;
            width: 400px;
            height: 400px;
            animation: 20s linear infinite rotate;
            top: -200px;
            right: -200px
        }

        .shape-2 {
            background: #fff;
            border-radius: 50%;
            width: 300px;
            height: 300px;
            animation: 15s linear infinite reverse rotate;
            bottom: -150px;
            left: -150px
        }

        .shape-3 {
            background: #fff;
            width: 200px;
            height: 200px;
            animation: 5s ease-in-out infinite float;
            top: 50%;
            left: 10%;
            transform: rotate(45deg)
        }

        @keyframes rotate {
            0% {
                transform: rotate(0)
            }

            to {
                transform: rotate(360deg)
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

        .error-search {
            max-width: 400px;
            margin-top: 2rem;
            margin-left: auto;
            margin-right: auto
        }

        .search-group {
            position: relative
        }

        .search-input {
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            color: #fff;
            background: #fff3;
            border: none;
            border-radius: 50px;
            width: 100%;
            padding: 12px 50px 12px 20px;
            font-size: 1rem;
            transition: all .3s
        }

        .search-input::placeholder {
            color: #fff9
        }

        .search-input:focus {
            background: #ffffff4d;
            outline: none;
            box-shadow: 0 5px 20px #0003
        }

        .search-btn {
            color: #667eea;
            cursor: pointer;
            background: #fff;
            border: none;
            border-radius: 50%;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            transition: all .3s;
            display: flex;
            position: absolute;
            top: 50%;
            right: 5px;
            transform: translateY(-50%)
        }

        .search-btn:hover {
            transform: translateY(-50%)scale(1.1);
            box-shadow: 0 5px 15px #0003
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
        <div class="bg-shape shape-3"></div>

        <!-- Error Content -->
        <div class="error-container">
            <h1 class="error-code">404</h1>
            <h2 class="error-title">Ups! Página não encontrada</h2>
            <p class="error-message">
                A página que procura parece ter desaparecido. Pode ter sido removida, mudado de nome ou talvez nunca
                tenha existido.
            </p>

            <!-- Action Buttons -->
            <div class="error-actions">
                <a href="index.html" class="error-btn btn-home">
                    <i class="bi bi-house-door"></i>
                    Ir para a página inicial
                </a>
                <a href="javascript:history.back()" class="error-btn btn-back">
                    <i class="bi bi-arrow-left"></i>
                    Voltar
                </a>
            </div>

            <!-- Search Box -->
            <div class="error-search">
                <form action="/search" method="get" class="search-group">
                    <input type="text" class="search-input" placeholder="Pesquisar uma p?gina..." name="q">
                    <button type="submit" class="search-btn" aria-label="Pesquisar">
                        <i aria-hidden="true" class="bi bi-search"></i>
                    </button>
                </form>
            </div>

            <!-- Helpful Links -->
            <div style="margin-top: 3rem;">
                <p style="color: rgba(255,255,255,0.7); margin-bottom: 1rem;">Páginas populares:</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="analytics.html"
                        style="color: white; text-decoration: underline; opacity: 0.8; hover: opacity: 1;">Painel</a>
                    <a href="all-students.html"
                        style="color: white; text-decoration: underline; opacity: 0.8;">Estudantes</a>
                    <a href="all-courses.html"
                        style="color: white; text-decoration: underline; opacity: 0.8;">Cursos</a>
                    <a href="events.html" style="color: white; text-decoration: underline; opacity: 0.8;">Eventos</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add some interactivity
document.addEventListener('DOMContentLoaded', function() {
    // Animate error code on page load
    const errorCode = document.querySelector('.error-code');
    if (errorCode) {
        errorCode.style.opacity = '0';
        errorCode.style.transform = 'scale(0.5)';
        setTimeout(() => {
            errorCode.style.transition = 'all 0.5s ease';
            errorCode.style.opacity = '1';
            errorCode.style.transform = 'scale(1)';
        }, 100);
    }

    // Handle search form
    const searchForm = document.querySelector('.search-group');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const query = this.querySelector('input').value;
            if (query) {
                // In a real application, this would perform a search
                alert('A pesquisa procuraria por: ' + query);
            }
        });
    }

    // Log 404 error for analytics (in production)
    console.log('Erro 404 — Página não encontrada:', window.location.pathname);
});
    </script>

    <!-- Load JavaScript -->




</body>

</html>