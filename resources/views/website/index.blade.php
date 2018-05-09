@extends('layout.layout')	

	@section('content')

		
<section class="slider_section">
    <ul id="main-slider" class="owl-carousel main_slider">
        <li class="main_slide" style="background-image: url(img/slide-1.jpg);">
            <div class="container">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="slider_content">
                            <h3 class="text-white">Its Not Just a Haircut, Its an Experience.</h3>
                            <h1 class="text-white">Where Mens Want  <br>To Look There Very Best.</h1>
                            <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only five centuries.</p>
                            <div class="btn_group">
                                <a href="#" class="default_btn">Packages</a>
                                <a href="#" class="default_btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="main_slide" style="background-image: url(img/slide-2.jpg);">
            <div class="container">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="slider_content">
                            <h3 class="text-white">Classic Hair Style & Shaves.</h3>
                            <h1 class="text-white">Our Hair Styles<br>Enhances Your Smile.</h1>
                            <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only five centuries.</p>
                            <div class="btn_group">
                                <a href="#" class="default_btn">Packages</a>
                                <a href="#" class="default_btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="main_slide" style="background-image: url(img/slide-3.jpg);">
            <div class="container">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="slider_content">
                            <h3 class="text-white">Its Not Just a Haircut, Its an Experience.</h3>
                            <h1 class="text-white">Where Mens Want  <br>To Look There Very Best.</h1>
                            <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> It has survived not only five centuries.</p>
                            <div class="btn_group">
                                <a href="#" class="default_btn">Packages</a>
                                <a href="#" class="default_btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section><!-- /.slider_section -->

<section id="about" class="about_section bd-bottom padding">
    <div class="container">
        <div class="col-sm-6">
            <div class="about_content align-center">
                <h3 class="mb-15">Introducing</h3>
                <h2 class="mb-15">The Barber Shop Science 1991</h2>
                <img class="mb-20" src="img/about-logo.png" alt="logo">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <a href="#" class="default_btn">More About Us</a>
            </div>
        </div>
        <div class="col-sm-6 hidden-xs">
            <div class="about_img">
                <img src="img/about-1.jpg" alt="idea-images" class="about_img_1">
                <img src="img/about-2.jpg" alt="idea-images" class="about_img_2">
                <img src="img/about-3.jpg" alt="idea-images" class="about_img_3">
            </div>
        </div>
    </div>
</section> <!--/.about_section -->
<section class="service_section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section_heading align-center mb-40">
            <h2>Nos prestations</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>It has survived not only five centuries.</p>
        </div>
        <div class="col-sm-3 col-xs-6 xs-padding">
            <div class="service_content align-center">
                <img src="img/service-1.jpg" alt="Services">
                <h3>Coupe Homme</h3>
                <P>Lorem Ipsum is simply dummy<br> and typesetting industry.</P>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-padding">
            <div class="service_content align-center">
                <img src="img/service-2.jpg" alt="Services">
                <h3>Couleur</h3>
                <P>Lorem Ipsum is simply dummy<br> and typesetting industry.</P>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-padding">
            <div class="service_content align-center">
                <img src="img/service-3.jpg" alt="Services">
                <h3>Brushing</h3>
                <P>Lorem Ipsum is simply dummy<br> and typesetting industry.</P>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-padding">
            <div class="service_content align-center">
                <img src="img/service-4.jpg" alt="Services">
                <h3>Défrisage</h3>
                <P>Lorem Ipsum is simply dummy<br> and typesetting industry.</P>
            </div>
        </div>
    </div>
</section><!--/.service_section -->

<section id="team" class="team_section bd-bottom padding">
    <div class="container">
        <div class="section_heading align-center mb-40">
            <h2>Notre Coiffeuse</h2>
            <p>Cassandra, Pasionné depuis son plus jeune age,</br> Notre coiffeuse diplomée  </p>
        </div><!-- /.section_heading -->
        <ul class="team_members">
            <li class="col-md-3 col-xs-6">
                <div class="team_member">
                    <img src="img/team-1.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>JONATHAN SMITH</h3>
                        <p>WEB DESIGNER</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-xs-6">
                <div class="team_member">
                    <img src="img/team-2.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>JACK TOSAN</h3>
                        <p>WORDPRESS DEVELOPER</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-xs-6">
                <div class="team_member">
                    <img src="img/team-3.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>MICHEL BROWN</h3>
                        <p>ONLINE MARKETER</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-xs-6">
                <div class="team_member">
                    <img src="img/team-4.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>MARTIN LANE</h3>
                        <p>JAVA SPECIALIST</p>
                    </div>
                </div>
            </li>
        </ul><!-- /.team_members -->
    </div>
</section><!-- /.team_section -->

<section id="reviews" class="testimonial_section padding">
    <div class="container">
        <ul id="testimonial_carousel" class="testimonial_items owl-carousel">
            <li class="testimonial_item">
                <p>"There are design companies, and then there are user experience design interface design<br> professional. By far one of the worlds best known brands."</p>
                <h4 class="text-white">Anita Tran, IT Solutions.</h4>
            </li>
            <li class="testimonial_item">
                <p>"There are design companies, and then there are user experience design interface design<br> professional. By far one of the worlds best known brands."</p>
                <h4 class="text-white">Leslie Williamson, Developer.</h4>
            </li>
            <li class="testimonial_item">
                <p>"There are design companies, and then there are user experience design interface design<br> professional. By far one of the worlds best known brands."</p>
                <h4 class="text-white">Fred Moody, Network Software.</h4>
            </li>
        </ul>
    </div>
</section><!-- /.testimonial_section -->

<section class="pricing_section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section_heading align-center mb-40">
            <h2>Nos Tarifs</h2>
            <p>Cliquez ici pour consulter notre fiche tarif complète</p>
        </div><!-- /.section_heading -->
        <div class="col-sm-4 xs-padding">
            <div class="price_wrap">
                <h3>Coloration</h3>
                <ul class="price_list">
                    <li>
                        <h4>Avec Amoniaque</h4>
                        <p></p>
                        <span class="price">X à Y€</span>
                    </li>
                    <li>
                        <h4>Sans Amoniaque</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <span class="price">X à Y€</span>
                    </li>
                    <li>
                        <h4>Patine</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <span class="price">X A Y €</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4 xs-padding">
            <div class="price_wrap">
                <h3>Shaving</h3>
                <ul class="price_list">
                    <li>
                        <h4>Clean Shaving</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <span class="price">$8</span>
                    </li>
                    <li>
                        <h4>Beard Triming</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <span class="price">$9</span>
                    </li>
                    <li>
                        <h4>Smooth Shave</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <span class="price">$10</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4 xs-padding">
            <div class="price_wrap">
                <h3>Face Masking</h3>
                <ul class="price_list">
                    <li>
                        <h4>White Facial</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <span class="price">$8</span>
                    </li>
                    <li>
                        <h4>Face Cleaning</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <span class="price">$9</span>
                    </li>
                    <li>
                        <h4>Bright Tuning</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <span class="price">$10</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- /.pricing_section -->

<section class="cta_section padding">
    <div class="container">
        <div class="display-table">
            <div class="table-cel">
                <div class="cta_content align-center">
                    <h2>Making You Look Good <br> Is In Our Haritage.</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>It has survived not only five centuries.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.cta_section -->

<section id="news" class="blog_section bd-bottom padding">
    <div class="container">
        <div class="section_heading align-center mb-40">
            <h2>Latest Blog Posts</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>It has survived not only five centuries.</p>
        </div><!-- /.section_heading -->
        <div class="col-sm-4 col-xs-6 xs-padding">
            <div class="blog_post">
                <img src="img/blog-1.jpg" alt="blog-image">
                <div class="blog_content">
                    <h4><a href="#">The Ultimate Renters Guide</a></h4>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit Ea ratione optio.</P>
                    <span class="post_meta"><a href="">READ MORE</a></span>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-6 xs-padding">
            <div class="blog_post">
                <img src="img/blog-2.jpg" alt="blog-image">
                <div class="blog_content">
                    <h4><a href="#">Living Big in Tiny Houses</a></h4>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit Ea ratione optio.</P>
                    <span class="post_meta"><a href="">READ MORE</a></span>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-6 xs-padding">
            <div class="blog_post">
                <img src="img/blog-3.jpg" alt="blog-image">
                <div class="blog_content">
                    <h4><a href="#">How to Hang a Gallery Wall</a></h4>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit Ea ratione optio.</P>
                    <span class="post_meta"><a href="">READ MORE</a></span>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.blog_section -->

	@endsection