@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Опит</h2>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfbe024c349276383c669/8372dc1b5f43aabb962bb41f1f5d1d77/DSC034221-1.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/experiences/physical_activity') }}"><h3>ФИЗИЧЕСКА АКТИВНОСТ</h3></a>
                        {{--<p>Всички проекти свързани с физическа активност инициативи и тн.</p>--}}
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfbe024c349276383c669/41d056e20dea9bce2f445734cb5f6bdf/20170603_130337.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/experiences/culture_entertainment') }}"><h3>КУЛТУРА И ЗАБАВЛЕНИЯ</h3></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfbe024c349276383c669/af9cc978f4812864756c9dfba8af56ac/20160728_155534.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/experiences/social_projects') }}"><h3>СОЦИАЛНИ ПРОЕКТИ</h3></a>
                        <p>Комуникационни и образователни дейности, свързани с насърчаване на рециклирането и кампании по разделно събиране на пластмаса. Провеждане на събития #БезОтпадъци и демонстрации, повишаващи осведомеността на гражданите за намаляване на отпадъците, чрез прилагане на така наречените „ герила“ маркетинг кампании.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfbe024c349276383c669/d054c0652412b28ca376a58ad3154eef/5231c605276e6744413439.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/experiences/business_partnerships') }}"><h3>БИЗНЕС ПАРТНЬОРСТВА</h3></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

