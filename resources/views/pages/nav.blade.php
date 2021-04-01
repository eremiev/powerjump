<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Power Jump</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ url('/') }}">Начало</a></li>
                <li class="dropdown {{ (request()->is('experiences')) || (request()->is('experiences/*')) ? 'active' : '' }}">
                    <a href="{{ url('/experiences') }}" role="button" aria-expanded="false">Опит<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('experiences/physical_activity') }}">Физическа активност</a></li>
                        <li><a href="{{ url('experiences/culture_entertainment') }}">Култура и забавления</a></li>
                        <li><a href="{{ url('experiences/social_projects') }}">Социални проекти</a></li>
                        <li><a href="{{ url('experiences/business_partnerships') }}">Бизнес парньорства</a></li>
                    </ul>
                </li>
                <li class="dropdown {{ (request()->is('movements/*')) ? 'active' : '' }}">
                    <a href="{{ url('/movements') }}" role="button" aria-expanded="false">Движения<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/movements/jumping_stilts') }}">Скачане с кокили #Boching</a></li>
                        <li><a href="{{ url('/movements/archery') }}">Стрелба с лък</a></li>
                        <li><a href="{{ url('/movements/bike') }}">Байк</a></li>
                        <li><a href="{{ url('/movements/atv') }}">АТВ</a></li>
                        <li><a href="{{ url('/movements/safari') }}">Сафари Джип</a></li>
                        <li><a href="{{ url('/movements/other') }}">Други</a></li>
                    </ul>
                </li>
                {{--<li class="{{ (request()->is('products/*')) ? 'active' : '' }}"><a href="{{ url('/products') }}">Пазарувай Продукти</a></li>--}}
                <li class="dropdown">
                    <a href="./" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">За нас<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/about_us') }}">Кои сме ние?</a></li>
                        <li><a href="{{ url('/team') }}">Експертиза Екип</a></li>
                        <li><a href="{{ url('/contacts') }}">Контакти</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/') }}">Отчети</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>