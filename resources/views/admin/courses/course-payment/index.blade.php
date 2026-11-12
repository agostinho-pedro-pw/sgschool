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

    <title>Pagamento do Curso - Painel sgSchool</title>

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

        .payment-secure {
            background-color: #f0fdf4;
            border-left: 4px solid #10b981
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


    <!-- Sidebar, painel lateral do site usando include -->
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
                        <li class="breadcrumb-item active">Pagamento do Curso</li>
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
                            <h1 class="h3 fw-bold mb-2">Pagamento do Curso</h1>
                            <p class="text-muted mb-0">Processe pagamentos de inscrição nos cursos em segurança</p>
                        </div>
                        <div class="d-none d-md-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-shield-check me-2"></i>Informações de Segurança
                            </button>
                            <button type="button" class="btn btn-light"
                                onclick="window.location.href='all-courses.html'">
                                <i class="bi bi-arrow-left me-2"></i>Voltar aos Cursos
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Security Notice -->
                <div class="dashboard-card mb-3"
                    style="border-left: 4px solid #10b981; background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 100%);">
                    <div class="dashboard-card-body" style="padding: 16px 20px;">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center"
                                style="width: 48px; height: 48px; background: rgba(16, 185, 129, 0.1); border-radius: 12px; margin-right: 16px;">
                                <i class="bi bi-shield-check text-success" style="font-size: 1.5rem;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold text-gray-900">🔒 Segurança ao Nível Bancário</h6>
                                <p class="mb-0 small text-muted">All payments are encrypted with 256-bit SSL and PCI DSS
                                    compliant. Your data is never stored on our servers.</p>
                            </div>
                            <div class="d-none d-md-flex align-items-center gap-2 text-success small">
                                <i class="bi bi-patch-check"></i>
                                <span class="fw-medium">Segurança Verificada</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Form -->
                <form class="needs-validation" novalidate autocomplete="off">
                    <div class="dashboard-grid" style="grid-template-columns: 2fr 1fr; gap: 20px;">
                        <div>
                            <!-- Student Information -->
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Informações do Estudante</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="dashboard-grid grid-cols-2 mb-3">
                                        <div>
                                            <label for="studentId" class="form-label">N.º de Estudante <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="studentId"
                                                    placeholder="Enter Student ID" required autocomplete="off">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="searchStudent" aria-label="Pesquisar">
                                                    <i aria-hidden="true" class="bi bi-search"></i>
                                                </button>
                                            </div>
                                            <div class="invalid-feedback">
                                                Introduza um número de estudante válido.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="studentName" class="form-label">Nome do Estudante</label>
                                            <input type="text" class="form-control" id="studentName" readonly
                                                style="background-color: #f8f9fa;">
                                        </div>
                                    </div>

                                    <div class="dashboard-grid grid-cols-2 mb-3">
                                        <div>
                                            <label for="studentEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="studentEmail" readonly
                                                style="background-color: #f8f9fa;">
                                        </div>
                                        <div>
                                            <label for="studentPhone" class="form-label">Telefone</label>
                                            <input type="tel" class="form-control" id="studentPhone" readonly
                                                style="background-color: #f8f9fa;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Selection -->
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Seleção do Curso</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="mb-3">
                                        <label for="courseSelect" class="form-label">Selecionar Curso <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="courseSelect" required>
                                            <option value="">Escolha um curso...</option>
                                            <option value="cs101" data-fee="1200.00" data-lab="150.00"
                                                data-material="50.00">CS101 - Introduction to Computer Science</option>
                                            <option value="math201" data-fee="1100.00" data-lab="0.00"
                                                data-material="75.00">MATH201 - Calculus II</option>
                                            <option value="phys101" data-fee="1300.00" data-lab="200.00"
                                                data-material="100.00">PHYS101 - General Physics</option>
                                            <option value="eng101" data-fee="1000.00" data-lab="0.00"
                                                data-material="25.00">ENG101 - English Composition</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Selecione um curso.
                                        </div>
                                    </div>

                                    <div class="dashboard-grid grid-cols-3">
                                        <div>
                                            <label class="form-label">Course Fee</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" id="courseFee" readonly
                                                    style="background-color: #f8f9fa;">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label">Lab Fee</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" id="labFee" readonly
                                                    style="background-color: #f8f9fa;">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label">Material Fee</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control" id="materialFee" readonly
                                                    style="background-color: #f8f9fa;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Information -->
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-header">
                                    <div class="d-flex align-items-center">
                                        <h5 class="dashboard-card-title mb-0">Informações de Pagamento</h5>
                                        <i class="bi bi-lock-fill text-success ms-2" title="Pagamento Seguro"></i>
                                    </div>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Método de Pagamento <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paymentMethod"
                                                    id="creditCard" value="credit" checked>
                                                <label class="form-check-label" for="creditCard">
                                                    <i class="bi bi-credit-card me-1"></i>Cartão de Crédito
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paymentMethod"
                                                    id="bankTransfer" value="bank">
                                                <label class="form-check-label" for="bankTransfer">
                                                    <i class="bi bi-bank me-1"></i>Transferência Bancária
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paymentMethod"
                                                    id="paypal" value="paypal">
                                                <label class="form-check-label" for="paypal">
                                                    <i class="bi bi-paypal me-1"></i>PayPal
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Credit Card Form -->
                                    <div id="creditCardForm">
                                        <div class="dashboard-grid mb-3" style="grid-template-columns: 2fr 1fr;">
                                            <div>
                                                <label for="cardNumber" class="form-label">Número do Cartão <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="cardNumber"
                                                    placeholder="1234 5678 9012 3456" maxlength="19"
                                                    autocomplete="new-password">
                                                <div class="invalid-feedback">
                                                    Introduza um número de cartão válido.
                                                </div>
                                            </div>
                                            <div>
                                                <label for="cvv" class="form-label">CVV <span
                                                        class="text-danger">*</span></label>
                                                <input type="password" class="form-control" id="cvv" placeholder="123"
                                                    maxlength="4" autocomplete="new-password">
                                                <div class="invalid-feedback">
                                                    Introduza o CVV.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dashboard-grid grid-cols-3 mb-3">
                                            <div>
                                                <label for="expiryMonth" class="form-label">Mês de Validade <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="expiryMonth">
                                                    <option value="">Mês</option>
                                                    <option value="01">01 - January</option>
                                                    <option value="02">02 - February</option>
                                                    <option value="03">03 - March</option>
                                                    <option value="04">04 - April</option>
                                                    <option value="05">05 - May</option>
                                                    <option value="06">06 - June</option>
                                                    <option value="07">07 - July</option>
                                                    <option value="08">08 - August</option>
                                                    <option value="09">09 - September</option>
                                                    <option value="10">10 - October</option>
                                                    <option value="11">11 - November</option>
                                                    <option value="12">12 - December</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Selecione o mês de validade.
                                                </div>
                                            </div>
                                            <div>
                                                <label for="expiryYear" class="form-label">Ano de Validade <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="expiryYear">
                                                    <option value="">Ano</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Selecione o ano de validade.
                                                </div>
                                            </div>
                                            <div>
                                                <label for="cardholderName" class="form-label">Nome do Titular do Cartão <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="cardholderName"
                                                    placeholder="John Doe" autocomplete="new-password">
                                                <div class="invalid-feedback">
                                                    Introduza o nome do titular do cartão.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bank Transfer Form -->
                                    <div id="bankTransferForm" style="display: none;">
                                        <div class="alert alert-info" role="alert">
                                            <i class="bi bi-info-circle me-2"></i>
                                            Bank transfer details will be provided after form submission. Processing may
                                            take 2-3 business days.
                                        </div>
                                    </div>

                                    <!-- PayPal Form -->
                                    <div id="paypalForm" style="display: none;">
                                        <div class="alert alert-info" role="alert">
                                            <i class="bi bi-info-circle me-2"></i>
                                            Será redirecionado para o PayPal para concluir o pagamento em segurança.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Billing Address -->
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Morada de Faturação</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="dashboard-grid grid-cols-2 mb-3">
                                        <div>
                                            <label for="firstName" class="form-label">Nome Próprio <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="firstName" required
                                                autocomplete="new-password">
                                            <div class="invalid-feedback">
                                                Introduza o nome próprio.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="lastName" class="form-label">Apelido <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="lastName" required
                                                autocomplete="new-password">
                                            <div class="invalid-feedback">
                                                Introduza o apelido.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address" class="form-label">Morada <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="address"
                                            placeholder="123 Main Street" required autocomplete="new-password">
                                        <div class="invalid-feedback">
                                            Introduza a morada.
                                        </div>
                                    </div>

                                    <div class="dashboard-grid mb-3" style="grid-template-columns: 2fr 1fr 1fr;">
                                        <div>
                                            <label for="city" class="form-label">Localidade <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="city" required
                                                autocomplete="new-password">
                                            <div class="invalid-feedback">
                                                Introduza a localidade.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="state" class="form-label">Estado <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="state" required>
                                                <option value="">Escolha...</option>
                                                <option value="AL">Alabama</option>
                                                <option value="CA">California</option>
                                                <option value="FL">Florida</option>
                                                <option value="NY">New York</option>
                                                <option value="TX">Texas</option>
                                                <!-- Add more states as needed -->
                                            </select>
                                            <div class="invalid-feedback">
                                                Selecione um estado.
                                            </div>
                                        </div>
                                        <div>
                                            <label for="zipCode" class="form-label">Código Postal <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="zipCode" required
                                                autocomplete="new-password">
                                            <div class="invalid-feedback">
                                                Introduza o código postal.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <!-- Payment Summary -->
                            <div class="dashboard-card mb-3 sticky-top" style="top: 24px;">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Resumo do Pagamento</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Taxa do Curso:</span>
                                        <span id="summaryCourseFee">$0.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Lab Fee:</span>
                                        <span id="summaryLabFee">$0.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Material Fee:</span>
                                        <span id="summaryMaterialFee">$0.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Taxa de Processamento:</span>
                                        <span id="summaryProcessingFee">$2.50</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between mb-3">
                                        <strong>Montante Total:</strong>
                                        <strong class="text-primary" id="totalAmount">$0.00</strong>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                            <label class="form-check-label" for="agreeTerms">
                                                I agree to the <a href="#" class="text-decoration-none">Terms &amp;
                                                    Conditions</a> and <a href="#" class="text-decoration-none">Payment
                                                    Policy</a>
                                            </label>
                                            <div class="invalid-feedback">
                                                Tem de aceitar os termos e condições.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg" id="processPayment">
                                            <i class="bi bi-lock me-2"></i>Processar Pagamento Seguro
                                        </button>
                                    </div>

                                    <div class="text-center mt-3">
                                        <small class="text-muted">
                                            <i class="bi bi-shield-lock me-1"></i>
                                            Secured by 256-bit SSL encryption
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <!-- Security Features -->
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Funcionalidades de Segurança</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-shield-check text-success me-3"></i>
                                        <div>
                                            <h6 class="mb-1">Encriptação SSL</h6>
                                            <small class="text-muted">256-bit SSL security</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-credit-card-2-back text-success me-3"></i>
                                        <div>
                                            <h6 class="mb-1">Em Conformidade com PCI</h6>
                                            <small class="text-muted">Industry standard security</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-eye-slash text-success me-3"></i>
                                        <div>
                                            <h6 class="mb-1">Privacidade Protegida</h6>
                                            <small class="text-muted">No data stored on servers</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-telephone text-success me-3"></i>
                                        <div>
                                            <h6 class="mb-1">24/7 Support</h6>
                                            <small class="text-muted">Call (555) 123-4567</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Transactions -->
                            <div class="dashboard-card">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title">Transações Recentes</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-success text-white rounded p-2 me-3">
                                            <i class="bi bi-check-circle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Pagamento de CS101</h6>
                                            <small class="text-muted">Alex Johnson - $1,400.00</small>
                                        </div>
                                        <span class="badge bg-success">Pago</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-warning text-white rounded p-2 me-3">
                                            <i class="bi bi-clock"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Pagamento de MATH201</h6>
                                            <small class="text-muted">Sarah Wilson - $1,175.00</small>
                                        </div>
                                        <span class="badge bg-warning text-dark">Pendente</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-info text-white rounded p-2 me-3">
                                            <i class="bi bi-credit-card"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Pagamento de PHYS101</h6>
                                            <small class="text-muted">Mike Chen - $1,600.00</small>
                                        </div>
                                        <span class="badge bg-info text-dark">Em Processamento</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>

        <!-- Footer -->
        @include('layouts._include.dashboard.footer')
    </div>

    <script>
        // Security: Disable right-click and some keyboard shortcuts on payment fields
        document.addEventListener('DOMContentLoaded', function() {
            const sensitiveFields = ['cardNumber', 'cvv', 'cardholderName'];

            sensitiveFields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (field) {
                    field.addEventListener('contextmenu', e => e.preventDefault());
                    field.addEventListener('keydown', function(e) {
                        // Disable F12, Ctrl+Shift+I, Ctrl+U
                        if (e.key === 'F12' ||
                            (e.ctrlKey && e.shiftKey && e.key === 'I') ||
                            (e.ctrlKey && e.key === 'u')) {
                            e.preventDefault();
                        }
                    });
                }
            });

            // Form validation
            const form = document.querySelector('.needs-validation');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });

            // Payment method toggle
            const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
            paymentMethods.forEach(method => {
                method.addEventListener('change', function() {
                    document.getElementById('creditCardForm').style.display =
                        this.value === 'credit' ? 'block' : 'none';
                    document.getElementById('bankTransferForm').style.display =
                        this.value === 'bank' ? 'block' : 'none';
                    document.getElementById('paypalForm').style.display =
                        this.value === 'paypal' ? 'block' : 'none';
                });
            });

            // Course selection and fee calculation
            const courseSelect = document.getElementById('courseSelect');
            courseSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const courseFee = selectedOption.dataset.fee || '0.00';
                const labFee = selectedOption.dataset.lab || '0.00';
                const materialFee = selectedOption.dataset.material || '0.00';
                const processingFee = 2.50;

                document.getElementById('courseFee').value = courseFee;
                document.getElementById('labFee').value = labFee;
                document.getElementById('materialFee').value = materialFee;

                document.getElementById('summaryCourseFee').textContent = '$' + courseFee;
                document.getElementById('summaryLabFee').textContent = '$' + labFee;
                document.getElementById('summaryMaterialFee').textContent = '$' + materialFee;
                document.getElementById('summaryProcessingFee').textContent = '$' + processingFee.toFixed(2);

                const total = parseFloat(courseFee) + parseFloat(labFee) + parseFloat(materialFee) + processingFee;
                document.getElementById('totalAmount').textContent = '$' + total.toFixed(2);
            });

            // Card number formatting
            const cardNumberField = document.getElementById('cardNumber');
            cardNumberField.addEventListener('input', function() {
                let value = this.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
                let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
                this.value = formattedValue;
            });

            // Student search simulation
            document.getElementById('searchStudent').addEventListener('click', function() {
                const studentId = document.getElementById('studentId').value;
                if (studentId) {
                    // Simulate student lookup
                    document.getElementById('studentName').value = 'John Doe';
                    document.getElementById('studentEmail').value = 'john.doe@student.edu';
                    document.getElementById('studentPhone').value = '(555) 123-4567';
                }
            });

            // Security: Clear sensitive data on page unload
            window.addEventListener('beforeunload', function() {
                sensitiveFields.forEach(fieldId => {
                    const field = document.getElementById(fieldId);
                    if (field) field.value = '';
                });
            });
        });
    </script>

    <!-- Load JavaScript -->




</body>

</html>