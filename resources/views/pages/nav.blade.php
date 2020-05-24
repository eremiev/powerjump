<!-- Header -->

<header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-center">

        <!-- Logo -->
        <div class="logo top_align">
            <img src="{{URL::asset('/images/powerjump.png')}}" alt="PowerJump">
            <a href="{{ url('/') }}">
            </a>
        </div>
        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ url('/') }}">Начало</a></li>
                <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ url('/about') }}">За нас</a></li>
                <li class="{{ (request()->is('projects')) ? 'active' : '' }}"><a href="{{ url('/projects') }}">Проекти</a></li>
                <li class="{{ (request()->is('events')) ? 'active' : '' }}"><a href="{{ url('/events') }}">Събития</a></li>
                <li class="{{ (request()->is('products')) ? 'active' : '' }}"><a href="{{ url('/products') }}">Продукти</a></li>
                <li class="{{ (request()->is('partners')) ? 'active' : '' }}"><a href="{{ url('/partners') }}">Партньори</a></li>
            </ul>
        </nav>
        <div class="header_right top_align d-flex flex-row align-items-center justify-content-start">
            <div class="contact_button trans_400"><a href="{{ url('/contacts') }}">Контакти</a></div>
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
    </div>
</header>

<!-- Menu -->

<div class="menu">
    <div class="menu_content d-flex flex-column align-items-center justify-content-start">
        <nav class="menu_nav">
            <ul class="d-flex flex-column align-items-center justify-content-start">
                <li><a href="{{ url('/') }}">Начало</a></li>
                <li><a href="{{ url('/about') }}">За нас</a></li>
                <li><a href="{{ url('/projects') }}">Проекти</a></li>
                <li ><a href="{{ url('/events') }}">Събития</a></li>
                <li><a href="{{ url('/products') }}">Продукти</a></li>
                <li><a href="{{ url('/partners') }}">Партньори</a></li>
                <li><a href="{{ url('/contacts') }}">Контакти</a></li>
            </ul>
        </nav>
    </div>
</div>