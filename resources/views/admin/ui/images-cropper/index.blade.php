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

    <title>Recorte de imagens - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/images-cropper-BFg6zhqM.js') }}"></script>
    <link rel="modulepreload" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
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
    <!-- Cropper.js v2 needs no external stylesheet: its elements style themselves via shadow DOM. -->



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
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#formsSubmenu" aria-expanded="true">
                            <i class="bi bi-card-list"></i>
                            <span>Formulários</span>
                        </a>
                        <ul id="formsSubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link " href="basic-form-element.html">Formulários básicos</a></li>
                            <li><a class="nav-link " href="advance-form-element.html">Formulários avançados</a></li>
                            <li><a class="nav-link " href="password-meter.html">Indicador de segurança da palavra-passe</a></li>
                            <li><a class="nav-link " href="multi-upload.html">Carregamento de ficheiros</a></li>
                            <li><a class="nav-link active" href="images-cropper.html">Recortador de imagens</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#chartsSubmenu" aria-expanded="false">
                            <i class="bi bi-bar-chart"></i>
                            <span>Gráficos</span>
                        </a>
                        <ul id="chartsSubmenu" class="submenu collapse  list-unstyled">
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
                        <li class="breadcrumb-item active">Recorte de imagens</li>
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
                    <h1 class="h3 font-bold">Recortador de imagens</h1>
                    <p class="text-muted text-sm">Ferramentas avançadas para recortar e editar imagens</p>
                </div>

                <!-- Image Cropper Content -->
                <div class="dashboard-row">
                    <!-- Image Upload and Basic Cropping -->
                    <div class="dashboard-grid grid-cols-1">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title mb-0">Carregamento e recorte de imagens</h5>
                                <p class="text-muted small">Carregue uma imagem e recorte-a com vários formatos</p>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <!-- Image Container -->
                                        <div class="text-center mb-3">
                                            <div class="crop-container" style="max-height: 400px; overflow: hidden;">
                                                <img src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                                    alt="Imagem de exemplo" id="cropperImage" class="img-fluid"
                                                    loading="lazy" decoding="async">
                                            </div>
                                        </div>

                                        <!-- Upload New Image -->
                                        <div class="mb-3">
                                            <label for="imageUpload" class="form-label fw-semibold">Carregar nova
                                                imagem</label>
                                            <input type="file" class="form-control" id="imageUpload" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- Crop Controls -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0">Controlos de recorte</h6>
                                            </div>
                                            <div class="card-body">
                                                <!-- Aspect Ratios -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">Proporção</label>
                                                    <div class="btn-group-vertical w-100" role="group">
                                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                                            onclick="setAspectRatio(NaN)">Livre</button>
                                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                                            onclick="setAspectRatio(1)">1:1 (Quadrado)</button>
                                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                                            onclick="setAspectRatio(4/3)">4:3</button>
                                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                                            onclick="setAspectRatio(16/9)">16:9</button>
                                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                                            onclick="setAspectRatio(2/3)">2:3 (Retrato)</button>
                                                    </div>
                                                </div>

                                                <!-- Crop Actions -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">Ações</label>
                                                    <div class="d-grid gap-2">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            onclick="getCroppedImage()">
                                                            <i class="bi bi-crop me-1"></i>Obter imagem recortada
                                                        </button>
                                                        <button type="button" class="btn btn-info btn-sm"
                                                            onclick="downloadCroppedImage()">
                                                            <i class="bi bi-download me-1"></i>Transferir
                                                        </button>
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            onclick="resetCropper()">
                                                            <i class="bi bi-arrow-clockwise me-1"></i>Repor
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Transform Controls -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">Transformar</label>
                                                    <div class="btn-group w-100 mb-2" role="group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                                            onclick="rotateCropper(-90)" title="Rodar para a esquerda"
                                                            aria-label="Rodar para a esquerda">
                                                            <i aria-hidden="true"
                                                                class="bi bi-arrow-counterclockwise"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                                            onclick="rotateCropper(90)" title="Rodar para a direita"
                                                            aria-label="Rodar para a direita">
                                                            <i aria-hidden="true" class="bi bi-arrow-clockwise"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                                            onclick="flipCropper('horizontal')" title="Inverter horizontalmente"
                                                            aria-label="Inverter horizontalmente">
                                                            <i aria-hidden="true" class="bi bi-arrows-expand"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                                            onclick="flipCropper('vertical')" title="Inverter verticalmente"
                                                            aria-label="Inverter verticalmente">
                                                            <i aria-hidden="true" class="bi bi-arrows-collapse"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Zoom Controls -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">Zoom</label>
                                                    <div class="btn-group w-100" role="group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                                            onclick="zoomCropper(-0.1)" title="Reduzir"
                                                            aria-label="Reduzir">
                                                            <i aria-hidden="true" class="bi bi-zoom-out"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                                            onclick="zoomCropper(0.1)" title="Ampliar"
                                                            aria-label="Ampliar">
                                                            <i aria-hidden="true" class="bi bi-zoom-in"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-2">
                        <!-- Cropped Result Preview -->
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title mb-0">Resultado do recorte</h5>
                                <p class="text-muted small">Pré-visualização da imagem recortada</p>
                            </div>
                            <div class="dashboard-card-body text-center">
                                <div id="croppedResult" class="border rounded p-3 bg-light" style="min-height: 200px;">
                                    <p class="text-muted mb-0">
                                        <i class="bi bi-image" style="font-size: 3rem;"></i><br>
                                        A imagem recortada aparecerá aqui
                                    </p>
                                </div>
                                <div class="mt-3">
                                    <small class="text-muted" id="cropInfo">Ainda não foi aplicado nenhum recorte</small>
                                </div>
                            </div>
                        </div>

                        <!-- Preset Crops -->
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title mb-0">Recortes predefinidos</h5>
                                <p class="text-muted small">Predefinições de recorte para utilizações comuns</p>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-outline-primary w-100"
                                            onclick="applyCropPreset('avatar')">
                                            <i class="bi bi-person-circle me-2"></i>Avatar<br>
                                            <small>200x200</small>
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-outline-primary w-100"
                                            onclick="applyCropPreset('cover')">
                                            <i class="bi bi-image me-2"></i>Capa<br>
                                            <small>1200x630</small>
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-outline-primary w-100"
                                            onclick="applyCropPreset('thumbnail')">
                                            <i class="bi bi-grid-3x3 me-2"></i>Thumbnail<br>
                                            <small>300x200</small>
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-outline-primary w-100"
                                            onclick="applyCropPreset('banner')">
                                            <i class="bi bi-rectangle me-2"></i>Faixa<br>
                                            <small>1920x400</small>
                                        </button>
                                    </div>
                                </div>

                                <hr>

                                <div class="alert alert-info">
                                    <i class="bi bi-info-circle me-2"></i>
                                    <strong>Dicas:</strong><br>
                                    • Arraste para mover a área de recorte<br>
                                    • Arraste os cantos/bordas para redimensionar<br>
                                    • Utilize a roda do rato para ajustar o zoom<br>
                                    • Faça duplo clique para repor o zoom
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Export Options -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title mb-0">Opções de exportação</h5>
                                <p class="text-muted small">Exporte a imagem recortada em diferentes formatos e qualidades
                                </p>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label fw-semibold">Formato de saída</label>
                                            <select class="form-select" id="exportFormat">
                                                <option value="image/png">PNG (melhor qualidade)</option>
                                                <option value="image/jpeg" selected>JPEG (tamanho menor)</option>
                                                <option value="image/webp">WebP (formato moderno)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label fw-semibold">Qualidade (JPEG/WebP)</label>
                                            <input type="range" class="form-range" id="exportQuality" min="0.1" max="1"
                                                step="0.1" value="0.9">
                                            <div class="d-flex justify-content-between">
                                                <small class="text-muted">Reduzido</small>
                                                <small class="text-muted" id="qualityValue">90%</small>
                                                <small class="text-muted">Elevado</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label fw-semibold">Tamanho de saída</label>
                                            <select class="form-select" id="exportSize">
                                                <option value="original">Tamanho original</option>
                                                <option value="small">Pequeno (25%)</option>
                                                <option value="medium">Médio (50%)</option>
                                                <option value="large">Grande (75%)</option>
                                                <option value="custom">Tamanho personalizado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="customSizeInputs" style="display: none;">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label fw-semibold">Largura (px)</label>
                                            <input type="number" class="form-control" id="customWidth" min="1"
                                                placeholder="Largura">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label fw-semibold">Altura (px)</label>
                                            <input type="number" class="form-control" id="customHeight" min="1"
                                                placeholder="Altura">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-success" onclick="exportWithOptions()">
                                        <i class="bi bi-download me-2"></i>Exportar com opções
                                    </button>
                                    <button type="button" class="btn btn-outline-info ms-2" onclick="exportMultiple()">
                                        <i class="bi bi-files me-2"></i>Exportar em vários formatos
                                    </button>
                                </div>
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

    <!-- Cropper.js v2 (web components; the v1 `new Cropper(img, options)` API is gone) -->

    <!-- Load JavaScript -->




</body>

</html>