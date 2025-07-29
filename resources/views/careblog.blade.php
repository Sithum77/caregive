<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Care Blogs | Care Link</title>
    <link rel="stylesheet" href="cssc/bootstrap.min.css" />
   
 
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


    <script src="js/bootstrap.bundle.js"></script>
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
      }

      


      * {
        font-family: "Poppins", sans-serif;
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
      }

      .carousel-control-prev,
.carousel-control-next {
  width: 5%;
}

  .carousel-control-prev span,
.carousel-control-next span {
  transition: transform 0.3s ease;
}
.carousel-control-prev:hover span,
.carousel-control-next:hover span {
  transform: scale(1.3);
}





        .video-frame {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
  }

  .video-frame:hover {
    transform: scale(1.01);
  }

  .video-frame video {
    width: 100%;
    height: auto;
    border-radius: 15px;
  }

  .video-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 60px;
    color: rgba(255, 255, 255, 0.7);
    pointer-events: none;
  }

  .video-section-title {
    font-weight: bold;
    color: #006666;
    margin-bottom: 30px;
    text-align: center;
  }

 
    </style>
  </head>
  <body>
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
              <a class="nav-link" href="/service">Service Area</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/careblog">Careblog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="header-section">
      <h1>Care <span class="text-warning">Blogs</span></h1>
      <p>Read latest articles about caregiver support and tips</p>
    </div>
<div class="container mt-5">
  <div class="row">

<div class="col-md-6">
  <div id="careCarousel" class="carousel slide shadow-lg" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/n1.jpg') }}" class="d-block w-100" alt="Caregiver Tips">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
          <h5>How to Choose the Right Caregiver</h5>
          <p>Tips on selecting compassionate and skilled caregivers for your loved ones.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/n2.jpg') }}" class="d-block w-100" alt="Mobility Aids">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
          <h5>Top 5 Mobility Aids for Seniors</h5>
          <p>Improve daily life and safety for seniors.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/n3.jpg') }}" class="d-block w-100" alt="Alzheimer’s Care">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
          <h5>Caring for Alzheimer's Patients</h5>
          <p>Support strategies for compassionate caregiving.</p>
        </div>
      </div>
    </div>

  
    <button class="carousel-control-prev" type="button" data-bs-target="#careCarousel" data-bs-slide="prev">
      <span class="fa fa-chevron-left fa-2x text-white bg-dark bg-opacity-75 rounded-circle p-2"></span>
    </button>

    
    <button class="carousel-control-next" type="button" data-bs-target="#careCarousel" data-bs-slide="next">
      <span class="fa fa-chevron-right fa-2x text-white bg-dark bg-opacity-75 rounded-circle p-2"></span>
    </button>
  </div>
</div>


    
    <div class="col-md-6">
      <div class="card shadow-lg">
        <div class="card-body">
          <h3 class="card-title text-center mb-4">Watch Our Care Tips Video</h3>
          <div class="ratio ratio-16x9">
            <video controls>
              <source src="{{ asset('images/mp2.mp4') }}" type="video/mp4" />
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>




   

        <div class="container my-5">
  <div class="card p-4 mx-auto" style="max-width: 500px;" data-aos="fade-up">
    <h3 class="text-center mb-3">BMI Calculator</h3>

    <div class="mb-3">
      <label for="height" class="form-label">Height (cm):</label>
      <input type="number" class="form-control" id="height" placeholder="e.g. 170" />
    </div>

    <div class="mb-3">
      <label for="weight" class="form-label">Weight (kg):</label>
      <input type="number" class="form-control" id="weight" placeholder="e.g. 65" />
    </div>

    <button onclick="calculateBMI()" class="btn btn-primary w-100">Calculate BMI</button>

    <div class="mt-3 text-center">
      <h5 id="result"></h5>
    </div>
  </div>
</div>
      
<div class="container my-5 flex-grow-1">
  <mag-article
    title="How to Choose the Right Caregiver"
    subtitle="Tips on selecting compassionate and skilled caregivers for your loved ones."
    img="{{ asset('images/n3.jpg') }}"
  >
    <p>Choosing the right caregiver is a vital step to ensure the safety, comfort, and happiness of your loved ones. It starts with understanding their unique medical needs, emotional wellbeing, and daily routines. A good caregiver should not only possess the required skills and qualifications but also demonstrate genuine compassion and patience.</p>
    <p>When selecting a caregiver, consider checking references and performing background checks to verify reliability. Communication skills are essential; the caregiver should be able to clearly understand and report any changes in health or mood. Additionally, cultural compatibility and personal values can improve trust and harmony.</p>
    <p>Finally, take the time to involve your loved one in the decision-making process as much as possible to ensure their preferences and comfort are prioritized.</p>
  </mag-article>

  <mag-article
    title="Top 5 Mobility Aids for Seniors"
    subtitle="Discover the best mobility aids to improve the daily life of seniors."
    img="{{ asset('images/n2.jpg') }}"
  >
    <p>Mobility aids play a crucial role in enhancing independence and quality of life for seniors. The right device can prevent falls, reduce pain, and increase confidence when moving around.</p>
    <p>Here are the top 5 mobility aids commonly recommended:</p>
    <ul>
      <li><strong>Canes:</strong> Simple, lightweight, and easy to use for balance support.</li>
      <li><strong>Walkers:</strong> Provide extra stability with four legs and often include wheels for easier movement.</li>
      <li><strong>Rollators:</strong> Walkers equipped with seats and brakes, perfect for those who need frequent rests.</li>
      <li><strong>Wheelchairs:</strong> For those with limited mobility, offering both manual and electric options.</li>
      <li><strong>Stair Lifts:</strong> Safe solutions for navigating stairs within the home.</li>
    </ul>
    <p>Choosing the right aid depends on individual strength, balance, and living environment. Consulting a physical therapist or medical professional ensures the best fit and safe use.</p>
  </mag-article>

  <mag-article
    title="Caring for Alzheimer's Patients"
    subtitle="Practical advice and emotional support strategies for caregivers."
    img="{{ asset('images/n1.jpg') }}"
  >
    <p>Caring for someone with Alzheimer's disease demands patience, empathy, and adaptability. The condition gradually affects memory, reasoning, and communication, making daily caregiving challenging yet profoundly important.</p>
    <p>Establishing a consistent routine helps reduce confusion and anxiety. Simple tasks should be broken down into manageable steps, and clear, gentle communication is key. Non-verbal cues and body language often become essential tools to understand needs and emotions.</p>
    <p>Caregivers should also prioritize self-care to avoid burnout, seeking support groups or respite care when necessary. Emotional support for both the patient and caregiver nurtures trust and improves quality of life during this difficult journey.</p>
  </mag-article>
</div>
<script>
  class MagArticle extends HTMLElement {
    constructor() {
      super();
      this.attachShadow({ mode: 'open' });

      const container = document.createElement('article');
      const style = document.createElement('style');

      style.textContent = `
        article {
          background: white;
          padding: 30px 40px;
          margin-bottom: 40px;
          border-radius: 12px;
          box-shadow: 0 8px 24px rgba(0,0,0,0.1);
          font-family: 'Georgia', serif;
        }
        h2 {
          font-size: 2rem;
          margin-bottom: 10px;
          color: #004d4d;
          border-bottom: 3px solid #ffc107;
          padding-bottom: 8px;
        }
        .subtitle {
          font-weight: 600;
          color: #007d7d;
          font-style: italic;
          margin-bottom: 20px;
          font-size: 1.15rem;
        }
        img {
          max-width: 100%;
          border-radius: 10px;
          margin-bottom: 25px;
          box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }
        p, ul {
          font-size: 1.1rem;
          color: #444;
          margin-bottom: 18px;
        }
        ul {
          margin-left: 20px;
        }
        ul li {
          margin-bottom: 10px;
        }
      `;

      const title = this.getAttribute('title') || 'No Title';
      const subtitle = this.getAttribute('subtitle') || '';
      const imgSrc = this.getAttribute('img') || '';

      container.innerHTML = `
        ${imgSrc ? `<img src="${imgSrc}" alt="${title}"/>` : ''}
        <h2>${title}</h2>
        <div class="subtitle">${subtitle}</div>
        <slot></slot>
      `;

      this.shadowRoot.appendChild(style);
      this.shadowRoot.appendChild(container);
    }
  }

  customElements.define('mag-article', MagArticle);
</script>



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
<script>
  function calculateBMI() {
    const height = parseFloat(document.getElementById('height').value);
    const weight = parseFloat(document.getElementById('weight').value);
    const result = document.getElementById('result');

    if (!height || !weight) {
      result.innerText = "Please enter valid height and weight.";
      return;
    }

    const bmi = weight / ((height / 100) ** 2);
    let message = "";

    if (bmi < 18.5) {
      message = "Underweight";
    } else if (bmi < 24.9) {
      message = "Normal weight";
    } else if (bmi < 29.9) {
      message = "Overweight";
    } else {
      message = "Obese";
    }

    result.innerText = `Your BMI is ${bmi.toFixed(2)} (${message})`;
  }
</script>


  </body>
</html>
