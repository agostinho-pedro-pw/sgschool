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

    <title>Mapas de dados - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/data-maps-C6myEBjv.js') }}"></script>
    <link rel="modulepreload" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}">
    <link rel="modulepreload" crossorigin href="{{ asset('dashboard/assets/dist/assets/leaflet-src-DP9mk-gB.js') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/leaflet-src-CcXJxNtP.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <style>
        .data-map-card {
            background: #fff;
            border-radius: 12px;
            margin-bottom: 24px;
            padding: 30px;
            box-shadow: 0 1px 3px #0000001a
        }

        .map-container {
            border-radius: 8px;
            height: 400px;
            margin-top: 20px;
            overflow: hidden;
            box-shadow: 0 2px 4px #0000001a
        }

        .map-legend {
            background: #fff;
            border-radius: 8px;
            margin-top: 15px;
            padding: 15px;
            box-shadow: 0 2px 4px #0000001a
        }

        .legend-title {
            margin-bottom: 10px;
            font-weight: 600
        }

        .legend-item {
            align-items: center;
            margin-bottom: 8px;
            display: flex
        }

        .legend-color {
            border-radius: 4px;
            width: 24px;
            height: 24px;
            margin-right: 10px
        }

        .data-stats {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 20px;
            display: grid
        }

        .stat-card {
            text-align: center;
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px
        }

        .stat-value {
            color: #4361ee;
            margin-bottom: 5px;
            font-size: 32px;
            font-weight: 700
        }

        .stat-label {
            color: #6b7280;
            font-size: 14px
        }

        .heatmap-info {
            background: #e0e7ff;
            border-radius: 8px;
            margin-top: 15px;
            padding: 15px
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
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#mapsSubmenu" aria-expanded="true">
                            <i class="bi bi-map"></i>
                            <span>Mapas</span>
                        </a>
                        <ul id="mapsSubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link " href="google-map.html">Mapas interativos</a></li>
                            <li><a class="nav-link active" href="data-maps.html">Mapas de dados</a></li>
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
                        <li class="breadcrumb-item active">Mapas de dados</li>
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
                    <h1 class="h3 mb-0 text-gray-800">Mapas de visualização de dados</h1>
                    <p class="text-muted">Mapas de dados interativos com camadas de visualização (sem dependências de jQuery)</p>
                </div>

                <!-- Student Distribution Map -->
                <div class="data-map-card">
                    <h5 class="mb-0">Distribuição dos estudantes por localização</h5>
                    <p class="text-muted small">Mapa interativo das inscrições de estudantes por região</p>
                    <div id="studentMap" class="map-container"></div>
                    <div class="map-legend">
                        <div class="legend-title">Níveis de inscrição</div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: #10b981;"></div>
                            <span>Elevado (mais de 500 estudantes)</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: #f59e0b;"></div>
                            <span>Médio (200-500 estudantes)</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: #ef4444;"></div>
                            <span>Reduzido (0-200 estudantes)</span>
                        </div>
                    </div>
                    <div class="data-stats">
                        <div class="stat-card">
                            <div class="stat-value">2,450</div>
                            <div class="stat-label">Total de estudantes</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">12</div>
                            <div class="stat-label">Localizações</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">85%</div>
                            <div class="stat-label">Cobertura urbana</div>
                        </div>
                    </div>
                </div>

                <!-- Campus Activity Heatmap -->
                <div class="data-map-card">
                    <h5 class="mb-0">Mapa de calor da atividade no campus</h5>
                    <p class="text-muted small">Visualização em tempo real do movimento de pessoas no campus</p>
                    <div id="heatmapMap" class="map-container"></div>
                    <div class="heatmap-info">
                        <i class="bi bi-info-circle me-2"></i>
                        <strong>Nota:</strong> Este mapa de calor apresenta padrões simulados de atividade nas instalações
                        do campus. As áreas mais escuras indicam níveis de atividade mais elevados.
                    </div>
                </div>

                <!-- Performance Data Map -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="data-map-card">
                            <h5 class="mb-3">Localizações dos departamentos</h5>
                            <div id="departmentMap" class="map-container" style="height: 300px;"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="data-map-card">
                            <h5 class="mb-3">Centros de investigação</h5>
                            <div id="researchMap" class="map-container" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Data Insights -->
                <div class="data-map-card">
                    <h5 class="mb-3">Informações sobre os dados</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="text-center">
                                <i class="bi bi-people-fill text-primary" style="font-size: 48px;"></i>
                                <h4 class="mt-3">2,450</h4>
                                <p class="text-muted">Estudantes ativos</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <i class="bi bi-geo-alt-fill text-success" style="font-size: 48px;"></i>
                                <h4 class="mt-3">12</h4>
                                <p class="text-muted">Localizações do campus</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <i class="bi bi-building text-warning" style="font-size: 48px;"></i>
                                <h4 class="mt-3">8</h4>
                                <p class="text-muted">Departamentos</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <i class="bi bi-graph-up text-info" style="font-size: 48px;"></i>
                                <h4 class="mt-3">92%</h4>
                                <p class="text-muted">Taxa de satisfação</p>
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

    <!-- Leaflet from the local npm package; module import so Vite bundles it. -->


    <script>
        // Data Visualization Maps (Vanilla JavaScript)
document.addEventListener('DOMContentLoaded', function() {
    const centerCoords = [37.7749, -122.4194];

    // Student Distribution Map
    const studentMap = L.map('studentMap').setView(centerCoords, 11);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© Contribuidores do OpenStreetMap'
    }).addTo(studentMap);

    // Sample data points for student distribution
    const studentData = [
        { coords: [37.7749, -122.4194], count: 580, name: 'Campus principal' },
        { coords: [37.7849, -122.4094], count: 420, name: 'Campus norte' },
        { coords: [37.7649, -122.4294], count: 350, name: 'Campus sul' },
        { coords: [37.7949, -122.4394], count: 180, name: 'Campus oeste' },
        { coords: [37.7549, -122.3994], count: 520, name: 'Campus este' },
        { coords: [37.8049, -122.4194], count: 400, name: 'Centro de extensão' }
    ];

    studentData.forEach(location => {
        const color = location.count > 500 ? '#10b981' :
                     location.count > 200 ? '#f59e0b' : '#ef4444';

        const circle = L.circle(location.coords, {
            color: color,
            fillColor: color,
            fillOpacity: 0.6,
            radius: location.count * 2
        }).addTo(studentMap);

        circle.bindPopup(`
            <b>${location.name}</b><br>
            Estudantes: ${location.count}<br>
            <small>Clique para ver mais detalhes</small>
        `);

        // Add marker
        L.marker(location.coords).addTo(studentMap)
            .bindPopup(`<b>${location.name}</b><br>${location.count} estudantes`);
    });

    // Campus Activity Heatmap
    const heatmapMap = L.map('heatmapMap').setView(centerCoords, 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© Contribuidores do OpenStreetMap'
    }).addTo(heatmapMap);

    // Simulate heatmap with circles
    const heatmapData = [
        { coords: [37.7749, -122.4194], intensity: 0.9, name: 'Biblioteca' },
        { coords: [37.7759, -122.4184], intensity: 0.7, name: 'Cafeteria' },
        { coords: [37.7739, -122.4204], intensity: 0.8, name: 'Gym' },
        { coords: [37.7769, -122.4174], intensity: 0.6, name: 'Lab Building' },
        { coords: [37.7729, -122.4214], intensity: 0.5, name: 'Centro de estudantes' }
    ];

    heatmapData.forEach(point => {
        const opacity = point.intensity;
        const radius = point.intensity * 150;

        L.circle(point.coords, {
            color: '#ef4444',
            fillColor: '#ef4444',
            fillOpacity: opacity * 0.5,
            radius: radius,
            weight: 1
        }).addTo(heatmapMap).bindPopup(`
            <b>${point.name}</b><br>
            Activity Level: ${(point.intensity * 100).toFixed(0)}%
        `);
    });

    // Department Map
    const departmentMap = L.map('departmentMap').setView(centerCoords, 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© Contribuidores do OpenStreetMap'
    }).addTo(departmentMap);

    const departments = [
        { coords: [37.7749, -122.4194], name: 'Ciência Informática', icon: '💻' },
        { coords: [37.7769, -122.4174], name: 'Engenharia', icon: '⚙️' },
        { coords: [37.7729, -122.4214], name: 'Gestão', icon: '💼' },
        { coords: [37.7789, -122.4204], name: 'Artes', icon: '🎨' }
    ];

    departments.forEach(dept => {
        L.marker(dept.coords).addTo(departmentMap)
            .bindPopup(`<b>${dept.icon} ${dept.name}</b>`);
    });

    // Research Centers Map
    const researchMap = L.map('researchMap').setView(centerCoords, 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© Contribuidores do OpenStreetMap'
    }).addTo(researchMap);

    const researchCenters = [
        { coords: [37.7759, -122.4184], name: 'Laboratório de Investigação em IA', projects: 12 },
        { coords: [37.7739, -122.4204], name: 'Centro de Biotecnologia', projects: 8 },
        { coords: [37.7779, -122.4164], name: 'Centro de Ciência de Dados', projects: 15 }
    ];

    researchCenters.forEach(center => {
        const marker = L.marker(center.coords).addTo(researchMap);
        marker.bindPopup(`
            <b>🔬 ${center.name}</b><br>
            Projetos ativos: ${center.projects}<br>
            <a href="#" class="text-primary">Ver detalhes</a>
        `);

        // Add circle to show research area
        L.circle(center.coords, {
            color: '#4361ee',
            fillColor: '#4361ee',
            fillOpacity: 0.2,
            radius: 200
        }).addTo(researchMap);
    });
});
    </script>

    <!-- Load JavaScript -->




</body>

</html>