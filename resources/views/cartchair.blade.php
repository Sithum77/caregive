<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment | Care Link</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
      }

      body {
        display: flex;
        flex-direction: column;
        background-color: #f8f9fa;
        padding-top: 90px;
      }

      main {
        flex: 1;
        padding: 30px;
      }

      .navbar {
        background-color: #006666;
      }

      .navbar-nav .nav-link {
        color: white !important;
        transition: 0.3s;
      }

      .navbar-nav .nav-link:hover {
        color: #ffc107 !important;
      }

      .payment-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
      }

      .payment-card h2 {
        color: #006666;
        font-weight: bold;
        margin-bottom: 20px;
      }

      .btn-pay {
        background-color: #006666;
        color: white;
        font-weight: bold;
        border-radius: 30px;
      }

      .btn-pay:hover {
        background-color: #0948be;
      }

      .qty-box {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .qty-btn {
        padding: 5px 15px;
        font-size: 18px;
        font-weight: bold;
        background-color: #006666;
        color: white;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
      }

      .qty-input {
        width: 60px;
        text-align: center;
      }

      .form-control[readonly] {
        background-color: #e9ecef;
        font-weight: bold;
      }

      footer {
        background-color: #212529;
        color: white;
      }
    </style>
  </head>

  <body>
   
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="logo.png"
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

   
    <main>
      <div class="payment-card">
        <h2>Payment Details</h2>

        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="e.g. John Doe"
            />
          </div>

          <div class="mb-3">
            <label for="address" class="form-label">Shipping Address</label>
            <textarea
              class="form-control"
              id="address"
              rows="2"
              placeholder="Enter your address"
            ></textarea>
          </div>

          
          <div class="mb-3">
            <label class="form-label d-block">Quantity</label>
            <div class="qty-box">
              <button type="button" class="qty-btn" onclick="updateQty(-1)">
                -
              </button>
              <input
                type="number"
                id="quantity"
                class="form-control qty-input"
                value="1"
                min="1"
                onchange="updateTotal()"
              />
              <button type="button" class="qty-btn" onclick="updateQty(1)">
                +
              </button>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Price per Item</label>
            <input
              type="text"
              class="form-control"
              id="pricePerItem"
              value="35000"
              readonly
            />
          </div>

          <div class="mb-3">
            <label class="form-label">Total Price</label>
            <div class="form-control" id="totalPrice">Rs. 35000.00</div>
          </div>

          <button type="submit" class="btn btn-pay w-100 py-2">Pay Now</button>
        </form>
      </div>
    </main>

   
    <footer class="py-4">
      <div class="container text-center">
        <p class="mb-1">&copy; 2025 Care Link. All Rights Reserved.</p>
        <small>
          <i class="bi bi-envelope-fill"></i> carelink@gmail.com |
          <i class="bi bi-telephone-fill"></i> 076 211 9014
        </small>
      </div>
    </footer>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function updateQty(change) {
        const qtyInput = document.getElementById("quantity");
        let qty = parseInt(qtyInput.value);
        qty += change;
        if (qty < 1) qty = 1;
        qtyInput.value = qty;
        updateTotal();
      }

      function updateTotal() {
        const pricePerItem = parseFloat(
          document.getElementById("pricePerItem").value
        );
        const qty = parseInt(document.getElementById("quantity").value);
        const total = pricePerItem * qty;
        document.getElementById("totalPrice").innerText = total.toLocaleString(
          "en-LK",
          {
            style: "currency",
            currency: "LKR",
            minimumFractionDigits: 2,
          }
        );
      }

      updateTotal();
    </script>
  </body>
</html>
