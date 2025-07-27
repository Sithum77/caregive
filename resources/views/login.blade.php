<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Care Link</title>
    <link rel="stylesheet" href="cssc/bootstrap.min.css" />
    
    <script src="js/bootstrap.bundle.js"></script>
    <style>
      body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
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
    </style>
  </head>
  <body>
    <div class="login-card text-center">
      <img src="{{ asset('images/logo.png') }}"   alt="Care Link Logo" class="logo" />
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
        <a href="#">Forgot Password?</a><br />
        <small
          >Don’t have an account? <a href="registation.html">Register</a></small
        >
      </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
