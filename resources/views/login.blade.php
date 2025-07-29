<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Care Link</title>

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
        transition: 0.3s;
      }

      .navbar-nav .nav-link:hover {
        color: #cccccc !important;
      }

      .navbar-nav .nav-link:hover {
        color: #ffc107 !important;
      }

      .login-wrapper {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
      }

      .login-card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        max-width: 420px;
      }

      .login-card h3 {
        color: #006666;
        font-weight: bold;
        margin-bottom: 30px;
      }

      .form-control {
        border-radius: 10px;
      }

      .btn-login {
        background-color: #006666;
        border: none;
        border-radius: 30px;
        font-weight: bold;
      }

      .btn-login:hover {
        background-color: #0948be;
      }

      .login-footer {
        text-align: center;
        margin-top: 20px;
      }

      .login-footer a {
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
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">
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
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNav"
          aria-controls="mainNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
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
              <a class="nav-link" href="/service">Service Area</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/careblog">Careblog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="login-wrapper">
      <div class="login-card text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Care Link Logo" class="logo" />
        <h3>Welcome Back</h3>

        <form>
          <div class="mb-3 text-start">
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              id="email"
              class="form-control"
              placeholder="Enter email"
            />
          </div>

          <div class="mb-3 text-start">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              id="password"
              class="form-control"
              placeholder="Enter password"
            />
          </div>

          <button type="submit" class="btn btn-login w-100 py-2">Login</button>
        </form>

        <div class="login-footer mt-3">
          <a href="/password">Forgot Password?</a><br />
          <small>
            Don’t have an account?
            <a href="/regist">Register</a>
          </small>
        </div>
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
