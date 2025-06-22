
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM GET</title>
      </head>
      <body>
        <h1>Form get</h1>
        <a href="index.html">Home</a>
        <?php 
        $name = $_GET['name'];
        $email = $_GET['email'];
        echo "Name: $name & Email:$email";
          ?>
      </body>
      </html>
               