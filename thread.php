<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Forum Website</title>
</head>

<body>
    <?php include 'partial/_header.php'; ?>
    <!-- connection to the database -->
    <?php include 'partial/_dbconnect.php'; ?>
    <?php  
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id = $id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        $name = $row['thread_title'];
        $desc = $row['thread_description'];
    }
    ?>
    <!-- fecth the categories -->
    <div class="container my-3">
        <!-- Added a jumbtron -->
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $name; ?></h1>
            <p class="lead"><?php echo $desc; ?></p>
            <hr class="my-4">
            <!-- <p>Please use this forum without any violence</p> -->
            <p><b>Posted by: Dev</b></p>
        </div>
    </div>

    <!-- Added a media object -->


    <div class="container">
        <h2>Discussion</h2>



        <!-- <?php  
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)){
        $noResult = false; 
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_description'];
    
        echo '<div class="media my-3">
            <img src="imgs/user.png" width="35px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0"><a href="#">'.$title .'</a></h5>
                '. $desc.'
            </div>
        </div>
        <hr>';
     }
     if($noResult){
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">No Questions ??</h1>
          <p class="lead"><b>Be the first person to ask the question</b></p>
        </div>
      </div>';
        }
     ?>  -->
    </div>







    <?php include 'partial/_footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>