<?php include './style/template.php'; 
    include_once  '../controller/UsuariosController.php';
    $userCtrl = new UsuariosController();
    if(isset($_POST['logar'])){
        $userCtrl->login();
    }
?>

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