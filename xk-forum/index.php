<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Welcome to XK forum - tech forum</title>
  <style>
    .carousel-item {
      height: 60vh !important;
    }

    .card img {
      height: 191px;
    }
  </style>
</head>

<body>
  <?php include 'partials/_header.php'; ?>
  <?php include 'partials/_dbconnect.php'; ?>

  <!-- slider starts here -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/random/400X500/?apple,code" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/random/400X500/?programmer,microsoft" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/random/400X500/?code,java" class="d-block w-100 img-fluid" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Category container starts here -->
  <div class="container my-3">
    <h2 class="text-center">Welcome to iDiscuss - Categories</h2>
    <div class="row my-4 gy-5">

    <!-- fetch all the categories  -->
    <?php

      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        //  echo $row['category_id'];
        //  echo $row['category_name'];
        $cat = $row['category_name'];
        $desc = $row['category_description'];
        echo ' <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="https://source.unsplash.com/random/400X500/?' .$cat. ',coding" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">' .$cat. '</h5>
            <p class="card-text">' . substr($desc, 0, 90). '... </p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>';
      }
    
    ?>
      <!-- Use a for loop to iterate through categories  -->
     


    </div>
  </div>

  <?php include 'partials/_footer.php'; ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>