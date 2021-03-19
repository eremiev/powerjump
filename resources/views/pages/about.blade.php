@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="styles/about.css">
    <link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
@endsection

@section('content')
    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{url('images/033.jpg')}}" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-left">
                            <div class="home_title">За нас</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row row-eq-height">

                <!-- Intro Content -->
                <div class="col-lg-7">
                    <div class="intro_content">
                        <div class="section_title"><h1>Клуб "Пауър Джъмп”</h1></div>
                        <div class="intro_text">
                            <p>Клуб "Пауър Джъмп” е основан през 2009г. в гр. Варна и е регистриран в Централния регистър като Сдружение в обществена полза, което обединява и активизира спортно - екстремно ориентирани хора, както и хора, желаещи да се развиват в сферата на атрактивните изкуства, атракционните и екстремните спортове. Клубът развива активни спортни дейности като създава позитивна среда за забавление, осмисляне на свободното време и подобряване на здравословния начин на живот. Като участник и организатор на младежки и културни проекти и събития, спомагаме за популяризирането на атрактивни изкуства и екстремни спортове, за социалната интеграция на хората в неравностойно положение, за стимулиране на свободната инициатива, за ефективно решаване на проблемите на младежта и създаване на благоприятна среда за устойчиво развитие и комуникация. До момента Сдружението е участвало в редица младежки и музикални фестивали: (Fun City, Spirit of Burgas и др.), проекти "Мисия Варна" и "Заедно в духа на българските народни традиции" 2012г. към Дирекция "Култура и духовно развитие", Община Варна, в Деня на младежта - Варна 2010-2012г., "Споделена отговорност за активно гражданство" с партньор М.Д.С., Община Варна 2010-2011г., официален спонсор е на филмовия фестивал "Любовта е лудост" през 2011г., има редица други анимации, демонстрации, работилници и шоу-спектакли. Текущ проект на Сдружението е младежка инициатива "Кемперът-младежки мобилен център" 2014-2015г., чиято основна мисия е да популяризира младежките дейности  в града и региона и най-вече кандидатурата на Варна за Европейска младежка столица 2017г. и свързаните с това възможности и събития.</p>
                        </div>
                    </div>
                </div>

                <!-- Intro Image -->
                <div class="col-lg-5">
                    <div class="intro_image">
                        <div class="background_image" style="background-image:url({{url('images/about_intro.jpg')}})"></div>
                        <img src="{{url('images/about_intro.jpg')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- FAQ -->

    <div class="faq">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title"><h1>Дейности</h1></div>
                </div>
            </div>
            <div class="row faq_row">
                <div class="col-lg-6">

                    <!-- Faq item -->
                    <div class="faq_item d-flex flex-row align-items-start justify-content-start">
                        <div class="faq_icon d-flex flex-column align-items-center justify-content-center"><div><img src="images/icon_1.svg" alt=""></div></div>
                        <div class="faq_item_content">
                            <div class="faq_title">Организиране на курсове</div>
                            <div class="faq_text">
                                <p>* курсове по: стрелба с лък, boking & free run (скачане с кокили и свободно бягане с акробатика), унисайкъл, кайтсърф, лонгборд, водолазно дело;<br />
                                    * тренинги:  за сплотяване на колектив, като част от събития, по проект;<br />
                                    * демонстрации и работилници : кокили (скачащи и статични), стрелба с лък, кайтсърф, бмх, сноуборд, АТВ, стънт, водолазно дело, лонгборд, и др.;<br />
                                    * екстремни аниматори;<br />
                                    * консултации</p>
                            </div>
                        </div>
                    </div>

                    <!-- Faq item -->
                    <div class="faq_item d-flex flex-row align-items-start justify-content-start">
                        <div class="faq_icon d-flex flex-column align-items-center justify-content-center"><div><img src="images/icon_3.svg" alt=""></div></div>
                        <div class="faq_item_content">
                            <div class="faq_title">Огнени дейности</div>
                            <div class="faq_text">
                                <p>Въртене на пой, огнени демонстрации</p>
                            </div>
                        </div>
                    </div>

                    <!-- Faq item -->
                    <div class="faq_item d-flex flex-row align-items-start justify-content-start">
                        <div class="faq_icon d-flex flex-column align-items-center justify-content-center"><div><img src="images/icon_5.svg" alt=""></div></div>
                        <div class="faq_item_content">
                            <div class="faq_title">Каскадьорски дейности</div>
                            <div class="faq_text">
                                <p>Авто и мото каскади, АТВ, стънт</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <!-- Faq item -->
                    <div class="faq_item d-flex flex-row align-items-start justify-content-start">
                        <div class="faq_icon d-flex flex-column align-items-center justify-content-center"><div><img src="images/icon_2.svg" alt=""></div></div>
                        <div class="faq_item_content">
                            <div class="faq_title">Работа с доброволци, възможности за стажове и практики</div>
                            <div class="faq_text">
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <!-- Faq item -->
                    <div class="faq_item d-flex flex-row align-items-start justify-content-start">
                        <div class="faq_icon d-flex flex-column align-items-center justify-content-center"><div><img src="images/icon_4.svg" alt=""></div></div>
                        <div class="faq_item_content">
                            <div class="faq_title">Тиймбилдинг програми</div>
                            <div class="faq_text">
                                <p>изграждане и сплотяване на екипи, дейности за неформално образование</p>
                            </div>
                        </div>
                    </div>

                    <!-- Faq item -->
                    <div class="faq_item d-flex flex-row align-items-start justify-content-start">
                        <div class="faq_icon d-flex flex-column align-items-center justify-content-center"><div><img src="images/icon_6.svg" alt=""></div></div>
                        <div class="faq_item_content">
                            <div class="faq_title">Обществено полезни и корпоративни проекти</div>
                            <div class="faq_text">
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <!-- Faq item -->
                    <div class="faq_item d-flex flex-row align-items-start justify-content-start">
                        <div class="faq_icon d-flex flex-column align-items-center justify-content-center"><div><img src="images/icon_7.svg" alt=""></div></div>
                        <div class="faq_item_content">
                            <div class="faq_title">Организиране на събития</div>
                            <div class="faq_text">
                                <p>Организиране на събития, фестивали, шоу програми, състезания, детски празненства, рожденни дни, др.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Faq item -->
                    <div class="faq_item d-flex flex-row align-items-start justify-content-start">
                        <div class="faq_icon d-flex flex-column align-items-center justify-content-center"><div><img src="images/icon_8.svg" alt=""></div></div>
                        <div class="faq_item_content">
                            <div class="faq_title">Пълно озвучаване за събития</div>
                            <div class="faq_text">
                                <p>професионален озвучител, водещ, DJ, музикални групи по избор</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

