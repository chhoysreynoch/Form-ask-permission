<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $fullname = $_GET['txtname'];
    $year = $_GET['txtyear'];
    $date = $_GET['txtdate'];
    $class = $_GET['txtclass'];
    $reason = $_GET['txtreason'];
    ?>
    <div class="container">
        <h1>ពាក្យសុំច្បាប់</h1>
        <p>នាម-គោត្តនាម : <span><?= $fullname ?></span>  </p>
        <p>ឆ្នាំសិក្សា : <span>ឆ្នាំទី <?= $year ?> </span></p>
        <p>ថ្នាក់ : <span> <?= $class ?></span> </p>
        <p>ថ្ងៃសុំច្បាប់ : <span><?= $date ?></span> </p>
        <p>មូលហេតុ : <span><?= $reason ?></span> </p>
    </div>
</body>

</html>