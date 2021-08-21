<?php 
include_once "fromCheckedControl.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    .form {
      width: 75%;
      margin: 0 auto;
      margin-top: 5%;
    }
  </style>
  <body>

  <div class="container form">
    <h1 class="text-muted text-center">Our First Form</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit itaque quam sint saepe nostrum, inventore eius minima quisquam temporibus beatae explicabo ipsum facere consectetur voluptates.</p>
    <div class="nameDisplay text-center">
      <?php if (isset($_REQUEST['firstName']) && !empty($_REQUEST['firstName'])): ?>
        <p class="h6 text-primary">
          First Name: <?php echo htmlspecialchars($_REQUEST["firstName"]); ?> <br>
        <?php endif;?>

      

        <?php if (isset($_POST['lastName']) && !empty($_POST['lastName'])): ?>
        Last Name: <?php echo $_POST["lastName"]; ?>
        <?php endif;?>
        </p>

        <p>
          <?php
            
            print_r($_REQUEST);
          ?>
        </p>
    </div>
  <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name="firstName" placeholder="Enter First name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" name="lastName" class="form-control" id="" placeholder="Last Name">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="fruits[]" value="Brinjal" <?php fromCheckedControl('fruits', 'Brinjal') ?> />
    <label class="form-check-label" for="exampleCheck1">Brinjal </label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="fruits[]" value="Coconat" <?php fromCheckedControl('fruits', 'Coconat') ?>/>
    <label class="form-check-label" for="exampleCheck1">Coconat </label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck2" name="fruits[]" value="Tomatoa" <?php fromCheckedControl('fruits', 'Tomatoa') ?>/>
    <label class="form-check-label" for="exampleCheck1">Tomata</label>
  </div>

  <h6>Check another fruits: </h6>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck2" name="fruits[]" value="orange"  <?php fromCheckedControl('fruits', 'orange') ?>>
    <label class="form-check-label" for="exampleCheck2" >Orange</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="fruits[]" value="Bannana" id="exampleCheck3" <?php fromCheckedControl('fruits', 'Bannana') ?>>
    <label class="form-check-label"  for="exampleCheck3">Bannana</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="fruits[]" value="Apple" id="exampleCheck4" <?php fromCheckedControl('fruits', 'Apple') ?>>
    <label class="form-check-label" for="exampleCheck4">Apple</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>