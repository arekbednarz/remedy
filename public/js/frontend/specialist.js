$(document).ready(function()
{
    $(document).on('click', '.pagination a',function(event)
    {
        event.preventDefault();

        $('li').removeClass('active');
        $(this).parent('li').addClass('active');

        var myurl = $(this).attr('href');
        var page=$(this).attr('href').split('page=')[1];

        getData(myurl, page);
    });

});

function getData(myurl, page){
    $("#review_rows").addClass('blurred');
    $.ajax(
        {
            url: myurl,
            type: "get",
            datatype: "html"
        }).done(function(data){
        $("#review_rows").removeClass('blurred');
        $("#rating_container").empty().html(data);
    }).fail(function(jqXHR, ajaxOptions, thrownError){
        $("#review_rows").removeClass('blurred');
        alert('No response from server');
    });
}