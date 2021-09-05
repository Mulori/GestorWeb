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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script src="https://use.fontawesome.com/8aae9daeac.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>

        

        <div class="div_login_main">

            <div class="div_input_forms">
                <?php
                    if(isset($_SESSION['not_authorized'])):
                ?>
                    <div class="erro_formLogin">
                        <span class="label02_formLogin">E-mail ou senha inválidos.</span>
                    </div>
                <?php
                    endif;
                    unset($_SESSION['not_authorized']);
                ?>
            

                <div class="div_responsive_input">


                

                    <form action="../../../Librarys/ValidateLogin.php" method="POST">
                        <img class="img_logotipo" class="class_input" src="https://i.postimg.cc/d3ZW0LjD/gestor-logo-app.png"/>
                        <input name="cnpj" class="class_input" required="" autofocus="" id="input_responsive" placeholder="Informe o CNPJ" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="14" data-mask="00.000.000/0000-00"/>
                        <input name="username" class="class_input" required="" placeholder="Informe o Nome de Usuário" type="text" />
                        <input name="password" class="class_input" required="" placeholder="Informe a Senha" type="password" />    
                        <button type="submit"  class="class_input" id="button_login">Acessar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<!--
<script type="text/javascript">
    $("#input_responsive").mask("00.000.000/0000-00");
 </script>
        -->