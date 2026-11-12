<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sgSchool - Plataforma moderna de gestão escolar para escolas e universidades">
    <meta name="keywords" content="education, dashboard, university, management, admin">
    <meta name="author" content="Agostinho Pedro">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">

    <title>Ver mensagem - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">

    <style>
        .mailbox-sidebar a.active {
            font-weight: 500;
            color: var(--bs-primary) !important
        }

        .mailbox-sidebar a:hover {
            color: var(--bs-primary) !important
        }

        .attachment-item:hover {
            background-color: #f8f9fa
        }

        .message-body {
            font-size: 15px;
            line-height: 1.6
        }

        .quick-reply textarea {
            resize: vertical
        }
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar para o conte?do principal</a>

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
                <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Mostrar/ocultar menu lateral"
                    aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Breadcrumb for desktop -->
                <nav aria-label="Trilho de navegação" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                        <li class="breadcrumb-item"><a href="#">Comunicação</a></li>
                        <li class="breadcrumb-item"><a href="mailbox.html">Correio</a></li>
                        <li class="breadcrumb-item active">Ver mensagem</li>
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
                                <li><a class="dropdown-item" href="#">Gest?o de cursos</a></li>
                                <li><a class="dropdown-item" href="#">Submissão de notas</a></li>
                                <li><a class="dropdown-item" href="#">Diretório de professores</a></li>
                                <li><a class="dropdown-item" href="#">Recursos da biblioteca</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Advanced Pesquisar</a></li>
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
                                            <div class="fw-semibold">Trabalho submetido</div>
                                            <div class="text-muted small">O John entregou o seu trabalho</div>
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
                                    Curso</a></li>
                            <li><a class="dropdown-item" href="add-professor.html"><i
                                        class="bi bi-person-badge me-2"></i>Adicionar professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Horário
                                    Event</a></li>
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
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Ajuda
                                    Center</a></li>
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
                <!-- Back Button and Page Header -->
                <div class="mb-4">
                    <a href="mailbox.html" class="btn btn-outline-secondary btn-sm mb-3">
                        <i class="bi bi-arrow-left me-2"></i>Voltar ? caixa de entrada
                    </a>
                    <h1 class="h3 font-bold">Detalhes da mensagem</h1>
                </div>

                <!-- Message View -->
                <div class="row g-3">
                    <!-- Sidebar -->
                    <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <a href="mailbox-compose.html" class="btn btn-primary w-100 mb-3">
                                    <i class="bi bi-pencil-square me-2"></i>Compor
                                </a>

                                <div class="mailbox-sidebar">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="mailbox.html"
                                                class="d-flex align-items-center text-decoration-none text-dark">
                                                <i class="bi bi-inbox-fill me-2"></i>
                                                <span>Caixa de entrada</span>
                                                <span class="badge bg-primary ms-auto">12</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-send me-2"></i>
                                                <span>Enviados</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-file-earmark-text me-2"></i>
                                                <span>Rascunhos</span>
                                                <span class="badge bg-secondary ms-auto">3</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-star me-2"></i>
                                                <span>Importantee</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-trash me-2"></i>
                                                <span>Lixo</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <hr>

                                    <h6 class="text-muted text-uppercase small mb-3">Etiquetas</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-success me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Académico</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-warning me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Administrativo</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-info me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Estudantes</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-danger me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Urgente</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mail Content -->
                    <div class="col-lg-9">
                        <div class="card shadow-sm">
                            <!-- Message Actions Bar -->
                            <div class="card-header bg-white border-bottom p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            onclick="window.location.href='mailbox-compose.html'">
                                            <i class="bi bi-reply"></i> Responder
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <i class="bi bi-reply-all"></i> Responder a todos
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <i class="bi bi-arrow-right"></i> Reencaminhar
                                        </button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            aria-label="Favorito">
                                            <i aria-hidden="true" class="bi bi-star"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            aria-label="Imprimir">
                                            <i aria-hidden="true" class="bi bi-printer"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            aria-label="Excluir">
                                            <i aria-hidden="true" class="bi bi-trash"></i>
                                        </button>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-label="Mais opções">
                                                <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Marcar como não lida</a></li>
                                                <li><a class="dropdown-item" href="#">Adicionar label</a></li>
                                                <li><a class="dropdown-item" href="#">Bloquear remetente</a></li>
                                                <li><a class="dropdown-item" href="#">Denunciar spam</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Message Content -->
                            <div class="card-body p-4">
                                <!-- Message Header -->
                                <div class="message-header mb-4">
                                    <h4 class="mb-3">Atualiza??o do hor?rio dos cursos ? Semestre de outono de 2024</h4>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=10b981&color=fff"
                                                alt="Avatar" class="rounded-circle me-3" width="50" height="50"
                                                loading="lazy" decoding="async">
                                            <div>
                                                <h6 class="mb-0">Sarah Johnson <span
                                                        class="badge bg-success ms-2">Académico</span></h6>
                                                <div class="text-muted small">
                                                    <span>De: sarah.johnson@kiaalap.edu</span><br>
                                                    <span>Para: professores@kiaalap.edu</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end text-muted small">
                                            <div>Oct 15, 2024, 10:30 AM</div>
                                            <div class="mt-1">
                                                <i class="bi bi-star text-warning"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <!-- Message Body -->
                                <div class="message-body">
                                    <p>Caros membros do corpo docente,</p>

                                    <p>I hope this email finds you well. I am writing to inform you about important
                                        updates to o curso schedule para o upcoming Fall Semestre 2024. Please
                                        review these changes carefully as they may affect seu teaching assignments e
                                        classroom allocations.</p>

                                    <h5 class="mt-4 mb-3">Altera??es de hor?rio</h5>
                                    <p>O following adjustments have been made to accommodate increased enrollment e
                                        facility renovations:</p>

                                    <ul>
                                        <li><strong>Departamento de Ciências Informáticas:</strong> Parados morning classes will now
                                            start at 8:00 AM instead de 8:30 AM</li>
                                        <li><strong>Laboratérios de Engenharia:</strong> Lab sessions have been extended by 30
                                            minutes to provide more hands-on experience</li>
                                        <li><strong>Escola de Gest?o:</strong> Evening MBA classes will now be held on
                                            both Tuesday e Thursday</li>
                                        <li><strong>Humanidades:</strong> Writing workshops have been moved to o new
                                            Media Center in Building C</li>
                                    </ul>

                                    <h5 class="mt-4 mb-3">Datas importantes</h5>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><strong>Orienta??o do corpo docente:</strong></td>
                                                <td>15–16 de agosto de 2024</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Primeiro dia de aulas:</strong></td>
                                                <td>26 de agosto de 2024</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Período de alterações às inscrições:</strong></td>
                                                <td>26 de agosto a 6 de setembro de 2024</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Semana de avalia??es intercalares:</strong></td>
                                                <td>14–18 de outubro de 2024</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h5 class="mt-4 mb-3">Novas tecnologias nas salas de aula</h5>
                                    <p>We're excited to announce that all classrooms in Buildings A e B have been
                                        equipped com new interactive whiteboards e enhanced audio-visual systems.
                                        Training sessions para these new technologies will be offered during o faculty
                                        orientation week.</p>

                                    <h5 class="mt-4 mb-3">Ação necessária</h5>
                                    <p>Confirme a sua disponibilidade para os hor?rios letivos atribuídos até <strong>July
                                            31, 2024</strong>. You can do this through o Corpo docente Portal or by replying
                                        to this email. If you have any conflicts or concerns, please contact o
                                        Académico Affairs office immediately.</p>

                                    <p>Additionally, please update seu curso syllabi to reflect o new schedule e
                                        submit them to o departamento head by <strong>5 de agosto de 2024</strong>.</p>

                                    <p class="mt-4">Thank you para seu cooperation e dedication to our estudantes'
                                        success. If you have any questions or need clarification on any de these
                                        changes, please don't hesitate to reach out.</p>

                                    <p>Com os melhores cumprimentos,</p>
                                    <p>
                                        <strong>Dr. Sarah Johnson</strong><br>
                                        <em>Vice-presidente dos assuntos académicos</em><br>
                                        sgSchool University<br>
                                        Telefone: (555) 123-4567<br>
                                        E-mail: sarah.johnson@kiaalap.edu
                                    </p>
                                </div>

                                <hr>

                                <!-- Attachments -->
                                <div class="attachments mt-4">
                                    <h6 class="mb-3">Anexos (2)</h6>
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <div class="attachment-item border rounded p-3 d-flex align-items-center">
                                                <i class="bi bi-file-pdf text-danger fs-3 me-3"></i>
                                                <div class="flex-grow-1">
                                                    <div class="fw-semibold">Fall_2024_Horário.pdf</div>
                                                    <small class="text-muted">2.4 MB</small>
                                                </div>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    aria-label="Transferir">
                                                    <i aria-hidden="true" class="bi bi-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="attachment-item border rounded p-3 d-flex align-items-center">
                                                <i class="bi bi-file-excel text-success fs-3 me-3"></i>
                                                <div class="flex-grow-1">
                                                    <div class="fw-semibold">Classroom_Assignments.xlsx</div>
                                                    <small class="text-muted">458 KB</small>
                                                </div>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    aria-label="Transferir">
                                                    <i aria-hidden="true" class="bi bi-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Reply -->
                                <div class="quick-reply mt-5">
                                    <h6 class="mb-3">Resposta r?pida</h6>
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="5"
                                                placeholder="Escreva a sua resposta aqui..."></textarea>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <button type="button" class="btn btn-sm btn-outline-secondary me-2">
                                                    <i class="bi bi-paperclip"></i> Anexar
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    aria-label="Emoji">
                                                    <i aria-hidden="true" class="bi bi-emoji-smile"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-sm btn-secondary me-2">Guardar
                                                    Draft</button>
                                                <button type="submit" class="btn btn-sm btn-primary">Enviar resposta</button>
                                            </div>
                                        </div>
                                    </form>
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
                        <p class="mb-0">Desenvolvido <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>




    <!-- Load JavaScript -->




</body>

</html>