<?php 
     include "header.php";
             ?>
<body>
        <?php 
             include "menu.php" 
                               ?>;
        <h1>Exercise on how to include files</h1>
        <?php 
              include "footer.htm"
                        ?>
        <!-- /*  
        Rest of the code gets executed if file is not  available in case of include .Rest of the code do not get executed if file is not available in case of require.It is highly recommended to use require instead of include 
                      */ -->
        <!-- include_once used to include it only once 
        If file is included then it will not include it again require_once has same case               -->
       
</body>