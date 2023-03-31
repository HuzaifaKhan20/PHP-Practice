<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Practice 14-Dec-22</title>
  </head>
  <body>
  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Connecting to database 
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'formpractice';

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die('Failed to connect') . mysqli_connect_error();
    }
    else{
        $sql = "INSERT INTO `formpracticetable` (`name`,`email`,`comment`,`datetimer`) VALUES ('xk', '$email', '$comment', current_timestamp())";

        $result = mysqli_query($conn, $sql);

        if(!$result){
          echo 'Data not inserted in db' . mysqli_error($conn);
        }
        else {
          echo 'Data has been successfully inserted in db';
        }
    }


  }

  ?>
    <div class="container mt-5">
    <form action="/xkphpt/Starting/form-practice.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email"  id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>