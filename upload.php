<?php
session_start();
 ?>
 <?php
if (isset($_SESSION['email']))
{
?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="upload.css">
    <script src="https://kit.fontawesome.com/7ade572a84.js" crossorigin="anonymous"></script>
    <script>
      function includeHTML() {
      var z, i, elmnt, file, xhttp;
      /*loop through a collection of all HTML elements:*/
      z = document.getElementsByTagName("*");
      for (i = 0; i < z.length; i++) {
      elmnt = z[i];
      /*search for elements with a certain atrribute:*/
      file = elmnt.getAttribute("w3-include-html");
      if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4) {
      if (this.status == 200) {elmnt.innerHTML = this.responseText;}
      if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
      /*remove the attribute, and call this function once more:*/
      elmnt.removeAttribute("w3-include-html");
      includeHTML();
      }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
      }
      }
      };
      </script>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
    form.addEventListener('submit', function (event) {
    if (form.checkValidity() === false) {
    event.preventDefault()
    event.stopPropagation()
    }
    form.classList.add('was-validated')
    }, false)
    })
    }, false)
    }())
    </script>
    <!-- Custom styles for this template -->
  </head>

  <body id="background">
    <br><br>
    <datalist id="faculty" >
    <option>Engineering</option>
    <option>Technical</option>
    <option>Science</option>
    <option>Education</option>
    <option>Commerce</option>
    <option>Social Science</option>
    <option>Arts</option>
    <option>Ayush</option>
    </datalist>
    <datalist id="semester" >
    <option>semester1</option>
    <option>semester2</option>
    <option>semester3</option>
    <option>semester4</option>
    <option>semester5</option>
    <option>semester6</option>
    <option>semester7</option>
    <option>semester8</option>
    </datalist>
    <div class="container mt-5  col-lg-6 shadow-lg p-3 mb-5 rounded" id="form" >

    <div class=" text-center">
    <h3 class="id1">Upload Form</h3>
    </div>

    <div class="container col-lg-10"  >
    <div class=" ml-lg-auto mr-lg-auto">
      <form class="needs-validation " novalidate method="POST" enctype="multipart/form-data" action="uploadprocess.php">
    <div class="mb-3 ">
    <label class="id1">Faculty:</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"></span>
    </div>
    <input list="faculty" class="text-style form-control "  placeholder="Enter Your Faculty" name="faculty" required>
    <div class="invalid-feedback" style="width: 100%;">
    Your faculty is required.
    </div>
    </div>
    </div>

    <div class="mb-3">
    <label class="id1">Course:</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"></span>
    </div>
    <input type="text"  class="form-control  text-style"  placeholder="Enter Your Course" name="course" required>
    <div class="invalid-feedback" style="width: 100%;">
    Your course is required.
    </div>
    </div>
    </div>


    <div class="mb-3">
    <label class="id1">Branch:</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"></span>
    </div>
    <input type="text" class="form-control  text-style" placeholder="Enter Your Branch" name="branch" required>
    <div class="invalid-feedback" style="width: 100%;">
    Your Branch is required.
    </div>
    </div>
    </div>

    <div class="mb-3">
    <label class="id1">Semester:</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"></span>
    </div>
    <input list="semester" class="form-control text-style" placeholder="Enter Your Semester" name="semester" required>
    <div class="invalid-feedback" style="width: 100%;">
    Your Semester is required.
    </div>
    </div>
    </div>

    <div class="mb-3">
      <label class="id1">Subject:</label>
      <div class="input-group">
      <div class="input-group-prepend">
      <span class="input-group-text"></span>
      </div>
      <input type="text" class="form-control text-style" placeholder="Enter Your Subject" name="subject" required>
      <div class="invalid-feedback" style="width: 100%;">
      Your Subject is required.
      </div>
      </div>
      </div>

    <div class="mb-3">
    <label class="id1">Upload:</label>
    <div class="input-group-prepend">
    </div>
    <input type="file" class="" name="file[]" required multiple>

    <div class="invalid-feedback" style="width: 100%;">
    Upload Files is required.
    </div>
    </div>
    </div>



    <hr class="mb-4">
    <button class="mb-3 btn btn-primary btn-lg btn-block id1" name="upload" type="submit" value="submit">Upload</button>
    </form>
    </div>
    </div>

    </div>

    
<!-- section for file uploading message from server -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <?php
              if(isset($_SESSION['err_msg']))
              {
                echo "Status";
              }
            ?>
        </h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
          if(isset($_SESSION['err_msg']))
          {
            echo $_SESSION['err_msg'];
          }
         
              ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- section finish -->

    <div w3-include-html="navbar.html"></div>
    <div w3-include-html="footer.html"></div> 
  <script>
  includeHTML();
  </script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
       <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
         <script src="form-validation.js"></script></body>
 </html>
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">
             <h3 style="color: red;">Error!!</h3>
         </h5>
         <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <h4>Please Login first!!</h4>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
 
 
 
 <?php
   }
   else 
   {  
  // echo "<script>alert('Please Login First!!!')</script>";   
     // include('index.php');
     include('upload_error.html');
   }
 ?>
 
 
 <?php
 if(isset($_SESSION['err_msg']))
 {
   ?>
    <script>
           $('#exampleModal').modal();
     </script>
   <?php
   unset($_SESSION['err_msg']);
 }
 ?>