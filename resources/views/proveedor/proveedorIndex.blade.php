<x-proveedor-index-layout>
        @foreach($proveedores as $proveedor)
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="template/img/proveedor.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  <li><button><a href="{{route('proveedor.show', $proveedor->id)}}"><i class="ti-search"></i></a></button></li>
                  <li><button><a href="{{route('proveedor.edit', $proveedor->id)}}"><i class="ti-pencil"></i></a></button></li>
                  <form style="display:inline;" action=" {{ route('proveedor.destroy', $proveedor) }} " method="post">
                    @csrf
                    @method('DELETE')
                  <li><button><a href="{{route('proveedor.destroy', $proveedor)}}"><i class="ti-close"></i></a></button></li>
                  </form>   
                </ul>
              </div>
              <div class="card-body">
                <p>{{$proveedor->tipo}}</p>
                <h4 class="card-product__title"><a href="{{route('proveedor.show', $proveedor->id)}}">{{$proveedor->nombre}}</a></h4>
                <!-- <p class="card-product__price">$ {{$proveedor->telefono}}</p>-->
              </div>
            </div>
          </div>
        @endforeach
</x-proveedor-index-layout>