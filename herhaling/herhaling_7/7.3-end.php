<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_POST['unset'])) {
        unset($_SESSION['language']); 
    }
    if(isset($_SESSION['language']))
    {
        Echo "Taal: " . $_SESSION['language'];
    }
    
    ?>
    <form action="7.3-end.php" method="post">
        <button type="submit" name="unset">Unset</button>
    </form>
</body>
</html>