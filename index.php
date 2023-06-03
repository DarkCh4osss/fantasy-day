<?php include('./app/php/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Fantasy Day</title>
    <link rel="stylesheet" href="./dist/styles.css" />
    <link
      rel="shortcut icon"
      href="./app/img/logo_resized.png"
      type="image/png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="preload" href="./app/img/Rebis_color_resized.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
    />
  </head>
  <body>
    <main class="hero__sect">
      <section class="top__navbar">
        <div class="row">
          <div class="col-2"></div>
          <div class="col-2">
            <ul>
              <li>
                <a href="https://www.youtube.com/@fantasyday26" target="_blank"
                  ><i class="fa fa-youtube"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.tiktok.com/@fantasyday_official"
                  target="_blank"
                  ><i class="fa fa-tiktok"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/fantasyday_official/"
                  target="_blank"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.facebook.com/fantasydayofficial"
                  target="_blank"
                  ><i class="fa fa-facebook"></i
                ></a>
              </li>
              <?php if(isset($_SESSION['admin'])) { 
                echo "<li><a href='./app/php/logout.php'>LOGOUT</a></li>";
               } else {
                echo "<li><a href='./app/php/login.php'>AREA RISERVATA</a></li>";
               } ?>
            </ul>
          </div>
        </div>
      </section>

      <section class="navbar__sect">
        <div class="row">
          <div class="col-2">
            <img
              src="./app/img/logo_glow_res.png"
              id="logo"
              class="logo"
              alt=""
            />
          </div>
          <div class="col-2">
            <ul class="links">
              <li><a href="#">HOME</a></li>
              <li>
                <a href="chi-siamo.html">CHI SIAMO</a>
              </li>
              <li><a href="">AREE</a></li>
              <li><a href="eventi.html">EVENTI</a></li>
              <li><a href="">FILM FESTIVAL</a></li>
              <li><a href="">PARTECIPANTI</a></li>
              <li><a href="">ARCHIVIO</a></li>
              <li>
                <a href=""><i class="fa fa-search"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="news__sect">
        <div class="row">
          <div class="col-2 btm">
            <svg
              width="300"
              height="300"
              viewBox="0 0 500 500"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                cx="250"
                cy="250"
                r="249"
                stroke="#B4B4B4"
                stroke-width="2"
              />
              <circle
                cx="250"
                cy="250"
                r="174"
                stroke="#B4B4B4"
                stroke-width="2"
              />
              <circle
                cx="250"
                cy="250"
                r="149"
                stroke="#B4B4B4"
                stroke-width="2"
              />
            </svg>
            <h2>NOVITA'</h2>
          </div>
          <div class="col-2 top">
            <svg
              width="300"
              height="300"
              viewBox="0 0 500 500"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                cx="250"
                cy="250"
                r="249"
                stroke="#B4B4B4"
                stroke-width="2"
              />
              <circle
                cx="250"
                cy="250"
                r="174"
                stroke="#B4B4B4"
                stroke-width="2"
              />
              <circle
                cx="250"
                cy="250"
                r="149"
                stroke="#B4B4B4"
                stroke-width="2"
              />
            </svg>
            <h2>DATE FD</h2>
          </div>
        </div>
      </section>
    </main>

    <section class="areas__sect">
      <div class="areas-wrapper">
        <ul>
          <li><a href="">K-POP</a></li>
          <li><a href="">INCONTRI</a></li>
          <li><a href="">GAMES</a></li>
          <li><a href="">KIDS</a></li>
        </ul>
      </div>

      <div class="slider__container splide">
        <div class="splide__arrows">
          <button class="prev-btn splide__arrow splide__arrow--prev"><</button>
          <button class="next-btn splide__arrow splide__arrow--next">></button>
        </div>

        <div class="slider-wrapper splide__track">
          <ul class="slider-cards splide__list">
            <li class="card splide__slide">
              <img src="./app/img/fantasyfilm.jpg" alt="" class="card-img" />
            </li>
            <li class="card splide__slide">
              <img src="./app/img/fantasyfilm.jpg" alt="" class="card-img" />
            </li>
            <li class="card splide__slide">
              <img src="./app/img/fantasyfilm.jpg" alt="" class="card-img" />
            </li>
            <li class="card splide__slide">
              <img src="./app/img/mh.jpg" alt="" class="card-img" />
            </li>
            <li class="card splide__slide">
              <img src="./app/img/mh.jpg" alt="" class="card-img" />
            </li>
            <li class="card splide__slide">
              <img src="./app/img/mh.jpg" alt="" class="card-img" />
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="contests__sect">
      <img src="./app/img/mh.jpg" alt="" />
      <h2>PARTECIPA AD EVENTI E CONTEST QUI: <a href="">ISCRIVITI</a></h2>
      <img src="./app/img/skeleton.jpg" alt="" />
    </section>

    <footer class="footer__sect">
      <div class="row">
        <div class="col-3">
          <ul>
            <li><a href="">K-POP</a></li>
            <li><a href="">INCONTRI</a></li>
            <li><a href="">GAMES</a></li>
            <li><a href="">KIDS</a></li>
          </ul>
        </div>
        <div class="col-3">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="chi-siamo.html">CHI SIAMO</a></li>
            <li><a href="eventi.html">EVENTI</a></li>
            <li><a href="">ARCHIVIO</a></li>
            <li><a href="">AREE</a></li>
          </ul>
        </div>
        <div class="col-3">
          <ul>
            <?php if(isset($_SESSION['admin'])) { 
              echo "<li><a href='./app/php/logout.php'>LOGOUT</a></li>";
            } else {
              echo "<li><a href='./app/php/login.php'>AREA RISERVATA</a></li>";
            } ?>
            <div class="socials">
              <ul>
                <li>
                  <a
                    href="https://www.youtube.com/@fantasyday26"
                    target="_blank"
                    ><i class="fa fa-youtube"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.tiktok.com/@fantasyday_official"
                    target="_blank"
                    ><i class="fa fa-tiktok"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/fantasyday_official/"
                    target="_blank"
                    ><i class="fa fa-instagram"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.facebook.com/fantasydayofficial"
                    target="_blank"
                    ><i class="fa fa-facebook"></i
                  ></a>
                </li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </footer>

    <section class="credit__sect">
      <p>
        Built with 💜 by
        <a href="https://fabiogrimaldi.dev" target="_blank">Fabio Grimaldi</a>
      </p>
      <p>Fantasy Day • <span id="copyright"></span></p>
    </section>

    <script src="./app/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  </body>
</html>
