<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php
        include('checkadminlogin.php');
        require_once('dbConfig/connection.php');
        $q='select * from uploads where file_id is not null';
        $i=1;
        $result=$database->query($q);
    ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">File Name</th>
      <th scope="col">uploaded by</th>
      <th scope="col">Subject</th>
      <th scope="col">view</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if($result->num_rows==0)
    {
  ?>
    <tr>
      <th scope="row" colspan='4'>no records to display</th>
    </tr>
    <?php
    }
    else
    {
        while($row=$result->fetch_assoc())
        {
            ?>
 
            <tr>
                <td><?php  echo $i++   ?></td>
                <td><?php  echo $row['file_name'] ?></td>
                <td><?php  echo $row['uploaded_by_email']   ?></td>
                <td><?php  echo $row['subject']  ?></td>
                <td><a href="https://drive.google.com/file/d/<?php echo $row['file_id'] ?>/preview" target="_blank">view</a></td>
                <td><a href="list_files/deletefromdrive.php?id=<?php echo $row['file_id'] ?>">delete</a></td>
            </tr>
            <?php
        }
    }

?>
  </tbody>
</table>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>