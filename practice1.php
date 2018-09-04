<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practice #1</title>
</head>
<body>

<?php
// Practice 1
// Step 1:  Use the Echo Function to say hello with html h1 tags embedded inside php.
// Step 2: Write a comment above the echo function and explain what that function is doing.
    //echo function is used here to output data on the screen in PHP.
      echo "<h1>Hello" . " World! <br></h1>";

// Practice 2
// Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
// Step 2: Add the two variables and display the sum with echo:
// Step 3: Make 2 Arrays with the same values, one regular and the other associative
// Step 4: Make a constant and set it to the value of PHP. and use an echo to print it out
        $number1 = 10;
        $number2 = 20;
        $sum = 0;
            echo $sum = $number1 + $number2;
            $arr = array(10,20);
            $assoc = array("number1" => 10, "number2" => 20);

            $required = "PHP";
            define("required", "PHP");
            echo "<br>" . required;

// Practice 3
// Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
// Step 2: Make a for loop that displays 10 numbers
// Step 3 : Make a switch Statement that test against one condition with 5 cases
            $time = date("H");
            if ($time < "10") {
            echo "<br> I love PHP!";
        } elseif ($time < "20") {
            echo "<br> I love PHP!";
        } else {
            echo " <br> I love PHP! ";
        }


        echo "<br>";
        for($int = 0; $int < 10; $int ++)
        {
            echo $int;
        }

        echo "<br>";

    $bestPhone = "Nokia";

    switch ($bestPhone) {
        case "Apple":
            echo "The best phone is Apple!";
            break;

        case "LG":
            echo "The best phone is LG!";
            break;

        case "Windows":
            echo "The best phone is Windows!";
            break;

        case "Samsung":
            echo "The best phone is Samsung!";
            break;

        case "Oneplus":
            echo "The best phone is OnePlus!";
            break;

        default:
            echo "Your favorite color is neither Apple, LG, Windows, Samsung, nor OnePlus!";
}

// Practice 4
// Step1: Define a function and make it return a calculation of 2 numbers
// Step 2: Make a function that passes parameters and call it using parameter values
echo "<br>";

        function sumNum() {
            $number1 = 10;
            $number2 = 20;
            return $number1 + $number2;
        }

            echo sumNum();


echo "<br>";

        function multi($k, $j) {
            $x = $k * $j;
            return $x;
        }

        echo "5 x 8 = " . multi(5, 8) . "<br>";
        echo "25 x 10 = " . multi(25, 10) . "<br>";
        echo "45 x 17 = " .multi(45, 17);
// Practice 5
// Step1: Use a pre-built math function here and echo it
// Step 2:  Use a pre-built string function here and echo it
// Step 3:  Use a pre-built Array function here and echo it

echo "<br>";
        $angle=8*pi()/3;
        echo round(sin($angle), 3);
echo "<br>";
    $message = "I love learning PHP, it's fun!";
        echo str_word_count($message);
echo "<br>";
    $info = array ('School' => 'WSU', 'Major' => "Computer Science", 'CS' => "PHP");
    rsort($info);
    //print_r($info);


echo "<pre>";
  print_r($info);
echo "</pre>";
?>

</body>
</html>