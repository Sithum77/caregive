<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password - Care Link</title>
    <link href="cssc/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.js"></script>
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

      .navbar-nav .nav-link:hover {
        color: #ffc107 !important;
      }

      .forgot-wrapper {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
      }

      .forgot-card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        max-width: 420px;
        text-align: center;
      }

      .forgot-card h3 {
        color: #006666;
        font-weight: bold;
        margin-bottom: 20px;
      }

      .form-control {
        border-radius: 10px;
      }

      .btn-reset {
        background-color: #006666;
        border: none;
        border-radius: 30px;
        font-weight: bold;
      }

      .btn-reset:hover {
        background-color: #0948be;
      }

      footer {
        background-color: #212529;
        color: white;
      }
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="{{ asset('images/logo.png') }}" width="50" height="50" class="me-2 rounded-circle" alt="Logo" />
          Care Link
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/log">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="/caregiver">Caregivers</a></li>
            <li class="nav-item"><a class="nav-link" href="/sell">Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="/service">Service Area</a></li>
            <li class="nav-item"><a class="nav-link" href="/careblog">Careblog</a></li>
          </ul>
        </div>
      </div>
    </nav>

  
    <div class="forgot-wrapper">
      <div class="forgot-card">
        <h3>Reset Your Password</h3>
        <p class="mb-4">Enter your registered email to receive reset instructions</p>
        <form>
          <div class="mb-3 text-start">
            <label for="email" class="form-label">Email Address</label>
            <input
              type="email"
              id="email"
              class="form-control"
              placeholder="Enter your email"
              required
            />
          </div>
          <button type="submit" class="btn btn-reset w-100 py-2">Send Reset Link</button>
        </form>
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
  </body>
</html>
