<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Caregiver Booking | Care Link</title>
    <link rel="stylesheet" href="cssc/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.js"></script>
    <style>
      body {
        background-color: #f4f9f9;
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

      .booking-form {
        max-width: 700px;
        margin: 50px auto;
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      }

      .booking-form h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #006666;
      }

      .form-label {
        font-weight: bold;
      }
      footer {
        background-color: #212529;
        color: white;
      }
    </style>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-dark sticky-top"
      style="background-color: #006666"
    >
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
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNav"
          aria-controls="mainNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="mainNav" class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form.html">Login</a>
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

    <div class="booking-form">
      <div class="text-center mb-4">
        <img src="{{ asset('images/logo.png') }}"  alt="Care Link Logo" width="80" class="mb-2" />
        <h2>Caregiver Booking</h2>
      </div>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Your Full Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            required
          />
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            required
          />
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input
            type="tel"
            class="form-control"
            id="phone"
            name="phone"
            required
          />
        </div>

        <div class="mb-3">
          <label for="district" class="form-label">Select District</label>
          <select class="form-select" id="district" name="district" required>
            <option value="" disabled selected>
              -- Choose your district --
            </option>
            <option value="Colombo">Colombo</option>
            <option value="Kandy">Kandy</option>
            <option value="Galle">Galle</option>
            <option value="Kurunegala">Kurunegala</option>
            <option value="Matara">Matara</option>
            <option value="Anuradhapura">Anuradhapura</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Badulla">Badulla</option>
            <option value="Gampaha">Gampaha</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="state" class="form-label">Patient State</label>
          <select class="form-select" id="state" name="state" required>
            <option value="" disabled selected>
              -- Choose patient state --
            </option>
            <option value="Normal">Normal</option>
            <option value="Disabled">Disabled</option>
            <option value="Elderly">Elderly</option>
            <option value="Post Surgery">Post Surgery</option>
            <option value="Medical Attention">Medical Attention</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">patient Full Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            required
          />
        </div>

        <div class="mb-3">
          <label class="form-label">Gender</label><br />
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gender"
              id="male"
              value="Male"
              required
            />
            <label class="form-check-label" for="male">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gender"
              id="female"
              value="Female"
            />
            <label class="form-check-label" for="female">Female</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gender"
              id="other"
              value="Other"
            />
            <label class="form-check-label" for="other">Other</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="age" class="form-label">Patient Age</label>
          <input
            type="number"
            class="form-control"
            id="age"
            name="age"
            placeholder="Enter age"
            required
          />
        </div>

        <div class="mb-3">
          <label for="report" class="form-label">Upload Medical Report</label>
          <input
            type="file"
            class="form-control"
            id="report"
            name="report"
            accept=".pdf,.jpg,.jpeg,.png"
          />
        </div>

        <div class="mb-3">
          <label for="date" class="form-label">Preferred Date</label>
          <input
            type="date"
            class="form-control"
            id="date"
            name="date"
            required
          />
        </div>

        <div class="mb-3">
          <label for="time" class="form-label">Preferred Time</label>
          <input
            type="time"
            class="form-control"
            id="time"
            name="time"
            required
          />
        </div>

        <div class="mb-3">
          <label for="message" class="form-label">Additional Notes</label>
          <textarea
            class="form-control"
            id="message"
            name="message"
            rows="3"
          ></textarea>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-success">Confirm Booking</button>
        </div>
      </form>
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
