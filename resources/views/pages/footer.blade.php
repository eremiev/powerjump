
<!-- CTA -->

<div class="cta">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="cta_content text-center">Свържи се с <a href="{{ url('/contacts') }}">нас!</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<footer class="footer">
    <div class="footer_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 footer_col">

                    <!-- Logo -->
                    <div class="logo">
                        <img src="{{URL::asset('/images/powerjump.png')}}" alt="PowerJump">
                        <a href="{{ url('/') }}">
                        </a>
                    </div>

                    <div class="footer_text">
                        <p></p>
                    </div>
                    <div class="social">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            {{--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>--}}
                            <li><a href="https://www.facebook.com/PowerJumpClubBulgaria/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            {{--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>--}}
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-1 footer_col">
                    <div class="footer_column">
                        <div class="footer_title"><h3>Страници</h3></div>
                        <div class="footer_list">
                            <ul>
                                <li><a href="{{ url('/about') }}">За нас</a></li>
                                <li><a href="{{ url('/projects') }}">Проекти</a></li>
                                <li><a href="{{ url('/events') }}">Събития</a></li>
                                <li><a href="{{ url('/products') }}">Продукти</a></li>
                                <li><a href="{{ url('/partners') }}">Партньори</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-1 footer_col">
                    <div class="footer_column">
                        <div class="footer_title"><h3>Партньори</h3></div>
                        <div class="footer_list">
                            <ul>
                                <li><a href="{{ url('/') }}">WildArt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <div class="footer_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>