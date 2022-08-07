<?php 
include 'con.php';
if(isset($_POST['ok'])){
  $user_name=$_POST['name'];
  $autor=$_POST['pass'];
  $file=$_POST['image'];
  $event_dt=$_POST['event_dt'];
  $q="INSERT INTO `task`( `user_name`, `author` ,`image`,`eventdt`) VALUES ('$user_name','$autor','$file','$event_dt')";
  $query=mysqli_query($con,$q);
  header('location:display.php');

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container">
      <div class="col-lg-6 m-auto">
        <h1>Insert Your data</h1>
            <form method="post" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart_page_binary">
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tittle</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputname3">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputAuthor3" class="col-sm-2 col-form-label">Author Name</label>
                <div class="col-sm-10">
                  <input type="text" name="pass" class="form-control" id="inputAuthor3">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputfile3" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                  <input type="file" name="image" class="form-control" id="inputfile3">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputdate3" class="col-sm-2 col-form-label">Date & Time</label>
                <div class="col-sm-10">
                  <input type="datetime-local" name="event_dt" class="form-control" id="inpudate3">
                </div>
              </div>
              <br>
              <button type="submit" name="ok" class="btn btn-primary form-control">Sign in</button>
            </form>

      </div>
    </div>
    
  </body>
</html>