<!-- Header -->
<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="./">Power Jump</a> </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ">
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">Начало</a></li>
                        <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ url('/about') }}">За нас</a></li>
                        <li class="{{ (request()->is('projects')) ? 'active' : '' }}"><a href="{{ url('/projects') }}">Проекти</a></li>
                        <li class="{{ (request()->is('events')) ? 'active' : '' }}"><a href="{{ url('/events') }}">Събития</a></li>
                        <li class="{{ (request()->is('products')) ? 'active' : '' }}"><a href="{{ url('/products') }}">Продукти</a></li>
                        <li class="{{ (request()->is('partners')) ? 'active' : '' }}"><a href="{{ url('/partners') }}">Партньори</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>