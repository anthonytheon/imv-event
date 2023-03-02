<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT Indo Mega Vision</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/imv/assets/img/favicon.png" rel="icon">
  <link href="/assets/imv/assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/imv/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/imv/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/imv/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/imv/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/imv/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/imv/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <!-- Template Main CSS File -->
  <link href="/assets/imv/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="/" class="logo me-auto me-lg-0"><img src="/assets/imv/assets/img/logo/logo-imv.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#products">Products</a></li>
          <li><a class="nav-link scrollto" href="#dealer">Dealer</a></li>
          <li><a class="nav-link scrollto " href="#production">Gallery</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="contact-btn scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact Us</div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
            <form action="/guest" method="post">
              <div class="form-group">
                @csrf
                <label for="company" class="text-white form-label">Company Name</label>
                <input class="form-control" type="text" name="company" id="company">
                <label for="email" class="text-white form-label">Email</label>
                <input class="form-control" type="email" name="email" id="email">
                <label for="phone" class="text-white form-label">Contact Person</label>
                <input class="form-control" type="phone" name="phone" id="phone">
                <button type="submit" class="text-white btn btn-md btn-secondary mt-4">Proceed</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Contact Modal Section ======= -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-xl">
        <div class="modal-content">
          <div class="position-absolute top-0 end-0">
            <div class="close-icon icon-1" data-bs-dismiss="modal" aria-label="Close">
              <i class="bi bi-x"></i>
            </div>
          </div>
          
          <div class="modal-body">
            <div class="contact row">

              <div class="col-lg-7 d-flex align-items-stretch order-lg-2">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="section-title">
                    <h2>Contact</h2>
                    <p>Message</p>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                          <select name="inquiry" class="form-select" aria-label="Inquiry">
                              <option value="">-- Select Inquiry --</option>
                              <option value="1">Product</option>
                              <option value="2">I want to buy</option>
                              <option value="3">Support</option>
                              <option value="4">Other</option>
                          </select>
                      </div>
                    </div>
                  <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
              
              <div class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-stretch">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Jl. Inspeksi PAM no 168, Wisma Exa lt 3, Cakung Barat, Jakarta Timur 13910. Jakarta, Indonesia</p>
                  </div>

                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>sales@imv.co.id</p>
                  </div>

                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>(021) 22464777</p>
                  </div>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.650711039469!2d106.93724151536946!3d-6.177490062254049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f57c52231707%3A0xbf82d2da186e0b9a!2sIndo%20Mega%20Vision%2C%20PT!5e0!3m2!1sen!2sid!4v1668497798477!5m2!1sen!2sid" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Modal Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PT Indo Mega Vision</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://imv.co.id/">Indo Mega Vision</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/imv/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/imv/assets/vendor/aos/aos.js"></script>
  <script src="/assets/imv/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/imv/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/imv/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/imv/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/imv/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/imv/assets/js/main.js"></script>

</body>

</html>