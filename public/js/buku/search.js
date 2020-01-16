/**
 *  Templates
 */
var vcMainTemplate = {
    template: '#vc-buku-search',
    props:{
        searchUrl: String,
        queryParam: String,
        detailUrl: String
    },
    data: function(){
        return{
            searchQuery: '',
            dataBuku: [],
            totalItem: 0,
            itemDisplay: 0,
            isAjaxRunning: false,
            showAlert: false,
            alertType: 'warning',
            alertMessage: ''
        }
    },
    methods:{
        doSearch: function(q){
            var vm = this;
            if(q === ""){
                q = this.searchQuery;
            }
            $.ajax({
                url: this.searchUrl,
                method: 'GET',
                dataType: 'json',
                data:{
                    q: q
                },
                beforeSend: function () {
                    vm.isAjaxRunning = true;
                },
                complete: function (xhr, s) {
                    vm.isAjaxRunning = false;
                },
                error: function (x, s) {
                    vm.showNotification('Something happened: '+s);
                },
                success: function (d, s, x) {
                    if(d.status){
                        vm.dataBuku = d.data.data;
                        vm.totalItem = d.data.total;
                        vm.itemDisplay = d.data.data.length;
                    }else{
                        vm.showNotification('Something happened: '+d.message);
                    }
                    pjax.refresh();
                }
            });
            this.searchQuery = q;
        },
        clickToSearch: function (e) {
            this.doSearch(this.searchQuery);
        },
        showNotification: function (message = '', type='warning') {
            this.showAlert = true;
            this.alertMessage = message;
            this.alertType = type;
        },
        loadPjax: function(url){
            pjax.loadUrl(this.detailUrl+'/'+url)
        }
    },
    mounted: function () {
        this.doSearch(this.queryParam);
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
            'vc-buku-search': vcMainTemplate
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
