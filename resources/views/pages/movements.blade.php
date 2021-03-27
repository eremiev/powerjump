@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Движения</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfd629f3f0740d6a91f1e/3a91c785b7268956087699cd4b968b00/FB_IMG_1616634615645.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/movements/jumping_stilts') }}"><h3>Скачане с кокили #Boching</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfd629f3f0740d6a91f1e/ca3107dbd470c44de6aaf832c81a1cf9/FB_IMG_1616635114064.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/movements/archery') }}"><h3>Стрелба с лък</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfd629f3f0740d6a91f1e/fb258b57e428fca307500b05883957a3/01_cecil_the_tandem-1500377411887-kpkb678p9s5x-94d005c.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/movements/bike') }}"><h3>Байк</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfd629f3f0740d6a91f1e/e1252e0c7779927e5738906618fb7a32/FB_IMG_1616634792964.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/movements/atv') }}"><h3>АТВ</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfd629f3f0740d6a91f1e/a6b21e3d9c6d79ccd57a70e26cc826f2/FB_IMG_1616634958244.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/movements/safari') }}"><h3>Сафари Джип</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfd629f3f0740d6a91f1e/0b476668569a3d1bf10851f7ad8c931f/%D0%BB%D0%BE%D0%B3%D0%BE_power.jpg" alt="...">
                    <div class="caption">
                        <a href="{{ url('/movements/other') }}"><h3>Други</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

