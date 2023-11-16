<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" />
    <title>BesCamp</title>
  </head>
  <body>
    <nav>
      <div class="nav__logo">BesCamp<span>.</span></div>
      <ul class="nav__links">
        <!-- <li class="link"><a href="#">Home</a></li>
        <li class="link"><a href="#">Destinations</a></li>
        <li class="link"><a href="#">Pricing</a></li>
        <li class="link"><a href="#">Reviews</a></li> -->
      </ul>
      <button class="btn">Start</button>
    </nav>
    <header>
      <div class="section__container header__container">
        <div class="header__image">
          <img src="<?= base_url('assets/img/2.jpg') ?>" alt="header" />
          <img src="<?= base_url('assets/img/1.jpg') ?>" alt="header" />
        </div>
        <div class="header__content">
          <div>
            <p class="sub__header">Bescamp</p>
            <h1>Dreams, Achievements, Information🎓</h1>
            <p class="section__subtitle">
              Welcome to our <b>BesCamp</b>, your go-to platform for diverse scholarship opportunities. 
              We aim to empower students by providing financial resources tailored to their academic goals. 
            </p>
            <div class="action__btns">
              <button class="btn">Sign In</button>
              <button class="btn-daftar">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="trip">
      <div class="section__container trip__container">
        <h2 class="section__title">List Of Shcolarships</h2>
        <p class="section__subtitle">
          Explore your suitable and dream scholarships around the world. Here you can
          find your right scholarship.
        </p>
        <div class="trip__grid">
          <div class="trip__card">
            <img src="<?= base_url('assets/img/djarum.jpg') ?>" alt="trip" />
            <div class="trip__details">
              <p>Beasiswa Djarum Foundation</p>
              <div class="rating"><i class="ri-star-fill"></i> 4.2</div>
              <div class="booking__price">
                <div class="price"><span>From</span> $300</div>
                <button class="book__now">Book Now</button>
              </div>
            </div>
          </div>
          <div class="trip__card">
            <img src="<?= base_url('assets/img/bi.png') ?>" alt="trip" />
            <div class="trip__details">
              <p>Beasiswa Bank Indonesia</p>
              <div class="rating"><i class="ri-star-fill"></i> 4.5</div>
              <div class="booking__price">
                <div class="price"><span>From</span> $450</div>
                <button class="book__now">Book Now</button>
              </div>
            </div>
          </div>
          <div class="trip__card">
            <img src="<?= base_url('assets/img/kse.jpg') ?>" alt="trip" />
            <div class="trip__details">
              <p>Beasiswa Yayasan KSE</p>
              <div class="rating"><i class="ri-star-fill"></i> 4.7</div>
              <div class="booking__price">
                <div class="price"><span>From</span> $400</div>
                <button class="book__now">Book Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="view__all">
          <button class="btn">View All</button>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__bar">
        Copyright © 2023 Web Design Mastery. All rights reserved.
      </div>
    </footer>
  </body>
</html>
