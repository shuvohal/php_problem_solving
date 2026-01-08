

<?php
echo "<pre>";
/*

Write a PHP script to display the following strings.

Sample String :
'Tomorrow I \'ll learn PHP global variables.'
'This is a bad command : del c:\\*.*'
Expected Output :
Tomorrow I 'll learn PHP global variables.
This is a bad command : del c:\*.* 
*/
echo "Tomorrow I \'ll learn PHP global variables." . "\n";
echo "This is a bad command : del c:\\*.*". "\n";




/*
$var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.

Sample Output :

PHP Tutorial
PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial. 

*/

$var = 'PHP Tutorial';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var;?></title>
</head>
<body>
    <h3><?php echo $var;?></h3>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
    <a href="#">Go to the PHP Tutorial</a>
</body>
</html>

<?php

echo "</pre>";

/*
Create a simple HTML form and accept the user name and display the name through PHP echo statement. 

*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html form</title>
</head>
<body>
    <h2>Html form</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">

    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST['name']);
        echo "<h3>Hello, $name!</h3>";
    }
    ?>
</body>
</html>

<?php

echo "<pre>";
/*
Write a PHP script to get the client IP address.
*/
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}

elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}

else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo "the ip address is: " . $ip_address;
?>


