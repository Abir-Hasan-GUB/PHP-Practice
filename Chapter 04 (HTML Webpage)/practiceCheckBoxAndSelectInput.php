<?php include_once('./testScript.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Practice Part</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <div class="container p-5 m-5">
      <div class="output mb-4">
          <h5 class="text-center">Name: <?php echo $_POST['email'] ?></h5>
          <h5 class="text-center">Password: <?php echo $_POST['password'] ?></h5>
    <h6 class="mb-3">Output:</h6>
    <?php
    print_r($_POST)

    
    ?>
      </div>


  <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input name="checkbox[]" type="checkbox" value="One Out" class="form-check-input" id="exampleCheck1" <?php handleCheckReturen('checkbox', 'One Out'); ?>>
    <label class="form-check-label" for="exampleCheck1">One out</label>
  </div>
  <div class="form-group form-check">
    <input name="checkbox[]" type="checkbox" value="Two Out" class="form-check-input" id="exampleCheck1" <?php handleCheckReturen('checkbox', 'Two Out'); ?>>
    <label class="form-check-label" for="exampleCheck1">Two out</label>
  </div>


  <h5 class="py-4">Select multiple:</h5>
  <h6 class="py-4">You select: <?php joinElement($_POST['select']) ?> </h6>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select name="select[]" class="form-control" id="exampleFormControlSelect1" multiple>
      <?php createSelectElement($elementArray); ?>
    </select>
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