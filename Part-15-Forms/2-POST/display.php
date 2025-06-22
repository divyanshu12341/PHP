
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM POST</title>
      </head>
      <body>
        <h1>Form get</h1>
        <a href="index.html">Home</a>
        <?php 
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo "Name: $name & Email:$email";
          ?>
      </body>
      </html>
               