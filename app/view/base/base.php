<?php if(!defined('BASEPATH')) exit('Falha no carregamento do script!'); 

       foreach ($val as $array) {
           foreach ($array as $key => $value) {
                   if( $key == 'titulo'   )   $titulo = ($value);   
                   if( $key == 'control'  )  $control = ($value);   
                   if( $key == 'menus'  )    $menu = ($value);                      
           }         
         
        } 
       if(isset($titulo) && $titulo !=NULL);
       else $titulo = 'sem titulo';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?=
          $titulo
        ?>
    </title>

    <!-- Bootstrap core CSS -->
    <!-- Add custom CSS here -->
    <?php
     #----------CSS----------#
     //allLoadCss(BOOTSTRAPCSS);
     //loadCss('bootstrap.min',BOOTSTRAPCSS);
        allLoadCss(BASECSS);
       // LoadCss('css/font-awesome.min',BASEFONTS);
     #----------CSS----------#  
    

    ?>
    <style type="text/css">
        .dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu:hover>.dropdown-menu{display:block;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
    </style>
  </head>

  <body>

   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          <a class="navbar-brand" href="index">Reabilitação Buco-Maxilar de Pacientes</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
                           
            
               

            <?php
      
                    if(isset($menu)){
                        echo $menu; 
                    }
                    else {
                        echo 'Falha no carregamento do menu!';
                    }
            ?>  
          
         
         <!--     
            <li><a href="<?=BARRA.url_base?>/menu/novoUsuario">Cadastra-se</a></li>
            <li><a href="<?=BARRA.url_base?>/menu/login">Login</a></li>
          -->
   
     
  </ul> <!--ul geral-->

      </div><!-- /.navbar-collapse -->
    
   </div>
  </div>   
      

  <div id="wrap">
      <?php
        if(isset($_SESSION['msg'])){
            echo 
            " <div class='section'>
      <div class='container'>
     
              <div class=\"alert alert-{$_SESSION['msg']['tipo']}\">{$_SESSION['msg']['texto']}</div>
          
      </div>
      </div>";
            stopSession('msg');   
        }
      ?>
   
          <!-- Início do conteúdo da página -->
          <div class="container">
           <?php
                if(isset($content_page)) echo $content_page;
                else echo 'Falha no carregamento!';
           
           ?>
              
   
         
          </div>
  </div>
              
              
        
          <!-- Fim do conteúdo da página -->
      
   
     <div id="footer">
       
         <div class="container">  
          <p class="text-muted">Desenvolvido por José Weverton Olvieira Silva-UFRN</p>
     
         </div>   
      </div>   
   
  <?php 
   
     #-------JAVASCRIPT------#   
       allLoadJs(BASEJS);
    
         // loadJs('1-jquery-1.10.2');
          //loadJs('bootstrap.min',BOOTSTRAPJS);
          //allLoadJs(BOOTSTRAPJS);
     #-------JAVASCRIPT------#   
  
  ?>
  </body>
</html>

