<x-create-layout>
    <form action="{{ route('producto.store')}}" method="post" encType="multipart/form-data">
        @csrf
        <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="nombre" class="text-black">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                    @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="cantidad" class="text-black">Cantidad<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{ old('cantidad') }}">
                    @error('cantidad')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="precio" class="text-black">Precio<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="precio" name="precio" value="{{ old('precio') }}">
                    @error('precio')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="marca" class="text-black">Marca<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca') }}">
                    @error('marca')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="descripcion" class="text-black">Descripcion<span class="text-danger">*</span></label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="7" class="form-control">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="proveedor_id[]" class="text-black">Proveedor relacionado<span class="text-danger">*</span></label><br>
                    <select name="proveedor_id[]" id="proveedor" multiple>
                        @foreach ($provees as $pro)
                            <option value="{{ $pro->id }}" @selected( array_search($pro->id, old('proveedor_id') ?? []) !== false )>
                                {{ $pro->nombre }}
                            </option>
                        @endforeach
                    </select><br>
                    @error('proveedor_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="archivo" class="text-black">Imagen<span class="text-danger">*</span></label><br>
                    <input type=file name="archivo" id="archivo"></input>
                    @error('archivo')
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