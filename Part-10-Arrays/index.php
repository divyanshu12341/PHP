<!-- Define and access an array -->
<?php 
    $arr = [1,2,3,false];

    //function to print array
    var_dump($arr);

    //2nd way to print array
    echo "<br>";
    print_r($arr);
    echo "<br>";
    echo $arr;
    echo "<br>";
    //Access and print arrays 
    echo $arr[0]. "&nbsp;".$arr[1]."&nbsp;".$arr[2]."&nbsp;".$arr[3]."&nbsp;";
    //$arr is a array variable
    //$arr[0] is an array element 
    //0 is a index of a array
    //array index starts with 0 not 1
    //Array can store any type of values which can be strings,integer,double or boolean
    //Arrays has length based on  no of elements it has
    // We can have array inside array
    //Usecase:Collection of variables together 
    echo "<br>";
    echo " Array length: ".count($arr);
    echo "<br>";
    //Loop through the array using for loop 
    for($count=0;$count<count($arr);$count++){
        echo $arr[$count]."&nbsp; &nbsp; &nbsp;";
    }

    //Access array element inside the string using constant 
    const ARRAY_ELEMENT = 1;
    echo "{$arr[ARRAY_ELEMENT]}"."<br>";
    $arr[0] = 5;
    $arr[1] = 6;
    $arr[2] = 7;
    print_r($arr);

    $arr[0] = "This is a String";
    $arr[1] = true;
    $arr[2] = 7;
    $arr[3] = 5.4;
    echo "<br>";
    print_r($arr);

    //Store any data types of array 
    //Indent the arrays 
    $array1  = [1,
                "String",
                false,
                23.2
];
echo "<br>";
var_dump($array1);

//For-Each Loop
/* 
foreach($arr as $value){
//code to be executed 
}    */

$arr2 = ["Mon","Tue","Wed","Th","Fri","Sat","Sun"];
echo "<br>";
foreach($arr2 as $value){
    echo $value."<br>";
}
echo "<br>";
$counter = 0;
foreach($arr2 as $value){
  echo "[$counter]=>$value"."<br>";
  $counter++;
}

$counter = 0;
$arr = ["Mon",1,"Wed",true,"Fri",7.5,"Sun"];
echo "<br>";
foreach($arr as $values){
    echo "[$counter]=>$values"."<br>";
    $counter++;
}
echo "<br>";
var_dump($arr);

    /* 
        Empty Arrays
              */
    $arr = [];
    echo count($arr)."<br>";
    var_dump($arr)."<br>";
    print_r($arr)."<br>";
    if(empty($arr)){
        echo "<br> Array is empty <br>";
    }

    //It converts an array into integer
    $arr = 10;
    var_dump($arr);

    $arr = [10];
    var_dump($arr);
    echo "<br>";
    //Storing index value as an array
    $arr[0] = [10];
    var_dump($arr);
    echo "<br>";
    //Reset the array
    $arr = [];
    var_dump($arr);
    echo "<br>";
    if(empty($arr)){
        echo "Array is empty <br>";
    }
    $arr = [[]];
    var_dump($arr);
    //Remember [] means empty array

    /* 
       Mixed arrays 
       if index is not specified then PHP will use increment of the largest previously used integer key
                         */
    $arr = [];
    $arr[0] = 1;
    $arr[2] = "String";
    $arr[4] = true;
    $arr[10] = 14.5;

    //Adding new values to array
    $arr[] = "New String 1";
    $arr[] = "New String 2";
    echo "<br>";
    var_dump($arr);
    echo "-----------<br>";
    print_r($arr);

    /* 
         Indexed Array

         Indexed arrays has integer indexed numbers 
         Index starts with 0
         New elements gets the index of highest index + 1 number
         You can always break the sequence and add new elements to future index
                        */
        $arr = [1,2,3,4,5,6];
        var_dump($arr);
        echo "<br>";
        $arr[100] = 100;
        echo "<br>";
        var_dump($arr);

        echo "<br>";
        $arr[] = 101;
        var_dump($arr);

       /* 
          Associative Array
          In associative array you specify the index
          index => value
          => is a special symbol for defining associative array
          left one is key and right one is value
          key is index and right one is value of that index
                              */
    //Indexed array
    $arr = ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"];

    // Associative array
    $arr = [0=>"Mon",
            1=>"Tue",
            2=>"Wed",
            3=>"Thu",
            4=>"Fri",
            5=>"Sat",
            6=>"Sun"];
            echo "<br>";
    var_dump($arr);
    echo "<br>";
    foreach($arr as $value){
        echo "$value <br>";
    }
    foreach($arr as $key=>$value){
        echo "$key =>$value <br>";
    }

    //Print all the keys 
    print_r(array_keys($arr));

    //Access only the keys 
    foreach(array_keys($arr) as $key1){
        echo $key1. "<br>";
    }

    $userDetails = [
        "John" =>"john111@gmail.com",
        "Jenny" =>"jenny123@gmail.com",
        "Ajit" =>"ajit123@gmail.com"
    ];
    var_dump($userDetails);
    echo "<br>".$userDetails["John"]."<br>";
    echo $userDetails["Jenny"]."<br>";
    echo $userDetails["Ajit"]."<br>";

    $userDetails["Mary"] = "mary010@gmail.com <br>";

    //Add an element at end of array 
    $userDetails["Jane"] = ["Jane@gmail.com"];


    /* 
      Multi-Dimensional Array 
      Array inside an array is called as multidimensional array.
      Array holding one or multiple arrays

      
                                */
    //Single dimensional Indexed Array 
     $arr = [1,2,3,4,5];
     var_dump($arr);

     //Single dimensional Associative arrays 
     $arr1 = [
        "John" =>"JohnSmith@google.com",
        "Jane" =>"JaneWilliams@yahoo.com"
     ];
     //Multidimensional Indexed arrays 
     $arr2 = [
        [1,2,3,4,5,6],
        [7,8,9],
        [10,11]
     ];
     var_dump($arr2);

     foreach($arr2 as $singleArr){
        var_dump($singleArr);
     }

     echo "<br>";

     foreach($arr2 as $singleArr){
        foreach($singleArr as $value){
            echo $value."<br>";
        }
     }

     //Multi dimensional associative array 
     $arr3 = [
        "emaillist1"=>[
            "John1"=>"John1@gmail.com",
            "John2"=>"John2@gmail.com",
            "John3"=>"John3@gmail.com"
        ],
        "emaillist2"=> [
            "Jenny1" =>"Jenny1@gmail.com",
            "Jenny2" =>"Jenny2@gmail.com",
            "Jenny3" =>"Jenny3@gmail.com"
        ]
        ];
     foreach($arr3 as $valueArray){
        foreach($valueArray as $values){
            var_dump($values);
        }
     }
     //Access all  key value pairs .Key is string and value is arrays 
     echo "<br>";
     foreach($arr3 as $key=>$valueArray){
        foreach($valueArray as $keys=>$value){
            echo "Key is $keys and value is $values <br>";
        }
        echo "Values for $key is : <br>";
     }

     //Unset array
     //Remove/Delete elements from aray safely 
     $arr = [1,2,3,4,5];
     echo "<br>";
     print_r($arr);
     unset($arr[1]);
     echo "<br>";
     print_r($arr);
     echo "<br>";
     $arr1 = ["first"=>1,2,3,4,"last"=>5,6,7,8];
     print_r($arr1);
     echo "<br>";
     unset($arr1["last"]);
     print_r($arr1);
     echo "<br>";
     unset($arr1["last"]);
     print_r($arr1);
     echo "<br>";
     $arr1["last"] = 5;
     print_r($arr1);

     /* 
        Sort arrays 
                    */
    //sort() and rsort()
    //Indexed array 
    $arr = [5,2,4,3,0,1];
    echo "<br>";
    print_r($arr);
    sort($arr);
    echo "<br>";
    print_r($arr);
    rsort($arr);
    echo "<br>";
    print_r($arr);
    echo "<br>";
    $arr1 = ["3"=>"John","2"=>"Smith","4"=>"Hero","1"=>"Splendor"];
    asort($arr1);
    print_r($arr1);
    echo "<br>";
    arsort($arr1);
    print_r($arr1);
    echo "<br>";

    //ksort and krsort
    ksort($arr1);
    print_r($arr1);
    echo "<br>";
    krsort($arr1);
    print_r($arr1);
    echo "<br>";

    /* 
      Copy array 
                     */
    $arr = [0,1,2,3,4,5];
    $arr2 = $arr;
    var_dump($arr);
    echo "<br>";
    var_dump($arr2);
    
    //2ND WAY 
    foreach($arr2 as $values){
        $arr2[] = $values;
    }

    //Associative array
    $arr2 = ["Steve"=> "Rojers", "Doctor" => "Strange"];
    $arr3 = $arr2;
    echo "<br>";
    var_dump($arr3);

    $arr4 = [];
    foreach($arr4 as $key=>$value){
        $arr4[$key] = $value;
    }

    /* 
      Split arrays 
                      */
    //string to array
    $students = "Divyanshu ,Jain, Vansh, Vijay";
    $studentsArr = explode(" ",$students);
    echo "<br>";
    print_r($studentsArr);
    //array to string 
    $studentList = implode(",",$studentsArr);
    echo "<br>";
    print_r($studentList);
    echo "<br>";
    //Limited no of array elements 
    $studentArr = explode(",",$students,3);
    print_r($studentArr);

    ?>

