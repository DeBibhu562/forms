<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Welcome to iDiscuss - Coding Forums</title>
  <style>
        #ques {
            min-height: 433px;
        }
    </style>
</head>

<body>

  <?php include 'partials/_header.php'; ?>
  <?php include 'partials/_dbconnect.php'; ?>

  <!-- Slider starts here -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <!-- https://source.unsplash.com/1600x700/?code,developer -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/photo-1.jpeg" class="d-block w-100 h-75"  id="0" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/photo-2.jpeg" class="d-block w-100" id="1" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/photo-3.jpeg" class="d-block w-100" id="2" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div>

  <!-- Category container starts here -->
  <div class="container my-3" id="ques">
    <h2 class="text-center my-3">iDiscuss - Browse Categories</h2>
    <div class="row mb-3 mx-auto">
      <!-- Fetch all catagory here -->
      <?php
      
      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);  
      while($row=mysqli_fetch_assoc($result)){

        $id = $row["category_id"];
        $cat = $row["category_name"];
        echo '<div class="col-md-4 mx-auto my-3">
        <div class="card" style="width: 16rem;">
          <img src="https://source.unsplash.com/500x400/?'.$cat.',coding" class="card-img-top" alt="...">
          <div class=" card-body">
            <h5 class="card-title"><a href="threadlist.php?catid='.$id.' ">'.$cat.'</a></h5>
            <p class="card-text text-justify" style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3; max-height: 9.5ch;">'.substr($row['category_description'], 0,90).'...</p>
            <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Thread</a>
          </div>
        </div>
      </div>';
      };
      ?>
      
    </div>
  </div>

  <?php include 'partials/_footer.php'; ?>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</body>

</html>