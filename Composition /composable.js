function uncounted(){
    let count=ref(0)
    function increment(){
        count.value++
    }
    return {count,increment}
}
function messageBox(){
     const message=ref('hi koushik')
     function updatemessage(text){
        message.value=text;
     }
     return {message,updatemessage}
    }