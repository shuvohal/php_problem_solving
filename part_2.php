

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
//Get Client IP Address
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
<?php
echo "</pre>";
/*Write a simple PHP browser detection script.
Sample Output : Your User-Agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36 */
//Browser Detection
$user_agent = $_SERVER['HTTP_USER_AGENT'];
echo "Your User-Agent is: " . $user_agent;
?>
<?php
echo "<pre>";
/*Write a PHP script to get the current file name */
//Get Current File Name
$current_file = basename(__FILE__);
echo "The current file name is: " . $current_file;
?>
<?php
echo "</pre>";

/*Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'. '.

List of components : Scheme, Host, Path
Expected Output :
Scheme : http
Host : www.w3resource.com
Path : /php-exercises/php-basic-exercises.php
*/
//Parse URL Components
$url = "https://www.w3resource.com/php-exercises/php-basic-exercises.php";

$parsed_url = parse_url($url);
echo "<pre>";
echo "Scheme : " . $parsed_url['scheme'] . "\n";
echo "Host : " . $parsed_url['host'] . "\n";
echo "Path : " . $parsed_url['path'] . "\n";
?>
<?php
echo "</pre>";
/*Write a PHP script, which changes the color of the first character of a word.

Sample string : PHP Tutorial
Expected Output :
PHP >Tutorial
*/
//Change Color of First Character
$string = "PHP Tutorial";

// Split string into words
$words = explode(" ", $string);

// Loop through words and color first character
foreach ($words as $word) {
    echo "<span style='color:red;'>" . $word[0] . "</span>" . substr($word, 1) . " ";
}

?>
<?php
//Detect Page Protocol
echo "<pre>";
/*Write a PHP script, to check whether the page is called from 'https' or 'http'. */

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    echo "This page is called using HTTPS";
} else {
    echo "This page is called using HTTP";
}


?>

<?php
echo "</pre>";
/*Write a PHP script to redirect a user to a different page .

Expected output : Redirect the user to protfolio-vercel.vercel.app/ 
*/
//header("Location: protfolio-vercel.vercel.app/");
?>
<?php
echo "<pre>";
/*Write a simple PHP program to check that emails are valid.

Hints : Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.
Note : The PHP documentation does not say that FILTER_VALIDATE_EMAIL should pass the RFC5321.
*/
$email = "shuvo4545@gmail.com";
if (filter_var($email)) {
    echo "Valid email address.";
} else {
    echo "Invalid email address.";
}
?>
<?php
echo "</pre>";
/*Write a e PHP script to display string, values within a table.

Note : Use HTML table elements into echo.
Expected Output : 
*/
echo "<table border='1'>";
echo "<tr><th>String</th><th>Value</th></tr>";
echo "<tr><td>PHP</td><td>Hypertext Preprocessor</td></tr>";
echo "<tr><td>HTML</td><td>Hypertext Markup Language</td></tr>";
echo "<tr><td>CSS</td><td>Cascading Style Sheets</td></tr>";
echo "</table>";
?>

<?php
echo "<pre>";
/*Write a PHP script to count number of lines in a file.

Note : Store a text file name into a variable and count the number of lines of text it has.
*/
$filename = 'part_2.php';
$linecount = 0;
$handle = fopen($filename, "r");;
while(!feof($handle)){
    $line = fgets($handle);
    $linecount++;
}
echo "Number of lines in the file: " . $linecount;;
fclose($handle);
?>