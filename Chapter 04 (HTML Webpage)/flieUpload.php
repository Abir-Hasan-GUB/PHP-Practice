
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
  <body class="container p-5">
      <h5 class="my-4"> Output:</h5>
        <pre>

        <p>
        <?php
$allowedFiles = array(
    'image/png',
    'image/gif',
    'image/jpeg',
);
print_r($_POST);
print_r($_FILES);

//    if ($_File['photo'])
$len = count($_FILES['photo']['name'] ?? []);

if ($_FILES['photo']) {

    for ($i = 0; $i < $len; $i++) {
        if (in_array($_FILES['photo']['type'][$i], $allowedFiles) != false) {
            move_uploaded_file($_FILES['photo']['tmp_name'][$i], "file/" . $_FILES['photo']['name'][$i]);
        } else {
            echo "File format not supported...";
        }

    }

}

?>
        </p>
        </pre>


  <form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input name="lname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
  </div>

  <div class="form-group">
    <label for="file">Photos</label>
    <input name="photo[]" type="file" class="form-control" id="file" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="file">Photos</label>
    <input name="photo[]" type="file" class="form-control" id="file" placeholder="Last Name">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>