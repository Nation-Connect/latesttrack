<!doctype html>
<html lang="en-IN">

<head>
  <meta charset="utf-8">
  <title>Latest Track | About Us</title>
  <?php include "head.php"; ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <style type="text/css">
    .wow:first-child {
      visibility: hidden;
    }

    html,
    body {
      height: 100%;
    }
  </style>
  <?php include "header.php"; ?>
  <div class="product-top-section">
    <div class="container">
      <div class="product-title">
        <h1>About Us</h1>
      </div>
      <div class="product-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="product-bottom-section ">
    <div class="container">
      <div class="row about-list">
        <div class="col-md-6 col-12 col-sm-12">
          <div class="about-img"><img alt="Establishment" src="assets/img/company-business.png"></div>
        </div>
        <div class="col-md-6 col-12 col-sm-12 about-content">
          <h2>Establishment</h2>
          <p class="text-justify">Latest Track GPS Systems Company is Founded by Vicky Kumar. With target of empowering young mind to establish own startup with dealership option available with latest Track and become own boss.</p>
        </div>
      </div>
      <div class="row about-list">
        <div class="col-md-6 col-12 col-sm-12">
          <div class="about-img"><img alt="Mission" src="assets/img/mission.png"></div>
        </div>
        <div class="col-md-6 col-12 col-sm-12 about-content">
          <h2>Mission</h2>
          <p class="text-justify">To build long term relationships with our customers and clients and provide exceptional customer services by pursuing business through innovation and advanced technology. We ensure good governance for sustainable and equitable growth and prosperity of the company. And Expand our Service to worldwide.</p>
        </div>
      </div>
      <div class="row about-list">
        <div class="col-md-6 col-12 col-sm-12">
          <div class="about-img"><img alt="Vision" src="assets/img/vision-img.jpg"></div>
        </div>
        <div class="col-md-6 col-12 col-sm-12 about-content">
          <h2>Vision</h2>
          <p class="text-justify">We are committed to provide better vehicle tracking system, fleet management and theft protection services for vehicles. We are seeking to provide excellent services, best risk management, prompt recovery of vehicle. We are keen to focus on the needs of customers to provide asset management solutions with high standards of customers’ support. We ensure good governance for sustainable and equitable growth and prosperity of the company.</p>
        </div>
      </div>
    </div>
  </div>
  <!--
    <section class="our-products-section about-slider-cover"  id="sticky-sidebar-stuff2">
        <div class="container">
            <h1 class="wow flipInX"  >Our Team</h1>
            <div class="GPS-section-text wow fadeInUp" data-wow-duration="2s" >We aim to be the extended GPS Tracking Devices partner for our clients and empower them to realise their potential. Here’s what our clients have to say about us. </div>

            <div class="owl-carousel owl-theme owl-custom about-slider" id="testimonials-slider">
                <div class="item " >
                    <div class="about-slider-img">
                      <img src="https://latesttrack.co.in/assets/img/about-slide.jpg">
                      <div class="about-slider-box">
                        <div class="about-slider-title">Navneet Choudhary</div>
                        <div class="about-slider-text">CEO</div>
                        <div class="about-slider-icons">
                          <a href=""><img alt="facebook" src="https://latesttrack.co.in/assets/img/facebook-icon.svg"></a>
                          <a href=""><img alt="instagram" src="https://latesttrack.co.in/assets/img/instagram-icon.svg"></a>
                          <a href=""><img alt="twitter" src="https://latesttrack.co.in/assets/img/twitter-icon.svg"></a>
                        </div>
                      </div>
                    </div>
                </div>
				
				
				<div class="item " >
                    <div class="about-slider-img">
                      <img src="https://latesttrack.co.in/assets/img/male.png">
                      <div class="about-slider-box">
                        <div class="about-slider-title">Naveen Sharma</div>
                        <div class="about-slider-text">Customer Care</div>
                        <div class="about-slider-icons">
                          <a href=""><img alt="facebook" src="https://latesttrack.co.in/assets/img/facebook-icon.svg"></a>
                          <a href=""><img alt="instagram" src="https://latesttrack.co.in/assets/img/instagram-icon.svg"></a>
                          <a href=""><img alt="twitter" src="https://latesttrack.co.in/assets/img/twitter-icon.svg"></a>
                        </div>
                      </div>
                    </div>
                </div>
				
				
				<div class="item " >
                    <div class="about-slider-img">
                      <img src="https://latesttrack.co.in/assets/img/woman.png">
                      <div class="about-slider-box">
                        <div class="about-slider-title">Megha Singh</div>
                        <div class="about-slider-text">Graphics Designer</div>
                        <div class="about-slider-icons">
                          <a href=""><img alt="facebook" src="https://latesttrack.co.in/assets/img/facebook-icon.svg"></a>
                          <a href=""><img alt="instagram" src="https://latesttrack.co.in/assets/img/instagram-icon.svg"></a>
                          <a href=""><img alt="twitter" src="https://latesttrack.co.in/assets/img/twitter-icon.svg"></a>
                        </div>
                      </div>
                    </div>
                </div>
               
            </div>
            
        </div>
    </section>
-->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.about-slider').owlCarousel({
        loop: true,
        margin: 10,
        autoplayTimeout: 7996,
        animateOut: 'fadeOut',
        autoplay: true,
        responsiveClass: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 2,
            nav: true
          },
          1000: {
            items: 3,
            nav: true,
            loop: true,
            margin: 10
          }
        }
      });
    });
  </script>
  <?php include "footer.php"; ?>
  <?php include "foot.php"; ?>
</body>

</html>