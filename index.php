<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7ade572a84.js" crossorigin="anonymous"></script>
    <script>
    function includeHTML() {
    var z, i, elmnt, file, xhttp;
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4) {
    if (this.status == 200) {elmnt.innerHTML = this.responseText;}
    if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
    elmnt.removeAttribute("w3-include-html");
    includeHTML();
    }
    }      
    xhttp.open("GET", file, true);
    xhttp.send();
    return;
    }
    }
    };
    </script>
	<title>Notes Management System</title>
  </head>
  <body>
      <br><br><br>
    <main role="main" class="w3-light-gray text-responsive text-style">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators ">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/><img src="images/bg1.jpg" alt=""></svg>
    <div class="container">
    <div class="carousel-caption text-left">
    <h1></h1>
    <p></p>
    <p><a class="btn btn-lg" href="#" role="button"></a></p>
    </div>
    </div>
    </div>
    <div class="carousel-item">
    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/><img src="images/bg2.jpg" alt=""></svg>
    <div class="container">
    <div class="carousel-caption">
    <h1></h1>
    <p></p>
    <p><a class="btn btn-lg " href="#" role="button"></a></p>
    </div>
    </div>
    </div>
    <div class="carousel-item">
    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/><img src="images/bg3.jpg" alt=""></svg>
    <div class="container">
    <div class="carousel-caption text-right">
    <h1></h1>
    <p></p>
    <p><a class="btn btn-lg " href="#" role="button"></a></p>
    </div>
    </div>
    </div>
    </div>
    <a class="carousel-control-prev " href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon w3-black" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon w3-black" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    </div>

<!-- Three columns of text below the carousel -->
    <div class="container marketing ">
    <div class="row ">
    <div class="col-xl-3 col-lg-4 col-md-4 m-xl-5 p-3 text-center  w3-text-dark-gray w3-pale-yellow shadow-lg">
      <img class="rounded-circle" src="images/bg4.jpg" alt="" width="140" height="140">
    <h2 class="heading-border text-style">SGPA Calculator</h2>
    <p><span>&#8220;</span> SGPA or the Semester Grade Point Average is a grading system used in the education sector around the world. It is calculated by dividing the total credit points obtained by the student in one semester by total credit points. <span>&#8221;</span></p>
    <p><a class="btn btn-success "  href="sgpa_calculator.html" role="button">Calculate &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-xl-3 col-lg-4  col-md-4 m-xl-5 p-3 text-center bg-white w3-pale-yellow shadow-lg">
      <img class="rounded-circle" src="images/bg5.jpg" alt="" width="140" height="140">
    <h2 class="heading-border text-style">Upload Notes</h2>
    <p><span>&#8220;</span> Uploading notes is quick and easy. It can take as little bit time to upload notes. It is preferred that the notes are typed or handwritten so that they are accessible to all students and they will also get help by these notes. <span>&#8221;</span></p>
    <p><a class="btn btn-success"  href="upload.php" role="button">Upload &raquo;</a></p>
    </div>
    <div class="col-xl-3 col-lg-4  col-md-4 m-xl-5 p-3 text-center bg-white w3-pale-yellow shadow-lg">
      <img class="rounded-circle" src="images/bg6.jpg" alt="" width="140" height="140">
    <h2 class="heading-border text-style"> Download Notes</h2>
    <p><span>&#8220;</span> Once the notes are uploaded it is more benefical to students that simplest way to keep notes. Light, clean, and free. whenever students want to read or download notes they can easily get notes by using this feature. <span>&#8221;</span></p>
    <p><a class="btn btn-success "  href="sidebar.php" role="button">Download &raquo;</a></p>
    </div>
    </div>
    <!-- START THE FEATURETTES-->
    <hr class="featurette-divider" style="border-color: black;">
    </div>

      <!--Start Contact Us-->
      <div class="container text-style  w3-lime shadow-lg mb-5 pt-2" id="Contact" > <!--Start Contact Us Container-->
      <h2 class="text-center text-style mb-4">Contact US</h2>    <!-- Contact Us Heading -->
      <div class="text-center">           <!--Start Contact Us Row-->
      <div class="">    <!--Start Contact Us 1st Column-->
      <form action="Contactus_data.php" method="post" onsubmit="return validation()">
      <input class="form-control" name="name" id="name" placeholder="Name" /><br />
      <span id="name-error" class="text-danger font-weight-bold"></span>
      <input class="form-control" name="phone" id="phone" placeholder="Phone No" /><br />
      <span id="phone-error" class="text-danger font-weight-bold"></span>
      <input class="form-control" name="email" id="email" placeholder="E-mail" /><br />
      <span id="email-error" class="text-danger font-weight-bold"></span>
      <textarea class="form-control" name="text" id="text" minlength="10" maxlength="500" placeholder="How can we help you?" style="height:150px;"></textarea><br />
      <span id="text-error" class="text-danger font-weight-bold"></span>
      <input class="btn btn-primary" name="submit" id="submit" type="submit" value="Send"/><br /><br />
      </form>
      </div> 
      </div>     
      </div>   
      </main>

      <div w3-include-html="navbar.html"></div>
      <div w3-include-html="footer.html"></div>
      <script>
      includeHTML();
      </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
   
  </body>
</html>