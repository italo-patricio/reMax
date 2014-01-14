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
      html, 
      body{
        padding-bottom: 0px;
        height: 100%;
        padding-top: 30px;  
       }

    /* Wrapper for page content to push down footer */
    #wrap {
      min-height: 100%;

      height: auto;
      /* Negative indent footer by its height */
      margin: 0 auto -60px;
      /* Pad bottom by footer height */
      padding: 0 0 60px;
    }
      #footer{
      position: relative;
      bottom: 0; /**/ 
      width: 100%;
      height: 60px;
      background-color: #f5f5f5;

      }
      .form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

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
        <div class="collapse navbar-collapse">
            <div class="container">  
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
                                         echo "<li><a href=\"{$v['link']}\">{$v['nome']}</a></li>";
                                     }
                                 }
                             }     
                               echo "</ul></li>";
                               
                          }//fim da verificação do dropdown
                          else
                            echo "<li><a href=\"{$value['link']}\">{$value['nome']}</a></li>";
                             
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
          
      
            
          </ul>
        </div><!-- /.container -->
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
          <!-- Fim do conteúdo da página -->
</div>

     <div id="footer">
       <div class="container">  
          <p class="text-muted">Copyright &copy; Company 2013</p>
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

