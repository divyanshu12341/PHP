<?php
// <!-- date(format,timestamps)
//  d -- it represents day of the month.
//  (01 or 02 or 30)
//  D -- Represents day of the week(Mon to Sun)
//  m -- it represents month in numbers with trailing zeros (01 to 12)
//  M -- it represents month in text
//  (Sun to Sat)
//  y -- represent year in 2 digits (08 or 14)
//  Y -- Represent year in 4 digits (2008 or 2014)
// -->
 echo "Current Date: ".date('d').'<br>';
 echo "Current Month: ".date('m').'<br>';
 echo "Current Year: ".date('y').'<br>';
 echo "Current time: ".date('d-m-y').'<br>'; 

/*
  h - Represents hours in 12 hour format
  H - Represents hours in 24 hour format 
  i - Represents minutes with leading zeros
  s - Represents seconds with leading zeros
  a - Represent lower case anti meredian or post meredian
  A - Represent Upper case ante meridiem or post meridiem 
                */
    /*
      h - Represent hour in 12 hour format 
      H - Represent hour in 24 hour format 
      i - Represent minutes with leading zeros 
      s - Represent seconds with leading zeros       
          */
    echo "Current Date: ".date("d-m-y h:i:s::a")."<br>";

    //Milliseconds 
    echo "Current time in milliseconds: ".time()."<br>";
    $time = time() +  1000;
    echo "Increment time is ".$time."<br>";

    echo "Current date is ".date('d-m-y h:i:s:a',$time);

    //Converting timestamp
    
    //date to date array
    $dateArr = getdate();
    var_dump($dateArr);
    foreach($dateArr as $format=>$val){
        echo "$format => $val"."<br>";
    }

    echo "Weekday: ".$dateArr["weekday"]."<br>";
    echo "Weekday: ".getDate()["weekday"]."<br>";
    echo "Year: ".getDate()["year"]."<br>";

    //Use case of date 
    echo date_create("now")->format("Y-M-D H:i:s")."<br>";
    echo date_create("+1 day")->format("y-m-d h:I:s")."<br>";
    echo date_create("-1 day") ->format("y-M-d H:i:S")."<br>";

    $strTime = strtotime("2019-05-21 9:00:00");
    echo date("d-m-y h:i:s",$strTime);
    
  ?>
