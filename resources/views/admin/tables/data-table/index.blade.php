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

    <title>Tabela de dados - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/data-table-D_Hjr_1Q.js') }}"></script>
    <link rel="modulepreload" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/data-table-O8f5ZFnd.css') }}">
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

        @media (width<=768px) {
            .dashboard-grid {
                gap: 16px
            }

            .grid-cols-2 {
                grid-template-columns: 1fr
            }
        }

        .dashboard-card {
            margin-bottom: 24px
        }

        .dashboard-card:last-child {
            margin-bottom: 0
        }

        .dataTable-wrapper .dataTable-top,
        .dataTable-wrapper .dataTable-bottom {
            padding: 10px 0
        }

        .dataTable-wrapper .dataTable-search {
            margin-bottom: 20px
        }

        .dataTable-wrapper .dataTable-input {
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            margin-left: 10px;
            padding: 8px 12px
        }

        .dataTable-wrapper .dataTable-selector {
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            margin: 0 5px;
            padding: 8px 12px
        }

        .dataTable-table thead th {
            color: #fff;
            text-transform: uppercase;
            letter-spacing: .5px;
            background: linear-gradient(135deg, #4361ee, #6366f1);
            border: none;
            font-size: .875rem;
            font-weight: 600
        }

        .dataTable-table tbody tr {
            transition: all .3s
        }

        .dataTable-table tbody tr:hover {
            transform: scale(1.01);
            box-shadow: 0 2px 4px #0000000d;
            background-color: #f8f9fa !important
        }

        .dataTable-pagination a.active {
            border-radius: 6px;
            color: #fff !important;
            background: #4361ee !important;
            border: 1px solid #4361ee !important
        }

        .dataTable-pagination a:hover {
            color: #fff !important;
            background: #6366f1 !important;
            border: 1px solid #6366f1 !important
        }

        .export-buttons {
            margin-bottom: 20px
        }

        .export-btn {
            color: #fff;
            cursor: pointer;
            background: #4361ee;
            border: none;
            border-radius: 6px;
            margin-right: 8px;
            padding: 8px 16px;
            transition: all .3s
        }

        .export-btn:hover {
            background: #6366f1;
            transform: translateY(-2px)
        }

        .status-badge {
            text-transform: uppercase;
            letter-spacing: .5px;
            border-radius: 12px;
            padding: 4px 10px;
            font-size: .75rem;
            font-weight: 600
        }

        .status-active {
            color: #065f46;
            background: #d1fae5
        }

        .status-pending {
            color: #92400e;
            background: #fed7aa
        }

        .status-inactive {
            color: #374151;
            background: #e5e7eb
        }

        .status-graduated {
            color: #5b21b6;
            background: #ddd6fe
        }

        .student-avatar {
            object-fit: cover;
            border: 2px solid #e5e7eb;
            border-radius: 50%;
            width: 40px;
            height: 40px
        }

        .student-name {
            color: #1f2937;
            font-weight: 600
        }

        .student-email {
            color: #6b7280;
            font-size: .875rem
        }

        .btn-action {
            border: none;
            border-radius: 6px;
            justify-content: center;
            align-items: center;
            width: 32px;
            height: 32px;
            margin: 0 2px;
            padding: 0;
            transition: all .3s;
            display: inline-flex
        }

        .btn-action:hover {
            transform: translateY(-2px)
        }

        .btn-view {
            color: #4338ca;
            background: #e0e7ff
        }

        .btn-view:hover {
            color: #fff;
            background: #4338ca
        }

        .btn-edit {
            color: #d97706;
            background: #fef3c7
        }

        .btn-edit:hover {
            color: #fff;
            background: #d97706
        }

        .btn-delete {
            color: #dc2626;
            background: #fee2e2
        }

        .btn-delete:hover {
            color: #fff;
            background: #dc2626
        }

        @media (width<=768px) {

            .dataTables_wrapper .dataTables_length,
            .dataTables_wrapper .dataTables_filter,
            .dt-buttons {
                text-align: center
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
    <!-- Simple DataTables CSS -->




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
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#tablesSubmenu" aria-expanded="true">
                            <i class="bi bi-table"></i>
                            <span>Tables</span>
                        </a>
                        <ul id="tablesSubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link " href="static-table.html">Tabelas estáticas</a></li>
                            <li><a class="nav-link active" href="data-table.html">Tabelas de dados</a></li>
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
                <div class="menu-section-title">Páginas</div>
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
                        <li class="breadcrumb-item active">Tabela de dados</li>
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
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 mb-0 text-gray-800">Tabelas de dados</h1>
                            <p class="text-muted mb-0">Tabelas de dados avan?adas com funcionalidades de pesquisa, ordenação e exporta??o.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Student DataTable -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Sistema de gest?o de estudantes</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <table id="studentTable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Estudante</th>
                                    <th>ID</th>
                                    <th>Departamento</th>
                                    <th>Ano</th>
                                    <th>GPA</th>
                                    <th>Estado</th>
                                    <th>Inscritos</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=6366f1&color=fff"
                                                alt="Sarah Johnson" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Sarah Johnson</div>
                                                <div class="student-email">sarah.j@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025001</td>
                                    <td>Ci?ncias Inform?ticas</td>
                                    <td>3.? ano</td>
                                    <td>3.85</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2022-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=10b981&color=fff"
                                                alt="Michael Chen" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Michael Chen</div>
                                                <div class="student-email">m.chen@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025002</td>
                                    <td>Matem?tica</td>
                                    <td>2nd Ano</td>
                                    <td>3.92</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2023-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=f59e0b&color=fff"
                                                alt="Emma Davis" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Emma Davis</div>
                                                <div class="student-email">emma.d@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025003</td>
                                    <td>Physics</td>
                                    <td>4.º Ano</td>
                                    <td>3.45</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2021-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=James+Wilson&background=ef4444&color=fff"
                                                alt="James Wilson" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">James Wilson</div>
                                                <div class="student-email">james.w@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025004</td>
                                    <td>Engenharia</td>
                                    <td>1.? ano</td>
                                    <td>3.65</td>
                                    <td><span class="status-badge status-pending">Pendente</span></td>
                                    <td>2024-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Olivia+Brown&background=8b5cf6&color=fff"
                                                alt="Olivia Brown" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Olivia Brown</div>
                                                <div class="student-email">olivia.b@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025005</td>
                                    <td>Biologia</td>
                                    <td>3.? ano</td>
                                    <td>3.78</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2022-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Alex+Martinez&background=06b6d4&color=fff"
                                                alt="Alex Martinez" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Alex Martinez</div>
                                                <div class="student-email">alex.m@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025006</td>
                                    <td>Chemistry</td>
                                    <td>2nd Ano</td>
                                    <td>3.55</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2023-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Lisa+Thompson&background=ec4899&color=fff"
                                                alt="Lisa Thompson" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Lisa Thompson</div>
                                                <div class="student-email">lisa.t@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025007</td>
                                    <td>Psicologia</td>
                                    <td>4.º Ano</td>
                                    <td>3.88</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2021-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Robert+Garcia&background=f97316&color=fff"
                                                alt="Robert Garcia" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Robert Garcia</div>
                                                <div class="student-email">robert.g@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025008</td>
                                    <td>History</td>
                                    <td>3.? ano</td>
                                    <td>3.72</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2022-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Jennifer+Lee&background=84cc16&color=fff"
                                                alt="Jennifer Lee" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Jennifer Lee</div>
                                                <div class="student-email">jennifer.l@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025009</td>
                                    <td>Economics</td>
                                    <td>2nd Ano</td>
                                    <td>3.91</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2023-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=David+Kim&background=0891b2&color=fff"
                                                alt="David Kim" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">David Kim</div>
                                                <div class="student-email">david.k@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025010</td>
                                    <td>Sociologia</td>
                                    <td>1.? ano</td>
                                    <td>3.49</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2024-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Maria+Rodriguez&background=dc2626&color=fff"
                                                alt="Maria Rodriguez" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Maria Rodriguez</div>
                                                <div class="student-email">maria.r@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025011</td>
                                    <td>Filosofia</td>
                                    <td>4.º Ano</td>
                                    <td>3.82</td>
                                    <td><span class="status-badge status-graduated">Licenciado</span></td>
                                    <td>2021-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Kevin+White&background=7c3aed&color=fff"
                                                alt="Kevin White" class="student-avatar me-3" loading="lazy"
                                                decoding="async">
                                            <div>
                                                <div class="student-name">Kevin White</div>
                                                <div class="student-email">kevin.w@university.edu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2025012</td>
                                    <td>M?sica</td>
                                    <td>3.? ano</td>
                                    <td>3.67</td>
                                    <td><span class="status-badge status-active">Ativo</span></td>
                                    <td>2022-09-01</td>
                                    <td>
                                        <button type="button" class="btn-action btn-view" title="Ver"
                                            aria-label="Ver"><i aria-hidden="true" class="bi bi-eye"></i></button>
                                        <button type="button" class="btn-action btn-edit" title="Editar"
                                            aria-label="Editar"><i aria-hidden="true" class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn-action btn-delete" title="Excluir"
                                            aria-label="Excluir"><i aria-hidden="true" class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Course DataTable -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Gestão de cursos — primavera de 2025</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <table id="courseTable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>C?digo do curso</th>
                                    <th>Nome do curso</th>
                                    <th>Departamento</th>
                                    <th>Docente</th>
                                    <th>Cr?ditos</th>
                                    <th>Horário</th>
                                    <th>Inscritos</th>
                                    <th>Capacidade</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CS-401</td>
                                    <td>Ci?ncias Inform?ticas Avan?adas</td>
                                    <td>Ci?ncias Inform?ticas</td>
                                    <td>Dr. Jane Smith</td>
                                    <td>3</td>
                                    <td>MWF 10:00-11:30</td>
                                    <td>28</td>
                                    <td>30</td>
                                    <td><span class="status-badge status-active">Aberto</span></td>
                                </tr>
                                <tr>
                                    <td>MATH-301</td>
                                    <td>?lgebra Linear</td>
                                    <td>Matem?tica</td>
                                    <td>Dr. Emily Davis</td>
                                    <td>3</td>
                                    <td>MWF 1:00-2:00</td>
                                    <td>35</td>
                                    <td>35</td>
                                    <td><span class="status-badge status-inactive">Full</span></td>
                                </tr>
                                <tr>
                                    <td>PHY-201L</td>
                                    <td>Physics Laboratory</td>
                                    <td>Physics</td>
                                    <td>Prof. Michael Brown</td>
                                    <td>2</td>
                                    <td>M 3:00-5:00</td>
                                    <td>18</td>
                                    <td>20</td>
                                    <td><span class="status-badge status-active">Aberto</span></td>
                                </tr>
                                <tr>
                                    <td>CS-302</td>
                                    <td>Estruturas de dados</td>
                                    <td>Ci?ncias Inform?ticas</td>
                                    <td>Dr. Robert Brown</td>
                                    <td>4</td>
                                    <td>TTH 2:00-3:30</td>
                                    <td>32</td>
                                    <td>40</td>
                                    <td><span class="status-badge status-active">Aberto</span></td>
                                </tr>
                                <tr>
                                    <td>BIO-310</td>
                                    <td>Molecular Biologia</td>
                                    <td>Biologia</td>
                                    <td>Dr. Lisa Anderson</td>
                                    <td>3</td>
                                    <td>TTH 10:00-11:30</td>
                                    <td>22</td>
                                    <td>25</td>
                                    <td><span class="status-badge status-active">Aberto</span></td>
                                </tr>
                                <tr>
                                    <td>CHEM-205</td>
                                    <td>Organic Chemistry</td>
                                    <td>Chemistry</td>
                                    <td>Dr. John Taylor</td>
                                    <td>4</td>
                                    <td>MWF 9:00-10:30</td>
                                    <td>30</td>
                                    <td>30</td>
                                    <td><span class="status-badge status-inactive">Full</span></td>
                                </tr>
                                <tr>
                                    <td>PSY-301</td>
                                    <td>Cognitive Psicologia</td>
                                    <td>Psicologia</td>
                                    <td>Dr. Sarah Wilson</td>
                                    <td>3</td>
                                    <td>TTH 1:00-2:30</td>
                                    <td>25</td>
                                    <td>30</td>
                                    <td><span class="status-badge status-active">Aberto</span></td>
                                </tr>
                                <tr>
                                    <td>HIST-250</td>
                                    <td>World History</td>
                                    <td>History</td>
                                    <td>Prof. Mark Johnson</td>
                                    <td>3</td>
                                    <td>MWF 2:00-3:00</td>
                                    <td>40</td>
                                    <td>45</td>
                                    <td><span class="status-badge status-active">Aberto</span></td>
                                </tr>
                                <tr>
                                    <td>ECON-310</td>
                                    <td>Macroeconomics</td>
                                    <td>Economics</td>
                                    <td>Dr. Jennifer Adams</td>
                                    <td>3</td>
                                    <td>TTH 3:00-4:30</td>
                                    <td>28</td>
                                    <td>35</td>
                                    <td><span class="status-badge status-active">Aberto</span></td>
                                </tr>
                                <tr>
                                    <td>ENG-220</td>
                                    <td>Escrita t?cnica</td>
                                    <td>Inglês</td>
                                    <td>Prof. David Miller</td>
                                    <td>3</td>
                                    <td>TTH 4:00-5:30</td>
                                    <td>20</td>
                                    <td>25</td>
                                    <td><span class="status-badge status-active">Aberto</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Grade DataTable -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Sistema de gest?o de notas</h5>
                    </div>
                    <div class="dashboard-card-body px-4 py-4">
                        <table id="gradeTable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nome do estudante</th>
                                    <th>Estudante ID</th>
                                    <th>Curso</th>
                                    <th>Midterm</th>
                                    <th>Final</th>
                                    <th>Trabalho</th>
                                    <th>Presenças</th>
                                    <th>Paratal</th>
                                    <th>Nota</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sarah Johnson</td>
                                    <td>2025001</td>
                                    <td>CS-401</td>
                                    <td>92</td>
                                    <td>88</td>
                                    <td>95</td>
                                    <td>98%</td>
                                    <td>91.5</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Michael Chen</td>
                                    <td>2025002</td>
                                    <td>MATH-301</td>
                                    <td>95</td>
                                    <td>93</td>
                                    <td>90</td>
                                    <td>100%</td>
                                    <td>93.2</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Emma Davis</td>
                                    <td>2025003</td>
                                    <td>PHY-201L</td>
                                    <td>78</td>
                                    <td>82</td>
                                    <td>85</td>
                                    <td>92%</td>
                                    <td>81.8</td>
                                    <td>B</td>
                                </tr>
                                <tr>
                                    <td>James Wilson</td>
                                    <td>2025004</td>
                                    <td>CS-401</td>
                                    <td>85</td>
                                    <td>87</td>
                                    <td>82</td>
                                    <td>95%</td>
                                    <td>85.2</td>
                                    <td>B+</td>
                                </tr>
                                <tr>
                                    <td>Olivia Brown</td>
                                    <td>2025005</td>
                                    <td>BIO-310</td>
                                    <td>88</td>
                                    <td>90</td>
                                    <td>86</td>
                                    <td>96%</td>
                                    <td>88.4</td>
                                    <td>B+</td>
                                </tr>
                                <tr>
                                    <td>Alex Martinez</td>
                                    <td>2025006</td>
                                    <td>CHEM-205</td>
                                    <td>76</td>
                                    <td>79</td>
                                    <td>82</td>
                                    <td>88%</td>
                                    <td>78.9</td>
                                    <td>C+</td>
                                </tr>
                                <tr>
                                    <td>Lisa Thompson</td>
                                    <td>2025007</td>
                                    <td>PSY-301</td>
                                    <td>91</td>
                                    <td>89</td>
                                    <td>93</td>
                                    <td>97%</td>
                                    <td>91.0</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Robert Garcia</td>
                                    <td>2025008</td>
                                    <td>HIST-250</td>
                                    <td>84</td>
                                    <td>86</td>
                                    <td>88</td>
                                    <td>94%</td>
                                    <td>86.2</td>
                                    <td>B+</td>
                                </tr>
                            </tbody>
                        </table>
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
                        <p class="mb-0">Feito com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Simple DataTables JS (Vanilla JavaScript - No jQuery!) -->


    <!-- Load JavaScript -->




</body>

</html>