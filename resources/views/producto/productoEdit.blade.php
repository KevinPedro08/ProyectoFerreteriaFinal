<x-editar-layout>
    <form action="{{ route('producto.update', $producto) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="nombre" class="text-black">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}">
                    @error('nombre')
                    <div class=" alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="cantidad" class="text-black">Cantidad<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{ old('cantidad', $producto->cantidad) }}">
                    @error('cantidad')
                    <div class=" alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="precio" class="text-black">Precio<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="precio" name="precio" value="{{ old('precio', $producto->precio) }}">
                    @error('precio')
                    <div class=" alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="marca" class="text-black">Marca<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca', $producto->marca) }}">

                    @error('marca')
                    <div class=" alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <label for="descripcion" class="text-black">Descripcion<span class="text-danger">*</span></label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="7" class="form-control">{{ old('descripcion', $producto->descripcion) }}</textarea>
                    @error('descripcion')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <label for="proveedor_id[]" class="text-black">Proveedor relacionado<span class="text-danger">*</span></label><br>
                    <select name="proveedor_id[]" multiple>
                        @foreach ($provees as $pro)
                        <option value="{{ $pro->id }}" {{ in_array($pro->id, old('proveedor_id', $producto->proveedores->pluck('id')->toArray())) ? 'selected' : '' }}>
                            {{ $pro->nombre }}
                        </option>
                        @endforeach
                    </select><br><br>
                    @error('proveedor_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Editar">
                </div>
            </div>
        </div>
    </form>
</x-editar-layout>