@extends("layout")

@section("content")

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">{{ $product->name }}</h1>
    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-fluid" src="../{{$product->image}}" alt="">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">Prijs</h3>
            <p>€ {{ $product->price }}</p>
            <form method="post" action="{{route('addToCart', ['product' => $product->id])}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <h3><label for="quantity">Aantal</label></h3>
                    <input type="number" class="form-control" name="amount" id="quantity" aria-describedby="guantity_product" placeholder="Aantal">
                    <small id="emailHelp" class="form-text text-muted">Hoeveel wilt u toevoegen aan uw winkelwagen?</small>
                </div>
                <button type="submit" class="btn btn-primary">Voeg toe aan winkelwagen</button>
            </form>

        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-8">
            <h3>Omschrijving</h3>
            <p>{{ $product->description }}</p>
        </div>

    </div>
    <!-- /.row -->

</div>
@endsection