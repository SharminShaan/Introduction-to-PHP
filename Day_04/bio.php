<?php
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
    }

?>
<h2>Name~ <?php if(isset($name)){
        echo $name;
    } ?></h2>
<h2>Email~ <?php if(isset($email)){
    echo $email;
}?></h2>
<h2>Phone~ <?php if(isset($phone)){
    echo $phone;
} ?></h2>
<h2>DOB~ <?php if(isset($dob)){
    echo $dob;
} ?></h2>
<h2>Age~ <?php if(isset($age)){
    echo $age;
} ?></h2>