<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>MP3 em PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    
    
    </head>
    <body>
        <div class="container">
            <?php
                include_once 'helpers.php';
                
                if(isset($_GET['page'])){
                    if (file_exists("pages/{$_GET['page']}.php")){
                        include_once "pages/{$_GET['page']}.php";
                    }else {
                        include_once 'pages/404.php';
                    }
                    
                } else {
                    include_once 'pages/albums.php';
                }
            
            ?>
        </div>
    </body>

</html>