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

    <title>Acordeão - Painel sgSchool</title>

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
            .grid-cols-2-1,
            .grid-cols-3-1 {
                grid-template-columns: 1fr
            }
        }

        .dashboard-card {
            margin-bottom: 24px
        }

        .dashboard-card:last-child {
            margin-bottom: 0
        }

        .accordion {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px #0000001a
        }

        .accordion-item {
            border: none;
            border-bottom: 1px solid #e5e7eb
        }

        .accordion-item:last-child {
            border-bottom: none
        }

        .accordion-header {
            margin-bottom: 0
        }

        .accordion-button {
            color: #1f2937;
            background: #f8f9fa;
            border: none;
            border-radius: 0;
            padding: 20px 24px;
            font-weight: 500;
            transition: all .3s
        }

        .accordion-button:not(.collapsed) {
            color: #fff;
            box-shadow: none;
            background: #4361ee
        }

        .accordion-button:focus {
            border-color: #4361ee;
            box-shadow: 0 0 0 .25rem #4361ee40
        }

        .accordion-button:after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
        }

        .accordion-button:not(.collapsed):after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
        }

        .accordion-body {
            background: #fff;
            padding: 24px
        }

        .academic-accordion .accordion-button {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-left: 4px solid #0000
        }

        .academic-accordion .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, #4361ee, #6366f1);
            border-left: 4px solid #ffc107
        }

        .course-accordion-item {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 16px;
            overflow: hidden
        }

        .course-accordion-header {
            cursor: pointer;
            background: #f8f9fa;
            padding: 16px 20px;
            transition: all .3s
        }

        .course-accordion-header:hover {
            background: #e9ecef
        }

        .course-accordion-content {
            background: #fff;
            padding: 20px;
            display: none
        }

        .course-accordion-item.active .course-accordion-content {
            display: block
        }

        .course-accordion-item.active .course-accordion-header {
            color: #fff;
            background: #4361ee
        }

        .stat-item {
            text-align: center;
            background: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 16px;
            padding: 16px
        }

        .stat-value {
            color: #4361ee;
            font-size: 2rem;
            font-weight: 700
        }

        .stat-label {
            color: #6b7280;
            margin-top: 4px;
            font-size: .875rem
        }

        .progress-indicator {
            background: #e5e7eb;
            border-radius: 4px;
            height: 8px;
            margin: 16px 0
        }

        .progress-indicator .progress-bar {
            background: linear-gradient(90deg, #4361ee, #6366f1);
            border-radius: 4px;
            height: 100%;
            transition: width .3s
        }

        .faq-accordion .accordion-button:before {
            content: "Q: ";
            color: #4361ee;
            margin-right: 8px;
            font-weight: 700
        }

        .faq-accordion .accordion-button:not(.collapsed):before {
            color: #fff
        }

        @media (width<=768px) {
            .accordion-button {
                padding: 16px 20px;
                font-size: .9rem
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
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#componentsSubmenu" aria-expanded="true">
                            <i class="bi bi-layout-wtf"></i>
                            <span>Componentes</span>
                        </a>
                        <ul id="componentsSubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link " href="buttons.html">Botões</a></li>
                            <li><a class="nav-link " href="alerts.html">Alertas</a></li>
                            <li><a class="nav-link " href="modals.html">Modais</a></li>
                            <li><a class="nav-link " href="tabs.html">Separadores</a></li>
                            <li><a class="nav-link active" href="accordion.html">Acordeão</a></li>
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
                        <li class="breadcrumb-item active">Acordeão</li>
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
                            <h1 class="h3 mb-0 text-gray-800">Componentes de acordeão</h1>
                            <p class="text-muted mb-0">Bootstrap 5 accordion components for organizing collapsible
                                academic content</p>
                        </div>
                    </div>
                </div>

                <!-- Basic Accordion -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Basic Academic Accordion</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <div class="accordion" id="basicAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="studentInfo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseStudentInfo" aria-expanded="true"
                                        aria-controls="collapseStudentInfo">
                                        <i class="bi bi-person-badge me-3"></i>
                                        Gestão de informação dos estudantes
                                    </button>
                                </h2>
                                <div id="collapseStudentInfo" class="accordion-collapse collapse show"
                                    aria-labelledby="studentInfo" data-bs-parent="#basicAccordion" role="region">
                                    <div class="accordion-body">
                                        <div class="dashboard-grid grid-cols-3-1">
                                            <div>
                                                <p><strong>Visão geral:</strong> Comprehensive student information
                                                    management system that allows you to maintain detailed records of
                                                    all enrolled students.</p>
                                                <h6>Principais funcionalidades:</h6>
                                                <ul>
                                                    <li>Gestão completa do perfil do estudante</li>
                                                    <li>Acompanhamento do histórico académico</li>
                                                    <li>Informações de contacto e contactos de emergência</li>
                                                    <li>Estado da inscrição e registo em cursos</li>
                                                    <li>Acompanhamento do desempenho académico</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="stat-item">
                                                    <div class="stat-value">1,245</div>
                                                    <div class="stat-label">Total de estudantes</div>
                                                </div>
                                                <div class="stat-item">
                                                    <div class="stat-value">98%</div>
                                                    <div class="stat-label">Inscrições ativas</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="courseManagement">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCourseManagement" aria-expanded="false"
                                        aria-controls="collapseCourseManagement">
                                        <i class="bi bi-book me-3"></i>
                                        Sistema de gestão de cursos
                                    </button>
                                </h2>
                                <div id="collapseCourseManagement" class="accordion-collapse collapse"
                                    aria-labelledby="courseManagement" data-bs-parent="#basicAccordion" role="region">
                                    <div class="accordion-body">
                                        <p><strong>Descrição:</strong> Sistema avançado de gestão de cursos para criar,
                                            organizar e manter cursos académicos.</p>

                                        <div class="dashboard-grid grid-cols-2 mt-3">
                                            <div>
                                                <h6>Criação e configuração de cursos</h6>
                                                <ul>
                                                    <li>Conceção do currículo dos cursos</li>
                                                    <li>Atribuição de horário e sala de aula</li>
                                                    <li>Gestão de pré-requisitos</li>
                                                    <li>Atribuição de créditos</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h6>Inscrição e progresso</h6>
                                                <div class="progress-indicator">
                                                    <div class="progress-bar" style="width: 85%"></div>
                                                </div>
                                                <small class="text-muted">Progresso do semestre atual: 85%</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="gradeManagement">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseGradeManagement" aria-expanded="false"
                                        aria-controls="collapseGradeManagement">
                                        <i class="bi bi-graph-up me-3"></i>
                                        Gestão de notas e análise de dados
                                    </button>
                                </h2>
                                <div id="collapseGradeManagement" class="accordion-collapse collapse"
                                    aria-labelledby="gradeManagement" data-bs-parent="#basicAccordion" role="region">
                                    <div class="accordion-body">
                                        <p><strong>Painel de análise de dados:</strong> Gestão abrangente de notas com
                                            análise em tempo real e acompanhamento do desempenho.</p>

                                        <div class="dashboard-grid grid-cols-4">
                                            <div>
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h5 class="text-success">A</h5>
                                                        <p class="card-text">Nota média</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h5 class="text-primary">3.85</h5>
                                                        <p class="card-text">Média</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h5 class="text-warning">92%</h5>
                                                        <p class="card-text">Taxa de aprovação</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h5 class="text-info">156</h5>
                                                        <p class="card-text">Trabalhos</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="reportingSystem">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseReportingSystem" aria-expanded="false"
                                        aria-controls="collapseReportingSystem">
                                        <i class="bi bi-file-text me-3"></i>
                                        Relatórios e comunicação
                                    </button>
                                </h2>
                                <div id="collapseReportingSystem" class="accordion-collapse collapse"
                                    aria-labelledby="reportingSystem" data-bs-parent="#basicAccordion" role="region">
                                    <div class="accordion-body">
                                        <p><strong>Centro de comunicação:</strong> Sistema integrado de relatórios e comunicação
                                            para as partes interessadas.</p>

                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle me-2"></i>
                                            <strong>Última atualização:</strong> Foi lançado um novo portal para encarregados
                                            de educação, com acesso às notas em tempo real.
                                        </div>

                                        <div class="dashboard-grid grid-cols-2">
                                            <div>
                                                <h6>Relatórios disponíveis</h6>
                                                <div class="list-group">
                                                    <div
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Relatório de progresso académico
                                                        <span class="badge bg-primary rounded-pill">PDF</span>
                                                    </div>
                                                    <div
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Resumo da assiduidade
                                                        <span class="badge bg-success rounded-pill">Excel</span>
                                                    </div>
                                                    <div
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Distribuição das notas
                                                        <span class="badge bg-warning rounded-pill">Gráfico</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h6>Ações rápidas</h6>
                                                <div class="d-grid gap-2">
                                                    <button type="button" class="btn btn-primary">Send Parent
                                                        Notification</button>
                                                    <button type="button" class="btn btn-outline-secondary">Generate
                                                        Report</button>
                                                    <button type="button" class="btn btn-outline-info">Schedule
                                                        Meeting</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Accordion -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Perguntas frequentes</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <div class="accordion faq-accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFaq1" aria-expanded="false"
                                        aria-controls="collapseFaq1">
                                        Como me inscrevo num novo curso no semestre da primavera de 2025?
                                    </button>
                                </h2>
                                <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="faq1"
                                    data-bs-parent="#faqAccordion" role="region">
                                    <div class="accordion-body">
                                        <p><strong>Resposta:</strong> Para se inscrever num novo curso no semestre da
                                            primavera de 2025, siga estes passos:</p>
                                        <ol>
                                            <li>Inicie sessão no portal do estudante com as suas credenciais</li>
                                            <li>Aceda à secção "Inscrição em cursos"</li>
                                            <li>Consulte os cursos disponíveis para o semestre da primavera de 2025</li>
                                            <li>Verifique os pré-requisitos e a compatibilidade de horários</li>
                                            <li>Clique em "Adicionar ao carrinho" nos cursos pretendidos</li>
                                            <li>Reveja a seleção e clique em "Confirmar inscrição"</li>
                                            <li>Aguarde a aprovação do orientador (normalmente 24-48 horas)</li>
                                        </ol>
                                        <div class="alert alert-warning mt-3">
                                            <i class="bi bi-exclamation-triangle me-2"></i>
                                            <strong>Importante:</strong> O prazo de inscrição para o semestre da
                                            primavera de 2025 termina a 15 de dezembro de 2024.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFaq2" aria-expanded="false"
                                        aria-controls="collapseFaq2">
                                        Quais são os requisitos de conclusão do curso para 2025?
                                    </button>
                                </h2>
                                <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="faq2"
                                    data-bs-parent="#faqAccordion" role="region">
                                    <div class="accordion-body">
                                        <p><strong>Resposta:</strong> Os requisitos de conclusão do curso para 2025 incluem:</p>
                                        <ul>
                                            <li>Conclua pelo menos 120 créditos</li>
                                            <li>Mantenha uma média acumulada igual ou superior a 2,0</li>
                                            <li>Conclua todos os requisitos específicos do curso</li>
                                            <li>Cumpra os requisitos de formação geral</li>
                                            <li>Conclua o projeto final ou a dissertação</li>
                                            <li>Regularizar todos os encargos financeiros</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFaq3" aria-expanded="false"
                                        aria-controls="collapseFaq3">
                                        Como posso consultar o meu histórico académico?
                                    </button>
                                </h2>
                                <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="faq3"
                                    data-bs-parent="#faqAccordion" role="region">
                                    <div class="accordion-body">
                                        <p><strong>Resposta:</strong> Pode consultar o seu histórico académico de várias
                                            formas:</p>
                                        <div class="dashboard-grid grid-cols-2">
                                            <div>
                                                <h6>Acesso online</h6>
                                                <ul>
                                                    <li>Iniciar sessão no portal do estudante</li>
                                                    <li>Aceda a "Registos académicos"</li>
                                                    <li>Selecione "Ver/transferir histórico académico"</li>
                                                    <li>Escolha o formato (PDF ou HTML)</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h6>Pedido de histórico académico oficial</h6>
                                                <ul>
                                                    <li>Dirija-se aos Serviços Académicos</li>
                                                    <li>Preencha o formulário de pedido de histórico académico</li>
                                                    <li>Pague a taxa de processamento de 10 $</li>
                                                    <li>Conte com um prazo de 3 a 5 dias úteis</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFaq4" aria-expanded="false"
                                        aria-controls="collapseFaq4">
                                        Que opções de apoio financeiro estão disponíveis para 2025-2026?
                                    </button>
                                </h2>
                                <div id="collapseFaq4" class="accordion-collapse collapse" aria-labelledby="faq4"
                                    data-bs-parent="#faqAccordion" role="region">
                                    <div class="accordion-body">
                                        <p><strong>Resposta:</strong> Existem várias opções de apoio financeiro para o
                                            ano letivo de 2025-2026:</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h6 class="card-title">Bolsas de mérito</h6>
                                                        <p class="card-text">Bolsas entre 1 000 $ e o valor integral das
                                                            propinas, atribuídas com base no mérito académico</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h6 class="card-title">Subsídios com base nas necessidades financeiras</h6>
                                                        <p class="card-text">Apoio financeiro atribuído com base nas
                                                            necessidades comprovadas</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h6 class="card-title">Programas de trabalho-estudo</h6>
                                                        <p class="card-text">Oportunidades de trabalho a tempo parcial
                                                            no campus</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h6 class="card-title">Empréstimos para estudantes</h6>
                                                        <p class="card-text">Opções de empréstimos públicos e privados
                                                            com taxas competitivas</p>
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

                <!-- Course Schedule Accordion -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Horário dos cursos do semestre de outono de 2025</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <div class="accordion academic-accordion" id="scheduleAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="monday">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseMonday" aria-expanded="true"
                                        aria-controls="collapseMonday">
                                        <i class="bi bi-calendar-day me-3"></i>
                                        Horário de segunda-feira
                                        <span class="badge bg-warning ms-auto me-2">3 aulas</span>
                                    </button>
                                </h2>
                                <div id="collapseMonday" class="accordion-collapse collapse show"
                                    aria-labelledby="monday" data-bs-parent="#scheduleAccordion" role="region">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <div class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h6 class="mb-1">Ciência Informática Avançada</h6>
                                                        <p class="mb-0 text-muted">CS-401 • Dra. Jane Smith • Sala 301
                                                        </p>
                                                    </div>
                                                    <span class="badge bg-primary">10:00 - 11:30</span>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h6 class="mb-1">Álgebra Linear</h6>
                                                        <p class="mb-0 text-muted">MATH-301 • Dra. Emily Davis • Sala 205
                                                        </p>
                                                    </div>
                                                    <span class="badge bg-success">13:00 - 14:00</span>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h6 class="mb-1">Laboratório de Física</h6>
                                                        <p class="mb-0 text-muted">PHY-201L • Prof. Michael Brown • Laboratório
                                                            102</p>
                                                    </div>
                                                    <span class="badge bg-info">15:00 - 17:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="tuesday">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTuesday" aria-expanded="false"
                                        aria-controls="collapseTuesday">
                                        <i class="bi bi-calendar-day me-3"></i>
                                        Horário de terça-feira
                                        <span class="badge bg-warning ms-auto me-2">2 aulas</span>
                                    </button>
                                </h2>
                                <div id="collapseTuesday" class="accordion-collapse collapse" aria-labelledby="tuesday"
                                    data-bs-parent="#scheduleAccordion" role="region">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <div class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h6 class="mb-1">Estruturas de Dados</h6>
                                                        <p class="mb-0 text-muted">CS-302 • Dr. Robert Brown • Sala 401
                                                        </p>
                                                    </div>
                                                    <span class="badge bg-primary">14:00 - 15:30</span>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h6 class="mb-1">Redação Técnica</h6>
                                                        <p class="mb-0 text-muted">ENG-220 • Prof. Sarah Wilson • Sala
                                                            115</p>
                                                    </div>
                                                    <span class="badge bg-warning">16:00 - 17:30</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="wednesday">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseWednesday" aria-expanded="false"
                                        aria-controls="collapseWednesday">
                                        <i class="bi bi-calendar-day me-3"></i>
                                        Horário de quarta-feira
                                        <span class="badge bg-warning ms-auto me-2">3 aulas</span>
                                    </button>
                                </h2>
                                <div id="collapseWednesday" class="accordion-collapse collapse"
                                    aria-labelledby="wednesday" data-bs-parent="#scheduleAccordion" role="region">
                                    <div class="accordion-body">
                                        <p class="text-muted">Igual ao horário de segunda-feira</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="thursday">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThursday" aria-expanded="false"
                                        aria-controls="collapseThursday">
                                        <i class="bi bi-calendar-day me-3"></i>
                                        Horário de quinta-feira
                                        <span class="badge bg-warning ms-auto me-2">2 aulas</span>
                                    </button>
                                </h2>
                                <div id="collapseThursday" class="accordion-collapse collapse"
                                    aria-labelledby="thursday" data-bs-parent="#scheduleAccordion" role="region">
                                    <div class="accordion-body">
                                        <p class="text-muted">Igual ao horário de terça-feira</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="friday">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFriday" aria-expanded="false"
                                        aria-controls="collapseFriday">
                                        <i class="bi bi-calendar-day me-3"></i>
                                        Horário de sexta-feira
                                        <span class="badge bg-success ms-auto me-2">2 aulas</span>
                                    </button>
                                </h2>
                                <div id="collapseFriday" class="accordion-collapse collapse" aria-labelledby="friday"
                                    data-bs-parent="#scheduleAccordion" role="region">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <div class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h6 class="mb-1">Ciência Informática Avançada</h6>
                                                        <p class="mb-0 text-muted">CS-401 • Dra. Jane Smith • Sala 301
                                                        </p>
                                                    </div>
                                                    <span class="badge bg-primary">10:00 - 11:30</span>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h6 class="mb-1">Álgebra Linear</h6>
                                                        <p class="mb-0 text-muted">MATH-301 • Dra. Emily Davis • Sala 205
                                                        </p>
                                                    </div>
                                                    <span class="badge bg-success">13:00 - 14:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Course Accordion -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Acordeão interativo de cursos</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <div id="customAccordion">
                            <div class="course-accordion-item">
                                <div class="course-accordion-header" data-target="course1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-0"><i class="bi bi-cpu me-2"></i>Fundamentos de aprendizagem automática
                                            </h6>
                                            <small class="text-muted">CS-450 • Primavera de 2025</small>
                                        </div>
                                        <span class="badge bg-primary">3 créditos</span>
                                    </div>
                                </div>
                                <div class="course-accordion-content" id="course1">
                                    <p>Introdução aos algoritmos e aplicações de aprendizagem automática.</p>
                                    <div class="dashboard-grid grid-cols-2">
                                        <div>
                                            <strong>Pré-requisitos:</strong>
                                            <ul>
                                                <li>Estruturas de Dados (CS-302)</li>
                                                <li>Álgebra Linear (MATH-301)</li>
                                                <li>Estatística (STAT-201)</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <strong>Horário:</strong>
                                            <p>Terças e quintas-feiras<br>10:00 - 11:30<br>Sala 405</p>
                                            <button type="button" class="btn btn-sm btn-primary">Inscrever-se agora</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="course-accordion-item">
                                <div class="course-accordion-header" data-target="course2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-0"><i class="bi bi-shield-lock me-2"></i>Princípios de
                                                cibersegurança</h6>
                                            <small class="text-muted">CS-480 • Primavera de 2025</small>
                                        </div>
                                        <span class="badge bg-warning">4 créditos</span>
                                    </div>
                                </div>
                                <div class="course-accordion-content" id="course2">
                                    <p>Estudo abrangente dos conceitos e práticas de cibersegurança.</p>
                                    <div class="alert alert-warning">
                                        <i class="bi bi-exclamation-triangle me-2"></i>
                                        Vagas limitadas — restam apenas 5!
                                    </div>
                                </div>
                            </div>

                            <div class="course-accordion-item">
                                <div class="course-accordion-header" data-target="course3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-0"><i class="bi bi-globe me-2"></i>Desenvolvimento Web Avançado
                                            </h6>
                                            <small class="text-muted">CS-390 • Primavera de 2025</small>
                                        </div>
                                        <span class="badge bg-success">3 créditos</span>
                                    </div>
                                </div>
                                <div class="course-accordion-content" id="course3">
                                    <p>Desenvolvimento web avançado com tecnologias e frameworks modernos.</p>
                                    <div class="progress-indicator mb-3">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <small class="text-muted">Inscrições: 21/30 estudantes</small>
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
        // Custom accordion functionality
document.addEventListener('DOMContentLoaded', function() {
    // Custom course accordion
    const courseHeaders = document.querySelectorAll('.course-accordion-header');

    courseHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const content = document.getElementById(targetId);
            const parentItem = this.parentElement;

            // Close all other accordion items
            document.querySelectorAll('.course-accordion-item').forEach(item => {
                if (item !== parentItem) {
                    item.classList.remove('active');
                }
            });

            // Toggle current item
            parentItem.classList.toggle('active');
        });
    });

    // Smooth scroll for accordion items
    const accordionButtons = document.querySelectorAll('.accordion-button');
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            setTimeout(() => {
                const target = this.getAttribute('data-bs-target');
                const element = document.querySelector(target);
                if (element && !this.classList.contains('collapsed')) {
                    element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            }, 350);
        });
    });

    // Add animation classes
    const accordionCollapses = document.querySelectorAll('.accordion-collapse');
    accordionCollapses.forEach(collapse => {
        collapse.addEventListener('shown.bs.collapse', function() {
            this.classList.add('fade-in');
        });

        collapse.addEventListener('hidden.bs.collapse', function() {
            this.classList.remove('fade-in');
        });
    });
});

// Add fade-in animation style
const style = document.createElement('style');
style.textContent = `
    .fade-in {
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;
document.head.appendChild(style);
    </script>

    <!-- Load JavaScript -->




</body>

</html>