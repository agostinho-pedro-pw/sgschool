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

    <title>Editar recurso da biblioteca - Painel sgSchool</title>

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

        .form-card {
            background: #fff;
            border: none;
            border-radius: 12px;
            box-shadow: 0 1px 3px #0000001a
        }

        .preview-area {
            text-align: center;
            background: #f9fafb;
            border: 2px dashed #d1d5db;
            border-radius: 8px;
            padding: 2rem;
            transition: border-color .3s
        }

        .preview-area.drag-over {
            background: #f0f0ff;
            border-color: #6366f1
        }

        .preview-image {
            object-fit: cover;
            border-radius: 8px;
            max-width: 200px;
            max-height: 150px;
            box-shadow: 0 2px 8px #00000026
        }

        .required-field:after {
            content: " *";
            color: #ef4444
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
                            <li><a class="nav-link " href="library-assets.html">Recursos da biblioteca</a></li>
                            <li><a class="nav-link " href="add-library-assets.html">Adicionar recurso da biblioteca</a></li>
                            <li><a class="nav-link active" href="edit-library-assets.html">Editar recurso da biblioteca</a></li>
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
                            <span>Formulários</span>
                        </a>
                        <ul id="formsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="basic-form-element.html">Formulários básicos</a></li>
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
                        <li class="breadcrumb-item"><a href="library-assets.html">Recursos da biblioteca</a></li>
                        <li class="breadcrumb-item active">Editar recurso</li>
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
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h1 class="h3 mb-1">Editar recurso da biblioteca</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                                            <li class="breadcrumb-item"><a href="#">Biblioteca</a></li>
                                            <li class="breadcrumb-item"><a href="library-assets.html">Recursos</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Editar recurso</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="library-assets.html" class="btn btn-outline-secondary">
                                        <i class="bi bi-arrow-left me-1"></i>
                                        Voltar aos recursos
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alert for Form Instructions -->
                <div class="alert alert-warning mb-4" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    Está a editar: <strong>Introduction to Ci?ncias Inform?ticas (4.º Edition)</strong>. Efetue as altera??es
                    and click "Atualizar recurso" para guardar.
                </div>

                <!-- Edit Asset Form -->
                <form id="editAssetForm" novalidate>
                    <!-- First Row: Basic Info and Cover/Actions -->
                    <div class="dashboard-row">
                        <div class="dashboard-grid grid-cols-3 gap-3">
                            <!-- Basic Information -->
                            <div style="grid-column: span 2;">
                                <div class="dashboard-card">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">
                                            <i class="bi bi-info-circle me-2"></i>
                                            Informações básicas
                                        </h5>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <!-- First row: Title (2/3) and Category (1/3) -->
                                        <div class="dashboard-grid grid-cols-3 gap-3 mb-3">
                                            <div style="grid-column: span 2;">
                                                <label for="assetTitle" class="form-label required-field">Título</label>
                                                <input type="text" class="form-control" id="assetTitle" name="title"
                                                    value="Introdu??o ?s Ci?ncias Inform?ticas"
                                                    placeholder="Introduza o t?tulo do recurso" required
                                                    aria-describedby="titleHelp">
                                                <div class="invalid-feedback">
                                                    Introduza um t?tulo válido.
                                                </div>
                                                <small id="titleHelp" class="form-text text-muted">
                                                    Título principal do livro, da revista ou do conte?do multimédia.
                                                </small>
                                            </div>

                                            <div>
                                                <label for="assetCategory"
                                                    class="form-label required-field">Categoria</label>
                                                <select class="form-select" id="assetCategory" name="category" required>
                                                    <option value="">Selecionar categoria</option>
                                                    <option value="books" selected>Livros</option>
                                                    <option value="journals">Revistas</option>
                                                    <option value="digital">Conteúdos digitais</option>
                                                    <option value="reference">Obras de refer?ncia</option>
                                                    <option value="periodicals">Publicações periódicas</option>
                                                    <option value="audio">Conteúdos áudio</option>
                                                    <option value="video">Conteúdos vídeo</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Selecione uma categoria.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Second row: Author and Publisher (2 columns) -->
                                        <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                            <div>
                                                <label for="assetAuthor" class="form-label">Autor(es)</label>
                                                <input type="text" class="form-control" id="assetAuthor" name="author"
                                                    value="Thomas H. Cormen, Charles E. Leiserson"
                                                    placeholder="Introduza o(s) nome(s) do(s) autor(es)" aria-describedby="authorHelp">
                                                <small id="authorHelp" class="form-text text-muted">
                                                    Separe os v?rios autores com v?rgulas.
                                                </small>
                                            </div>

                                            <div>
                                                <label for="assetPublisher" class="form-label">Editora</label>
                                                <input type="text" class="form-control" id="assetPublisher"
                                                    name="publisher" value="MIT Press"
                                                    placeholder="Introduza o nome da editora">
                                            </div>
                                        </div>

                                        <!-- Third row: ISBN, Call Number, Edition (3 columns) -->
                                        <div class="dashboard-grid grid-cols-3 gap-3">
                                            <div>
                                                <label for="assetISBN" class="form-label">ISBN/ISSN</label>
                                                <input type="text" class="form-control" id="assetISBN" name="isbn"
                                                    value="978-0-262-03384-8" placeholder="978-0-123456-78-9"
                                                    aria-describedby="isbnHelp">
                                                <small id="isbnHelp" class="form-text text-muted">
                                                    Número internacional normalizado do livro ou da publica??o em s?rie.
                                                </small>
                                            </div>

                                            <div>
                                                <label for="assetEdition" class="form-label">Edição</label>
                                                <input type="text" class="form-control" id="assetEdition" name="edition"
                                                    value="4th" placeholder="1.º, 2.º, etc.">
                                            </div>

                                            <div>
                                                <label for="assetYear" class="form-label">Ano de publica??o</label>
                                                <input type="number" class="form-control" id="assetYear" name="year"
                                                    value="2022" placeholder="2025" min="1900" max="2030">
                                            </div>

                                            <div class="col-12">
                                                <label for="assetDescription" class="form-label">Descrição</label>
                                                <textarea class="form-control" id="assetDescription" name="description"
                                                    rows="4" placeholder="Introduza uma breve descri??o do recurso..."
                                                    aria-describedby="descHelp">Uma introdu??o abrangente aos algoritmos e às estruturas de dados, que aborda tópicos essenciais para estudantes de Ciências Informáticas.</textarea>
                                                <small id="descHelp" class="form-text text-muted">
                                                    Forne?a um resumo, o índice ou os principais tópicos abordados.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cover Image and Actions -->
                            <div>
                                <div class="dashboard-card">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">
                                            <i class="bi bi-image me-2"></i>
                                            Imagem de capa
                                        </h5>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="preview-area" id="imagePreview">
                                            <i class="bi bi-cloud-upload fs-1 text-muted mb-3"></i>
                                            <p class="mb-2">Arraste uma imagem para aqui ou <button type="button"
                                                    class="btn btn-link p-0" id="selectImageBtn">selecione ficheiros</button>
                                            </p>
                                            <small class="text-muted">Recommended: 300x400px, JPG or PNG, max
                                                5MB</small>
                                            <input type="file" id="coverImage" name="coverImage" accept="image/*"
                                                class="d-none">
                                        </div>
                                        <div id="imagePreviewContainer" class="d-none mt-3 text-center">
                                            <img id="previewImg"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                alt="Pré-visualização da capa" class="preview-image mb-2" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <button type="button" class="btn btn-outline-danger btn-sm"
                                                    id="removeImageBtn">
                                                    <i class="bi bi-trash me-1"></i>
                                                    Remover
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="dashboard-card mt-4">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">
                                            <i class="bi bi-gear me-2"></i>
                                            Ações
                                        </h5>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-check-lg me-2"></i>
                                                Atualizar recurso
                                            </button>
                                            <button type="button" class="btn btn-outline-warning" id="resetChanges">
                                                <i class="bi bi-arrow-clockwise me-2"></i>
                                                Repor alterações
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary" id="previewAsset">
                                                <i class="bi bi-eye me-2"></i>
                                                Pré-visualizar
                                            </button>
                                            <hr>
                                            <a href="library-assets.html" class="btn btn-outline-danger">
                                                <i class="bi bi-x-lg me-2"></i>
                                                Cancelar
                                            </a>
                                        </div>

                                        <div class="mt-4">
                                            <h6 class="text-muted small mb-2">AÇÕES RÁPIDAS</h6>
                                            <div class="d-grid gap-1">
                                                <button type="button" class="btn btn-outline-secondary btn-sm"
                                                    id="fillSampleData">
                                                    <i class="bi bi-magic me-1"></i>
                                                    Restore Original
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-sm"
                                                    id="clearForm">
                                                    <i class="bi bi-arrow-clockwise me-1"></i>
                                                    Limpar formulário
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Row: Library Details -->
                    <div class="dashboard-row">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title">
                                    <i class="bi bi-building me-2"></i>
                                    Biblioteca Detalhes
                                </h5>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="dashboard-grid grid-cols-2 gap-3">
                                    <div>
                                        <label for="assetLocation" class="form-label required-field">Localização</label>
                                        <select class="form-select" id="assetLocation" name="location" required>
                                            <option value="">Selecionar localização</option>
                                            <option value="main-library" selected>Biblioteca principal</option>
                                            <option value="science-library">Biblioteca de ci?ncias</option>
                                            <option value="medical-library">Biblioteca médica</option>
                                            <option value="digital-archive">Arquivo digital</option>
                                            <option value="reference-section">Reference Section</option>
                                            <option value="periodicals-section">Secção de publicações periódicas</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Selecione uma localiza??o.
                                        </div>
                                    </div>

                                    <div>
                                        <label for="assetStatus" class="form-label required-field">Estado</label>
                                        <select class="form-select" id="assetStatus" name="status" required>
                                            <option value="">Selecionar estado</option>
                                            <option value="available" selected>Disponível</option>
                                            <option value="checked-out">Emprestado</option>
                                            <option value="reserved">Reservado</option>
                                            <option value="maintenance">Em manutenção</option>
                                            <option value="missing">Em falta</option>
                                            <option value="damaged">Danificado</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Selecione um estado.
                                        </div>
                                    </div>

                                    <div>
                                        <label for="assetCopies" class="form-label">Number of Copies</label>
                                        <input type="number" class="form-control" id="assetCopies" name="copies"
                                            placeholder="1" min="1" value="3">
                                    </div>

                                    <div>
                                        <label for="assetPrice" class="form-label">Preço de aquisição</label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="number" class="form-control" id="assetPrice" name="price"
                                                value="89.99" placeholder="0.00" step="0.01" min="0">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="assetAcquisition" class="form-label">Data de aquisição</label>
                                        <input type="date" class="form-control" id="assetAcquisition" value="2022-03-15"
                                            name="acquisitionDate">
                                    </div>

                                    <div>
                                        <label for="assetCallNumber" class="form-label">Call Number</label>
                                        <input type="text" class="form-control" id="assetCallNumber" name="callNumber"
                                            value="QA76.6.C662" placeholder="ex.: QA76.73.P98"
                                            aria-describedby="callHelp">
                                        <small id="callHelp" class="form-text text-muted">
                                            Biblioteca classification number for shelving.
                                        </small>
                                    </div>

                                    <div>
                                        <label for="assetBarcode" class="form-label">Barcode</label>
                                        <input type="text" class="form-control" id="assetBarcode" name="barcode"
                                            value="LIB-INT-2022-384" placeholder="Auto-generated if empty">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Third Row: Additional Information -->
                    <div class="dashboard-row">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title">
                                    <i class="bi bi-plus-circle me-2"></i>
                                    Informações adicionais
                                </h5>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="dashboard-grid grid-cols-2 gap-3">
                                    <div>
                                        <label for="assetLanguage" class="form-label">Language</label>
                                        <select class="form-select" id="assetLanguage" name="language">
                                            <option value="">Selecionar idioma</option>
                                            <option value="english" selected>Inglês</option>
                                            <option value="spanish">Espanhol</option>
                                            <option value="french">Francês</option>
                                            <option value="german">Alemão</option>
                                            <option value="chinese">Chinês</option>
                                            <option value="japanese">Japonês</option>
                                            <option value="arabic">Árabe</option>
                                            <option value="other">Outro</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="assetPages" class="form-label">Número de páginas</label>
                                        <input type="number" class="form-control" id="assetPages" name="pages"
                                            value="1312" placeholder="ex.: 350" min="1">
                                    </div>

                                    <div class="col-12">
                                        <label for="assetSubjects" class="form-label">Assunto Keywords</label>
                                        <input type="text" class="form-control" id="assetSubjects" name="subjects"
                                            value="Ci?ncias Inform?ticas, algoritmos, estruturas de dados, programa??o"
                                            placeholder="Introduza palavras-chave separadas por v?rgulas"
                                            aria-describedby="subjectsHelp">
                                        <small id="subjectsHelp" class="form-text text-muted">
                                            ex.: Ciências Informáticas, Programação, Algoritmos, Estruturas de dados
                                        </small>
                                    </div>

                                    <div class="col-12">
                                        <label for="assetNotes" class="form-label">Notas internas</label>
                                        <textarea class="form-control" id="assetNotes" name="notes" rows="3"
                                            placeholder="Notas especiais para a equipa da biblioteca..."
                                            aria-describedby="notesHelp"></textarea>
                                        <small id="notesHelp" class="form-text text-muted">
                                            Notas privadas, visíveis apenas para a equipa da biblioteca.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
            const form = document.getElementById('editAssetForm');
            const imageInput = document.getElementById('coverImage');
            const selectImageBtn = document.getElementById('selectImageBtn');
            const previewArea = document.getElementById('imagePreview');
            const previewContainer = document.getElementById('imagePreviewContainer');
            const previewImg = document.getElementById('previewImg');
            const removeImageBtn = document.getElementById('removeImageBtn');

            // Image upload functionality
            selectImageBtn.addEventListener('click', () => imageInput.click());

            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    handleImageUpload(file);
                }
            });

            // Drag and drop functionality
            previewArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                previewArea.classList.add('drag-over');
            });

            previewArea.addEventListener('dragleave', function(e) {
                e.preventDefault();
                previewArea.classList.remove('drag-over');
            });

            previewArea.addEventListener('drop', function(e) {
                e.preventDefault();
                previewArea.classList.remove('drag-over');
                const file = e.dataTransfer.files[0];
                if (file && file.type.startsWith('image/')) {
                    handleImageUpload(file);
                }
            });

            function handleImageUpload(file) {
                if (file.size > 5 * 1024 * 1024) {
                    alert('O ficheiro tem de ter menos de 5 MB.');
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    previewArea.classList.add('d-none');
                    previewContainer.classList.remove('d-none');
                };
                reader.readAsDataURL(file);
            }

            removeImageBtn.addEventListener('click', function() {
                imageInput.value = '';
                previewArea.classList.remove('d-none');
                previewContainer.classList.add('d-none');
                previewImg.src = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
            });

            // Form validation
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                e.stopPropagation();

                if (form.checkValidity()) {
                    // Simulate form submission
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="spinner-border spinner-border-sm me-2"></i>Saving...';
                    submitBtn.disabled = true;

                    setTimeout(() => {
                        alert('Recurso atualizado com sucesso!');
                        // In real app, would redirect to library-assets.html
                        console.log('Form data:', new FormData(form));
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 2000);
                }

                form.classList.add('was-validated');
            });

            // Reset changes functionality
            document.getElementById('resetChanges').addEventListener('click', function() {
                if (confirm('Tem a certeza de que pretende repor todas as alterações?')) {
                    // Reset to original values
                    location.reload();
                }
            });

            // Load original data
            const originalData = {
                title: 'Introdu??o ?s Ci?ncias Inform?ticas',
                category: 'books',
                author: 'Thomas H. Cormen, Charles E. Leiserson',
                publisher: 'MIT Press',
                isbn: '978-0-262-03384-8',
                edition: '4th',
                year: '2022',
                description: 'Uma introdu??o abrangente aos algoritmos e ?s estruturas de dados, que aborda t?picos essenciais para estudantes de Ci?ncias Inform?ticas.',
                location: 'main-library',
                status: 'available',
                copies: '3',
                price: '89.99',
                callNumber: 'QA76.6.C662',
                barcode: 'LIB-INT-2022-384',
                language: 'english',
                pages: '1312',
                subjects: 'Ciências Informáticas, Algoritmos, Estruturas de dados, Programação'
            };

            // Fill sample data restores original values
            document.getElementById('fillSampleData').addEventListener('click', function() {
                document.getElementById('assetTitle').value = originalData.title;
                document.getElementById('assetCategory').value = originalData.category;
                document.getElementById('assetAuthor').value = originalData.author;
                document.getElementById('assetPublisher').value = originalData.publisher;
                document.getElementById('assetISBN').value = originalData.isbn;
                document.getElementById('assetEdition').value = originalData.edition;
                document.getElementById('assetYear').value = originalData.year;
                document.getElementById('assetDescription').value = originalData.description;
                document.getElementById('assetLocation').value = originalData.location;
                document.getElementById('assetStatus').value = originalData.status;
                document.getElementById('assetCopies').value = originalData.copies;
                document.getElementById('assetPrice').value = originalData.price;
                document.getElementById('assetCallNumber').value = originalData.callNumber;
                document.getElementById('assetBarcode').value = originalData.barcode;
                document.getElementById('assetLanguage').value = originalData.language;
                document.getElementById('assetPages').value = originalData.pages;
                document.getElementById('assetSubjects').value = originalData.subjects;
            });

            // Clear form
            document.getElementById('clearForm').addEventListener('click', function() {
                if (confirm('Tem a certeza de que pretende limpar todos os dados do formulário?')) {
                    form.reset();
                    form.classList.remove('was-validated');
                    removeImageBtn.click();
                }
            });

            // Preview functionality
            document.getElementById('previewAsset').addEventListener('click', function() {
                // Would show a modal with asset preview
                console.log('A mostrar a pr?-visualiza??o do recurso...');
            });

            // Auto-generate barcode if not provided
            document.getElementById('assetTitle').addEventListener('blur', function() {
                const barcodeField = document.getElementById('assetBarcode');
                if (!barcodeField.value && this.value) {
                    // Generate a simple barcode based on timestamp and title
                    const timestamp = Date.now();
                    const titleCode = this.value.substring(0, 3).toUpperCase();
                    barcodeField.value = `LIB${titleCode}${timestamp}`.slice(-12);
                }
            });
        });
    </script>

    <!-- Load JavaScript -->




</body>

</html>