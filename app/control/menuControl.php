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
        
         if(isset($_SESSION['session']['logado'])){
            
            $menu = "<li class=\"dropdown \" id=\"accountmenu\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Material<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"dropdown\">
                          <a tabindex=\"-1\" href=\"#\">Inserir Material</a>
                        </li>
                        <li class=\"dropdown\">
                          <a tabindex=\"-1\" href=\"#\">Visualizar Materiais</a>
                        </li>
                    </ul>
            
                <li class=\"dropdown\" id=\"accountmenu\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Paciente<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                       
                      	<li class=\"dropdown-submenu\">
                          <a tabindex=\"-1\" href=\"#\">Cadastro</a>
                          <ul class=\"dropdown-menu\">
                            <li><a tabindex=\"-1\" href=\"#\">Cadastro Geral</a></li>
                            <li class=\"dropdown-submenu\">
                              <a href=\"#\">Cad Específico</a>
                              <ul class=\"dropdown-menu\">
                                  <li><a href=\" ".BARRA.url_base."/menu/cadespecmed\">Medicina</a></li>
                                  <li><a href=\"#\">Psicologia</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        
                        
                        <li class=\"dropdown-submenu\">
                          <a tabindex=\"-1\" href=\"#\">Exames</a>
                          <ul class=\"dropdown-menu\">
                            <li><a tabindex=\"-1\" href=\" ".BARRA.url_base."/menu/exame1\">Inserir Exames</a></li> 
                          </ul>
                        </li>
                        
                        
                        <li class=\"dropdown-submenu\">
                          <a tabindex=\"-1\" href=\"#\">Odontologia</a>
                          <ul class=\"dropdown-menu\">
                            <li><a tabindex=\"-1\" href=\"#\">Anamnese</a></li>
                            
                            <li class=\"dropdown-submenu\">
                              <a href=\"#\">procedimento</a>
                              <ul class=\"dropdown-menu\">
                                  <li><a href=\"#\">Novo Procedimento</a></li>
                                  <li><a href=\"#\">Buscar Procedimento</a></li>
                              </ul>
                            </li>
                            
                            <li class=\"dropdown-submenu\">
                              <a href=\"#\">Prótese</a>
                              <ul class=\"dropdown-menu\">
                                  <li><a href=\"#\">Imagens</a></li>
                                  <li><a href=\"#\"></a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                       
                      <li class=\"dropdown-submenu\">
                          <a tabindex=\"-1\" href=\"#\">Exames</a>
                          <ul class=\"dropdown-menu\">
                            <li><a tabindex=\"-1\" href=\"#\">Inserir Exames</a></li> 
                          </ul>
                       </li>  
                       
                       <li class=\"dropdown\">
                       <a tabindex=\"-1\" href=\"#\">Visualizar Paciente</a>
                       </li>   
                        
                        
                    </ul>
                </li>
                
                
                  <li class=\"\"><a href=\"#\">Produção Intelectual</a></li>
                
                
                  <li class=\"dropdown\" id=\"accountmenu\">
                    <a class=\"dropdown-toggle\"data-toggle=\"dropdown\" href=\"#\">Relatório<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                     <li class=\"dropdown\">
                          <a tabindex=\"-1\" href=\"#\">Enviar Relatório</a>
                     </li>

                    </ul>
                  
                   
                    
                       <li class=\"\"><a href=\"\">Sair</a></li> ";
      }  
     else {
        
        $menu = "<li class=\"\"><a href=\"menu/cadastropaciente\">Cadastrar-se</a></li>

                 <li class=\"\"><a href=\"/menu/login\">Login</a></li>";
                    
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
    
    public function recsenha(){
        
        //titulo da pagina
        $this->atr_page['titulo'] = 'Recuperar Senha';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('recuperarSenha', $this->res);  
    }
    
  //Parte de exame
    public function exame1(){
        
        //titulo da pagina
        $this->atr_page['titulo'] = 'Exame';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('Exame1', $this->res);  
    }
   
    public function exame2(){
        
        //titulo da pagina
        $this->atr_page['titulo'] = 'loginExame';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('exame2', $this->res);  
    }
    //fim da parte de exames
    
    //Inicio das páginas de odontologia
     public function anamnese(){
        
        //titulo da pagina
        $this->atr_page['titulo'] = 'anamnese';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('anamnese', $this->res);  
    }
    
     public function procedimento(){
        
        //titulo da pagina
        $this->atr_page['titulo'] = 'procedimento';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('procedimento', $this->res);  
    } 
    
    //fim das páginas de odontologia
  
    
    //Inicio de relatório
    
     public function relatorio(){
        
        //titulo da pagina
        $this->atr_page['titulo'] = 'relatorio';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('relatorio', $this->res);  
    }
    // Fim de relatórios

 public function teste(){
        
        //titulo da pagina
        $this->atr_page['titulo'] = 'teste';    
        //classe do controle 
        $this->atr_page['control'] = 'menu/';
        
        $this->res[] = $this->atr_page;
        
       $this->view('teste', $this->res);  
    }
    
     }





