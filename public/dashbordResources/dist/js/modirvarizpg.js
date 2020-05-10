
$( document ).ready(function() {
    // console.log( "ready!" );
    $('#tpardakht').change(function () {
        var darghahp = $('#tpardakht').val();
        if(darghahp == 0){
            $('form').attr('action', '/modir/varizModir');
            $('.kart').prop( "disabled", false );;
        }else{
            $('form').attr('action', '/zarinpal/request');
            $('.kart').prop( "disabled", true );;
        }
    });
});