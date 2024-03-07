<!-- Modal -->
<div class="modal fade" id="edit{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
            </div>
            <form action="{{route('home.update',$cliente->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->nombre}}" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->telefono}}" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->correo}}" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="delete{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Cliente</h5>
            </div>
            <form action="{{route('home.destroy',$cliente->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    Estas Seguro de Eliminar <strong>{{$cliente->nombre}}</strong>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>