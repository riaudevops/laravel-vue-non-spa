var pjax;
document.addEventListener('pjax:send', function(){
    $('.main_content_app').addClass('d-none');
    $('.app-placeholder').removeClass('d-none');
});
document.addEventListener('pjax:error', function(event, xhr, textStatus, errorThrown, options){
    pjax.reload();
});
document.addEventListener("DOMContentLoaded", function() {
    pjax = new Pjax({
        selectors: [
            "title",
            ".main_content_app"
        ],
        timeout: 3000,
        cacheBust : false,
        // debug: true
    });
});
/**
 *
 */
$(document).ready(function(){
    $("#navigation").find("li").on("click", "a", function () {
        //$('.submenue.in').collapse('hide');
    });
    // var appUrl = location.protocol+'//'+location.hostname+''+location.pathname;
    // if(appUrl.endsWith('/')){
    //     appUrl = appUrl.substring(0, appUrl.length  - 1);
    // }
    // $('#left-col li a[href="'+appUrl+'"]').parent('li').first().addClass('uk-active');
    // $('#left-col li').click(function(){
    //     if($(this).children('a').length > 0){
    //         $('li').removeClass("uk-active");
    //         $(this).addClass("uk-active");
    //     }
    // });

    $("#collapseLinkDetail").click(function () {
        const link = $("#collapseLinkDetail");
        const detail = $("#collapseDetail");
        detail.hasClass("show") ? link.text("Tampilkan selengkapnya") : link.text("Sembunyikan");
    })

});
