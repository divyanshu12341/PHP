<?php 
       /*
         function function_name(param1,param2,param3,....){
          //code to be executed 

          return value;
         }

         function_name(arg1,arg2,...);
                     */
        function printEvenNumbers($limit){
            for($index = 0;$index<=$limit;$index++){
                if($index % 2 ==0){
                    echo "$index &nbsp;";
                }
            }
        }
        printEvenNumbers(20);

        function add($a,$b){
            return $a+$b;
        }
        echo "<br>";
       echo add(10,20);

       //input parameters 
       declare(stricttypes = 1);
       //It helps to check mismatch variable types 

       function printOddNumbers(int $limit,int $skipNumber){
        for( $index = 0;$index<=$limit;$index++){
            if($index == $skipNumber){
                continue;
            }
            if($index%2 != 0){
                echo $index."&nbsp;";
            }
        }

       }
       echo "<br>";
       printOddNumbers(40,27);

       //Returning integer from function 
       function sub($a,$b) : int{
        return $a-$b;
       }
       echo "<br>";
       echo "Result : ".sub(4,1);

       //Returning an array from function
       function getEvenNumbers($limit):array{
        $returnArr = [];
        $k = 0;
        for($index = 0;$index<=$limit;$index++){
            if($index %2 == 0){
                $returnArr[$k] = $index;
                $k = $k+1;
            }
        }
        return $returnArr;
       }
       echo "<br>";
       echo "Even numbers list &nbsp;";
       $evenNumbersList = getEvenNumbers(40);
       print_r($evenNumbersList);

       //default parameters and optional parameters 
       //Default parameter should be at the last 
       echo ("<br>");
       function defaultPrintOddNumbers(int $limit,$skipNumber = -1){
                for( $index = 0;$index<=$limit;$index++){
            if($index == $skipNumber){
                continue;
            }
            if($index%2 != 0){
                echo $index."&nbsp;";
            }
        }
       }
       defaultPrintOddNumbers(50);

       echo "<br>";
       //Calling function from variable value -->Dynamic function calling 
       function dynamicAdd($a,$b):int{
        return $a+$b;
       }
       $addFunction = "dynamicAdd";
       echo $addFunction(1,3);

       /* 
          Anonymous functions --> 
          Function without a function name and also called as closures 
                                        */
        $addFunction = function($a,$b):int{
            $addition = $a+$b;
            return $addition;
        };
        echo "<br>";
        echo $addFunction(2,5);
        echo "<br>";

        $content = "This is a string message <br>";
        $printContent = function () use($content){
            echo $content;
        };

        $printContent();

        /*  
           Passing argument as reference 
                                    */
        $result = 0;
        function adding($a,$b,$result = NULL):int{
            $addition = $a+$b;
            return $addition;
        }
        $results = adding(1,4);
        echo $results;
        echo "<br>";

        //& is used to pass physical address instead of value 
        $result  = 0;
        function addPassByReference($a,$b,&$result = NULL){
            $result = $a+$b;
        }
        echo $result;
        addPassByReference(10,20,$result);
        echo "<br>";
        echo $result;
               ?>