<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Care Link</title>
    <link rel="stylesheet" href="cssc/bootstrap.min.css" />
    <style>
      body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
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

      .register-card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        max-width: 500px;
        margin: auto;
      }

      .register-card h3 {
        color: #006666;
        font-weight: bold;
        margin-bottom: 30px;
      }

      .form-control {
        border-radius: 10px;
      }

      .btn-register {
        background-color: #006666;
        border: none;
        border-radius: 30px;
        font-weight: bold;
      }

      .btn-register:hover {
        background-color: #0948be;
      }

      .register-footer {
        text-align: center;
        margin-top: 20px;
      }

      .register-footer a {
        text-decoration: none;
        color: #0948be;
      }

      .logo {
        display: block;
        margin: 0 auto 20px;
        width: 80px;
        height: auto;
      }

      footer {
        background-color: #212529;
        color: white;
        margin-top: auto;
      }
    </style>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand text-light" href="#">
          <img
            src="{{ asset('logo.png') }}"
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

    <div class="register-card text-center">
      <img src="{{ asset('logo.png') }}" alt="Care Link Logo" class="logo" />
      <h3>Create an Account</h3>

      <form>
        <div class="mb-3 text-start">
          <label for="name" class="form-label">Full Name</label>
          <input
            type="text"
            id="name"
            class="form-control"
            placeholder="Your Name"
            required
          />
        </div>

        <div class="mb-3 text-start">
          <label for="email" class="form-label">Email Address</label>
          <input
            type="email"
            id="email"
            class="form-control"
            placeholder="Enter Email"
            required
          />
        </div>

        <div class="mb-3 text-start">
          <label for="phone" class="form-label">Phone Number</label>
          <input
            type="tel"
            id="phone"
            class="form-control"
            placeholder="07XXXXXXXX"
            required
          />
        </div>

        <div class="mb-3 text-start">
          <label for="password" class="form-label">Password</label>
          <input
            type="password"
            id="password"
            class="form-control"
            placeholder="Create Password"
            required
          />
        </div>

        <div class="mb-3 text-start">
          <label for="confirm-password" class="form-label"
            >Confirm Password</label
          >
          <input
            type="password"
            id="confirm-password"
            class="form-control"
            placeholder="Confirm Password"
            required
          />
        </div>

        <button type="submit" class="btn btn-register w-100 py-2" value="add member">
          Register
        </button>
      </form>

      <div class="register-footer mt-3">
        <small>Already have an account? <a href="form.html">Login</a></small>
      </div>
    </div>

    
    <footer class="py-4">
      <div class="container text-center">
        <p class="mb-1">&copy; 2025 Care Link. All Rights Reserved.</p>
        <small>
          <i class="bi bi-envelope-fill"></i> carelink@gmail.com |
          <i class="bi bi-telephone-fill"></i> 076 211 9014
        </small>
      </div>
    </footer>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
