<x-producto-layout>
        @foreach($productos as $producto)
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="template/img/Ejemplo.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  <li><button><a href="{{route('producto.show', $producto->id)}}"><i class="ti-search"></i></a></button></li>
                  <li><button><a href="{{route('producto.edit', $producto->id)}}"><i class="ti-pencil"></i></a></button></li>
                  <form style="display:inline;" action=" {{ route('producto.destroy', $producto) }} " method="post">
                    @csrf
                    @method('DELETE')
                  <li><button><a href="{{route('producto.destroy', $producto)}}"><i class="ti-close"></i></a></button></li>
                  </form>   
                </ul>
              </div>
              <div class="card-body">
                <p>{{$producto->nombre}}</p>
                <h4 class="card-product__title"><a href="{{route('producto.show', $producto->id)}}">{{$producto->descripcion}}</a></h4>
                <p class="card-product__price">$ {{$producto->precio}}</p>
              </div>
            </div>
          </div>
        @endforeach
</x-producto-layout>