<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
    <title>{{$datos->nombre}}</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="css/styles.css" rel="stylesheet" />

        <!-- Fonts -->
       
       <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
  {{--       @if ($datos)
      <a class="navbar-brand" href="/">{{$datos->nombre}}</a>  
        @else
        <a class="navbar-brand" href="/">Start Bootstrap</a>
        @endif --}}
        <!-- Custom styles for this template -->
        {{-- <link href="css/modern-business.css" rel="stylesheet"> --}}
    </head>
    <body id="page-top" >
         <!-- Navigation -->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">{{$datos->nombre}}</a>
          <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menú
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/#portfolio">Productos</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/#about">Acerca</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/#contact">Contacto</a></li>
              </ul>
          </div>
      </div>
  </nav>
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Terminos y condiciones</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          
        <div class="text-center mt-4"><p class="lead">INFORMACIÓN RELEVANTE

            Es requisito necesario para la adquisición de los productos que se ofrecen en este sitio, que lea y acepte los siguientes Términos y Condiciones que a continuación se redactan. El uso de nuestros servicios así como la compra de nuestros productos implicará que usted ha leído y aceptado los Términos y Condiciones de Uso en el presente documento. Todas los productos  que son ofrecidos por nuestro sitio web pudieran ser creadas, cobradas, enviadas o presentadas por una página web tercera y en tal caso estarían sujetas a sus propios Términos y Condiciones. En algunos casos, para adquirir un producto, será necesario el registro por parte del usuario, con ingreso de datos personales fidedignos y definición de una contraseña.
            
            El usuario puede elegir y cambiar la clave para su acceso de administración de la cuenta en cualquier momento, en caso de que se haya registrado y que sea necesario para la compra de alguno de nuestros productos. <?php Request::root(); ?> no asume la responsabilidad en caso de que entregue dicha clave a terceros.
            
            Todas las compras y transacciones que se lleven a cabo por medio de este sitio web, están sujetas a un proceso de confirmación y verificación, el cual podría incluir la verificación del stock y disponibilidad de producto, validación de la forma de pago, validación de la factura (en caso de existir) y el cumplimiento de las condiciones requeridas por el medio de pago seleccionado. En algunos casos puede que se requiera una verificación por medio de correo electrónico.
            
            Los precios de los productos ofrecidos en esta Tienda Online es válido solamente en las compras realizadas en este sitio web.
            <br>
            LICENCIA
            <br>
           {{$datos->nombre}}  a través de su sitio web concede una licencia para que los usuarios utilicen  los productos que son vendidos en este sitio web de acuerdo a los Términos y Condiciones que se describen en este documento.
            <br>
            USO NO AUTORIZADO
            <br>
            En caso de que aplique (para venta de software, templetes, u otro producto de diseño y programación) usted no puede colocar uno de nuestros productos, modificado o sin modificar, en un CD, sitio web o ningún otro medio y ofrecerlos para la redistribución o la reventa de ningún tipo.
            <br>
            PROPIEDAD
            <br>
            Usted no puede declarar propiedad intelectual o exclusiva a ninguno de nuestros productos, modificado o sin modificar. Todos los productos son propiedad  de los proveedores del contenido. En caso de que no se especifique lo contrario, nuestros productos se proporcionan  sin ningún tipo de garantía, expresa o implícita. En ningún esta compañía será  responsables de ningún daño incluyendo, pero no limitado a, daños directos, indirectos, especiales, fortuitos o consecuentes u otras pérdidas resultantes del uso o de la imposibilidad de utilizar nuestros productos.
            <br>
            POLÍTICA DE REEMBOLSO Y GARANTÍA
            <br>
            En el caso de productos que sean  mercancías irrevocables no-tangibles, no realizamos reembolsos después de que se envíe el producto, usted tiene la responsabilidad de entender antes de comprarlo.  Le pedimos que lea cuidadosamente antes de comprarlo. Hacemos solamente excepciones con esta regla cuando la descripción no se ajusta al producto. Hay algunos productos que pudieran tener garantía y posibilidad de reembolso pero este será especificado al comprar el producto. En tales casos la garantía solo cubrirá fallas de fábrica y sólo se hará efectiva cuando el producto se haya usado correctamente. La garantía no cubre averías o daños ocasionados por uso indebido. Los términos de la garantía están asociados a fallas de fabricación y funcionamiento en condiciones normales de los productos y sólo se harán efectivos estos términos si el equipo ha sido usado correctamente. Esto incluye:
            <br>
            – De acuerdo a las especificaciones técnicas indicadas para cada producto.
            <br>
            – En condiciones ambientales acorde con las especificaciones indicadas por el fabricante.
            <br>
            – En uso específico para la función con que fue diseñado de fábrica.
            <br>
            – En condiciones de operación eléctricas acorde con las especificaciones y tolerancias indicadas.
            
            <br>
            COMPROBACIÓN ANTIFRAUDE
            <br>
            La compra del cliente puede ser aplazada para la comprobación antifraude. También puede ser suspendida por más tiempo para una investigación más rigurosa, para evitar transacciones fraudulentas.
            <br>
            PRIVACIDAD
            <br>
            Este <?php echo Request::root(); ?> garantiza que la información personal que usted envía cuenta con la seguridad necesaria. Los datos ingresados por usuario o en el caso de requerir una validación de los pedidos no serán entregados a terceros, salvo que deba ser revelada en cumplimiento a una orden judicial o requerimientos legales.
            <br>
            La suscripción a boletines de correos electrónicos publicitarios es voluntaria y podría ser seleccionada al momento de crear su cuenta.
            <br>
            {{$datos->nombre}} reserva los derechos de cambiar o de modificar estos términos sin previo aviso.</p></div>
           
        </div>
        <!-- About Section Button-->
        {{-- <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
                <i class="fas fa-download mr-2"></i>
                Free Download!
            </a>
        </div> --}}
    </div>
  </header>
  

<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4"></h4>
                <p class="lead mb-0">
                  Somos de:
                  <br />
                  San Juan Bautista Tuxtepec
                    
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-6 mb-6 mb-lg-0">
                <h4 class="text-uppercase mb-4">Siguenos</h4>
            <a class="btn btn-outline-light btn-social mx-4" href="{{$datos->facebook}}"><i class="fab fa-fw fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social mx-4" href=" https://wa.me/521{{$datos->telefono}}"><i class="fab fa-whatsapp"></i></a>
            <a class="btn btn-outline-light btn-social mx-4" href="{{$datos->pinterest}}"><i class="fab fa-pinterest"></i></a>
            <a class="btn btn-outline-light btn-social mx-4" href="{{$datos->instagram}}"><i class="fab fa-instagram"></i></a>
             {{--    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a> --}}
            </div>
            <!-- Footer 	fab fa-whatsapp  fab fa-pinterest  About Text-->
            <div class="col-lg-4">
                {{-- <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0">
                    Freelance is a free to use, MIT licensed Bootstrap theme created by
                    <a href="http://startbootstrap.com">Start Bootstrap</a>
                    .
                </p> --}}
            </div>
        </div>
    </div>
  </footer>
  <!-- Copyright Section-->
  <div class="copyright py-4 text-center text-white">
    <div class="container"><small>
        Copyright © {{$datos->nombre}} 2020</small> <br> 
        <small>Desarrollado por: <a href="http://lrmaldo.github.io">lrmaldo</a></small>
         <br>
        <a href="/privacidad">Politicas de privacidad</a>
        &middot;
        <a href="/terminos">Terminos &amp; Condiciones</a>
      </div>
  </div>
  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
  <div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
  </div>
  <!-- Portfolio Modals-->
  
  
  
  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
          <!-- Contact form JS-->
          <script src="js/jqBootstrapValidation.js"></script>
          <script src="js/contact_me.js"></script>
          <!-- Core theme JS-->
          <script src="js/scripts.js"></script>
      </body>
      </html>
