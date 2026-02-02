
<?php
// echo "<h1>Hello World</h1>";
// $x = 10;
// echo $x;
// function callValue() {
//     // echo $GLOBALS['x'];
//     global $x;
//     echo $x;
// } 
// callValue();
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
// echo $_SERVER['REQUEST_METHOD'];
$pagetitle = 'Home Page';
require('assets/header.php');
require_once('assets/header.php');
?>

<h1>HTML FORM</h1>
<!-- <form action="validate.php" method="post"> -->
<form action="" method="post">
    <input type="number" name="num1" placeholder="Enter number" /> <br />
    <input type="number" name="num2" placeholder="Enter number" /> <br />
    <input type="submit" />
</form>
<?php
if( $_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // validating num1 and num2
    if (empty($num1)) {
        exit('First entry has no value');
    }
    if (empty($num2)) {
        exit('Second entry has no value');
    }
    $ans = $num1 + $num2;
    echo $ans;
}
?>
</body>

</html>