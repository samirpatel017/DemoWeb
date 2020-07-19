<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Lets Make Coding</title>
    <style>
        nav{
            font-size: 20px;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-sticky">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Service.html">Service</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Questions</a>
                        <a class="dropdown-item" href="#">Exam Questions</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Our suggesion</a>
                    </div>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container my-4">
      <h2>Contact Us</h2>
      <!-- <form>
          <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Select your Query</label>
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>Web</option>
                  <option>Tech Stack</option>
                  <option>Technology</option>
                  <option>Others</option>
              </select>
          </div>
          <div class="form-group row">
              <div class="col-sm-2">Are you a Member?</div>
              <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                          Yes
                      </label>
                  </div>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-2">Are you a Professor?</div>
              <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2">
                      <label class="form-check-label" for="gridCheck2">
                          Yes
                      </label>
                  </div>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-2">Are you a Coder?</div>
              <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck3">
                      <label class="form-check-label" for="gridCheck3">
                          Yes
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group">
              <label for="exampleFormControlTextarea1">Tell us about yourself</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea2">Elaborate Your Concern</label>
              <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
          </div>
          <button class="btn btn-primary">Submit</button>
      </form> -->

      <?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $desc=$_POST['desc'];

           
$servername="localhost";
$username="root";
$password="";
$database="samir";
$conn=mysqli_connect($servername,$username,$password,$database);


if (!$conn) {
    die("Sorry We Can not Connect ". mysqli_connect_error()); 
    # code...
}
else{
    echo"Connection waas succsessful <br>";
}
 
$sql="INSERT INTO `contact` ( `name`, `email`, `discription`) VALUES ( '$name', '$email', '$desc');";
$result=mysqli_query($conn,$sql);

if ($result) {
    echo '<div class="alert alert-success text-center" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Your entry has been added succsesfully.</p>
   </div>';
    }
   else{
       echo '<div class="alert alert-danger text-center" role="alert">
    <h4 class="alert-heading">Error!</h4>
       <p>Your entry has not been added succsesfully , Please try after some time.</p>
      </div>';
       
   }
   
    



  }


    ?>
  <div class="container mt-5">
  <form action="/PHP TUT/get-post.php" method="post">
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="desc">Description</label>
    <textarea type="text" class="form-control" name="desc" id="desc"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </div>

  <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>© 2020-2021 iCoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>