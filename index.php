<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="comm.css" class="">
    <title>Home</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
  </head>
<body>
  <?php include 'partials/_dbconnect.php';?>
  <?php require 'partials/_nav.php' ?>
  <section class="background firstsection">
      <div class="box-main">
        <div class="firsthalf">
          <h2 style="color: white; font-size: 50px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><i>FOODWAY</i></h2>
          <br>
          <p class="text-big">“One cannot think well, love well, sleep well, if one has not dined well.”</p>
          <br>
          <br>
          <p class="text-small">~ Virginia Woolf</p>
        <div class="buttons">
          <button class="btn"><a href="admin/index.php" target= _blank style = "text-decoration: none; color : white;">Admin Login</a></button>
          <button class="btn" ><a href="contact.html" style = "text-decoration: none; color : white;">contact us</a></button>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
        <div class="secondhalf">
          <img src="img/logoo.jpg" alt="logo">
        </div>
      </div> 
    </section>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <br><br>
        <img src="img/ss1.jpg" style="width: 100%" />
      </div>
      <br><br>  
      <div class="mySlides fade">
        <img src="img/ss2.jpg" style="width: 100%" />
      </div>
  
      <div class="mySlides fade">
        <img src="img/ss3.jpg" style="width: 100%" />
      </div>
  
      <div class="mySlides fade">
        <img src="img/ssss.png" style="width: 100%" />
      </div>
  
      <div class="mySlides fade">
        <img src="img/ss3.jpg" style="width: 100%" />
      </div>
    </div>
    <br />
  
    <div style="text-align: center; padding-bottom: 60px">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

  <!-- Category container starts here -->
  <div class="container my-3 mb-5">
    <div class="col-lg-2 text-center bg-light my-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">     
      <h2 class="text-center">Menu</h2>
    </div>
    
    <div class="row">
      <!-- Fetch all the categories and use a loop to iterate through categories -->
      <?php 
        $sql = "SELECT * FROM `categories`"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['categorieId'];
          $cat = $row['categorieName'];
          $desc = $row['categorieDesc'];
          echo '<div class="col-xs-3 col-sm-3 col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img src="img/card-'.$id. '.jpg" class="card-img-top" alt="image for this category" width="249px" height="270px">
                    <div class="card-body">
                      <h5 class="card-title"><a href="viewPizzaList.php?catid=' . $id . '">' . $cat . '</a></h5>
                      <p class="card-text">' . substr($desc, 0, 30). '... </p>
                      <a href="viewPizzaList.php?catid=' . $id . '" class="btn btn-primary">View All</a>
                    </div>
                  </div>
                </div>';
        }
      ?>
    </div>
  </div>

    <?php require 'partials/_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
</body>
</html>