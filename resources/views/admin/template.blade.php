<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Web Profile')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.8/css/dataTables.dataTables.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar */
        .navbar {
            height: 64px;
            background-color: #ffc107;
            z-index: 1030;
        }

        .admin-logo {
            height: 42px;
            width: auto;
        }

        /* Sidebar */
        .admin-sidebar {
            position: fixed;
            top: 64px;
            left: 0;
            width: 165px;
            height: calc(100vh - 64px);
            background-color: #343a40;
            color: #fff;
            z-index: 1020;
        }

        .admin-sidebar h5 {
            margin: 0;
            padding: 15px 10px;
            text-align: center;
            border-bottom: 1px solid #495057;
        }

        .admin-sidebar a {
            display: block;
            color: #fff;
            padding: 12px 10px;
            text-decoration: none;
        }

        .admin-sidebar a:hover,
        .admin-sidebar a.active {
            background-color: #495057;
        }

        /* Main Content */
        .admin-content {
            margin-left: 165px;
            padding: 79px 25px 25px;
            min-height: calc(100vh - 56px);
        }

        /* Footer */
        .admin-footer {
            margin-left: 165px;
            background-color: #fff;
            padding: 15px;
            text-align: center;
            border-top: 1px solid #dee2e6;
        }

        .card {
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .admin-sidebar {
                width: 100%;
                height: auto;
                position: relative;
                top: 64px;
            }

            .admin-content {
                margin-left: 0;
                padding: 85px 15px 20px;
            }

            .admin-footer {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm px-3">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <img
                src="{{ asset('images/Logo.jpg') }}"
                alt="Logo UNPAM"
                class="admin-logo"
            >
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark"
                      href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggel" href="#" id="userDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown" >
                        <li calss="dropdown-item-text text-muted">
                            <small>{{ Auth::user()->email }}</small>
                        </li>
                        <li>
                            <form method="POST"action="{{ route('admin.logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">logout</button>
                            </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="admin-sidebar shadow">
        <h5>Admin Menu</h5>

        <a href="{{ route('home') }}">
            Dashboard
        </a>

        <a
            href="{{ route('projects.index') }}"
            class="{{ request()->routeIs('projects.*') ? 'active' : '' }}"
        >
            Data Project
        </a>
    </div>

    <!-- Main Content -->
    <main class="admin-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="admin-footer">
        <p class="mb-0">
            &copy; {{ date('Y') }} MyProfile. All rights reserved.
        </p>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.8/js/dataTables.min.js"></script>

    @yield('scripts')

</body>
</html>