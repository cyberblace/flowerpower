@extends('layout')

@section('content')
    <div class="container">

        <h1 class="my-4">Vul hier uw adresgegevens in.</h1>

        <div class="row">
            <form method="post" action="{{ route('order.complete') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="address">Adres</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Straat en huisnummer">
                </div>
                <div class="form-group">
                    <label for="postal_code">Postcode</label>
                    <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postcode">
                </div>
                <div class="form-group">
                    <label for="city">Plaats</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Plaats">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        Bestellen
                    </button>
                </div>
            </form>
        </div>
        <!-- /.row -->

    </div>
@endsection