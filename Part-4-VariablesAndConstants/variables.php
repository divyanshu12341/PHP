<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables And Constants</title>
</head>
<body>
    <!-- Variables  -->
    <!-- Sample-1 -->
     <h1>Variables</h1>
     <br>
     <?php 
        $aboutMe = "Divyanshu Jain";
        echo "<h1>About Me: </h1>";
        echo $aboutMe;
        echo "<br>";
        $aboutMe = "Divyanshu ";
        echo $aboutMe; 
        echo "<hr>"
     ?>
     <!-- Strings and integers -->
      <h2>String and integers</h2>
      <?php 
         $name = "Divyanshu Jain";
         $message = "Turned 25 on 3 April 2025";
         echo $name.$message.'<br>';
         echo "$name:$message <hr>"
         ?>

        <h2>Define integers</h2>
    <?php 
        $version = '8.2';
        $roundOffVersion = '8.0';
        echo 'PHP Version is '.$version."<br>";
        echo "PHP Version is $roundOffVersion <hr>"
        ?>

        <h2>Combine string and integer</h2>
        <?php 
            echo "$name:$message <br>";
            echo "name:$name <br>";
            $language = "php";
            echo "Language version is $version <hr>"
             ?>

        <h2>Add two integers in PHP</h2>
        <?php 
             $firstValue = 10;
             $secondValue = 20;
             $total = $firstValue+$secondValue;
             echo "Sum of $firstValue and $secondValue is $total <hr>" ?>
        <h2>String to integer and Integer to string</h2>
        <?php 
         $length = 100;
         $breadth = 20;
         $area = $length*$breadth;
         echo "Area: $area <br>"; 

         $length = "100";
         $breadth = 16;
         $area = $length*$breadth;
         echo "Area:$area <hr>"
                        ?>
        <h2>Function</h2>
        <?php   
             function add(){
                $firstValue = 10;
                $secondValue = 20;
                $total = $firstValue+$secondValue;
                echo $total;
             }
             add();
             echo "<br>";
            //  function add(){
            //     echo 'Duplicate function'
            //  }
            //  add();
            //We cannot have multiple functions with same name

            welcome_message();
            function welcome_message(){
                echo "Welcome to functions of php";
            }
        ?>
        <hr />
        <h2>PHP is case sensitive</h2>
        <?php 
        echo "How are you friends? ";
        echo "Isn't it is case sensitive?Not for inbuilt functions friends.Now let's see it for variables. <br> ";

        //Variables are case-sensitive
        $name = "Divyanshu";
        $Name = "Jain";
        echo "Name:$Name and name:$name <br>";

        //Functions are not case-sensitive
        function print_message(){
            echo 'Functions are not case sensitive';
        }
        PRINT_Message();
        // function PRINT_mEssage(){
        //     echo 'It cannot be done';
        // }


                  ?>
        <hr>
        <h2>Scope of function</h2>
        <?php  
              $name = "Divyanshu Jain";
            function print_name(){
                $name = "PHP";
                echo $name;
              }
              print_name();
              echo $name;

            //   Sample-2
            //Scope of msg variable is only limited outside a function 
            $msg = "Welcome to PHP";
            function printMessage(){
                echo $msg;
            }
            printMessage();
            echo $msg;
                           ?>
            <hr>
        <h2>Global Variable</h2>
        <?php 
              global $naming;
              $naming = "Divyanshu Jain";
              function printing_name(){
                $naming = "PHP Learning is great";
                echo $naming;
              }
              echo "<br>";
              printing_name();
              echo "<br>";
              echo $naming;
              echo "<br>";
            //   global $accessingGlobalVariable;
            //   $accessingGlobalVariable = 10;
            //   function printingGlobalVariable(){
            //     echo $accessingGlobalVariable;
            //   }
            //   echo "Global variable : ";
            //   printingGlobalVariable();

              global $accessingGlobalVariables;
              $accessingGlobalVariables=20;
              function printingGlobalVariables(){
                global $accessingGlobalVariables;
                echo $accessingGlobalVariables;
              }
                               ?>  
            <hr>
            <h2>Static variables</h2>
        <?php 
              function counter(){
               static $count = 1;
                echo $count."<br>";
                $count = $count+1;
              }
              counter();
              counter();
              counter();
              counter();
              ?>
        <hr>
        <h2>Variable of Variables</h2>
        <?php 
           $male = "Divyanshu Jain";
           $gender = "male";
          echo $$gender;
          echo '<br>';
          $student = "Divyanshu Jain";
          $male = "student";
          $gender = "male";
          echo $$$gender
                        ?>  
        <hr>
         <h2>Pre-defined variables</h2>        
           <?php 
                 echo $php_errormsg;
                                    ?>
        <hr>
        <h2>Variable with isset</h2>
        <?php 
        $namings;
         echo isset($namings)?'Variable set':'Variable is not set';
         $firstName = "test";
         $namings = $firstName;
         echo "<br>";
         echo isset($namings)?'Variable set ':'Variable is not set';

                           ?>
        <hr>
        <h2>Constants</h2>
        
        <?php 
             //Constant is a value which does not change all over the program.
            // SAMPLE-1 :DEFINE CONSTANT
            // CONSTANT is generally defined in uppercase. 
            //There is no string interpolations for constants.
            define("LANGUAGE","php");
            $lang = LANGUAGE;
            echo $lang;
            echo "<br>";
            //If we try to change value of constants,it doesn't work.It holds value of first constant.

            define("LANGUAGE","JAVA");
            echo "This program is written using ".LANGUAGE;

            //CONSTANTS NAMING CONVENTION
            // define("1version",7.3);
            // echo 1version; it will produce error

            define("NAMEE","");
            // echo isset(NAMEE); cannot be used for constant
            echo "<br>";
            //Access constant using CONSTANT method
            echo constant("LANGUAGE");

            //No need to use $ to use the constant.
            //Constants are defined only via define method
            //Constants have global scope and can be accessed anywhere
            //Constants has global scope and can be accessed anywhere.
            
            
            //Good Practice-1:Always define constants in UPPERCASE
            define("LANGUAGES","JAVASCRIPT");
            //Do not use __ in constants at start as it is used in super global variables 
            //Do not use same name as variable
            //Use same naming convention 
            //Do not start variable or constant name with integers
            $_1message = 'Do not use it like that';
            define("_1message","Do not use it like that");

            //Magic constants 
            echo "<br>";
            echo __LINE__."<br>";
            echo __FILE__. "<br>";
            ?>
            <hr>
        <h2>Revisiting constant concepts</h2>
        <?php 
              //Define constants 
              define("LANGUAGESSS","PHP");

              //Do not use constant and variable as same name 
              $NAME = "Divyanshu";
              define("NAME","Divyanshu");

              //Assign constant to variable and print in a string 
              $lang = LANGUAGE;
              echo "This is a language:$lang <br>";

              //Magic constant 
              echo __LINE__;

                     ?>
</body>
</html>