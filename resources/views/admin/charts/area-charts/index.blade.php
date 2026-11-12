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

    <title>Gráficos de área - Painel sgSchool</title>

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
                            <li><a class="nav-link " href="analytics.html">Análise de dados</a></li>
                            <li><a class="nav-link " href="widgets.html">Elementos</a></li>
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
                            <li><a class="nav-link active" href="area-charts.html">Gráficos de área</a></li>
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
                        <li class="breadcrumb-item active">Gráficos de área</li>
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
                <!-- Page Header -->
                <div class="mb-3">
                    <h1 class="h3 font-bold">Gráficos de área</h1>
                    <p class="text-muted text-sm">Visualizações interativas de gráficos de área que apresentam dados
                        acumulados e tendências em áreas preenchidas.</p>
                </div>

                <!-- Area Charts Content Row -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-2">
                        <!-- Student Registration Trends -->
                        <div class="chart-wrapper">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title">Tendências de registo dos estudantes</h5>
                            </div>
                            <div class="chart-container-main">
                                <canvas id="registrationChart"></canvas>
                            </div>
                        </div>

                        <!-- Course Completion Rates -->
                        <div class="chart-wrapper">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title">Taxas de conclusão dos cursos</h5>
                            </div>
                            <div class="chart-container-main">
                                <canvas id="completionChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Revenue and Budget Analysis Row -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-2">
                        <!-- Cumulative Revenue -->
                        <div class="chart-wrapper">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title">Crescimento acumulado da receita</h5>
                            </div>
                            <div class="chart-container-main">
                                <canvas id="cumulativeRevenueChart"></canvas>
                            </div>
                        </div>

                        <!-- Department Budget Usage -->
                        <div class="chart-wrapper">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title">Utilização do orçamento por departamento</h5>
                            </div>
                            <div class="chart-container-main">
                                <canvas id="budgetUsageChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Full Width Performance Chart -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="chart-wrapper">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title">Desempenho académico ao longo do tempo, por departamento</h5>
                            </div>
                            <div class="chart-container-main">
                                <canvas id="performanceAreaChart"></canvas>
                            </div>
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
        // Sample data for area charts
        const registrationData = {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            datasets: [{
                label: 'Novos estudantes',
                data: [120, 145, 165, 180, 220, 250, 280, 320, 290, 270, 240, 220],
                backgroundColor: 'rgba(0, 123, 255, 0.3)',
                borderColor: '#007bff',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Estudantes regressados',
                data: [80, 95, 110, 125, 140, 155, 170, 185, 200, 210, 195, 180],
                backgroundColor: 'rgba(40, 167, 69, 0.3)',
                borderColor: '#28a745',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }]
        };

        const completionData = {
            labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4', 'Semana 5', 'Semana 6', 'Semana 7', 'Semana 8'],
            datasets: [{
                label: 'Ciência Informática',
                data: [15, 28, 42, 58, 72, 85, 92, 95],
                backgroundColor: 'rgba(0, 123, 255, 0.4)',
                borderColor: '#007bff',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Engenharia',
                data: [12, 24, 38, 52, 68, 80, 88, 93],
                backgroundColor: 'rgba(40, 167, 69, 0.4)',
                borderColor: '#28a745',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Gestão',
                data: [18, 32, 45, 60, 75, 87, 94, 97],
                backgroundColor: 'rgba(255, 193, 7, 0.4)',
                borderColor: '#ffc107',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }]
        };

        const cumulativeRevenueData = {
            labels: ['T1', 'T2', 'T3', 'T4'],
            datasets: [{
                label: 'Receita de propinas',
                data: [450000, 920000, 1380000, 1850000],
                backgroundColor: 'rgba(0, 123, 255, 0.3)',
                borderColor: '#007bff',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Taxas adicionais',
                data: [65000, 135000, 205000, 275000],
                backgroundColor: 'rgba(102, 16, 242, 0.3)',
                borderColor: '#6610f2',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Outras receitas',
                data: [25000, 55000, 85000, 115000],
                backgroundColor: 'rgba(23, 162, 184, 0.3)',
                borderColor: '#17a2b8',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }]
        };

        const budgetUsageData = {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            datasets: [{
                label: 'Ciência Informática',
                data: [25000, 48000, 72000, 95000, 118000, 142000, 165000, 188000, 210000, 232000, 254000, 275000],
                backgroundColor: 'rgba(0, 123, 255, 0.3)',
                borderColor: '#007bff',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Engenharia',
                data: [30000, 58000, 87000, 115000, 144000, 172000, 201000, 229000, 258000, 286000, 315000, 343000],
                backgroundColor: 'rgba(40, 167, 69, 0.3)',
                borderColor: '#28a745',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Gestão',
                data: [20000, 38000, 57000, 75000, 94000, 112000, 131000, 149000, 168000, 186000, 205000, 223000],
                backgroundColor: 'rgba(255, 193, 7, 0.3)',
                borderColor: '#ffc107',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }]
        };

        const performanceAreaData = {
            labels: ['2020', '2021', '2022', '2023', '2024'],
            datasets: [{
                label: 'Ciência Informática',
                data: [2200, 2450, 2680, 2890, 3120],
                backgroundColor: 'rgba(0, 123, 255, 0.3)',
                borderColor: '#007bff',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Engenharia',
                data: [1800, 2100, 2350, 2580, 2820],
                backgroundColor: 'rgba(40, 167, 69, 0.3)',
                borderColor: '#28a745',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Gestão',
                data: [1500, 1750, 1980, 2200, 2450],
                backgroundColor: 'rgba(255, 193, 7, 0.3)',
                borderColor: '#ffc107',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Artes e Ciências',
                data: [1200, 1380, 1550, 1720, 1900],
                backgroundColor: 'rgba(220, 53, 69, 0.3)',
                borderColor: '#dc3545',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }, {
                label: 'Medicina',
                data: [800, 920, 1050, 1180, 1320],
                backgroundColor: 'rgba(111, 66, 193, 0.3)',
                borderColor: '#6f42c1',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }]
        };

        // Chart configuration options for area charts
        const areaChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
                tooltip: {
                    backgroundColor: 'rgba(0,0,0,0.8)',
                    titleColor: 'white',
                    bodyColor: 'white',
                    borderColor: '#dee2e6',
                    borderWidth: 1,
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    stacked: false,
                    grid: {
                        color: 'rgba(0,0,0,0.1)'
                    },
                    ticks: {
                        color: '#6c757d'
                    }
                },
                x: {
                    grid: {
                        color: 'rgba(0,0,0,0.1)'
                    },
                    ticks: {
                        color: '#6c757d'
                    }
                }
            },
            interaction: {
                mode: 'index',
                intersect: false,
            },
            elements: {
                line: {
                    borderWidth: 2
                },
                point: {
                    radius: 4,
                    hoverRadius: 6
                }
            }
        };

        // Initialize area charts when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Student Registration Chart
            const registrationCtx = document.getElementById('registrationChart').getContext('2d');
            const registrationChart = new Chart(registrationCtx, {
                type: 'line',
                data: registrationData,
                options: areaChartOptions
            });

            // Course Completion Chart
            const completionCtx = document.getElementById('completionChart').getContext('2d');
            const completionChart = new Chart(completionCtx, {
                type: 'line',
                data: completionData,
                options: {
                    ...areaChartOptions,
                    scales: {
                        ...areaChartOptions.scales,
                        y: {
                            ...areaChartOptions.scales.y,
                            max: 100,
                            ticks: {
                                ...areaChartOptions.scales.y.ticks,
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    }
                }
            });

            // Cumulative Revenue Chart
            const cumulativeRevenueCtx = document.getElementById('cumulativeRevenueChart').getContext('2d');
            const cumulativeRevenueChart = new Chart(cumulativeRevenueCtx, {
                type: 'line',
                data: cumulativeRevenueData,
                options: {
                    ...areaChartOptions,
                    scales: {
                        ...areaChartOptions.scales,
                        y: {
                            ...areaChartOptions.scales.y,
                            stacked: true,
                            ticks: {
                                ...areaChartOptions.scales.y.ticks,
                                callback: function(value) {
                                    return '$' + (value / 1000) + 'K';
                                }
                            }
                        }
                    }
                }
            });

            // Budget Usage Chart
            const budgetUsageCtx = document.getElementById('budgetUsageChart').getContext('2d');
            const budgetUsageChart = new Chart(budgetUsageCtx, {
                type: 'line',
                data: budgetUsageData,
                options: {
                    ...areaChartOptions,
                    scales: {
                        ...areaChartOptions.scales,
                        y: {
                            ...areaChartOptions.scales.y,
                            ticks: {
                                ...areaChartOptions.scales.y.ticks,
                                callback: function(value) {
                                    return '$' + (value / 1000) + 'K';
                                }
                            }
                        }
                    }
                }
            });

            // Performance Area Chart
            const performanceAreaCtx = document.getElementById('performanceAreaChart').getContext('2d');
            const performanceAreaChart = new Chart(performanceAreaCtx, {
                type: 'line',
                data: performanceAreaData,
                options: areaChartOptions
            });
        });
    </script>

    <!-- Load JavaScript -->





</body>

</html>