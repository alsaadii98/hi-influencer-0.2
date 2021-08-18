const app = new Vue({
    el:'#app',
    data:{
      activeTab:'food',
      isSelected:false,
    },
    methods:{
      toggleTabs(tab){
        this.activeTab = tab
      },
      
    }
});