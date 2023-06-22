<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manarti Exports</title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/style.css?v=<?= time(); ?>">
</head>

<body>
<div class="cursor"></div>
<div class="cursor2"></div>

  <!-- LOADER -->
  <!-- <div class="loader">
    <video class="video-loader" muted loop autoplay>
      <source src="video/loader.mp4" type="video/mp4" />
    </video>
  </div> -->

  <!-- HEADER -->
  <nav class="navbar bg-purple">
    <div class="container custom-container justify-content-lg-between">

      <a class="nav-links" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainMenu" aria-controls="mainMenu">MENU</a>
      <div class="offcanvas offcanvas-top mega-menu" tabindex="-1" id="mainMenu" aria-labelledby="mainMenuLabel">
        <div class="container custom-container">
          <div class="offcanvas-header d-block text-center">
            <a class="navbar-brand m-0" href="index.php">
              <img src="images/logo.png" alt="Logo" title="Logo" class="img-fluid" />
            </a>
            <button type="button" class="btn-close float-start" data-bs-dismiss="offcanvas" aria-label="Close">
              <div class="cross">
                <span></span>
                <span></span>
              </div>
            </button>
          </div>
          <div class="offcanvas-body">
            <ul class="main-menu list-unstyled">
              <li class="active">
                <a href="index.php" class="menu-link">HOME</a>
              </li>
              <li>
                <a href="about.php" class="menu-link">ABOUT US</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="menu-link">QUALITY POLICY</a>
              </li>
              <li>
                <a href="career.php" class="menu-link">CAREER</a>
              </li>
              <li>
                <a href="blog.php" class="menu-link">BLOGS</a>
              </li>
              <li>
                <a href="contact.php" class="menu-link">CONTACT US</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <a class="navbar-brand m-0" href="index.php">
        <img src="images/logo.png" alt="Logo" title="Logo" class="img-fluid" />
      </a>

      <a class="nav-links d-lg-block d-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#productMenu" aria-controls="productMenu">
        <div class="d-inline-block menu-bar">
          <span></span>
          <span></span>
          <span></span>
        </div>
        OUR PRODUCTS
      </a>
      <div class="offcanvas offcanvas-top mega-menu" tabindex="-1" id="productMenu" aria-labelledby="productMenuLabel">
        <div class="container custom-container">
          <div class="offcanvas-header d-block text-center">
            <a class="navbar-brand m-0" href="index.php">
              <img src="images/logo.png" alt="Logo" title="Logo" class="img-fluid" />
            </a>
            <button type="button" class="btn-close float-start" data-bs-dismiss="offcanvas" aria-label="Close">
              <div class="cross">
                <span></span>
                <span></span>
              </div>
            </button>
          </div>
          <div class="offcanvas-body">
            <div class="row align-items-center product-menu">
              <div class="col-xl-4 col-lg-3">
                <figure class="mb-0">
                  <img src="images/menu-prod1.png" alt="Product" class="img-fluid" />
                </figure>
              </div>
              <div class="col-xl-8 col-lg-9">
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <h5 class="menu-title">Medical Disposables</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="product-menu-link">Urology</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Gastro Entrology</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Oncology</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Gynecology</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Anesthesia</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Transfusion</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">General Surgery</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Pathology Lab</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4">
                    <h5 class="menu-title">Hospital Dressings</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="product-menu-link">Bandages</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Medical Swabs</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Medical Cotton</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Medical Hygiene</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Dressing Tape</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Wound Dressings</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Uniforms And Linen</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">General Dressing</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4">
                    <h5 class="menu-title">Rehabilitation And Physiotherapy</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="product-menu-link">Abdominal Supports</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Cervical Aids</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Fracture Aids</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Knee & Ankle Support</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">General Aids</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Physiotherapy Products</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4">
                    <h5 class="menu-title">Hospital Furniture</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="product-menu-link">Urology</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">ICU Beds</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Fowler & Semi-Fowler Beds</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Ward Beds</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Examination Couch</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Bed Side Lockers</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Over Bed Tables</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Stretcher Trolleys</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Operation Theatre</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4">
                    <h5 class="menu-title">Medical Equipment</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="product-menu-link">Suction Machine</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Surgery</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Laboratory and Reagents</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">ICU & NICU Care Equipment</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4">
                    <h5 class="menu-title">Diagnostics</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="product-menu-link">Eurology</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Cardiology</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Radiology</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Patient Monitoring</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">OPD</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Surgery</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Pulmonology</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4">
                    <h5 class="menu-title">Surgical Equipment</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="product-menu-link">Medical Sutures</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Surgical Instruments</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Hollowware</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Sterilizers</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4">
                    <h5 class="menu-title">Laboratory</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="product-menu-link">Rapid Test Kits</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Lab consumables</a>
                      </li>
                      <li>
                        <a href="#" class="product-menu-link">Other Equipment</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4">
                    <h5 class="menu-title">Emergency Care</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="product-menu-link">First Aid Kits</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </nav>