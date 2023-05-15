<?php 
    require_once('functions.php'); 
    add();
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Registre um serviço!</h2>

    <!-- area de campos do form -->
    <form action="add.php" method="POST" enctype = "multipart/form-data">
    <hr />
        <div class="row">
            <div class="form-group col-md-4">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="servico['titulo']" required>
            </div>

            <div class="form-group col-md-4">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="servico['descricao']" required maxlength="14">
            </div>

            <div class="form-group col-md-4">
                <label for="campo1">Foto</label>
                <input type="file" class="form-control" id = "foto" name="foto" required>
            </div>

            <div class="form-group col-md-2">
                <label for="campo2">Pré-visualização:</label>
                <img class="form-control shadow p-2 mb-2 bg-body rounded" id = "imgPreview" src= "fotos/semimagem.jpg" alt="pic">
            </div>
        </div>

        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-sd-card"></i> Salvar</button>
                <a href="../index.php" class="btn btn-light"><i class="fa-solid fa-rotate-left"></i> Cancelar</a>
            </div>
        </div>
    </form>

<?php include(FOOTER_TEMPLATE); ?>

<script>
    $(document).ready(() => {
      $("#foto").change(function () {

        const file = this.files[0];
        if(file)
        {
          let reader = new FileReader();
          reader.onload = function (event) {
            $("#imgPreview").attr("src", event.target.result);
          };
          reader.readAsDataURL(file);
        }
      });
    });
</script>