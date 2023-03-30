<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
        include_once('header.php');

    ?>

    <form action="/save-form.php" method="post">
        <input type="text" name="lastname" placeholder="Last Name">
        <input type="text" name="lastname" placeholder="First Name">

        <input type="submit" value="SAVE"/>
    </form>


    <?php 
        include_once('footer.php');
    ?>

</body>
</html>