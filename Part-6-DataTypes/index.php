<?php 
// Scalar data type is a data type having single value 
//4 types of scalar data type :
// 1) Boolean
// 2) Integer
// 3) Float
// 4) String

// Integers 
// Integers are whole numbers 
// Integer values do not have decimals.
// It can have positive or negative values.
// Integer variables can hold Octal(base 8),Hexadecimal (Base 16) or Binary(Base 2) values.
//const PHP_INT_SIZE can be used to find integer limit
//It differs based on platform.On macOs it is different no and in windows,it is different no 

//Define and print integer variable 
$marks = 70;
echo "Integer variable marks : ".$marks."<br>";

//Hexadecimal value 
//We use 0x as prefix and then write value 
$marks = 0x123AB;
echo "Hexadecimal variable marks: ".$marks."<br>";

//String to Integer addition 
$marks = 10;
$total = "1000" + $marks;
echo "String to integer addition: $total <br>";

//Negative numbers
$finalMarks = 5-$marks;
echo "No problem with negative numbers: $finalMarks <br>";

$finalMarks = 10;
//String to integer addition with negative numbers on string works properly as well
$totalNegativeMarks = "-1000" + $marks;
echo "String to integer substraction: $totalNegativeMarks <br>";

//Integer value
echo "Maximum integer value: ".PHP_INT_MAX."<br>";

//Doubles data type 
//Decimals are real numbers 
//Decimals have decimal numbers to show values 
// use round() method with precision 

//Define and print decimal variables 
$totalScore = 78.87;
echo "Define and print decimal variables: ".$totalScore."<br>";

//Negative decimals 
$temperature = -40.23;
echo "Negative decimals : ".$temperature."<br>";

//Round a double value
$price = 4.99;
echo "Rounded a double value $price : ".round($price)."<br>";

//Compare two doubles with precision 
$price =1.87;
$bid = 1.99;
echo (abs($price-$bid) <0.1)?"Accepted a bet ":"Bet not accepted"."<br>";

//////////////////////////////////////////////////////
//Boolean data type 
//Boolean variables are case insensitive true or tRuE are same 
//True is displayed as 1 and false is displayed as 0 with echo 
//Integer and string variable with value 0 and "0" respectively are false otherwise all other values are true.
//Boolean used in condition to check something 

//Define and use boolean variables 
$flag1 = true;
$flag2 = false;

echo($flag1)?"True <br>":"False <br>";
echo($flag2)?"True <br>":"False <br>";

echo "TRUE. ".$flag1."<br>";
echo "FALSE. ".$flag2."<br>";

//Use string as boolean condition 
$isLoggedIn = true;
$userSessionName = "Divyanshu Jain";
echo($isLoggedIn && $userSessionName)?"User logged in successfully <br>":"User cannot be logged in <br>";

$userSessionName = "";
echo($isLoggedIn && $userSessionName)?"User logged in successfully <br>":"User cannot be logged in <br>";

$userSessionName = null;
echo($isLoggedIn && $userSessionName)?"User logged in successfully <br>" :"User cannot be logged in <br>";

//Use integer variable as boolean watchout for negative values
$marks  = -1;
echo($marks)?"Marks has value <br>":"Marks has no value <br>";
$marks = 0;
echo($marks)?"Marks has value <br>":"Marks has no value <br>";

//Operators results into boolean conditions 
$name = "Divyanshu";
//Condition may be true or false that is boolean
//After checking condition it came as either true or false value 
echo ($name === "Divyanshu") ?"Yes $name <br>":"No $name <br>";

/* 
   STRINGS DATA TYPE 
   Strings are defined in double quotes or single quotes.
   Only double quotes can interpolate strings 
   No limit to how much string variable hold but limited with system memory.
   Use escape character to escape double characters inside double quotes and other characters.
                   */
    
    //Define string and use strings 
    $name1 = "Divyanshu Jain";
    $name2 = "Vansh Vijay";

    //string interpolation is possible in double quotes
    echo "$name1 and $name2 <br>";
    //not in single quote
    //It just print what is inside
    echo '$name and $name2'."<br>";

    //Combine string
    $name3 = $name1.' - '.$name2."<br>";
    echo "String is combined: $name3"."<br>";

    //Use backslash to escape the characters 
    $name4 = "This is a \"Special\" string";
    echo "Backslash is used for $name4 <br>";
    $name4 = "\t\t Here 2 tabs are used ";
    echo $name4."<br>";

    //Length of string 
    $length = strlen($name3);
    echo "Length of string $name3 is $length <br>";

    /*
       NULL KEYWORD
       NULL is case-insensitive.It means NULL/null are same.
       NULL is used to initialise a variable with empty value 
       We can use unset() and is_null() methods 
       Most common use case is to check whether variable has value or it is empty
       NULL is falsy value 
       */

       //Define and check NULL 
       $name = null;
       echo "Declared name variable as null: $name <br>";
       echo($name)?"Has value <br>":"Empty <br>";
       //is_null method is used to check whether variable value is null or not
       echo(!is_null($name)) ? "Has value <br>" : "Empty <br>";

       //Remove the variable and program from memory
       unset($name);


       ?>