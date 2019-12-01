<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>HOA Home-Owner Page</title>

    <script type="text/javascript" src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>

    <link rel="stylesheet" type="text/css" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
  </head>
<body>





  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">  
    <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> <!-- What is this image trying to point to? this url does not exist in this directory... -->
  </a></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="../index.php">HOME <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="./index.php">NEW REQUEST</a>
      <a class="nav-item nav-link" href="../ReceivedRequests/index.php">RECEIVED REQUESTS</a>
      <a class="nav-item nav-link" href="#">BUILDING MAINTENANCE</a>
      <a class="nav-item nav-link" href="#">CALENDAR</a>
      <a class="nav-item nav-link" href="../contact/index.php">CONTACT</a>
     
    </div>
  </div>
</nav>






<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">HO New Request</h1>
            <p class="lead">This is where to make a new request</p>
        </div>
    </div>






<h1> New Request </h1>




<div class="form-group">
    <label for="exampleFormControlSelect1">Type:</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>(I forgot what our types were)</option>
      <option>placeholder 2</option>
      <option>placeholder 3</option>
      <option>placeholder 4</option>
      <option>placeholder 5</option>
    </select>
  </div>



<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 

<div class="form-group">
    <label for="exampleFormControlSelect1">Where:</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>(I forgot the locations)</option>
      <option>In my appartment</option>
      <option>In the hall</option>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Urgency:</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Very urgent</option>
      <option>Somewhat urgent</option>
      <option>Not very urgent</option>
    </select>
  </div>



<form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Images</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>


<button type="button" onclick="window.location.href = '../ConfirmedRequest/index.php';" >Submit</button>


<a class="btn btn-primary" href="#" role="button">Link</a>
<button class="btn btn-primary" type="submit">Button</button>
<input class="btn btn-primary" type="button" value="Input">
<input class="btn btn-primary" type="submit" value="Submit">
<input class="btn btn-primary" type="reset" value="Reset">

<<div class="row">
        <a  href="../ConfirmedRequest/index.php" class="col-sm btn btn-lg bg-primary" href="./ReceivedRequests/index.php">Submit Request</a>
<div class="col-sm-1"></div>



</body>
</html>
