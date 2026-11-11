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

    <title>Widgets - Kiaalap Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/chart-runtime-BMJJQUfu.js') }}"></script>
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

        .widget-grid {
            gap: 24px;
            margin-bottom: 24px;
            display: grid
        }

        .widget-card {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            transition: transform .2s, box-shadow .2s;
            box-shadow: 0 1px 3px #0000001a
        }

        .widget-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px #00000026
        }

        .widget-header {
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
            display: flex
        }

        .widget-title {
            flex-grow: 1;
            margin: 0;
            font-size: 1rem;
            font-weight: 600
        }

        .widget-icon {
            border-radius: 8px;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            margin-right: 12px;
            display: flex
        }
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Skip to main content</a>

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
                <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Toggle sidebar"
                    aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Breadcrumb for desktop -->
                <nav aria-label="Header breadcrumb" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Widgets</li>
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
                    <h1 class="h3 fw-bold">Widget Collection</h1>
                    <p class="text-muted">A comprehensive collection of widgets for educational dashboard interfaces</p>
                </div>

                <!-- Statistics Widgets -->
                <section aria-labelledby="stats-widgets-heading">
                    <h2 id="stats-widgets-heading" class="h5 fw-semibold mb-4">Statistics Widgets</h2>
                    <div class="widget-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                        <!-- Students Widget -->
                        <div class="widget-card">
                            <div class="d-flex align-items-center">
                                <div class="widget-icon bg-primary bg-opacity-10 text-primary">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="widget-title">Total Students</div>
                                    <div class="h4 fw-bold mb-0">2,847</div>
                                    <small class="text-success"><i class="bi bi-arrow-up"></i> +12% from last
                                        month</small>
                                </div>
                            </div>
                        </div>

                        <!-- Professors Widget -->
                        <div class="widget-card">
                            <div class="d-flex align-items-center">
                                <div class="widget-icon bg-success bg-opacity-10 text-success">
                                    <i class="bi bi-person-badge-fill"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="widget-title">Active Professors</div>
                                    <div class="h4 fw-bold mb-0">185</div>
                                    <small class="text-success"><i class="bi bi-arrow-up"></i> +3% from last
                                        month</small>
                                </div>
                            </div>
                        </div>

                        <!-- Courses Widget -->
                        <div class="widget-card">
                            <div class="d-flex align-items-center">
                                <div class="widget-icon bg-warning bg-opacity-10 text-warning">
                                    <i class="bi bi-book-fill"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="widget-title">Available Courses</div>
                                    <div class="h4 fw-bold mb-0">127</div>
                                    <small class="text-warning"><i class="bi bi-dash"></i> No change</small>
                                </div>
                            </div>
                        </div>

                        <!-- Revenue Widget -->
                        <div class="widget-card">
                            <div class="d-flex align-items-center">
                                <div class="widget-icon bg-danger bg-opacity-10 text-danger">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="widget-title">Monthly Revenue</div>
                                    <div class="h4 fw-bold mb-0">$89,245</div>
                                    <small class="text-success"><i class="bi bi-arrow-up"></i> +8% from last
                                        month</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Progress Widgets -->
                <section aria-labelledby="progress-widgets-heading">
                    <h2 id="progress-widgets-heading" class="h5 fw-semibold mb-4 mt-5">Progress Widgets</h2>
                    <div class="widget-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                        <!-- Course Completion Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Course Completion Rates</h3>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        This Month
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">This Week</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-sm">Computer Science</span>
                                    <span class="text-sm fw-medium">87%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 87%"
                                        aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-sm">Mathematics</span>
                                    <span class="text-sm fw-medium">72%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 72%"
                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-sm">Physics</span>
                                    <span class="text-sm fw-medium">64%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 64%"
                                        aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-sm">Chemistry</span>
                                    <span class="text-sm fw-medium">58%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 58%"
                                        aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Assignment Progress Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Assignment Submissions</h3>
                                <span class="badge bg-primary">24 Due Today</span>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-sm">Submitted</span>
                                    <span class="text-sm fw-medium">156/200</span>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 78%"
                                        aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-sm">Pending Review</span>
                                    <span class="text-sm fw-medium">28/200</span>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 14%"
                                        aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-sm">Overdue</span>
                                    <span class="text-sm fw-medium">16/200</span>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 8%"
                                        aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- User Profile Widgets -->
                <section aria-labelledby="profile-widgets-heading">
                    <h2 id="profile-widgets-heading" class="h5 fw-semibold mb-4 mt-5">User Profile Widgets</h2>
                    <div class="widget-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                        <!-- Student Profile Widget -->
                        <div class="widget-card text-center">
                            <div class="position-relative mb-3">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=faces"
                                    alt="Student Profile" class="rounded-circle mb-3" width="80" height="80"
                                    loading="lazy">
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    <i class="bi bi-check"></i>
                                </span>
                            </div>
                            <h4 class="fw-semibold mb-1">Alex Thompson</h4>
                            <p class="text-muted mb-2">Computer Science Student</p>
                            <p class="text-muted small mb-3">Class of 2025 • GPA: 3.8</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="bi bi-envelope me-1"></i> Message
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-person-plus me-1"></i> Follow
                                </button>
                            </div>
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="fw-bold text-primary">24</div>
                                    <div class="small text-muted">Courses</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold text-success">3.8</div>
                                    <div class="small text-muted">GPA</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold text-warning">12</div>
                                    <div class="small text-muted">Credits</div>
                                </div>
                            </div>
                        </div>

                        <!-- Professor Profile Widget -->
                        <div class="widget-card text-center">
                            <div class="position-relative mb-3">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=faces"
                                    alt="Professor Profile" class="rounded-circle mb-3" width="80" height="80"
                                    loading="lazy">
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    <i class="bi bi-star"></i>
                                </span>
                            </div>
                            <h4 class="fw-semibold mb-1">Dr. Sarah Williams</h4>
                            <p class="text-muted mb-2">Computer Science Professor</p>
                            <p class="text-muted small mb-3">Ph.D. MIT • 8 years experience</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="bi bi-calendar me-1"></i> Schedule
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-star me-1"></i> Rate
                                </button>
                            </div>
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="fw-bold text-primary">12</div>
                                    <div class="small text-muted">Courses</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold text-success">4.7</div>
                                    <div class="small text-muted">Rating</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold text-warning">340</div>
                                    <div class="small text-muted">Students</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Calendar & Events Widget -->
                <section aria-labelledby="calendar-widgets-heading">
                    <h2 id="calendar-widgets-heading" class="h5 fw-semibold mb-4 mt-5">Calendar &amp; Events Widgets
                    </h2>
                    <div class="widget-grid" style="grid-template-columns: 1fr 1fr;">
                        <!-- Mini Calendar Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">September 2025</h3>
                                <div class="d-flex gap-1">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        aria-label="Previous month">
                                        <i class="bi bi-chevron-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        aria-label="Next month">
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm text-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-0 text-muted small py-1">Su</th>
                                            <th class="border-0 text-muted small py-1">Mo</th>
                                            <th class="border-0 text-muted small py-1">Tu</th>
                                            <th class="border-0 text-muted small py-1">We</th>
                                            <th class="border-0 text-muted small py-1">Th</th>
                                            <th class="border-0 text-muted small py-1">Fr</th>
                                            <th class="border-0 text-muted small py-1">Sa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-0 py-1 text-muted">31</td>
                                            <td class="border-0 py-1">1</td>
                                            <td class="border-0 py-1">2</td>
                                            <td class="border-0 py-1">3</td>
                                            <td class="border-0 py-1">4</td>
                                            <td class="border-0 py-1">5</td>
                                            <td class="border-0 py-1">6</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 py-1">7</td>
                                            <td class="border-0 py-1">8</td>
                                            <td class="border-0 py-1">9</td>
                                            <td class="border-0 py-1">10</td>
                                            <td class="border-0 py-1">11</td>
                                            <td class="border-0 py-1">12</td>
                                            <td class="border-0 py-1">13</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 py-1">14</td>
                                            <td class="border-0 py-1 position-relative">
                                                15
                                                <div class="position-absolute bottom-0 start-50 translate-middle-x"
                                                    style="width: 4px; height: 4px; background: #0d6efd; border-radius: 50%;">
                                                </div>
                                            </td>
                                            <td class="border-0 py-1">16</td>
                                            <td class="border-0 py-1">17</td>
                                            <td class="border-0 py-1">18</td>
                                            <td class="border-0 py-1">19</td>
                                            <td class="border-0 py-1">20</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 py-1">21</td>
                                            <td class="border-0 py-1 bg-primary text-white rounded">22</td>
                                            <td class="border-0 py-1">23</td>
                                            <td class="border-0 py-1 position-relative">
                                                24
                                                <div class="position-absolute bottom-0 start-50 translate-middle-x"
                                                    style="width: 4px; height: 4px; background: #198754; border-radius: 50%;">
                                                </div>
                                            </td>
                                            <td class="border-0 py-1">25</td>
                                            <td class="border-0 py-1">26</td>
                                            <td class="border-0 py-1">27</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 py-1">28</td>
                                            <td class="border-0 py-1">29</td>
                                            <td class="border-0 py-1">30</td>
                                            <td class="border-0 py-1 text-muted">1</td>
                                            <td class="border-0 py-1 text-muted">2</td>
                                            <td class="border-0 py-1 text-muted">3</td>
                                            <td class="border-0 py-1 text-muted">4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Upcoming Events Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Upcoming Events</h3>
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="bi bi-plus"></i> Add Event
                                </button>
                            </div>
                            <div style="max-height: 280px; overflow-y: auto;">
                                <div class="d-flex align-items-start mb-3">
                                    <div class="text-center me-3" style="min-width: 50px;">
                                        <div class="small text-muted">SEP</div>
                                        <div class="h5 fw-bold text-primary mb-0">15</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-semibold mb-1">Faculty Meeting</h6>
                                        <p class="text-muted small mb-1">Conference Room A</p>
                                        <small class="text-muted"><i class="bi bi-clock"></i> 2:00 PM - 4:00 PM</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="text-center me-3" style="min-width: 50px;">
                                        <div class="small text-muted">SEP</div>
                                        <div class="h5 fw-bold text-success mb-0">18</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-semibold mb-1">Student Orientation</h6>
                                        <p class="text-muted small mb-1">Main Auditorium</p>
                                        <small class="text-muted"><i class="bi bi-clock"></i> 9:00 AM - 12:00 PM</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="text-center me-3" style="min-width: 50px;">
                                        <div class="small text-muted">SEP</div>
                                        <div class="h5 fw-bold text-warning mb-0">22</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-semibold mb-1">Science Fair</h6>
                                        <p class="text-muted small mb-1">Laboratory Building</p>
                                        <small class="text-muted"><i class="bi bi-clock"></i> All Day</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <div class="text-center me-3" style="min-width: 50px;">
                                        <div class="small text-muted">SEP</div>
                                        <div class="h5 fw-bold text-danger mb-0">25</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-semibold mb-1">Final Exams Begin</h6>
                                        <p class="text-muted small mb-1">All Classrooms</p>
                                        <small class="text-muted"><i class="bi bi-clock"></i> 8:00 AM onwards</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Todo & Weather Row -->
                <section aria-labelledby="utility-widgets-heading">
                    <h2 id="utility-widgets-heading" class="h5 fw-semibold mb-4 mt-5">Utility Widgets</h2>
                    <div class="widget-grid" style="grid-template-columns: 1fr 1fr;">
                        <!-- Todo List Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Today's Tasks</h3>
                                <span class="badge bg-primary">5 pending</span>
                            </div>
                            <div style="max-height: 250px; overflow-y: auto;">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="task1" checked>
                                    <label class="form-check-label text-decoration-line-through text-muted" for="task1">
                                        Review student applications
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="task2">
                                    <label class="form-check-label" for="task2">
                                        Prepare lecture materials for CS101
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="task3">
                                    <label class="form-check-label" for="task3">
                                        Grade midterm exams
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="task4">
                                    <label class="form-check-label" for="task4">
                                        Update course syllabus
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="task5" checked>
                                    <label class="form-check-label text-decoration-line-through text-muted" for="task5">
                                        Send reminder emails to students
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="task6">
                                    <label class="form-check-label" for="task6">
                                        Schedule parent-teacher meetings
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn btn-outline-primary btn-sm w-100">
                                    <i class="bi bi-plus"></i> Add New Task
                                </button>
                            </div>
                        </div>

                        <!-- Weather Widget -->
                        <div class="widget-card text-center">
                            <div class="widget-header">
                                <h3 class="widget-title">Today's Weather</h3>
                                <small class="text-muted">New York, NY</small>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-sun" style="font-size: 3rem; color: #ffc107;"></i>
                            </div>
                            <div class="h2 fw-bold mb-1">72°F</div>
                            <p class="text-muted mb-3">Sunny</p>
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="small text-muted">Humidity</div>
                                    <div class="fw-semibold">45%</div>
                                </div>
                                <div class="col-4">
                                    <div class="small text-muted">Wind</div>
                                    <div class="fw-semibold">8 mph</div>
                                </div>
                                <div class="col-4">
                                    <div class="small text-muted">UV Index</div>
                                    <div class="fw-semibold">6</div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between text-center">
                                <div>
                                    <div class="small text-muted">Tomorrow</div>
                                    <i class="bi bi-cloud-sun text-warning"></i>
                                    <div class="small fw-semibold">69°F</div>
                                </div>
                                <div>
                                    <div class="small text-muted">Tuesday</div>
                                    <i class="bi bi-cloud-rain text-primary"></i>
                                    <div class="small fw-semibold">65°F</div>
                                </div>
                                <div>
                                    <div class="small text-muted">Wednesday</div>
                                    <i class="bi bi-sun text-warning"></i>
                                    <div class="small fw-semibold">74°F</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Social Media & Quick Actions -->
                <section aria-labelledby="social-widgets-heading">
                    <h2 id="social-widgets-heading" class="h5 fw-semibold mb-4 mt-5">Social Media &amp; Quick Actions
                    </h2>
                    <div class="widget-grid" style="grid-template-columns: 1fr 1fr;">
                        <!-- Social Media Feed Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Social Media Activity</h3>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        All Platforms
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Facebook</a></li>
                                        <li><a class="dropdown-item" href="#">Twitter</a></li>
                                        <li><a class="dropdown-item" href="#">LinkedIn</a></li>
                                        <li><a class="dropdown-item" href="#">Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div style="max-height: 280px; overflow-y: auto;">
                                <div class="d-flex align-items-start mb-3">
                                    <div class="widget-icon bg-primary bg-opacity-10 text-primary me-3"
                                        style="width: 32px; height: 32px; font-size: 14px;">
                                        <i class="bi bi-facebook"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">New follower on Facebook</div>
                                        <div class="small text-muted">University page gained 25 new followers</div>
                                        <div class="small text-muted">2 hours ago</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="widget-icon bg-info bg-opacity-10 text-info me-3"
                                        style="width: 32px; height: 32px; font-size: 14px;">
                                        <i class="bi bi-twitter-x"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">Tweet about upcoming events</div>
                                        <div class="small text-muted">Science Fair announcement got 45 retweets</div>
                                        <div class="small text-muted">4 hours ago</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="widget-icon bg-primary bg-opacity-10 text-primary me-3"
                                        style="width: 32px; height: 32px; font-size: 14px;">
                                        <i class="bi bi-linkedin"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">LinkedIn article published</div>
                                        <div class="small text-muted">"Future of Education" article got 120 views</div>
                                        <div class="small text-muted">6 hours ago</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <div class="widget-icon bg-danger bg-opacity-10 text-danger me-3"
                                        style="width: 32px; height: 32px; font-size: 14px;">
                                        <i class="bi bi-instagram"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">Campus photo posted</div>
                                        <div class="small text-muted">Library study space photo got 85 likes</div>
                                        <div class="small text-muted">8 hours ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Quick Actions</h3>
                                <small class="text-muted">Common tasks</small>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button"
                                        class="btn btn-outline-primary w-100 d-flex flex-column align-items-center py-3">
                                        <i class="bi bi-person-plus" style="font-size: 1.5rem;"></i>
                                        <span class="mt-2 small">Add Student</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button"
                                        class="btn btn-outline-success w-100 d-flex flex-column align-items-center py-3">
                                        <i class="bi bi-book" style="font-size: 1.5rem;"></i>
                                        <span class="mt-2 small">New Course</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button"
                                        class="btn btn-outline-warning w-100 d-flex flex-column align-items-center py-3">
                                        <i class="bi bi-calendar-event" style="font-size: 1.5rem;"></i>
                                        <span class="mt-2 small">Schedule Event</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button"
                                        class="btn btn-outline-info w-100 d-flex flex-column align-items-center py-3">
                                        <i class="bi bi-envelope" style="font-size: 1.5rem;"></i>
                                        <span class="mt-2 small">Send Email</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button"
                                        class="btn btn-outline-danger w-100 d-flex flex-column align-items-center py-3">
                                        <i class="bi bi-file-earmark-text" style="font-size: 1.5rem;"></i>
                                        <span class="mt-2 small">Generate Report</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button"
                                        class="btn btn-outline-secondary w-100 d-flex flex-column align-items-center py-3">
                                        <i class="bi bi-gear" style="font-size: 1.5rem;"></i>
                                        <span class="mt-2 small">Settings</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Chart Widgets -->
                <section aria-labelledby="chart-widgets-heading">
                    <h2 id="chart-widgets-heading" class="h5 fw-semibold mb-4 mt-5">Chart Widgets</h2>
                    <div class="widget-grid" style="grid-template-columns: 1fr 1fr 1fr;">
                        <!-- Mini Line Chart Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Enrollment Trend</h3>
                                <span class="badge bg-success">+15%</span>
                            </div>
                            <div style="height: 120px;">
                                <canvas id="enrollmentChart"></canvas>
                            </div>
                            <div class="text-center mt-2">
                                <small class="text-muted">Last 7 days</small>
                            </div>
                        </div>

                        <!-- Mini Doughnut Chart Widget -->
                        <div class="widget-card text-center">
                            <div class="widget-header">
                                <h3 class="widget-title">Grade Distribution</h3>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        CS101
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">CS101</a></li>
                                        <li><a class="dropdown-item" href="#">MATH201</a></li>
                                        <li><a class="dropdown-item" href="#">PHY301</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div style="height: 120px; display: flex; align-items: center; justify-content: center;">
                                <canvas id="gradeChart"></canvas>
                            </div>
                            <div class="row text-center mt-2">
                                <div class="col-3">
                                    <div class="small" style="color: #0d6efd;">●</div>
                                    <div class="small">A</div>
                                </div>
                                <div class="col-3">
                                    <div class="small" style="color: #198754;">●</div>
                                    <div class="small">B</div>
                                </div>
                                <div class="col-3">
                                    <div class="small" style="color: #ffc107;">●</div>
                                    <div class="small">C</div>
                                </div>
                                <div class="col-3">
                                    <div class="small" style="color: #dc3545;">●</div>
                                    <div class="small">D/F</div>
                                </div>
                            </div>
                        </div>

                        <!-- Mini Bar Chart Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Department Revenue</h3>
                                <span class="text-success small">
                                    <i class="bi bi-arrow-up"></i> 8.3%
                                </span>
                            </div>
                            <div style="height: 120px;">
                                <canvas id="revenueChart"></canvas>
                            </div>
                            <div class="text-center mt-2">
                                <small class="text-muted">This month vs last month</small>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Notification & Timeline Widgets -->
                <section aria-labelledby="notification-widgets-heading">
                    <h2 id="notification-widgets-heading" class="h5 fw-semibold mb-4 mt-5">Notifications &amp; Timeline
                    </h2>
                    <div class="widget-grid" style="grid-template-columns: 1fr 1fr;">
                        <!-- Recent Notifications Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Recent Notifications</h3>
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-bell-slash"></i> Mark All Read
                                </button>
                            </div>
                            <div style="max-height: 280px; overflow-y: auto;">
                                <div class="d-flex align-items-start mb-3">
                                    <div class="notification-icon bg-primary bg-opacity-10 text-primary me-3">
                                        <i class="bi bi-person-plus"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">New Student Registration</div>
                                        <div class="small text-muted">John Doe registered for Computer Science</div>
                                        <div class="small text-muted">5 minutes ago</div>
                                    </div>
                                    <div class="notification-dot bg-primary"></div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="notification-icon bg-success bg-opacity-10 text-success me-3">
                                        <i class="bi bi-check-circle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">Assignment Submitted</div>
                                        <div class="small text-muted">Sarah submitted Machine Learning project</div>
                                        <div class="small text-muted">15 minutes ago</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="notification-icon bg-warning bg-opacity-10 text-warning me-3">
                                        <i class="bi bi-exclamation-triangle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">Payment Reminder</div>
                                        <div class="small text-muted">5 students have pending tuition payments</div>
                                        <div class="small text-muted">1 hour ago</div>
                                    </div>
                                    <div class="notification-dot bg-warning"></div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <div class="notification-icon bg-info bg-opacity-10 text-info me-3">
                                        <i class="bi bi-calendar-event"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">Event Reminder</div>
                                        <div class="small text-muted">Faculty meeting starts in 2 hours</div>
                                        <div class="small text-muted">2 hours ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Activity Timeline Widget -->
                        <div class="widget-card">
                            <div class="widget-header">
                                <h3 class="widget-title">Activity Timeline</h3>
                                <small class="text-muted">Today's activity</small>
                            </div>
                            <div style="max-height: 280px; overflow-y: auto;">
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="timeline-marker bg-primary"></div>
                                        <div class="timeline-content">
                                            <div class="small fw-semibold">Course Created</div>
                                            <div class="small text-muted">Advanced Database Systems course was created
                                            </div>
                                            <div class="small text-muted">09:30 AM</div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-marker bg-success"></div>
                                        <div class="timeline-content">
                                            <div class="small fw-semibold">Student Enrolled</div>
                                            <div class="small text-muted">5 students enrolled in Data Structures</div>
                                            <div class="small text-muted">11:15 AM</div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-marker bg-warning"></div>
                                        <div class="timeline-content">
                                            <div class="small fw-semibold">System Maintenance</div>
                                            <div class="small text-muted">Database backup completed successfully</div>
                                            <div class="small text-muted">02:00 PM</div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-marker bg-info"></div>
                                        <div class="timeline-content">
                                            <div class="small fw-semibold">Grade Updated</div>
                                            <div class="small text-muted">Midterm grades published for CS301</div>
                                            <div class="small text-muted">03:45 PM</div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-marker bg-danger"></div>
                                        <div class="timeline-content">
                                            <div class="small fw-semibold">Alert Generated</div>
                                            <div class="small text-muted">3 students exceeded absence limit</div>
                                            <div class="small text-muted">04:20 PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
        // Lazy load images that are not immediately visible
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img[src*="unsplash"], img[src*="ui-avatars"]');
            images.forEach(img => {
                if (!img.hasAttribute('loading')) {
                    img.setAttribute('loading', 'lazy');
                }
                // Add width/height if missing to prevent layout shift
                if (!img.hasAttribute('width') && img.clientWidth) {
                    img.setAttribute('width', img.clientWidth);
                    img.setAttribute('height', img.clientHeight);
                }
            });

            // (A font preload used to be injected here. It pointed at a raw
            // node_modules path that does not survive the build's asset
            // hashing, and ran after DOMContentLoaded — by which point the
            // font had already been requested, so it only added a 404.)
        });

// Initialize charts when Chart.js is loaded
        window.addEventListener('load', function() {
            if (typeof Chart !== 'undefined') {
                // Enrollment Trend Chart
                const enrollmentCtx = document.getElementById('enrollmentChart');
                if (enrollmentCtx) {
                    new Chart(enrollmentCtx, {
                        type: 'line',
                        data: {
                            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                            datasets: [{
                                data: [120, 135, 145, 132, 148, 156, 165],
                                borderColor: '#0d6efd',
                                backgroundColor: 'rgba(13, 110, 253, 0.1)',
                                borderWidth: 2,
                                fill: true,
                                tension: 0.4
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: { legend: { display: false } },
                            scales: {
                                x: { display: false },
                                y: { display: false }
                            }
                        }
                    });
                }

                // Grade Distribution Chart
                const gradeCtx = document.getElementById('gradeChart');
                if (gradeCtx) {
                    new Chart(gradeCtx, {
                        type: 'doughnut',
                        data: {
                            labels: ['A', 'B', 'C', 'D/F'],
                            datasets: [{
                                data: [35, 40, 20, 5],
                                backgroundColor: ['#0d6efd', '#198754', '#ffc107', '#dc3545'],
                                borderWidth: 0
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: { legend: { display: false } },
                            cutout: '60%'
                        }
                    });
                }

                // Department Revenue Chart
                const revenueCtx = document.getElementById('revenueChart');
                if (revenueCtx) {
                    new Chart(revenueCtx, {
                        type: 'bar',
                        data: {
                            labels: ['CS', 'Math', 'Phy', 'Chem', 'Bio'],
                            datasets: [{
                                data: [85000, 72000, 58000, 67000, 75000],
                                backgroundColor: '#198754',
                                borderRadius: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: { legend: { display: false } },
                            scales: {
                                x: { display: false },
                                y: { display: false }
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