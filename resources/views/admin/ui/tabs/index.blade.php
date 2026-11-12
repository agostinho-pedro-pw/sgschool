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

    <title>Separadores - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <style>
        .dashboard-row {
            margin-bottom: 24px
        }

        .dashboard-grid {
            gap: 24px;
            display: grid
        }

        .grid-cols-1 {
            grid-template-columns: 1fr
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, 1fr)
        }

        .grid-cols-3 {
            grid-template-columns: repeat(3, 1fr)
        }

        .grid-cols-4 {
            grid-template-columns: repeat(4, 1fr)
        }

        .grid-cols-1-3 {
            grid-template-columns: 1fr 3fr
        }

        .grid-cols-2-1 {
            grid-template-columns: 2fr 1fr
        }

        .grid-cols-3-1 {
            grid-template-columns: 3fr 1fr
        }

        @media (width<=1200px) {

            .grid-cols-4,
            .grid-cols-3 {
                grid-template-columns: repeat(2, 1fr)
            }

            .grid-cols-1-3,
            .grid-cols-2-1,
            .grid-cols-3-1 {
                grid-template-columns: 1fr
            }
        }

        @media (width<=768px) {
            .dashboard-grid {
                gap: 16px
            }

            .grid-cols-4,
            .grid-cols-3,
            .grid-cols-2,
            .grid-cols-1-3,
            .grid-cols-2-1,
            .grid-cols-3-1 {
                grid-template-columns: 1fr
            }
        }

        .nav-tabs {
            border-bottom: 2px solid #e5e7eb
        }

        .nav-tabs .nav-link {
            color: var(--secondary-color, #6b7280);
            background: 0 0;
            border: none;
            border-bottom: 3px solid #0000;
            border-radius: 0;
            padding: 16px 24px;
            font-weight: 500;
            transition: all .3s
        }

        .nav-tabs .nav-link:hover {
            color: var(--sidebar-active, #4361ee);
            border-color: #0000 #0000 #4361ee4d
        }

        .nav-tabs .nav-link.active {
            color: var(--sidebar-active, #4361ee);
            border-color: #0000;
            border-bottom-color: var(--sidebar-active, #4361ee);
            background-color: #0000
        }

        .nav-pills .nav-link {
            color: var(--secondary-color, #6b7280);
            border-radius: 8px;
            margin-bottom: 8px;
            margin-right: 8px;
            padding: 12px 20px;
            font-weight: 500;
            transition: all .3s
        }

        .nav-pills .nav-link:hover {
            color: var(--sidebar-active, #4361ee);
            background-color: #4361ee1a
        }

        .nav-pills .nav-link.active {
            background-color: var(--sidebar-active, #4361ee);
            color: #fff
        }

        .tab-content {
            padding-top: 24px
        }

        .tab-pane {
            animation: .3s ease-in-out fadeIn
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(10px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .nav-tabs-vertical {
            border-bottom: none;
            border-right: 2px solid #e5e7eb;
            flex-direction: column
        }

        .nav-tabs-vertical .nav-link {
            text-align: left;
            border-bottom: none;
            border-right: 3px solid #0000;
            width: 100%
        }

        .nav-tabs-vertical .nav-link:hover {
            border-bottom-color: #0000;
            border-right-color: #4361ee4d
        }

        .nav-tabs-vertical .nav-link.active {
            border-bottom-color: #0000;
            border-right-color: var(--sidebar-active, #4361ee)
        }

        .academic-tabs .nav-link {
            background: #f8f9fa;
            border: 1px solid #e5e7eb;
            border-radius: 8px 8px 0 0;
            margin-right: 4px
        }

        .academic-tabs .nav-link.active {
            z-index: 1;
            background: #fff;
            border-bottom-color: #fff;
            position: relative
        }

        .academic-content {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-top: none;
            border-radius: 0 0 8px 8px;
            padding: 24px
        }

        .course-card {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 16px;
            padding: 20px;
            transition: all .3s
        }

        .course-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px #0000001a
        }

        .course-header {
            justify-content: space-between;
            align-items: start;
            margin-bottom: 12px;
            display: flex
        }

        .course-title {
            color: #1f2937;
            margin: 0;
            font-size: 1.1rem;
            font-weight: 600
        }

        .course-code {
            color: #6b7280;
            margin: 0;
            font-size: .875rem
        }

        .course-meta {
            color: #6b7280;
            gap: 20px;
            margin-top: 12px;
            font-size: .875rem;
            display: flex
        }

        .badge-custom {
            border-radius: 20px;
            padding: 6px 12px;
            font-size: .75rem;
            font-weight: 500
        }

        .tab-builder {
            text-align: center;
            background: #f9fafb;
            border: 2px dashed #e5e7eb;
            border-radius: 8px;
            margin: 20px 0;
            padding: 24px
        }

        .progress-custom {
            background-color: #e5e7eb;
            border-radius: 4px;
            height: 8px
        }

        .progress-custom .progress-bar {
            border-radius: 4px
        }

        .stat-card {
            text-align: center;
            color: #fff;
            background: linear-gradient(135deg, #4361ee, #6366f1);
            border-radius: 8px;
            padding: 20px
        }

        .stat-number {
            margin-bottom: 8px;
            font-size: 2.5rem;
            font-weight: 700
        }

        .stat-label {
            opacity: .9;
            font-size: .875rem
        }

        .dashboard-card {
            margin-bottom: 24px
        }

        .dashboard-card:last-child {
            margin-bottom: 0
        }

        @media (width<=768px) {
            .nav-tabs {
                flex-wrap: wrap
            }

            .nav-tabs .nav-link {
                padding: 12px 16px
            }
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
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#componentsSubmenu" aria-expanded="true">
                            <i class="bi bi-layout-wtf"></i>
                            <span>Componentes</span>
                        </a>
                        <ul id="componentsSubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link " href="buttons.html">Botões</a></li>
                            <li><a class="nav-link " href="alerts.html">Alertas</a></li>
                            <li><a class="nav-link " href="modals.html">Modais</a></li>
                            <li><a class="nav-link active" href="tabs.html">Separadores</a></li>
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
                        <li class="breadcrumb-item active">Separadores</li>
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
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 mb-0 text-gray-800">Componentes de separadores</h1>
                            <p class="text-muted mb-0">Bootstrap 5 tab components for organizing academic content and
                                navigation</p>
                        </div>
                    </div>
                </div>

                <!-- Basic Tabs -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Separadores de navegação básicos</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <ul class="nav nav-tabs" id="basicTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                    data-bs-target="#overview" type="button" role="tab">
                                    <i class="bi bi-graph-up me-2"></i>Visão geral
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="students-tab" data-bs-toggle="tab"
                                    data-bs-target="#students" type="button" role="tab">
                                    <i class="bi bi-people me-2"></i>Estudantes
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                                    type="button" role="tab">
                                    <i class="bi bi-book me-2"></i>Cursos
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#reports"
                                    type="button" role="tab">
                                    <i class="bi bi-bar-chart me-2"></i>Relatórios
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="basicTabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                <div class="dashboard-grid grid-cols-4 mt-3">
                                    <div>
                                        <div class="stat-card">
                                            <div class="stat-number">1,245</div>
                                            <div class="stat-label">Total de estudantes</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="stat-card"
                                            style="background: linear-gradient(135deg, #198754, #10b981);">
                                            <div class="stat-number">98</div>
                                            <div class="stat-label">Cursos ativos</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="stat-card"
                                            style="background: linear-gradient(135deg, #ffc107, #f59e0b);">
                                            <div class="stat-number">67</div>
                                            <div class="stat-label">Professores</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="stat-card"
                                            style="background: linear-gradient(135deg, #0dcaf0, #06b6d4);">
                                            <div class="stat-number">12</div>
                                            <div class="stat-label">Departamentos</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h6>Progresso do ano letivo</h6>
                                    <div class="progress-custom">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%">65%
                                        </div>
                                    </div>
                                    <small class="text-muted mt-2 d-block">O semestre de outono de 2025 está 65% concluído</small>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="students" role="tabpanel">
                                <div class="dashboard-grid grid-cols-2 mt-3">
                                    <div>
                                        <div class="course-card">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h6 class="course-title">Sarah Johnson</h6>
                                                    <p class="course-code">N.º de estudante: 2025001</p>
                                                </div>
                                                <span class="badge-custom bg-success text-white">Ativo</span>
                                            </div>
                                            <div class="course-meta">
                                                <span><i class="bi bi-book me-1"></i>Ciência Informática</span>
                                                <span><i class="bi bi-star me-1"></i>Média: 3,85</span>
                                                <span><i class="bi bi-calendar me-1"></i>Segundo ano</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="course-card">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h6 class="course-title">Michael Brown</h6>
                                                    <p class="course-code">N.º de estudante: 2025002</p>
                                                </div>
                                                <span class="badge-custom bg-warning text-dark">Pendente</span>
                                            </div>
                                            <div class="course-meta">
                                                <span><i class="bi bi-book me-1"></i>Matemática</span>
                                                <span><i class="bi bi-star me-1"></i>Média: 3,92</span>
                                                <span><i class="bi bi-calendar me-1"></i>Penúltimo ano</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <button type="button" class="btn btn-primary">
                                        <i class="bi bi-plus me-2"></i>Adicionar novo estudante
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="courses" role="tabpanel">
                                <div class="dashboard-grid grid-cols-1 mt-3">
                                    <div>
                                        <div class="course-card">
                                            <div class="course-header d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h6 class="course-title">Ciência Informática Avançada</h6>
                                                    <p class="course-code">CS-401 • Outono de 2025</p>
                                                </div>
                                                <span class="badge-custom bg-success text-white">Ativo</span>
                                            </div>
                                            <p class="text-muted">Fundamentos de aprendizagem automática, IA e sistemas
                                                distribuídos</p>
                                            <div class="course-meta">
                                                <span><i class="bi bi-person me-1"></i>Dr. Jane Smith</span>
                                                <span><i class="bi bi-people me-1"></i>28/30 estudantes</span>
                                                <span><i class="bi bi-clock me-1"></i>MWF 10:00-11:30</span>
                                                <span><i class="bi bi-credit-card me-1"></i>3 créditos</span>
                                            </div>
                                            <div class="mt-3">
                                                <div class="progress-custom">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 75%">75%</div>
                                                </div>
                                                <small class="text-muted mt-1 d-block">Conclusão do curso: 75%</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reports" role="tabpanel">
                                <div class="dashboard-grid grid-cols-3-1 mt-3">
                                    <div>
                                        <h6>Tendências do desempenho académico</h6>
                                        <div class="alert alert-info">
                                            <i class="bi bi-graph-up me-2"></i>
                                            O desempenho dos estudantes melhorou 12% neste semestre em comparação com o ano passado.
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-primary">
                                                <i class="bi bi-download me-2"></i>Exportar PDF
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary">
                                                <i class="bi bi-share me-2"></i>Partilhar relatório
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pills Navigation -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Navegação em pílulas</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <ul class="nav nav-pills mb-3" id="pillsTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="assignments-tab" data-bs-toggle="pill"
                                    data-bs-target="#assignments" type="button" role="tab">
                                    <i class="bi bi-list-task me-2"></i>Trabalhos
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="exams-tab" data-bs-toggle="pill" data-bs-target="#exams"
                                    type="button" role="tab">
                                    <i class="bi bi-clipboard-check me-2"></i>Exams
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="attendance-tab" data-bs-toggle="pill"
                                    data-bs-target="#attendance" type="button" role="tab">
                                    <i class="bi bi-person-check me-2"></i>Assiduidade
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="grades-tab" data-bs-toggle="pill" data-bs-target="#grades"
                                    type="button" role="tab">
                                    <i class="bi bi-award me-2"></i>Notas
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pillsTabContent">
                            <div class="tab-pane fade show active" id="assignments" role="tabpanel">
                                <div class="list-group">
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">Projeto de aprendizagem automática</h6>
                                            <p class="mb-1 text-muted">Implemente um classificador de redes neuronais</p>
                                            <small class="text-danger">Due: Oct 15, 2025</small>
                                        </div>
                                        <span class="badge bg-danger rounded-pill">Faltam 2 dias</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">Artigo de investigação sobre IA</h6>
                                            <p class="mb-1 text-muted">Escreva um artigo de investigação de 10 páginas sobre aprendizagem profunda
                                            </p>
                                            <small class="text-warning">Due: Oct 22, 2025</small>
                                        </div>
                                        <span class="badge bg-warning rounded-pill">Falta 1 semana</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="exams" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Midterm Examination</h6>
                                                <p class="card-text">Exame abrangente sobre as semanas 1 a 8</p>
                                                <p class="text-muted"><strong>Data:</strong> 20 de outubro de 2025</p>
                                                <p class="text-muted"><strong>Duração:</strong> 2 hours</p>
                                                <p class="text-muted"><strong>Formato:</strong> Presencial</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Final Examination</h6>
                                                <p class="card-text">Exame final cumulativo</p>
                                                <p class="text-muted"><strong>Data:</strong> December 15, 2025</p>
                                                <p class="text-muted"><strong>Duração:</strong> 3 hours</p>
                                                <p class="text-muted"><strong>Formato:</strong> Presencial</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="attendance" role="tabpanel">
                                <div class="dashboard-grid grid-cols-3">
                                    <div>
                                        <div class="text-center">
                                            <div class="stat-number text-success">92%</div>
                                            <div class="stat-label text-muted">Taxa de assiduidade</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-center">
                                            <div class="stat-number text-primary">23</div>
                                            <div class="stat-label text-muted">Aulas frequentadas</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-center">
                                            <div class="stat-number text-warning">2</div>
                                            <div class="stat-label text-muted">Aulas não frequentadas</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="progress-custom">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 92%">92%
                                        </div>
                                    </div>
                                    <small class="text-muted mt-2 d-block">Excelente registo de assiduidade!</small>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="grades" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Trabalho</th>
                                                <th>Pontuação</th>
                                                <th>Nota</th>
                                                <th>Peso</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Quiz 1</td>
                                                <td>85/100</td>
                                                <td><span class="badge bg-success">B+</span></td>
                                                <td>10%</td>
                                                <td>Sep 15, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>Project 1</td>
                                                <td>92/100</td>
                                                <td><span class="badge bg-success">A-</span></td>
                                                <td>25%</td>
                                                <td>1 de outubro de 2025</td>
                                            </tr>
                                            <tr>
                                                <td>Midterm</td>
                                                <td>88/100</td>
                                                <td><span class="badge bg-success">B+</span></td>
                                                <td>30%</td>
                                                <td>10 de outubro de 2025</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vertical Tabs -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Disposição vertical dos separadores</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <div class="dashboard-grid grid-cols-1-3">
                            <div>
                                <div class="nav flex-column nav-tabs nav-tabs-vertical" id="verticalTab" role="tablist">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab">
                                        <i class="bi bi-person me-2"></i>Perfil
                                    </button>
                                    <button class="nav-link" id="academic-tab" data-bs-toggle="tab"
                                        data-bs-target="#academic" type="button" role="tab">
                                        <i class="bi bi-mortarboard me-2"></i>Informações académicas
                                    </button>
                                    <button class="nav-link" id="enrollment-tab" data-bs-toggle="tab"
                                        data-bs-target="#enrollment" type="button" role="tab">
                                        <i class="bi bi-list-ul me-2"></i>Inscrições
                                    </button>
                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#settings" type="button" role="tab">
                                        <i class="bi bi-gear me-2"></i>Configurações
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="tab-content" id="verticalTabContent">
                                    <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                        <div class="text-center mb-4">
                                            <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=4361ee&color=fff&size=100"
                                                alt="Estudante" class="rounded-circle mb-3" loading="lazy"
                                                decoding="async">
                                            <h5>Sarah Johnson</h5>
                                            <p class="text-muted">N.º de estudante: 2025001</p>
                                        </div>
                                        <div class="dashboard-grid grid-cols-2">
                                            <div>
                                                <p><strong>E-mail:</strong> sarah.johnson@university.edu</p>
                                                <p><strong>Telefone:</strong> +1 (555) 123-4567</p>
                                                <p><strong>Data de nascimento:</strong> March 15, 2004</p>
                                            </div>
                                            <div>
                                                <p><strong>Morada:</strong> 123 Campus Drive</p>
                                                <p><strong>Localidade:</strong> Cidade Universitária, UC 12345</p>
                                                <p><strong>Contacto de emergência:</strong> +1 (555) 987-6543</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="academic" role="tabpanel">
                                        <div class="dashboard-grid grid-cols-2">
                                            <div>
                                                <h6>Situação académica</h6>
                                                <p><strong>Curso:</strong> Ciência Informática</p>
                                                <p><strong>Área secundária:</strong> Matemática</p>
                                                <p><strong>Média:</strong> 3.85</p>
                                                <p><strong>Classificação na turma:</strong> 15/120</p>
                                            </div>
                                            <div>
                                                <h6>Progresso académico</h6>
                                                <p><strong>Créditos concluídos:</strong> 45/120</p>
                                                <p><strong>Ano atual:</strong> Segundo ano</p>
                                                <p><strong>Conclusão prevista:</strong> May 2027</p>
                                                <p><strong>Situação académica:</strong> <span class="badge bg-success">                                                Bom desempenho</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="enrollment" role="tabpanel">
                                        <h6>Inscrições no semestre atual</h6>
                                        <div class="list-group">
                                            <div class="list-group-item">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1">Ciência Informática Avançada</h6>
                                                    <small>3 créditos</small>
                                                </div>
                                                <p class="mb-1">CS-401 • Dr. Jane Smith • MWF 10:00-11:30</p>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1">Estruturas de Dados</h6>
                                                    <small>4 créditos</small>
                                                </div>
                                                <p class="mb-1">CS-302 • Dr. Robert Brown • TTH 2:00-3:30</p>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1">Álgebra Linear</h6>
                                                    <small>3 créditos</small>
                                                </div>
                                                <p class="mb-1">MATH-301 • Dr. Emily Davis • MWF 1:00-2:00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="settings" role="tabpanel">
                                        <h6>Configurações da conta</h6>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="emailNotifications"
                                                checked>
                                            <label class="form-check-label" for="emailNotifications">
                                                Notificações por e-mail
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="smsAlerts">
                                            <label class="form-check-label" for="smsAlerts">
                                                Alertas por SMS
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="publicProfile" checked>
                                            <label class="form-check-label" for="publicProfile">
                                                Perfil público
                                            </label>
                                        </div>
                                        <hr>
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-primary">Atualizar configurações</button>
                                            <button type="button" class="btn btn-outline-secondary">Reset to
                                                Default</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Academic Tabs -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Separadores académicos personalizados</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <ul class="nav academic-tabs" id="academicTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="semester-tab" data-bs-toggle="tab"
                                    data-bs-target="#semester" type="button" role="tab">
                                    <i class="bi bi-calendar-date me-2"></i>Outono de 2025
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="summer-tab" data-bs-toggle="tab" data-bs-target="#summer"
                                    type="button" role="tab">
                                    <i class="bi bi-sun me-2"></i>Verão de 2025
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="spring-tab" data-bs-toggle="tab" data-bs-target="#spring"
                                    type="button" role="tab">
                                    <i class="bi bi-flower1 me-2"></i>Primavera de 2025
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content academic-content" id="academicTabContent">
                            <div class="tab-pane fade show active" id="semester" role="tabpanel">
                                <h6>Semestre de outono de 2025</h6>
                                <p class="text-muted mb-4">Semestre atual com 5 cursos inscritos</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h6 class="card-title">Carga horária</h6>
                                                <div class="progress-custom mb-2">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 80%">16 créditos</div>
                                                </div>
                                                <small class="text-muted">16/20 créditos máximos</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h6 class="card-title">Média atual</h6>
                                                <div class="progress-custom mb-2">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 96%">3.85</div>
                                                </div>
                                                <small class="text-muted">3.85/4.00</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="summer" role="tabpanel">
                                <h6>Período de verão de 2025</h6>
                                <p class="text-muted mb-4">Cursos intensivos de verão concluídos</p>
                                <div class="alert alert-success">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Concluiu com sucesso dois cursos de verão com uma média de 3,92.
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Estatística para Ciência Informática
                                        <span class="badge bg-success rounded-pill">A</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Fundamentos de desenvolvimento Web
                                        <span class="badge bg-success rounded-pill">A-</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="spring" role="tabpanel">
                                <h6>Semestre da primavera de 2025</h6>
                                <p class="text-muted mb-4">Desempenho e conquistas do semestre anterior</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-info">
                                            <i class="bi bi-award me-2"></i>
                                            Integra o quadro de honra do semestre da primavera de 2025, com média de 3,91
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interactive Tab Builder -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Criador interativo de separadores</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <div class="tab-builder">
                            <h6>Criar navegação personalizada por separadores</h6>
                            <p class="text-muted mb-4">Crie separadores com títulos e conteúdos personalizados</p>
                            <div class="dashboard-grid grid-cols-4 mb-3">
                                <div>
                                    <input type="text" class="form-control" id="tabTitle" placeholder="Título do separador">
                                </div>
                                <div>
                                    <select class="form-select" id="tabIcon">
                                        <option value="bi bi-info-circle">Informação</option>
                                        <option value="bi bi-person">Utilizador</option>
                                        <option value="bi bi-book">Livro</option>
                                        <option value="bi bi-bar-chart">Gráfico</option>
                                        <option value="bi bi-gear">Configurações</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="form-select" id="tabStyle">
                                        <option value="tabs">Separadores</option>
                                        <option value="pills">Pílulas</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary w-100" onclick="addTab()">
                                        <i class="bi bi-plus me-2"></i>Adicionar separador
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="tabContent" rows="3"
                                    placeholder="Introduza o conteúdo do separador..."></textarea>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-success" onclick="generateTabs()">
                                    <i class="bi bi-magic me-2"></i>Gerar separadores
                                </button>
                                <button type="button" class="btn btn-outline-secondary" onclick="clearTabs()">
                                    <i class="bi bi-eraser me-2"></i>Limpar tudo
                                </button>
                            </div>
                        </div>

                        <!-- Dynamic Tab Container -->
                        <div id="dynamicTabContainer" class="mt-4" style="display: none;">
                            <h6>Separadores gerados:</h6>
                            <div id="generatedTabs"></div>
                            <div id="generatedTabContent" class="tab-content mt-3"></div>
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
        // Tab Builder Functionality
let tabCounter = 0;
let tabsData = [];

function addTab() {
    const title = document.getElementById('tabTitle').value;
    const icon = document.getElementById('tabIcon').value;
    const content = document.getElementById('tabContent').value;

    if (!title.trim()) {
        alert('Introduza o título do separador');
        return;
    }

    tabsData.push({
        id: `tab-${++tabCounter}`,
        title: title,
        icon: icon,
        content: content || 'Este é o conteúdo de ' + title
    });

    // Clear inputs
    document.getElementById('tabTitle').value = '';
    document.getElementById('tabContent').value = '';

    updateTabPreview();
}

function updateTabPreview() {
    const container = document.getElementById('dynamicTabContainer');
    if (tabsData.length > 0) {
        container.style.display = 'block';
        container.innerHTML = `
            <h6>Separadores a gerar (${tabsData.length}):</h6>
            <div class="d-flex flex-wrap gap-2 mb-3">
                ${tabsData.map(tab => `
                    <span class="badge bg-primary">
                        <i class="${tab.icon} me-1"></i>${tab.title}
                        <button type="button" class="btn-close btn-close-white ms-2" style="font-size: 0.7em;" onclick="removeTab('${tab.id}')"></button>
                    </span>
                `).join('')}
            </div>
            <div id="generatedTabs"></div>
            <div id="generatedTabContent" class="tab-content mt-3"></div>
        `;
    } else {
        container.style.display = 'none';
    }
}

function removeTab(tabId) {
    tabsData = tabsData.filter(tab => tab.id !== tabId);
    updateTabPreview();
}

function generateTabs() {
    if (tabsData.length === 0) {
        alert('Adicione pelo menos um separador');
        return;
    }

    const style = document.getElementById('tabStyle').value;
    const navClass = style === 'pills' ? 'nav-pills' : 'nav-tabs';
    const tabsId = 'customTabs-' + Date.now();

    // Generate navigation
    const tabNav = `
        <ul class="nav ${navClass}" id="${tabsId}" role="tablist">
            ${tabsData.map((tab, index) => `
                <li class="nav-item" role="presentation">
                    <button class="nav-link ${index === 0 ? 'active' : ''}"
                            id="${tab.id}-nav"
                            data-bs-toggle="${style === 'pills' ? 'pill' : 'tab'}"
                            data-bs-target="#${tab.id}-pane"
                            type="button"
                            role="tab">
                        <i class="${tab.icon} me-2"></i>${tab.title}
                    </button>
                </li>
            `).join('')}
        </ul>
    `;

    // Generate content
    const tabContent = `
        <div class="tab-content" id="${tabsId}Content">
            ${tabsData.map((tab, index) => `
                <div class="tab-pane fade ${index === 0 ? 'show active' : ''}"
                     id="${tab.id}-pane"
                     role="tabpanel">
                    <div class="mt-3">
                        <h6><i class="${tab.icon} me-2"></i>${tab.title}</h6>
                        <p>${tab.content}</p>
                        <div class="alert alert-info">
                            <i class="bi bi-lightbulb me-2"></i>
                            This tab was created using the interactive tab builder.
                        </div>
                    </div>
                </div>
            `).join('')}
        </div>
    `;

    document.getElementById('generatedTabs').innerHTML = tabNav;
    document.getElementById('generatedTabContent').innerHTML = tabContent;
}

function clearTabs() {
    tabsData = [];
    tabCounter = 0;
    updateTabPreview();
    document.getElementById('tabTitle').value = '';
    document.getElementById('tabContent').value = '';
}

// Add smooth transitions to tab changes
document.addEventListener('shown.bs.tab', function (event) {
    event.target.classList.add('fade-in');
    setTimeout(() => {
        event.target.classList.remove('fade-in');
    }, 300);
});
    </script>

    <!-- Load JavaScript -->




</body>

</html>