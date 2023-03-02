<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Indo Mega Vision</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/imv/assets/img/favicon.png" rel="icon">
    <link href="/assets/imv/assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/imv/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/imv/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/imv/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/imv/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/imv/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/imv/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/imv/assets/css/maintenance.css" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <section id="maintenance" class="maintenance">

            <div class="container" data-aos="fade-up">

                <!-- ======= Header ======= -->
                <header class="section-header">
                    <img src="/assets/imv/assets/img/logo/logo-imv.png" alt="" class="img-fluid">
                </header>

                <!-- ======= Card ======= -->
                <div class="row gy-4 d-flex justify-content-center mb-5 mt-3">

                    <div class="col-lg-3 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <a href="https://gear-computer.com/" target="_blank">
                            <div class="card">
                                <div class="card-img">
                                    <img src="/assets/imv/assets/img/maintenance/gear.png" class="img-fluid" alt="">
                                </div>
                                <div class="card-info">
                                    <h4>GEAR</h4>
                                    <span>GEAR computer is one of the local PC products, established in Indonesia since August 2003.</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <a href="https://www.axiooworld.com/" target="_blank">
                            <div class="card">
                                <div class="card-img">
                                    <img src="/assets/imv/assets/img/maintenance/axioo.png" class="img-fluid" alt="">
                                </div>
                                <div class="card-info">
                                    <h4>AXIOO</h4>
                                    <span>Axioo is a computer and electronics manufacturer based in Indonesia.</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <a href="https://rainerserver.net/" target="_blank">
                            <div class="card">
                                <div class="card-img">
                                    <img src="/assets/imv/assets/img/maintenance/rainer.png" class="img-fluid" alt="">
                                </div>
                                <div class="card-info">
                                    <h4>RAINER</h4>
                                    <span>Rainer Server is one of the National Server Brand products, established in Indonesia since 2007.</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

            <!-- ======= contact ======= -->
            <div class="contact">
                <div class="container d-flex justify-content-center mt-5">
                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#contactModal">
                        <div id="myIcon">
                            <div class="get-started-btn scrollto">
                                Contact Us
                            </div>
                        </div>
                    </button>
                </div>
            </div>

        </section><!-- End maintenance Section -->

    </div>


    <!-- ======= Footer ======= -->
    <div class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>PT Indo Mega Vision</span></strong>. All Rights Reserved
        </div>
        <!-- <div class="credits">
            Designed by <a href="">BootstrapMade</a>
        </div> -->
    </div>
    <!-- End Footer -->

    <!-- Modal contact -->
    <div class="contact">
        <div class="modal" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog d-flex justify-content-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Contact Us</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="contact row mt-4 d-flex justify-content-start" data-aos="fade-right" data-aos-delay="100">

                        <div class="col-lg-4">
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
                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                            <form class="php-email-form fdata">
                                @csrf
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
                                <div class="text-center">
                                    <button id="#btnsubmit" class="btn btn-danger">Send Message</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Modal -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- jQuery -->
    <script src="/assets/imv/assets/vendor/jquery/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <!-- Vendor JS Files -->
    <script src="/assets/imv/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/imv/assets/vendor/purecounter/purecounter.js"></script>
    <script src="/assets/imv/assets/vendor/aos/aos.js"></script>
    <!-- End jQuery -->
    <script src="/assets/imv/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/imv/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/imv/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/imv/assets/js/main.js"></script>
    <script>
        $("#contactModal").on('show.bs.modal', function (e) {
            $(".wrapper").addClass('is-blurred');
            $("#contactModal .modal-dialog").addClass('not-blurred');
        });

        $("#contactModal").on('hide.bs.modal', function (e) {
            $(".wrapper").removeClass('is-blurred');
            $("#contactModal .modal-dialog").removeClass('not-blurred');
        });

        $("#btnsubmit").on('click', function(e) {
                e.preventDefault();
                var formData = $("form.fdata").serialize();
                console.log(formData);
                $.ajax({
                    type: "POST",
                    url: "/contact",
                    data: formData,
                    success: function(data) {
                        Swal.fire({
                            icon: "success",
                            title: "Success",
                            text: data.message,
                            timer: 1800
                        });

                        $('form.fdata').trigger("reset");
                    }, error: function(data) {
                        Swal.fire({
                            icon: "error",
                            title: data.statusText,
                            text: data.responseJSON.exception + ", " + data.responseJSON.message,
                            timer: 2500
                        });
                    }
                });
            });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
