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

    <title>Tabela estática - Painel sgSchool</title>

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

        .table-custom {
            border-radius: 8px;
            overflow: hidden
        }

        .table-custom thead {
            color: #fff;
            background: linear-gradient(135deg, #4361ee, #6366f1)
        }

        .table-custom thead th {
            text-transform: uppercase;
            letter-spacing: .5px;
            border: none;
            padding: 16px;
            font-size: .875rem;
            font-weight: 600
        }

        .table-custom tbody tr {
            transition: all .3s
        }

        .table-custom tbody tr:hover {
            background-color: #f8f9fa;
            transform: scale(1.01);
            box-shadow: 0 2px 4px #0000000d
        }

        .table-custom tbody td {
            vertical-align: middle;
            padding: 14px 16px
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
            margin-bottom: 2px;
            font-weight: 600
        }

        .student-email {
            color: #6b7280;
            font-size: .875rem
        }

        .grade-badge {
            text-align: center;
            border-radius: 20px;
            min-width: 50px;
            padding: 6px 12px;
            font-size: .875rem;
            font-weight: 600;
            display: inline-block
        }

        .grade-a {
            color: #fff;
            background: #10b981
        }

        .grade-b {
            color: #fff;
            background: #3b82f6
        }

        .grade-c {
            color: #fff;
            background: #f59e0b
        }

        .grade-d {
            color: #fff;
            background: #ef4444
        }

        .grade-f {
            color: #fff;
            background: #6b7280
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

        .status-completed {
            color: #5b21b6;
            background: #ddd6fe
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
            .table-responsive {
                border: none
            }

            .table-custom {
                font-size: .875rem
            }

            .table-custom thead th,
            .table-custom tbody td {
                padding: 10px
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
                            <li><a class="nav-link active" href="static-table.html">Tabelas estáticas</a></li>
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
                        <li class="breadcrumb-item active">Tabela estática</li>
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
                            <h1 class="h3 mb-0 text-gray-800">Tabelas estáticas</h1>
                            <p class="text-muted mb-0">Tabelas de dados abrangentes para a gestão académica.</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary">
                                <i class="bi bi-download me-2"></i>Exportarar dados
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Student Information Table -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Informações do estudante</h5>
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control form-control-sm" placeholder="Pesquisar estudantes..."
                                    style="width: 200px;">
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="bi bi-plus me-1"></i>Adicionar Estudante
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-custom mb-0">
                                <thead>
                                    <tr>
                                        <th>Estudante</th>
                                        <th>ID Number</th>
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
                                        <td class="fw-semibold">2025001</td>
                                        <td>Ci?ncias Inform?ticas</td>
                                        <td>3.? ano</td>
                                        <td><span class="badge bg-success">3.85</span></td>
                                        <td><span class="status-badge status-active">Ativo</span></td>
                                        <td>Sep 2022</td>
                                        <td>
                                            <button type="button" class="btn-action btn-view" title="Ver"
                                                aria-label="Ver">
                                                <i aria-hidden="true" class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-edit" title="Editar"
                                                aria-label="Editar">
                                                <i aria-hidden="true" class="bi bi-pencil"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-delete" title="Excluir"
                                                aria-label="Excluir">
                                                <i aria-hidden="true" class="bi bi-trash"></i>
                                            </button>
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
                                        <td class="fw-semibold">2025002</td>
                                        <td>Matem?tica</td>
                                        <td>2nd Ano</td>
                                        <td><span class="badge bg-success">3.92</span></td>
                                        <td><span class="status-badge status-active">Ativo</span></td>
                                        <td>Sep 2023</td>
                                        <td>
                                            <button type="button" class="btn-action btn-view" title="Ver"
                                                aria-label="Ver">
                                                <i aria-hidden="true" class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-edit" title="Editar"
                                                aria-label="Editar">
                                                <i aria-hidden="true" class="bi bi-pencil"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-delete" title="Excluir"
                                                aria-label="Excluir">
                                                <i aria-hidden="true" class="bi bi-trash"></i>
                                            </button>
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
                                        <td class="fw-semibold">2025003</td>
                                        <td>Physics</td>
                                        <td>4.º Ano</td>
                                        <td><span class="badge bg-warning">3.45</span></td>
                                        <td><span class="status-badge status-active">Ativo</span></td>
                                        <td>Sep 2021</td>
                                        <td>
                                            <button type="button" class="btn-action btn-view" title="Ver"
                                                aria-label="Ver">
                                                <i aria-hidden="true" class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-edit" title="Editar"
                                                aria-label="Editar">
                                                <i aria-hidden="true" class="bi bi-pencil"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-delete" title="Excluir"
                                                aria-label="Excluir">
                                                <i aria-hidden="true" class="bi bi-trash"></i>
                                            </button>
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
                                        <td class="fw-semibold">2025004</td>
                                        <td>Engenharia</td>
                                        <td>1.? ano</td>
                                        <td><span class="badge bg-info">3.65</span></td>
                                        <td><span class="status-badge status-pending">Pendente</span></td>
                                        <td>Sep 2024</td>
                                        <td>
                                            <button type="button" class="btn-action btn-view" title="Ver"
                                                aria-label="Ver">
                                                <i aria-hidden="true" class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-edit" title="Editar"
                                                aria-label="Editar">
                                                <i aria-hidden="true" class="bi bi-pencil"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-delete" title="Excluir"
                                                aria-label="Excluir">
                                                <i aria-hidden="true" class="bi bi-trash"></i>
                                            </button>
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
                                        <td class="fw-semibold">2025005</td>
                                        <td>Biologia</td>
                                        <td>3.? ano</td>
                                        <td><span class="badge bg-success">3.78</span></td>
                                        <td><span class="status-badge status-active">Ativo</span></td>
                                        <td>Sep 2022</td>
                                        <td>
                                            <button type="button" class="btn-action btn-view" title="Ver"
                                                aria-label="Ver">
                                                <i aria-hidden="true" class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-edit" title="Editar"
                                                aria-label="Editar">
                                                <i aria-hidden="true" class="bi bi-pencil"></i>
                                            </button>
                                            <button type="button" class="btn-action btn-delete" title="Excluir"
                                                aria-label="Excluir">
                                                <i aria-hidden="true" class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Course Schedule Table -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Horário do curso - primavera de 2025</h5>
                    </div>
                    <div class="dashboard-card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>C?digo do curso</th>
                                        <th>Nome do curso</th>
                                        <th>Docente</th>
                                        <th>Time</th>
                                        <th>Sala</th>
                                        <th>Cr?ditos</th>
                                        <th>Estudantes</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold text-primary">CS-401</td>
                                        <td>Ci?ncias Inform?ticas Avan?adas</td>
                                        <td>Dr. Jane Smith</td>
                                        <td>MWF 10:00-11:30</td>
                                        <td>Sala 301</td>
                                        <td><span class="badge bg-secondary">3</span></td>
                                        <td>28/30</td>
                                        <td><span class="status-badge status-active">Aberto</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-primary">MATH-301</td>
                                        <td>?lgebra Linear</td>
                                        <td>Dr. Emily Davis</td>
                                        <td>MWF 1:00-2:00</td>
                                        <td>Sala 205</td>
                                        <td><span class="badge bg-secondary">3</span></td>
                                        <td>35/35</td>
                                        <td><span class="status-badge status-inactive">Full</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-primary">PHY-201L</td>
                                        <td>Physics Laboratory</td>
                                        <td>Prof. Michael Brown</td>
                                        <td>M 3:00-5:00</td>
                                        <td>Laborat?rio 102</td>
                                        <td><span class="badge bg-secondary">2</span></td>
                                        <td>18/20</td>
                                        <td><span class="status-badge status-active">Aberto</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-primary">CS-302</td>
                                        <td>Estruturas de dados</td>
                                        <td>Dr. Robert Brown</td>
                                        <td>TTH 2:00-3:30</td>
                                        <td>Sala 401</td>
                                        <td><span class="badge bg-secondary">4</span></td>
                                        <td>32/40</td>
                                        <td><span class="status-badge status-active">Aberto</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-primary">BIO-310</td>
                                        <td>Molecular Biologia</td>
                                        <td>Dr. Lisa Anderson</td>
                                        <td>TTH 10:00-11:30</td>
                                        <td>Sala 215</td>
                                        <td><span class="badge bg-secondary">3</span></td>
                                        <td>22/25</td>
                                        <td><span class="status-badge status-active">Aberto</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Grade Report Table -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Relatório de notas - outono de 2024</h5>
                            <select class="form-select form-select-sm" style="width: auto;">
                                <option>Todos os cursos</option>
                                <option>CS-401</option>
                                <option>MATH-301</option>
                                <option>PHY-201L</option>
                            </select>
                        </div>
                    </div>
                    <div class="dashboard-card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Nome do estudante</th>
                                        <th>Curso</th>
                                        <th class="text-center">Midterm</th>
                                        <th class="text-center">Final</th>
                                        <th class="text-center">Trabalho</th>
                                        <th class="text-center">Presenças</th>
                                        <th class="text-center">Final Nota</th>
                                        <th class="text-center">Letter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sarah Johnson</td>
                                        <td>CS-401</td>
                                        <td class="text-center">92</td>
                                        <td class="text-center">88</td>
                                        <td class="text-center">95</td>
                                        <td class="text-center">98%</td>
                                        <td class="text-center fw-bold">91.5</td>
                                        <td class="text-center"><span class="grade-badge grade-a">A</span></td>
                                    </tr>
                                    <tr>
                                        <td>Michael Chen</td>
                                        <td>MATH-301</td>
                                        <td class="text-center">95</td>
                                        <td class="text-center">93</td>
                                        <td class="text-center">90</td>
                                        <td class="text-center">100%</td>
                                        <td class="text-center fw-bold">93.2</td>
                                        <td class="text-center"><span class="grade-badge grade-a">A</span></td>
                                    </tr>
                                    <tr>
                                        <td>Emma Davis</td>
                                        <td>PHY-201L</td>
                                        <td class="text-center">78</td>
                                        <td class="text-center">82</td>
                                        <td class="text-center">85</td>
                                        <td class="text-center">92%</td>
                                        <td class="text-center fw-bold">81.8</td>
                                        <td class="text-center"><span class="grade-badge grade-b">B</span></td>
                                    </tr>
                                    <tr>
                                        <td>James Wilson</td>
                                        <td>CS-401</td>
                                        <td class="text-center">85</td>
                                        <td class="text-center">87</td>
                                        <td class="text-center">82</td>
                                        <td class="text-center">95%</td>
                                        <td class="text-center fw-bold">85.2</td>
                                        <td class="text-center"><span class="grade-badge grade-b">B+</span></td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Brown</td>
                                        <td>BIO-310</td>
                                        <td class="text-center">88</td>
                                        <td class="text-center">90</td>
                                        <td class="text-center">86</td>
                                        <td class="text-center">96%</td>
                                        <td class="text-center fw-bold">88.4</td>
                                        <td class="text-center"><span class="grade-badge grade-b">B+</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Faculty Directory Table -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Diretório de professores</h5>
                    </div>
                    <div class="dashboard-card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Corpo docente Member</th>
                                        <th>Departamento</th>
                                        <th>Position</th>
                                        <th>E-mail</th>
                                        <th>Telefone</th>
                                        <th>Horário de atendimento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=4361ee&color=fff"
                                                    alt="Dr. Jane Smith" class="student-avatar me-3" loading="lazy"
                                                    decoding="async">
                                                <span class="fw-semibold">Dr. Jane Smith</span>
                                            </div>
                                        </td>
                                        <td>Ci?ncias Inform?ticas</td>
                                        <td>Professor</td>
                                        <td><a href="mailto:j.smith@university.edu">j.smith@university.edu</a></td>
                                        <td>+1 (555) 123-4567</td>
                                        <td>MWF 2:00-4:00 PM</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://ui-avatars.com/api/?name=Emily+Davis&background=10b981&color=fff"
                                                    alt="Dr. Emily Davis" class="student-avatar me-3" loading="lazy"
                                                    decoding="async">
                                                <span class="fw-semibold">Dr. Emily Davis</span>
                                            </div>
                                        </td>
                                        <td>Matem?tica</td>
                                        <td>Associate Professor</td>
                                        <td><a href="mailto:e.davis@university.edu">e.davis@university.edu</a></td>
                                        <td>+1 (555) 123-4568</td>
                                        <td>TTH 1:00-3:00 PM</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://ui-avatars.com/api/?name=Michael+Brown&background=f59e0b&color=fff"
                                                    alt="Prof. Michael Brown" class="student-avatar me-3" loading="lazy"
                                                    decoding="async">
                                                <span class="fw-semibold">Prof. Michael Brown</span>
                                            </div>
                                        </td>
                                        <td>Physics</td>
                                        <td>Assistant Professor</td>
                                        <td><a href="mailto:m.brown@university.edu">m.brown@university.edu</a></td>
                                        <td>+1 (555) 123-4569</td>
                                        <td>MW 10:00-12:00 PM</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://ui-avatars.com/api/?name=Lisa+Anderson&background=8b5cf6&color=fff"
                                                    alt="Dr. Lisa Anderson" class="student-avatar me-3" loading="lazy"
                                                    decoding="async">
                                                <span class="fw-semibold">Dr. Lisa Anderson</span>
                                            </div>
                                        </td>
                                        <td>Biologia</td>
                                        <td>Responsável pelo departamento</td>
                                        <td><a href="mailto:l.anderson@university.edu">l.anderson@university.edu</a>
                                        </td>
                                        <td>+1 (555) 123-4570</td>
                                        <td>By appointment</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Attendance Summary Table -->
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <h5 class="mb-0">Presenças Summary - March 2025</h5>
                    </div>
                    <div class="dashboard-card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Estudante</th>
                                        <th class="text-center">Week 1</th>
                                        <th class="text-center">Week 2</th>
                                        <th class="text-center">Week 3</th>
                                        <th class="text-center">Week 4</th>
                                        <th class="text-center">Aulas em regime parcial</th>
                                        <th class="text-center">Present</th>
                                        <th class="text-center">Absent</th>
                                        <th class="text-center">Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sarah Johnson</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center">✓ ✓ <span class="text-danger">✗</span></td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center">12</td>
                                        <td class="text-center text-success">11</td>
                                        <td class="text-center text-danger">1</td>
                                        <td class="text-center"><span class="badge bg-success">92%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Michael Chen</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center">12</td>
                                        <td class="text-center text-success">12</td>
                                        <td class="text-center text-success">0</td>
                                        <td class="text-center"><span class="badge bg-success">100%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Emma Davis</td>
                                        <td class="text-center">✓ <span class="text-danger">✗</span> ✓</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center">✓ <span class="text-danger">✗</span> ✓</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center">12</td>
                                        <td class="text-center text-success">10</td>
                                        <td class="text-center text-warning">2</td>
                                        <td class="text-center"><span class="badge bg-warning">83%</span></td>
                                    </tr>
                                    <tr>
                                        <td>James Wilson</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center">✓ ✓ <span class="text-danger">✗</span></td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center text-success">✓ ✓ ✓</td>
                                        <td class="text-center">12</td>
                                        <td class="text-center text-success">11</td>
                                        <td class="text-center text-danger">1</td>
                                        <td class="text-center"><span class="badge bg-success">92%</span></td>
                                    </tr>
                                </tbody>
                            </table>
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
                        <p class="mb-0">Feito com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Table interactions
document.addEventListener('DOMContentLoaded', function() {
    // Add click handlers for action buttons
    const viewButtons = document.querySelectorAll('.btn-view');
    const editButtons = document.querySelectorAll('.btn-edit');
    const deleteButtons = document.querySelectorAll('.btn-delete');

    viewButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            alert('A opção de visualização abriria os detalhes do estudante/curso');
        });
    });

    editButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            alert('A edi??o abriria o formul?rio de edi??o.');
        });
    });

    deleteButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            if (confirm('Tem a certeza de que pretende excluir este registo?')) {
                alert('A elimina??o removeria este registo.');
            }
        });
    });

    // Table row selection
    const tableRows = document.querySelectorAll('tbody tr');
    tableRows.forEach(row => {
        row.style.cursor = 'pointer';
        row.addEventListener('click', function(e) {
            // Don't select if clicking on action buttons
            if (!e.target.closest('.btn-action')) {
                // Remove previous selection
                tableRows.forEach(r => r.classList.remove('table-active'));
                // Add selection to clicked row
                this.classList.add('table-active');
            }
        });
    });

    // Search functionality
    const searchInput = document.querySelector('input[placeholder="Pesquisar estudantes..."]');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const studentRows = document.querySelectorAll('.table-custom tbody tr');

            studentRows.forEach(row => {
                const studentName = row.querySelector('.student-name')?.textContent.toLowerCase();
                const studentEmail = row.querySelector('.student-email')?.textContent.toLowerCase();

                if (studentName?.includes(searchTerm) || studentEmail?.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
});
    </script>

    <!-- Load JavaScript -->




</body>

</html>