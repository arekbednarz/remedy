<div class="review-box clearfix">
    <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
    </figure>
    <div class="rev-content">
        <div class="rating">
            <i class="icon_star {{ ($rating->rating >= 1 ? 'voted' : '') }}"></i>
            <i class="icon_star {{ ($rating->rating >= 2 ? 'voted' : '') }}"></i>
            <i class="icon_star {{ ($rating->rating >= 3 ? 'voted' : '') }}"></i>
            <i class="icon_star {{ ($rating->rating >= 4 ? 'voted' : '') }}"></i>
            <i class="icon_star {{ ($rating->rating == 5 ? 'voted' : '') }}"></i>
        </div>
        <div class="rev-info">
            {{ $rating->user->first_name.' '.$rating->user->last_name }} – {{ $rating->created_at->format('Y-m-d') }}
        </div>
        <div class="rev-text">
            <p>
                {{ $rating->review }}
            </p>
        </div>
    </div>
</div>
<!-- End review-box -->