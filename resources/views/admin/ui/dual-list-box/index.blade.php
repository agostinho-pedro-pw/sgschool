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

    <title>Caixa de lista dupla - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
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
                        <li class="breadcrumb-item active">Caixa de lista dupla</li>
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
                    <h1 class="h3 font-bold">Caixa de lista dupla</h1>
                    <p class="text-muted text-sm">Transfira elementos entre listas com funcionalidades avançadas</p>
                </div>

                <!-- Dual List Box Content -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <!-- Basic Dual List Box -->
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title mb-0">Atribuição de cursos</h5>
                                <p class="text-muted small mb-0">Selecione e atribua cursos aos estudantes</p>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h6 class="mb-3">Cursos disponíveis</h6>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" id="searchLeft"
                                                placeholder="Pesquisar cursos disponíveis...">
                                        </div>
                                        <select id="leftList" class="form-select" size="10" multiple>
                                            <option value="cs101">CS 101 - Introdução à programação</option>
                                            <option value="cs201">CS 201 - Estruturas de Dados</option>
                                            <option value="cs301">CS 301 - Algoritmos</option>
                                            <option value="math101">MATH 101 - Cálculo I</option>
                                            <option value="math201">MATH 201 - Cálculo II</option>
                                            <option value="phys101">PHYS 101 - Física I</option>
                                            <option value="phys201">PHYS 201 - Física II</option>
                                            <option value="chem101">CHEM 101 - Química Geral</option>
                                            <option value="eng101">ENG 101 - Composição em Inglês</option>
                                            <option value="hist101">HIST 101 - História Mundial</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2 d-flex flex-column justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary mb-2" id="moveRight"
                                            aria-label="Seguinte">
                                            <i aria-hidden="true" class="bi bi-chevron-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary mb-2" id="moveAllRight"
                                            aria-label="Seta dupla para a direita">
                                            <i aria-hidden="true" class="bi bi-chevron-double-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary mb-2" id="moveLeft"
                                            aria-label="Anterior">
                                            <i aria-hidden="true" class="bi bi-chevron-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary" id="moveAllLeft"
                                            aria-label="Seta dupla para a esquerda">
                                            <i aria-hidden="true" class="bi bi-chevron-double-left"></i>
                                        </button>
                                    </div>

                                    <div class="col-md-5">
                                        <h6 class="mb-3">Cursos selecionados</h6>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" id="searchRight"
                                                placeholder="Pesquisar cursos selecionados...">
                                        </div>
                                        <select id="rightList" class="form-select" size="10" multiple>
                                            <!-- Selected items will appear here -->
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="button" class="btn btn-success me-2">
                                        <i class="bi bi-check-circle me-2"></i>Guardar trabalho
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="resetLists()">
                                        <i class="bi bi-arrow-clockwise me-2"></i>Repor
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advanced Dual List Box -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title mb-0">Atribuição de funções aos estudantes</h5>
                                <p class="text-muted small mb-0">Faça a gestão das funções e permissões dos estudantes</p>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h6 class="mb-3">Funções disponíveis</h6>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" id="searchRolesLeft"
                                                placeholder="Pesquisar funções disponíveis...">
                                        </div>
                                        <select id="rolesLeftList" class="form-select" size="8" multiple>
                                            <option value="student" data-category="basic">Estudante</option>
                                            <option value="teaching_assistant" data-category="advanced">Teaching
                                                Assistant</option>
                                            <option value="tutor" data-category="advanced">Explicador</option>
                                            <option value="lab_assistant" data-category="advanced">Assistente de laboratório
                                            </option>
                                            <option value="study_group_leader" data-category="leadership">Study Group
                                                Leader</option>
                                            <option value="class_representative" data-category="leadership">Class
                                                Representative</option>
                                            <option value="peer_mentor" data-category="mentoring">Mentor de pares</option>
                                            <option value="student_ambassador" data-category="special">Student
                                                Ambassador</option>
                                        </select>
                                        <div class="mt-2">
                                            <small class="text-muted">
                                                <span class="badge bg-light text-dark me-1">Basic</span>
                                                <span class="badge bg-primary me-1">Avançado</span>
                                                <span class="badge bg-success me-1">Leadership</span>
                                                <span class="badge bg-info me-1">Mentoring</span>
                                                <span class="badge bg-warning text-dark">Especial</span>
                                            </small>
                                        </div>
                                    </div>

                                    <div class="col-md-2 d-flex flex-column justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary mb-2" id="moveRoleRight"
                                            aria-label="Seguinte">
                                            <i aria-hidden="true" class="bi bi-chevron-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary mb-2" id="moveAllRoleRight"
                                            aria-label="Seta dupla para a direita">
                                            <i aria-hidden="true" class="bi bi-chevron-double-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary mb-2" id="moveRoleLeft"
                                            aria-label="Anterior">
                                            <i aria-hidden="true" class="bi bi-chevron-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary" id="moveAllRoleLeft"
                                            aria-label="Seta dupla para a esquerda">
                                            <i aria-hidden="true" class="bi bi-chevron-double-left"></i>
                                        </button>
                                    </div>

                                    <div class="col-md-5">
                                        <h6 class="mb-3">Funções atribuídas</h6>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" id="searchRolesRight"
                                                placeholder="Pesquisar funções atribuídas...">
                                        </div>
                                        <select id="rolesRightList" class="form-select" size="8" multiple>
                                            <!-- Selected roles will appear here -->
                                        </select>
                                        <div class="mt-2">
                                            <small class="text-success">
                                                <i class="bi bi-info-circle me-1"></i>
                                                As funções selecionadas serão aplicadas ao perfil do estudante
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 d-flex justify-content-between align-items-center">
                                    <div>
                                        <button type="button" class="btn btn-success me-2">
                                            <i class="bi bi-person-check me-2"></i>Aplicar funções
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" onclick="resetRoles()">
                                            <i class="bi bi-arrow-clockwise me-2"></i>Repor
                                        </button>
                                    </div>
                                    <div>
                                        <small class="text-muted">
                                            <span id="selectedRoleCount">0</span> funções selecionadas
                                        </small>
                                    </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Basic Dual List Box functionality
            const leftList = document.getElementById('leftList');
            const rightList = document.getElementById('rightList');
            const searchLeft = document.getElementById('searchLeft');
            const searchRight = document.getElementById('searchRight');

            // Move items functions
            document.getElementById('moveRight').addEventListener('click', function() {
                moveSelectedItems(leftList, rightList);
            });

            document.getElementById('moveLeft').addEventListener('click', function() {
                moveSelectedItems(rightList, leftList);
            });

            document.getElementById('moveAllRight').addEventListener('click', function() {
                moveAllItems(leftList, rightList);
            });

            document.getElementById('moveAllLeft').addEventListener('click', function() {
                moveAllItems(rightList, leftList);
            });

            // Roles Dual List Box functionality
            const rolesLeftList = document.getElementById('rolesLeftList');
            const rolesRightList = document.getElementById('rolesRightList');
            const searchRolesLeft = document.getElementById('searchRolesLeft');
            const searchRolesRight = document.getElementById('searchRolesRight');

            document.getElementById('moveRoleRight').addEventListener('click', function() {
                moveSelectedItems(rolesLeftList, rolesRightList);
                updateRoleCount();
            });

            document.getElementById('moveRoleLeft').addEventListener('click', function() {
                moveSelectedItems(rolesRightList, rolesLeftList);
                updateRoleCount();
            });

            document.getElementById('moveAllRoleRight').addEventListener('click', function() {
                moveAllItems(rolesLeftList, rolesRightList);
                updateRoleCount();
            });

            document.getElementById('moveAllRoleLeft').addEventListener('click', function() {
                moveAllItems(rolesRightList, rolesLeftList);
                updateRoleCount();
            });

            // Search functionality
            searchLeft.addEventListener('input', function() {
                filterList(leftList, this.value);
            });

            searchRight.addEventListener('input', function() {
                filterList(rightList, this.value);
            });

            searchRolesLeft.addEventListener('input', function() {
                filterList(rolesLeftList, this.value);
            });

            searchRolesRight.addEventListener('input', function() {
                filterList(rolesRightList, this.value);
            });

            // Helper functions
            function moveSelectedItems(fromList, toList) {
                const selectedOptions = Array.from(fromList.selectedOptions);
                selectedOptions.forEach(option => {
                    toList.appendChild(option);
                });
            }

            function moveAllItems(fromList, toList) {
                Array.from(fromList.options).forEach(option => {
                    toList.appendChild(option);
                });
            }

            function filterList(list, searchTerm) {
                Array.from(list.options).forEach(option => {
                    const text = option.textContent.toLowerCase();
                    const matches = text.includes(searchTerm.toLowerCase());
                    option.style.display = matches ? '' : 'none';
                });
            }

            function updateRoleCount() {
                const count = rolesRightList.options.length;
                document.getElementById('selectedRoleCount').textContent = count;
            }

            // Double-click to move items
            leftList.addEventListener('dblclick', function() {
                moveSelectedItems(leftList, rightList);
            });

            rightList.addEventListener('dblclick', function() {
                moveSelectedItems(rightList, leftList);
            });

            rolesLeftList.addEventListener('dblclick', function() {
                moveSelectedItems(rolesLeftList, rolesRightList);
                updateRoleCount();
            });

            rolesRightList.addEventListener('dblclick', function() {
                moveSelectedItems(rolesRightList, rolesLeftList);
                updateRoleCount();
            });

            // Initialize role count
            updateRoleCount();
        });

        // Reset functions
        function resetLists() {
            const leftList = document.getElementById('leftList');
            const rightList = document.getElementById('rightList');

            // Move all items back to left list
            Array.from(rightList.options).forEach(option => {
                leftList.appendChild(option);
            });

            // Clear search fields
            document.getElementById('searchLeft').value = '';
            document.getElementById('searchRight').value = '';
        }

        function resetRoles() {
            const rolesLeftList = document.getElementById('rolesLeftList');
            const rolesRightList = document.getElementById('rolesRightList');

            // Move all roles back to left list
            Array.from(rolesRightList.options).forEach(option => {
                rolesLeftList.appendChild(option);
            });

            // Clear search fields
            document.getElementById('searchRolesLeft').value = '';
            document.getElementById('searchRolesRight').value = '';

            // Update count
            document.getElementById('selectedRoleCount').textContent = '0';
        }
    </script>

    <!-- Load JavaScript -->




</body>

</html>