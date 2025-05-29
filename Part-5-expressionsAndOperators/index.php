<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions and operators</title>
</head>
<body>
    <?php 
           //Expressions are evaluated into single or evaluated or final value 
           //Example- 1) $total = add(10,20)
           //Example -2) $finalValue = 10
           //Example -3) $initialValue = 0

           //Operator used to perform some operations on variables and are represented by some symbols
           //Example - 1)$a++;
           //Example - 2)$message = "DivyanshuJain"
           //Example - 3)$total = 10*2

           //Types of operators:
           //1)Arithmetic operators 
           //2)Conditional operator
           //3)Increment/Decrement operators 
           //4)Logical operators 
           //5)Assignment operators 
           //6)Comparison operators 
           //7)Bitwise operators 
           // 8)Execution operators 
           //9)Error-control operators 

           //Arithmetic operators 
              //Addition -- '+'
              //Substraction -- '-'
              //Multiplication -- '*'
              //Division -- '/'
              //Modulo -- '%'
              //Exponentiation -- '**'

              //Sample-1 
              //Calculate student total marks for 3 subjects 
              $maths = 10;
              $english = 20;
              $hindi = 30;
              $total = $maths+$english+$hindi;
              echo "Total marks is ".$total."<br>";

              //Sample-2: Display without total marks variable
              //Operators are not implemented inside double quotes
        echo "Total marks is $maths+$english+$hindi <br>";
        echo "Total marks is ".$maths+$english+$hindi."<br>";

        //Sample-3:Find a difference between marksAchieved and totalMarks 
        $marksAchieved = 200;
        $totalMarks = 300;
        $marksDifference = $totalMarks-$marksAchieved;
        echo "Difference between marks is ".$marksDifference."<br>";

        //Sample-4:Calculate area using length and breadth
        $length = 10;
        $breadth = 20;
        $area = $length*$breadth;
        echo "Length is ".$length." and its breadth is ".$breadth." and its area is ".$area."<br>"; 

        //Sample-5:Calculate percentage of overall score marks 
        $totalMarks = 400;
        $marksAchieved = 250;
        $percentage = $marksAchieved/$totalMarks*100;
        echo "Percentage is $percentage";

        //Sample-6:Using modulus operator
        $a = 100%5;
        echo $a."<br>";

        $b = 101%5;
        echo $b."<br>";

        $c = 102%5;
        echo $c."<br>";

        $d = 103%5;
        echo $d."<br>";

        $e = 104%5;
        echo $e."<br>";

        //Exponential operator
        $a = 10;
        $b = 20;
        $result = $a**2;
        echo "Exponention of a is ".$result."<br>";

        //Ternary operator 
        $flag = (true)?"Correct":"Wrong";
        echo $flag."<br>";

        $flag = (false)?"Correct":"Wrong";
        echo $flag."<br>";

        //Comparison operators 
        //Equal to --> ==
        //Data Type and value identical --> ===
        //Not equal to --> != // < >// !==
        //Greater than --> >
        //Less than --> <
        //Greater than or equal to --> >= 
        //Less than or equal to --> <= 
        $php_version = 8.1;
        $php_system_version = PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;
        echo ($php_version == $php_system_version)?"Version matched":"Version not matched"."<br>";

        //Data Type and value check 
        $num1 = 7.5;
        $num2 = "7.5";
        echo($num1==$num2)?"Value is same but cannot know about data-type"."<br>":"Value is not same"."<br>";
        echo($num1 == $num2)?"Values are identical <br>":"Values are not identical <br>";

        //Find oranges using !=,<>,!==
        $specialfruit = "oranges";
        $fruit1 = "Apple";
        $fruit2 = "oranges";
        echo ($specialfruit !=$fruit1)?"It is not oranges <br>":"It is an orange <br>";
        echo($specialfruit <>$fruit2)?"It is not orange <br>":"It is orange <br>";
        echo($specialfruit!==$fruit1)?"It is not oranges <br>":"It is an orange <br>";

        //Find senior citizen whose age is greater than 60 using greater than operator
        $citizen1 = "John";
        $citizen2 = "Walter";
        $citizen3 = "Ajit";
        $agelimit = 60;
        $citizenage1 = 40;
        $citizenage2 = 64;
        $citizenage3 = 80;
        echo ($citizenage1>60)?"$citizen1 is senior citizen <br>":"$citizen1 is not a senior citizen <br>";
        
        echo($citizen2>60)?"$citizen2 is a senior citizen <br>":"$citizen2 is not a senior citizen <br>";

        echo($citizen3>60)?"$citizen3 is a senior citizen <br>":"$citizen3 is not a senior citizen <br>";

        //sample-5 :Find kids who want to eat pizza for free
        $name1 = "John";
        $name2 = "Walter";
        $name3 = "Ajit";
        $agelimit = 10;
        $nameage1 = 4;
        $nameage2 = 30;
        $nameage3 = 44;
        echo($nameage1 <=$agelimit)?"$name1 can eat pizza for free <br>":"$name1 cannot eat pizza <br>";
        echo($nameage2 >=$agelimit)?"$name2 can eat pizza for free <br>":"$name2 cannot eat pizza <br>";
        echo($nameage3 <=$agelimit)?"$name3 can eat pizza for free <br>" :"$name3 cannot eat pizza <br>";


        //Logical operators 
        //AND -->Both condition should be true
        //OR -->Any one condition should be true
        // && -->Both condition should be true
        // || --> Any one condition should be true
        // ! --> if not 

        //Greet name hello if user has logged-in and has permission 

        $greet = "Hello";
        $user1 = "Divyanshu";
        $user2 = "Vansh";
        $user3 = "Tanmay";
        $user4 = "Bhavya";

        $isUser1LoggedIn = true;
        $isUser1HasPermission = true;

        $isUser2LoggedIn = true;
        $isUser2HasPermission = false;

        $isUser3LoggedIn = false;
        $isUser3HasPermission = true;

        $isUser4LoggedIn = false;
        $isUser4HasPermission = false;

        echo($isUser1LoggedIn == true && $isUser1HasPermission==true)?"Hello, $user1 <br>": "$user1 , Authentication failed <br>";
        echo($isUser2LoggedIn == true && $isUser2HasPermission==true)?"Hello $user2 <br>": "$user2 , Authentication failed <br>";
        echo($isUser3LoggedIn == true && $isUser3HasPermission==true)?"Hello $user3 <br>": " $user3 Authentication failed  <br>";
        echo($isUser4LoggedIn == true && $isUser4HasPermission==true)?"Hello $user4 <br>": "$user4 Authentication failed <br>";

        //Sample-2 
        //Check if student passed any one exam 
        $student1 = "Divyanshu";
        $student2 = "Vansh";
        $student3 = "Tanmay";
        $student4 = "Bhavya";

        $student1SciencePassed = true;
        $student1MathsPassed = true;

        $student2SciencePassed = true;
        $student2MathsPassed = false;

        $student3SciencePassed = false;
        $student3MathsPassed = true;

        $student4SciencePassed = false;
        $student4MathsPassed = false;

        echo($student1SciencePassed==true ||$student1MathsPassed == true) ? "$student1 passed <br> ": "$student1 failed <br>";
        echo($student2SciencePassed == true || $student2MathsPassed == true) ?"$student2 passed <br>": "$student2 failed <br>";
        echo($student3MathsPassed == true || $student3SciencePassed == true) ? "$student3 passed <br>": "$student3 failed <br>";
        echo($student4MathsPassed == true || $student4SciencePassed == true ) ? "$student4 passed <br>": "$student4  failed <br>";

        //Difference between and,&& operator
        //Operator precedence 

        //In result 1, == has higer precendence while In result 2,== has lower precedence
        $result1 = true and false;
        $result2 = true && false;

        echo($result1)?"True<br>":"False<br>";
        echo($result2)?"True<br>":"False<br>";

        //Difference between OR,|| operator
        $result1 = true || false;
        $result2 = false OR true;

        echo($result1) ?"True <br> ":"False<br>";
        echo($result2) ?"True <br>" :"False <br>";
        echo(true OR False) ?"True <br> ":"False<br>";
        echo(true || false) ?"True <br>" :"False <br>";

        //Check if student is not passed 
        $totalMarksAchieved = 34;
        $passingMarks = 35;
        echo($totalMarks !=$passingMarks) ?"Not passed <br>":"Passed <br>";

        //Assignment operators 
        /*  
        Assignment operator used to assign values 
        += operator is add assignment operator 
        -= operator is substraction assignment operator 
        *= operator is multiplication assignment operator 
        /= is division assignment operator 
        %= is modulus assignment operator 
             */
    //Assign value to variable marks
        $marks = 10;
    //Assign any name string to variable name 
    $name = "Divyanshu Jain";

    //Use += operator which is add operation
    $counter = 1;
    $counter += 1;
    echo "Updated value of counter is $counter <br>";

    $marks = 10;
    $marks +=10;
    echo "Updated value of marks is $marks <br>";

    //.= is used to combine strings 
    $firstName = "Divyanshu";
    $firstName .= " Jain";
    echo "Full name is $firstName <br>";

    //Use -= operator 
    $counter -= 1;
    echo "Updated value of counter after decrement is $counter <br>";

    //Use *= operator 
    $square = 10;
    $square *= $square;
    echo "Square of 10 is $square <br>";

    //Use /= operator 
    $divideBy2 = 50;
    $divideBy2 /=2;
    echo "Division of 2 is $divideBy2 <br>";

    //use %= operator 
    $remainder = 100;
    $remainder %= 3;
    echo "Remainer dividing by 3 is $remainder <br>";

    //increment operator --> ++ -->incremental by 1
    //decrement operator --> -- --> decremental by 1

    //use increment operator that is ++
    //variable++ is post increment 
    //Firstly value assigned then value get incremented
    $counter ++;
    echo "Updated value of counter after increment operator is $counter <br>";
    //Firstly value get incremented then value assigned
    ++$counter;
    echo "Updated value of counter after pre increment operator is $counter <br>";

    $counter--;
    echo "Updated value of counter after post decrement is $counter <br>";

    --$counter;
    echo "Updated value of counter after pre decrement is $counter <br>";

    //Bitwise operators 
    // | --> OR
    // & --> AND 
    // ~ --> NOT 
    // ^ --> xor

    //0 --> 0000
    //1 --> 0001
    //2 --> 0010
    //3 --> 0011
    //4 --> 0100
    //5 --> 0101 
    //6 --> 0110
    //7 --> 0111

    $first = 0;
    $second = 1;
    echo $first | $second;
    echo "<br>";
    echo $first & $second;
    echo "<br>";

    $first = 2;
    $second = 3;
    echo $first | $second;
    echo "<br>";
    echo $first & $second;
    echo "<br>";
    echo  ~$second;
    echo "<br>";
    echo $first ^ $second;
    echo "<br>";

    //Execution operators 
    //Use it to execute commands 
    echo `dir*.php`;

    //Error control operator 
    // $value = 1/0; //this line is an error 
    @$value = 1/0;
    echo "errors".$php_errormsg."<br>";
    
    //operator precedence 
    //It is basically a sequence in which operators gets executed.

    /* 

      Unary --> ++,--
      Multiplication -->*,/,%
      Subtraction --> -,+
      Relational --> >,<,<>,>=,<+
      Equality --> ==,===,!=
      LogicalAND --> &&
      Logical OR --> ||
      Conditional --> ?
      Assignment --> =,+=,-=,*=,/=

           */
    ?>
</body>
</html>