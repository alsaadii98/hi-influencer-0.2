const app = new Vue({
    el:'#app',
    data:{
      activeTab:'food',
    },
    methods:{
      toggleTabs(tab){
        this.activeTab = tab
      }
    }
});