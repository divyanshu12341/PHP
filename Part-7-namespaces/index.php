<?php 

   /* 
   1) Namespaces are case-insensitive.
   2) It is used to avoid name collision between other libraries
   3) namespace is the keyword used to define namespace 
   4) Only classes,interface,functions and constants should be defined in workspaces.
   5) namespaces should always be in the first line
   6)include is used to include any file from another file
   7) use backslash to refer subdirectories or file name  
                   */
   //Include namespace file 
     include "namespaceConstants.php";
     include "namespaceSub.php";
     //access it
     echo myconstants\FILE_NAME;
     echo "<br>";
     echo sub\sub1\FILE_NAME;

     //
         ?>