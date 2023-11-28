<x-mostrar-layout>
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme s_Product_carousel">
                        <div class="single-prd-item">
                            @if($producto->imagen != null)
                                <img class="img-fluid" src="{{ \Storage::url($producto->imagen) }}" alt="">
                            @else
                                <img class="img-fluid" src="{{asset('template/img/Ejemplo.jpg')}}" alt="">
                            @endif
                        </div>
                        <!-- <div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div> -->
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h1>{{ $producto->  nombre }}</h1><br>
                        <h2>$ {{ $producto->precio }}</h2>
                        <ul class="list">
                            <li>
                                <h4><span>Cantidad</span> : &nbsp; {{ $producto->cantidad }}</h4>
                            </li>
                            <li>
                                <h4><span>Marca</span> : &nbsp; {{ $producto->marca }}</h4>
                            </li>
                            <li>
                                <h4><span>Descripcion</span> : &nbsp; {{ $producto->descripcion }}</h4>
                            </li>
                        </ul>
                        <br>
                        @auth
                        <h3>Proveedores</h3>
                        <ul>
                            @foreach($producto->proveedores as $pro)
                                <li>{{$pro->nombre}}</li>
                            @endforeach
                        </ul>
                        <div class="card_area d-flex align-items-center">
                            <a class="icon_btn" href="{{route('producto.edit', $producto->id)}}"><i class="lnr lnr lnr-pencil"></i></a>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-mostrar-layout>