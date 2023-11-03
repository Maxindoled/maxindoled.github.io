<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Maxindo LED</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>


  <!-- Favicons -->
  <link href="img/haha2.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="action/plugins/fontawesome-free/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.1.2/esm/ionicons.min.js" integrity="sha512-2ySmquu6HK3CAvwLllh0R8K8buFPMZsUwWLZIlB7WW8c8ilUtoNyhsmEsQn2U0IV1USr2Oc/9DJzlr4cxAbuxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> -->


  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/styles.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo2.png" width="120" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="index.php">About Us</a></li>
          <li><a href="index.php">Type LED</a></li>
          <li><a href="index.php">Gallery</a></li>
          <li><a href="call.php">Call To Action</a></li>
          <li><a href="event.php">The Events</a></li>
          <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="#contact">location and Massage</a></li> -->
          <!-- <li><a href="action/">User</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <div style="height: 90px;" class="vlop bg-white">
  </div>

  <!--==========================
  Call To Action Section
  ============================-->
  <section id="call-to-action">
    <div class="section-header">
      <h1 class="section-title text-white">Call To Action</h1>
      <p class="section-description">Various types of LEDs and their functions</p>
    </div>
    <div class="container wow fadeIn">
      
      <div class="row text">
        <div class="col-lg-4 text-center text-center">
          <h3 class="cta-title">Number Marketing</h3>
          <div class="row">
              
            <?php 
              include 'action/koneksi.php';
              $data = mysqli_query($koneksi,"SELECT * FROM nowa ORDER BY nowa_id DESC");
              while($d = mysqli_fetch_array($data)){
            ?>
            <div class="col-lg text-center">
              <div class="social-links">
                <a href="https://wa.me/<?php echo $d['linkwa'];?>" class="btn btn-success text-center" style="border-radius: 50%;">
                  <i class="fa-brands fa-whatsapp text-center"></i>
                </a>
              </div>
              <small style="font-size: x-small;" class="text-white"><?php echo $d['ket'];?></small>
            </div>

            <?php
            }
            ?>
            <!-- <div class="col">
              <div class="social-links">
                <a href="https://wa.me/+628970062787" class="btn btn-success text-center" style="border-radius: 50%;">
                  <i class="fa-brands fa-whatsapp text-center"></i>
                </a>
              </div>
            </div> -->

          </div>
        </div>


        <div class="col-lg-2 text-center">
          <span></span>
          <br>
        </div>
        <div class="col-lg-3 text-center">
          <span></span>
          <br>
        </div>

        <div class="col-lg-3 text-center">
          <h3 class="cta-title">Social Media</h3>
          <div class="social-links">
            <div class="row text-center">

              <div class="col">
                <a href="https://www.facebook.com/Maxindoled.official/" class="btn text-white" style="border-radius: 50%; background-color: #1976D2;">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>

              <div class="col">
                <a href="https://www.instagram.com/maxindoled/?hl=id" class="btn text-white" style="border-radius: 50%; background-image: linear-gradient(135deg, #FFC107 10% ,#D32F2F 50%, #283593 100%);">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>

              <div class="col">
                <a href="https://www.tiktok.com/@maxindoled" class="btn text-white" style="border-radius: 50%; background-color: #212121;">
                  <i class="fa-brands fa-tiktok"></i>
                </a>
              </div>

              <div class="col">
                <a href="https://www.youtube.com/@maxindoled" class="btn text-white" style="border-radius: 50%; background-color: #C62828;">
                  <i class="fa-brands fa-youtube"></i>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- <div class="container text-center mt-2">
      <span style="font-family: 'Poppins', sans-serif;">Klik Icon To Action</span>
    </div> -->
  </section>
  <!-- #call-to-action -->

<!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Location and Massage</h3>
          <p class="section-description">We Are Here</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=maxindo led&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
          <a href="https://embed-googlemap.com">embed-googlemap.com</a>
        </div>
        <style>
          .mapouter{
              position:relative;
              text-align:right;
              width:100%;
              height:400px;
            }
            
            .gmap_canvas 
            {
              overflow:hidden;
              background:none!important;
              width:100%;
              height:400px;
            }
            .gmap_iframe {
              height:400px!important;
            }
          </style>
      </div>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Maxindo LED<br>Jl. Gempol Raya No.3A, RT.005/RW.009, Kunciran Indah, Kec. Pinang, Kota Tangerang, Banten 15144</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>maxindoaman@gmail.com</p>
              </div>

              <!-- <div>
                <i class="fa fa-phone"></i>
                <p>+62 897 0062 786</p>
              </div> -->
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="komen.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control rounded" id="nama" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control rounded" name="mail" id="mail" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control rounded" name="subjek" id="subjek" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control rounded" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button style="border-radius: 5px;" type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

          <!-- <script>
            Swal.fire('Ini adalah sweetalert Basic');
          </script> -->

        </div>

      </div>
    </section><!-- #contact -->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong>2023 MaxindoLED&trade;</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://www.instagram.com/hafidzal_/">Hafidzal Maulana</a>
      </div>
    </div>
  </footer><!-- #footer -->

</body>
</html>