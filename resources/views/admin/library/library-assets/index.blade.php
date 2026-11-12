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

    <title>Recursos da biblioteca - Painel sgSchool</title>

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

        .asset-card {
            background: #fff;
            border: none;
            border-radius: 12px;
            transition: transform .2s, box-shadow .2s;
            overflow: hidden;
            box-shadow: 0 1px 3px #0000001a
        }

        .asset-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px #00000026
        }

        .asset-image {
            object-fit: cover;
            border-radius: 8px 8px 0 0;
            height: 200px
        }

        .asset-status {
            border-radius: 12px;
            padding: .25rem .75rem;
            font-size: .75rem
        }

        .assets-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
            display: grid
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
                <button type="button" class="sidebar-close" id="sidebarClose" aria-label="Fechar menu lateral">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>

        <nav class="sidebar-nav" aria-label="Navegação principal">
            <div class="menu-section">
                <div class="menu-section-title">Início</div>
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
                            <li><a class="nav-link " href="analytics.html">Análises</a></li>
                            <li><a class="nav-link " href="widgets.html">Widgets</a></li>
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
                            <li><a class="nav-link " href="add-student.html">Adicionar Estudante</a></li>
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
                            <li><a class="nav-link " href="add-course.html">Adicionar Curso</a></li>
                            <li><a class="nav-link " href="edit-course.html">Editar curso</a></li>
                            <li><a class="nav-link " href="course-info.html">Informações do curso</a></li>
                            <li><a class="nav-link " href="course-payment.html">Pagamento de cursos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#librarySubmenu" aria-expanded="true">
                            <i class="bi bi-journal-bookmark"></i>
                            <span>Biblioteca</span>
                        </a>
                        <ul id="librarySubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link active" href="library-assets.html">Recursos da biblioteca</a></li>
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
                            <li><a class="nav-link " href="add-department.html">Adicionar Departamento</a></li>
                            <li><a class="nav-link " href="edit-department.html">Editar Departamento</a></li>
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
                            <li><a class="nav-link " href="mailbox-compose.html">Compor</a></li>
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
                            <li><a class="nav-link " href="modals.html">Janelas modais</a></li>
                            <li><a class="nav-link " href="tabs.html">Separadores</a></li>
                            <li><a class="nav-link " href="accordion.html">Acordeão</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#formsSubmenu" aria-expanded="false">
                            <i class="bi bi-card-list"></i>
                            <span>Formul?rios</span>
                        </a>
                        <ul id="formsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="basic-form-element.html">Formul?rios b?sicos</a></li>
                            <li><a class="nav-link " href="advance-form-element.html">Formulários avançados</a></li>
                            <li><a class="nav-link " href="password-meter.html">Indicador de segurança da palavra-passe</a></li>
                            <li><a class="nav-link " href="multi-upload.html">Carregamento de ficheiros</a></li>
                            <li><a class="nav-link " href="images-cropper.html">Recorte de imagem</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#chartsSubmenu" aria-expanded="false">
                            <i class="bi bi-bar-chart"></i>
                            <span>Charts</span>
                        </a>
                        <ul id="chartsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="line-charts.html">Line Charts</a></li>
                            <li><a class="nav-link " href="area-charts.html">Gráficos de áreas</a></li>
                            <li><a class="nav-link " href="bar-charts.html">Gráficos de barras</a></li>
                            <li><a class="nav-link " href="c3.html">Gráficos C3</a></li>
                            <li><a class="nav-link " href="peity.html">Gráficos Peity</a></li>
                            <li><a class="nav-link " href="rounded-chart.html">Gráficos circulares</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#tablesSubmenu" aria-expanded="false">
                            <i class="bi bi-table"></i>
                            <span>Tables</span>
                        </a>
                        <ul id="tablesSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="static-table.html">Tabelas estáticas</a></li>
                            <li><a class="nav-link " href="data-table.html">Tabelas de dados</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Developer Paraols</div>
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
                            <span>Componentes de interface</span>
                        </a>
                        <ul id="uiToolsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="preloader.html">Preloaders</a></li>
                            <li><a class="nav-link " href="notifications.html">Notificações</a></li>
                            <li><a class="nav-link " href="tree-view.html">Vista em árvore</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#viewersSubmenu" aria-expanded="false">
                            <i class="bi bi-eye"></i>
                            <span>Viewers</span>
                        </a>
                        <ul id="viewersSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="pdf-viewer.html">PDF Viewer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#mapsSubmenu" aria-expanded="false">
                            <i class="bi bi-map"></i>
                            <span>Maps</span>
                        </a>
                        <ul id="mapsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="google-map.html">Interactive Maps</a></li>
                            <li><a class="nav-link " href="data-maps.html">Mapas de dados</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">P?ginas</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#authSubmenu" aria-expanded="false">
                            <i class="bi bi-shield-lock"></i>
                            <span>Authentication</span>
                        </a>
                        <ul id="authSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="login.html">Iniciar sessão</a></li>
                            <li><a class="nav-link " href="register.html">Registar</a></li>
                            <li><a class="nav-link " href="lock.html">Bloquear ecrã</a></li>
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
                <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Mostrar/ocultar menu lateral"
                    aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Breadcrumb for desktop -->
                <nav aria-label="Trilho de navegação" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                        <li class="breadcrumb-item"><a href="#">Académico</a></li>
                        <li class="breadcrumb-item active">Recursos da biblioteca</li>
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
                                <li><a class="dropdown-item" href="#">Submissão de notas</a></li>
                                <li><a class="dropdown-item" href="#">Diretório de professores</a></li>
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
                                            <div class="text-muted small">Feira de ciências a 15 de março</div>
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
                                            <div class="text-muted small">John entregou o seu trabalho</div>
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
                                            <div class="fw-semibold">System Alert</div>
                                            <div class="text-muted small">Cópia de segurança da base de dados concluída</div>
                                            <div class="text-muted small">Yesterday</div>
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
                                        class="bi bi-person-plus me-2"></i>Adicionar Estudante</a></li>
                            <li><a class="dropdown-item" href="add-course.html"><i class="bi bi-book me-2"></i>Adicionar
                                    Curso</a></li>
                            <li><a class="dropdown-item" href="add-professor.html"><i
                                        class="bi bi-person-badge me-2"></i>Adicionar professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Agendar evento</a></li>
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
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Centro de ajuda</a></li>
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
                <div class="dashboard-row">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="page-title">Recursos da biblioteca</h1>
                            <p class="page-description">Faça a gestão e organize os recursos digitais e físicos da biblioteca.</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary">
                                <i class="bi bi-download me-1"></i>
                                Exportarar
                            </button>
                            <a href="add-library-assets.html" class="btn btn-primary">
                                <i class="bi bi-plus-lg me-1"></i>
                                Adicionar recurso
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Search and Filters -->
                <div class="dashboard-row">
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h5 class="dashboard-card-title">Filtrar recursos</h5>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label for="categoryFilter" class="form-label">Categoria</label>
                                    <select class="form-select" id="categoryFilter">
                                        <option value="">Todos Categories</option>
                                        <option value="books">Livros</option>
                                        <option value="journals">Revistas</option>
                                        <option value="digital">Conteúdos digitais</option>
                                        <option value="reference">Obras de refer?ncia</option>
                                        <option value="periodicals">Publicações periódicas</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="statusFilter" class="form-label">Estado</label>
                                    <select class="form-select" id="statusFilter">
                                        <option value="">Todos os estados</option>
                                        <option value="available">Disponível</option>
                                        <option value="checked-out">Emprestado</option>
                                        <option value="reserved">Reservado</option>
                                        <option value="maintenance">Em manutenção</option>
                                        <option value="missing">Em falta</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="locationFilter" class="form-label">Localização</label>
                                    <select class="form-select" id="locationFilter">
                                        <option value="">Todas as localiza??es</option>
                                        <option value="main-library">Biblioteca principal</option>
                                        <option value="science-library">Biblioteca de ciências</option>
                                        <option value="medical-library">Biblioteca médica</option>
                                        <option value="digital-archive">Arquivo digital</option>
                                    </select>
                                </div>
                                <div class="col-md-3 d-flex align-items-end">
                                    <div class="d-flex gap-2 w-100">
                                        <button type="button" class="btn btn-primary flex-grow-1">
                                            <i class="bi bi-funnel me-1"></i>
                                            Filtrar
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" aria-label="Atualizar">
                                            <i aria-hidden="true" class="bi bi-arrow-clockwise"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <div class="text-muted small">
                                        A mostrar 8 de 156 recursos
                                    </div>
                                    <div class="view-toggle btn-group" role="group" aria-label="Ver options">
                                        <input type="radio" class="btn-check" name="viewMode" id="gridView" checked>
                                        <label class="btn btn-outline-secondary btn-sm" for="gridView">
                                            <i class="bi bi-grid-3x2"></i>
                                        </label>
                                        <input type="radio" class="btn-check" name="viewMode" id="listView">
                                        <label class="btn btn-outline-secondary btn-sm" for="listView">
                                            <i class="bi bi-list"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Assets Grid/List -->
                <div class="dashboard-row">
                    <div class="assets-grid" id="assetsContainer">
                        <!-- Asset Card 1 -->
                        <div class="asset-card h-100">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=200&fit=crop&crop=face"
                                class="card-img-top asset-image" alt="Introduction to Ci?ncias Inform?ticas" loading="lazy">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-2">Introduction to Ci?ncias Inform?ticas</h6>
                                <p class="card-text text-muted small mb-2">by Thomas H. Cormen</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="asset-status bg-success-subtle text-success">Disponível</span>
                                    <small class="text-muted">ISBN: 978-0262033848</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>
                                        Biblioteca principal
                                    </small>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip" title="Ver Detalhes" aria-label="Ver Detalhes">
                                            <i aria-hidden="true" class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="Editar" aria-label="Editar">
                                            <i aria-hidden="true" class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-success btn-sm"
                                            data-bs-toggle="tooltip" title="Emprestar" aria-label="Emprestar">
                                            <i aria-hidden="true" class="bi bi-bookmark-check"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Asset Card 2 -->
                        <div class="asset-card h-100">
                            <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=300&h=200&fit=crop"
                                class="card-img-top asset-image" alt="Matem?tica Avan?ada" loading="lazy">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-2">Matem?tica Avan?ada</h6>
                                <p class="card-text text-muted small mb-2">por James Stewart</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="asset-status bg-warning-subtle text-warning">Emprestado</span>
                                    <small class="text-muted">ISBN: 978-1285741550</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>
                                        Biblioteca principal
                                    </small>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip" title="Ver Detalhes" aria-label="Ver Detalhes">
                                            <i aria-hidden="true" class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="Editar" aria-label="Editar">
                                            <i aria-hidden="true" class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-info btn-sm"
                                            data-bs-toggle="tooltip" title="Reservar" aria-label="Reservar">
                                            <i aria-hidden="true" class="bi bi-bookmark-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Asset Card 3 -->
                        <div class="asset-card h-100">
                            <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?w=300&h=200&fit=crop"
                                class="card-img-top asset-image" alt="Fundamentos de F?sica" loading="lazy">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-2">Fundamentos de F?sica</h6>
                                <p class="card-text text-muted small mb-2">por David Halliday</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="asset-status bg-success-subtle text-success">Disponível</span>
                                    <small class="text-muted">ISBN: 978-1118230725</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>
                                        Biblioteca de ci?ncias
                                    </small>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip" title="Ver Detalhes" aria-label="Ver Detalhes">
                                            <i aria-hidden="true" class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="Editar" aria-label="Editar">
                                            <i aria-hidden="true" class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-success btn-sm"
                                            data-bs-toggle="tooltip" title="Emprestar" aria-label="Emprestar">
                                            <i aria-hidden="true" class="bi bi-bookmark-check"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Asset Card 4 -->
                        <div class="asset-card h-100">
                            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=300&h=200&fit=crop"
                                class="card-img-top asset-image" alt="Medical Journal" loading="lazy">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-2">Revista M?dica - Vol. 45</h6>
                                <p class="card-text text-muted small mb-2">Revista Trimestral de Investiga??o em Sa?de</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="asset-status bg-info-subtle text-info">Reservado</span>
                                    <small class="text-muted">ISSN: 1234-5678</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>Biblioteca médica</small>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip" title="Ver Detalhes" aria-label="Ver Detalhes">
                                            <i aria-hidden="true" class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="Editar" aria-label="Editar">
                                            <i aria-hidden="true" class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-info btn-sm"
                                            data-bs-toggle="tooltip" title="Ver reserva"
                                            aria-label="Ver reserva">
                                            <i aria-hidden="true" class="bi bi-bookmark-star"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Asset Card 5 -->
                        <div class="asset-card h-100">
                            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=300&h=200&fit=crop"
                                class="card-img-top asset-image" alt="Digital Media Collection" loading="lazy">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-2">Cole??o de conte?dos digitais</h6>
                                <p class="card-text text-muted small mb-2">Educational Videos &amp; Audio</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="asset-status bg-success-subtle text-success">Disponível</span>
                                    <small class="text-muted">DIG-001</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>
                                        Arquivo digital
                                    </small>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip" title="Ver Detalhes" aria-label="Ver Detalhes">
                                            <i aria-hidden="true" class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="Editar" aria-label="Editar">
                                            <i aria-hidden="true" class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-success btn-sm"
                                            data-bs-toggle="tooltip" title="Access Online" aria-label="Access Online">
                                            <i aria-hidden="true" class="bi bi-play-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Asset Card 6 -->
                        <div class="asset-card h-100">
                            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=300&h=200&fit=crop"
                                class="card-img-top asset-image" alt="Obra de Refer?ncia de Hist?ria" loading="lazy">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-2">Obra de Refer?ncia de Hist?ria Mundial</h6>
                                <p class="card-text text-muted small mb-2">by William J. Duiker</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="asset-status bg-danger-subtle text-danger">Em manutenção</span>
                                    <small class="text-muted">ISBN: 978-1111831664</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>
                                        Biblioteca principal
                                    </small>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip" title="Ver Detalhes" aria-label="Ver Detalhes">
                                            <i aria-hidden="true" class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="Editar" aria-label="Editar">
                                            <i aria-hidden="true" class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-warning btn-sm" disabled
                                            data-bs-toggle="tooltip" title="Em manutenção"
                                            aria-label="Em manutenção">
                                            <i aria-hidden="true" class="bi bi-tools"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Asset Card 7 -->
                        <div class="asset-card h-100">
                            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=300&h=200&fit=crop"
                                class="card-img-top asset-image" alt="Chemistry Textbook" loading="lazy">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-2">Organic Chemistry</h6>
                                <p class="card-text text-muted small mb-2">by Paula Y. Bruice</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="asset-status bg-success-subtle text-success">Disponível</span>
                                    <small class="text-muted">ISBN: 978-0321803221</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>
                                        Biblioteca de ci?ncias
                                    </small>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip" title="Ver Detalhes" aria-label="Ver Detalhes">
                                            <i aria-hidden="true" class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="Editar" aria-label="Editar">
                                            <i aria-hidden="true" class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-success btn-sm"
                                            data-bs-toggle="tooltip" title="Emprestar" aria-label="Emprestar">
                                            <i aria-hidden="true" class="bi bi-bookmark-check"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Asset Card 8 -->
                        <div class="asset-card h-100">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=200&fit=crop&crop=face"
                                class="card-img-top asset-image" alt="Engenharia Handbook" loading="lazy">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-2">Engenharia Handbook</h6>
                                <p class="card-text text-muted small mb-2">by Richard C. Dorf</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="asset-status bg-warning-subtle text-warning">Emprestado</span>
                                    <small class="text-muted">ISBN: 978-1420049794</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>
                                        Biblioteca principal
                                    </small>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="tooltip" title="Ver Detalhes" aria-label="Ver Detalhes">
                                            <i aria-hidden="true" class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="Editar" aria-label="Editar">
                                            <i aria-hidden="true" class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-info btn-sm"
                                            data-bs-toggle="tooltip" title="Reservar" aria-label="Reservar">
                                            <i aria-hidden="true" class="bi bi-bookmark-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="dashboard-row">
                    <nav aria-label="Biblioteca assets pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Anterior">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Seguinte">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
                        <p class="mb-0">Feito com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

            // View mode toggle functionality
            const gridView = document.getElementById('gridView');
            const listView = document.getElementById('listView');
            const assetsContainer = document.getElementById('assetsContainer');

            function toggleView() {
                if (listView.checked) {
                    assetsContainer.className = 'list-view';
                    assetsContainer.style.display = 'block';
                } else {
                    assetsContainer.className = 'assets-grid';
                    assetsContainer.style.display = 'grid';
                }
            }

            gridView.addEventListener('change', toggleView);
            listView.addEventListener('change', toggleView);

            // Filter functionality
            const categoryFilter = document.getElementById('categoryFilter');
            const statusFilter = document.getElementById('statusFilter');
            const locationFilter = document.getElementById('locationFilter');

            function applyFilters() {
                console.log('Filters applied:', {
                    category: categoryFilter.value,
                    status: statusFilter.value,
                    location: locationFilter.value
                });
                // Implementation would filter the displayed assets
            }

            categoryFilter.addEventListener('change', applyFilters);
            statusFilter.addEventListener('change', applyFilters);
            locationFilter.addEventListener('change', applyFilters);

            // Search functionality
            const searchInput = document.querySelector('#searchInput');
            let searchTimeout;

            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(() => {
                        console.log('Searching for:', this.value);
                        // Implementation would filter assets based on search term
                    }, 300);
                });
            }
        });
    </script>

    <!-- Load JavaScript -->




</body>

</html>