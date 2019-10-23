
function markasread(notificationCount) {
if (notificationCount !== '0')
   $.get('/markasread');
}
$(window).scroll(function(){
    if ($(window).scrollTop() >= 1) {
        $('#sticker').addClass('stick');
    }
    else {
        $('#sticker').removeClass('stick');
    }
});
