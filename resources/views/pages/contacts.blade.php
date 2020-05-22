@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
@endsection

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">Contact</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Contact Content -->
                <div class="col-lg-6 contact_col">
                    <div class="contact_content">
                        <div class="contact_content_title">crossfit <span>x</span></div>
                        <div class="contact_text">
                            <p>Pellentesque commodo finibus molestie. Aenean pulvinar condimentum consectetur. Aenean pulvinar condimentum consectetur. Sed sed arcu a elit egestas imperdiet nec ac sapien. Nunc ac fringilla sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam quis maximus quam. Phasellus interdum pulvinar tellus non tincidunt.</p>
                        </div>
                        <div class="contact_info">
                            <div class="contact_title"><h1>Information</h1></div>
                            <ul>
                                <li>Main Str, no 23, New York</li>
                                <li>+546 990221 123</li>
                                <li>hosting@contact.com</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6 contact_col">
                    <div class="contact_form_container">
                        <div class="contact_title"><h1>Get in touch</h1></div>
                        <form action="#" class="contact_form" id="contact_form">
                            <input type="text" class="contact_form_input" placeholder="Name" required="required">
                            <input type="email" class="contact_form_input" placeholder="E-mail" required="required">
                            <input type="text" class="contact_form_input" placeholder="Subject">
                            <textarea class="contact_form_input contact_form_textarea" placeholder="Message" required="required"></textarea>
                            <button class="contact_form_button button"><span>Send</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Map -->

    <div class="contact_map_container">
        <div class="map">
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="map">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
@endsection

