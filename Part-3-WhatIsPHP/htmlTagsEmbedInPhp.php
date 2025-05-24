<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed PHP in HTML</title>
</head>
<body>
    <h1>Embed php in html</h1>
    <!-- Sample-1 -->
    <?php echo 'PHP embedded successfully' ?>

    <!-- Sample-2 -->
     <?php 
        print '<p>This is paragraph text </p>' ?>
    
    <?= '<hr />'  ?>
    <p>
        <?php 
             echo 'Sample 2:This text is printed from PHP!' ?>
    </p>

    <!-- Sample-3 -->
     <!-- <p style = "color:#ff0000">
        Sample 3: This is red text
     </p> -->
     <?php 
         echo '<p style = "color:red">This is red text</p>'
            ?>
    <p <?= '<p style = "color:green">'?>This is green text </p> 

    <!-- Sample-4 -->
     <?= '<p>' ?>
        This text is printed sample 4
     <?= '</p>' ?>

     <!-- whit -->
        </body>
</html>