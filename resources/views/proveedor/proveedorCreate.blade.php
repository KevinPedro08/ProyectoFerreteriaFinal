<x-proveedor-create-layout>
    <form action="{{ route('proveedor.store')}}" method="post">
        @csrf
        <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="nombre" class="text-black">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" required>
                    @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="correo" class="text-black">Correo<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="correo" value="{{old('correo')}}" required>
                    @error('correo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="telefono" class="text-black">Telefono<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}" required>
                    @error('telefono')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="" class="text-black">Tipo de Proveedor<span class="text-danger">*</span></label><br>
                    <select name="tipo" class="form-control-select">
                        <option value="Empresa" {{ old('tipo') == 'Empresa' ? 'selected' : '' }}>Empresa</option>
                        <option value="Persona" {{ old('tipo') == 'Persona' ? 'selected' : '' }}>Persona</option>
                        <option value="Distribuidora"  {{ old('tipo') == 'Distribuidora' ? 'selected' : '' }}>Distribuidora</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Añadir">
                </div>
            </div>
        </div>
    </form>
</x-proveedor-create-layout>