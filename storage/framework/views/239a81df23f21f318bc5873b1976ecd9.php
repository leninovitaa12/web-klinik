<!DOCTYPE html>
<html lang="en">
<head>

     <title>Klinik Insan Permata</title>
<!-- main asset -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?php echo e(asset('lp/css/bootstrap.min.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('lp/css/font-awesome.min.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('lp/css/animate.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('lp/css/owl.carousel.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('lp/css/owl.theme.default.min.css')); ?>">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo e(asset('lp/css/tooplate-style.css')); ?>">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Klinik Insan Permata</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 9898989898</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">insanpermata@klinik.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXTS -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-i-square"></i>INSAN PERMATA</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li><a href="<?php echo e(route('account.login')); ?>" class="nav-item nav-link">Login</a></li>
                         <li class="appointment-btn"><a href="<?php echo e(route('account.login')); ?>">Make an appointment</a></li>
                    </ul>
               </div>
          </div>
     </section>

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Insan Mandiri Cahaya Masa Depan</h3>
                                             <h2>Membantu Anak Anda Mencapai Potensi Penuh</h2>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Dampingi Tumbuh Kembang Anak Anda</h3>
                                             <h1>Raih Masa Depan Impian</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Tumbuh Kembang Optimal</h3>
                                             <h1>Masa Depan Gemilang</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to <i class="fa fa-i-square"></i>Insan Permata</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus iusto alias distinctio quia consequatur accusantium, voluptates molestiae id ipsum asperiores fugiat neque magnam illum cum voluptas quis! Atque, itaque voluptates.</p>
                                   <p>Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam a tempus vehicula.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="<?php echo e(asset('lp/images/author-image.jpg')); ?>" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Ahmad Muzaki</h3>
                                        <p>Kepala Klinik</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Doktor Kita</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="<?php echo e(asset('lp/images/team-image1.jpg')); ?>" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Anton Lee</h3>
                                        <p>Divisi Fisiotherapi</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 010-020-0120</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">fisioinsanpermata@company.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="<?php echo e(asset('lp/images/team-image2.jpg')); ?>" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Joko Purwanto</h3>
                                        <p>Divisi Wicara</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">wicarainsan@company.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-facebook-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             <li><a href="#" class="fa fa-flickr"></a></li>
                                        </ul>
                                   </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="<?php echo e(asset('lp/images/team-image3.jpg')); ?>" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Siti Aisya</h3>
                                        <p>Divisi Nutrisi</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 010-040-0140</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">nutrisiinsan@company.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-twitter"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- GOOGLE MAP -->
     <section id="google-map">
        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
       </div>
     <!-- Map Point
            1. Google Maps
            2. Klik Lokasi
            3. Klik "Share" klik "Embed map" tab
            4. Copy
	-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.329590021234!2d111.52379907439115!3d-7.647662992368428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79be55b03d3d8f%3A0x1151682f4c35e5b4!2sMadiun%20State%20Polytechnic!5e0!3m2!1sen!2sid!4v1713933696158!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem consequatur amet rem iusto pariatur cum accusamus tempora libero magni nostrum sequi, labore quae, id atque quas iste aut eveniet! Illum?</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 89898988989</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">insanpermata@klinik.com</a></p>
                              </div>
                         </div>
                    </div>



                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>08:00 AM - 04:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 12:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2024 Insan Permata
                                   | </p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Konsultasi Nutrisi</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Billing</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS JS -->
     <script src="<?php echo e(asset('lp/js/jquery.js')); ?>"></script>
     <script src="bootstrap.min.js"></script>
     <script src="<?php echo e(asset('lp/js/jquery.sticky.js')); ?>"></script>
     <script src="jquery.stellar.min.js"></script>
     <script src="<?php echo e(asset('lp/js/wow.min.js')); ?>"></script>
     <script src="<?php echo e(asset('lp/js/smoothscroll.js')); ?>"></script>
     <script src="<?php echo e(asset('/lp/js/custom.js')); ?>"></script>

</body>
</html>
<?php /**PATH D:\KLINIK INSAN PERMATA\1. FIX KLINIK WEB\Klinik_Insan_Permata\resources\views\landing.blade.php ENDPATH**/ ?>