<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dugu</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="{{ asset('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sticky.min.js') }}"></script>
    <script src="{{ asset('assets/js/main/app.js') }}"></script>
    <script src="{{ asset('assets/js/pages/components_scrollspy.js') }}"></script>

    <!-- Tambahkan aturan CSS di sini -->
    <style>
        .main-sidebar {
            background-color: #343a40;
            /* Ganti dengan warna yang Anda inginkan */
        }

        .main-sidebar .nav-link {
            color: #ffffff;
            /* Warna teks untuk link di sidebar */
        }

        .main-sidebar .nav-link.active {
            background-color: #495057;
            /* Warna latar belakang untuk link aktif di sidebar */
        }
    </style>
</head>

<body class="sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span class="brand-text">eLearning</span>
                </a>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
                <span class="brand-text">eLearning</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        @auth
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                        @endauth
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('courses.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Courses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('lessons.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>Lessons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('quizzes.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-question"></i>
                                <p>Quizzes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('questions.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>Questions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('options.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Options</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('grades.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>Grades</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('discussions.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>Discussions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('notifications.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-bell"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('payments.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>Payments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('enrollments.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>Enrollments</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- Content here -->
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer text-center text-muted py-3">
            <p>&copy; Himarisanto {{ date('Y') }}</p>
        </footer>
        <!-- jQuery -->
        <script src="{{ asset('assets/js/main/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets/js/main/bootstrap.bundle.min.js') }}"></script>
        <!-- Limitless Theme -->
        <script src="{{ asset('assets/js/main/theme-limits.js') }}"></script>
    </div>
    <!-- ./wrapper -->
</body>

</html>