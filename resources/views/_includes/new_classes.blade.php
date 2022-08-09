<div class="modal fade" id="new_classes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title cinza" id="exampleModalLabel">Nova Aula</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="{{route('create.class')}}" method="POST" class="flex flex-col">
                @csrf
                <div class="row">
                    <label for="name">
                        <h6 class="title-input-form mt-3 cinza">Nome da Aula</h6>
                        <input class="form-control" type="text" name="title">
                    </label>
                </div>

                <div class="row">
                    <label for="description">
                        <h6 class="title-input-form mt-3 cinza">Link</h6>
                        <input class="form-control" type="text" name="link_class">
                    </label>
                </div>

                <div class="row">
                    <label for="Oficina">
                        <h6 class="title-input-form mt-3 cinza">Oficina</h6>
                        <select class="form-control" name="workshop_id" class="select-input">
                            @if(isset($workshops))
                                @foreach($workshops as $oficina)
                                    <option value="{{$oficina->id}}">{{$oficina->id}} - {{$oficina->name}}</option>
                                @endforeach
                            @else
                                <option value="#" style="color:#ccc;font-weight:bold;">Nenhuma Oficina cadastrada</option>
                            @endif
                        </select>

                    </label>
                </div>

                <div class="row">
                    <label for="teacher">
                        <h6 class="title-input-form mt-3 cinza">Professor Responsavel</h6>
                        <input class="form-control" type="text" name="teacher_name">
                    </label>
                </div>


                <button class="btn btn-primary mt-3 float-end">Cadastrar Aula</button>
            </form>

        </div>
        <div class="modal-footer">

        </div>
    </div>
  </div>
