<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Care Link</title>

    <link rel="stylesheet" href="cssc/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.js"></script>
  

    <style>
      * {
        font-family: "Poppins", sans-serif;
      }

      body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        opacity: 0.8; 
        z-index: -2; 
      }

      body {
        background-image: url("{{ asset('images/bg.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
      }

      .navbar {
        background-color: #006666;
      }

      .navbar-nav .nav-link {
        color: white !important;
        transition: 0.3s;
      }
      .pt {
        border-radius: 50%;
      }

      .navbar-nav .nav-link:hover {
        color: #ffc107 !important;
      }

      .carousel-item {
        height: 100vh;
        position: relative;
      }

      .carousel-item img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        filter: brightness(1);
      }

      .slide-content {
        position: absolute;
        top: 50%;
        right: 10%;
        transform: translateY(-50%);
        background-color: rgba(255, 255, 255, 0.8);
        width: 400px; 
        height: 400px; 
        border-radius: 50%;
        text-align: center;
        padding: 20px; 
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      }

      .slide-content h2 {
        font-weight: bold;
      }

      .btn-warning {
        transition: 0.3s;
      }

      .btn-warning:hover {
        background-color: #e69500;
        transform: scale(1.05);
      }

      .service-box {
        background-color: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
      }

      .custom-border {
        border-width: 5px !important; 
        border-style: solid; 
      }

      .service-box:hover {
        transform: translateY(-10px);
      }

      

      #scrollTopBtn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #ffc107;
        color: white;
        border: none;
        padding: 10px 14px;
        border-radius: 50%;
        display: none;
        z-index: 99;
        cursor: pointer;
        font-size: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      }

      #scrollTopBtn:hover {
        background-color: #e69500;
      }

      footer a:hover {
        text-decoration: underline;
      }

      .rating i {
        font-size: 30px;
        color: gray;
        cursor: pointer;
        transition: 0.2s;
      }

      .rating i.selected,
      .rating i:hover,
      .rating i:hover ~ i {
        color: gold;
      }
    </style>
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          

          <img src="{{ asset('images/logo.png') }}"   width="50"
            height="50"
            class="me-2 rounded-circle"
            alt="Logo" >

            
           

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
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
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
              <a class="nav-link" href="/service">Service Area</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/careblog">Careblog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div id="careSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/1.jpg') }}" alt="slide 1">
                         
          <div class="slide-content">
            <h2>
              Bringing Loving <span class="text-info">Care to Your Home</span>
            </h2>
            <p>
              We provide home care services to help you live your best life.
            </p>
            <a href="/careblog" class="btn btn-warning">Learn More</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/2.jpg') }}" alt="slide 2">
          <div class="slide-content">
            <h2>Trusted <span class="text-info">Caregivers</span></h2>
            <p>Get loving care from our certified professionals.</p>
            <a href="/careblog" class="btn btn-warning">Learn More</a>
          </div>
        </div>
        <div class="carousel-item">
           <img src="{{ asset('images/3.jpg') }}" alt="slide 3">
          <div class="slide-content">
            <h2>Your Health, <span class="text-info">Our Priority</span></h2>
            <p>Flexible services tailored to your needs.</p>
            <a href="/careblog" class="btn btn-warning">Learn More</a>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#careSlider"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#careSlider"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

   
    <div class="container my-5" data-aos="fade-up">
      <h2 class="text-center mb-5">Our Services</h2>
      <div class="row text-center">
        <div class="col-md-3 service-box border border-success gx-4">
          <img src="{{ asset('images/l7.jpg') }}" alt="l" class="img-fluid rounded mb-3 mt-4" />
          <h5>Concierge Services</h5>
          <p>We help with your everyday tasks and routines.</p>
          <a class="btn btn-primary" href="/careblog">lern more</a>
        </div>
        <div class="col-md-3 service-box border border-success gx-1">
          <img src="{{ asset('images/l6.jpg') }}" alt="l" class="img-fluid rounded mb-3" />
          <h5>Companionship</h5>
          <p>You're never alone – our companions are with you.</p>
          <a class="btn btn-primary" href="/careblog">lern more</a>
        </div>
        <div class="col-md-3 service-box border border-success gx-5">
          <img src="{{ asset('images/l2.jpg') }}" alt="l" class="img-fluid rounded mb-3" />
          <h5>Homemaking</h5>
          <p>We assist with housework and cleanliness.</p>
         <a class="btn btn-primary" href="/careblog">lern more</a>
        </div>
        <div class="col-md-3 service-box border border-success gx-5">
          <img src="{{ asset('images/l3.jpg') }}" alt="l" class="img-fluid rounded mb-3" />
          <h5>More Services</h5>
          <p>Explore our full range of caregiving services.</p>
          <a class="btn btn-primary" href="/service">lern more</a>
        </div>
      </div>
    </div>


    <div class="container my-5" data-aos="fade-up">
      <h2 class="text-center mb-4">What Our Clients Say</h2>
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <div
            class="bg-light p-4 rounded shadow-sm border border-success custom-border"
          >
            <p>
              "Wonderful caregivers! My mom is happier and healthier than ever."
            </p>
            <strong>- Mrs. Perera</strong>
            <img src="{{ url('images/prof1.jpg') }}" alt="Photo" width="50px" height="50px" class="rounded-circle shadow border border-1 border-dark">

          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div
            class="bg-light p-4 rounded shadow-sm border border-success custom-border"
          >
            <p>"Best service in Kandy! Truly trustworthy and professional."</p>
            <strong>- Mr. Nuwan</strong>
             <img src="{{ url('images/2prof.jpg') }}" alt="Photo" width="50px" height="50px" class="rounded-circle shadow border border-1 border-dark" >
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div
            class="bg-light p-4 rounded shadow-sm border border-success custom-border"
          >
            <p>"Highly recommend Care Link. Friendly and punctual team!"</p>
            <strong>- Ms. bazel</strong>
             <img src="{{ url('images/3prof.jpg') }}" alt="Photo" width="50px" height="50px" class="rounded-circle shadow border border-1 border-dark">
          </div>
        </div>
      </div>
    </div>

    
    <div class="bg-warning text-white py-5 border border-1 border-dark" data-aos="fade-up">
      <div class="container text-center">
        <h3>Subscribe to Our Newsletter</h3>
        <p>Get tips and updates from Care Link in your inbox.</p>
        <form class="row justify-content-center">
          <div class="col-md-6">
            <input
              type="email"
              class="form-control mb-2"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="col-md-2">
            <button class="btn btn-dark w-100">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    
    <div class="container my-5" data-aos="fade-up">
      <h2 class="text-center mb-4">Rate Our Service</h2>
      <form
        class="bg-light p-4 rounded shadow border border-3 border-dark"
        style="max-width: 600px; margin: auto"
      >
        <div class="mb-3 text-center">
          <label class="form-label">How do you rate us?</label>
          <div class="rating">
            <i class="fas fa-star" data-value="1"></i>
            <i class="fas fa-star" data-value="2"></i>
            <i class="fas fa-star" data-value="3"></i>
            <i class="fas fa-star" data-value="4"></i>
            <i class="fas fa-star" data-value="5"></i>
          </div>
        </div>
        <div class="mb-3">
          <label for="feedback" class="form-label">Your Feedback</label>
          <textarea
            class="form-control"
            id="feedback"
            rows="4"
            placeholder="Write your thoughts here..."
            required
          ></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-warning">Submit Feedback</button>
        </div>
      </form>
    </div>

   
    <footer class="bg-dark text-light pt-4 pb-2 mt-5">
      <div class="container">
        <div class="row text-center text-md-start">
          <div class="col-md-4 mb-3">
            <h5>Care Link</h5>
            <p>
              Bringing loving care to your home with trusted caregivers and
              professional support.
            </p>
          </div>
          <div class="col-md-4 mb-3">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
              <li><a href="/" class="text-light">Home</a></li>
              <li><a href="/log" class="text-light">Login</a></li>
              <li>
                <a href="/caregiver" class="text-light">Caregivers</a>
              
           
          </div>
          <div class="col-md-4 mb-3">
            <h5>Contact Us</h5>
            <p>Email: acarelink@gmail.com</p>
            <p>Tel: 0762119014</p>
            <p>40 Lake Side, Kandy, Kadugannawa</p>
            <div>
              <a href="#"
                ><i class="fab fa-facebook fa-lg me-2 text-white"></i
              ></a>
              <a href="#"
                ><i class="fab fa-x-twitter fa-lg me-2 text-white"></i
              ></a>
              <a href="#"><i class="fab fa-instagram fa-lg text-white"></i></a>
            </div>
          </div>
        </div>
        <div class="text-center border-top pt-2 mt-3">
          <p class="mb-0">&copy; 2025 Care Link. All Rights Reserved.</p>
        </div>
      </div>
    </footer>

    
    <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">
      <i class="fas fa-arrow-up"></i>
    </button>

   
   
    
    <script>
      AOS.init();

      const scrollBtn = document.getElementById("scrollTopBtn");
      window.onscroll = function () {
        scrollBtn.style.display =
          document.documentElement.scrollTop > 300 ? "block" : "none";
      };
      function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
      }

     
      document.querySelectorAll(".rating i").forEach((star) => {
        star.addEventListener("click", function () {
          const value = this.getAttribute("data-value");
          document.querySelectorAll(".rating i").forEach((s) => {
            s.classList.remove("selected");
          });
          for (let i = 0; i < value; i++) {
            document.querySelectorAll(".rating i")[i].classList.add("selected");
          }
          console.log("You rated:", value);
        });
 });
        const myCarousel = document.querySelector('#careSlider');
  const carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000,
    ride: 'carousel'

      });
    </script>
  </body>
</html>
