if(isset($_POST['btn'])){
    $username =$_POST['user_name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $id =$_POST['id'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <main>
        <form action="id.php" method="post">
            <h1>Create Your Virtual ID Card</h1>
            <!--name field-->
            <div class="form-field">
                <label for="field" class="label--required">Name</label>
                <section>
                    <input name ="std_name" id="field" required type="text" placeholder="Jane Doe">
                </section>
            </div>
            <!--phone field-->
            <div class="form-field">
                <label for="phone" class="label--required">Phone</label>
                <section>
                    <input name="std_phone" id="phone" required type="tel" placeholder="(234) 234-2342342">
                </section>
            </div>
            <!--email field-->
            <div class="form-field">
                <label for="email" class="label--required">Email</label>
                <section>
                    <input name="std_email" id="email" required type="email" placeholder="Email">
                </section>
            </div>
            <!--course field-->
            <div class="form-field">
                <label for="course" class="label--required">Course</label>
                <section>
                    <input name="std_course" type="text" placeholder="Name of Your Course">
                </section>
            </div>
            <!--batch field-->
            <div class="form-field">
                <label for="course" class="label--required">Batch No</label>
                <section>
                    <input name="std_batch" type="text" placeholder="Your Batch No">
                </section>
            </div>
            <!--buttons-->
            <div class="form-buttons">
                <input name="generate-btn" type="submit" class="a-btn--field" value="Generate ID"></input>
            </div>
        </form>
    </main> 
</body>
</html>