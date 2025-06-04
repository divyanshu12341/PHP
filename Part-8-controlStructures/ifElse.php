<?php 
   /*  
   1)Syntax of if else condition
   2) Check if the input provided by user is correct or not 
   3)if condition statement without braces 
   4) Check if student passed or failed
                       */
    $some_boolean_condition = FALSE;
    if($some_boolean_condition){
        echo "if block condition executed <br>";
        echo "This is true block execution <br>";
    } else{
        echo "else block condition executed <br>";
        echo "This is false block execution<br>";
    }

    $one_more_boolean_variable = TRUE;
    if($some_boolean_condition && $one_more_boolean_variable){
        echo "If condition block executed <br>";
    } else {
        echo "Else condition block executed <br>";
    }  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>if else statements</title>
    </head>
    <body>
        <?php if($some_boolean_condition || true ) {
                 ?>
        <h1>This is if block</h1>
        <h2>This is true condition</h2>
        <?php  } else { ?> 
           <h1>This is else block</h1>
       <?php  }  ?>
    </body>
    </html>

    <!-- Check whether input written by user is valid or not  -->
     <?php
     $input1 = "This is a user";
     $input2 = 45; 
     if(!is_null($input1)){
        echo "$input1 is not null <br>";
     } else {
        echo "$input1 is null <br>";
     } 
       

     //Condition 2: 
     if(isset($input1) && !is_null($input1)){
        echo "$input1 is not null <br>" ;
     } else {
        echo "$input1 is null <br>";
     }

     //Condition 3
     if($input1 !=" "){
        echo "$input1 is not empty <br>";
     } else {
        echo "$input1 is empty <br>";
     }

     //Best way to check if field is empty 
     if(!empty($input1)){
        echo "Not empty <br>";
     } else {
        echo "Empty <br>";
     }

     if($input2 > 24){
        echo "$input2 is greater than 24 <br>";
     } else {
        echo "$input2 is less than 24 <br>";
     }
    //  if condition statement without braces 
    //Just for one line no need to put curly braces
    if($input2 >24) echo "$input2 is greater than 24 <br>";
     else echo "$input2 is less than 24 <br>";

     $result = "PASSED";
     if($result === "PASSED") {
        echo "student passed the exam <br>";
     } else {
        echo "Student failed the exam <br>";
     }

     //Check for odd or even numbers and print it 
     //using if else 
     $numberToBeChecked = 10;
     if($numberToBeChecked % 2 === 0) {
        echo "Number is even <br>";
     } else {
        echo "Number is odd <br>";   
                }

    /* 
    if(condition1){
    } else if(condition2){
     } else {
      }
             */

    //Check if input number is greater than 10
    $input_number = 11;
    if($input_number>10){
        echo "Number is greater than 10 <br>";
    } else if($input_number ===10){
        echo "Number equals to 10 <br>";
    } else {
        echo "Number less than 10 <br>";
    }

    //Switch statements 
    $evenOrOddNumber = 10;
    $evenOrOddCheck = ($evenOrOddNumber % 2);
    switch($evenOrOddNumber){
        case $evenOrOddNumber % 2 == 0: 
                echo "Even number <br>";
                break;
        case $evenOrOddNumber % 2 !=0: 
                 echo "Odd Number <br>";
                break;
        default: echo "Invalid input <br>";
                break;
    }

    //Check if number is greater than 10 
    echo "--------Check if number is greater than 10 --------- <br>";
    echo "<br>";
    switch(true){
        case $input_number>10 : 
            echo "Number is greater than 10 <br>";
            break;
        case $input_number === 10 : 
            echo "Number equals to 10 <br>";
            break;
        case $input_number<10 : 
            echo "Number less than 10 <br>";
            break;
        default :
             echo "Invalid input <br>";
             break;
    }

    // String based condition 
    echo "--------String based condition on switch case ---------- <br>";
    echo "<br>";
    $weekday = "fri";
    switch($weekday){
        case "Mon" : 
            echo "Today is Monday <br>";
            break;
        case "fri" : 
            echo "Today is Friday <br>";
            break;
    }

    //FOR-LOOP 
    // Print odd numbers from 1 to 9 
    /* 
        for loop : 
            for(initialisation;condition;increment)
         */
        echo "-------------Learning for loop------<br>";
        echo "-------------Print odd numbers from 1 to 9----------- <br>";
        echo "<br>";
        for($value=1;$value<=10;$value++){
            $result = $value%2;
            if($result>0){
                echo " $value ";
            }
        }

                echo "<br>-------------Print odd numbers from 1 to 9 without initialising inside for loop----------- ";

        $value = 1;
        echo "<br>";
        for( ;$value<=10;$value++){
            $result = $value%2;
            if($result>0){
                echo " Odd Number: $value <br>";
            }
        }

/*  
   While loop 
   while(condition){
   block of code
   }
     */
    echo "<br> --------------Learning while loop --------- <br>";
    $val = 1;
     while($val<=10){
        echo "$val <br>";
        $val = $val+1;
     }
     /* 
                for($value=1;$value<=10;$value++){
            $result = $value%2;
            if($result>0){
                echo " $value ";
            }
        }
                   */
    echo "<br> Converting above for loop to while loop --- <br>";
    $val = 1;
    while($val<=10){
        $result = $val%2;
        if($result>0){
            echo "$val <br>";
        }
        $val = $val+1;
    }

/*    
       ---  Do While Loop ---
       do {
       //block of code
       }while(condition)
            */
    //Print square of number maximum till 100
    echo "<br> ------ Print square of number maximum till 100 ------ <br>";
    $squareOfNumber = 1;
    do {
        $squareResult = $squareOfNumber*$squareOfNumber;
        echo "Square: $squareResult <br>";
        $squareOfNumber++;
    } while($squareResult<100);

    //Break infinite loop 
    //Print 1 to 10 using infinite loop 
    echo "<br> ----------------Breaking infinite loop using break-------------- <br>";
    $infinite_value = 1;
    while(true){
        echo "Infinite value: $infinite_value <br>";
        if($infinite_value>=10){
            break;
        }
        $infinite_value++;
    }

    //Multiple loops 
    $loop1 = 1;
    $loop2 = 1;
    $loop3 = 1;
    for( ;$loop1<=10;$loop1++){
        while($loop2<=10){
            do{
                if($loop3 == 5){
                    break;
                }
                 echo"Loop 3: $loop3 <br>";
                $loop3++;
            }while($loop3<=10);
            if($loop2 == 6){
                break;
            }
            echo "Loop 2:$loop2 <br>";
            $loop2++;
        }
        if($loop1 == 7){
            break;
        }
        echo "Loop 1 :$loop1 <br>";
    }

    /*  
       Continue keyword 
       Continue helps to skip the loop
                        */
    //Print even numbers using while infinite loop and break after 10 numbers
    $num_continue = 1;
    while(true){
        if($num_continue % 2 !=0){
            $num_continue++;
            continue;
        } 
        echo "Continue keyword : $num_continue <br>";
        if($num_continue == 10){
            break;
        }
        $num_continue++;
    }
    /*   
        RETURN KEYWORD 

                  */
    function checkUserRoles($userRoles){
        if(empty($userRoles)){
            echo "Roles cannot be empty";
            return;
        }
        switch($userRoles){
            case "Admin": 
                echo "Hello admin <br>";
                break;
            case "Editor":
                echo "Hello Editor <br>";
                break;
            default:
                echo "Roles are empty <br>";
                break;
        }
    }
        checkUserRoles("Admin");
        checkUserRoles("Editor");
        checkUserRoles("");

        /*
         We cannot go inside a loop with goto 
                    */
        $count=0;
    for(;$count<=10;$count++){
        if($count == 2){
            goto loop2;
        }
        
    }
    loop2:
              echo "<br> Counter value is $count <br>";
    
        
                 ?>
 
                