<?php
include "config.php";
if(isset($_POST['submit'])) {
try {

$sql ="INSERT INTO users (firstname, lastname, email, password, gender, city) VALUES (:first, :last, :email, :password, :gender, :city)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':first', $_POST['firstname']);

$stmt->bindParam(':last', $_POST['lastname']);

$stmt->bindParam(':email', $_POST['email']);

$stmt->bindParam(':password', $_POST['password']);

$stmt->bindParam(":gender", $_POST['gender']);

$stmt->bindParam(':city', $_POST['city']);

$stmt->execute();

echo "New record created";
}
catch(PDOException $e) {

    echo "Error: record creation has failed". $e->getMessage();
}
}
?>

<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="Vinport content-width device-with, initial scale-1.9">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.css/bootstrap.min.css" rel="stylesheet">

<title>Registers</title>

<body>
    <div class="container">
    <h1>REGISTER</h1>
    <form method="post" action="">
    <label>FIRST NAME : </label>
   <input type="text" class="form-control" name="firstname">
</div>
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control" name="lastname">
</div>
<div class="form-group">
<label>PASSWORD</label>
<input type="password" class="form-control" name="password">
</div>

<div class="form-group">
<label>E-MAIL</label>
<input type="text" class="form-control" name="email">
</div>

<div class="form-group">
<label>Gender</label>
<div class="custom-control custom-radio">
<input type="radio" name="gender" value="Male"> MALE <br>
<input type="radio" name="gender" value="female">FEMALE
</div>

<div class="form-group">
<label>CITY</label>
<select name ="city" class="form-control">
<option value="">SELECT</option>
<option value="NAGPUR">NAGPUR</option>
<option value="Pune">PUNE</option>
<option value="MUBAI">MUMBAI</option>
<option value="NANDED">NANDED</option>
<option value="AURANGABAD">AURANGABAD</option>
</select>
</div>
<input type="submit" value="submit"class="btn btn primary ">
</form>
</div>
</body>
</html>