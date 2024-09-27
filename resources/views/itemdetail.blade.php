@include('header')
@include('navbar')
<div class="container">
    <form action="/add/{{ $item->id }}" method="post">
        @csrf
        <div class="row mt-5">
            <div class="col-3">
                <p><u>{{ $item->item_name }}</u></p>
                <img src="{{ asset($item->item_picture_link) }}" width="236" height="236" class="rounded-circle">


            </div>
            <div class="col-9">
                <p><b>{{ __('Price') }}: Rp. {{ $item->price }}</b> </p>
                <p>{{ $item->item_desc }}</p>
            </div>
        </div>
        <button type="submit" class="btn btn-warning">{{ __('Buy') }}</button>
    </form>
</div>
@include('footer')
