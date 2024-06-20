<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e_Learning</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
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
</head>

<body data-spy="scroll" data-target=".sidebar-component-right">
    <div class="navbar navbar-expand-md navbar-light">
        <div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
            <div class="navbar-brand navbar-brand-md">
                <a href="{{ route('courses.index') }}" class="d-inline-block"
                    style="color: white; font-size: 20px; text-decoration: none; font-family: Arial, sans-serif; font-weight: bold;">
                    e_Learning
                </a>
            </div>
            <div class="navbar-brand navbar-brand-xs">
                <a href="{{ route('courses.index') }}" class="d-inline-block">
                    <img src="{{ asset('assets/images/logo_icon_light.png') }}" alt="" />
                </a>
            </div>
        </div>
        <div class="d-flex flex-1 d-md-none">
            <div class="navbar-brand mr-auto">
                <a href="{{ route('courses.index') }}" class="d-inline-block">
                    <img src="{{ asset('assets/i/logo_dark.png') }}" alt="" />
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-component-toggle" type="button">
                <i class="icon-unfold"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item d-flex align-items-center">
                    <a href="{{ route('courses.index') }}" class="nav-link" title="" style="padding-left: 10px; margin-right: 0,5em;">
                        <i class="fa fa-th" style="font-size: 1.5em;"></i>
                        <span class="d-lg-none"></span>
                    </a>
                    <a href="{{ route('categories.index') }}" class="nav-link" title="" style="padding-left: 10px;">
                        <i class="fa fa-table" style="font-size: 1.5em;"></i>
                        <span class="d-lg-none ml"></span>
                    </a>
                </li>
            </ul>
        </div>

        <a href="{{ route('notifications.index') }}" class="nav-link">
            <i class="fa fa-bell"></i> Notifications
        </a>
        {{-- <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link btn btn-link" style="padding: 0; text-decoration: none;">Logout</button>
        </form> --}}
    </div>

    <div class="page-content">
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
            <div class="sidebar-content">
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                            <i class="icon-menu"></i>
                        </li>
                        <li class="nav-item"><a href="{{ route('courses.index') }}" class="nav-link">Courses</a></li>
                        <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link">Categories</a></li>
                        <li class="nav-item"><a href="{{ route('lessons.index') }}" class="nav-link">Lessons</a></li>
                        <li class="nav-item"><a href="{{ route('quizzes.index') }}" class="nav-link">Quizzes</a></li>
                        <li class="nav-item"><a href="{{ route('questions.index') }}" class="nav-link">Questions</a></li>
                        <li class="nav-item"><a href="{{ route('options.index') }}" class="nav-link">Options</a></li>
                        <li class="nav-item"><a href="{{ route('grades.index') }}" class="nav-link">Grades</a></li>
                        <li class="nav-item"><a href="{{ route('discussions.index') }}" class="nav-link">Discussions</a></li>
                        <li class="nav-item"><a href="{{ route('notifications.index') }}" class="nav-link">Notifications</a></li>
                        <li class="nav-item"><a href="{{ route('payments.index') }}" class="nav-link">Payments</a></li>
                        <li class="nav-item"><a href="{{ route('enrollments.index') }}" class="nav-link">Enrollments</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>
