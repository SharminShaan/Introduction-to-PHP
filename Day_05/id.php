<?php 
    if(isset($_POST['generate-btn'])){
      $name = $POST['std_name'];
      $phone = $POST['std_phone'];
      $email = $POST['std_email'];
      $course = $POST['std_course'];
      $batch = $POST['std_batch'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="id.css">
  <title>Identity Card PHP</title>
</head>
<body>
  <body class='bg-grid-line'></body>
  <div class='card'>
    <header>
      <h1>Datapark SID</h1>
    </header>
      <article>
        <img src="" alt="">
        <h2><?php if(isset($name)){echo $name;} ?></h2>
        <div class='area'>
          <h3>Course- <?php if(isset($course)){echo $course;} ?></h3>
          <ul>
            <li>
              Phone- <?php if(isset($phone)){echo $phone;} ?>
            </li>
            <li>
              Email- <?php if(isset($email)){echo $email;} ?>
            </li>
            <li>
              Batch No- <?php if(isset($batch)){echo $batch;} ?>
            </li>
          </ul>
        </div>
      </article>
  </div>
</body>
</html>