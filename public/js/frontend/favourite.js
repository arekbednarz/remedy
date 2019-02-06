function applyFavEvents() {

    $('.faved,.unfaved').unbind('click');

    $('.faved').click(function (e) {
        e.preventDefault();
        let favHeart = $(this);
        $.ajax({
            type: 'GET',
            url: 'favourites/' + favHeart.data('id') + '/remove',
            success: function(data) {
                favHeart.removeClass('faved').addClass('unfaved');
                toastr.warning('"' + data.name + '" Usunięty z ulubionych!');
                applyFavEvents();
            }
        });
    });

    $('.unfaved').click(function (e) {
        e.preventDefault();
        let favHeart = $(this);
        $.ajax({
            type: 'GET',
            url: 'favourites/' + favHeart.data('id') + '/add',
            success: function(data) {
                favHeart.removeClass('unfaved').addClass('faved');
                toastr.success('"' + data.name + '" Dodany do ulubionych!');
                applyFavEvents();
            }
        });
    });
}

applyFavEvents();

