<div id="review_rows">
    @foreach ($ratings as $rating)
        @include('frontend.pages.rating.rating_row')
    @endforeach
</div>

{!! $ratings->render() !!}