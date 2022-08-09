<div class="modal fade" id="new_workshop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title cinza" id="exampleModalLabel">Nova Oficina</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('insert.workshop')}}" method="POST">
            @csrf
            <div class="row mb-4">
                <label for="name">
                    <h6 class="title-input-form cinza">Nome da Oficina</h6>
                    <input class="form-control" type="text" name="name">
                </label>
            </div>
            <div class="row">
                <label for="description">
                    <h6 class="title-input-form cinza">Descrição</h6>
                    <input class="form-control" type="text" name="description">
                </label>
            </div>
                <button class="btn btn-primary mt-4 float-end">Cadastrar Oficina</button>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
