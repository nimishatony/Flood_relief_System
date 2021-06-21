<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="registration form.css">
    <title>Registration form</title>
  </head>
  <body>
     
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(8, 104, 104);">
      <h3 class="navbar-brand" style="color: white;">FLOOD RELIEF</h3>
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
    <?php include 'insert.php'; ?>
      <div class="rgtn-container d-flex align-items-center justify-content-center" >
          <form class="form1" action="insert.php" method="POST">
            <h1 class="head2 pt-4">Registration Form</h1>
              <div class="form-group px-3">
                Name:<input type="text" class="form-control" placeholder="Enter your Name" name="t1">
              </div>
              <div class="form-group px-3">
                Address:<textarea rows="3" class="form-control" name="t2"></textarea>
              </div>
              <div class="form-group px-3">
                Gender:&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="t3" value="male">Male&nbsp;&nbsp;
                       <input type="radio" name="t3" value="female">female
              </div>
              <div class="form-group px-3">
                Age:<input type="text" class="form-control" placeholder="Enter your Age" name="t4">
              </div>
              <div class="was-validated">
                  <div class="form-group px-3">
                    Phone Number:<input type="text" class="form-control" id="uname" placeholder="Enter your phone number" name="t5" required>
                    <div class="invalid-feedback">Please fill out your phone number</div>
                </div>
                </div>    
                <div class="was-validated ">
                    <div class="form-group px-3">
                      Email:<input type="text" class="form-control" id="uname" placeholder="Enter your email address" name="t6" required>
                      <div class="invalid-feedback">Please fill your email.</div>
                    </div>
                  </div> 
                  <div class="was-validated">
                    <div class="form-group px-3">
                      Select the Services that you can do:<br><br>
                        <input type="checkbox" name="ch[]" value="Relief camp">&nbsp;&nbsp;In Relief camp<br>
                        <input type="checkbox" name="ch[]" value="Emergency">&nbsp;&nbsp;Emergency Situations(males only)<br>
                        <input type="checkbox" name="ch[]" value="Cleaning">&nbsp;&nbsp;Home Cleaning after flood<br>
                        <input type="checkbox" name="ch[]" value="Delivery">&nbsp;&nbsp;Deliver Goods in the Relief Camps<br>
                        <div class="invalid-feedback">Please fill your email.</div>
                    </div>
                </div>
              <div class="butn px-3">
                <button type="submit" class="btn btn-primary px-5" name="submit">Submit</button>
              </div>
              
          </form> 
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>