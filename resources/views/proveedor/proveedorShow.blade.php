
<x-proveedor-mostrar-layout>
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme s_Product_carousel">
                        <div class="single-prd-item">
                            <img class="img-fluid" src="{{asset('template/img/proveedorCarrousel.jpg')}}" alt="">
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
                        <h1>{{ $proveedor->nombre }}</h1><br>
                        <h2>Tipo: {{ $proveedor->tipo }}</h2>
                        <ul class="list">
                            <li>
                                <h4><span>Correo</span> : &nbsp; {{ $proveedor->correo }}</h4>
                            </li>
                            <li>
                                <h4><span>Telefono</span> : &nbsp; {{ $proveedor->telefono }}</h4>
                            </li>
                            @auth
                            <li>
                                <h4><span>Creado el</span> : &nbsp; {{ $proveedor->created_at }}</h4>
                            </li>
                            <li>
                                <h4><span>Ultima modificación</span> : &nbsp; {{ $proveedor->created_at }}</h4>
                            </li>
                        </ul>
                        <br>
                        <h3>Productos surtidos:</h3>
                        <ul>
                            @foreach($proveedor->productos as $pro)
                                <li>{{$pro->nombre}}</li>
                            @endforeach
                        </ul>
                        <div class="card_area d-flex align-items-center">
                            <a class="icon_btn" href="{{route('proveedor.edit', $proveedor->id)}}"><i class="lnr lnr lnr-pencil"></i></a>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-proveedor-mostrar-layout>