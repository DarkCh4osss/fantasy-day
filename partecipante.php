<?php 
include('./app/php/connection.php'); 
$id = $_GET['id'];
$sql = $conn->query("select * from partecipanti where id=$id;");
$row = $sql->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $row['titolo'] ?> | Fantasy Day</title>
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
              <a href="chi-siamo.php">CHI SIAMO</a>
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
      <h1 class="chi-siamo_title glow">
        CHI SIAMO - <span><?php echo $_GET['id']; ?></span>
      </h1>
      <p class="chi-siamo_paragraph">
        Con noi, nel corso degli anni, tanti ospiti eccezionali. <br />
        Ne citiamo alcuni: <br />
        I fumettisti
        <a href="" class="patecipante_paragraph">Bruno Brindisi</a>,
        <a href="" class="partecipante_paragraph">Marco Castaldo</a>,
        <a href="" class="partecipante_paragraph">Barbara Ciardo</a>; <br />
        I doppiatori
        <a href="" class="partecipante_paragraph">Davide Pierino</a>,
        <a href="" class="partecipante_paragraph">Daniele Giuliani</a>,
        <a href="" class="partecipante_paragraph">Manuel Meli</a>,
        <a href="" class="partecipante_paragraph">Alex Polidori</a>,
        <a href="" class="partecipante_paragraph">Marco Cannella</a>; <br />
        Gli scrittori ed esperti di fumetto e di cultura audiovisiva
        <a href="" class="partecipante_paragraph">Gianluca di Fratta</a>,
        <a href="" class="partecipante_paragraph">Riccardo Rosati</a>,
        <a href="" class="partecipante_paragraph">Davide Tarò</a>,
        <a href="" class="partecipante_paragraph">Marino Maiorino</a>; <br />
        Le scrittrici
        <a href="" class="partecipante_paragraph">Monica Zunica</a>,
        <a href="" class="partecipante_paragraph">Daniela Ferraro Pozzer</a>,
        <a href="" class="partecipante_paragraph">Anna Fabrello</a>.
      </p>
    </section>

    <section class="partecipanti__sect">
      <div class="row">
        <div class="col-4">
          <div class="author-card">
            <img src="./app/img/mh.jpg" alt="" class="author-img" />
            <div class="author-name glow">
              <a href="">MARCO CANNELLA</a>
            </div>
            <p class="author-role">DOPPIAGGIO - 2022</p>
          </div>
        </div>
        <div class="col-4">
          <div class="author-card">
            <img src="./app/img/mh.jpg" alt="" class="author-img" />
            <div class="author-name glow">
              <a href="">MARCO CANNELLA</a>
            </div>
            <p class="author-role">DOPPIAGGIO - 2022</p>
          </div>
        </div>
        <div class="col-4">
          <div class="author-card">
            <img src="./app/img/mh.jpg" alt="" class="author-img" />
            <div class="author-name glow">
              <a href="">MARCO CANNELLA</a>
            </div>
            <p class="author-role">DOPPIAGGIO - 2022</p>
          </div>
        </div>
        <div class="col-4">
          <div class="author-card">
            <img src="./app/img/mh.jpg" alt="" class="author-img" />
            <div class="author-name glow">
              <a href="">MARCO CANNELLA</a>
            </div>
            <p class="author-role">DOPPIAGGIO - 2022</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="author-card">
            <img src="./app/img/mh.jpg" alt="" class="author-img" />
            <div class="author-name glow">
              <a href="">MARCO CANNELLA</a>
            </div>
            <p class="author-role">DOPPIAGGIO - 2022</p>
          </div>
        </div>
        <div class="col-4">
          <div class="author-card">
            <img src="./app/img/mh.jpg" alt="" class="author-img" />
            <div class="author-name glow">
              <a href="">MARCO CANNELLA</a>
            </div>
            <p class="author-role">DOPPIAGGIO - 2022</p>
          </div>
        </div>
        <div class="col-4">
          <div class="author-card">
            <img src="./app/img/mh.jpg" alt="" class="author-img" />
            <div class="author-name glow">
              <a href="">MARCO CANNELLA</a>
            </div>
            <p class="author-role">DOPPIAGGIO - 2022</p>
          </div>
        </div>
        <div class="col-4">
          <div class="author-card">
            <img src="./app/img/mh.jpg" alt="" class="author-img" />
            <div class="author-name glow">
              <a href="">MARCO CANNELLA</a>
            </div>
            <p class="author-role">DOPPIAGGIO - 2022</p>
          </div>
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
