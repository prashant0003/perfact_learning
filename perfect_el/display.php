<?php 
include 'con.php';
if(isset($_POST['ok'])){
  $user_name=$_POST['name'];
  $password=$_POST['pass'];
  $image=$_POST['image'];
  $event_dt=$_POST['event_dt'];
  $q="select * form crudtable";
  $query=mysqli_query($con,$q);

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
      <div class="col-lg-6 m-auto text-center">
        <h1>Diasplay table data</h1>
        <table class="table table-striped table-hover table-bordered">
          <tr class="text-center btn-seconadry">
            <th>S.N</th>
            <th>Tittle</th>
            <th>Author Name</th>
            <th>image</th>
            <th>Date & Time</th>
            <th>Delete</th>
            <th>Update</th>
          </tr>
          <?php 

            include 'con.php';
            
              $q="SELECT * FROM `task`";
              $query=mysqli_query($con,$q);

            while ($res=mysqli_fetch_array($query)) {
              
            
            

          ?>

          <tr>

            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['user_name']; ?></td>
            <td><?php echo $res['author']; ?></td>
            <td>
              <img src="<?php echo "upload/".$res['image']; ?>" width="200px" alt="image">
            </td>
            <td><?php echo $res['eventdt']; ?></td>
            <td><button class="btn btn-danger"><a href="delete.php?id= <?php echo $res['id']; ?>" class="text-white" >Delete </a> </button></td>
            <td><button class="btn btn-primary"><a href="update.php?id= <?php echo $res['id']; ?>" class="text-white"  >Update </a></button></td>
            
            
          </tr>
        <?php  } ?>

        </table>
        
      </div>
    </div>
  </body>
</html>
