<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/PJ_logo.png') }}" style="width: 188px; margin-top: -24px;" alt="Power Jump"/>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ url('/') }}">Начало</a></li>
                <li class="{{ (request()->is('events')) || (request()->is('events/*')) ? 'active' : '' }}">
                    <a href="{{ url('/events') }}">Събития</a>
                </li>

                <li class="dropdown {{ (request()->is('activities')) || (request()->is('activities/*')) ? 'active' : '' }}">
                    <a href="{{ url('/activities') }}" role="button" aria-expanded="false">Дейности<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('activities/physical_activity') }}">Физическа активност</a></li>
                        <li><a href="{{ url('activities/culture_entertainment') }}">Култура и забавления</a></li>
                        <li><a href="{{ url('activities/social_projects') }}">Социални проекти</a></li>
                        <li><a href="{{ url('activities/business_partnerships') }}">Бизнес парньорства</a></li>
                        <li><a href="{{ url('activities/volunteering') }}">Доброволчество</a></li>
                    </ul>
                </li>

                <li class="dropdown {{ (request()->is('sports')) || (request()->is('sports/*')) ? 'active' : '' }}">
                    <a href="{{ url('/sports') }}" role="button" aria-expanded="false">Спорт<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/sports/jumping_stilts') }}">Скачане с кокили #Boching</a></li>
                        <li><a href="{{ url('/sports/archery') }}">Стрелба с лък</a></li>
                        <li><a href="{{ url('/sports/bike') }}">Байк</a></li>
                        <li><a href="{{ url('/sports/atv') }}">АТВ</a></li>
                        <li><a href="{{ url('/sports/safari') }}">Сафари Джип</a></li>
                        <li><a href="{{ url('/sports/other') }}">Други</a></li>
                    </ul>
                </li>
                {{--<li class="{{ (request()->is('products/*')) ? 'active' : '' }}"><a href="{{ url('/products') }}">Пазарувай Продукти</a></li>--}}
                <li><a href="{{ url('/partners') }}">Партньори</a></li>

                <li class="dropdown">
                    <a href="./" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">За нас<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/about_us') }}">Кои сме ние?</a></li>
                        <li><a href="{{ url('/team') }}">Експертиза Екип</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/') }}">Отчети</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/contacts') }}">Контакти</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>