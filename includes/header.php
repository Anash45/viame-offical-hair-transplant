<?php
$currentPage = $currentPage ?? '';
$navItems = [
    'home' => ['label' => 'Home', 'href' => 'index.php'],
    'about' => ['label' => 'About', 'href' => 'about.php'],
    'testimonials' => ['label' => 'Testimonials', 'href' => 'testimonials.php'],
    'science' => ['label' => 'Science', 'href' => 'science.php'],
    'pricing' => ['label' => 'Pricing', 'href' => 'pricing.php'],
    'contact' => ['label' => 'Contact', 'href' => 'contact.php'],
    'book' => ['label' => 'Book Consultation', 'href' => '#contact-form'],
];
?>
      <div class="header clearfix">
        <div class="top-contact-bar">
          <div class="container">
            <div class="top-contact-inner">
              <a href="tel:02088390083" aria-label="Call Official Hair Clinic">
                <i class="fa fa-phone"></i>
                <span>0208 839 0083</span>
              </a>
              <a href="mailto:info@officialhairclinic.com" aria-label="Email Official Hair Clinic">
                <i class="fa fa-envelope"></i>
                <span>info@officialhairclinic.com</span>
              </a>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row header-row">
            <div class="col-md-4 col-xs-6">
              <a class="logo" href="index.php"
                ><img loading="lazy" alt="logo" src="images/logo.png"
              /></a>
            </div>
            <div class="col-md-8">
              <div
                class="menu-btn"
                data-target=".nav-collapse"
                data-toggle="collapse"
              >
                <span class="fa fa-th"></span>
              </div>
              <ul class="navigation nav-collapse">
                <?php foreach ($navItems as $key => $item): ?>
                <li<?= $currentPage === $key ? ' class="current"' : '' ?>><a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></a></li>
                <?php endforeach; ?>
              </ul>
              <a class="header-call-desktop" href="tel:02088390083" aria-label="Call Official Hair Clinic">
                <i class="fa fa-phone"></i>
                <span>0208 839 0083</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
