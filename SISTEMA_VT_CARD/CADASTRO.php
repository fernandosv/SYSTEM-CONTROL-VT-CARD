<html>    
    <head>
        <title> CADASTRO - Control VT Card </title>
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href=CSS/style.css>
    </head>
    <body>
        <div id="cadastrar"><a href="index.php" title="ENTRAR">Login &raquo; </a></div>
        <div id="login" class="bradius" style="top: 120px;">
            <div class="message"></div>
            <div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="/imagens/log_vt_card.png" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="150" height="60" /></a></div>
            <div class="acomodar">
                <form action="" method="post">
                    <label for="nome">Nome</label><input id="nome" type="text" class="txt bradius" name="nome" value=""</>
                    <label for="end">Endereço</label><input id="end" type="email" class="txt bradius" name="end" value=""</>
                    <label for="email">E-mail</label><input id="email" type="email" class="txt bradius" name="email" value=""</>
                    <label for="senha">Senha</label><input id="senha" type="password" class="txt bradius" name="senha" value=""</>
                    <input type="submit" class="sb bradius" value="CADASTRAR"/>
                </form>
            <!--ACOMODAR-->
            </div>
        <!--LOGIN-->    
        </div>
        
    </body>
</html>