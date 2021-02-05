<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COMME des GARÇONS parfums</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/css/simple-lightbox.min.css">
  <link rel="stylesheet" href="src/css/style.css">
</head>

<!-- Navigation -->

<body id="home">
  <nav class="navbar">
    <div class="container">
      <div class="logo"><img src="src/img/logo.png" alt="COMME des GARÇONS parfums">
      </div>
      <ul class="nav">
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#gallery">Gallery</a></li>
      </ul>
    </div>
  </nav>

<!-- Section A -->

    <section class="section-a">
      <div class="container">
        <div class="left">
          <img src="src/img/rouge_bottle.png" alt="Rouge bottle">
        </div>
        <div class="right">
          <div class="rouge-header">
            <h1>ROUGE</h1>
            <h3>COMME des GARÇONS</h3>
          </div>
          <div class="rouge-description"></div>
            <p>RELIGIOUS FERVOUR AND EARTHEN REALITY <br>
              THE TRANSCENDENTAL AND THE TERRESTRIAL.</p>
              <a href="https://shop.doverstreetmarket.com/comme-des-garcons/parfums/comme-des-garcons-rouge-eau-de-parfum-100ml-natural-spray" 
                class="btn">Buy now at the DSM
              </a>
        </div>
      </div>
    </section>

<!-- Section B -->

    <section class="section-b" id="about">
      <h2>ROUGE, Eau de parfum</h2>
      <div class="container">
        <div class="left">
          <p>The transcendental & terrestrial. A ceremonial clash of contrasts. A radical revelation of blazing harmonies Associations of the colour rouge seen and subverted through the distinctly disruptive gaze of COMME des GARÇONS.</p>
          <ul>
            <li>BRIGHT: Crushed clusters of spicy sweet pink peppercorns. The enlightening intensity of Indonesian ginger.</li>
            <li>FRESH: Earthen emissions from fresh sliced beetroot. Egyptian Geranium leaves, minty and metallic.</li>
            <li>DEEP: The resinous romance of sticky incense. Woody patchouli dosed with the aromatic amber of cistus.</li>
          </ul>
        </div>
        <div class="right">
          <img src="src/img/bottle_box.png" alt="Rouge bottle">
        </div>
      </div>
    </section>

<!-- Section C -->

    <section class="section-c" id="gallery">
      <div class="container">
      <div class="gallery">
        <a href="src/img/by_hemingway.jpg" class="big">
          <img src="src/img/by_hemingway.jpg" alt="Rouge by Jordan Hemingway">
        </a>

        <a href="src/img/with_bg.jpg" class="big">
          <img src="src/img/with_bg.jpg" alt="Rouge bottle photo with woman face">
        </a>

        <a href="src/img/woman_face.jpg" class="big">
          <img src="src/img/woman_face.jpg" alt="Rouge bottle photo with woman face">
        </a>

        <a href="src/img/Rouge_box.jpg" class="big">
          <img src="src/img/Rouge_box.jpg" alt="Rouge box">
        </a>

        <a href="src/img/in_red1.jpg" class="big">
          <img src="src/img/in_red1.jpg" alt="Rouge bottle in red 1">
        </a>

        <a href="src/img/in_red2.jpg" class="big">
          <img src="src/img/in_red2.jpg" alt="Rouge bottle in red2">
        </a>

        <a href="src/img/in_red3.jpg" class="big">
          <img src="src/img/in_red3.jpg" alt="Rouge bottle in red 3">
        </a>
      </div>
    </div>
    </section>

<!-- Footer -->

    <footer class="section-footer">
      <div class="container">
        <div>
          <h3>Terms of Service</h2>
          <p>I Don't Belong to CDG Company. If You Are Interested In Their Products, Better Check Official Pages of CDG perfumery</p>
          <a href="https://www.comme-des-garcons-parfum.com/"><img src="src/img/CDG_icon.png" alt="COMME des GARÇONS"></a>
          <a href="https://www.instagram.com/commedesgarconsparfums/"><img src="src/img/instagram_icon.png" alt="Instagram icon"></a>
        </div>
        <div>
          <h3>Here You  Can Find Me</h3>
          <ul>
            <li><a href="mailto:orgnitro@gmail.com">Email Me</a></li>
            <li><a href="https://github.com/orgnitro">My Github Page</a></li>
            <li><a href="https://www.linkedin.com/in/orgnitro/">My LinkedIn Accout</a></li>
          </ul>
        </div>
        <div>
          <h3>Subscribe</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio?</p>
          
          <?php 
            $Msg = "";
            if(isset($_GET['error'])) 
            {
              $Msg = "Please fill in the blanks";
              echo '<div class="alert">'.$Msg.'</div>';
            }

            if(isset($_GET['success']))
            {
              $Msg = " Your message has been sent ";
              echo '<div class="success">'.$Msg.'</div>';
            }
          ?>

          <form method="POST" action="contactform.php">
            <div class="email-form">
              <span class="form-control-wrap">
                <input type="text" name="name" placeholder="Your name" size="40">
                <input type="email" name="email" size="30" placeholder="Enter email">
              </span>
              <button type="submit" class="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.17.2/simple-lightbox.min.js"></script>
  <script>
    $(function() {
        const $gallery = $('.gallery a').simpleLightbox();
      });
  </script>
</body>
</html>
