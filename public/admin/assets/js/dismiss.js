$(document).ready (function(){
    $("#success-alert").hide();
    window.setTimeout(function () {
        $("#success-alert").alert('close');
    }, 2000);
});