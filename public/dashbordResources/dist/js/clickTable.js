$(document).ready(function() {
    $(document).on('click', '.tr',function(event)
    {
        var href = $(this).attr("href");
        if(href) {
            window.location.replace(href);
        }
    });
});