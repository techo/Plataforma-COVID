@extends('covid.layout')

@section('content')


    <!-- mian-content -->

    <div class="main-content-covid" id="home">
     <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-6 banner-info-w3ls"  style="background: rgba(15, 20, 12, 0.6);padding-right: 15px;padding-top: 15px;padding-bottom: 15px;">
                        <h2> </h2>
                        <h1 class="mb-3" style="COLOR: #0092dd;">DIFERENTES CUARENTENAS</h1>
                        <p class="mb-4"> Desde TECHO seguimos trabajando para apoyar a las familias más vulnerables ante el COVID-19</p>
                        <a href="#problema" class="btn">Números</a>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>
       <!--//counter-->
    <section class="stats py-lg-5 problema">
        <div id="problema" class="container py-5">
            <h3 class="tittle text-center mb-lg-5 mb-4 px-lg-5">LA SITUACION</h3>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                      <span class="fa fa-tint"></span>
                        <h3 class="timer count-title count-number">148</h3>
                        <p class="count-text">Problemas de Agua</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                     <span class="fa fa-cutlery"></span>
                        <h3 class="timer count-title count-number">317</h3>
                        <p class="count-text">Falta de Alimento</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                      <span class="fa fa-signing"></span>
                        <h3 class="timer count-title count-number">168</h3>
                        <p class="count-text">Falta en Productos de limpieza</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                      <span class="fa fa-thermometer-3"></span>
                        <h3 class="timer count-title count-number">15</h3>
                        <p class="count-text">Covid-19 <br> Positivos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stats py-lg-5" id="solucion">
        <div id="solucion" class="container py-5">
            <h3 class="tittle text-center mb-lg-5 mb-4 px-lg-5">EL APORTE DE TECHO</h3>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                      <span class="fa fa-tint"></span>
                        <h3 class="timer count-title count-number">750</h3>
                        <p class="count-text">Litros Repartidos</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                     <span class="fa fa-cutlery"></span>
                        <h3 class="timer count-title count-number">1200</h3>
                        <p class="count-text">Kits Entregados</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                      <span class="fa fa-signing"></span>
                        <h3 class="timer count-title count-number">130</h3>
                        <p class="count-text">Kits Entregados</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                      <span class="fa fa-thermometer-3"></span>
                        <h3 class="timer count-title count-number">1530</h3>
                        <p class="count-text">Barbijos Entregados</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->
        <!-- //header -->
        <!-- banner -->
        <!-- //banner -->
    </div>
    
    @include('covid.agenda')
    
   


    <!--//portfolio-->
    <!-- /hand-crafted -->
    <section class="hand-crafted py-5">
        <div class="container py-lg-5">
            <div class="row accord-info">
                <div class="col-lg-6 pl-md-5">

                    <h2 class="mb-md-5 tittle">¿Y si no tienes 2 metros para distanciarse?</h2>

                    


                        <a href="" target="_blank" class="btn btn-primary">Realizar Donacion</a>
                </div>
                <div class="col-lg-6 banner-image">
                    <div class="img-effect">
                        <img src="{{ asset('img/niñxsAdentro.jpg') }}" alt="" class="img-fluid image1">
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //hand-crafted -->
   <section class="hand-crafted-2 py-5">
        <div class="container py-lg-5">
            <div class="row accord-info">
                
                <div class="col-lg-6 banner-image">
                    <div class="img-effect">
                        <img src="{{ asset('img/JuntandoAgua.jpg') }}" alt="" class="img-fluid image1">
                    </div>

                </div>
                <div class="col-lg-6 pl-md-5">

                    <h2 class="mb-md-5 tittle">¿Y si no tienes Agua?</h2>

                    


                        <a href="" target="_blank" class="btn btn-primary">Realizar Donacion</a>
                </div>

            </div>
        </div>
    </section>



    <!-- testimonials -->
    <div class="testimonials py-md-5 py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle  text-center mb-lg-5 mb-3">Los Asentamientos dicen</h3>

            <div class="testimonials_grid_w3ls mt-lg-0 mt-4">
                <div class="p-md-5 p-4">
                    <p class="sub-test"><span class="fa fa-quote-left" aria-hidden="true"></span> Hoy en dia 
                        no podemos evitar en trabajar en conjunto.
                    </p>
                    <div class="row mt-4">
                        <div class="col-3 testi-img-res">
                            <img src="{{ asset('img/cxj/te2.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="col-9 testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                            <h5 class="mb-2">Valeria</h5>
                            <p>Comedor La Esperanza, Argentina</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    
    <!-- //testimonials -->
    <!--footer -->
 <!--    <footer>
        <div class="footer_1its py-5">
            <div class="container py-md-4">

                <div class="row footer-top mb-md-5 mb-4">
                    <div class="col-lg-4 col-md-6 footer-grid_section_1its" data-aos="fade-right">
                        <div class="footer-title-w3pvt">
                            <h3>Address</h3>
                        </div>
                        <div class="footer-text">
                            <p>Address : 1234 lock, Charlotte, North Carolina, United States</p>
                            <p>Phone : +12 534894364</p>
                            <p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
                            <p>Fax : +12 534894364</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                        <div class="footer-title-w3pvt">
                            <h3>Quick Links</h3>
                        </div>
                         <div class="row no-gutters">
                            <ul class="links">
                                <li><a href="index.html">Home </a></li>
                                <li><a href="about.html">About </a></li>
                                <li><a href="features.html">Services</a></li>

                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact.html">Contact </a></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its" data-aos="fade-left">
                        <div class="footer-title-w3pvt">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-text">
                            <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                            <form action="#" method="post">
                                <input type="email" name="Email" placeholder="Enter your email..." required="">
                                <button class="btn1"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>
                                <div class="clearfix"> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- //footer -->

    @include('cxj.copyright')
@endsection