/**
 * init
 */
function initVue() {
    var vm = new Vue({
        el: '#app',
        data: {
        },
        mounted: function () {
            if(typeof pjax !== 'undefined'){
                pjax.refresh();
            }
        },
        components: {
        }
    });
    $('.app-placeholder').addClass('d-none');
    $('.main_content_app').removeClass('d-none');
}
try{
    initVue();
}catch (e) {
    window.location.reload();
}
