
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./views/style.css" rel="stylesheet">
       
        <title> contact form </title>
          
    </head>

    <body>
        <div class='container'>

            <h3> Contact Form </h3>

            <div id="after_submit">
                <?php echo "<h3> $error </h3>" ?>
            </div>

            <form id="contact_form" action="./index.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <label class="required" for="name">Your name:</label><br />
                    <input id="name" class="input" name="name" type="text" value="<?php echo remeber_var('name') ?>"  /><br />

                </div>
                <div class="row">
                    <label class="required" for="email">Your email:</label><br />
                    <input id="email" class="input" name="email" type="text" value="<?php echo remeber_var('email') ?>"  /><br />

                </div>
                <div class="row">
                    <label class="required" for="message">Your message:</label><br />
                    <textarea id="message" class="input" name="message" value="<?php echo remeber_var('message') ?>" ></textarea><br />

                </div>
                <div class="btn-container">
                    <button id="submit" type="submit">Send email</button>
                    <button id="clear"  type="reset">clear form</button>
                </div>

                
                

            </form>

        </div>
        
    </body>

</html>