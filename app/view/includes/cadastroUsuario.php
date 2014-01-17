<?php if(!defined('BASEPATH')) exit('Falha no carregamento do script!');



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

    <div class="section"> 
    <div class="container">  
    <div class="row">

        <form>
      
<legend>Cadastro do usuário</legend>

<!-- Text input-->
<div class="form-group col-lg-4">
   <label for="Nome">Nome completo</label>
   <input id="Nome" name="Nome" placeholder="Maria Gabriela de Souza" class="form-control" type="text">
 
</div>

<!-- Text input-->
<div class="form-group col-lg-2">
  
    <label  for="textinput">Login</label>
  <input id="textinput" name="textinput" placeholder="Informe o Login" class="form-control" type="text">
    
  </div>


<!-- Password input-->
<div class="form-group col-lg-2">
 
    <label for="passwordinput">Senha</label>
  <input id="passwordinput" name="passwordinput" placeholder="Digite sua senha" class="form-control" type="password">
    
</div>

<!-- Password input-->
<div class="form-group col-lg-2">
  
  <label for="passwordinput">Confirmar senha</label>
  <input id="passwordinput" name="passwordinput" placeholder="Digite sua senha novamente" class="form-control" type="password">
    
</div>

<!-- Select Basic -->
<div class="form-group col-lg-3">
  
<label  for="selectbasic">Sexo</label>
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option>Selecionar</option>
      <option>Masculino</option>
      <option>Feminino</option>
    </select>

</div>

<!-- Text input-->
<div class="form-group col-lg-2">
 
  <label  for="textinput">Data de Nascimento</label>
  <input id="textinput" name="textinput" placeholder="" class="form-control" type="date">
    
</div>

<!-- Select Basic -->
<div class="form-group col-lg-2">
  <label for="selectbasic">Estado Civil</label>
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option>Selecionar</option>
      <option>Casado(a)</option>
      <option>Solteiro(a)</option>
      <option>Viúvo(a)</option>
      <option>Outros</option>
    </select>
</div>

<!-- Text input-->
<div class="form-group col-lg-2">
  
    <label for="textinput">CPF</label>
    <input id="textinput" name="textinput" placeholder="Informe seu cpf" class="form-control" type="text">
    
</div>

<!-- Text input-->
<div class="form-group col-lg-2">
  
    <label  for="textinput">Identidade</label>
    <input id="textinput" name="textinput" placeholder="Informe sua identidade" class="form-control" type="text">
    
</div>

<!-- Select Basic -->
<div class="form-group col-lg-3">
 
    <label class="control-label" for="selectbasic">Estado</label>
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option>Selecionar</option>
    </select>
  
  </div>

<!-- Select Basic -->
<div class="form-group col-lg-2">
  
    <label for="selectbasic">Cidade</label>
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option>Selecionar</option>
    </select>
  
</div>

<!-- Text input-->
<div class="form-group col-lg-2">
  
    <label  for="textinput">CEP</label>
    <input id="textinput" name="textinput" placeholder="Selecione seu CEP" class="form-control" type="text">
   
</div>

<!-- Text input-->
<div class="form-group col-lg-5">
  
    <label  for="textinput">Endereço</label>
    <input id="textinput" name="textinput" placeholder="Selecione seu endereço" class="form-control" type="text">
    
</div>

<!-- Text input-->
<div class="form-group col-lg-3">
  
    <label for="textinput">Complemento</label>
    <input id="textinput" name="textinput" placeholder="" class="form-control" type="text">

</div>

<!-- Text input-->
<div class="form-group col-lg-2">
   
    <label  for="textinput">Número</label>
    <input id="textinput" name="textinput" placeholder="" class="form-control" type="text">
    
  </div>


<!-- Text input-->
<div class="form-group col-lg-4">
  
    <label class="control-label" for="textinput">E-mail</label>
    <input id="textinput" name="textinput" placeholder="exemplo@email.com" class="form-control" type="text">
    
</div>

<!-- Select Basic -->
<div class="form-group col-lg-3">
 
    <label class="control-label" for="selectbasic">Instituição</label>
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option>Selecionar</option>
      <option>UFRN</option>
      <option>Liga</option>
      <option>UNP</option>
    </select>
  
</div>

<!-- Select Basic -->
<div class="form-group col-lg-2">
  
    <label class="control-label" for="selectbasic">Vínculo com o projeto</label>
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option>Selecionar</option>
      <option>Aluno/Bolsista</option>
      <option>Colaborador</option>
      <option>Docente</option>
      <option>Estágiario</option>
      <option>Voluntário</option>
    </select>
  
</div>

<!-- Select Basic -->
<div class="form-group col-lg-3">
 
    <label class="control-label" for="selectbasic">Área</label>
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option>Selecionar</option>
      <option>Engenharia Biomédica</option>
      <option>Engenharia Mecânica</option>
      <option>Fonoaudiologia</option>
      <option>Liga</option>
      <option>Medicina</option>
      <option>Odontologia</option>
      <option>Psicologia</option>
    </select>

</div>

<!-- Button -->
<div class="form-group col-lg-12 ">
 
    <label  for="singlebutton"></label>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary col-lg-4 ">Confirmar</button>
  
</div>

        </form>
   
           </div> <!--fim da row-->
                 
    </div> <!-- fim do container-->  
</div>  <!--Fim da section-->