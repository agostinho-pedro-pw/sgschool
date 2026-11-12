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

    <title>Carregamento múltiplo - Painel sgSchool</title>

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
                            <li><a class="nav-link active" href="multi-upload.html">Carregamento de ficheiros</a></li>
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
                        <li class="breadcrumb-item active">Carregamento múltiplo</li>
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
                    <h1 class="h3 font-bold">Carregamento múltiplo</h1>
                    <p class="text-muted text-sm">Carregamento avançado de ficheiros com arrastar e largar,
                        acompanhamento do progresso e pré-visualização</p>
                </div>

                <!-- Upload Zone Row -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title mb-0">Zona de carregamento de ficheiros</h5>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="upload-zone" id="uploadZone">
                                    <div class="upload-zone-content">
                                        <i class="bi bi-cloud-upload upload-icon"></i>
                                        <h5>Arraste e largue os ficheiros aqui</h5>
                                        <p class="text-muted">ou clique para procurar</p>
                                        <button type="button" class="btn btn-primary" id="browseFiles">
                                            <i class="bi bi-folder-open me-2"></i>Procurar ficheiros
                                        </button>
                                        <input type="file" id="fileInput" multiple
                                            accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.txt,.zip,.rar"
                                            style="display: none;">
                                    </div>
                                </div>

                                <!-- File Type Info -->
                                <div class="mt-3">
                                    <small class="text-muted">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Formatos suportados: imagens (JPG, PNG, GIF), documentos (PDF, DOC, DOCX, TXT),
                                        ficheiros compactados (ZIP, RAR)
                                        <br>
                                        Tamanho máximo por ficheiro: 10 MB | Tamanho máximo total: 100 MB
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Controls Row -->
                <div class="dashboard-row" id="uploadControlsRow" style="display: none;">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header d-flex justify-content-between align-items-center">
                                <h5 class="dashboard-card-title mb-0">Fila de carregamento</h5>
                                <div>
                                    <button type="button" class="btn btn-outline-secondary btn-sm me-2"
                                        id="selectAllFiles">
                                        <i class="bi bi-check-all me-1"></i>Selecionar tudo
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm me-2"
                                        id="removeAllFiles">
                                        <i class="bi bi-trash me-1"></i>Remover tudo
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" id="uploadAllFiles">
                                        <i class="bi bi-cloud-upload me-1"></i>Carregar tudo
                                    </button>
                                </div>
                            </div>
                            <div class="dashboard-card-body">
                                <div id="fileList" class="file-list"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Progress and Completed Row -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-2">
                        <!-- Upload Progress -->
                        <div class="dashboard-card" id="progressCard" style="display: none;">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title mb-0">Progresso do carregamento</h5>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fw-semibold">Progresso geral</span>
                                        <span id="overallProgress">0%</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-success" role="progressbar" id="overallProgressBar"
                                            style="width: 0%"></div>
                                    </div>
                                </div>
                                <div id="uploadingFiles"></div>
                            </div>
                        </div>

                        <!-- Completed Uploads -->
                        <div class="dashboard-card" id="completedCard" style="display: none;">
                            <div class="dashboard-card-header d-flex justify-content-between align-items-center">
                                <h5 class="dashboard-card-title mb-0">Carregamentos concluídos</h5>
                                <button type="button" class="btn btn-outline-primary btn-sm" id="clearCompleted">
                                    <i class="bi bi-trash me-1"></i>Limpar tudo
                                </button>
                            </div>
                            <div class="dashboard-card-body">
                                <div id="completedList" class="completed-list"></div>
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
        class MultiFileUploader {
            constructor() {
                this.files = new Map();
                this.maxFileSize = 10 * 1024 * 1024; // 10MB
                this.maxTotalSize = 100 * 1024 * 1024; // 100MB
                this.allowedTypes = [
                    'image/jpeg', 'image/jpg', 'image/png', 'image/gif',
                    'application/pdf', 'application/msword',
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'text/plain', 'application/zip', 'application/x-rar-compressed'
                ];
                this.init();
            }

            init() {
                this.setupEventListeners();
                this.setupDragAndDrop();
            }

            setupEventListeners() {
                const fileInput = document.getElementById('fileInput');
                const browseFiles = document.getElementById('browseFiles');
                const selectAllFiles = document.getElementById('selectAllFiles');
                const removeAllFiles = document.getElementById('removeAllFiles');
                const uploadAllFiles = document.getElementById('uploadAllFiles');
                const clearCompleted = document.getElementById('clearCompleted');

                browseFiles.addEventListener('click', () => fileInput.click());
                fileInput.addEventListener('change', (e) => this.handleFileSelect(e.target.files));
                selectAllFiles.addEventListener('click', () => this.selectAllFiles());
                removeAllFiles.addEventListener('click', () => this.removeAllFiles());
                uploadAllFiles.addEventListener('click', () => this.uploadAllFiles());
                clearCompleted.addEventListener('click', () => this.clearCompleted());
            }

            setupDragAndDrop() {
                const uploadZone = document.getElementById('uploadZone');

                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                    uploadZone.addEventListener(eventName, this.preventDefaults, false);
                });

                ['dragenter', 'dragover'].forEach(eventName => {
                    uploadZone.addEventListener(eventName, () => this.highlight(uploadZone), false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                    uploadZone.addEventListener(eventName, () => this.unhighlight(uploadZone), false);
                });

                uploadZone.addEventListener('drop', (e) => this.handleDrop(e), false);
            }

            preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            highlight(element) {
                element.classList.add('drag-over');
            }

            unhighlight(element) {
                element.classList.remove('drag-over');
            }

            handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                this.handleFileSelect(files);
            }

            handleFileSelect(files) {
                Array.from(files).forEach(file => {
                    if (this.validateFile(file)) {
                        const fileId = this.generateFileId();
                        this.files.set(fileId, {
                            file: file,
                            id: fileId,
                            status: 'pending',
                            progress: 0,
                            selected: false
                        });
                    }
                });
                this.updateUI();
            }

            validateFile(file) {
                // Check file size
                if (file.size > this.maxFileSize) {
                    this.showAlert(`O ficheiro "${file.name}" é demasiado grande. O tamanho máximo é 10 MB.`, 'warning');
                    return false;
                }

                // Check file type
                if (!this.allowedTypes.includes(file.type)) {
                    this.showAlert(`O formato do ficheiro "${file.name}" não é suportado.`, 'warning');
                    return false;
                }

                // Check total size
                const currentTotal = Array.from(this.files.values()).reduce((sum, fileData) => sum + fileData.file.size, 0);
                if (currentTotal + file.size > this.maxTotalSize) {
                    this.showAlert('O tamanho total dos ficheiros excede o limite de 100 MB.', 'warning');
                    return false;
                }

                return true;
            }

            generateFileId() {
                return Date.now().toString(36) + Math.random().toString(36).substr(2);
            }

            updateUI() {
                const uploadControlsRow = document.getElementById('uploadControlsRow');

                if (this.files.size > 0) {
                    uploadControlsRow.style.display = 'block';
                    this.renderFileList();
                } else {
                    uploadControlsRow.style.display = 'none';
                }
            }

            renderFileList() {
                const fileList = document.getElementById('fileList');
                fileList.innerHTML = '';

                this.files.forEach((fileData, fileId) => {
                    if (fileData.status === 'pending' || fileData.status === 'uploading') {
                        const fileItem = this.createFileItem(fileData);
                        fileList.appendChild(fileItem);
                    }
                });
            }

            createFileItem(fileData) {
                const div = document.createElement('div');
                div.className = 'file-item';
                div.innerHTML = `
                    <div class="d-flex align-items-center p-3 border rounded mb-2 ${fileData.selected ? 'border-primary bg-light' : 'border-light'}">
                        <input type="checkbox" class="form-check-input me-3" ${fileData.selected ? 'checked' : ''}
                               onchange="uploader.toggleFileSelection('${fileData.id}')">
                        <div class="file-preview me-3">
                            ${this.getFilePreview(fileData.file)}
                        </div>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">${fileData.file.name}</div>
                            <div class="text-muted small">
                                ${this.formatFileSize(fileData.file.size)} • ${fileData.file.type}
                            </div>
                            <div class="text-muted small">
                                Estado: <span class="badge bg-secondary">${fileData.status === 'pending' ? 'Pendente' : fileData.status === 'uploading' ? 'A carregar' : fileData.status === 'completed' ? 'Concluído' : fileData.status}</span>
                            </div>
                        </div>
                        <div class="file-actions">
                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="uploader.removeFile('${fileData.id}')" aria-label="Eliminar">
                                <i aria-hidden="true" class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                `;
                return div;
            }

            getFilePreview(file) {
                if (file.type.startsWith('image/')) {
                    const url = URL.createObjectURL(file);
                    return `<img src="${url}" alt="Pré-visualizar" class="file-thumbnail" width="40" height="40" style="object-fit: cover; border-radius: 4px;" loading="lazy" decoding="async">`;
                } else {
                    const iconMap = {
                        'application/pdf': 'file-pdf',
                        'application/msword': 'file-word',
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document': 'file-word',
                        'text/plain': 'file-text',
                        'application/zip': 'file-zip',
                        'application/x-rar-compressed': 'file-zip'
                    };
                    const icon = iconMap[file.type] || 'file';
                    return `<i class="bi bi-${icon} text-primary" style="font-size: 2rem;"></i>`;
                }
            }

            formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }

            toggleFileSelection(fileId) {
                if (this.files.has(fileId)) {
                    const fileData = this.files.get(fileId);
                    fileData.selected = !fileData.selected;
                    this.updateUI();
                }
            }

            selectAllFiles() {
                this.files.forEach(fileData => {
                    if (fileData.status === 'pending') {
                        fileData.selected = true;
                    }
                });
                this.updateUI();
            }

            removeFile(fileId) {
                this.files.delete(fileId);
                this.updateUI();
            }

            removeAllFiles() {
                const filesToRemove = [];
                this.files.forEach((fileData, fileId) => {
                    if (fileData.status === 'pending') {
                        filesToRemove.push(fileId);
                    }
                });
                filesToRemove.forEach(fileId => this.files.delete(fileId));
                this.updateUI();
            }

            async uploadAllFiles() {
                const selectedFiles = Array.from(this.files.entries())
                    .filter(([id, data]) => data.selected && data.status === 'pending');

                if (selectedFiles.length === 0) {
                    this.showAlert('Selecione os ficheiros a carregar.', 'warning');
                    return;
                }

                // Show progress card
                document.getElementById('progressCard').style.display = 'block';

                for (const [fileId, fileData] of selectedFiles) {
                    await this.uploadFile(fileData);
                }

                this.updateOverallProgress();
            }

            async uploadFile(fileData) {
                fileData.status = 'uploading';
                this.updateUI();
                this.addToUploadingList(fileData);

                // Simulate upload with progress
                return new Promise((resolve) => {
                    let progress = 0;
                    const interval = setInterval(() => {
                        progress += Math.random() * 15;
                        if (progress >= 100) {
                            progress = 100;
                            fileData.status = 'completed';
                            fileData.progress = 100;
                            this.moveToCompleted(fileData);
                            this.removeFromUploadingList(fileData.id);
                            clearInterval(interval);
                            resolve();
                        } else {
                            fileData.progress = progress;
                            this.updateFileProgress(fileData.id, progress);
                        }
                    }, 100 + Math.random() * 200);
                });
            }

            addToUploadingList(fileData) {
                const uploadingFiles = document.getElementById('uploadingFiles');
                const div = document.createElement('div');
                div.id = `uploading-${fileData.id}`;
                div.className = 'uploading-file mb-3';
                div.innerHTML = `
                    <div class="d-flex align-items-center mb-2">
                        <div class="file-preview me-3">
                            ${this.getFilePreview(fileData.file)}
                        </div>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">${fileData.file.name}</div>
                            <div class="text-muted small">${this.formatFileSize(fileData.file.size)}</div>
                        </div>
                        <div class="upload-status">
                            <span id="progress-text-${fileData.id}">0%</span>
                        </div>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-primary" id="progress-bar-${fileData.id}"
                             role="progressbar" style="width: 0%"></div>
                    </div>
                `;
                uploadingFiles.appendChild(div);
            }

            updateFileProgress(fileId, progress) {
                const progressText = document.getElementById(`progress-text-${fileId}`);
                const progressBar = document.getElementById(`progress-bar-${fileId}`);
                if (progressText) progressText.textContent = Math.round(progress) + '%';
                if (progressBar) progressBar.style.width = progress + '%';
            }

            removeFromUploadingList(fileId) {
                const element = document.getElementById(`uploading-${fileId}`);
                if (element) {
                    element.remove();
                }
            }

            moveToCompleted(fileData) {
                const completedCard = document.getElementById('completedCard');
                const completedList = document.getElementById('completedList');

                completedCard.style.display = 'block';

                const div = document.createElement('div');
                div.className = 'completed-file d-flex align-items-center p-3 border rounded mb-2 border-success bg-success bg-opacity-10';
                div.innerHTML = `
                    <div class="file-preview me-3">
                        ${this.getFilePreview(fileData.file)}
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-semibold">${fileData.file.name}</div>
                        <div class="text-muted small">
                            ${this.formatFileSize(fileData.file.size)} • Carregado com sucesso
                        </div>
                    </div>
                    <div class="text-success">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                `;
                completedList.appendChild(div);
            }

            updateOverallProgress() {
                const totalFiles = Array.from(this.files.values()).filter(f => f.selected).length;
                const completedFiles = Array.from(this.files.values()).filter(f => f.status === 'completed' && f.selected).length;

                if (totalFiles > 0) {
                    const progress = (completedFiles / totalFiles) * 100;
                    const progressText = document.getElementById('overallProgress');
                    const progressBar = document.getElementById('overallProgressBar');

                    if (progressText) progressText.textContent = Math.round(progress) + '%';
                    if (progressBar) progressBar.style.width = progress + '%';
                }
            }

            clearCompleted() {
                const completedList = document.getElementById('completedList');
                completedList.innerHTML = '';
                document.getElementById('completedCard').style.display = 'none';

                // Remove completed files from memory
                const completedIds = [];
                this.files.forEach((fileData, fileId) => {
                    if (fileData.status === 'completed') {
                        completedIds.push(fileId);
                    }
                });
                completedIds.forEach(id => this.files.delete(id));
            }

            showAlert(message, type = 'info') {
                // Create alert element
                const alertDiv = document.createElement('div');
                alertDiv.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
                alertDiv.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
                alertDiv.innerHTML = `
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;

                document.body.appendChild(alertDiv);

                // Auto remove after 5 seconds
                setTimeout(() => {
                    if (alertDiv.parentNode) {
                        alertDiv.remove();
                    }
                }, 5000);
            }
        }

        // Add drag-over styles
        const style = document.createElement('style');
        style.textContent = `
            .upload-zone {
                border: 2px dashed #dee2e6;
                border-radius: 8px;
                padding: 3rem;
                text-align: center;
                background: #f8f9fa;
                transition: all 0.3s ease;
                cursor: pointer;
            }
            .upload-zone:hover, .upload-zone.drag-over {
                border-color: #0d6efd;
                background: rgba(13, 110, 253, 0.05);
            }
            .upload-icon {
                font-size: 3rem;
                color: #6c757d;
                margin-bottom: 1rem;
            }
            .file-list, .completed-list {
                max-height: 400px;
                overflow-y: auto;
            }
            .file-thumbnail {
                border: 1px solid #dee2e6;
            }
            .notification-item {
                display: flex;
                align-items: center;
                padding: 0.75rem;
                text-decoration: none;
                color: inherit;
                border-radius: 0.375rem;
                margin-bottom: 0.25rem;
            }
            .notification-item:hover {
                background-color: #f8f9fa;
            }
            .notification-icon {
                width: 36px;
                height: 36px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 0.75rem;
                flex-shrink: 0;
            }
        `;
        document.head.appendChild(style);

        // Initialize uploader when page loads
        let uploader;
        document.addEventListener('DOMContentLoaded', function() {
            uploader = new MultiFileUploader();
        });
    </script>

    <!-- Load JavaScript -->




</body>

</html>