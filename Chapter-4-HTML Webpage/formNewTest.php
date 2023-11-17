<!doctype html>
<html lang="en">
  <head>
    <title>PHP Form Practice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

  </head>
  <body>

  <?php

$fname = $_GET["fname"];
$lname = $_GET["lname"];
$doCheck = "";

if (!empty($fname) and !empty($lname)) {
    $doCheck = " checked";
} else {
    $doCheck = " readonly";
}

?>

    <section id="basickForm">
      <div class="container">
        <h1>This Is Testing PHP Form</h1>

        <div class="outPutDiv">
          <p class="firstName">First Name: <?php echo $fname; ?>  </p>
          <p class="lastName">First Name: <?php echo $lname; ?> </p>

          <p class="allOutPut">
            <?php print_r($_GET)?>
          </p>

        </div>

        <form action="#">
        <div class="singleInput">
        <label for="fname">First Name</label>
          <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
        </div>

        <div class="singleInput">
        <label for="lname">Last Name</label>
          <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
        </div>

        <div class="singleInput">
        <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" <?php echo $doCheck ?> >

    <label class="form-check-label ml-4" for="exampleCheck1">Check me out</label>
  </div>

  <h3 class="fruitCheck my-4">Frouts</h3>

  <div class="singleInput">
        <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="f-1"  name="fruts[]">
    <label class="form-check-label ml-4" for="f-1">Apple</label>
  </div>

  <div class="singleInput">
        <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="f-2" name="fruts[]">
    <label class="form-check-label ml-4" for="f-2">Banana</label>
  </div>

  <div class="singleInput">
        <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="f-3" name="fruts[]">
    <label class="form-check-label ml-4" for="f-3">Goava</label>
  </div>

  <div class="singleInput">
        <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="f-4" name="fruts[]">
    <label class="form-check-label ml-4" for="f-4">Orange</label>
  </div>

  <div class="singleInput">
        <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="f-5" name="fruts[]">
    <label class="form-check-label ml-4" for="f-5">Mango</label>
  </div>

        </div>

        <input type="submit" value="Submit" class="btn btn-primary submitBtn w-25">

        </form>

      </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>