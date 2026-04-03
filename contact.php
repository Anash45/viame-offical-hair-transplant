<?php
$pageTitle = 'Contact - Official Hair Clinic';
$metaDescription = 'Book your consultation with Official Hair Clinic by phone, message, or in-person appointment.';
$bodyClass = 'inner-page contact-page';
$currentPage = 'contact';
$useVideoScripts = false;
$footerQuickLinks = [
    ['href' => '#home', 'label' => 'Home'],
    ['href' => '#contact-intro', 'label' => 'Consultation'],
    ['href' => '#visit-us', 'label' => 'Visit Us'],
    ['href' => '#contact', 'label' => 'Contact Form'],
];

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
      <div class="container contact-hero-wrap">
        <div class="title-content clearfix">
          <div class="title-inner">
            <h3>Book Your Appointment Today</h3>
            <p>
              Online video and in-person consultations with Official Hair Clinic.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact-intro" class="clearfix content">
      <div class="container">
        <div class="contact-grid contact-grid-2 clearfix">
          <div class="contact-col">
            <div class="white-bg padding contact-block">
              <h2>Consultation Options That Fit Your Schedule</h2>
              <p>
                At Official Hair Clinic, we offer both online video and in-person
                consultations for hair transplants.
              </p>
              <p>
                During a video consultation, we review your hair loss pattern,
                discuss medical history, and explain treatment and pricing.
                In-person consultations also include donor-area measurement and
                a hands-on scalp assessment.
              </p>
              <a class="view-more bac-btn" href="#contact">Book now</a>
            </div>
          </div>
          <div class="contact-col">
            <div class="white-bg contact-image-wrap">
              <img loading="lazy" 
                src="./uploads/2025/06/city-clinics-hair-transplatn-clinic-london-7-1-1024x683.jpg"
                alt="Consultation at Official Hair Clinic"
              />
            </div>
          </div>
        </div>

        <div class="white-bg padding contact-whatsapp">
          <h3>Need a quick response? Message us on WhatsApp</h3>
          <p>
            For the fastest reply, message our patient care team on WhatsApp.
            Our coordinators can help with appointments, treatment questions,
            and preparation before your visit.
          </p>
        </div>
      </div>
    </section>


<?php include __DIR__ . '/includes/contact-section.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
