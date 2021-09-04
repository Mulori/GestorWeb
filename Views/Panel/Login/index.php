<?php
    session_start();
    $WebSiteURL = "http://192.168.0.114";
?>

<!DOCTYPE html>

<html>
    <head>
        <title>GW | Login</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="<?php echo("".$WebSiteURL."/Assets/CSS/Login.css")?>"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/8aae9daeac.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div class="div_login_main">
            <div class="div_input_forms">
                <div class="div_responsive_input">
                    <form action="#" method="POST">
                        <img class="img_logotipo" src="https://i.postimg.cc/d3ZW0LjD/gestor-logo-app.png"/>
                        <input class="class_input" id="input_responsive" placeholder="Insira o cnpj" type="text"/>
                        <input class="class_input" placeholder="Insira o nome de usuário" type="text" />
                        <input class="class_input" placeholder="Insira a senha" type="password" />    
                        <button type="submit"  class="class_input" id="button_login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>