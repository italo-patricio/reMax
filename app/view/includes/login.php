<?php if(!defined('BASEPATH')) exit('Falha no carregamento do script!');

?>
<!--
	Início de conteúdo
-->
 <div class="container">

     <form class="form-signin" role="form" method="post" action="<?=BARRA.url_base.BARRA ?>login/validar">
        <h2 class="form-signin-heading">Logar-se</h2>
        <input type="text" class="form-control" name="login" placeholder="login" required autofocus>
        <input type="password" class="form-control" name="senha" placeholder="senha" required>
      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
        <label>
            <a href="">
                Recuperar senha
            </a>
        </label>
      </form>

    </div> <!-- /container -->
<!--
	Fim de conteúdo
-->