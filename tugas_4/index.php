<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>DilimoreFarm</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="logo nav__logo">
          <a href="#">Dilimore <span>Farm</span></a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <span><i class="ri-menu-line"></i></span>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Explore</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <div class="nav__btn">
        <button class="btn"><i class="ri-shopping-bag-fill"></i></button>
      </div>
    </nav>
    <section class="section__container header__container" id="home">
      <div class="header__image">
        <img src="farm.png" alt="header image" />
      </div>
      <div class="header__content">
        <h1>Feel, Capture & Enjoy The Charm of <span>Country Living</span></h1>
        <p class="section__description">
          Temukan spot-spot cantik, aktivitas seru, dan rasa segar langsung dari
          alam dalam satu perjalanan yang tak terlupakan.
        </p>
        <div class="header__btn">
          <button class="btn">Get Started</button>
        </div>
      </div>
    </section>

    <section class="section__container special__container" id="special">
      <h2 class="section__header">Our Signature Experiences</h2>
      <p class="section__description">
        Pengalaman wisata pilihan yang memadukan alam, edukasi, relaksasi
      </p>
      <div class="special__grid">
        <div class="special__card">
          <img src="strawberry.png" alt="special">
          <h4>Crimson Harvest</h4>
          <p>
            Petik stroberi premium di greenhouse modern.
            Nikmati piknic aesthetic, workshop selai, dan suasana pedesaan yang manis & instagrammable.
          </p>
          <div class="special__ratings">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
          </div>
          <div class="special__footer">
            <p class="price">Rp 30.000 / 0rang</p>
            <a href="form-pesan.php?paket=Crimson Harvest">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

        <div class="special__card">
          <img src="domba.png" alt="special">
          <h4>Feeding Frenzy</h4>
          <p>
            Rasakan keseruan hidup ala farmhouse Eropa.
            Feeding hewan, workshop susu & yoghurt, plus foto rustic di barn dan ladang hijau aesthetic.
          </p>
          <div class="special__ratings">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
          </div>
          <div class="special__footer">
            <p class="price">Rp 20.000 / 0rang</p>
            <a href="form-pesan.php?paket=Feeding Frenzy">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

        <div class="special__card">
          <img src="bunga.png" alt="special">
          <h4>Wildflower Journey</h4>
          <p>
            Jelajahi desa bunga penuh warna.
            Color Path, ladang bunga cantik, dan workshop bouquet memberikan pengalaman dreamy untuk pencinta estetika.
          </p>
          <div class="special__ratings">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
          </div>
          <div class="special__footer">
            <p class="price">Rp 25.000 / 0rang</p>
            <a href="form-pesan.php?paket=Wildflower Journey">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>
      </div>
    </section>
    </section>

<section class="section__container video__container">
  <h2 class="section__header">Explore Dilimore Farm</h2>
  <p class="section__description">
    Saksikan langsung keseruan dan keindahan wisata di Dilimore Farm melalui video dokumentasi berikut.
  </p>

  <div class="video__card">
    <div class="video__wrapper">
      <iframe
        src="https://www.youtube.com/embed/uV9koQm__fI"
        title="Dilimore Farm Tour"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
    </div>

    <div class="video__caption">
      <h4>Virtual Tour Dilimore Farm</h4>
      <p>
        Cuplikan suasana wisata, aktivitas edukasi, dan keindahan alam yang bisa kamu nikmati langsung di Dilimore Farm.
      </p>
    </div>
  </div>
</section>

    <script>
      const menuBtn = document.getElementById("menu-btn");
      const navLinks = document.getElementById("nav-links");

      menuBtn.addEventListener("click", () => {
        navLinks.classList.toggle("open");
      });
    </script>
  </body>
</html>
