
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <p>Name: <input type="text" name="name"></p>
        <p>Age: <input type="text" name="age"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Password: <input type="password" name="pwd"></p>
        <p>Bio: <textarea name="bio"></textarea></p>
        <p>Contact preference:
            <select name="preferences">
                <option value="email">Email</option>
                <option value="phone">Phone</option>
            </select>
        </p>
        <p>Rating:</p>
        <p>1 <input type="radio" name="rating" value="1"></p>
        <p>2 <input type="radio" name="rating" value="2"></p>
        <p>3 <input type="radio" name="rating" value="3"></p>
        <p><input type="checkbox" name="terms" value="true"> I agree to the terms and conditions.</p>
        <p><input type="submit" value="Save"></p>
    </form>
    <pre><?php var_dump($_GET);?></pre>

</body>
</html>