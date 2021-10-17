try {
    document.websocket = new WebSocket('ws://localhost:2021');

    document.websocket.onopen = () => {
        document.websocket.send(document.name);

        document.websocket.onmessage = (event) => {
            if (event.data){
                document.getElementById('messages').value += event.data + '\n';
            }
        }
    }
}catch (Exception){
    console.log(Exception);
}