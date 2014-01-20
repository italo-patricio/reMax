<?php  if(!defined('BASEPATH')) exit(header('Location: ./../../index.php'));
/**
 * Description of menuControl
 * Serve para carregar exibir as view's
 * @author italo
 */


class menu extends controller {
    
    //variavel $res serve para enviar paramentros de resultados para a view requisitada 
    //o valor dela antes de chegar na view passa pelo arquivo controller.php recebebendo
    //um outro nome de variável, a qual será utilizada dentro da view
    private $res = array();
    
    //Variavel $atr_page serve para informar atributos básico para a view informada
    private $atr_page;
    
    function __construct() {
        parent::__construct();
        $this->loadMenu();
    }

    private function loadMenu(){
     $menu = array();
        if(isset($_SESSION['session']['logado'])){
            $menu = array(
                 array( 
                          "dropdown"=> array(
                              "Material" => array(
                            array(
                            "link" => BARRA.url_base."#",
                            "nome" =>'Inserir material'
                            ),
                           array(
                            "link" => BARRA.url_base."#",
                            "nome" =>'Visualizar Materiais'
                            )
                              
                      )
                          )
                       ),
                array( 
                     "dropdown"=> array(
                      "Odontologia" => array(
                                  array(
                            "link" => BARRA.url_base."#",
                            "nome" =>'Procedimento'
                            ),
                                  array(
                            "link" => BARRA.url_base."#",
                            "nome" =>'Próteses'
                            ),
                                  array(
                            "link" => BARRA.url_base."#",
                            "nome" =>'Imagem'
                            )
                                  )
                      )
                        ),
                array( 
                          "dropdown"=> array(
                              "Produção Intelectual" => array(
                                                           array(
                                                                "link" => BARRA.url_base."#",
                                                                "nome" =>''
                                                          )
                                  )
                      )
                       ),
                array(
                           "dropdown"=> array(
                                            "Paciente" => array(
                                                    array(                                                        
                                                        "link" => BARRA.url_base."/menu/cadastropaciente",
                                                        "nome" =>'Cadastro'
                                                    ),
                                                    array(                                                        
                                                        "link" => BARRA.url_base."/menu/cadespecmed",
                                                        "nome" =>'Especifico Medicina'
                                                    ),
                                                    array(                                                        
                                                        "link" => BARRA.url_base."/menu/cadespecpsi",
                                                        "nome" =>'Especifico Psicologia'
                                                    ),

                                                    array(                                                        
                                                        "link" => BARRA.url_base."/menu/#",
                                                        "nome" =>'Exames'
                                                    ),
                                                    array(                                                        
                                                        "link" => BARRA.url_base."/menu/#",
                                                        "nome" =>'Procedimentos'
                                                ),
                                                    array(                                                        
                                                        "link" => BARRA.url_base."/menu/#",
                                                        "nome" =>'Visuaizar Paciente'
                                                )
                             )  
                          )
                        ),
                      array( 
                          "dropdown"=> array(
                              "Relatório" => array(
                                  array(
                            "link" => BARRA.url_base."#",
                            "nome" =>'Enviar Relatório'
                            )
                                  )
                      )
                       ),
                  array(
                      "link" => BARRA.url_base."/login/logoff",
                      "nome" =>'Sair'
                  )
           );
      }  
     else {
        
         $menu = array(
                    array( 
                            "link" => BARRA.url_base."/menu/novoUsuario",
                            "nome" =>'Cadastra-se'
                        ),
                     array(
                           "link" => BARRA.url_base."/menu/login",
                           "nome" =>'Login'
                        )
              
        );  
      }  
     //$menu[1]['nome']
      
      $this->res[] = array("menus" => $menu); 
    }



    public function index(){
        //titulo da pagina
        $this->atr_page['titulo'] = 'Primeira Página com iwork';	
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('inicio', $this->res);  
    }
    public function login(){
     
        //titulo da pagina
        $this->atr_page['titulo'] = 'logar-se';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('login', $this->res);  
    }
   
    public function novoUsuario(){
     
        //titulo da pagina
        $this->atr_page['titulo'] = 'cadastrousuario';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('cadastrousuario', $this->res);  
    }
      public function cadastropaciente(){
     
        //titulo da pagina
        $this->atr_page['titulo'] = 'cadastroPaciente';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('cadastroPaciente', $this->res);  
    }
    public function areausuario(){
        //titulo da pagina
        $this->atr_page['titulo'] = 'Área do Usuário';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('area_user', $this->res);  
    }


    
    public function cadespecmed(){
        //titulo da pagina
        $this->atr_page['titulo'] = 'Medicina';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('cadastroEspecificoMedicina', $this->res);  
    }
    
    
    
    public function cadespecpsi(){
        
        //titulo da pagina
        $this->atr_page['titulo'] = 'Cadastro Esp. Psicologia';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('cadastroEspecificoPsicologia', $this->res);  
    }
}


