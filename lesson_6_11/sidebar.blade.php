<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('admin.index') }}">
                    {{--                    <div class="brand-logo"></div>--}}
                    <h2 class="brand-text mb-0 pl-5">Админ</h2>
                </a>
            </li>
            {{--            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>--}}
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{!! ((Request::is('admin/tasks') || Request::is('admin/tasks/*')) && !Request::is('admin/tasks/demo') ? 'active' : '') !!} nav-item"><a
                    href="{{ route('admin.tasks.index') }}" class="if-pb-0"><i class="feather icon-file-text"></i>
                    <span class="menu-title">Заявки</span></a>
            </li>
            <li class="{!! (Request::is('admin/clients') || Request::is('admin/clients/*') ? 'active' : '') !!} nav-item">
                <a href="{{ route('admin.clients.index') }}" class="if-pb-0"><i class="feather icon-users"></i>
                    <span class="menu-title">Клиенты</span></a>
            </li>
            <li class="{!! (Request::is('admin/reports') || Request::is('admin/reports/*') ? 'active' : '') !!} nav-item">
                <a href="{{ route('admin.reports.index') }}" class="if-pb-0"><i class="feather icon-bar-chart-2"></i>
                    <span class="menu-title">Отчеты</span></a>
            </li>
            <li class="{!! (Request::is('admin/forecast') || Request::is('admin/forecast/*') ? 'active' : '') !!} nav-item">
                <a href="{{ route('admin.forecast.index') }}" class="if-pb-0"><i class="feather icon-activity"></i>
                    <span class="menu-title">Прогноз</span></a>
            </li>
            <li class="{!! (Request::is('admin/themes') || Request::is('admin/themes/*') ? 'active' : '') !!} nav-item">
                <a href="{{ route('admin.themes.index') }}" class="if-pb-0"><i class="feather icon-list"></i>
                    <span class="menu-title">Темы заявок</span></a>
            </li>
            <li class="{!! (Request::is('admin/courts') || Request::is('admin/courts/*') ? 'active' : '') !!} nav-item">
                <a href="{{ route('admin.courts.index') }}" class="if-pb-0"><i class="feather icon-list"></i>
                    <span class="menu-title">Суды</span></a>
            </li>
            <li class="{!! (Request::is('admin/users') || Request::is('admin/users/*') ? 'active' : '') !!} nav-item"><a
                    href="{{ route('admin.users.index') }}" class="if-pb-0"><i class="feather icon-users"></i>
                    <span class="menu-title">Пользователи</span></a>
            </li>
            <li class="{!! (Request::is('admin/profile') ? 'active' : '') !!} nav-item"><a
                    href="{{ route('admin.profile') }}" class="if-pb-0"><i class="feather icon-user"></i>
                    <span class="menu-title">Ваш профиль</span></a>
            </li>

            <li class="{!! (Request::is('admin/tasks/demo') || Request::is('admin/tasks/demo/*') ? 'active' : '') !!} nav-item"><a
                    href="{{ route('admin.tasks.index.demo') }}" class="if-pb-0"><i class="feather icon-file-text"></i>
                    <span class="menu-title">Демо Заявки</span></a>
            </li>
        </ul>
    </div>
</div>
