
<?php
$movieName = $_GET["movieName"];
$movieStar = $_GET["movieStar"];
$movieYear = $_GET["movieYear"];
 //localhost/movies.php?movieName=Avengers&movieStar=IronMan&movieYear=2019

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>workshopPHP</title>
</head>
<body>
    <h1> <strong>Information about <?php echo $movieName?>
</strong></h1>
     <p>based on the input, here is the information so far: <br>
     <?php echo $movieStar ;?> starred in the movie <?php echo $movieName; ?> which was released in year <?php echo $movieYear;?> </p>
</body>


</html>