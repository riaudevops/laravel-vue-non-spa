/**
 *  Templates
 */
var vcMainTemplate = {
    template: '#vc-buku-search',
    props:{

    },
    data: function(){
        return{

        }
    },
    methods:{

    },
    mounted: function () {

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
        methods:{
        },
        mounted: function () {
            if(typeof pjax !== 'undefined'){
                pjax.refresh();
            }
        },
        components: {
            // 'vc-buku-search': vcMainTemplate
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
