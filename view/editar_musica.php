<?php include '/style/template.php' ; 
      include '../controller/MusicasController.php';  
      $musicaControl = new MusicasController();
      $id = $_GET['id'];
      $musica = $musicaControl->findControl($id);
      
?>
<?php
    if(isset($_POST['salvar'])){
        $musicaControl->updateControl();
        header('location: index_musicas.php');
    }else{
        
    }
?>
<div class="col-sm-12 col-sm-offset-1">
    <div style="
    margin-top: 100px;
" class="col-sm-4">
        <h3>editar música <?php echo $musica->titulo;?> </h3>
    </div>
    <div class="col-sm-4">
        <form method="POST">
            <input value="<?php echo $musica->id; ?>" type="hidden" name="id" >
            <label>Título da música</label>
            <input value="<?php echo $musica->titulo ?>" required="true" class="form-control" name="titulo">

            <label>Compositor</label>
            <select class="form-control" name="autor_id">
                <option value="<?php echo $musica->autor_id ?>"> <?php echo $musica->nome_autor ?> </option>
                <option value="1">Cartola</option>
                <option value="2">Tim Maia</option>
                <option value="3">Djavan</option>
            </select>

            <label>Mídia</label>
            <select class="form-control" name="midia_id">
                <option value="<?php echo $musica->midia_id ?>">CD</option>
                <option value="1">CD</option>
                <option value="2">DVD</option>
                <option value="3">Vinil</option>
            </select><br> 
            <input class="form-control btn btn-danger" type="submit" name="salvar" value="confirmar">
        </form>
    </div>
</div>