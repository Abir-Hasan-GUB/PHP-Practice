<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
error_reporting(E_ALL ^ E_NOTICE);

class Person
{

    // Properties
    public $name;
    public $email;

    // Methods
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
}

$newName = new Person();
$newEmail = new Person();
$newName->setName($_POST["name"]);
$newEmail->setEmail($_POST["email"]);
?>

    <section id="assignment">
        <div class="assignmentBody">
            <h2 class="assignmentTitle">Assignment: 05</h2>

            <div class="userInfo">
              <h3>Name after Submit: <?php
if (isset($_POST["name"])) {
    echo $newName->getName();
} else {
    echo "Please fill the from first...";
}

?></h3>
              <h3>Email after Submit: <?php

if (isset($_POST["email"])) {
    echo $newEmail->getEmail();
} else {
    echo "Please fill the from first...";
}
?></h3>
            </div>

            <form method="POST">
                <div class="singleItem">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Name" required>
                </div>

                <div class="singleItem">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="sumitBtnCtrl">
                    <input type="submit" value="Submit" class="submitBtn">
                    </div>
            </form>

        </div>
    </section>
</body>
</html>