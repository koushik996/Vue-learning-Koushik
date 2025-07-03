Vue.createApp({
    components: {childcomponent},
    setup(){
     const messageToChild=ref('Hello Parent')
     const messageFromChild=ref('')

     function handleReply(msg){
        messageFromChild.value=msg
     }
     return {messageToChild,messageFromChild,handleReply}
    }

}).mount('#app')