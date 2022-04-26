<?php




$now = date_create("now", new dateTimeZone("America/Edmonton"));
//var_dump($now);
//$dueDate = date_create("2022-04-06 21:00:00", new dateTimeZone("America/Edmonton"));
//2022-03-14 14:39:00.93414

function timeUntilDue($dateTime)
{
  //thanks to https://stackoverflow.com/questions/5906686/php-time-remaining-until-specific-time-from-current-time-of-page-load
  $dueDate = date_create("2022-04-06 21:00:00", new dateTimeZone("America/Edmonton"));
  $until = date_diff($dueDate, $dateTime);
  return $until->format("%a days, %h hours, %i minutes, %s seconds");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PopMovie - About Us</title>
  <script src="../header/js/hamBurgerMenu.js"></script>
  <link href="../header/css/header.css" rel="stylesheet" />
  <script src="../header/js/dropdown.js"> </script>
  <link href="css/aboutus.css" rel="stylesheet" />
  <!-- ANIMATION HREF https://michalsnik.github.io/aos/ -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <div class="bodyContainer">

    <div class="upperPart">
      <?php require "../header/testHeader.php" ?>

      <div class="aboutus" data-aos="fade-right">
        <h1>About Us</h1>
      </div>




    </div>

    <div class="waves">
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
          <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
          <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
      </svg>
    </div>

    <div class="whatIsSite" data-aos="fade-up" data-aos-duration="2000">
      <img src="img/SiteBG.PNG" alt="whatissite">
      <div class="aboutSiteText">
        <h1>What is PopMovie?</h1>
        <P>
          PopMovie is a student project site that acts similar to popular movie streaming sites such as Netflix and Hulu.
          Users can create and register for a PopMovie account to browse and stream their all time favourite movies.
          Click the GitHub icon down below to see our source code for this site!</P>
        <h3 style="margin-top:10px;"><a href="https://github.com/MRU-CSIS-3512-202201-001/asg-2-teamwork-team-a2-01.git" target="_blank"><img class="aboutGit" alt="github" src="img/github.png"></a></h3>
      </div>
    </div>

    <div class="whoAreWe" data-aos="fade-right" data-aos-duration="1500">
      <div class="teamText">
        <h1>Who are we?</h1>
        <P>We are a team of Mount Royal University students who are almost wrapping up our 3rd year in Computer Information Systems. Our team is composed of hard-working and innovative young student developers. Creative ideas and teamwork are being put to use into creating PopMovie for our Web II: Web Application Development class project in Winter 2022.</P>
      </div>
      <img src="img/team.png" alt="team">
    </div>






    <div class="h1Contributors" data-aos="fade-up" data-aos-duration="1500">
      <h1 class="contributorH1">Meet the team</h1>
    </div>

    <div class="contributors">



      <div class="michaelT" data-aos="fade-up" data-aos-duration="2000">


        <img class="michaelImg" src="img/Michael.PNG" alt="michael">
        <div class="memberInfo">
          <h1>Michael Tandyo</h1>
          <h2>Full Stack Developer</h2>
          <h3><a href="https://github.com/michaelt16" target="_blank"><img alt="github" src="img/github.png"></a></h3>
          <p class="michaelText">Hi, I'm Michael and I manage and develop our site's front end and would occasionally lend a helping hand when it comes to back-end.
            My favorite food is ramen!!
          </p>
        </div>

      </div>

      <div class="nateP" data-aos="fade-up" data-aos-duration="2000">

        <div class="memberInfo">
          <h1>Nate Peñas</h1>
          <h2>Front-end Developer</h2>
          <h3><a href="https://github.com/npena535" target="_blank"><img alt="github" src="img/github.png"></a></h3>
          <p class="nateText">Hey there! I am Nate, and I am responsible for directing and developing our team site's front-end.
            A couple fun facts about me is that I avidly play League of Legends, and that I have a lovebird!
          </p>
        </div>
        <img src="img/Nate.png" class="nateImg" alt="nate">


      </div>

      <div class="afilV" data-aos="fade-up" data-aos-duration="2000">


        <img src="img/Afil.PNG" class="afilImg" alt="afil">
        <div class="memberInfo">
          <h1>Afil Vidyasagar</h1>
          <h2>Full Stack Developer</h2>
          <h3><a href="https://github.com/afilv222" target="_blank"><img alt="github" src="img/github.png"></a></h3>
          <p class="afilText">My name is Afil and I am responsible for reviewing front-end and managing back-end. I regularly play Valorant!</p>
        </div>

      </div>

      <div class="noahB" data-aos="fade-up" data-aos-duration="2000">

        <div class="memberInfo">
          <h1>Noah Bockmuehl</h1>
          <h2>Back-end Developer</h2>
          <h3><a href="https://github.com/nbock010" target="_blank"><img alt="github" src="img/github.png"></a></h3>
          <p class="noahText">Heya, I'm Noah and I manage our team site's back-end and make sure that it's functionality works perfectly. You can catch me playing CoD, PUBG, or Hell Let Loose!</p>
        </div>
        <img src="img/Noah.PNG" class="noahImg" alt="noah">


      </div>


    </div>

    <div class="langMarkdown" data-aos="fade-up" data-aos-duration="2000">
      <h1>Web Technologies Used</h1>
      <img src="img/Langmarkdown.PNG" alt="markdown">
    </div>

    <div class="timeStuff" style="margin-top: 10px;padding-bottom:50px;">
      <h3>Current Time (GMT-6)</h3>
      <p><?= $now->format("F j, Y G:i:s") ?></p>
      <h3>Time Until Due</h3>
      <p><?= timeUntilDue($now) ?></p>
    </div>

  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
