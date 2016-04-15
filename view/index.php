<?php //include './style/template.php'; 
    include_once  '../controller/UsuariosController.php';
    $userCtrl = new UsuariosController();
    if(isset($_POST['logar'])){
        $userCtrl->login();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Bootstrap 101 Template</title>

   
    <link href="style/css/bootstrap.css" rel="stylesheet">

  
  </head>
  <body> 
    <div class="col-sm-5 col-sm-offset-3" style="margin-top: 230px;">
        <form method="POST">
            <h2>Discográfica PHP</h2> - <h4>login</h4>
            <input name="email" class="form-control">
            <input name="senha" class="form-control">
            <br>
            <input type="submit" name="logar" class="btn btn-success" value="entrar">
            <input type="reset" class="btn btn-danger" value="limpar">
        </form>
    </div>    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="style/js/bootstrap.min.js"></script>
      </body>
</html>