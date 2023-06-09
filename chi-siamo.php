<?php include('./app/php/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi Siamo | Fantasy Day</title>
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
  </head>
  <body>
    <section class="top__navbar chi-siamo">
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

    <section class="navbar__sect chi-siamo">
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
          <ul>
            <li><a href="./">HOME</a></li>
            <li>
              <a href="#">CHI SIAMO</a>
            </li>
            <li><a href="">AREE</a></li>
            <li><a href="eventi.php">EVENTI</a></li>
            <li><a href="">FILM FESTIVAL</a></li>
            <li><a href="partecipanti.php">PARTECIPANTI</a></li>
            <li><a href="">ARCHIVIO</a></li>
            <li>
              <a href=""><i class="fa fa-search"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <div class="kpop-group">
      <img src="./app/img/kpop_group.jpg" alt="" />
    </div>
    <section class="chi-siamo__sect">
      <h1 class="chi-siamo_title glow">CHI SIAMO</h1>
      <div class="row">
        <div class="col-2">
          <p class="chi-siamo_paragraph">
            Il Fantasy Day nasce nel 2007 come spin off di "Le Connessioni
            Inattese" e, da allora, opera congiuntamente per diffondere la
            cultura e in particolare la cultura del fumetto attraverso attivita'
            seminariali e ludiche: fumetti, gdr, giochi, incontri, concorsi
          </p>
        </div>
        <div class="col-2">
          <p class="chi-siamo_paragraph">
            per le scuole, laboratori, cosplay, mostre, k-pop, stand nella
            splendida cornice delle ville vesuviane del Miglio d'Oro di San
            Giorgio a Cremano (NA).
          </p>
        </div>
      </div>
      <!-- <p class="chi-siamo_paragraph">
        Il Fantasy Day nasce nel 2007 come spin off di "Le Connessioni Inattese"
        e, da allora, opera congiuntamente per diffondere la cultura e in
        particolare la cultura del fumeto attraverso attivita' seminariali e
        ludiche: fumetti, gdr, giochi, incontri, concorsi per le scuole,
        laboratori, cosplay, mostre, k-pop, stand nella splendida cornice delle
        ville vesuviane del Miglio d'Oro di San Giorgio a Cremano (NA).
      </p> -->
      <h2 class="chi-siamo_fdff">
        Nel 2023 nasce anche il Fantasy Day Film Festival dedicato ai
        cortometraggi fantasy.
      </h2>
    </section>

    <img src="./app/img/fantasyday_2019.jpg" alt="" class="fd2019" />

    <section class="scopri-di-piu__sect">
      <h1 class="scopridipiu_title glow">SCOPRI DI PIU'</h1>
      <div class="row">
        <div class="col-2 dipiu">
          <a href="./dicono-di-noi.php">DICONO DI NOI</a>
        </div>
        <div class="col-2 dipiu">
          <a href="partecipanti.php">PARTECIPANTI</a>
        </div>
      </div>
      <hr />
      <div class="row infos">
        <div class="col-2">
          <div class="google-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.9978327407757!2d14.33681757668266!3d40.82801127137653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133ba6516bd54277%3A0x51c337bd983079c2!2sParco%20di%20Villa%20Bruno!5e0!3m2!1sit!2sit!4v1683478958103!5m2!1sit!2sit"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <div class="row">
              <div class="col-2">
                <a class="underline" href="">COME RAGGIUNGERCI</a>
              </div>
              <div class="col-2"><a href="">VILLA FALANGA ></a></div>
            </div>
          </div>
        </div>
        <div class="col-2">
          <h2>ALTANUR</h2>
          <p>ASSOCIAZIONE CULTURALE INTERDISCIPLINARE</p>
          <p>(+39)333 44 94 037</p>
          <a href="mailto:info@fantasyday.it">INFO@FANTASYDAY.IT</a> <br />
          <a href="mailto:staff@fantasyday.it">STAFF@FANTASYDAY.IT</a>
        </div>
      </div>
    </section>

    <img src="./app/img/skeleton.jpg" alt="" class="skeleton" />

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
            <li><a href="/">HOME</a></li>
            <li><a href="#">CHI SIAMO</a></li>
            <li><a href="eventi.php">EVENTI</a></li>
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
  </body>
</html>
