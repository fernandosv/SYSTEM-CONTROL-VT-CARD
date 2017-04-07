<html>  
    
    <head>
        <title> Login - Control VT Card </title>
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href=CSS/style.css>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    </head>
    <body>
       
        <div class="container-fluid">
            <header>
                <div id="cadastrar"><a href="/cadastro.php" title="Cadastre-se">Cadastre-se &raquo; </a></div>
            </header>
                <!--<div id="cadastrar"><a href="/cadastro.php" title="Cadastre-se">Cadastre-se &raquo; </a></div>-->
                <div class="row">
                    <div role="main">
                         <div id="login" class="bradius">
                             <div class="message"></div>
                             <div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="/CSS/imagens/log_vt_card.png" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="150" height="60" /></a></div>
                             <div class="acomodar">
                                 <form action="" method="post">
                                     <label for="email">E-mail</label><input id="email" type="email" class="txt bradius" name="email" value=""</>
                                     <label for="senha">Senha</label><input id="senha" type="password" class="txt bradius" name="senha" value=""</>
                                     <input type="submit" class="sb bradius" value="ENTRAR"/>
                                 </form>
                             <!--ACOMODAR-->
                             </div>
                         <!--LOGIN-->    
                         </div>
                        <!--ROLE MAIN-->
                    </div>
                    <!--CLASS ROW-->
                </div>
            <footer class="row">

            </footer>
        <!--CLASS CONTAINNER-FLUID-->
        </div>
    </body>
</html>

