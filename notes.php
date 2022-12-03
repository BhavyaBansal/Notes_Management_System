<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="sidebar.css">
  <script src="https://kit.fontawesome.com/7ade572a84.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .id3 {
      color: #EC7063;
      font-size: 100px;
      margin-bottom: 15px;
    }

    #id5 {
      background-color: #FADBD8;
    }

    @media (max-width: 575.98px) {
      .id3 {
        font-size: 70px;
      }
    }

    @media (min-width: 575.98px) {
      . {
        padding: 3px;
      }
    }

    .example::-webkit-scrollbar {
      display: none;
    }

    .dot {
      height: 50px;
      width: 50px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
    }

    #id1 {
      font-family: 'Archivo Black', sans-serif;
      font-family: 'Cinzel', serif;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <title>Notes Management System</title>
</head>

<body class="example">



  <div class="container-fluid mx-0 px-0">
    <div class=" pt-5 " id="id5">
      <div class="row ml-lg-5">

        <?php

        require_once('google_upload/dbConfig/connection.php');
        session_start();

        if (!isset($_SESSION['email'])) {
          exit;
        }
        $q="select * from uploads where subject='applied physics i'";
        $result=$database->query($q);
        if($result->num_rows==0)
        {
          echo 'there are no notes related to this course we will upload the notes as soon as possible';
        }
        else
        {
        $i=0;
        while($row=$result->fetch_assoc())
        {
          $i++;
          $filename=$row['file_name'];
          $ext = substr(strrchr($filename, '.'), 1);
        ?>




        <div class="col-md-4 col-6 shadow p-2 mb-5 rounded bg-white text-center">
          <figure class="figure"><a href="#" data-toggle='modal' data-target="#<?php echo 'hello'.$i?>"><i class="fa fa-file-pdf-o id3 figure-img img-fluid "></i></a>
            <figcaption class="figure-caption text-center h6"><?php echo strtoupper(basename($row['file_name'],'.'.$ext))?></figcaption>
          </figure>
          <div class="mt-0 mb-0">
            <button class="mx-3 btn btn-warning btn-sm " data-toggle='modal' data-target='#<?php echo 'hello'.$i ?>'>preview</button>
            <a href="https://drive.google.com/uc?id=<?php echo $row['file_id'] ?>&export=download" class=" btn btn-success btn-sm">download</a>
          </div>
        </div>


        <div class="modal fade bd-example-modal-lg" id="<?php echo 'hello'.$i?>" tabindex="-1" role="dialog" aria-labelledby="label<?php echo $row['file_name']?>" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header w3-light-green">
          <h5 class="modal-title" id="label<?php echo $row['file_name']?>"><?php echo basename($row['file_name'],'.'.$ext) ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <iframe src="https://drive.google.com/file/d/<?php echo $row['file_id'] ?>/preview" width="100%" height="480" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
          <?php
        }
      }
      
    
      
          ?>


<div class="modal fade bd-example-modal-lg" id="<?php echo $row['file_name']?>" tabindex="-1" role="dialog" aria-labelledby="label<?php echo $row['file_name']?>" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header w3-light-green">
          <h5 class="modal-title" id="label<?php echo $row['file_name']?>"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <iframe src="https://drive.google.com/file/d/<?php echo $row['file_id'] ?>/preview" width="100%" height="480" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>


      </div>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>