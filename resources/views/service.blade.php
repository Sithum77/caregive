<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Service Area | Care Link</title>
    <link rel="stylesheet" href="cssc/bootstrap.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      rel="stylesheet"
    />
    <script src="js/bootstrap.bundle.js"></script>

    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
        font-family: "Poppins", sans-serif;
        background: #f9f9f9;
      }

      .navbar {
        background-color: #006666;
      }
      .navbar-nav .nav-link {
        color: white !important;
      }
      .navbar-nav .nav-link:hover,
      .navbar-nav .nav-link.active {
        color: #ffc107 !important;
        font-weight: 600;
      }

      body > footer {
        margin-top: auto;
        background-color: #212529;
        color: white;
        padding: 20px 0;
        text-align: center;
      }

      .header-section {
        background-color: #006666;
        color: white;
        padding: 40px 0;
        text-align: center;
        margin-bottom: 40px;
      }
      .header-section h1 {
        font-weight: 700;
        font-size: 3rem;
      }
      .header-section span.text-warning {
        color: #ffc107;
      }

      .service-area {
        max-width: 1100px;
        margin: 0 auto 60px;
        padding: 0 15px;
      }
      .service-area h2 {
        text-align: center;
        color: #006666;
        margin-bottom: 40px;
        font-weight: 700;
        font-size: 2.5rem;
        border-bottom: 3px solid #ffc107;
        display: inline-block;
        padding-bottom: 8px;
      }

      .service-card {
        background: white;
        border-radius: 12px;
        padding: 30px 20px;
        margin-bottom: 30px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        text-align: center;
      }
      .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 36px rgba(0, 0, 0, 0.15);
      }

      .service-icon {
        font-size: 3.5rem;
        color: #006666;
        margin-bottom: 20px;
        transition: color 0.3s ease;
      }
      .service-card:hover .service-icon {
        color: #ffc107;
      }

      .service-title {
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: #004d4d;
      }
      .service-description {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.5;
      }

      @media (min-width: 768px) {
        .service-row {
          display: flex;
          gap: 30px;
        }
        .service-card {
          flex: 1;
        }
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img
            src="{{ asset('images/logo.png') }}"  
            width="50"
            height="50"
            class="me-2 rounded-circle"
            alt="Logo"
          />
          Care Link
        </a>
        <button
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#mainNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="mainNav" class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/log">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/caregiver">Caregivers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sell">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/service"
                >Service Area</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/careblog">Careblog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="header-section">
      <h1>Our <span class="text-warning">Service Areas</span></h1>
      <p>Providing compassionate caregiving services across these locations</p>
    </div>

    <div class="service-area container" data-aos="fade-up">
      <h2>Where We Serve</h2>

      <div class="service-row">
        <div class="service-card" data-aos="zoom-in" data-aos-delay="100">
          <i class="fas fa-city service-icon"></i>
          <h3 class="service-title">Colombo</h3>
          <p class="service-description">
            Our team provides top-quality caregiver services throughout Colombo
            city, ensuring comfort and safety for your loved ones.
          </p>
        </div>

        <div class="service-card" data-aos="zoom-in" data-aos-delay="200">
          <i class="fas fa-tree service-icon"></i>
          <h3 class="service-title">Gampaha</h3>
          <p class="service-description">
            Supporting families in Gampaha with reliable and compassionate home
            care.
          </p>
        </div>

        <div class="service-card" data-aos="zoom-in" data-aos-delay="300">
          <i class="fas fa-warehouse service-icon"></i>
          <h3 class="service-title">Kalutara</h3>
          <p class="service-description">
            Dedicated caregivers serving the Kalutara district with personalized
            care plans.
          </p>
        </div>
      </div>

      <div class="service-row">
        <div class="service-card" data-aos="zoom-in" data-aos-delay="400">
          <i class="fas fa-hospital-user service-icon"></i>
          <h3 class="service-title">Kandy</h3>
          <p class="service-description">
            Providing compassionate caregiving support in the beautiful Kandy
            region.
          </p>
        </div>

        <div class="service-card" data-aos="zoom-in" data-aos-delay="500">
          <i class="fas fa-hand-holding-heart service-icon"></i>
          <h3 class="service-title">Matara</h3>
          <p class="service-description">
            Trusted caregiving services ensuring safety and companionship in
            Matara.
          </p>
        </div>

        <div class="service-card" data-aos="zoom-in" data-aos-delay="600">
          <i class="fas fa-people-carry service-icon"></i>
          <h3 class="service-title">Jaffna</h3>
          <p class="service-description">
            Extending our compassionate care network to the Jaffna district.
          </p>
        </div>
      </div>
    </div>

    <div class="container mb-5" data-aos="fade-up" data-aos-delay="700">
      <h2
        class="text-center mb-4"
        style="
          color: #006666;
          font-weight: 700;
          border-bottom: 3px solid #ffc107;
          display: inline-block;
          padding-bottom: 8px;
        "
      >
        Our Main Branch Location
      </h2>

      <div
        style="
          position: relative;
          overflow: hidden;
          padding-top: 56.25%;
          border-radius: 15px;
          box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        "
      >
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6448274279255!2d79.86124341477525!3d6.927078024022755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25970c5a6f65d%3A0xb17f7b4a176b56b7!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1690476000000!5m2!1sen!2sus"
          width="600"
          height="450"
          style="
            border: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
          "
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>

    <footer>
      <div class="container">
        <p class="mb-1">&copy; 2025 Care Link. All Rights Reserved.</p>
        <small>Contact us: carelink@gmail.com | Tel: 0762119014</small>
      </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
