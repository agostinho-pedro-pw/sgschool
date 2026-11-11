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

    <title>Student profile - Kiaalap Dashboard</title>

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
                        <li class="breadcrumb-item active">Student profile</li>
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
                <!-- Profile Header -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto text-center text-md-start mb-3 mb-md-0 pe-md-3">
                                        <img src="https://ui-avatars.com/api/?name=Alex+Johnson&background=6366f1&color=fff&size=120"
                                            alt="Alex Johnson" class="rounded-circle" width="120" height="120"
                                            loading="lazy">
                                    </div>
                                    <div class="col-md ms-md-2">
                                        <h3 class="mb-1">Alex Johnson</h3>
                                        <p class="text-muted mb-2">Computer Science Department</p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-primary"><i
                                                    class="bi bi-hash me-1"></i>STU2024001</span>
                                            <span class="badge bg-success"><i
                                                    class="bi bi-check-circle me-1"></i>Active</span>
                                            <span class="badge bg-info text-dark"><i class="bi bi-calendar me-1"></i>3rd
                                                Year</span>
                                            <span class="badge bg-warning text-dark"><i
                                                    class="bi bi-trophy me-1"></i>Honor Roll</span>
                                        </div>
                                    </div>
                                    <div class="col-md-auto mt-3 mt-md-0 ms-md-3">
                                        <div class="btn-group" role="group">
                                            <a href="edit-student.html" class="btn btn-outline-primary">
                                                <i class="bi bi-pencil me-2"></i>Edit Profile
                                            </a>
                                            <button type="button" class="btn btn-outline-secondary">
                                                <i class="bi bi-download me-2"></i>Download Report
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-4">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center"
                                            style="width: 56px; height: 56px;">
                                            <i class="bi bi-book text-primary fs-4"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="text-muted mb-1">Enrolled Courses</h6>
                                        <h4 class="mb-0">6</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center"
                                            style="width: 56px; height: 56px;">
                                            <i class="bi bi-graph-up text-success fs-4"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="text-muted mb-1">GPA</h6>
                                        <h4 class="mb-0">3.85</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-circle bg-warning bg-opacity-10 d-flex align-items-center justify-content-center"
                                            style="width: 56px; height: 56px;">
                                            <i class="bi bi-clock-history text-warning fs-4"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="text-muted mb-1">Attendance</h6>
                                        <h4 class="mb-0">92%</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center"
                                            style="width: 56px; height: 56px;">
                                            <i class="bi bi-award text-info fs-4"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="text-muted mb-1">Credits Earned</h6>
                                        <h4 class="mb-0">72/120</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Details Tabs -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <!-- Tab Navigation -->
                                <ul class="nav nav-tabs mb-4" id="profileTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                            data-bs-target="#overview" type="button" role="tab">
                                            <i class="bi bi-person me-2"></i>Overview
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="courses-tab" data-bs-toggle="tab"
                                            data-bs-target="#courses" type="button" role="tab">
                                            <i class="bi bi-book me-2"></i>Courses
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="grades-tab" data-bs-toggle="tab"
                                            data-bs-target="#grades" type="button" role="tab">
                                            <i class="bi bi-clipboard-check me-2"></i>Grades
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="attendance-tab" data-bs-toggle="tab"
                                            data-bs-target="#attendance" type="button" role="tab">
                                            <i class="bi bi-calendar-check me-2"></i>Attendance
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="activities-tab" data-bs-toggle="tab"
                                            data-bs-target="#activities" type="button" role="tab">
                                            <i class="bi bi-lightning me-2"></i>Activities
                                        </button>
                                    </li>
                                </ul>

                                <!-- Tab Content -->
                                <div class="tab-content" id="profileTabContent">
                                    <!-- Overview Tab -->
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h5 class="mb-3">Personal Information</h5>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-muted">Full Name:</td>
                                                            <td>Alex Johnson</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Student ID:</td>
                                                            <td>STU2024001</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Date of Birth:</td>
                                                            <td>March 15, 2004</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Gender:</td>
                                                            <td>Male</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Email:</td>
                                                            <td><a
                                                                    href="mailto:alex.johnson@university.edu">alex.johnson@university.edu</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Phone:</td>
                                                            <td>+1 234-567-8900</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Address:</td>
                                                            <td>123 University Avenue, Building A, Room 205<br>New York,
                                                                NY 10001</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="mb-3">Academic Information</h5>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-muted">Department:</td>
                                                            <td>Computer Science</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Program:</td>
                                                            <td>Bachelor of Computer Science</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Year:</td>
                                                            <td>3rd Year</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Enrollment Date:</td>
                                                            <td>September 1, 2021</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Expected Graduation:</td>
                                                            <td>June 2026</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Academic Advisor:</td>
                                                            <td>Dr. Sarah Williams</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Status:</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5 class="mb-3">Emergency Contact</h5>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-muted" style="width: 200px">Contact Name:
                                                            </td>
                                                            <td>Robert Johnson (Father)</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Relationship:</td>
                                                            <td>Parent</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Phone:</td>
                                                            <td>+1 234-567-8901</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Courses Tab -->
                                    <div class="tab-pane fade" id="courses" role="tabpanel">
                                        <h5 class="mb-3">Current Semester Courses</h5>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Course Code</th>
                                                        <th>Course Name</th>
                                                        <th>Instructor</th>
                                                        <th>Credits</th>
                                                        <th>Schedule</th>
                                                        <th>Room</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>CS301</td>
                                                        <td>Data Structures &amp; Algorithms</td>
                                                        <td>Prof. Michael Chen</td>
                                                        <td>4</td>
                                                        <td>Mon, Wed 10:00-11:30</td>
                                                        <td>Room 201</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CS302</td>
                                                        <td>Database Management Systems</td>
                                                        <td>Dr. Emily Davis</td>
                                                        <td>3</td>
                                                        <td>Tue, Thu 14:00-15:30</td>
                                                        <td>Room 305</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CS303</td>
                                                        <td>Web Development</td>
                                                        <td>Prof. James Wilson</td>
                                                        <td>3</td>
                                                        <td>Mon, Wed 14:00-15:30</td>
                                                        <td>Lab 102</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CS304</td>
                                                        <td>Operating Systems</td>
                                                        <td>Dr. Robert Brown</td>
                                                        <td>4</td>
                                                        <td>Tue, Thu 10:00-11:30</td>
                                                        <td>Room 401</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MATH201</td>
                                                        <td>Discrete Mathematics</td>
                                                        <td>Prof. Linda Martinez</td>
                                                        <td>3</td>
                                                        <td>Fri 09:00-12:00</td>
                                                        <td>Room 150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ENG201</td>
                                                        <td>Technical Writing</td>
                                                        <td>Dr. Susan Taylor</td>
                                                        <td>2</td>
                                                        <td>Wed 16:00-18:00</td>
                                                        <td>Room 220</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Grades Tab -->
                                    <div class="tab-pane fade" id="grades" role="tabpanel">
                                        <h5 class="mb-3">Academic Performance</h5>
                                        <div class="row mb-4">
                                            <div class="col-md-4">
                                                <div class="alert alert-info">
                                                    <h6>Current Semester GPA</h6>
                                                    <h3 class="mb-0">3.85</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="alert alert-success">
                                                    <h6>Cumulative GPA</h6>
                                                    <h3 class="mb-0">3.78</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="alert alert-warning">
                                                    <h6>Class Rank</h6>
                                                    <h3 class="mb-0">15/250</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Recent Grades</h6>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Semester</th>
                                                        <th>Grade</th>
                                                        <th>Credits</th>
                                                        <th>Points</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>CS201 - Programming Fundamentals</td>
                                                        <td>Fall 2023</td>
                                                        <td><span class="badge bg-success">A</span></td>
                                                        <td>4</td>
                                                        <td>16.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CS202 - Computer Networks</td>
                                                        <td>Fall 2023</td>
                                                        <td><span class="badge bg-success">A-</span></td>
                                                        <td>3</td>
                                                        <td>11.1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MATH101 - Calculus I</td>
                                                        <td>Fall 2023</td>
                                                        <td><span class="badge bg-primary">B+</span></td>
                                                        <td>3</td>
                                                        <td>9.9</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CS203 - Software Engineering</td>
                                                        <td>Spring 2024</td>
                                                        <td><span class="badge bg-success">A</span></td>
                                                        <td>4</td>
                                                        <td>16.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PHY101 - Physics I</td>
                                                        <td>Spring 2024</td>
                                                        <td><span class="badge bg-primary">B</span></td>
                                                        <td>3</td>
                                                        <td>9.0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Attendance Tab -->
                                    <div class="tab-pane fade" id="attendance" role="tabpanel">
                                        <h5 class="mb-3">Attendance Record</h5>
                                        <div class="row mb-4">
                                            <div class="col-md-3">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Total Classes</h5>
                                                        <h3 class="text-primary">240</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Present</h5>
                                                        <h3 class="text-success">221</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Absent</h5>
                                                        <h3 class="text-danger">19</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Percentage</h5>
                                                        <h3 class="text-info">92%</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-3">Monthly Attendance</h6>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Month</th>
                                                        <th>Total Days</th>
                                                        <th>Present</th>
                                                        <th>Absent</th>
                                                        <th>Percentage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>September 2024</td>
                                                        <td>22</td>
                                                        <td>20</td>
                                                        <td>2</td>
                                                        <td><span class="badge bg-success">91%</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>October 2024</td>
                                                        <td>23</td>
                                                        <td>22</td>
                                                        <td>1</td>
                                                        <td><span class="badge bg-success">96%</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>November 2024</td>
                                                        <td>21</td>
                                                        <td>19</td>
                                                        <td>2</td>
                                                        <td><span class="badge bg-success">90%</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>December 2024</td>
                                                        <td>15</td>
                                                        <td>14</td>
                                                        <td>1</td>
                                                        <td><span class="badge bg-success">93%</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Activities Tab -->
                                    <div class="tab-pane fade" id="activities" role="tabpanel">
                                        <h5 class="mb-3">Extra-Curricular Activities</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Clubs &amp; Organizations</h6>
                                                <ul class="list-group mb-3">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Computer Science Club
                                                        <span class="badge bg-primary rounded-pill">President</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Robotics Team
                                                        <span class="badge bg-secondary rounded-pill">Member</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Debate Society
                                                        <span class="badge bg-secondary rounded-pill">Member</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Achievements</h6>
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <i class="bi bi-trophy text-warning me-2"></i>Dean's List - Fall
                                                        2023
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="bi bi-award text-primary me-2"></i>Hackathon Winner -
                                                        March 2024
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="bi bi-star text-success me-2"></i>Academic Excellence
                                                        Award
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <h6>Recent Activities</h6>
                                        <div class="timeline">
                                            <div class="alert alert-light">
                                                <strong>December 2024:</strong> Participated in International Coding
                                                Competition
                                            </div>
                                            <div class="alert alert-light">
                                                <strong>November 2024:</strong> Organized Tech Talk on AI and Machine
                                                Learning
                                            </div>
                                            <div class="alert alert-light">
                                                <strong>October 2024:</strong> Volunteered at Campus Open Day
                                            </div>
                                            <div class="alert alert-light">
                                                <strong>September 2024:</strong> Joined University Basketball Team
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
                        <p class="mb-0">&copy; 2026 Kiaalap. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="mb-0">Built with <i class="bi bi-heart-fill text-danger"></i> for education</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Load JavaScript -->




</body>

</html>