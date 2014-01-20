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
              
                 // print_r($menu);  
                    if(isset($menu)){
                        foreach ($menu as $value) {
                          if(isset($value['dropdown'])){
                                echo "<li class=\"dropdown\">";
                                   
                            foreach ($value as $val) {
                              
                                 foreach ($val as $key => $values) {
                                       echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{$key}<b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">";
                                     foreach ($values as  $v) {
                                         echo "<li><a href=\"{$v['link']}\">{$v['nome']}</a></li>\n";
                                     }
                                 }
                             }     
                               echo "</ul></li>";
                               
                          }//fim da verificação do dropdown
                          else
                            echo "<li><a href=\"{$value['link']}\">{$value['nome']}</a></li>\n";
                             
                        }
                    }
                    else {
                        echo 'Falha no carregamento do menu!';
                    }
            ?>  
           <!-- 
         
         <!--     
            <li><a href="<?=BARRA.url_base?>/menu/novoUsuario">Cadastra-se</a></li>
            <li><a href="<?=BARRA.url_base?>/menu/login">Login</a></li>
          -->
 
   <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatório<b class="caret"></b></a>
 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                  <li><a tabindex="-1" href="#">Action</a></li>
                  <li><a tabindex="-1" href="#">Another action</a></li>
                  <li><a tabindex="-1" href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu pull-left">
                    <a tabindex="-1" href="#">More options</a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                    </ul>
                  </li>
                </ul>
    </li>     
     
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
              
      <div class="section">
        <div class="container">
           <div class="form-group col-lg-12">
             <h6>Instituições de apoio:</h6>
      
      <img src="<?=BARRA.url_base.BARRA.BASEIMAGES?>UFRN1.jpg" alt="" class="img-rounded" width="150px" height="200px">
      <img src="<?=BARRA.url_base.BARRA.BASEIMAGES?>uern.jpg" alt="" class="img-rounded" width="150px" height="100px">
      <img src="<?=BARRA.url_base.BARRA.BASEIMAGES?>proex.jpg" alt="" class="img-rounded" width="150px" height="100px">
      <img src="<?=BARRA.url_base.BARRA.BASEIMAGES?>liga.jpg" alt="" class="img-rounded" width="150px" height="100px">
            </div>
        </div>
      </div>
              
              
              
          </div>
          <!-- Fim do conteúdo da página -->
  </div>
   
     <div id="footer">
       <div class="container">  
          <p class="text-muted">Desenvolvido por José Weverton olvieira Silva</p>
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

