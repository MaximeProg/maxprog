<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "kakpokouassimaxime@gmail.com";
  $subject = "Nouveau message de $name";
  $headers = "De : $email";

  mail($to, $subject, $message, $headers);
  header("location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MaxProg Services</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/media_queries.css">
  <link rel="stylesheet" href="assets/css/animation.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <style type="text/css">
    .about {
      margin-top: 10%;
    }

    /* body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('chemin/vers/votre-image.jpg') center/cover no-repeat;
            color: #fff; /* Couleur du texte, assurez-vous qu'elle contraste bien avec l'image */
    /*  } */

    .containerrr {
      /* font-family: 'Arial', sans-serif; */
      background: url('assets/images/about-img.jpg') center/cover no-repeat;
      color: black;
      max-width: 90%;
      margin: 100px auto;
      padding: 20px;
      background: white;
      /* Couleur de fond avec opacité */
      border-radius: .10rem;
      margin-top: 15%;
      font-size: 18px;
      border: 2px solid whitesmoke;

    }

    h1,
    h2,
    p {
      margin-bottom: 20px;
    }

    h1,
    h2 {
      color: darkblue;
    }

    img {
      width: 100%;
      height: auto;
      border-radius: .8rem;

    }

    .video-section {
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      flex-wrap: wrap;
      background-color: #f0f0f0;
      padding: 20px;
      margin-bottom: 20%;
    }

    .video-container {
      width: calc(33.33% - 20px);
      /* 33.33% width with 20px spacing between videos */
      box-sizing: border-box;
      margin: 10px;
      overflow: hidden;
      text-align: center;
    }

    .video-container video {
      width: 100%;
      height: auto;
      display: block;
      margin: 10px 0;
    }

    .container2 {
      width: 100%;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: white;
    }

    input,
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    .contact {
      margin-bottom: 35%;
    }

    .copy {
      color: white;
      text-align: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: xx-large;
      background-color: navy;
      padding: 15px;
      border: 1px solid navy;
      border-radius: .8rem;
      box-sizing: border-box;

    }
  </style>

</head>

<body>

  <!--
    - main container
  -->

  <div class="container">

    <!--
      - #HEADER
    -->

    <header>

      <nav class="navbar">

        <div class="navbar-brand">
          <img src="assets/images/logomax.png" alt="Cours sonou">
        </div>

        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="#home">Accueil</a>
          </li>
          <li class="nav-item">
            <a href="#about-us">A propos</a>
          </li>
          <li class="nav-item">
            <a href="#categorie">Catégorie</a>
          </li>
          <li class="nav-item">
            <a href="#videos">Vidéos</a>
          </li>
          <li class="nav-item">
            <a href="#contact">Contact</a>
          </li>

        </ul>
        <button class="btn btn-primary">
          <p class="btn-text">MAXPROG SERVICES</p>
          <!-- <span class="square"></span> -->
        </button>

        <button class="nav-toggle-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </nav>

    </header>


    <!--
        - #section max
      -->
    <div class="containerrr" id="about-us">
      <img src="assets/images/about-img.jpg" alt="Maxime kakpo">
      <h1>À Propos de Maxprog</h1>
      <p>Bienvenue sur maxprog.com, votre destination pour des solutions innovantes en développement d'applications web, mobile et desktop. Je suis MaxProg, un passionné de la programmation avec une formation solide en science informatique et logiciel.</p>
      <h2>Qui suis-je?</h2>
      <p>Je suis un développeur expérimenté, spécialisé dans la création d'applications robustes et intuitives pour répondre aux besoins variés de mes clients. Mon parcours académique et professionnel m'a permis de maîtriser une gamme étendue de langages de programmation, de technologies et de frameworks.</p>
      <h2>Pourquoi choisir mes services?</h2>
      <ul>
        <li><strong>Expertise technique:</strong> Fort d'une formation académique rigoureuse et d'une expérience pratique approfondie, je suis capable de concevoir des solutions logicielles efficaces et évolutives.</li>
        <li><strong>Polyvalence:</strong> Que ce soit pour le développement d'applications web, mobiles ou desktop, je suis équipé pour relever tous les défis et apporter des solutions innovantes.</li>
        <li><strong>Engagement envers la qualité:</strong> Je m'efforce constamment d'atteindre l'excellence dans chaque projet, en mettant l'accent sur la qualité du code, l'expérience utilisateur et la sécurité.</li>
      </ul>
      <h2>Ma philosophie</h2>
      <p>Je crois fermement que la technologie peut transformer des idées en réalité. Mon objectif est de collaborer avec vous pour comprendre vos besoins uniques et créer des solutions sur mesure qui dépassent vos attentes.</p>
      <h2>Contactez-moi</h2>
      <p>Si vous êtes prêt à donner vie à vos idées grâce à des solutions logicielles exceptionnelles, n'hésitez pas à me contacter. Je suis impatient de discuter de vos projets et de travailler ensemble pour atteindre vos objectifs.</p>
      <p>Merci de visiter maxprog.com et de considérer mes services pour vos projets de développement.</p>
    </div>

    <!--
        - #COURSE CATEGORY SECTION
      -->

    <section class="category" id="categorie">

      <p class="section-subtitle">Catégories</p>

      <h2 class="section-title"></h2>

      <ul class="course-item-group">

        <li class="course-category-item">

          <div class="wrapper">
            <img src="assets/images/course-category-icon-1.png" alt="category icon" class="category-icon default">

            <img src="assets/images/course-category-icon-1-w.png" alt="category icon white" class="category-icon hover">
          </div>

          <div class="course-category-content">
            <h3 class="category-title">
              <a href="#">Développement des sites web</a>
            </h3>

            <p class="category-subtitle">Nous développons des applications web selon les besoins de nos clients</p>
          </div>

        </li>


        <li class="course-category-item">

          <div class="wrapper">
            <img src="assets/images/course-category-icon-2.png" alt="category icon" class="category-icon default">

            <img src="assets/images/course-category-icon-2-w.png" alt="category icon white" class="category-icon hover">
          </div>

          <div class="course-category-content">
            <h3 class="category-title">
              <a href="#">Développement des applications mobile</a>
            </h3>

            <p class="category-subtitle">Nous développons des applications mobiles selon les besoins de nos clients</p>
          </div>

        </li>


        <li class="course-category-item">

          <div class="wrapper">
            <img src="assets/images/course-category-icon-3.png" alt="category icon" class="category-icon default">

            <img src="assets/images/course-category-icon-3-w.png" alt="category icon white" class="category-icon hover">
          </div>

          <div class="course-category-content">
            <h3 class="category-title">
              <a href="#">Développement des applications desktops</a>
            </h3>

            <p class="category-subtitle">Nous devéloppons des applications desktops selon les besoins de nos clients</p>
          </div>

        </li>




      </ul>

    </section>



    <!-- Section cours -->

    <section class="course" id="course">
      <!-- <p class="section-subtitle">Autres services</p> -->

      <div class="course-grid">

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dev1.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">web</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur2.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>5.0 (2k)</p>
              </div>

            </div>

            <div class="wrapper">


              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>600k</p>
              </div>
            </div>

          </div>

        </div>


        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dev2.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">web.</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur25.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.7 (5k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>545k</p>
              </div>
            </div>

          </div>

        </div>


        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dev3.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">web.</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur24.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.1 (3k)</p>
              </div>

            </div>

            <div class="wrapper">


              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>317k</p>
              </div>
            </div>

          </div>

        </div>


        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dev4.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>
          <h3 class="card-title">
            <a href="#">web</a>
          </h3>

          <div class="course-content">

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur23.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.8 (3.9k)</p>
              </div>

            </div>

            <div class="wrapper">


              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>891k</p>
              </div>
            </div>

          </div>

        </div>



        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dev5.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">web</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur22.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>3.8 (1k)</p>
              </div>

            </div>

            <div class="wrapper">


              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>204k</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dev6.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">web</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur22.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>3.8 (1k)</p>
              </div>

            </div>

            <div class="wrapper">


              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>204k</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dev7.jpg" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">web</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur22.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>3.8 (1k)</p>
              </div>

            </div>

            <div class="wrapper">


              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>204k</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dev8.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">web</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur22.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>3.8 (1k)</p>
              </div>

            </div>

            <div class="wrapper">


              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>204k</p>
              </div>
            </div>

          </div>

        </div>


        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/mb1.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">mobile</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/mb2.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">mobile</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/mb10.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">mobile</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/mb4.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">mobile</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/mb5.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">mobile</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>
        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/mb6.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">mobile</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/mb7.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">mobile</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>
        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/mb8.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">mobile</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>


        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/mb9.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">mobile</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dk2.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">desktop</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>
        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dk3.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">desktop</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>
        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dk4.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">desktop</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dk5.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">desktop</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>
        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dk6.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">desktop</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>
        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dk7.jpg" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">desktop</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>

        <div class="course-card">

          <div class="course-banner">
            <img src="assets/images/dk8.avif" alt="course banner">

            <div class="course-tag-box">
              <a href="#" class="badge-tag orange">Developpement</a>
              <a href="#" class="badge-tag blue">Informatique</a>
            </div>
          </div>

          <div class="course-content">

            <h3 class="card-title">
              <a href="#">desktop</a>
            </h3>

            <div class="wrapper border-bottom">

              <div class="author">
                <img src="assets/images/auteur21.png" alt="course instructor image" class="author-img">

                <a href="#" class="author-name">kakpo kouassi maxime</a>
              </div>

              <div class="rating">
                <ion-icon name="star"></ion-icon>
                <p>4.9 (23k)</p>
              </div>

            </div>

            <div class="wrapper">

              <div class="enrolled">
                <div class="icon-user">
                  <img src="assets/images/student-icon.png" alt="user icon">
                </div>

                <p>1.3M</p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section>

    <div class="video-section" id="videos">
      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (1).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (2).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (3).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (4).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (5).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (6).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (7).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (8).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (9).mp4" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (10).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (11).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (12).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (13).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (14).mp4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="video-container">

        <iframe width="100%" height="315" src="video/vd1 (15).mp4" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>


    <!--
        - #CONTACT
      -->

    <section class="contact">

      <div class="contact-card" id="contact">
        <img src="assets/images/cta-bg-img.png" alt="shape" class="contact-card-bg">

        <h2>MAXPROG PROGRAMMER</h2>

        <div class="container2">
          <h2>Contactez-moi</h2>
          <form id="contactForm" method="post">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
          </form>
        </div>
      </div>

    </section>

    <footer>

      <div class="footer-grid">

        <div class="grid-item">

          <!-- <div class="footer-logo"> -->
          <!-- <img src="../assets/images/logo-footer.png" alt="educator logo white"> -->
          <!-- </div> -->
          <h4 class="item-heading">MAXPROGRAMMER</h4>
          <p class="footer-text">
            Merci d'avoir visiter mon site.<br>
            Vous pouvez nous contacter pour toutes vos préocupations .<br>
            <br>N'oubliez pas de nous soumettre vos idées afin d'avoir une solution informatique de notre part. Nous serons ravie de vous aider tout en transformant vos idées en soluations

          </p>

          <div class="social-link">
            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </div>

        </div>

        <ul class="grid-item">

          <h4 class="item-heading">Menu</h4>

          <li class="list-item">
            <a href="#home">Accueil</a>
          </li>

          <li class="list-item">
            <a href="#about-us">A propos</a>
          </li>

          <li class="list-item">
            <a href="#categorie">Catégorie</a>
          </li>
          <li class="list-item">
            <a href="#videos">Vidéos</a>
          </li>
          <li class="list-item">
            <a href="#contact">Contact</a>
          </li>

        </ul>



        <div class="grid-item">

          <h4 class="item-heading">Followers use</h4>

          <div class="wrapper">
            <li class="list-item">
              <a href="https://www.facebook.com/Maxime Kouassi Kakpo">Facebook</a>
            </li>
            <button class="send-btn">
              <!-- <ion-icon name="paper-plane"></ion-icon> -->
            </button>
            <div class="wrapper">
              <li class="list-item">
                <a href="https://wa.me/0022990037993">Whatsaap</a>
              </li>

              <button class="send-btn">
                <!-- <ion-icon name="paper-plane"></ion-icon> -->
              </button>
              <li class="list-item">
                <a href="https://t.me/0022990037993">Telegramme</a>
              </li>

              <button class="send-btn">
                <!-- <ion-icon name="paper-plane"></ion-icon> -->
              </button>
            </div>

          </div>

        </div>

    </footer>


  </div>
  <p class="copy">MaxProg developpeur Tout droit réservés</p>




  <!--
    - custom js link
  -->
  <script src="assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>