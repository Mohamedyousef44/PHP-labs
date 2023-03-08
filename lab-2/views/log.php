<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./views/style.css" rel="stylesheet">
       
        <title> contact form </title>
          
    </head>

    <body>
        <div class="container" >

            <h3> LOG FILE </h3>
            <div>
                <?php 
                    foreach (read_log_file() as $value){?>
                    <p> <?php   echo "$value <br>";?> </p>
                    <?php } ?>
            </div>
        </div>
        
    </body>

</html>
