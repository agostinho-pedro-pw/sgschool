<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-brand">
            <h5 class="d-flex align-items-center gap-2 mb-0">
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
                    <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                        data-bs-target="#dashboardSubmenu" aria-expanded="true">
                        <i class="bi bi-speedometer2"></i>
                        <span>Painel</span>
                    </a>
                    <ul id="dashboardSubmenu" class="submenu collapse show list-unstyled">
                        <li><a class="nav-link active" href="{{ route('dashboard') }}">Painel v.1</a></li>
                        <li><a class="nav-link " href="{{ route('dashboard-1')  }}">Painel v.2</a></li>
                        <li><a class="nav-link " href="{{ route('dashboard-2')}}">Painel v.3</a></li>
                        <li><a class="nav-link " href="{{ route('analytics')}}">Análises</a></li>
                        <li><a class="nav-link " href="{{ route('widgets') }}">Widgets</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('eventos') }}">
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
                        <li><a class="nav-link " href="{{ route('all-professors') }}">Todos os Professores</a></li>
                        <li><a class="nav-link " href="{{ route('add-professors') }}">Adicionar Professor</a></li>
                        <li><a class="nav-link " href="{{ route('edit-professors') }}">Editar Professor</a></li>
                        <li><a class="nav-link " href="{{ route('profile-professors')}}">Perfil do Professor</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                        data-bs-target="#studentsSubmenu" aria-expanded="false">
                        <i class="bi bi-people"></i>
                        <span>Estudantes</span>
                    </a>
                    <ul id="studentsSubmenu" class="submenu collapse  list-unstyled">
                        <li><a class="nav-link " href="{{ route('all-students') }}">Todos os Estudantes</a></li>
                        <li><a class="nav-link " href="{{ route('add-students') }}">Adicionar Estudante</a></li>
                        <li><a class="nav-link " href="{{ route('edit-students') }}">Editar Estudante</a></li>
                        <li><a class="nav-link " href="{{ route('profile-students') }}">Perfil do Estudante</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                        data-bs-target="#coursesSubmenu" aria-expanded="false">
                        <i class="bi bi-book"></i>
                        <span>Cursos</span>
                    </a>
                    <ul id="coursesSubmenu" class="submenu collapse  list-unstyled">
                        <li><a class="nav-link " href="{{ route('all-course') }}">Todos os Cursos</a></li>
                        <li><a class="nav-link " href="{{ route('add-courses') }}">Adicionar Curso</a></li>
                        <li><a class="nav-link " href="{{ route('edit-course') }}">Editar Curso</a></li>
                        <li><a class="nav-link " href="{{ route('course-info') }}">Informações do Curso</a></li>
                        <li><a class="nav-link " href="{{ route('course-payment')}} ">Pagamento do Curso</a></li>
                    </ul>
                </li>
                {{--De momento não quero lybary
                <li class="nav-item">
                    <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                        data-bs-target="#librarySubmenu" aria-expanded="false">
                        <i class="bi bi-journal-bookmark"></i>
                        <span>Biblioteca</span>
                    </a>
                    <ul id="librarySubmenu" class="submenu collapse  list-unstyled">
                        <li><a class="nav-link " href="library-assets.html">Acervo da Biblioteca</a></li>
                        <li><a class="nav-link " href="add-library-assets.html">Adicionar Item ao Acervo</a></li>
                        <li><a class="nav-link " href="edit-library-assets.html">Editar Item do Acervo</a></li>
                    </ul>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                        data-bs-target="#departmentsSubmenu" aria-expanded="false">
                        <i class="bi bi-building"></i>
                        <span>Departamentos</span>
                    </a>
                    <ul id="departmentsSubmenu" class="submenu collapse  list-unstyled">
                        <li><a class="nav-link " href="{{ route('department') }}">Lista de Departamentos</a></li>
                        <li><a class="nav-link " href="{{ route('add-department') }}">Adicionar Departamento</a></li>
                        <li><a class="nav-link " href="{{ route('edit-department') }}">Editar Departamento</a></li>
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
                        <span>Caixa de Correio</span>
                    </a>
                    <ul id="mailboxSubmenu" class="submenu collapse  list-unstyled">
                        <li><a class="nav-link " href="{{ route('mailbox') }}">Caixa de Entrada</a></li>
                        <li><a class="nav-link " href="{{ route('mailbox-compose') }}">Escrever</a></li>
                        <li><a class="nav-link " href="{{ route('mailbox-view') }}">Ver Mensagem</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</aside>