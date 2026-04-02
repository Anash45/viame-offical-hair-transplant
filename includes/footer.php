<?php
$footerQuickLinks = $footerQuickLinks ?? [
    ['href' => 'index.php', 'label' => 'Home'],
    ['href' => 'about.php', 'label' => 'About'],
    ['href' => 'testimonials.php', 'label' => 'Testimonials'],
    ['href' => 'science.php', 'label' => 'Science'],
    ['href' => 'pricing.php', 'label' => 'Pricing'],
    ['href' => 'contact.php', 'label' => 'Contact'],
];
$useVideoScripts = $useVideoScripts ?? false;
?>
    <section class="footer site-footer clearfix">
      <div class="container">
        <div class="row footer-main">
          <div class="col-sm-12 col-md-3">
            <a class="footer-logo" href="index.php">
              <img loading="lazy" src="images/logo.png" alt="Official Hair Clinic logo" />
            </a>
            <p class="footer-description">
              Official Hair Clinic provides modern, natural-looking hair
              restoration with expert-led planning, advanced techniques, and
              patient-first care.
            </p>
          </div>
          <div class="col-sm-6 col-md-3">
            <h4>Quick Links</h4>
            <ul class="footer-links">
              <?php foreach ($footerQuickLinks as $link): ?>
              <li><a href="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3">
            <h4>Contact Details</h4>
            <ul class="footer-contact">
              <li><i class="fa fa-map-marker"></i> 124-128 city road, london, EC1V 2NX</li>
              <li><i class="fa fa-phone"></i> <a href="tel:02088390083">0208 839 0083</a></li>
              <li><i class="fa fa-envelope"></i> <a href="mailto:info@officialhairclinic.com">info@officialhairclinic.com</a></li>
              <li><i class="fa fa-suitcase"></i> 08 AM - 05 PM</li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3">
            <h4>Follow Us</h4>
            <ul class="team-social">
              <li><a href="https://www.instagram.com/officialhairclinic" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.facebook.com/officialhairclinic" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://www.tiktok.com/@officialhairclinic" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom">
          <p>Copyright 2026 Official Hair Clinic. All rights reserved.</p>
        </div>
      </div>
    </section>

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
      $(window).load(function () {
        $("#status").fadeOut(300);
        $("#preloader").delay(500).fadeOut("slow");
      });
    </script>
    <script src="js/modernizr.custom.26589.js"></script>
    <script src="js/jquery-ui-1.8.22.custom.min.js"></script>
    <script src="js/jquery.imagesloaded.min.js"></script>
    <?php if ($useVideoScripts): ?>
    <script src="js/video.js"></script>
    <script src="js/bigvideo.js"></script>
    <?php endif; ?>
    <script src="js/jquery.easing.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="twitter/jquery.tweet.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script
      type="text/javascript"
      src="https://maps.google.com/maps/api/js?sensor=true"
    ></script>
    <script type="text/javascript" src="js/jquery.ui.map.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript" src="js/ticker.js"></script>
    <script type="text/javascript" src="js/jquery.easing.js"></script>
    <script type="text/javascript" src="js/jquery.BlackAndWhite.min.js"></script>
    <?php if ($useVideoScripts): ?>
    <script type="text/javascript" src="js/script-video.js?ver=1.1"></script>
    <?php endif; ?>

    <div class="whatsapp-float-wrap">
      <a class="whatsapp-pill" href="https://wa.me/442088390083" target="_blank" rel="noopener noreferrer" title="Get in touch with us on WhatsApp">
        <i class="fa fa-phone"></i>
        <span>Get in touch with us!</span>
      </a>
      <div class="whatsapp-float">
        <a href="https://wa.me/442088390083" target="_blank" rel="noopener noreferrer" title="Chat with us on WhatsApp">
          <img loading="lazy" src="./images/whatsapp.png" alt="Whatsapp">
        </a>
      </div>
    </div>

  </body>
</html>
