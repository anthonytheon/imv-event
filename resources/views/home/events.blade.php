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
  <header id="header" class="fixed-top" style="background-color: black">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="/" class="logo me-auto me-lg-0"><img src="/assets/imv/assets/img/logo/logo-imv.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/#products">Products</a></li>
          <li><a class="nav-link scrollto" href="/#production">Gallery</a></li>
          {{-- <li><a class="nav-link scrollto active" href="/event">Event</a></li>
          <li><a class="nav-link scrollto" href="/assets/imv/assets/catalogue.pdf">Catalogue</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="contact-btn scrollto" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us</div>

    </div>
  </header><!-- End Header -->

  <section id="events" class="events">
    <div class="container" data-aos="zoom-out">

      <div class="row g-5">
        @foreach ( $events as $e)
          
        <div class="col-lg-6 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
          <p>22 - 25 Februari 2023</p>
          <h3>AMD Indonesia Campus Events</h3>
          <a class="events-btn align-self-start" href="/event/{{$e->url}}_{{$e->id}}">Read More</a>
        </div>

        <div class="col-lg-6 col-md-6 order-first order-md-last d-flex align-items-center justify-content-center">
          <div class="img">
            <a href="/event/{{$e->url}}_{{$e->id}}"><img src="/assets/imv/assets/img/event/brosur.png" alt="" class="img-fluid"></a>
          </div>
        </div>

        @endforeach
      </div>

    </div>
  </section>

  <main id="main">

    <!-- ======= Contact Modal Section ======= -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
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
                <form class="fdata form-contact">
                  @csrf
                  <div class="section-title">
                    <h2>Contact</h2>
                    <p>Message</p>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                      </div>
                      <div class="col-md-6 form-group">
                          <select name="inquiry" class="form-select" aria-label="Inquiry">
                              <option value="">-- Select Inquiry --</option>
                              <option value="1">Product</option>
                              <option value="2">I want to buy</option>
                              <option value="3">Support</option>
                              <option value="4">Other</option>
                          </select>
                      </div>
                    </div>
                  <div class="form-group">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button id="btnsubmit" type="submit">Send Message</button></div>
                </form>
              </div>
              
              <div class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-stretch">
                <div class="info">
                  <div class="address">
                    <a href="https://www.google.com/maps/dir/-6.1774941,106.9395092/Indo+Mega+Vision,+PT,+Jl.+Inspeksi+Pam+No.168,+RT.17%2FRW.4,+West+Cakung,+Cakung,+East+Jakarta+City,+Jakarta+13910/@-6.1774402,106.9372933,17z/data=!3m1!4b1!4m17!1m7!3m6!1s0x2e69f57c52231707:0xbf82d2da186e0b9a!2sIndo+Mega+Vision,+PT!8m2!3d-6.1774954!4d106.9394302!16s%2Fg%2F1yh4dk3fx!4m8!1m1!4e1!1m5!1m1!1s0x2e69f57c52231707:0xbf82d2da186e0b9a!2m2!1d106.9394256!2d-6.1775071" target="_blank" target="_blank"><i class="bi bi-geo-alt"></i></a>
                    <h4>Location:</h4>
                    <p><a href="https://www.google.com/maps/dir/-6.1774941,106.9395092/Indo+Mega+Vision,+PT,+Jl.+Inspeksi+Pam+No.168,+RT.17%2FRW.4,+West+Cakung,+Cakung,+East+Jakarta+City,+Jakarta+13910/@-6.1774402,106.9372933,17z/data=!3m1!4b1!4m17!1m7!3m6!1s0x2e69f57c52231707:0xbf82d2da186e0b9a!2sIndo+Mega+Vision,+PT!8m2!3d-6.1774954!4d106.9394302!16s%2Fg%2F1yh4dk3fx!4m8!1m1!4e1!1m5!1m1!1s0x2e69f57c52231707:0xbf82d2da186e0b9a!2m2!1d106.9394256!2d-6.1775071" target="_blank">Jl. Inspeksi PAM no 168, RT 017 RW 04, Cakung Barat, Pulogadung, Jakarta Timur 13910. Jakarta, Indonesia</a></p>
                  </div>
                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p><a class="mailto" href="mailto:sales@imv.co.id">sales@imv.co.id</a> <br> <a class="mailto" href="mailto:support@imv.co.id">support@imv.co.id</a> <br> <a class="mailto" href="mailto:cs@imv.co.id">cs@imv.co.id</a></p>
                  </div>
                  <div class="phone">
                    <a href="tel:02122464777" target="_blank"><i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p><a href="tel:02122464777" target="_blank">(021) 22464777</a></p>
                  </div>
                  <div class="fax">
                    <a href="fax:02122564796" target="_blank"><i class="bi bi-printer"></i>
                    <h4>Fax:</h4>
                    <p><a href="fax:02122564796" target="_blank">(021) 22564796</a></p>
                  </div>
                  <div class="whatsapp">
                    <a href="https://wa.me/6281131128637" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    <h4>CS-IMV:</h4>
                    <p><a href="https://wa.me/6281131128637" target="_blank">+62 811-3112-8637</a></p>
                  </div>

                  {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.650711039469!2d106.93724151536946!3d-6.177490062254049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f57c52231707%3A0xbf82d2da186e0b9a!2sIndo%20Mega%20Vision%2C%20PT!5e0!3m2!1sen!2sid!4v1668497798477!5m2!1sen!2sid" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
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

  <div id="preloader" class="d-flex justify-content-center align-items-center">
    <img src="/assets/imv/assets/img/logo/logo-imv.png" alt="Indo Mega Vision" height="80" width="auto">
  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/imv/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/imv/assets/vendor/aos/aos.js"></script>
  <script src="/assets/imv/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/imv/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/imv/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/imv/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/imv/assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <script src="/assets/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(e) {
        e.preventDefault;
        $("#btnsubmit").on('click',function() {
            var formData = $('form.fdata').serialize();
            // console.log(formData);
            $.ajax({
                type: "POST",
                url: '/contact',
                data: formData,
                success:function(data){
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: data.message,
                        timer: 1800
                    });
                    $('form.fdata').trigger("reset");
                },error:function(data) {
                    Swal.fire({
                        icon: "error",
                        title: data.statusText,
                        text: data.responseJSON.exception+", "+data.responseJSON.message,
                        timer: 2500
                    });
                }
            });
        });
      });
    </script>

</body>

</html>