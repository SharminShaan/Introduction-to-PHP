<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in PHP</title>
</head>
<body>
   
    <!--<form action="contact.php" method="POST">
        <label>Username</label><br>
        <input type="text" name="user_name"><br>
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <br>
        <input type="submit" value="Submit Data" name="btn">
    </form>
-->

    <form action="bio.php" method="POST">
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>Phone</label><br>
        <input type="number" name="phone"><br>
        <label>DOB</label><br>
        <input type="date" name="dob"><br>
        <label>Age</label><br>
        <input type="number" name="age"><br>
        <br>
        <input type="submit" value="Submit Data" name="btn">
    </form>
</body>
</html>