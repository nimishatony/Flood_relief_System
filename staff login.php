<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="staff login.css">
    <title>Staff Login</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255, 253, 253);">
            <h3 class="navbar-brand" style="color: black;">FLOOD RELIEF</h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tips.php">Safty Tips</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Emergency Contacts
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="emergency.php">Help Lines</a>
                    <a class="dropdown-item" href="reliefcamp.php">Relief Camp</a>
                  </div>
                </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="registration form.php">Registration</a>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="admin login.php">Admin</a>
                      <a class="dropdown-item" href="staff login.php">Staff</a>
                    </div>
                  </li>
              </ul>
            </div>
          </nav>

     <section class="form">
        <div class="container">
           <div class="row no-gutters">
             <div class="col-lg-6">
                  <img src="img7.jpg" class="img-fluid" alt="picture">
             </div>
             <div class="col-lg-4 px-5 py-5" >
              <form>
                    <h1 class="font-weight-bold pt-5">
                        STAFF LOGO</h1>
                    <p class="para">You must be a staff in flood relief camp to login<br><br>Sign into your account</p>
                  <div class="form-row">  
                        <div class="col-lg-3">
                              <input type="text" placeholder="Username" class="form-control my-3 p-4">
                        </div>
                  </div>      
                  <div class="form-row">  
                        <div class="col-lg-3">      
                              <input type="password" placeholder="password" class="form-control my-3 p-4 ">
                        </div>
                  </div>
                  <div class="form-row">
                        <div>
                              <button type="button" class="btn1">Login</button>   
                        </div>                  
                  </div>      
             </form>
             </div>
            </div>
       </div>
    </section>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>