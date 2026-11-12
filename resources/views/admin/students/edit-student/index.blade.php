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

    <title>Editar estudante - Painel sgSchool</title>

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
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>

    <!-- Required DOM elements for dashboard.js -->
    <div class="search-backdrop" id="searchBackdrop"></div>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar dentro do layouts admin -->
    @include('layouts._include.dashboard.sidebar')
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
                        <li class="breadcrumb-item active">Editar estudante</li>
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
                <!-- Page Header with Student Info -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://ui-avatars.com/api/?name=Alex+Johnson&background=6366f1&color=fff"
                                alt="Alex Johnson" class="rounded-circle me-3" width="60" height="60" loading="lazy"
                                decoding="async">
                            <div>
                                <h4 class="page-title mb-1">Editar estudante - Alex Johnson</h4>
                                <p class="text-muted mb-0">ID do estudante: STU2024001 | Departamento de Ciências Informáticas</p>
                            </div>
                            <div class="ms-auto">
                                <span class="badge bg-success">Ativo</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Tabs -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <!-- Tab Navigation -->
                                <ul class="nav nav-tabs mb-4" id="studentFormTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="basic-tab" data-bs-toggle="tab"
                                            data-bs-target="#basic" type="button" role="tab" aria-controls="basic"
                                            aria-selected="true">
                                            <i class="bi bi-person-circle me-2"></i>Informações básicas
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="account-tab" data-bs-toggle="tab"
                                            data-bs-target="#account" type="button" role="tab" aria-controls="account"
                                            aria-selected="false">
                                            <i class="bi bi-shield-lock me-2"></i>Informações da conta
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="social-tab" data-bs-toggle="tab"
                                            data-bs-target="#social" type="button" role="tab" aria-controls="social"
                                            aria-selected="false">
                                            <i class="bi bi-share me-2"></i>Informações sociais
                                        </button>
                                    </li>
                                </ul>

                                <!-- Tab Content -->
                                <div class="tab-content" id="studentFormTabContent">
                                    <!-- Basic Information Tab -->
                                    <div class="tab-pane fade show active" id="basic" role="tabpanel"
                                        aria-labelledby="basic-tab">
                                        <form class="needs-validation" novalidate>
                                            <div class="row g-3">
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="fullName" class="form-label">Nome completo <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="fullName"
                                                            value="Alex Johnson" required>
                                                        <div class="invalid-feedback">
                                                            Introduza um nome válido.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="studentId" class="form-label">Estudante ID <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="studentId"
                                                            value="STU2024001" readonly>
                                                        <div class="form-text">O ID do estudante não pode ser alterado.</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="department" class="form-label">Departamento <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select" id="department" required>
                                                            <option value="">Selecionar departamento</option>
                                                            <option value="cs" selected>Ciências Informáticas</option>
                                                            <option value="eng">Engenharia</option>
                                                            <option value="bus">Gestão de Empresas</option>
                                                            <option value="med">Medicina</option>
                                                            <option value="psy">Psicologia</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Selecione um departamento.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="course" class="form-label">Curso</label>
                                                        <input type="text" class="form-control" id="course"
                                                            value="Licenciatura em Ciências Informáticas">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="dateOfBirth" class="form-label">Data de nascimento <span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" id="dateOfBirth"
                                                            value="2004-03-15" required>
                                                        <div class="invalid-feedback">
                                                            Indique a data de nascimento.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="gender" class="form-label">Género <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select" id="gender" required>
                                                            <option value="">Selecionar género</option>
                                                            <option value="male" selected>Masculino</option>
                                                            <option value="female">Feminino</option>
                                                            <option value="other">Outro</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Selecione o género.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="phone" class="form-label">Número de telefone <span
                                                                class="text-danger">*</span></label>
                                                        <input type="tel" class="form-control" id="phone"
                                                            value="+1 234-567-8900" required>
                                                        <div class="invalid-feedback">
                                                            Introduza um número de telefone.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="parentPhone" class="form-label">Telefone do
                                                            encarregado de educação</label>
                                                        <input type="tel" class="form-control" id="parentPhone"
                                                            value="+1 234-567-8901">
                                                    </div>
                                                </div>
                                                <div class="col-12 px-2">
                                                    <div class="mb-4">
                                                        <label for="address" class="form-label">Morada</label>
                                                        <textarea class="form-control" id="address"
                                                            rows="3">123 University Avenue, Building A, Sala 205</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 px-2">
                                                    <div class="mb-4">
                                                        <label for="city" class="form-label">Localidade</label>
                                                        <input type="text" class="form-control" id="city"
                                                            value="New York">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 px-2">
                                                    <div class="mb-4">
                                                        <label for="state" class="form-label">Distrito/Província</label>
                                                        <input type="text" class="form-control" id="state" value="NY">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 px-2">
                                                    <div class="mb-4">
                                                        <label for="postalCode" class="form-label">Código postal</label>
                                                        <input type="text" class="form-control" id="postalCode"
                                                            value="10001">
                                                    </div>
                                                </div>
                                                <div class="col-12 px-2">
                                                    <div class="mb-4">
                                                        <label for="profileImage" class="form-label">Atualizar imagem
                                                            de perfil</label>
                                                        <input class="form-control" type="file" id="profileImage"
                                                            accept="image/*">
                                                        <div class="form-text">Deixe em branco para manter a imagem
                                                            atual. Formatos aceites: JPG, PNG e GIF (máx. 2 MB).</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 px-2">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="bi bi-check-circle me-2"></i>Atualizar informações básicas</button>
                                                    <button type="button" class="btn btn-secondary ms-2"
                                                        onclick="window.location.href='all-students.html'">
                                                        <i class="bi bi-x-circle me-2"></i>Cancelar
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Account Information Tab -->
                                    <div class="tab-pane fade" id="account" role="tabpanel"
                                        aria-labelledby="account-tab">
                                        <form class="needs-validation" novalidate>
                                            <div class="row g-3">
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="email" class="form-label">Endereço de e-mail <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="email"
                                                            value="alex.johnson@university.edu" required>
                                                        <div class="invalid-feedback">
                                                            Introduza um endereço de e-mail válido.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="username" class="form-label">Nome de utilizador <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="username"
                                                            value="alexj2024" required>
                                                        <div class="invalid-feedback">
                                                            Introduza um nome de utilizador.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="password" class="form-label">Nova palavra-passe</label>
                                                        <input type="password" class="form-control" id="password"
                                                            placeholder="Deixe em branco para manter a palavra-passe atual"
                                                            autocomplete="new-password">
                                                        <div class="form-text">Preencha apenas se pretender alterar a
                                                            palavra-passe.</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="confirmPassword" class="form-label">Confirmar nova palavra-passe</label>
                                                        <input type="password" class="form-control" id="confirmPassword"
                                                            placeholder="Confirmar nova palavra-passe"
                                                            autocomplete="new-password">
                                                        <div class="invalid-feedback">
                                                            As palavras-passe têm de coincidir.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="accountStatus" class="form-label">Estado da conta</label>
                                                        <select class="form-select" id="accountStatus">
                                                            <option value="active" selected>Ativo</option>
                                                            <option value="inactive">Inativo</option>
                                                            <option value="suspended">Suspensa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="role" class="form-label">Função</label>
                                                        <select class="form-select" id="role">
                                                            <option value="student" selected>Estudante</option>
                                                            <option value="class_rep">Delegado de turma</option>
                                                            <option value="prefect">Prefect</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-2">
                                                    <div class="alert alert-info" role="alert">
                                                        <i class="bi bi-info-circle me-2"></i>
                                                        <strong>?ltimo in?cio de sessão:</strong> December 12, 2025 at 3:45 PM from
                                                        IP 192.168.1.100
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 px-2">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="bi bi-check-circle me-2"></i>Atualizar informações da conta</button>
                                                    <button type="reset" class="btn btn-secondary ms-2">
                                                        <i class="bi bi-arrow-clockwise me-2"></i>Repor alterações
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Social Information Tab -->
                                    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="facebook" class="form-label">Facebook
                                                            Perfil</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i
                                                                    class="bi bi-facebook"></i></span>
                                                            <input type="url" class="form-control" id="facebook"
                                                                value="https://facebook.com/alexjohnson">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="twitter" class="form-label">Twitter Perfil</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i
                                                                    class="bi bi-twitter"></i></span>
                                                            <input type="url" class="form-control" id="twitter"
                                                                value="https://twitter.com/alexj_2024">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="linkedin" class="form-label">LinkedIn
                                                            Perfil</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i
                                                                    class="bi bi-linkedin"></i></span>
                                                            <input type="url" class="form-control" id="linkedin"
                                                                value="https://linkedin.com/in/alex-johnson-cs">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="instagram" class="form-label">Instagram
                                                            Perfil</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i
                                                                    class="bi bi-instagram"></i></span>
                                                            <input type="url" class="form-control" id="instagram"
                                                                placeholder="https://instagram.com/username">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="website" class="form-label">Personal Website</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i
                                                                    class="bi bi-globe"></i></span>
                                                            <input type="url" class="form-control" id="website"
                                                                placeholder="https://example.com">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-2">
                                                    <div class="mb-4">
                                                        <label for="github" class="form-label">GitHub Perfil</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i
                                                                    class="bi bi-github"></i></span>
                                                            <input type="url" class="form-control" id="github"
                                                                value="https://github.com/alexjohnson">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 px-2">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="bi bi-check-circle me-2"></i>Atualizar informações sociais</button>
                                                    <button type="button" class="btn btn-danger ms-2">
                                                        <i class="bi bi-trash me-2"></i>Excluir estudante
                                                    </button>
                                                    <button type="button" class="btn btn-success ms-2"
                                                        onclick="window.location.href='student-profile.html'">
                                                        <i class="bi bi-eye me-2"></i>Ver Perfil
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
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
                        <p class="mb-0">Feito com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        });
    </script>

    <!-- Load JavaScript -->




</body>

</html>