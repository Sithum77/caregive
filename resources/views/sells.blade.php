<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caregiver Support Items | Care Link</title>
    <link rel="stylesheet" href="cssc/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.js"></script>
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
      }

      body {
        display: flex;
        flex-direction: column;
      }

      .main-content {
        flex: 1;
      }

      .header-section {
        background-color: #006666;
        color: white;
        padding: 40px 0;
        text-align: center;
      }

      .navbar {
        background-color: #006666;
      }

      .navbar-nav .nav-link {
        color: white !important;
      }
      .pt {
        border-radius: 50%;
      }

      .navbar-nav .nav-link:hover {
        color: #ffc107 !important;
      }

      .card img {
        height: 400px;
        object-fit: cover;
      }

      .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
      }

      .card:hover {
        transform: scale(1.02);
      }

      footer {
        background-color: #212529;
        color: white;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div class="main-content">
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">
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
          <div
            id="mainNav"
            class="collapse navbar-collapse justify-content-end"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="caregivver.html">Caregivers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="item.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Service Area</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="carebl.html">Careblog</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="header-section">
        <h1>Caregiver Support <span class="text-warning">Shop</span></h1>
        <p>Find essential items to support your loved ones and caregivers</p>
      </div>

      <div class="container my-5">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('images/wheel.png') }}" class="card-img-top" alt="Wheelchair" />
              <div class="card-body">
                <h5 class="card-title">Wheelchair</h5>
                <p class="card-text">
                  Comfortable foldable wheelchair for daily use.
                </p>
                <p class="text-success">Rs. 35,000</p>
                <button
                  onclick="location.href='cartchair.html'"
                  class="btn btn-primary w-100"
                >
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('images/walk.png') }}" class="card-img-top" alt="Walker" />
              <div class="card-body">
                <h5 class="card-title">Walker</h5>
                <p class="card-text">
                  Sturdy metal walker for mobility assistance.
                </p>
                <p class="text-success">Rs. 7,500</p>
                <button
                  onclick="location.href='cartwalker.html'"
                  class="btn btn-primary w-100"
                >
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('images/bed.jpg') }}" class="card-img-top" alt="Medical Bed" />
              <div class="card-body">
                <h5 class="card-title">Adjustable Medical Bed</h5>
                <p class="card-text">
                  Electric adjustable bed for patients at home.
                </p>
                <p class="text-success">Rs. 120,000</p>
                <button
                  onclick="location.href='cartbed.html'"
                  class="btn btn-primary w-100"
                >
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="py-4 bg-dark text-white">
      <div class="container-fluid text-center">
        <p class="mb-1">&copy; 2025 Care Link. All Rights Reserved.</p>
        <small>Contact us: carelink@gmail.com | Tel: 0762119014</small>
      </div>
    </footer>
  </body>
</html>
