@extends('layouts.app')

@section('title')
    PowerJump - ATV
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Спорт > ATV</h2>
            </div>
        </div>

        <div class="bs-component">
            <div class="jumbotron">
                <p class="text-center"><iframe width="100%" height="315" src="https://www.youtube.com/embed/pbUp--tRabI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
                <p>Kлуб Power Jump предоставя ATV и джипове под наем. Организира вълнуващи разходки Offroad с четириколки - ATV в група с водач, в които могат да се осъществят дневно максимум до 8 тура.
                    Прекосяване на пресечени терени с ATV - Този тур е с каране 100% в горски масиви. Трасето е специално селектирано за каране по възвишения, наклони, трудно проходими места, макадам. Старт от м. Перчемлията. Навлизане в гората, прекосяване на няколко водни участъка, прекосяване на поляна, обградена с горски масиви от двете страни. Навлизане в гъста труднопроходима борова гора, възможност за среща с горски обитатели. Спиране на чешма за кратка почивка. Преход през горски масив, изкачване на било по макадамов път. Спиране на билото, панорамни снимки с невероятна гледка към морето и н. Калиакра. Стръмни спускания и изкачвания, кръгчета на черна писта. Връщане по макадам и стръмен наклон.
                </p>
                <h2>Атракцията включва:</h2>
                <p>
                    * Инструкции и кратък курс на обучение от опитен инструктор;<br/>
                    * Подписване на документи;<br/>
                    * Управляван от наемателите;<br/>
                    * Kратки почивки за снимки;<br/>
                    * Времетраенето на атракциона до 70 минути.<br/>
                </p>
                <h2>Всички превозни средства карат в редица!</h2>
                <p>
                    * Групите се водят през целия преход от инструктор – водач на групата с превозно средство,  говорещ  чужд език<br/>
                    * Всички превозни средства са със застраховки.<br/>
                    * Предвижда се и наем за лица под 16 години или такива, които не притежават шофьорска книжка, като возещи се.<br/>
                    * Трансфер с групов (микробус) за 5 – 6 човека<br/>
                </p>
                <a href="{{ url('/contacts') }}"><h2><i>Резерваций, един ден предварително!</i></h2></a>
            </div>
        </div>

    </div>

@endsection

