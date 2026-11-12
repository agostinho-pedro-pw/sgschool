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

    <title>@yield('title','Adicionar-curso')</title>

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

        .loading {
            background: #e5e7eb;
            animation: 2s cubic-bezier(.4, 0, .6, 1) infinite pulse
        }

        .dashboard-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            box-shadow: 0 1px 3px #0000001a
        }

        .dashboard-card-header {
            border-bottom: 1px solid #e5e7eb;
            padding: 16px 20px
        }

        .dashboard-card-body {
            padding: 20px
        }

        .dashboard-card-title {
            color: #1f2937;
            margin: 0;
            font-size: 1.125rem;
            font-weight: 600
        }

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

        .grid-cols-3-1 {
            grid-template-columns: 3fr 1fr
        }

        @media (width<=1200px) {

            .grid-cols-4,
            .grid-cols-3 {
                grid-template-columns: repeat(2, 1fr)
            }

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
            .grid-cols-3-1 {
                grid-template-columns: 1fr
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
                        <li class="breadcrumb-item active">Adicionar Curso</li>
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
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Help
                                    Center</a></li>
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
                            <h1 class="h3 fw-bold mb-2">Adicionar Novo Curso</h1>
                            <p class="text-muted mb-0">Crie um novo curso para o plano curricular</p>
                        </div>
                        <div class="d-none d-md-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-question-circle me-2"></i>Help
                            </button>
                            <button type="button" class="btn btn-light"
                                onclick="window.location.href='all-courses.html'">
                                <i class="bi bi-arrow-left me-2"></i>Voltar aos Cursos
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <form class="needs-validation" novalidate>
                    <div class="dashboard-grid" style="grid-template-columns: 2fr 1fr; gap: 20px;">
                        <div>
                            <!-- Basic Information -->
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Informações Básicas</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="dashboard-grid grid-cols-2 mb-3">
                                        <div>
                                            <label for="courseCode" class="form-label">Código do Curso <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="courseCode"
                                                placeholder="e.g., CS101" required>
                                            <div class="invalid-feedback">
                                                Introduza um código de curso válido.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="courseName" class="form-label">Nome do Curso <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="courseName"
                                                placeholder="por exemplo, Introdução à Informática" required>
                                            <div class="invalid-feedback">
                                                Introduza o nome do curso.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dashboard-grid grid-cols-2 mb-3">
                                        <div>
                                            <label for="department" class="form-label">Departamento <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="department" required>
                                                <option value="">Selecionar Departamento</option>
                                                <option value="cs">Ciências da Computação</option>
                                                <option value="math">Matemática</option>
                                                <option value="physics">Física</option>
                                                <option value="chemistry">Química</option>
                                                <option value="biology">Biologia</option>
                                                <option value="business">Administração de Empresas</option>
                                                <option value="engineering">Engenharia</option>
                                                <option value="english">Literatura Inglesa</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Selecione um departamento.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="professor" class="form-label">Professor <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="professor" required>
                                                <option value="">Selecionar Professor</option>
                                                <option value="1">Dr. Robert Smith</option>
                                                <option value="2">Dr. Emily Johnson</option>
                                                <option value="3">Prof. Michael Chen</option>
                                                <option value="4">Dr. Sarah Williams</option>
                                                <option value="5">Prof. David Brown</option>
                                                <option value="6">Dr. Jennifer Garcia</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Selecione um professor.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="courseDescription" class="form-label">Descrição do Curso</label>
                                        <textarea class="form-control" id="courseDescription" rows="4"
                                            placeholder="Introduza uma descrição detalhada do curso..."></textarea>
                                    </div>

                                    <div class="dashboard-grid grid-cols-3 mb-3">
                                        <div>
                                            <label for="credits" class="form-label">Créditos <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="credits" min="1" max="6"
                                                value="3" required>
                                            <div class="invalid-feedback">
                                                Os créditos devem estar entre 1 e 6.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="duration" class="form-label">Duração (semanas) <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="duration" min="1" max="52"
                                                value="16" required>
                                            <div class="invalid-feedback">
                                                A duração deve estar entre 1 e 52 semanas.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="maxStudents" class="form-label">Número Máximo de Estudantes</label>
                                            <input type="number" class="form-control" id="maxStudents" min="1" max="500"
                                                value="30">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="prerequisites" class="form-label">Pré-requisitos</label>
                                        <input type="text" class="form-control" id="prerequisites"
                                            placeholder="e.g., MATH101, CS100 (comma separated)">
                                        <small class="text-muted">Enter prerequisite course codes separated by
                                            commas</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Schedule Information -->
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Informações do Horário</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="dashboard-grid grid-cols-2 mb-3">
                                        <div>
                                            <label for="semester" class="form-label">Semestre <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="semester" required>
                                                <option value="">Selecionar Semestre</option>
                                                <option value="spring2025">Primavera de 2025</option>
                                                <option value="summer2025">Verão de 2025</option>
                                                <option value="fall2025">Outono de 2025</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Selecione um semestre.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="courseType" class="form-label">Tipo de Curso <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="courseType" required>
                                                <option value="">Selecionar Tipo</option>
                                                <option value="core">Curso Obrigatório</option>
                                                <option value="elective">Optativa</option>
                                                <option value="lab">Laboratório</option>
                                                <option value="seminar">Seminário</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Selecione um tipo de curso.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Dias de Aula <span class="text-danger">*</span></label>
                                        <div class="d-flex flex-wrap gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="monday" name="days">
                                                <label class="form-check-label" for="monday">Segunda-feira</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="tuesday"
                                                    name="days">
                                                <label class="form-check-label" for="tuesday">Terça-feira</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="wednesday"
                                                    name="days">
                                                <label class="form-check-label" for="wednesday">Quarta-feira</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="thursday"
                                                    name="days">
                                                <label class="form-check-label" for="thursday">Quinta-feira</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="friday" name="days">
                                                <label class="form-check-label" for="friday">Sexta-feira</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dashboard-grid grid-cols-2 mb-3">
                                        <div>
                                            <label for="startTime" class="form-label">Hora de Início <span
                                                    class="text-danger">*</span></label>
                                            <input type="time" class="form-control" id="startTime" required>
                                            <div class="invalid-feedback">
                                                Selecione a hora de início.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="endTime" class="form-label">Hora de Fim <span
                                                    class="text-danger">*</span></label>
                                            <input type="time" class="form-control" id="endTime" required>
                                            <div class="invalid-feedback">
                                                Selecione a hora de fim.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="classroom" class="form-label">Sala/Localização</label>
                                        <input type="text" class="form-control" id="classroom"
                                            placeholder="e.g., Building A, Room 101">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <!-- Course Image -->
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Imagem do Curso</h5>
                                </div>
                                <div class="dashboard-card-body text-center">
                                    <div class="position-relative d-inline-block mb-3">
                                        <img src="https://picsum.photos/400/250?random=1" alt="Miniatura do curso"
                                            class="img-fluid rounded" id="courseImagePreview"
                                            style="max-height: 200px; width: 100%; object-fit: cover;" loading="lazy"
                                            decoding="async">
                                        <div class="position-absolute top-0 end-0 p-2">
                                            <span class="badge bg-primary">Preview</span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="courseImage" class="form-label">Carregar Imagem do Curso</label>
                                        <input class="form-control" type="file" id="courseImage" accept="image/*">
                                        <small class="text-muted">JPG ou PNG até 5 MB. Recomendado: 800x500 px</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Settings -->
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Configurações do Curso</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="mb-3">
                                        <label for="courseStatus" class="form-label">Estado</label>
                                        <select class="form-select" id="courseStatus">
                                            <option value="active" selected>Ativo</option>
                                            <option value="draft">Rascunho</option>
                                            <option value="inactive">Inativo</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="enrollmentType" class="form-label">Tipo de Inscrição</label>
                                        <select class="form-select" id="enrollmentType">
                                            <option value="open" selected>Inscrições Abertas</option>
                                            <option value="approval">Requer Aprovação</option>
                                            <option value="closed">Encerrado</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Opções do Curso</label>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="onlineAvailable"
                                                checked>
                                            <label class="form-check-label" for="onlineAvailable">Available
                                                Online</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="certificateOffered">
                                            <label class="form-check-label" for="certificateOffered">Certificate
                                                Offered</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="recordedLectures">
                                            <label class="form-check-label" for="recordedLectures">Recorded Lectures
                                                Available</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Fee Structure -->
                            <div class="dashboard-card">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Estrutura de Taxas</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="dashboard-grid grid-cols-3 mb-3">
                                        <div>
                                            <label for="courseFee" class="form-label">Taxa do Curso ($)</label>
                                            <input type="number" class="form-control" id="courseFee" min="0" step="0.01"
                                                placeholder="0.00">
                                        </div>
                                        <div>
                                            <label for="labFee" class="form-label">Taxa de Laboratório ($)</label>
                                            <input type="number" class="form-control" id="labFee" min="0" step="0.01"
                                                placeholder="0.00">
                                        </div>
                                        <div>
                                            <label for="materialFee" class="form-label">Taxa de Material ($)</label>
                                            <input type="number" class="form-control" id="materialFee" min="0"
                                                step="0.01" placeholder="0.00">
                                        </div>
                                    </div>

                                    <div class="border-top pt-3 mt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h6 mb-0">Taxa Total do Curso:</span>
                                            <span class="h5 mb-0 text-primary fw-bold" id="totalFee">$0.00</span>
                                        </div>
                                        <small class="text-muted">Todas as taxas são por semestre</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="row">
                        <div class="col-12">
                            <hr class="my-4">
                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-lg me-2"></i>Criar Curso
                                </button>
                                <button type="button" class="btn btn-outline-secondary">
                                    <i class="bi bi-x-lg me-2"></i>Cancelar
                                </button>
                                <button type="reset" class="btn btn-outline-warning">
                                    <i class="bi bi-arrow-clockwise me-2"></i>Repor Formulário
                                </button>
                                <button type="button" class="btn btn-outline-info">
                                    <i class="bi bi-file-text me-2"></i>Guardar como Rascunho
                                </button>
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
                        <p class="mb-0">Criado com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Form validation
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        // Fee calculator
        function calculateTotalFee() {
            const courseFee = parseFloat(document.getElementById('courseFee').value) || 0;
            const labFee = parseFloat(document.getElementById('labFee').value) || 0;
            const materialFee = parseFloat(document.getElementById('materialFee').value) || 0;
            const total = courseFee + labFee + materialFee;
            document.getElementById('totalFee').textContent = '$' + total.toFixed(2);
        }

        document.getElementById('courseFee').addEventListener('input', calculateTotalFee);
        document.getElementById('labFee').addEventListener('input', calculateTotalFee);
        document.getElementById('materialFee').addEventListener('input', calculateTotalFee);

        // Image preview
        document.getElementById('courseImage').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('courseImagePreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
        !function(e){"use strict";var t=function(t,n,r,o){var i,a=e.document,d=a.createElement("link");if(n)i=n;else{var f=(a.body||a.getElementsByTagName("head")[0]).childNodes;i=f[f.length-1]}var l=a.styleSheets;if(o)for(var s in o)o.hasOwnProperty(s)&&d.setAttribute(s,o[s]);d.rel="stylesheet",d.href=t,d.media="only x",function e(t){if(a.body)return t();setTimeout(function(){e(t)})}(function(){i.parentNode.insertBefore(d,n?i:i.nextSibling)});var u=function(e){for(var t=d.href,n=l.length;n--;)if(l[n].href===t)return e();setTimeout(function(){u(e)})};function c(){d.addEventListener&&d.removeEventListener("load",c),d.media=r||"all"}return d.addEventListener&&d.addEventListener("load",c),(d.onloadcssdefined=u)(c),d};"undefined"!=typeof exports?exports.loadCSS=t:e.loadCSS=t}("undefined"!=typeof global?global:this);
        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
        !function(t){if(t.loadCSS){var e=loadCSS.relpreload={};if(e.support=function(){try{return t.document.createElement("link").relList.supports("preload")}catch(t){return!1}},e.poly=function(){for(var e=t.document.getElementsByTagName("link"),r=0;r<e.length;r++){var n=e[r];"preload"===n.rel&&"style"===n.getAttribute("as")&&(t.loadCSS(n.href,n,n.getAttribute("media")),n.rel=null)}},!e.support()){e.poly();var r=t.setInterval(e.poly,300);t.addEventListener&&t.addEventListener("load",function(){e.poly(),t.clearInterval(r)}),t.attachEvent&&t.attachEvent("onload",function(){t.clearInterval(r)})}}}(this);
    </script>

    <!-- Load JavaScript -->




</body>

</html>