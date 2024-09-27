@include('header')
@include('navbar')
<div class="container">
    <h3><b><u>{{ __('Cart') }}</u></b></h3>
    <table class="table">

        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td><img src="{{ asset($cart->item->item_picture_link) }}" width="120px" alt=""></td>
                    <td>{{$cart->item->item_name}}</td>
                    <td>Rp {{ $cart->price }}</td>
                    <td>
                        <form action="/cart/{{ $cart->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-link" type="submit">{{ __('Delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="2" align="right"><b> {{ __('Total') }}: Rp. {{ $carts->sum('price') }}</b></td>
                <td>
                    <form action="/cart" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning">{{ __('Checkout') }}</button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
</div>
@include('footer')
