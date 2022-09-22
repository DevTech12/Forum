 <?php 
 session_start();
 echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/Forum">Forum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="/Forum">Home <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="about.php">About</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categaries
         </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
         </div>
        </li>
       <li class="nav-item">
        <a class="nav-link" href="contact.php" tabindex="-1"">Contact</a>
       </li>
     </ul>
     <div class="row mx-2">';

      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo '<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <p class="text-light my-0 mx-3">Welcome ' .$_SESSION['username']. '</p>
        <a href="partial/_logout.php" class="btn btn-success ml-1">
         Log Out
      </a>
       </form>';
      }
      else {
     echo '<form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> 
      <button class="btn btn-success ml-2" data-toggle="modal" data-target="#loginModal">
         Login
      </button>
      <button class="btn btn-success mx-2" data-toggle="modal" data-target="#signupModal">
         SignUp
      </button>';
      }

 echo '</div>
  </div>
</nav>';

include 'partial/_loginModal.php';
include 'partial/_signupModal.php';
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your Forum account is successfully created.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
// else {
//   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//   <strong>Error!</strong> You are signing up with an existing account. Please login to continue your discussion
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';
// }
?>