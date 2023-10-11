<x-create-layout>
    <form action="{{ route('producto.store')}}" method="post">
        @csrf
        <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="nombre" class="text-black">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                    @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="cantidad" class="text-black">Cantidad<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad">
                    @error('cantidad')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="precio" class="text-black">Precio<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="precio" name="precio">
                    @error('precio')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="marca" class="text-black">Marca<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="marca" name="marca">
                    @error('marca')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <label for="descripcion" class="text-black">Descripcion<span class="text-danger">*</span></label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="7" class="form-control"></textarea>
                    @error('descripcion')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Añadir">
                </div>
            </div>
        </div>
    </form>
</x-create-layout>