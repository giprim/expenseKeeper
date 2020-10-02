<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" name="first" id="first" placeholder="first name">
        <input type="text" name="last" id="last" placeholder='last name'>
        <input type="text" name="age" id="age" placeholder='age'>
        <select name="gender" id="gender" >
            <option value="" selected disabled>--gender--</option>
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="text" name="email" id='email' placeholder='email'>
        <input type="submit" value="submit">
    </form>
</body>
</html>