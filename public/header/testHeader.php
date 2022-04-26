<?php


require_once "updateState.php";
$URL = $_SERVER['REQUEST_URI'];




if (checkIfURLContains($URL, "public/") || checkIfURLContains($URL, "")) {

  if (checkIfURLContains($URL, "login.php") || checkIfURLContains($URL, "about.php") || checkIfURLContains($URL, "register.php") || checkIfURLContains($URL, "browse-movies.php")) {

    if (loggedIn() == true) {
      returnHeaderInnerLoggedIn();
    } else {
      returnHeaderInner();
    }
  } else if (checkIfURLContains($URL, "moviedetailsview.php")) {

    if (loggedIn() == true) {
      returnHeaderSingleMovieLoggedIn();
    } else {

      returnHeaderSingleMovie();
    }
  } else {
    if (loggedIn() == true) {
      returnHeaderIndexLoggedIn();
    } else {
      returnHeaderIndex();
    }
  }
}



// FUNCTION THAT CHECKS IF THE URL STRING CONTAINS THE FILE NAME
function checkIfURLContains($URL, $filePath)
{
  return str_contains($URL, $filePath);
}


// HELPER FUNCTIONS FOR CREATING HEADERS FOR EACH PAGE

// HEADER FUNCTION FOR LOGIN, REGISTER, AND ABOUT PHP FILES
function returnHeaderInner()
{
  echo '<div class = "header-area">
    <a href="https://comp-3512-w22-team-01.herokuapp.com/index.php" class="nav-logo">
      <img src = "https://cdn-icons-png.flaticon.com/512/705/705062.png" style="width:70px; height:70px;" alt="PopCornlogo">
    </a>
    <ul class="nav-menu">
          <li class="nav-item">
              <a href="../aboutus/about.php" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
              <a href="../login/login.php" class="nav-link">Log In</a>
          </li>
          <li class="nav-item">
              <a href="../register/register.php" class="nav-link">Sign Up</a>
          </li>
          
    </ul>

  <div class="hamburger"> 
      <span class="bar"></span>  
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
  </div>
</div>';
}



// HEADER FUNCTION FOR WHEN ACCESSING SINGLE-MOVIE PHP
function returnHeaderSingleMovie()
{
  echo '
    <div class = "header-area">
              <a href="../../index.php" class="nav-logo">
                <img src = "https://cdn-icons-png.flaticon.com/512/705/705062.png" style="width:70px; height:70px;" alt="PopCornlogo">
              </a>
              <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="../../aboutus/about.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../login/login.php" class="nav-link">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../register/register.php" class="nav-link">Sign Up</a>
                    </li>
                  
              </ul>  
     
            <div class="hamburger">  
                <span class="bar"></span>  
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
      </div>    ';
}

function returnHeaderSingleMovieLoggedIn()
{
  echo '<div class = "header-area-logged">
  <a href="../../index.php" class="nav-logo">
    <img src = "https://cdn-icons-png.flaticon.com/512/705/705062.png" style="width:70px; height:70px;" alt="PopCornlogo">
  </a>
  
  <div class = "account-container">
      <img src= "../../logo/userprofile.png" alt="icon" style="width:35px; height:35px;" >
      <p> Hi, ' . $_SESSION["firstname"] . '<i class="fa fa-caret-down"></i></p>
  
  </div>
  
  <div class ="drop-down" style = "display:none">
     <a href="../../favorites.php" class="nav-link">Favorite Movies</a> <br>
     <a href="../../aboutus/about.php" class="nav-link">About Us</a><br>
    <a href="../../indexLoggingOut.php" id = "logout" class="nav-link" style ="color:#ef3038;">Log out </a>
  </div>
  
  <div class="hamburger" style="display:none;"> 
  <span class="bar"></span>  
  <span class="bar"></span>
  <span class="bar"></span>
  <span class="bar"></span>
  </div>
  
   
  </div>   ';
}

//FUNCTION FOR WHEN ACCESSING BROWSE MOVIES.PHP
function returnHeaderBrowse()
{
  echo '
    <div class = "header-area">
              <a href="../../index.php" class="nav-logo">
                <img src = "https://cdn-icons-png.flaticon.com/512/705/705062.png" style="width:70px; height:70px;" alt="PopCornlogo">
              </a>
              <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="../aboutus/about.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="../login/login.php" class="nav-link">Log Out</a>
                    </li>
                    <li class="nav-item">
                        <a href="../register/register.php" class="nav-link">Sign Up</a>
                    </li>
                    
              </ul>  
     
            <div class="hamburger">  
                <span class="bar"></span>  
                <span class="bar"></span>
                <span class="bar"></span> 
                <span class="bar"></span>
            </div>
      </div>    ';
}


//HEADER FUNCTION FOR WHEN ACCESSING INDEX.PHP
function returnHeaderIndex()
{
  echo '<div class = "header-area">
    <a href="index.php" class="nav-logo">
      <img src = "https://cdn-icons-png.flaticon.com/512/705/705062.png" style="width:70px; height:70px;" alt="PopCornlogo">
    </a>
    <ul class="nav-menu">
          <li class="nav-item">
              <a href="aboutus/about.php" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
              <a href="login/login.php" class="nav-link">Log In</a>
          </li>
          <li class="nav-item">
              <a href="register/register.php" class="nav-link">Sign Up</a>
          </li>
         
    </ul> 

  <div class="hamburger"> 
      <span class="bar"></span>  
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
  </div>
</div>   ';
}


function returnHeaderInnerLoggedIn()
{

  echo '<div class = "header-area-logged">
<a href="../index.php" class="nav-logo">
  <img src = "https://cdn-icons-png.flaticon.com/512/705/705062.png" style="width:70px; height:70px;" alt="PopCornlogo">
</a>

<div class = "account-container">
    <img src= "../logo/userprofile.png" alt="icon" style="width:35px; height:35px;" >
    <p> Hi, ' . $_SESSION["firstname"] . '<i class="fa fa-caret-down"></i></p>

</div>

<div class ="drop-down" style = "display:none">
   <a href="../favorites.php" class="nav-link">Favorite Movies</a> <br>
   <a href="../aboutus/about.php" class="nav-link">About Us</a><br>
  <a href="../indexLoggingOut.php" id = "logout" class="nav-link" style ="color:#ef3038;">Log out </a>
</div>

<div class="hamburger" style="display:none;"> 
<span class="bar"></span>  
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</div>

 
</div>   ';
}

function returnHeaderIndexLoggedIn()
{
  echo '<div class = "header-area-logged">
    <a href="index.php" class="nav-logo">
      <img src = "https://cdn-icons-png.flaticon.com/512/705/705062.png" style="width:70px; height:70px;" alt="PopCornlogo">
    </a>
    
    <div class = "account-container" >
        <img src= "logo/userprofile.png" alt="icon" style="width:35px; height:35px;" >
        <p> Hi, ' . $_SESSION["firstname"] . ' <i class="fa fa-caret-down"></i></p>
 
    </div>
    
    <div class ="drop-down" style = "display:none">
       <a href="favorites.php" class="nav-link">Favorite Movies</a> <br>
       <a href="aboutus/about.php" class="nav-link">About Us</a><br>
      <a href="indexLoggingOut.php" id = "logout" class="nav-link" style ="color:#ef3038;">Log out </a>
    </div>

    <div class="hamburger" style="display:none;"> 
    <span class="bar"></span>  
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
</div>
 
</div>   ';
}
