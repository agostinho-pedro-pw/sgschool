<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sgSchool - Plataforma moderna de gestão escolar para instituições de ensino">
    <meta name="keywords" content="educação, painel, ensino, gestão, administração">
    <meta name="author" content="Agostinho Pedro">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">

    <title>Gráficos Sparkline - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->



    <!-- Page-specific stylesheets (set via additionalCSS in vite.config.js) -->


    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/chart-runtime-BMJJQUfu.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/charts-layout-C732DjRu.css') }}">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            background: #f5f7fa;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif
        }

        .sidebar {
            z-index: 1040;
            background: #1f2937;
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0
        }

        .main-wrapper {
            min-height: 100vh;
            margin-left: 260px;
            transition: margin-left .3s
        }

        .top-navbar {
            background: #fff;
            height: 60px;
            padding: 0 1rem;
            box-shadow: 0 1px 3px #0000001a
        }

        .dashboard-content {
            padding: 24px
        }

        @keyframes pulse {

            0%,
            to {
                opacity: 1
            }

            50% {
                opacity: .5
            }
        }

        .loading {
            background: #e5e7eb;
            animation: 2s cubic-bezier(.4, 0, .6, 1) infinite pulse
        }

        .sparkline-grid {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
            display: grid
        }

        .sparkline-card {
            background: #fff;
            border-radius: 12px;
            flex-direction: column;
            gap: .75rem;
            padding: 1.25rem;
            display: flex;
            box-shadow: 0 1px 3px #0000001a
        }

        .sparkline-header {
            justify-content: space-between;
            align-items: flex-start;
            display: flex
        }

        .sparkline-info {
            flex: 1
        }

        .sparkline-label {
            color: #6b7280;
            margin-bottom: .25rem;
            font-size: .875rem;
            font-weight: 500
        }

        .sparkline-value {
            color: #1f2937;
            font-size: 1.875rem;
            font-weight: 700;
            line-height: 1
        }

        .sparkline-trend {
            border-radius: 6px;
            align-items: center;
            gap: .25rem;
            padding: .25rem .5rem;
            font-size: .75rem;
            font-weight: 600;
            display: inline-flex
        }

        .trend-up {
            color: #10b981;
            background: #d1fae5
        }

        .trend-down {
            color: #ef4444;
            background: #fee2e2
        }

        .sparkline-chart-wrapper {
            width: 100%;
            height: 60px;
            margin-top: .5rem;
            position: relative
        }

        .sparkline-chart-wrapper canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important
        }

        .section-header {
            margin-bottom: 1.5rem
        }

        .section-title {
            color: #1f2937;
            margin-bottom: .25rem;
            font-size: 1.25rem;
            font-weight: 700
        }

        .section-subtitle {
            color: #6b7280;
            font-size: .875rem
        }
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>

    <!-- Required DOM elements for dashboard.js -->
    <div class="search-backdrop" id="searchBackdrop"></div>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>


    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <h5>
                    <i class="bi bi-mortarboard-fill"></i>
                    sgSchool
                </h5>
                <button type="button" class="sidebar-close" id="sidebarClose" aria-label="Fechar barra lateral">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>

        <nav class="sidebar-nav" aria-label="Navegação principal">
            <div class="menu-section">
                <div class="menu-section-title">Principal</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#dashboardSubmenu" aria-expanded="false">
                            <i class="bi bi-speedometer2"></i>
                            <span>Painel</span>
                        </a>
                        <ul id="dashboardSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="index.html">Painel v.1</a></li>
                            <li><a class="nav-link " href="index-1.html">Painel v.2</a></li>
                            <li><a class="nav-link " href="index-2.html">Painel v.3</a></li>
                            <li><a class="nav-link " href="widgets.html">Elementos</a></li>
                            <li><a class="nav-link " href="analytics.html">Análise de dados</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="events.html">
                            <i class="bi bi-calendar-event"></i>
                            <span>Eventos</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Académico</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#professorsSubmenu" aria-expanded="false">
                            <i class="bi bi-person-badge"></i>
                            <span>Professores</span>
                        </a>
                        <ul id="professorsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="all-professors.html">Todos os professores</a></li>
                            <li><a class="nav-link " href="add-professor.html">Adicionar professor</a></li>
                            <li><a class="nav-link " href="edit-professor.html">Editar professor</a></li>
                            <li><a class="nav-link " href="professor-profile.html">Perfil do professor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#studentsSubmenu" aria-expanded="false">
                            <i class="bi bi-people"></i>
                            <span>Estudantes</span>
                        </a>
                        <ul id="studentsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="all-students.html">Todos os estudantes</a></li>
                            <li><a class="nav-link " href="add-student.html">Adicionar estudante</a></li>
                            <li><a class="nav-link " href="edit-student.html">Editar estudante</a></li>
                            <li><a class="nav-link " href="student-profile.html">Perfil do estudante</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#coursesSubmenu" aria-expanded="false">
                            <i class="bi bi-book"></i>
                            <span>Cursos</span>
                        </a>
                        <ul id="coursesSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="all-courses.html">Todos os cursos</a></li>
                            <li><a class="nav-link " href="add-course.html">Adicionar curso</a></li>
                            <li><a class="nav-link " href="edit-course.html">Editar curso</a></li>
                            <li><a class="nav-link " href="course-info.html">Informações do curso</a></li>
                            <li><a class="nav-link " href="course-payment.html">Pagamento do curso</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#librarySubmenu" aria-expanded="false">
                            <i class="bi bi-journal-bookmark"></i>
                            <span>Biblioteca</span>
                        </a>
                        <ul id="librarySubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="library-assets.html">Recursos da biblioteca</a></li>
                            <li><a class="nav-link " href="add-library-assets.html">Adicionar recurso da biblioteca</a></li>
                            <li><a class="nav-link " href="edit-library-assets.html">Editar recurso da biblioteca</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#departmentsSubmenu" aria-expanded="false">
                            <i class="bi bi-building"></i>
                            <span>Departamentos</span>
                        </a>
                        <ul id="departmentsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="departments.html">Lista de departamentos</a></li>
                            <li><a class="nav-link " href="add-department.html">Adicionar departamento</a></li>
                            <li><a class="nav-link " href="edit-department.html">Editar departamento</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Comunicação</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#mailboxSubmenu" aria-expanded="false">
                            <i class="bi bi-envelope"></i>
                            <span>Correio</span>
                        </a>
                        <ul id="mailboxSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="mailbox.html">Caixa de entrada</a></li>
                            <li><a class="nav-link " href="mailbox-compose.html">Redigir</a></li>
                            <li><a class="nav-link " href="mailbox-view.html">Ver mensagem</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Interface</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#componentsSubmenu" aria-expanded="false">
                            <i class="bi bi-layout-wtf"></i>
                            <span>Componentes</span>
                        </a>
                        <ul id="componentsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="buttons.html">Botões</a></li>
                            <li><a class="nav-link " href="alerts.html">Alertas</a></li>
                            <li><a class="nav-link " href="modals.html">Modais</a></li>
                            <li><a class="nav-link " href="tabs.html">Separadores</a></li>
                            <li><a class="nav-link " href="accordion.html">Acordeão</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#formsSubmenu" aria-expanded="false">
                            <i class="bi bi-card-list"></i>
                            <span>Formulários</span>
                        </a>
                        <ul id="formsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="basic-form-element.html">Formulários básicos</a></li>
                            <li><a class="nav-link " href="advance-form-element.html">Formulários avançados</a></li>
                            <li><a class="nav-link " href="password-meter.html">Indicador de segurança da palavra-passe</a></li>
                            <li><a class="nav-link " href="multi-upload.html">Carregamento de ficheiros</a></li>
                            <li><a class="nav-link " href="images-cropper.html">Recortador de imagens</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#chartsSubmenu" aria-expanded="true">
                            <i class="bi bi-bar-chart"></i>
                            <span>Gráficos</span>
                        </a>
                        <ul id="chartsSubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link " href="line-charts.html">Gráficos de linhas</a></li>
                            <li><a class="nav-link " href="area-charts.html">Gráficos de área</a></li>
                            <li><a class="nav-link " href="bar-charts.html">Gráficos de barras</a></li>
                            <li><a class="nav-link " href="c3.html">Gráficos C3</a></li>
                            <li><a class="nav-link " href="peity.html">Gráficos Peity</a></li>
                            <li><a class="nav-link " href="rounded-chart.html">Gráficos arredondados</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#tablesSubmenu" aria-expanded="false">
                            <i class="bi bi-table"></i>
                            <span>Tabelas</span>
                        </a>
                        <ul id="tablesSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="static-table.html">Tabelas estáticas</a></li>
                            <li><a class="nav-link " href="data-table.html">Tabelas de dados</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Ferramentas de desenvolvimento</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="code-editor.html">
                            <i class="bi bi-code-slash"></i>
                            <span>Editor de código</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#uiToolsSubmenu" aria-expanded="false">
                            <i class="bi bi-tools"></i>
                            <span>Componentes da interface</span>
                        </a>
                        <ul id="uiToolsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="preloader.html">Indicadores de carregamento</a></li>
                            <li><a class="nav-link " href="notifications.html">Notificações</a></li>
                            <li><a class="nav-link " href="tree-view.html">Vista em árvore</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#viewersSubmenu" aria-expanded="false">
                            <i class="bi bi-eye"></i>
                            <span>Visualizadores</span>
                        </a>
                        <ul id="viewersSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="pdf-viewer.html">Visualizador de PDF</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#mapsSubmenu" aria-expanded="false">
                            <i class="bi bi-map"></i>
                            <span>Mapas</span>
                        </a>
                        <ul id="mapsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="google-map.html">Mapas interativos</a></li>
                            <li><a class="nav-link " href="data-maps.html">Mapas de dados</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Páginas</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#authSubmenu" aria-expanded="false">
                            <i class="bi bi-shield-lock"></i>
                            <span>Autenticação</span>
                        </a>
                        <ul id="authSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="login.html">Iniciar sessão</a></li>
                            <li><a class="nav-link " href="register.html">Registar</a></li>
                            <li><a class="nav-link " href="lock.html">Lock Screen</a></li>
                            <li><a class="nav-link " href="password-recovery.html">Recuperar palavra-passe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#errorsSubmenu" aria-expanded="false">
                            <i class="bi bi-exclamation-triangle"></i>
                            <span>Páginas de erro</span>
                        </a>
                        <ul id="errorsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="404.html">Erro 404</a></li>
                            <li><a class="nav-link " href="500.html">Erro 500</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <!-- Main Content Wrapper -->
    <div class="main-wrapper" id="mainWrapper">
        <!-- Header -->
        <header class="navbar top-navbar">
            <div class="container-fluid d-flex align-items-center h-100">
                <!-- Hamburger Menu -->
                <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Alternar barra lateral"
                    aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Breadcrumb for desktop -->
                <nav aria-label="Migalhas de pão do cabeçalho" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Página inicial</a></li>
                        <li class="breadcrumb-item"><a href="#">Gráficos</a></li>
                        <li class="breadcrumb-item active">Gráficos Sparkline</li>
                    </ol>
                </nav>

                <!-- Logo for mobile -->
                <div class="navbar-brand d-lg-none fw-bold me-auto">sgSchool</div>

                <!-- Spacer for desktop -->
                <div class="flex-grow-1 d-none d-lg-block"></div>

                <!-- Right Actions -->
                <div class="d-flex align-items-center gap-2">
                    <!-- Search -->
                    <div class="search-container">
                        <button type="button" class="btn btn-light btn-icon" id="searchToggle" aria-label="Abrir pesquisa"
                            aria-controls="searchForm">
                            <i class="bi bi-search"></i>
                        </button>

                        <div class="search-form" id="searchForm" role="search" aria-label="Pesquisa no site">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" class="form-control" id="searchInput" aria-label="Pesquisar páginas"
                                placeholder="Pesquisar..." data-bs-toggle="dropdown">
                            <button type="button" class="close-search" id="closeSearch" aria-label="Fechar pesquisa">
                                <i class="bi bi-x-lg"></i>
                            </button>

                            <ul class="dropdown-menu w-100 mt-2">
                                <li><a class="dropdown-item" href="#">Registo de estudantes</a></li>
                                <li><a class="dropdown-item" href="#">Gestão de cursos</a></li>
                                <li><a class="dropdown-item" href="#">Grade Submission</a></li>
                                <li><a class="dropdown-item" href="#">Diretório do corpo docente</a></li>
                                <li><a class="dropdown-item" href="#">Recursos da biblioteca</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Pesquisa avançada</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light btn-icon position-relative" data-bs-toggle="dropdown"
                            id="notificationsToggle" aria-label="Notificações">
                            <i class="bi bi-bell"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                style="font-size: 0.6rem;">3</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="width: 320px;">
                            <li class="dropdown-header d-flex align-items-center justify-content-between">
                                <span>Notificações</span>
                                <small class="text-muted">3 novas</small>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-calendar-check text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="fw-semibold">Novo evento</div>
                                            <div class="text-muted small">Feira de ciência a 15 de março</div>
                                            <div class="text-muted small">Há 5 minutos</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-check-circle text-success"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="fw-semibold">Trabalho submetido</div>
                                            <div class="text-muted small">O John submeteu o trabalho</div>
                                            <div class="text-muted small">Há 2 horas</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-warning bg-opacity-10 p-2 me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-exclamation-triangle text-warning"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="fw-semibold">Alerta do sistema</div>
                                            <div class="text-muted small">Cópia de segurança da base de dados concluída</div>
                                            <div class="text-muted small">Ontem</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item text-center" href="notifications.html">
                                    <small>Ver todas as notificações</small>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Quick Actions -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light btn-icon" data-bs-toggle="dropdown"
                            aria-label="Ações rápidas">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="add-student.html"><i
                                        class="bi bi-person-plus me-2"></i>Adicionar estudante</a></li>
                            <li><a class="dropdown-item" href="add-course.html"><i class="bi bi-book me-2"></i>Adicionar
                                    curso</a></li>
                            <li><a class="dropdown-item" href="add-professor.html"><i
                                        class="bi bi-person-badge me-2"></i>Adicionar professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Agendar
                                    evento</a></li>
                        </ul>
                    </div>

                    <!-- User Menu -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light d-flex align-items-center" data-bs-toggle="dropdown"
                            aria-label="Menu da conta de Sarah Johnson">
                            <span class="user-avatar me-2">
                                SJ
                            </span>
                            <span class="d-none d-md-inline">Sarah Johnson</span>
                            <i class="bi bi-chevron-down ms-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Configurações</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Centro de
                                    ajuda</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Terminar sessão</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="dashboard-content" id="main-content">
            <div class="container-fluid">
                <!-- Breadcrumb -->
                <nav aria-label="Navegação estrutural" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="bi bi-house-door"></i>
                                <span>Página inicial</span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#charts">Gráficos</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Gráficos Sparkline</li>
                    </ol>
                </nav>

                <!-- Page Header -->
                <div class="page-header mb-4">
                    <h1 class="h3 font-bold mb-2">Gráficos Sparkline</h1>
                    <p class="text-muted">Gráficos compactos para consultar rapidamente tendências e indicadores</p>
                </div>

                <!-- Key Performance Metrics Section -->
                <div class="section-header">
                    <h2 class="section-title">Principais indicadores de desempenho</h2>
                    <p class="section-subtitle">Indicadores em tempo real com tendências</p>
                </div>

                <div class="sparkline-grid">
                    <!-- Total Students -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Total de estudantes</div>
                                <div class="sparkline-value">1,234</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +12%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="studentsSparkline"></canvas>
                        </div>
                    </div>

                    <!-- Course Completion -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Conclusão de cursos</div>
                                <div class="sparkline-value">87%</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +8%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="completionSparkline"></canvas>
                        </div>
                    </div>

                    <!-- Revenue -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Receita</div>
                                <div class="sparkline-value">$45.2K</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +15%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="revenueSparkline"></canvas>
                        </div>
                    </div>

                    <!-- Active Professors -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Professores ativos</div>
                                <div class="sparkline-value">89</div>
                            </div>
                            <span class="sparkline-trend trend-down">
                                <i class="bi bi-arrow-down"></i> -3%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="professorsSparkline"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Academic Performance Section -->
                <div class="section-header">
                    <h2 class="section-title">Desempenho académico</h2>
                    <p class="section-subtitle">Tendências de desempenho dos estudantes</p>
                </div>

                <div class="sparkline-grid">
                    <!-- Average GPA -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Média geral</div>
                                <div class="sparkline-value">3.45</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +0.2
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="gpaSparkline"></canvas>
                        </div>
                    </div>

                    <!-- Attendance Rate -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Taxa de assiduidade</div>
                                <div class="sparkline-value">92%</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +5%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="attendanceSparkline"></canvas>
                        </div>
                    </div>

                    <!-- Assignment Completion -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Conclusão de trabalhos</div>
                                <div class="sparkline-value">94%</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +3%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="assignmentSparkline"></canvas>
                        </div>
                    </div>

                    <!-- Test Scores -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Pontuação média dos testes</div>
                                <div class="sparkline-value">78.5</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +4.2
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="testScoresSparkline"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Financial Overview Section -->
                <div class="section-header">
                    <h2 class="section-title">Resumo financeiro</h2>
                    <p class="section-subtitle">Análise de receitas e custos</p>
                </div>

                <div class="sparkline-grid">
                    <!-- Monthly Tuition -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Propinas mensais</div>
                                <div class="sparkline-value">$125K</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +18%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="tuitionSparkline"></canvas>
                        </div>
                    </div>

                    <!-- Operational Costs -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Custos operacionais</div>
                                <div class="sparkline-value">$78K</div>
                            </div>
                            <span class="sparkline-trend trend-down">
                                <i class="bi bi-arrow-down"></i> -7%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="costsSparkline"></canvas>
                        </div>
                    </div>

                    <!-- Net Profit -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Lucro líquido</div>
                                <div class="sparkline-value">$47K</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +25%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="profitSparkline"></canvas>
                        </div>
                    </div>

                    <!-- Scholarships -->
                    <div class="sparkline-card">
                        <div class="sparkline-header">
                            <div class="sparkline-info">
                                <div class="sparkline-label">Bolsas de estudo</div>
                                <div class="sparkline-value">$15.3K</div>
                            </div>
                            <span class="sparkline-trend trend-up">
                                <i class="bi bi-arrow-up"></i> +10%
                            </span>
                        </div>
                        <div class="sparkline-chart-wrapper">
                            <canvas id="scholarshipsSparkline"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="dashboard-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; 2026 sgSchool. Todos os direitos reservados.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="mb-0">Criado com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Sparkline configuration - fully responsive
    const sparklineOptions = {
        responsive: true,
        maintainAspectRatio: false, // Allow chart to fill container
        animation: {
            duration: 1000,
            easing: 'easeInOutQuart'
        },
        layout: {
            padding: {
                top: 5,
                right: 5,
                bottom: 5,
                left: 5
            }
        },
        scales: {
            x: {
                display: false,
                grid: { display: false }
            },
            y: {
                display: false,
                grid: { display: false },
                beginAtZero: false
            }
        },
        plugins: {
            legend: { display: false },
            tooltip: {
                enabled: true,
                backgroundColor: 'rgba(0,0,0,0.8)',
                padding: 8,
                cornerRadius: 6,
                displayColors: false,
                callbacks: {
                    title: () => '',
                    label: (context) => {
                        return context.parsed.y.toFixed(1);
                    }
                }
            }
        },
        elements: {
            point: {
                radius: 0,
                hitRadius: 10,
                hoverRadius: 3
            },
            line: {
                borderWidth: 2.5,
                tension: 0.4
            }
        },
        interaction: {
            intersect: false,
            mode: 'index'
        }
    };

    // Generate sample sparkline data
    function generateSparklineData(trend = 'up', points = 30, volatility = 0.3) {
        const data = [];
        let value = Math.random() * 50 + 25;

        for (let i = 0; i < points; i++) {
            const change = (Math.random() - 0.5) * volatility * 10;
            const trendChange = trend === 'up' ? 0.3 : -0.3;
            value = Math.max(5, Math.min(95, value + change + trendChange));
            data.push(Math.round(value));
        }

        return data;
    }

    // Initialize sparkline charts
    const sparklines = [
        { id: 'studentsSparkline', color: '#4361ee', trend: 'up' },
        { id: 'completionSparkline', color: '#06d6a0', trend: 'up' },
        { id: 'revenueSparkline', color: '#f72585', trend: 'up' },
        { id: 'professorsSparkline', color: '#ffa726', trend: 'down' },
        { id: 'gpaSparkline', color: '#4cc9f0', trend: 'up' },
        { id: 'attendanceSparkline', color: '#06d6a0', trend: 'up' },
        { id: 'assignmentSparkline', color: '#7209b7', trend: 'up' },
        { id: 'testScoresSparkline', color: '#3a0ca3', trend: 'up' },
        { id: 'tuitionSparkline', color: '#4361ee', trend: 'up' },
        { id: 'costsSparkline', color: '#f72585', trend: 'down' },
        { id: 'profitSparkline', color: '#06d6a0', trend: 'up' },
        { id: 'scholarshipsSparkline', color: '#ffa726', trend: 'up' }
    ];

    sparklines.forEach(sparkline => {
        const canvas = document.getElementById(sparkline.id);
        if (canvas) {
            const ctx = canvas.getContext('2d');
            const gradient = ctx.createLinearGradient(0, 0, 0, 60);
            gradient.addColorStop(0, sparkline.color + '40');
            gradient.addColorStop(1, sparkline.color + '00');

            new Chart(canvas, {
                type: 'line',
                data: {
                    labels: Array.from({length: 30}, (_, i) => i),
                    datasets: [{
                        data: generateSparklineData(sparkline.trend),
                        borderColor: sparkline.color,
                        backgroundColor: gradient,
                        fill: true
                    }]
                },
                options: sparklineOptions
            });
        }
    });

    // Auto-refresh sparklines every 15 seconds
    setInterval(() => {
        sparklines.forEach(sparkline => {
            const canvas = document.getElementById(sparkline.id);
            if (canvas) {
                const chart = Chart.getChart(canvas);
                if (chart) {
                    const lastValue = chart.data.datasets[0].data[29];
                    const trendDirection = sparkline.trend === 'up' ? 0.2 : -0.2;
                    const newValue = Math.max(5, Math.min(95, lastValue + (Math.random() - 0.5) * 8 + trendDirection));

                    chart.data.datasets[0].data.push(Math.round(newValue));
                    chart.data.datasets[0].data.shift();
                    chart.update('none');
                }
            }
        });
    }, 15000);

    // Handle window resize to ensure charts fill their containers
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            sparklines.forEach(sparkline => {
                const canvas = document.getElementById(sparkline.id);
                if (canvas) {
                    const chart = Chart.getChart(canvas);
                    if (chart) {
                        chart.resize();
                    }
                }
            });
        }, 250);
    });
});
    </script>

    <!-- Load JavaScript -->





</body>

</html>