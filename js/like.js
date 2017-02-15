$.fn.postLike = function() {
    if ($(this).hasClass('done')) {
        $(this).html('<i class="fa fa-heart" aria-hidden="true"></i>');
        $('#count').css('color', '#fff');
        return false;
    } else {
        $(this).addClass('done');
        var id = $(this).data("id"),
        action = $(this).data('action'),
        rateHolder = $('#count');
        var ajax_data = {
            action: "bigfa_like",
            um_id: id,
            um_action: action
        };
        $.post("/wp-admin/admin-ajax.php", ajax_data,
        function(data) {
            $('#count').html(data);
        });
        return false;
    }
};
$(document).on("click", ".favorite",
function() {
    $(this).postLike();
    $(this).html('<i class="fa fa-heart" aria-hidden="true"></i>');
    $('#count').css('color', '#fff');
});
