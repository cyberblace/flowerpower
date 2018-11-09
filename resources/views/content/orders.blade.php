@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Producten</th>
                        <th>Naam</th>
                        <th>Adres</th>
                        <th>Postcode</th>
                        <th>Stad</th>
                        <th>Totaal prijs</th>
                        <th>Annuleren</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>
                        @foreach($order->orderRules as $product)
                            <p>{{$product->product->name}}</p>
                        @endforeach
                        </td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->postal_code}}</td>
                        <td>{{$order->city}}</td>
                        <td>{{$order->total}}</td>
                        @if(\Illuminate\Support\Carbon::now()->format('H') < 12 && $order->datetime->isToday())
                            <td><a  href="{{route('cancel.order', [$order->id])}}"></a></td>
                        @else
                            <td>U kunt de bestelling niet meer annuleren.</td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection