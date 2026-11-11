<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kiaalap - Modern Education Management Dashboard for Universities">
    <meta name="keywords" content="education, dashboard, university, management, admin">
    <meta name="author" content="Kiaalap">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">

    {{--Usei o include, para dinamizar a nomeação de nomes nas páginas--}}
    @include('layouts._include.dashboard.header', ['title' => 'Dashboard Principal'])


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
    <a href="#main-content" class="visually-hidden-focusable">Skip to main content</a>

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
                <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Toggle sidebar"
                    aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Breadcrumb for desktop -->
                <nav aria-label="Header breadcrumb" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Analytics</li>
                    </ol>
                </nav>

                <!-- Logo for mobile -->
                <div class="navbar-brand d-lg-none fw-bold me-auto">Kiaalap</div>

                <!-- Spacer for desktop -->
                <div class="flex-grow-1 d-none d-lg-block"></div>

                <!-- Right Actions -->
                <div class="d-flex align-items-center gap-2">
                    <!-- Search -->
                    <div class="search-container">
                        <button type="button" class="btn btn-light btn-icon" id="searchToggle" aria-label="Open search"
                            aria-controls="searchForm">
                            <i class="bi bi-search"></i>
                        </button>

                        <div class="search-form" id="searchForm" role="search" aria-label="Site search">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" class="form-control" id="searchInput" aria-label="Search pages"
                                placeholder="Search..." data-bs-toggle="dropdown">
                            <button type="button" class="close-search" id="closeSearch" aria-label="Close search">
                                <i class="bi bi-x-lg"></i>
                            </button>

                            <ul class="dropdown-menu w-100 mt-2">
                                <li><a class="dropdown-item" href="#">Student Registration</a></li>
                                <li><a class="dropdown-item" href="#">Course Management</a></li>
                                <li><a class="dropdown-item" href="#">Grade Submission</a></li>
                                <li><a class="dropdown-item" href="#">Faculty Directory</a></li>
                                <li><a class="dropdown-item" href="#">Library Resources</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Advanced Search</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light btn-icon position-relative" data-bs-toggle="dropdown"
                            id="notificationsToggle" aria-label="Notifications">
                            <i class="bi bi-bell"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                style="font-size: 0.6rem;">3</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="width: 320px;">
                            <li class="dropdown-header d-flex align-items-center justify-content-between">
                                <span>Notifications</span>
                                <small class="text-muted">3 new</small>
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
                                            <div class="fw-semibold">New Event</div>
                                            <div class="text-muted small">Science Fair on March 15</div>
                                            <div class="text-muted small">5 minutes ago</div>
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
                                            <div class="fw-semibold">Assignment Submitted</div>
                                            <div class="text-muted small">John submitted his project</div>
                                            <div class="text-muted small">2 hours ago</div>
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
                                            <div class="text-muted small">Database backup completed</div>
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
                                    <small>View all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Quick Actions -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light btn-icon" data-bs-toggle="dropdown"
                            aria-label="Quick actions">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="add-student.html"><i
                                        class="bi bi-person-plus me-2"></i>Add Student</a></li>
                            <li><a class="dropdown-item" href="add-course.html"><i class="bi bi-book me-2"></i>Add
                                    Course</a></li>
                            <li><a class="dropdown-item" href="add-professor.html"><i
                                        class="bi bi-person-badge me-2"></i>Add Professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Schedule
                                    Event</a></li>
                        </ul>
                    </div>

                    <!-- User Menu -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light d-flex align-items-center" data-bs-toggle="dropdown"
                            aria-label="Sarah Johnson account menu">
                            <span class="user-avatar me-2">
                                SJ
                            </span>
                            <span class="d-none d-md-inline">Sarah Johnson</span>
                            <i class="bi bi-chevron-down ms-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Help
                                    Center</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
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
                            <h1 class="h3 mb-0 text-gray-800">Analytics Dashboard</h1>
                            <p class="text-muted mb-0">Monitor your educational institution's performance metrics</p>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-secondary btn-sm">Day</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm">Week</button>
                            <button type="button" class="btn btn-primary btn-sm">Month</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm">Year</button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="dashboard-row">
                    <h2 class="h5 fw-semibold text-gray-800 mb-4">Key Metrics</h2>
                    <div class="dashboard-grid grid-cols-4">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="text-muted mb-1 small">Total Students</p>
                                        <h4 class="mb-0">8,542</h4>
                                    </div>
                                    <div class="stats-icon bg-primary bg-opacity-10 text-primary">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-success-subtle text-success me-2">
                                        <i class="bi bi-arrow-up"></i> 12.5%
                                    </span>
                                    <span class="text-muted small">vs last month</span>
                                </div>
                                <div class="progress mt-3" style="height: 4px;">
                                    <div class="progress-bar bg-primary" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="text-muted mb-1 small">Course Completion</p>
                                        <h4 class="mb-0">87.3%</h4>
                                    </div>
                                    <div class="stats-icon bg-success bg-opacity-10 text-success">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-success-subtle text-success me-2">
                                        <i class="bi bi-arrow-up"></i> 5.2%
                                    </span>
                                    <span class="text-muted small">vs last month</span>
                                </div>
                                <div class="progress mt-3" style="height: 4px;">
                                    <div class="progress-bar bg-success" style="width: 87%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="text-muted mb-1 small">Average GPA</p>
                                        <h4 class="mb-0">3.42</h4>
                                    </div>
                                    <div class="stats-icon bg-warning bg-opacity-10 text-warning">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-warning-subtle text-warning me-2">
                                        <i class="bi bi-dash"></i> 0.8%
                                    </span>
                                    <span class="text-muted small">vs last month</span>
                                </div>
                                <div class="progress mt-3" style="height: 4px;">
                                    <div class="progress-bar bg-warning" style="width: 68%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="text-muted mb-1 small">Revenue</p>
                                        <h4 class="mb-0">$124.5K</h4>
                                    </div>
                                    <div class="stats-icon bg-info bg-opacity-10 text-info">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-success-subtle text-success me-2">
                                        <i class="bi bi-arrow-up"></i> 18.2%
                                    </span>
                                    <span class="text-muted small">vs last month</span>
                                </div>
                                <div class="progress mt-3" style="height: 4px;">
                                    <div class="progress-bar bg-info" style="width: 82%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Row -->
                <div class="dashboard-row">
                    <h2 class="h5 fw-semibold text-gray-800 mb-4">Data Visualization</h2>
                    <div class="dashboard-grid" style="grid-template-columns: 2fr 1fr;">
                        <!-- Enrollment Trends Chart -->
                        <div class="dashboard-card">
                            <div class="dashboard-card-header py-4 px-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Enrollment Trends</h6>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                            aria-label="More options">
                                            <i aria-hidden="true" class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Export Data</a></li>
                                            <li><a class="dropdown-item" href="#">Print Chart</a></li>
                                            <li><a class="dropdown-item" href="#">Refresh</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-card-body p-4">
                                <div style="position: relative; height: 250px;">
                                    <canvas id="enrollmentChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Department Distribution -->
                        <div class="dashboard-card">
                            <div class="dashboard-card-header py-4 px-4">
                                <h6 class="mb-0">Department Distribution</h6>
                            </div>
                            <div class="dashboard-card-body p-4">
                                <div style="position: relative; height: 200px;">
                                    <canvas id="departmentChart"></canvas>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="small"><i class="bi bi-circle-fill text-primary me-1"></i>
                                            Engineering</span>
                                        <span class="fw-bold">35%</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="small"><i class="bi bi-circle-fill text-success me-1"></i>
                                            Business</span>
                                        <span class="fw-bold">28%</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="small"><i class="bi bi-circle-fill text-warning me-1"></i>
                                            Medicine</span>
                                        <span class="fw-bold">22%</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="bi bi-circle-fill text-info me-1"></i> Arts</span>
                                        <span class="fw-bold">15%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Performance Metrics -->
                <div class="dashboard-row">
                    <h2 class="h5 fw-semibold text-gray-800 mb-4">Performance &amp; Activities</h2>
                    <div class="dashboard-grid grid-cols-2">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header py-4 px-4">
                                <h6 class="mb-0">Academic Performance by Subject</h6>
                            </div>
                            <div class="dashboard-card-body px-4 py-3">
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Mathematics</span>
                                        <span class="fw-bold">85%</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-primary" style="width: 85%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Science</span>
                                        <span class="fw-bold">78%</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-success" style="width: 78%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Literature</span>
                                        <span class="fw-bold">92%</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-info" style="width: 92%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>History</span>
                                        <span class="fw-bold">71%</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-warning" style="width: 71%"></div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Computer Science</span>
                                        <span class="fw-bold">88%</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-danger" style="width: 88%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activities -->
                        <div class="dashboard-card">
                            <div class="dashboard-card-header py-4 px-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Recent Activities</h6>
                                    <a href="#" class="text-primary small">View All</a>
                                </div>
                            </div>
                            <div class="dashboard-card-body px-4 py-3">
                                <div class="activity-list">
                                    <div class="activity-item d-flex align-items-start py-3 border-bottom">
                                        <div class="activity-icon bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3 flex-shrink-0"
                                            style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                            <i class="bi bi-person-plus"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">New Student Registration</h6>
                                            <p class="text-muted small mb-0">15 new students registered today</p>
                                            <span class="text-muted" style="font-size: 0.75rem;">2 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-item d-flex align-items-start py-3 border-bottom">
                                        <div class="activity-icon bg-success bg-opacity-10 text-success rounded-circle p-2 me-3 flex-shrink-0"
                                            style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                            <i class="bi bi-check-circle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Course Completed</h6>
                                            <p class="text-muted small mb-0">Advanced Mathematics course finished</p>
                                            <span class="text-muted" style="font-size: 0.75rem;">5 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-item d-flex align-items-start py-3 border-bottom">
                                        <div class="activity-icon bg-warning bg-opacity-10 text-warning rounded-circle p-2 me-3 flex-shrink-0"
                                            style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                            <i class="bi bi-trophy"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Achievement Unlocked</h6>
                                            <p class="text-muted small mb-0">Top performer badge awarded</p>
                                            <span class="text-muted" style="font-size: 0.75rem;">1 day ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-item d-flex align-items-start py-3">
                                        <div class="activity-icon bg-info bg-opacity-10 text-info rounded-circle p-2 me-3 flex-shrink-0"
                                            style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                            <i class="bi bi-calendar-check"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Event Scheduled</h6>
                                            <p class="text-muted small mb-0">Annual Science Fair on March 15</p>
                                            <span class="text-muted" style="font-size: 0.75rem;">2 days ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="dashboard-row">
                    <h2 class="h5 fw-semibold text-gray-800 mb-4">Student Performance Table</h2>
                    <div class="dashboard-card">
                        <div class="dashboard-card-header py-4 px-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Top Performing Students</h6>
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="bi bi-download me-1"></i> Export
                                </button>
                            </div>
                        </div>
                        <div class="dashboard-card-body px-4 py-3">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Student</th>
                                            <th>Department</th>
                                            <th>GPA</th>
                                            <th>Attendance</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Emily+Chen&background=6366f1&color=fff"
                                                        class="rounded-circle me-2" width="32" height="32" alt="Emily"
                                                        loading="lazy">
                                                    <div>
                                                        <div class="fw-semibold">Emily Chen</div>
                                                        <div class="text-muted small">ID: 2025001</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Computer Science</td>
                                            <td><span class="badge bg-success">3.95</span></td>
                                            <td>98%</td>
                                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-light">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Michael+Davis&background=10b981&color=fff"
                                                        class="rounded-circle me-2" width="32" height="32" alt="Michael"
                                                        loading="lazy">
                                                    <div>
                                                        <div class="fw-semibold">Michael Davis</div>
                                                        <div class="text-muted small">ID: 2025002</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Engineering</td>
                                            <td><span class="badge bg-success">3.88</span></td>
                                            <td>95%</td>
                                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-light">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=f59e0b&color=fff"
                                                        class="rounded-circle me-2" width="32" height="32" alt="Sarah"
                                                        loading="lazy">
                                                    <div>
                                                        <div class="fw-semibold">Sarah Johnson</div>
                                                        <div class="text-muted small">ID: 2025003</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Medicine</td>
                                            <td><span class="badge bg-success">3.92</span></td>
                                            <td>96%</td>
                                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-light">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=James+Wilson&background=ef4444&color=fff"
                                                        class="rounded-circle me-2" width="32" height="32" alt="James"
                                                        loading="lazy">
                                                    <div>
                                                        <div class="fw-semibold">James Wilson</div>
                                                        <div class="text-muted small">ID: 2025004</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Business</td>
                                            <td><span class="badge bg-success">3.85</span></td>
                                            <td>94%</td>
                                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-light">View</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                        <p class="mb-0">&copy; 2026 Kiaalap. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="mb-0">Built with <i class="bi bi-heart-fill text-danger"></i> for education</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Enrollment Trends Chart
            const enrollmentCtx = document.getElementById('enrollmentChart');
            if (enrollmentCtx) {
                enrollmentCtx.getContext('2d');
                new Chart(enrollmentCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        datasets: [{
                            label: 'Students',
                            data: [7200, 7400, 7800, 8100, 8300, 8200, 8400, 8500, 8542, 8600, 8700, 8800],
                            borderColor: '#6366f1',
                            backgroundColor: 'rgba(99, 102, 241, 0.1)',
                            tension: 0.3,
                            fill: true
                        }, {
                            label: 'Courses',
                            data: [120, 125, 130, 135, 140, 138, 142, 145, 148, 150, 152, 155],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            tension: 0.3,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: false,
                                grid: {
                                    display: true,
                                    drawBorder: false
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                }
                            }
                        }
                    }
                });
            }

            // Initialize Department Distribution Chart
            const departmentCtx = document.getElementById('departmentChart');
            if (departmentCtx) {
                departmentCtx.getContext('2d');
                new Chart(departmentCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Engineering', 'Business', 'Medicine', 'Arts'],
                        datasets: [{
                            data: [35, 28, 22, 15],
                            backgroundColor: [
                                '#6366f1',
                                '#10b981',
                                '#f59e0b',
                                '#06b6d4'
                            ],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            }
        });
    </script>

    <!-- Load JavaScript -->





</body>

</html>