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

    <section id="visit-us" class="clearfix content">
      <div class="container">
        <div class="contact-grid contact-grid-2 clearfix">
          <div class="contact-col">
            <div class="white-bg padding contact-block">
              <h2>Visit Official Hair Clinic - Harley Street, London</h2>
              <p>
                <strong>Address:</strong><br />
                Official Hair Clinic<br />
                82 Harley Street<br />
                London W1G 7HN
              </p>
              <p>
                Speak with our team in person to review your options and receive
                a clear treatment plan.
              </p>
            </div>
          </div>
          <div class="contact-col">
            <div class="white-bg contact-map-wrap">
              <iframe
                loading="lazy"
                src="https://maps.google.com/maps?q=82%20Harley%20Street%2C%20London%20W1G%207HN&t=m&z=14&output=embed"
                title="Official Hair Clinic location"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="clearfix content">
      <div class="container">
        <div class="title-content clearfix">
          <div class="title-inner">
            <h3>Ready to Reclaim Your Confidence?</h3>
            <p>Schedule your personalized consultation with our expert hair restoration specialists today</p>
          </div>
        </div>

        <div class="tab-content white-bg">
          <div class="tab-pane fade in active" id="message-us">
            <img loading="lazy"  src="images/contact/1.png" alt="contact" />
            <div class="white-bg clearfix">
              <div class="row clearfix">
                <div class="col-md-4">
                  <div class="padding">
                    <h2 class="about-title">Book an Appointment</h2>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="padding">
                    <div id="form-wrapper">
                      <div id="form-inner">
                        <div id="ErrResults"></div>
                        <div id="MainResult"></div>
                        <div id="MainContent">
                          <div class="powr-form-builder" id="fa51b415_1774879218"></div><script src="https://www.powr.io/powr.js?platform=wordpress"></script>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="spacing40 clearfix"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="office">
            <div id="map_canvas"></div>
            <div class="white-bg clearfix">
              <div class="row clearfix">
                <div class="col-md-4">
                  <div class="padding">
                    <p class="black-text">Info:</p>
                    <p class="gray-text">Basecamp</p>
                    <h2 class="about-title">Our Office</h2>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="padding">
                    <p>
                      Visit Official Hair Clinic at Harley Street for a
                      consultation with our specialist team.
                    </p>

                    <ul class="address-list">
                      <li><i class="fa fa-map-marker"></i> 124-128 city road, london, EC1V 2NX</li>
                      <li><i class="fa fa-phone"></i> 0208 839 0083</li>
                      <li><i class="fa fa-suitcase"></i> 08 AM - 05 PM</li>
                      <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@officialhairclinic.com">info@officialhairclinic.com</a>
                      </li>
                    </ul>
                  </div>
                  <div class="spacing40 clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="white-bg clearfix">
          <ul class="nav margin align-right nav-tabs">
            <li class="active">
              <a href="#message-us" data-toggle="tab">Book an Appointment</a>
            </li>
            <li><a href="#office" data-toggle="tab">Our Office</a></li>
          </ul>
        </div>
        <div class="spacing40 clearfix"></div>
      </div>
    </section>
<?php include __DIR__ . '/includes/footer.php'; ?>
