<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meet Your Caregivers | Care Link</title>
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

      .card img {
        height: 500px;
        object-fit: cover;
        width: 100%;
        display: block;
      }

      .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        height: 100%;
      }

      .card-body {
        flex-grow: 1;
      }

      .header-section {
        background-color: #006666;
        color: white;
        padding: 40px 0;
        text-align: center;
      }

      footer {
        background-color: #212529;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="header-section">
      <h1>Meet Your <span class="text-warning">Caregivers</span></h1>
      <p>Our professional and compassionate caregivers are here for you.</p>
    </div>

    <div class="main-content">
      <div class="container my-5">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card h-100">
              <img  src=  "{{ asset('images/c2.jpg') }}" class="card-img-top" alt="Caregiver 1" />
              <div class="card-body">
                <h5 class="card-title">Warni Silva</h5>
                <p class="card-text">
                  Certified Nurse Assistant with 5 years of experience in elder
                  care and companionship.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c3.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Shashi Fernando</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c1.jpg') }}" class="card-img-top" alt="Caregiver 3" />
              <div class="card-body">
                <h5 class="card-title">Anjala Perera</h5>
                <p class="card-text">
                  Trained in dementia and Alzheimer's care. Focuses on building
                  trust and companionship.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c4.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Dilani Hettiarachchi</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c5.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Nirosha Weerasinghe</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c6.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Sanduni Jayasuriya</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c7.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Ishara Ranasinghe</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c8.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Kumari Dissanayake</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c9.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Thilini Abeysekara</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c10.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Nadeeka Samarasinghe</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c11.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Dinusha Gunawardena</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c12.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Harshini Wickramasinghe</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c2.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Shashi Fernando</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c5.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Ruwani Rathnayake</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c9.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Nilakshi Senanayake</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c12.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Chamari Rodrigo</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c7.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Malsha Jayawardena</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c8.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Hiruni Bandara</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c10.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Pavithra Fonseka</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c11.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Oshadi Ekanayake</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('images/c12.jpg') }}" class="card-img-top" alt="Caregiver 2" />
              <div class="card-body">
                <h5 class="card-title">Shehani Perera</h5>
                <p class="card-text">
                  Experienced in mobility support and daily task assistance.
                  Friendly and attentive service.
                </p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">
                  <a class="link-light" href="bookin.html">Booking</a>
                </button>
              </div>
            </div>
          </div>

          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="carenextpage1.html">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="caregivers_page2.html">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="caregivers_page3.html">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="caregivers_page2.html">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <footer class="py-4">
      <div class="container text-center">
        <p class="mb-1">&copy; 2025 Care Link. All Rights Reserved.</p>
        <small>Contact us: carelink@gmail.com | Tel: 0762119014</small>
      </div>
    </footer>
  </body>
</html>
