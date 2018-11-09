@extends("layout")

@section("content")
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Prijs</th>
                <th style="width:10%">Aantal</th>
                <th style="width:22%" class="text-center">Subtotaal</th>
                <th style="width:8%"></th>
            </tr>
            </thead>
            <tbody>
            @php($total = 0)
            @foreach($shoppingCart as $cart)
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $cart->get('product')->name }}</h4>
                                <p>{{ $cart->get('product')->description }}</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">€ {{ $cart->get('product')->price }}</td>
                    <td data-th="Quantity">
                        <form method="post" action="{{ route('cart.update', ['id' => $cart->get('id')]) }}">
                            {{ csrf_field() }}
                            <input type="number" name="amount" class="form-control text-center" value="{{ $cart->get('amount') }}">
                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        </form>
                    </td>
                    @php($total+= $cart->get('product')->price * $cart->get('amount'))
                    <td data-th="Subtotal" class="text-center">€ {{ $cart->get('product')->price * $cart->get('amount')  }}</td>
                    <td class="actions" data-th="">
                        <a href="{{ route('cart.delete', ['id' => $cart->get('id')]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <td><a href="{{route('products')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Verder Winkelen</a></td>
                <td>

                </td>
                <td class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Totaal € {{ $total }}</strong></td>
                <td>
                    @if(!Auth::check())
                        <a class="btn btn-primary" href="{{ route('login') }}">Inloggen</a>
                    @else()
                        <a href="{{route('order')}}" class="btn btn-success btn-block">Bestellen <i class="fa fa-angle-right"></i></a>
                    @endif</td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection