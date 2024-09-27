@include('header')
@include('navbar')

<div class="container mt-5">
    <div class="row mb-3">
        @foreach ($items as $item)
            <div class="col-4">
                <div class="card mb-2" style="width: 18rem">
                    <img class="img-top" src="{{ asset($item->item_picture_link) }}" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">{{ $item->item_name }}</p>
                        <p class="card-text"><a href="/detailitem/{{ $item->id }}">{{ __('Detail') }}</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<nav aria-label="Page navigation example" class="d-flex justify-content-center">
    {{ $items->links() }}
</nav>
@include('footer')
