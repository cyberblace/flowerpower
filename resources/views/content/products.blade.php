@extends("layout")

@section("content")
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Onze bloemen</h1>
        <!-- Portfolio Section -->
        <div class="row">
        @foreach($products as $product)

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{route('product', [$product->id])}}"><img class="card-img-top" src="{{$product->image}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('product', [$product->id])}}">{{$product->name}}</a>
                            <p class="card-text">€{{$product->price}}</p>
                        </h4>
                        <p class="card-text">{{$product->description}}</p></div>

                </div>
            </div>

        @endforeach
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection