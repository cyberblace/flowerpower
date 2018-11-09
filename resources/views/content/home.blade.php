@extends("layout")

@section("content")
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welkom op flowerpower.nl</h1>
        <!-- Portfolio Section -->
        <h2>Aanbevolen</h2>

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

@section("header")
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('http://www.het3eoor.nl/wp-content/uploads/2016/04/DSC_7051.jpg')">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection