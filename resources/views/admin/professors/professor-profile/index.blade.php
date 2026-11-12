<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sgSchool - Painel moderno de gestão escolar para universidades">
    <meta name="keywords" content="educação, painel, universidade, gestão, administração">
    <meta name="author" content="Agostinho Pedro">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">

    <title>Perfil do Professor - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->



    <!-- Page-specific stylesheets (set via additionalCSS in vite.config.js) -->


    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/chart-runtime-BMJJQUfu.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/charts-layout-C732DjRu.css') }}">
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

        .performance-metric {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 1rem
        }

        .performance-metric .progress {
            background: #f1f3f5;
            height: 8px
        }

        .performance-score {
            text-align: center;
            padding: 1.5rem
        }

        .score-circle {
            color: #fff;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 120px;
            height: 120px;
            margin: 0 auto 1rem;
            display: flex
        }

        .score-circle h3 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 700
        }

        .score-circle small {
            opacity: .9;
            font-size: .75rem
        }

        .award-item {
            align-items: center;
            gap: .75rem;
            display: flex
        }

        .publication-item,
        .research-project-item {
            background: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 1rem;
            padding: 1rem
        }

        .grant-item {
            padding: .5rem 0
        }

        .activity-timeline,
        .activity-item,
        .chart-container {
            position: relative
        }

        .chart-container canvas {
            max-height: 100%
        }
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>

    <!-- Required DOM elements for dashboard.js -->
    <div class="search-backdrop" id="searchBackdrop"></div>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Barra lateral, painel lateral do site usando include -->
    @include('layouts._include.dashboard.sidebar')

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
                <nav aria-label="Navegação estrutural do cabeçalho" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                        <li class="breadcrumb-item"><a href="#">Académico</a></li>
                        <li class="breadcrumb-item"><a href="all-professors.html">Todos os Professores</a></li>
                        <li class="breadcrumb-item active">Perfil do Professor</li>
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
                                <li><a class="dropdown-item" href="#">Matrícula de Estudantes</a></li>
                                <li><a class="dropdown-item" href="#">Gestão de Cursos</a></li>
                                <li><a class="dropdown-item" href="#">Lançamento de Notas</a></li>
                                <li><a class="dropdown-item" href="#">Diretório de Professores</a></li>
                                <li><a class="dropdown-item" href="#">Recursos da Biblioteca</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Pesquisa Avançada</a></li>
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
                                            <div class="fw-semibold">Novo Evento</div>
                                            <div class="text-muted small">Feira de Ciências a 15 de março</div>
                                            <div class="text-muted small">há 5 minutos</div>
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
                                            <div class="fw-semibold">Trabalho Submetido</div>
                                            <div class="text-muted small">O João submeteu o seu trabalho</div>
                                            <div class="text-muted small">há 2 horas</div>
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
                                            <div class="fw-semibold">Alerta do Sistema</div>
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
                                        class="bi bi-person-plus me-2"></i>Adicionar Estudante</a></li>
                            <li><a class="dropdown-item" href="add-course.html"><i class="bi bi-book me-2"></i>Adicionar Curso</a></li>
                            <li><a class="dropdown-item" href="add-professor.html"><i
                                        class="bi bi-person-badge me-2"></i>Adicionar Professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Agendar Evento</a></li>
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
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Centro de Ajuda</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Terminar Sessão</a>
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
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 font-bold">Perfil do Professor</h1>
                            <p class="text-muted text-sm">Informação abrangente sobre os docentes e uma visão geral do seu desempenho.</p>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="edit-professor.html" class="btn btn-primary">
                                <i class="bi bi-pencil me-2"></i>Editar Perfil
                            </a>
                            <a href="all-professors.html" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-2"></i>Voltar aos Professores
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Professor Profile Header -->
                <div class="dashboard-row">
                    <div class="dashboard-card">
                        <div class="dashboard-card-body">
                            <div class="dashboard-grid grid-cols-12 gap-4">
                                <div class="col-span-3 text-center">
                                    <img src="https://ui-avatars.com/api/?name=Dr.+Sarah+Johnson&background=0d6efd&color=fff&size=200"
                                        alt="Dr. Sarah Johnson" class="rounded-circle mb-3"
                                        style="width: 150px; height: 150px;" loading="lazy">
                                    <div class="mb-3">
                                        <span class="badge bg-success mb-1">Ativo</span>
                                        <br>
                                        <small class="text-muted">Visto pela última vez: hoje às 9:30</small>
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <h2 class="h3 mb-1">Dr. Sarah Johnson</h2>
                                    <p class="text-muted mb-2">Professor de Ciências da Computação</p>
                                    <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                        <div>
                                            <strong>N.º de Funcionário:</strong> EMP001<br>
                                            <strong>Departamento:</strong> Ciências da Computação<br>
                                            <strong>Endereço de email:</strong> s.johnson@sgschool.edu<br>
                                            <strong>Telefone:</strong> +1 (555) 123-4567
                                        </div>
                                        <div>
                                            <strong>Gabinete:</strong> Sala 301, edifício de Ciências da Computação<br>
                                            <strong>Data de Início:</strong> 15 de agosto de 2018<br>
                                            <strong>Experiência:</strong> 12 anos<br>
                                            <strong>Vínculo:</strong> Tempo Inteiro
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <strong>Horário de Atendimento:</strong> Segunda a quarta, das 14h às 16h; sexta, das 10h às 12h
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="me-2"><strong>Classificação:</strong></span>
                                        <div class="text-warning me-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <span class="text-muted">4,8/5,0 (124 avaliações)</span>
                                    </div>
                                </div>
                                <div class="col-span-3">
                                    <div class="text-center">
                                        <div class="d-flex justify-content-center gap-2 mb-3">
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                aria-label="Mensagens">
                                                <i aria-hidden="true" class="bi bi-envelope"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary btn-sm"
                                                aria-label="Telefonar">
                                                <i aria-hidden="true" class="bi bi-telephone"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-info btn-sm"
                                                aria-label="Calendário">
                                                <i aria-hidden="true" class="bi bi-calendar"></i>
                                            </button>
                                        </div>
                                        <div class="dashboard-grid grid-cols-3 gap-2 text-center mt-3">
                                            <div class="col-4">
                                                <div class="border-end">
                                                    <h4 class="mb-1 text-primary fw-bold">5</h4>
                                                    <small class="text-muted">Cursos</small>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="border-end">
                                                    <h4 class="mb-1 text-success fw-bold">156</h4>
                                                    <small class="text-muted">Estudantes</small>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <h4 class="mb-1 text-info fw-bold">52</h4>
                                                    <small class="text-muted">Publicações</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Professor Details Tabs -->
                <div class="dashboard-row">
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <ul class="nav nav-tabs dashboard-card-tabs" id="professorTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                        data-bs-target="#overview" type="button" role="tab" aria-controls="overview"
                                        aria-selected="true">
                                        <i class="bi bi-info-circle me-2"></i>Visão Geral
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="courses-tab" data-bs-toggle="tab"
                                        data-bs-target="#courses" type="button" role="tab" aria-controls="courses"
                                        aria-selected="false">
                                        <i class="bi bi-book me-2"></i>Cursos
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="research-tab" data-bs-toggle="tab"
                                        data-bs-target="#research" type="button" role="tab" aria-controls="research"
                                        aria-selected="false">
                                        <i class="bi bi-journal-text me-2"></i>Investigação
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="performance-tab" data-bs-toggle="tab"
                                        data-bs-target="#performance" type="button" role="tab"
                                        aria-controls="performance" aria-selected="false">
                                        <i class="bi bi-graph-up me-2"></i>Desempenho
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="activity-tab" data-bs-toggle="tab"
                                        data-bs-target="#activity" type="button" role="tab" aria-controls="activity"
                                        aria-selected="false">
                                        <i class="bi bi-clock-history me-2"></i>Atividade
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="tab-content" id="professorTabContent">
                                <!-- Overview Tab -->
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab">
                                    <div class="dashboard-grid grid-cols-12 gap-4">
                                        <div class="col-span-8">
                                            <h6 class="fw-semibold mb-3">Biografia</h6>
                                            <p class="mb-3">A Dra. Sarah Johnson é uma professora distinta e investigadora de referência em inteligência artificial e aprendizagem automática. Com mais de 12 anos de experiência académica, publicou 52 artigos revistos por pares e detém 8 patentes em tecnologias de IA.</p>
                                            <p class="mb-3">A sua investigação atual centra-se em sistemas de IA ética e aprendizagem automática explicável, abordando desafios fundamentais da transparência da IA e do desenvolvimento responsável.</p>
                                            <p class="mb-3">Antes de ingressar na Universidade sgSchool, a Dra. Johnson foi investigadora sénior no Stanford Research Institute, onde liderou projetos inovadores de processamento de linguagem natural e visão por computador. O seu trabalho foi apresentado em conferências de referência, incluindo NIPS, ICML e AAAI.</p>

                                            <h6 class="fw-semibold mb-3 mt-4">Formação Académica</h6>
                                            <div class="timeline">
                                                <div class="timeline-item">
                                                    <div class="timeline-marker"></div>
                                                    <div class="timeline-content">
                                                        <h6 class="mb-1">Doutoramento em Ciências da Computação</h6>
                                                        <p class="text-muted mb-1">Universidade de Stanford • 2015</p>
                                                        <small class="text-muted">Especialização: Inteligência Artificial e Aprendizagem Automática</small>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-marker"></div>
                                                    <div class="timeline-content">
                                                        <h6 class="mb-1">Mestrado em Ciências da Computação</h6>
                                                        <p class="text-muted mb-1">MIT • 2010</p>
                                                        <small class="text-muted">Especialização: Aprendizagem Automática</small>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-marker"></div>
                                                    <div class="timeline-content">
                                                        <h6 class="mb-1">Licenciatura em Ciências da Computação</h6>
                                                        <p class="text-muted mb-1">UC Berkeley • 2008</p>
                                                        <small class="text-muted">Magna Cum Laude</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="fw-semibold mb-3 mt-4">Áreas de Investigação</h6>
                                            <div class="d-flex flex-wrap gap-2">
                                                <span class="badge bg-primary bg-opacity-10 text-primary">Inteligência Artificial</span>
                                                <span class="badge bg-primary bg-opacity-10 text-primary">Aprendizagem Automática</span>
                                                <span class="badge bg-primary bg-opacity-10 text-primary">Processamento de Linguagem Natural</span>
                                                <span class="badge bg-primary bg-opacity-10 text-primary">Visão por Computador</span>
                                                <span class="badge bg-primary bg-opacity-10 text-primary">IA Ética</span>
                                                <span class="badge bg-primary bg-opacity-10 text-primary">Aprendizagem Profunda</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Stats Cards Row -->
                                    <div class="dashboard-grid grid-cols-2 gap-4 mt-4">
                                        <div class="dashboard-card">
                                            <div class="dashboard-card-header">
                                                <h6 class="dashboard-card-title mb-0">Estatísticas Rápidas</h6>
                                            </div>
                                            <div class="dashboard-card-body">
                                                <div class="dashboard-grid grid-cols-2 gap-3">
                                                    <div>
                                                        <div class="text-muted small">Experiência</div>
                                                        <div class="fw-bold">12 anos</div>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted small">Publicações</div>
                                                        <div class="fw-bold">52 artigos científicos</div>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted small">Citações</div>
                                                        <div class="fw-bold">2,847</div>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted small">H-Index</div>
                                                        <div class="fw-bold">28</div>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted small">Financiamento de Investigação</div>
                                                        <div class="fw-bold">$2.3M</div>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted small">Prémios</div>
                                                        <div class="fw-bold">5</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dashboard-card">
                                            <div class="dashboard-card-header">
                                                <h6 class="dashboard-card-title mb-0">Informações de Contacto</h6>
                                            </div>
                                            <div class="dashboard-card-body">
                                                <div class="dashboard-grid grid-cols-1 gap-2">
                                                    <div class="d-flex align-items-center">
                                                        <i class="bi bi-envelope me-2 text-primary"></i>
                                                        <a href="mailto:s.johnson@sgschool.edu"
                                                            class="text-sm">s.johnson@sgschool.edu</a>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="bi bi-telephone me-2 text-primary"></i>
                                                        <a href="tel:+15551234567"
                                                            class="text-sm">+1&nbsp;(555)&nbsp;123&#8209;4567</a>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="bi bi-geo-alt me-2 text-primary"></i>
                                                        <span class="text-sm">Sala 301, edifício de Ciências da Computação</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="bi bi-clock me-2 text-primary"></i>
                                                        <span class="text-sm">Segunda a quarta, das 14h às 16h; sexta, das 10h às 12h</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="bi bi-globe me-2 text-primary"></i>
                                                        <a href="#" class="text-sm">Página Pessoal</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Courses Tab -->
                                <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h5 class="mb-1">Carga Letiva Atual</h5>
                                            <p class="text-muted mb-0 text-sm">Semestre de outono de 2024 • 156 estudantes no total
                                            </p>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-download me-1"></i>Exportar Horário
                                        </button>
                                    </div>

                                    <!-- Summary Cards Row -->
                                    <div class="dashboard-grid grid-cols-3 gap-3 mb-4">
                                        <div class="dashboard-card">
                                            <div class="dashboard-card-body">
                                                <div class="text-center">
                                                    <canvas id="courseDistributionChart"
                                                        style="max-height: 150px;"></canvas>
                                                    <h6 class="mt-2 mb-0">Distribuição de Cursos</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dashboard-card">
                                            <div class="dashboard-card-body">
                                                <h6 class="mb-3">Resumo da Atividade Letiva</h6>
                                                <div class="dashboard-grid grid-cols-2 gap-2">
                                                    <div>
                                                        <div class="text-muted small">Cursos Ativos</div>
                                                        <div class="fw-bold">4</div>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted small">Horário de Atendimento</div>
                                                        <div class="fw-bold">12/semana</div>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted small">Licenciatura</div>
                                                        <div class="fw-bold">86</div>
                                                    </div>
                                                    <div>
                                                        <div class="text-muted small">Pós-graduação</div>
                                                        <div class="fw-bold">70</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dashboard-card">
                                            <div class="dashboard-card-body">
                                                <h6 class="mb-3">Ações Rápidas</h6>
                                                <div class="d-grid gap-2">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-primary text-start">
                                                        <i class="bi bi-calendar-plus me-2"></i>Horário de Atendimento
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary text-start">
                                                        <i class="bi bi-file-earmark-text me-2"></i>Programas das Disciplinas
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-info text-start">
                                                        <i class="bi bi-people me-2"></i>Lista de Estudantes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Course Cards -->
                                    <h6 class="fw-semibold mb-3">Cursos Ativos</h6>
                                    <div class="dashboard-grid grid-cols-2 gap-3">
                                        <div class="mb-3">
                                            <div class="dashboard-card">
                                                <div class="dashboard-card-body">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <div>
                                                            <h6 class="mb-1 text-primary">CS 401 - Aprendizagem Automática</h6>
                                                            <small class="text-muted"><i
                                                                    class="bi bi-clock me-1"></i>Seg., qua. e sex.,
                                                                10:00–11:00</small>
                                                            <br><small class="text-muted"><i
                                                                    class="bi bi-geo-alt me-1"></i>Sala 205, edifício de
                                                                Ciências da Computação</small>
                                                        </div>
                                                        <span class="badge bg-success">Pós-graduação</span>
                                                    </div>
                                                    <div class="dashboard-grid grid-cols-3 gap-2 text-center">
                                                        <div class="col-4">
                                                            <div class="fw-bold text-primary">45/50</div>
                                                            <small class="text-muted">Inscritos</small>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="fw-bold text-success">B+</div>
                                                            <small class="text-muted">Nota Média</small>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="fw-bold text-info">94%</div>
                                                            <small class="text-muted">Conclusão</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="dashboard-card">
                                                <div class="dashboard-card-body">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <div>
                                                            <h6 class="mb-1 text-primary">CS 301 - Estruturas de Dados</h6>
                                                            <small class="text-muted"><i
                                                                    class="bi bi-clock me-1"></i>Ter. e qui.,
                                                                14:00–15:30</small>
                                                            <br><small class="text-muted"><i
                                                                    class="bi bi-geo-alt me-1"></i>Sala 102, edifício de
                                                                Ciências da Computação</small>
                                                        </div>
                                                        <span class="badge bg-primary">Licenciatura</span>
                                                    </div>
                                                    <div class="dashboard-grid grid-cols-3 gap-2 text-center">
                                                        <div class="col-4">
                                                            <div class="fw-bold text-primary">38/40</div>
                                                            <small class="text-muted">Inscritos</small>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="fw-bold text-success">A-</div>
                                                            <small class="text-muted">Nota Média</small>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="fw-bold text-info">97%</div>
                                                            <small class="text-muted">Conclusão</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="dashboard-card">
                                                <div class="dashboard-card-body">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <div>
                                                            <h6 class="mb-1 text-primary">CS 501 - Ética da IA</h6>
                                                            <small class="text-muted"><i
                                                                    class="bi bi-clock me-1"></i>Qua., 18:00–21:00</small>
                                                            <br><small class="text-muted"><i
                                                                    class="bi bi-geo-alt me-1"></i>Sala de Seminários A</small>
                                                        </div>
                                                        <span class="badge bg-warning text-dark">Seminário de pós-graduação</span>
                                                    </div>
                                                    <div class="dashboard-grid grid-cols-3 gap-2 text-center">
                                                        <div class="col-4">
                                                            <div class="fw-bold text-primary">25/30</div>
                                                            <small class="text-muted">Inscritos</small>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="fw-bold text-success">A</div>
                                                            <small class="text-muted">Nota Média</small>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="fw-bold text-success">100%</div>
                                                            <small class="text-muted">Conclusão</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="dashboard-card">
                                                <div class="dashboard-card-body">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <div>
                                                            <h6 class="mb-1 text-primary">CS 101 - Introdução à Programação</h6>
                                                            <small class="text-muted"><i
                                                                    class="bi bi-clock me-1"></i>Seg. e qua., 13:00–14:30</small>
                                                            <br><small class="text-muted"><i
                                                                    class="bi bi-geo-alt me-1"></i>Laboratório 301, edifício de
                                                                Ciências da Computação</small>
                                                        </div>
                                                        <span class="badge bg-info">Introdução</span>
                                                    </div>
                                                    <div class="dashboard-grid grid-cols-3 gap-2 text-center">
                                                        <div class="col-4">
                                                            <div class="fw-bold text-primary">48/50</div>
                                                            <small class="text-muted">Inscritos</small>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="fw-bold text-success">B</div>
                                                            <small class="text-muted">Nota Média</small>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="fw-bold text-info">92%</div>
                                                            <small class="text-muted">Conclusão</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h6 class="fw-semibold mb-3">Histórico Letivo</h6>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Curso</th>
                                                <th>Semestre</th>
                                                <th>Estudantes</th>
                                                <th>Nota Média</th>
                                                <th>Classificação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CS 401 - Aprendizagem Automática</td>
                                                <td>Primavera de 2024</td>
                                                <td>42</td>
                                                <td>B+</td>
                                                <td>4.8/5.0</td>
                                            </tr>
                                            <tr>
                                                <td>CS 301 - Estruturas de Dados</td>
                                                <td>Outono de 2023</td>
                                                <td>45</td>
                                                <td>A-</td>
                                                <td>4.9/5.0</td>
                                            </tr>
                                            <tr>
                                                <td>CS 501 - Ética da IA</td>
                                                <td>Primavera de 2023</td>
                                                <td>28</td>
                                                <td>A</td>
                                                <td>4.7/5.0</td>
                                            </tr>
                                            <tr>
                                                <td>CS 101 - Introdução à Programação</td>
                                                <td>Outono de 2022</td>
                                                <td>50</td>
                                                <td>B</td>
                                                <td>4.6/5.0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Research Tab -->
                        <div class="tab-pane fade" id="research" role="tabpanel" aria-labelledby="research-tab">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="mb-1">Portefólio de Investigação</h5>
                                    <p class="text-muted mb-0 text-sm">IA, Aprendizagem Automática e Ética • 52 publicações • 2.847 citações</p>
                                </div>
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button" class="btn btn-outline-primary active">Publicações</button>
                                    <button type="button" class="btn btn-outline-primary">Projetos</button>
                                    <button type="button" class="btn btn-outline-primary">Financiamentos</button>
                                </div>
                            </div>

                            <!-- Research Metrics Row -->
                            <div class="dashboard-grid grid-cols-3 gap-3 mb-4">
                                <div class="dashboard-card">
                                    <div class="dashboard-card-body text-center">
                                        <h4 class="text-primary mb-0">2,847</h4>
                                        <small class="text-muted">Total de Citações</small>
                                        <div class="dashboard-grid grid-cols-2 gap-2 mt-2">
                                            <div>
                                                <div class="fw-bold">28</div>
                                                <small class="text-muted">H-Index</small>
                                            </div>
                                            <div>
                                                <div class="fw-bold">52</div>
                                                <small class="text-muted">Artigos científicos</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-card">
                                    <div class="dashboard-card-body">
                                        <h6 class="mb-2">Financiamentos Ativos</h6>
                                        <div class="small">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span>NSF</span>
                                                <strong>$850K</strong>
                                            </div>
                                            <div class="d-flex justify-content-between mb-1">
                                                <span>DARPA</span>
                                                <strong>$650K</strong>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span>Setor privado</span>
                                                <strong>$450K</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-card">
                                    <div class="dashboard-card-body">
                                        <h6 class="mb-2">Áreas de Investigação</h6>
                                        <div class="d-flex flex-wrap gap-1">
                                            <span class="badge bg-primary bg-opacity-10 text-primary small">Ética da IA</span>
                                            <span class="badge bg-info bg-opacity-10 text-info small">Aprendizagem Automática</span>
                                            <span class="badge bg-success bg-opacity-10 text-success small">NLP</span>
                                            <span class="badge bg-warning bg-opacity-10 text-warning small">XAI</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Publications Grid -->
                            <h6 class="fw-semibold mb-3">Publicações Recentes (2022–2024)</h6>
                            <div class="dashboard-grid grid-cols-3 gap-3 mb-4">
                                <div class="publication-item">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h6 class="mb-0 text-primary">"Sistemas de IA ética"</h6>
                                        <span class="badge bg-success">2023</span>
                                    </div>
                                    <p class="text-muted mb-1 small">Nature AI</p>
                                    <p class="text-sm mb-2">Estrutura para o desenvolvimento responsável de IA, que aborda desafios éticos.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-info bg-opacity-10 text-info small">Ética da IA</span>
                                        </div>
                                        <small class="text-muted"><i class="bi bi-quote"></i> 47</small>
                                    </div>
                                </div>

                                <div class="publication-item">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h6 class="mb-0 text-primary">"Algoritmos de Aprendizagem Automática para Processamento de Linguagem Natural"</h6>
                                        <span class="badge bg-primary">2022</span>
                                    </div>
                                    <p class="text-muted mb-1 small">ACM Computing Surveys</p>
                                    <p class="text-sm mb-2">Análise dos algoritmos mais avançados de aprendizagem automática para o processamento da linguagem.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-info bg-opacity-10 text-info small">NLP</span>
                                        </div>
                                        <small class="text-muted"><i class="bi bi-quote"></i> 89</small>
                                    </div>
                                </div>

                                <div class="publication-item">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h6 class="mb-0 text-primary">"Inteligência Artificial Explicável"</h6>
                                        <span class="badge bg-primary">2022</span>
                                    </div>
                                    <p class="text-muted mb-1 small">AAAI Conference</p>
                                    <p class="text-sm mb-2">Novas abordagens para decisões de IA interpretáveis e transparentes.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-info bg-opacity-10 text-info small">XAI</span>
                                        </div>
                                        <small class="text-muted"><i class="bi bi-quote"></i> 156</small>
                                    </div>
                                </div>

                                <div class="publication-item">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h6 class="mb-0 text-primary">"Segurança da Aprendizagem Profunda"</h6>
                                        <span class="badge bg-warning text-dark">2024</span>
                                    </div>
                                    <p class="text-muted mb-1 small">IEEE Security &amp; Privacy</p>
                                    <p class="text-sm mb-2">Ataques adversariais e mecanismos de defesa em redes neuronais profundas.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-info bg-opacity-10 text-info small">Segurança</span>
                                        </div>
                                        <small class="text-muted"><i class="bi bi-quote"></i> 23</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Active Research Projects -->
                            <h6 class="fw-semibold mb-3">Projetos de Investigação Ativos</h6>
                            <div class="dashboard-grid grid-cols-2 gap-3">
                                <div class="research-project-item">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h6 class="mb-1">Desenvolvimento de uma estrutura de IA ética</h6>
                                                            <p class="text-sm text-muted mb-0">Bolsa da NSF n.º 12345 • $850,000 • 2023–2026
                                            </p>
                                        </div>
                                        <span class="badge bg-success">Ativo</span>
                                    </div>
                                    <p class="text-sm">Desenvolvimento de estruturas abrangentes para a criação de IA ética na área da saúde.</p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar bg-success" style="width: 35%"></div>
                                    </div>
                                </div>

                                <div class="research-project-item">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h6 class="mb-1">Sistemas de Aprendizagem Automática Explicável</h6>
                                            <p class="text-sm text-muted mb-0">Bolsa do NIH • $1,200,000 • 2024–2027</p>
                                        </div>
                                        <span class="badge bg-warning">Pendente</span>
                                    </div>
                                    <p class="text-sm">Criação de modelos interpretáveis de aprendizagem automática para diagnóstico médico, com explicações compreensíveis.</p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar bg-warning" style="width: 15%"></div>
                                    </div>
                                </div>

                                <div class="research-project-item">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h6 class="mb-1">Investigação sobre segurança da aprendizagem automática</h6>
                                            <p class="text-sm text-muted mb-0">Bolsa da DARPA • $650,000 • 2023–2025</p>
                                        </div>
                                        <span class="badge bg-success">Ativo</span>
                                    </div>
                                    <p class="text-sm">Desenvolvimento de defesas robustas contra ataques adversariais em sistemas de aprendizagem profunda.</p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar bg-success" style="width: 60%"></div>
                                    </div>
                                </div>

                                <div class="research-project-item">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h6 class="mb-1">Soluções de IA aplicada</h6>
                                            <p class="text-sm text-muted mb-0">Parceria com o setor privado • $450,000 • 2024–2026</p>
                                        </div>
                                        <span class="badge bg-info">Em Planeamento</span>
                                    </div>
                                    <p class="text-sm">Investigação colaborativa sobre aplicações práticas de IA para automatização empresarial.</p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar bg-info" style="width: 10%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Performance Tab -->
                        <div class="tab-pane fade" id="performance" role="tabpanel" aria-labelledby="performance-tab">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="mb-1">Análise do Desempenho Letivo</h5>
                                    <p class="text-muted mb-0 text-sm">8 anos de dados • 124 avaliações de estudantes • Classificação geral: 4,8/5,0</p>
                                </div>
                            </div>

                            <!-- Performance Charts Row -->
                            <div class="dashboard-grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <h6 class="fw-semibold mb-3">Tendências do Desempenho Letivo</h6>
                                    <div class="chart-container"
                                        style="height: 350px; position: relative; background: #f8f9fa; border-radius: 8px; padding: 20px;">
                                        <canvas id="performanceChart"></canvas>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="fw-semibold mb-3">Distribuição das Classificações dos Cursos</h6>
                                    <div class="chart-container"
                                        style="height: 350px; position: relative; background: #f8f9fa; border-radius: 8px; padding: 20px;">
                                        <canvas id="ratingDistributionChart"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Student Evaluation Metrics -->
                            <h6 class="fw-semibold mb-3">Indicadores de Avaliação dos Estudantes</h6>
                            <p class="text-muted mb-3 text-sm">Com base em 124 avaliações de estudantes dos últimos 2 anos letivos</p>
                            <div class="dashboard-grid grid-cols-4 gap-3 mb-4">
                                <div>
                                    <div class="performance-metric">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Organização do Curso</span>
                                            <span class="fw-semibold">4.9/5.0</span>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 98%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="performance-metric">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Clareza do Ensino</span>
                                            <span class="fw-semibold">4.8/5.0</span>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 96%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="performance-metric">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Accessibility</span>
                                            <span class="fw-semibold">4.7/5.0</span>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-info" style="width: 94%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="performance-metric">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Assignment Quality</span>
                                            <span class="fw-semibold">4.6/5.0</span>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" style="width: 92%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Performance Sidebar Cards -->
                    <div class="dashboard-grid grid-cols-2 gap-4 mt-4">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h6 class="dashboard-card-title mb-0">Resumo do Desempenho</h6>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="performance-score">
                                    <div class="score-circle">
                                        <h3 class="text-success">4.8</h3>
                                        <small>Classificação Geral</small>
                                    </div>
                                    <div class="score-details text-center">
                                        <div class="score-item">
                                            <span>Excelente</span>
                                            <strong class="d-block">124 avaliações</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h6 class="dashboard-card-title mb-0">Reconhecimentos Recentes</h6>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="award-item mb-2">
                                    <i class="bi bi-trophy text-warning me-2"></i>
                                    <div>
                                        <div class="fw-semibold small">Professor do Ano</div>
                                        <small class="text-muted">2023</small>
                                    </div>
                                </div>
                                <div class="award-item mb-2">
                                    <i class="bi bi-award text-primary me-2"></i>
                                    <div>
                                        <div class="fw-semibold small">Excelência na Investigação</div>
                                        <small class="text-muted">2022</small>
                                    </div>
                                </div>
                                <div class="award-item">
                                    <i class="bi bi-star text-info me-2"></i>
                                    <div>
                                        <div class="fw-semibold small">Prémio de Inovação</div>
                                        <small class="text-muted">2021</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Tab -->
                <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h5 class="mb-1">Linha do Tempo de Atividades Docentes</h5>
                            <p class="text-muted mb-0 text-sm">Conquistas recentes, publicações e atividades académicas</p>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown">
                                <i class="bi bi-filter me-1"></i>Filtrar
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item active" href="#">Todas as Atividades</a></li>
                                <li><a class="dropdown-item" href="#">Publicações</a></li>
                                <li><a class="dropdown-item" href="#">Ensino</a></li>
                                <li><a class="dropdown-item" href="#">Conferências</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Activity Summary Cards -->
                    <div class="dashboard-grid grid-cols-4 gap-3 mb-4">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <i class="bi bi-journal-plus text-success mb-2" style="font-size: 1.5rem;"></i>
                                <div class="fw-bold">3</div>
                                <small class="text-muted">Publicações deste Ano</small>
                            </div>
                        </div>
                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <i class="bi bi-calendar-event text-warning mb-2" style="font-size: 1.5rem;"></i>
                                <div class="fw-bold">5</div>
                                <small class="text-muted">Palestras principais</small>
                            </div>
                        </div>
                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <i class="bi bi-cash-coin text-info mb-2" style="font-size: 1.5rem;"></i>
                                <div class="fw-bold">$2.1M</div>
                                <small class="text-muted">Financiamentos recebidos</small>
                            </div>
                        </div>
                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <i class="bi bi-people text-primary mb-2" style="font-size: 1.5rem;"></i>
                                <div class="fw-bold">6</div>
                                <small class="text-muted">Doutorandos</small>
                            </div>
                        </div>
                    </div>

                    <!-- Activity Timeline -->
                    <h6 class="fw-semibold mb-3">Atividades Recentes</h6>
                    <div class="dashboard-grid grid-cols-2 gap-4">
                        <div>
                            <div class="activity-timeline">
                                <div class="activity-item border-start border-3 border-success ps-4 pb-4 mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="activity-icon bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px; margin-top: 2px; border: 2px solid #198754;">
                                            <i class="bi bi-book-half"
                                                style="color: #198754; font-size: 16px; font-weight: bold;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <h6 class="mb-0 fw-semibold">Novo artigo de investigação publicado</h6>
                                                <small class="text-muted">Jan 15, 2025</small>
                                            </div>
                                            <p class="mb-1 text-muted">"Sistemas de IA ética" aceite para publicação na revista Nature AI</p>
                                            <div class="d-flex gap-2">
                                                <span
                                                    class="badge bg-success bg-opacity-10 text-success">Publicação</span>
                                                <span class="badge bg-info bg-opacity-10 text-info">Elevado impacto</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item border-start border-3 border-primary ps-4 pb-4 mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="activity-icon bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px; margin-top: 2px; border: 2px solid #0d6efd;">
                                            <i class="bi bi-people"
                                                style="color: #0d6efd; font-size: 16px; font-weight: bold;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <h6 class="mb-0 fw-semibold">Nova inscrição num curso</h6>
                                                <small class="text-muted">Jan 12, 2025</small>
                                            </div>
                                            <p class="mb-1 text-muted">3 novos estudantes inscritos no seminário de pós-graduação em ética da IA</p>
                                            <div class="d-flex gap-2">
                                                <span
                                                    class="badge bg-primary bg-opacity-10 text-primary">Ensino</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item border-start border-3 border-warning ps-4 pb-4 mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="activity-icon bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px; margin-top: 2px; border: 2px solid #ffc107;">
                                            <i class="bi bi-calendar"
                                                style="color: #856404; font-size: 16px; font-weight: bold;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <h6 class="mb-0 fw-semibold">Palestra principal</h6>
                                                <small class="text-muted">8 de janeiro de 2025</small>
                                            </div>
                                            <p class="mb-1 text-muted">Proferiu uma palestra principal na Cimeira de Ética da IA de 2024, em São Francisco</p>
                                            <div class="d-flex gap-2">
                                                <span
                                                    class="badge bg-warning bg-opacity-10 text-warning">Conferência</span>
                                                <span
                                                    class="badge bg-secondary bg-opacity-10 text-secondary">Palestra principal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item border-start border-3 border-info ps-4 pb-4 mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="activity-icon bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px; margin-top: 2px; border: 2px solid #0dcaf0;">
                                            <i class="bi bi-cash"
                                                style="color: #055160; font-size: 16px; font-weight: bold;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <h6 class="mb-0 fw-semibold">Financiamento recebido</h6>
                                                <small class="text-muted">Jan 3, 2025</small>
                                            </div>
                                            <p class="mb-1 text-muted">A NSF aprovou um financiamento de $850,000 para investigação sobre uma estrutura de IA ética</p>
                                            <div class="d-flex gap-2">
                                                <span class="badge bg-info bg-opacity-10 text-info">Financiamento</span>
                                                <span class="badge bg-success bg-opacity-10 text-success">$850K</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item border-start border-3 border-secondary ps-4 pb-4 mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="activity-icon bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px; margin-top: 2px; border: 2px solid #6c757d;">
                                            <i class="bi bi-file-text"
                                                style="color: #495057; font-size: 16px; font-weight: bold;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <h6 class="mb-0 fw-semibold">Materiais do curso atualizados</h6>
                                                <small class="text-muted">28 de dezembro de 2024</small>
                                            </div>
                                            <p class="mb-1 text-muted">Programa do curso de Aprendizagem Automática revisto para o semestre da primavera de 2025</p>
                                            <div class="d-flex gap-2">
                                                <span
                                                    class="badge bg-secondary bg-opacity-10 text-secondary">Programa curricular</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item border-start border-3 border-success ps-4 pb-2">
                                    <div class="d-flex align-items-start">
                                        <div class="activity-icon bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px; margin-top: 2px; border: 2px solid #198754;">
                                            <i class="bi bi-mortarboard"
                                                style="color: #198754; font-size: 16px; font-weight: bold;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <h6 class="mb-0 fw-semibold">Nova orientação de doutoramento</h6>
                                                <small class="text-muted">20 de dezembro de 2024</small>
                                            </div>
                                            <p class="mb-1 text-muted">Começou a orientar 2 novos doutorandos especializados em investigação em IA</p>
                                            <div class="d-flex gap-2">
                                                <span
                                                    class="badge bg-success bg-opacity-10 text-success">Orientação</span>
                                                <span class="badge bg-primary bg-opacity-10 text-primary">Doutorandos</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="activity-timeline">
                                <!-- Additional timeline items would go here in the second column -->
                                <div class="activity-item border-start border-3 border-info ps-4 pb-4 mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="activity-icon bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px; margin-top: 2px; border: 2px solid #0dcaf0;">
                                            <i class="bi bi-graph-up"
                                                style="color: #0dcaf0; font-size: 16px; font-weight: bold;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <h6 class="mb-0 fw-semibold">Marco da investigação</h6>
                                                <small class="text-muted">15 de dezembro de 2024</small>
                                            </div>
                                            <p class="mb-1 text-muted">Atingiu 2.847 citações em todas as publicações</p>
                                            <div class="d-flex gap-2">
                                                <span class="badge bg-info bg-opacity-10 text-info">Conquista</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item border-start border-3 border-primary ps-4 pb-4 mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="activity-icon bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px; margin-top: 2px; border: 2px solid #0d6efd;">
                                            <i class="bi bi-award"
                                                style="color: #0d6efd; font-size: 16px; font-weight: bold;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <h6 class="mb-0 fw-semibold">Financiamento aprovado</h6>
                                                <small class="text-muted">10 de dezembro de 2024</small>
                                            </div>
                                            <p class="mb-1 text-muted">Aprovada a bolsa da NSF para investigação de uma estrutura de IA ética</p>
                                            <div class="d-flex gap-2">
                                                <span class="badge bg-primary bg-opacity-10 text-primary">Financiamento</span>
                                                <span class="badge bg-success bg-opacity-10 text-success">$850K</span>
                                            </div>
                                        </div>
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
        // Performance Chart
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('performanceChart');
            if (ctx) {
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Outono de 2020', 'Primavera de 2021', 'Outono de 2021', 'Primavera de 2022', 'Outono de 2022', 'Primavera de 2023', 'Outono de 2023', 'Primavera de 2024'],
                        datasets: [{
                            label: 'Classificação do Ensino',
                            data: [4.2, 4.4, 4.5, 4.6, 4.7, 4.8, 4.8, 4.8],
                            borderColor: 'rgb(75, 192, 192)',
                            backgroundColor: 'rgba(75, 192, 192, 0.1)',
                            tension: 0.1,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        layout: {
                            padding: {
                                top: 20,
                                bottom: 20,
                                left: 10,
                                right: 10
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: false,
                                min: 3.5,
                                max: 5.0,
                                ticks: {
                                    stepSize: 0.1,
                                    font: {
                                        size: 12
                                    }
                                },
                                title: {
                                    display: true,
                                    text: 'Classificação do Ensino (de 5,0)',
                                    font: {
                                        size: 13,
                                        weight: 'bold'
                                    }
                                },
                                grid: {
                                    color: 'rgba(0,0,0,0.1)'
                                }
                            },
                            x: {
                                ticks: {
                                    font: {
                                        size: 11
                                    }
                                },
                                title: {
                                    display: true,
                                    text: 'Semestre Académico',
                                    font: {
                                        size: 13,
                                        weight: 'bold'
                                    }
                                },
                                grid: {
                                    color: 'rgba(0,0,0,0.1)'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: 'Evolução das Avaliações dos Estudantes',
                                font: {
                                    size: 16,
                                    weight: 'bold'
                                },
                                padding: {
                                    top: 0,
                                    bottom: 20
                                }
                            }
                        },
                        elements: {
                            point: {
                                radius: 6,
                                hoverRadius: 8,
                                backgroundColor: 'rgb(75, 192, 192)',
                                borderColor: 'rgb(75, 192, 192)',
                                borderWidth: 2
                            },
                            line: {
                                borderWidth: 3
                            }
                        }
                    }
                });

                // Rating Distribution Chart
                const ctx2 = document.getElementById('ratingDistributionChart');
                if (ctx2) {
                    new Chart(ctx2, {
                        type: 'bar',
                        data: {
                            labels: ['5 estrelas', '4 estrelas', '3 estrelas', '2 estrelas', '1 estrela'],
                            datasets: [{
                                label: 'Número de Classificações',
                                data: [89, 28, 5, 2, 0],
                                backgroundColor: [
                                    'rgba(40, 167, 69, 0.8)',
                                    'rgba(32, 201, 151, 0.8)',
                                    'rgba(255, 193, 7, 0.8)',
                                    'rgba(253, 126, 20, 0.8)',
                                    'rgba(220, 53, 69, 0.8)'
                                ],
                                borderColor: [
                                    'rgba(40, 167, 69, 1)',
                                    'rgba(32, 201, 151, 1)',
                                    'rgba(255, 193, 7, 1)',
                                    'rgba(253, 126, 20, 1)',
                                    'rgba(220, 53, 69, 1)'
                                ],
                                borderWidth: 2
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 20,
                                        font: {
                                            size: 11
                                        }
                                    },
                                    title: {
                                        display: true,
                                        text: 'Número de Estudantes',
                                        font: {
                                            size: 13,
                                            weight: 'bold'
                                        }
                                    },
                                    grid: {
                                        color: 'rgba(0,0,0,0.1)'
                                    }
                                },
                                x: {
                                    ticks: {
                                        font: {
                                            size: 11
                                        }
                                    },
                                    grid: {
                                        display: false
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: 'Distribuição das Classificações dos Estudantes (2 últimos anos)',
                                    font: {
                                        size: 16,
                                        weight: 'bold'
                                    },
                                    padding: {
                                        top: 0,
                                        bottom: 20
                                    }
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const total = 124;
                                            const percentage = ((context.raw / total) * 100).toFixed(1);
                                            return context.raw + ' estudantes (' + percentage + '%)';
                                        }
                                    }
                                }
                            }
                        }
                    });
                }

                // Course Distribution Chart (Doughnut)
                const ctx3 = document.getElementById('courseDistributionChart');
                if (ctx3) {
                    new Chart(ctx3, {
                        type: 'doughnut',
                        data: {
                            labels: ['Licenciatura', 'Pós-graduação', 'Seminário de doutoramento'],
                            datasets: [{
                                data: [86, 45, 25],
                                backgroundColor: [
                                    'rgba(54, 162, 235, 0.8)',
                                    'rgba(75, 192, 192, 0.8)',
                                    'rgba(153, 102, 255, 0.8)'
                                ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)'
                                ],
                                borderWidth: 2
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    position: 'bottom',
                                    labels: {
                                        padding: 15,
                                        font: {
                                            size: 11
                                        }
                                    }
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const total = 156;
                                            const percentage = ((context.raw / total) * 100).toFixed(1);
                                            return context.label + ': ' + context.raw + ' students (' + percentage + '%)';
                                        }
                                    }
                                }
                            }
                        }
                    });
                }
            }
        });
    </script>

    <!-- Load JavaScript -->





</body>

</html>