<?php include('./app/php/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eventi | Fantasy Day</title>
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
    <section class="top__navbar eventi">
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
              <?php include('./app/php/connection.php'); ?>          </li>
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

    <section class="navbar__sect eventi">
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
              <a href="chi-siamo.php">CHI SIAMO</a>
            </li>
            <li><a href="">AREE</a></li>
            <li><a href="#">EVENTI</a></li>
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
    </section>

    <div class="kpop-group">
      <img src="./app/img/eventi.jpg" alt="" />
    </div>
    <section class="eventi-main__sect">
      <h1 class="eventi-main_title glow">Eventi</h1>
      <p class="eventi-main_paragraph">
        Le attività e gli eventi di tutte le edizioni del Fantasy Day
      </p>
    </section>

    <section class="eventi__sect">
      <div class="row">
        <?php 
        $sql = $conn->query("select * from eventi order by id desc limit 4;");
        while($row = $sql->fetch_assoc()) {
          echo "<div class='col-4'>";
          echo "<div class='event-card'>";
          echo "<img src='../app/img/mh.jpg' alt='' class='event-img' />";
          echo "<div class='event-name glow'>";
          echo "<a href='evento.php?id=".$row['id']."'>".$row['sottotitolo']."</a>";
          echo "</div>";
          echo "<p class='event-date'>".$row['titolo']."</p>";
          echo "</div>";
          echo "</div>";
        }
        ?>
      </div>
      <div class="row">
        <?php 
        $sql = $conn->query("select * from eventi where id <= 12 order by id desc limit 4;");
        while($row = $sql->fetch_assoc()) {
          echo "<div class='col-4'>";
          echo "<div class='event-card'>";
          echo "<img src='../app/img/mh.jpg' alt='' class='event-img' />";
          echo "<div class='event-name glow'>";
          echo "<a href='evento.php?id=".$row['id']."'>".$row['sottotitolo']."</a>";
          echo "</div>";
          echo "<p class='event-date'>".$row['titolo']."</p>";
          echo "</div>";
          echo "</div>";
        }
        ?>
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
            <li><a href="chi-siamo.php">CHI SIAMO</a></li>
            <li><a href="#">EVENTI</a></li>
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
