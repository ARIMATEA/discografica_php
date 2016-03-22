<?php include '/style/template.php';
   include '../controller/MusicasController.php'; 
   $musicaControl = new MusicasController();
?>
<!--<link href="../style/css/bootstrap.css" rel="stylesheet">-->
    
<div class="col-sm-10 col-sm-offset-1">
    <h3>Musicas</h3>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>autor_id</td>
        </tr>
    <?php foreach($musicaControl->listar() as $value){ ?>
        <tr>
            <td>1</td>
            <td><?php echo  $value->titulo;?></td>
            <td><?php echo  $value->autor_id; ?></td>
        </tr>
    <?php }?>    
    </table>
</div>