<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ferreteria Rayito - Añadir proveedor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="{{asset('template/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/nice-select/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">

</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="{{ route('producto.index') }}"><img src="{{asset('template/img/Icon.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('producto.index') }}">Productos</a></li>
                            <li class="nav-item active"><a class="nav-link" href="{{route('proveedor.index')}}">Proveedores</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black"><br>Ingresa los datos del proveedor</h2>
                </div>
                <div class="col-md-7">
                    {{$slot}}
                </div>
                <div class="col-md-5 ml-auto">
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Nombre</span>
                        <p class="mb-0">Dato necesario y ademas debe contener minimo 5 caracteres y maximo de 50.</p>
                    </div>
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Correo</span>
                        <p class="mb-0">Dato necesario, donde se debe proporcionar un correo con un formato valido.</p>
                    </div>
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Telefono</span>
                        <p class="mb-0">Dato necesario y ademas debe ser numerico, entre una cantidad de 8 a 10 digitos.</p>
                    </div>
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Tipo</span>
                        <p class="mb-0">Dato necesario y debe seleccionar aquel que describa mejor el tipo de proveedor que se esta proporcionando.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--================ Start footer Area  =================-->
    <footer class="footer">
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Nuestra mision</h4>
                            <p>
                                Brindar materiales y herramientas enfocadas a la industria ferretera dentro de la zona metropolitana de
                                Guadalajara contando con buenos estandares de calidad y gran servicio.
                            </p>
                            <p>
                                Gracias a la ISO 90003
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contactanos</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Negocio
                                </p>
                                <p>Guadalajara, Jalisco, Mexico</p>

                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Numero Telefonico
                                </p>
                                <p>
                                    +123 456 7890 <br>
                                    +123 456 7890
                                </p>

                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    ferreteria@yahoo.com <br>
                                    www.ferreteria.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <script src="{{asset('template/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('template/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/vendors/skrollr.min.js')}}"></script>
    <script src="{{asset('template/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('template/vendors/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('template/vendors/mail-script.js')}}"></script>
    <script src="{{asset('template/js/main.js')}}"></script>

</body>

</html>