/**
 * Templates
 */
var vcMainTemplate = {
    template: '#vc-home-index',
    props:{
        urlCountAll: String
    },
    data: function(){
        return{
            isAjaxRunning: false,
            totalBuku: 0,
        }
    },
    methods: {
        countAll: function (e) {
            var vm = this;
            $.ajax({
                url: this.urlCountAll,
                method: 'GET',
                dataType: 'json',
                beforeSend: function () {
                    vm.isAjaxRunning = true;
                },
                complete: function (xhr, s) {
                    vm.isAjaxRunning = false;
                },
                error: function (x, s) {

                },
                success: function (d, s, x) {
                    if(d.status){
                        vm.totalBuku = d.data.total;
                    }
                    pjax.refresh();
                }
            });
        }
    },
    mounted: function () {
        this.countAll();
    }
};
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
            'vc-home-index': vcMainTemplate
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
