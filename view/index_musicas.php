<?php
session_start();
include '/style/template.php';
   include '../controller/MusicasController.php'; 
   $musicaControl = new MusicasController();
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      $musicaControl->deletarControl($id);
      header('location: index_musicas.php');
   }
   echo $_SESSION['email'];
?>
<!--<link href="../style/css/bootstrap.css" rel="stylesheet">-->
   


<div class="col-sm-10 col-sm-offset-1">
    <a href="cadastro_musica.php" class="btn btn-success pull-right btn-xs" >adicionar</a>
    <h3>Musicas</h3>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>autor</td>
            <td>Ações</td>
            
        </tr>
    <?php foreach($musicaControl->listar() as $value){ ?>
        <tr>
            <td><?php echo $value->id;?></td>
            <td><?php echo $value->titulo;?></td>
            <td><?php echo $value->nome_autor; ?></td>
            <td> <?php echo "<a href='editar_musica.php?acao=atualizar&id=".$value->id."'>editar</a>" ?> |
                <?php echo "<a href='index_musicas.php?acao=deletar&id=".$value->id."'>deletar</a>" ?> </td>
        </tr>
    <?php }?>    
    </table>
</div>