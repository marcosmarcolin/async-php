document.name = prompt('Digite seu nome!');

function sendMessage(){
    if (document.websocket){
        let message = document.getElementById('message').value;
        if (message !== ''){
            document.websocket.send(message);
            document.getElementById('message').value = '';
        }
    }
}