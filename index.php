<!-- <?php
echo "Hellow Backend file is running ";
$name = "ali ahmed";
$email = "aliahmed@gmail.com";
$status = "frontend developer"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>name: <?php echo $name ?></h2>
    <h5>email <?php echo $email ?></h5>
    <h5>status <?php echo $status ?></h5>
</body>
</html> -->

<?php 
$user1 = ["ali","ali@gmail.com","frontend developer"];
$user2 = ["ahmed","ahmed@gmail.com","frontend developer"];
$user3 = ["ammar","ammar@gmail.com","backend"];
$user4 = ["abdullah","abdullah@gmail.com","all rounder"];


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>


        <div class="container p-3">
            <div class="content p-3 bg-secondary row d-flex justify-content-center align-items-center">

                <div class="card m-3 p-3 text-center" style="width: 14rem;">
                        <h3><b><u>USER-1</u></b></h3>
                        <br>
                        <p>Name: <b><?php echo $user1[0]?></b></p>
                        <p>Email: <b><?php echo $user1[1]?></b></p>
                        <p>Status: <b><?php echo $user1[2]?></b></p>
                </div>

                <div class="card m-3 p-3 text-center" style="width: 14rem;">
                        <h3><b><u>USER-2</u></b></h3>
                        <br>
                        <p>Name: <b><?php echo $user2[0]?></b></p>
                        <p>Email: <b><?php echo $user2[1]?> </b></p>
                        <p>Status: <b><?php echo $user2[2]?> </b></p>
                </div>

                <div class="card m-3 p-3 text-center" style="width: 14rem;">
                        <h3><b><u>USER-3</u></b></h3>
                        <br>
                        <p>Name: <b><?php echo $user3[0]?> </b></p>
                        <p>Email: <b><?php echo $user3[1]?> </b></p>
                        <p>Status: <b><?php echo $user3[2]?></b></p>
                </div>

                <div class="card m-3 p-3 text-center" style="width: 14rem;">
                        <h3><b><u>USER-4</u></b></h3>
                        <br>
                        <p>Name: <b><?php echo $user4[0]?> </b></p>
                        <p>Email: <b><?php echo $user4[1]?> </b></p>
                        <p>Status: <b><?php echo $user4[2]?> </b></p>
                </div>
                


            </div>
        </div>

 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>