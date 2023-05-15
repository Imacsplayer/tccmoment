<!-- Modal de Delete-->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
        <button type="button" class="fa-solid fa-x" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-secondary" href="delete.php?id=<?php echo $revista['id']; ?>"><i class="fa-solid fa-trash-can"></i> Sim</a>
        <a id="cancel" class="btn btn-light" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Não</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal  -->