
<!DOCTYPE html>
<html>
<head>


 
<title>Tela de acesso</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
<style>

  a:link, a:visited {
  background-color: green;
  color: white;
  padding: 15px 35px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  box-shadow: 2px 2px 4px #000000;
  
           }
#divConteudo{
  padding: 120px;
  margin: auto;
  width: 30%;
  border: 0px solid green;
  padding: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 5px;
  text-align: center;
  font-size: calc(4px + 2vmin);
   
}
  
button {
  
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 13px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.7;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  border-radius: 5px;
 
}

button:hover {opacity: 1}


input, focus {
  width: 60%;
  padding: 5px 10px;
  margin: 20px 0;
  display: inline-block;
  border: 0px solid ;
  border-radius: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 

}


#enunciado{
  margin: auto;
  width: 30%;
  padding: 40px;
 
 
}

 .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }



</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script type="text/javascript"></script>
<script scr="ajax.js"></script>
 <script type="text/javascript" src="ajax.js"></script>

</head>

<body>

<div id="enunciado"> </div>

<div id="divConteudo" style="display: show">

<br>

  
  <form action="usu_login.php" method="post">
    <label for="email">Entre com seu e-mail e senha:</label>
    <br>
    <br>
    <input type=text name="email" placeholder="E-mail">
    <br>
    <br>
    <input type=password name="senha" placeholder="Senha">
    <br>
    <br>
     <button type="submit" class="btn btn-secondary btn-lg" id="btnCad">Login</button> 
    <div class="falselogin"></div>

</form>
<br>
<h5>Não é cadastrado? Clique em cadastrar:</h5>

<button type="button" class="btn btn-secondary btn-lg" id="btnCad"data-toggle="modal" data-target="#myModal">Cadastrar</button><br><br>

</div>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Cadastro de usuário:</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="usu_insert.php" method="POST">
            <div class="form-group">
              <label for="nomeC"> Nome Completo</label>
              <input type="text" class="form-control" id="nomeC" name="nomeC" placeholder="Nome Completo">
            </div>
            <div class="form-group">
              <label for="email"> E-mail</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
            </div>
            <div class="form-group">
              <label for="telefone"> Telefone</label>
              <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
           
            </div>
            <div class="form-group">
              <label for="endereco"> Endereço</label>
              <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
            </div>
             <div class="form-group">
              <label for="senha"> Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
            </div>
             <div class="form-group">
              <label for="senha2"> Confirma Senha</label>
              <input type="password" class="form-control" id="confSenha" name="confSenha" placeholder="Confirme a senha">
            </div>
              <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
         
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>


</body>
</html>



