<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginControl
 *
 * @author italo
 */
class login extends controller  {
   public function validar(){
      $login = isset($_POST['login']) ? $_POST['login']: NULL ;
      $senha = isset($_POST['senha']) ? $_POST['senha']: NULL ;
     if($login != NULL && $senha != NULL){
               if($ret = $this->autentica(addslashes($login), addslashes($senha))){
                   //msg(1,'usuario autenticado com sucesso!' );
                   $_SESSION['session']['logado']= $ret;
                   redirecionar('menu/areausuario');
               }
               else{ 
                 msg(2,'Usuário inválido!' );
                   redirecionar("menu/login");
               }
               
     }
     else{ 
          msg(2,'Usuário ou senha não informado!' );
         redirecionar("menu/login");
     }
   }
   private function autentica($login,$senha){
       $retorno= crud::consultar(array('nome'),'usuario',"login='$login' AND senha='$senha'");
       if(!empty($retorno))  return $retorno;
       
      return FALSE;
   }
   public function logoff(){
       stopSession();
       msg(2, 'Usuário desconectado com sucesso!');
       redirecionar();
   }
  
}

