<!--READY TO SHIP-->

<!DOCTYPE html>

<html lang="en">

  <head>

    <title>Newborn</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <link

      rel="stylesheet"

      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"

      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"

      crossorigin="anonymous"

    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link

      href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css"

      rel="stylesheet"

    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

    <link rel="stylesheet" href="../css/footer.css" />



    <style>

      body {

        margin: 0 auto;

        font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;

      }



      .navbar-grey {

        width: 100%;

        height: 100px;

        background-color: lightgray;

        transition: 0.5s;

        position: fixed;

        z-index: 9;

      }



      #branding {

        float: left;

      }



      #branding img {

        width: 210px;

        height: 80px;

        margin-left: 20px;

      }



      .navlinks {

        float: right;

        padding-top: 30px;

        padding-right: 15px;

      }



      .navlink-a {

        text-decoration: none !important;

        color: black;

        font-weight: bold;

        padding-right: 10px;

        padding-left: 10px;

        font-size: 1.7em;

        transition: 0.5s;

      }



      .navlink-a:hover {

        color: darkgrey;

      }



      #open {

        height: 35px;

        min-width: 80px;

        margin: auto;

        color: black;

        background-color: transparent;

        border-color: black;

        border-radius: 10px;

        transition: 0.5s;

        display: none;

      }



      #open:hover {

        background-color: black;

        color: white;

      }



      #portfolio:hover {

        color: darkgrey;

        cursor: pointer;

      }



      .droplink-a {

        transition: 0.5s;

        text-decoration: none !important;

        color: black;

        font-weight: bold;

        padding-right: 5px;

        padding-left: 5px;

      }



      .droplink-a:hover {

        color: darkgrey;

      }



      .droplink-a {

        text-align: center;

      }



      .portfolio-drop {

        display: none;

        position: absolute;

      }



      @media (max-width: 950px) {

        #open {

          display: block;

        }



        .navlink-a {

          display: none;

        }



        .navlinks {

          float: none;

          text-align: center;

        }

      }



      @media (min-width: 951px) {

        #open {

          display: none;

        }



        .navlink-a {

          display: inline-block;

        }

      }



      .title {

        font-size: 3em;

        text-align: center;

      }



      .fotorama {

        margin-top: 50px;

        z-index: 3;

      }



      .fotorama img {

        position: relative;

      }



      #title {

        font-size: 4em;

        font-weight: bold;

        text-align: center;

      }



      .info {

        height: 500px;

        width: 100%;

        background-color: #f3f3f3;

        margin-top: 40px;

        display: inline-block;

      }



      .info-picture {

        max-height: 500px;

        width: 33%;

        float: left;

        overflow: hidden;

      }



      .info-picture img {

        overflow: hidden;

      }



      .info-text {

        padding-left: 35% !important;

        padding-right: 100px;

        padding-top: 75px;

      }



      .col-md-4 {

        background-image: url("../images/Newborn/5 (30).jpg");

        background-size: cover;

        background-position: center;

      }



      .col-md-8 {

        padding: 40px;

        background-color: #f3f3f3;

      }



      .row {

        margin-top: 30px;

      }

    </style>

  </head>

  <body>

    <!--Start Navbar-->

    <div class="navbar-grey">

      <a href="../index.html" id="branding"

        ><img alt="logo" src="../images/hlogo.png"

      /></a>



      <div class="navlinks">

        <button id="open">Menu</button>

        <a href="../index.html" class="navlink-a" id="active">Home</a>

        <a href="../about.html" class="navlink-a">I'm Kate</a>

        <a class="navlink-a" id="portfolio">Gallery</a>

        <a href="../pricing.html" class="navlink-a">Pricing</a>

        <a href="../faq.html" class="navlink-a">FAQ</a>

        <a href="../contact.html" class="navlink-a">Contact</a>



        <div class="portfolio-drop">

          <a href="family.php" class="droplink-a">Family</a>

          <a href="kids.php" class="droplink-a">Kids</a>

          <a href="newborn.php" class="droplink-a">Newborn</a>

          <a href="couples.php" class="droplink-a">Couples</a>

          <a href="maternity.php" class="droplink-a">Maternity</a>

        </div>

      </div>

    </div>

    <!--End Navbar-->

    <br /><br /><br /><br /><br />



    <h1 id="title">Newborn</h1>



    <div class="gallery">

      <div

        class="fotorama"

        data-ratio="800/600"

        data-minwidth="400"

        data-width="100%"

        data-minheight="300"

        data-maxheight="600px"

        text-align="center"

        data-nav="thumbs"

      >



        <?php

            $files = scandir('../images/Newborn');

            shuffle($files);

            foreach($files as $file) {

                if($file !== "." && $file !== "..") {

                    echo "<img src='../images/Newborn/$file' />";

                }

            }

        ?>



      </div>

    </div>



    <div class="row">

      <div class="col-md-4"></div>

      <div class="col-md-8">

        <h1>Newborn Photo Sessions</h1>

        <br />

        <h3>

          Oh, newborn sessions, the ones where I probably say ‘aweee’ 100 times.

          The one where we capture the new precious member of your family. The

          one where you realize how tiny their hands are compared to yours, and

          the one where you truly notice how much bigger your heart has

          grown.<br /><br />Newborn sessions are typically done in your home;

          however, if the weather is nice and you would prefer to be outside

          that is also a great option. Newborn home sessions will occur wherever

          there is the most natural light. Before your session we will discuss

          where in your home will be best, depending on the time of day.<br /><br />Within

          your newborn session, I will capture your family together, each parent

          and your newest addition, any siblings and of course portraits of your

          baby; their feet, those adorable little lips, and their big yawns.

        </h3>

      </div>

    </div>

 <div class="footer">

      <a href="https://www.instagram.com/fly.awayphotography/" target="_blank"><img src="../images/footerinsta.png" /></a>

      <a href="mailto:kateflyawayphotography@gmail.com"><img src="../images/footeremail.png" /></a>

      <br />

      <p class="footerlinks"><a href="index.html">Home</a> • <a href="about.html">About</a> • <a href="portfolio/family.php">Family</a> • <a href="portfolio/kids.php">Kids</a> • <a href="portfolio/newborn.php">Newborn</a> • <a href="portfolio/couples.php">Couples</a> • <a href="portfolio/maternity.php">Maternity</a> • <a href="faq.html">FAQ</a> • <a href="pricing.html">Pricing</a> • <a href="contact.php">Contact</a></p>

      <br />

      <p class="credit">&copy; Fly Away Photography, 2021</p>

      <p class="credit">Powered by <a href="http://papayatech.ca/" id="papaya">Papaya Tech Solutions</a></p>

    </div>



    <script

      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"

      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"

      crossorigin="anonymous"

    ></script>

    <script

      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"

      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"

      crossorigin="anonymous"

    ></script>

    <script

      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"

      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"

      crossorigin="anonymous"

    ></script>

    <script>

      var open;

      var menuopen;

      open = "false";

      menuopen = "false";

      $("#portfolio").click(function() {

        if (open == "false") {

          $(".portfolio-drop").css("display", "block");

          $("#portfolio").css("color", "darkgrey");

          open = "true";

        } else {

          $(".portfolio-drop").css("display", "none");

          $("#portfolio").css("color", "black");

          open = "false";

        }

      });



      $("#open").click(function() {

        if (menuopen == "false") {

          $(".navbar-grey").css("height", "355px");

          $(".navlink-a").css("display", "block");

          $("#branding").css("display", "none");

          $(".portfolio-drop").css("position", "absolute");

          $(".portfolio-drop").css("left", "0");

          $(".portfolio-drop").css("right", "0");

          menuopen = "true";

        } else {

          $(".navbar-grey").css("height", "100px");

          $(".navlink-a").css("display", "none");

          $("#branding").css("display", "block");

          $(".portfolio-drop").css("position", "relative");

          menuopen = "false";

            $(".portfolio-drop").css("display", "none");

          $("#portfolio").css("color", "black");

          open = "false";

        }

      });

    </script>

  </body>

</html>

