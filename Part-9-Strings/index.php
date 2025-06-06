<?php 
      
      //. operator used to combine two strings together 
      $firstName = "Divyanshu";
      $lastName = "Jain";
      $fullName = $firstName.$lastName;
      echo "Full name is $fullName";

      $marks = 100;
      $isPassed = true;
      $studentReportCard = "$fullName scored".$marks."and got passed - ".$isPassed;
      echo "<br>";
      echo $studentReportCard;

    //   Using heredoc
    $name = "Divyanshu Jain";
    $number = 100;

   $str = <<<DOC_LABEL
    You can write anything inside this."Double Quotes".<br> anything like this <br>. <strong> This is bold </strong> <br>.Name is $name  and operation performed is (10*10) <br>.(true)?"Effect"?"No effect" <br>.
DOC_LABEL;
echo $str;

 // Using newDoc 
  $str = <<<'DOC_LABEL'
  You can write anything inside this.It is mainly used for documentation purpose.No variable interpolation will be happening.
DOC_LABEL;
echo $str;   

// Length of string 
$fullNameLength =  strlen($fullName);
echo "<br>".$fullNameLength;

$fullName = '';
echo "<br>".strlen($fullName);

$fullName = null;
echo "<br>".strlen($fullName);

//Position of a string in php 
$content = "This is a string and it is a very long content";
$findContentWord = "string";
$position = strpos($content,$findContentWord);
echo "<br> Position of word $findContentWord is $position in $content";
//Position of content which is not available turns out to be empty string
$findContentWord = "content1";
$position = strpos($content,$findContentWord);
echo "<br> Position is $position";
//Never compare false with 0 here as 0 means 0th index while false means empty string is displayed as output in screen
if($position == false) echo "<br> String not found";

//Strings functions used commonly 
//1) Number of words 
$content = "You can do string operations easily with string functions";
$findWord = "operations";
$position = false;

//1)Number of words 
echo "<br> Number of words in string is ".str_word_count($content);

//2)Replace a string
echo "<br> Find and Replace operations with manipulations <br>".str_replace("operations","manipulations",$content);

//3)Reverse a string 
echo "<br>" . strrev($content);

//4) Shuffle a string 
echo "<br>". str_shuffle($content);

//5) Find position case insensitive 
echo stripos($content,"OPERATIONS");

//6) Uppercase and lowercase 
echo "<br>";
echo strtoupper($content);
echo "<br>";
echo strtolower($content);

//7) Word wrap of strings 
$content = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, quidem ea repellendus magni sed ipsum beatae placeat, atque fugit eum corporis explicabo nihil vel non, neque quaerat possimus iusto minus esse expedita incidunt. Placeat enim ipsum commodi iste sequi magnam natus reprehenderit quas inventore delectus nisi, esse quaerat excepturi earum, ab eligendi modi, dignissimos magni possimus totam consequuntur perspiciatis provident! Non molestias maxime, veniam ipsa ex deserunt distinctio consectetur beatae, adipisci ratione aliquid similique quos earum delectus, facilis corrupti nesciunt culpa magnam repudiandae iste iusto amet vel expedita nobis? Mollitia dolore molestias pariatur delectus iusto asperiores ex id, consectetur eum! ";
echo wordwrap($content,2);
echo "<br>";
echo trim($content);
?>