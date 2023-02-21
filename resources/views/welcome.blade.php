<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fonds national de promotion et de service social</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets-home/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets-home/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets-home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-home/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets-home/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.2.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>FNPSS<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Accueil</a></li>
          <li><a href="#why-us">Missions</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      @auth
      <a class="btn-book-a-table" href="{{ route('dashbaord') }}">Mon compte</a>
      @endauth
      @guest
      <a class="btn-book-a-table" href="{{ route('login') }}">Connexion à votre compte</a>
      @endguest

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Appuyer l’action sociale et humanitaire du Gouvernement &nbsp;<br> et de servir de banque sociale</h2>
          {{-- <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p> --}}
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('login') }}" class="btn-book-a-table">Demander un document</a>
            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Decouvrez comment ça marche</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{ asset('assets-home/img/hero-img.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>FNPSS a pour missions :</h3>
              <p>
                Appuyer l’action sociale et humanitaire du
                Gouvernement dans le cadre de la politique sociale et humanitaire telle que définie par le Ministère des Affaires Sociales,
                Action Humanitaire et Solidarité Nationale
              </p>
              {{-- <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div> --}}
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4></h4>
                  <p>Jouer le rôle d’interface pour l’appui aux structures de prise en charge du Ministère des Affaires Sociales,
                    Action Humanitaire et Solidarité Nationale et des partenaires et intervenants sociaux et humanitaires</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4></h4>
                  <p>Émettre des avis techniques sur les pro- jets à caractère social et humanitaire ;
                    Servir d’organe consultatif pour les questions relatives aux facilités administratives, fiscales</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4></h4>
                  <p>Prendre en charge des opérations de lancement des projets de relèvement social</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Besoin d'aide ? <span>Contactez-nous</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15914.09311095122!2d15.2780097!3d-4.3122856!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a339a78e47b35%3A0x4ecc6976170731e9!2sFNPSS!5e0!3m2!1sen!2scd!4v1669727325479!5m2!1sen!2scd" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Adresse physique</h3>
                <p>Croisement boulevard du 30 juin & batetela kinshasa CD, Bd Du 30 Juin, Kinshasa</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>contact@fnpss.cd</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Appelez nous au </h3>
                <p>+243 808 997 118</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Horaire</h3>
                <div><strong>Lundi - Vendredi:</strong> 08h30 - 17h30;
                  <strong>Samedi - Dimanche :</strong> Fermé
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="# method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Chargement</div>
            <div class="error-message"></div>
            <div class="sent-message">Message envoyé avec succès</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer le message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <center>
          <div class="col-lg-3 col-md-6 footer-links">

            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </center>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Fonds national de promotion et de service social</span></strong>. Tous les droits sont reservés
      </div>

    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets-home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-home/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets-home/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets-home/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets-home/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets-home/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets-home/js/main.js') }}"></script>

</body>

</html>
