<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div>
            <h1>ពាក្យសុំច្បាប់</h1>
        </div>
        <div class="form">
            <form action="display.php" method="get">
               <div class="text">
                នាម-គោត្តនាម : <input type="text" name="txtname" /> <br>
                ឆ្នាំសិក្សា : <input type="text" name="txtyear"> <br>
                ថ្នាក់ : <input type="text" name="txtclass" /> <br>
                ថ្ងៃសុំច្បាប់ : <input type="date" name="txtdate"> <br>
                មូលហេតុ : <textarea name="txtreason" rows="3" cols="40"></textarea> <br>
                <input type="submit" name="btnsubmit" value="ដាក់ស្នើសុំច្បាប់">
               </div>
            </form>
        </div>
    </div>    
</body>

</html>

