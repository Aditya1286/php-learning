<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get and Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Get/Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/adittya/get_post.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_REQUEST['email'];
    $password=$_POST['pass'];
    $phone=$_POST['passd'];
    $gender=$_POST['aa'];
    

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>'.$email.'</strong> You set password is <strong>'.$password.'</strong>
  Number <strong>'.$phone.'</strong> Gender is <strong>'.$gender.'</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
 <div class="container mt-3">
<h1 align="center">Application Form</h1>
 <form  method="post" >
  <fieldset>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="Email1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  <div class="mb-3">
    <label for="passd" class="form-label">Phone Number: </label>
    <input type="Number" class="form-control" id="passd" name="passd">
  </div>
  <div class="mb-3">
    <label for="aa" class="form-label">Gender:  </label>
    <br>
    <input type="radio" name="aa" id="Male" value="Male"><p style="display: inline" >Male</p>
    <input type="radio" name="aa" id="Female" value="Female"><p style="display: inline" >Female</p>
    <input type="radio" name="aa" id="other" value="Other"><p style="display: inline" >Other</p>
  </div>
  <div class="mb-3">
    <label for="a" class="form-label">Hobbies:  </label>
    <br>
    <input type="checkbox" name="abb" ><p style="display: inline">Cricket</p>
    <input type="checkbox" name="ab" ><p style="display: inline">Swimming</p>
    <input type="checkbox" name="abbb" ><p style="display: inline">Dancing</p>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">DOB: </label>
    <input type="Date" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Date: </label>
    <input type="datetime-local" class="form-control" >
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>
 </div>
    </body>
</html>