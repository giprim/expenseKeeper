<?php include_once('php/form.php')
    $user = new User()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
<body>
    <h1><?php echo  $user->get_firstAndLastName()?> </h1>
</body>
</html>