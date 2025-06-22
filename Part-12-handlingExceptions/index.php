<?php 
   //If there is an error in try block then it jumps to catch ball and it is done automatically by php 
   function divide($x,$y):int {
    if($y<=0){
        throw new Exception("Divide by zero exception might happen");

    }
    $result = $x/$y;
    return $result;
   }
   try{
    //There is an error in this block
    $result = divide(1,0);
   }catch(exception $e){
    //Jump to this block if try block has an error
    echo "Caught exception".$e->getMessage();
   }

   //Custom Exception Handlers 
   function custom_exception_handler($exception){
    echo "Caught exception: ".$exception->getMessage();
   }

   set_exception_handler("custom_exception_handler");
   throw new exception("Exception is raised");
   
   function dividing($x,$y){
    try{
        if($y<=0){
            throw new Exception("Divide by Zero exception might happen");
        }
        $result = $x/$y;

    } catch(Exception $e){
        throw new Exception("Divide method has input param less than zero").$e->getMessage();
    }
    return $result;
   }

   //Finally Block 
   //These are basically executed before exception is raised 
   // Even if we throw an exception this line gets executed
   try{
    throw new Exception("Exception get raised");
   } finally {
    echo "This line gets executed before exception";
   } 

   //Error handlers
   function custom_error_handler($errno,$errstring){
    echo $errstring;
   }
   set_error_handler('custom_error_handler');
   echo (5/0);
                          ?>