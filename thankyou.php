<?php
$pageTitle = 'Thank You - Official Hair Clinic';
$metaDescription = 'Thank you for contacting Official Hair Clinic. Our team will get back to you shortly.';
$bodyClass = 'inner-page thankyou-page';
$currentPage = '';
$useVideoScripts = false;
$footerQuickLinks = [
    ['href' => 'index.php', 'label' => 'Home'],
    ['href' => '#contact', 'label' => 'Book Consultation'],
    ['href' => 'about.php', 'label' => 'About'],
    ['href' => 'pricing.php', 'label' => 'Pricing'],
    ['href' => 'contact.php', 'label' => 'Contact'],
];

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
      <div class="container contact-hero-wrap">
        <div class="title-content clearfix">
          <div class="title-inner">
            <h3>Thank You</h3>
            <p>Your consultation request has been sent successfully.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="clearfix content">
      <div class="container">
        <div class="white-bg padding align-center">
          <h2 class="about-title">We Will Contact You Shortly</h2>
          <p>
            One of our patient coordinators will review your details and get in touch to arrange your consultation.
          </p>
          <p>
            Need immediate help? Call us on <a href="tel:02088390083">0208 839 0083</a>.
          </p>
          <a class="view-more bac-btn" href="index.php#contact">Back to Home</a>
        </div>
      </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>