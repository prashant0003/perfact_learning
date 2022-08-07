<?php 
$connect= new PDO("mysql:host=localhost;dbname="perfect","root","");
$slug="";
if(isset[$_POST('ok')]){
  $slug=preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($_POST['tittle'])));
  $query="SELECT slug_url FROM slug WHERE slug_url LIKE $slug%'' ";
  $statement=$connect->($query);
  if($statement->excute()){
    $total_row=$statement->rowCount();
    if($total_row > 0){
      $result=$stament->fetchAll();
      forEach($result as $row){
        $data[]=$row['slug_url'];
      }
      if(in_array($slug,$data)){
        $count=0;
        while(in_array( ('$slug'.'-'.++$count),$data));
        $slug=$slug.'_'.$count;
      }
    }
  }
  $insert_data=array(
    ':slug_tittle' => $_POST['tittle'], 
    ':slug_url' => $slug 
  );
  $query = "INSERT INTO slug( slug_tittle, slug_url) VALUES (:slug_tittle, :slug_url)";
  $stament=$connect->prepare($query);
  $stament=execute($insert_data);

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
    <form>
      <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Enter tittle for Slug </label>
                <div class="col-sm-10">
                  <input type="text" name="tittle" class="form-control" id="inputname3">
                </div>
              </div>
              <button type="submit" name="ok" class="btn btn-primary form-control">Submit</button>
    </form>
    <h4>GEnerate slug - <?php  echo $slug; ?></h4>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>