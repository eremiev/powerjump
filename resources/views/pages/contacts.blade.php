@extends('layouts.app')

@section('content')

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Contact Content -->
                <div class="col-lg-6 contact_col">
                    <div class="contact_content">
                        <div class="contact_info">
                            <div class="contact_title"><h1>Информация</h1></div>
                            <ul>
                                <li><h3>СДРУЖЕНИЕ „ПАУЪР ДЖЪМП”</h3></li>
                                <li><b>ЕИК:</b> 175816901</li>
                                <li><b>МОЛ:</b> Мирослав Тодоров</li>
                                <li><b>Адрес регистрация:</b> България, гр.Варна, ул. „Д-р Басанович”-25, ет.4</li>
                                <li><b>Адрес за кореспонденция:</b> бул. „8-ми Приморски полк“Варна ет.7 ап.26</li>
                                <li><b>Тел:</b> <a href="tel:+359888988828">+359 888 988 828</a></li>
                                <li><b>Е-майл:</b> <a href="mailto:ngopowerjump@gmail.com">ngopowerjump@gmail.com</a></li>

                            </ul>
                            <br />
                            <h3><b>ПРИЕМАНЕ НА ДАРЕНИЕ</b></h3>
                            <ul>
                                <li>Актът на дарението ще се извърши с:</li>
                                <li>- подписване на приемо-предавателен протокол от представители на ДАРИТЕЛЯ и ДАРЕНИЯ;</li>
                                <li>- предаване на паричната сума в касата на Сдружение „Пауър Джъмп” или по банкова сметка;</li>
                                <li>Банка: ДСК АД</li>
                                <li>IBAN: BG94STSA93000023621487</li>
                                <li>BIC: STSABGSF</li>

                            </ul>
                        </div>
                        <div style="margin-top: 10px; margin-bottom: 20px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.5109790407046!2d27.895520915483644!3d43.21974527913849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a4547d26ef9ec7%3A0xc56da69a2c295ded!2sClub%20%22Power%20Jump%22!5e0!3m2!1sen!2sus!4v1616875985294!5m2!1sen!2sus" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6 contact_col">
                    <h1>Контакти</h1>
                    <div class="well bs-component">
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 control-label">Име</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Име">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="col-lg-2 control-label">Телефон</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-lg-2 control-label">Е-майл</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Е-майл">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="description" class="col-lg-2 control-label">Запитване</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="description"></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2 text-right">
                                        <button type="submit" class="btn btn-primary">Изпрати</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

