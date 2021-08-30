<?php include_once "optionFunction.php";
$numbers = ['One', 'Two', 'Three', 'Four', 'Five'];
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
  <body>

      <div class="container my-5 ">
          <h1 class="text-center text-muted py-3">Select multiple options</h1>

    <h5>Output: </h5>
      <pre>
        <p>
            <?php

            // print_r($_POST);
            // it is for group select only
            $numberArray = $_POST['fruits'];
            if(isset( $numberArray) && count($numberArray)>0){
              echo "You have select: ".join(', ',$numberArray);
            }


              // it is  for single select
        // if(isset($_POST['fruits']) && $_POST['fruits'] != ''){
        //   printf("You have select: %s", $_POST['fruits']);
        // }
        
?>
        </p>
      </pre>





         <div class="fromHandle ml-5">
         <form action="" method="POST" class="form-group">
          <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select name="fruits[]" id="inputState" class="form-control" multiple>
        <option disabled selected>Choose...</option>
          <?php displayOptions($numbers);?>
      </select>
      <button type="submit" value="submit" class="btn mt-4 btn-primary">Submit</button>
          </form>
         </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>