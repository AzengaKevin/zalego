<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Zalego Education</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>
</head>
<body class="app">
<header class="app-header">
    <a href="{{ route('dashboard') }}" class="app-header__logo">Zalego Admin</a>
    <a href="#" class="app-sidebar__toggle" data-toggle="sidebar" aria-label="Toggle Sidebar">
        <i class="fa fa-bars px-4"></i>
    </a>
    <ul class="app-nav">
        <li class="app-search">
            <input type="search" class="app-search__input" placeholder="Search..."/>
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <li class="dropdown">
            <a href="#" class="app-nav__item" data-toggle="dropdown" aria-label="Open Menu">
                <i class="fa fa-user fa-lg"></i> <span class="app-nav_item_name">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a href="" class="dropdown-item"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="" class="dropdown-item"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="" class="dropdown-item"><i class="fa fa-sign-out-alt"></i> Settings</a></li>
            </ul>
        </li>
    </ul>
</header>

<aside class="app-sidebar">
    <ul class="app-menu">
        <li class="app-menu__li show">
            <a href="{{ route('students.index') }}" class="app-menu__item"><i class="fa fa-user-graduate"></i> <span class="pl-2">Students</span></a>
        </li>
        <li class="app-menu__li">
            <a href="{{ route('courses.index') }}" class="app-menu__item"><i class="fa fa-book"></i> <span class="pl-2">Courses</span></a>
        </li>
        <li class="app-menu__li">
            <a href="{{ route('student.register.course') }}" class="app-menu__item"><i class="fa fa-graduation-cap"></i> <span class="pl-2">Register</span></a>
        </li>
    </ul>
</aside>

@yield('content');

</body>
</html>
