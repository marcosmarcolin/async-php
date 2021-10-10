try {

    document.ws = new WebSocket("ws://localhost:8888");

    document.ws.onmessage = (event) => {
        let message = JSON.parse(event.data);
        if (message !== '') {
            showMessage(message)
        }
    }

    function showMessage(message) {
        document.getElementById('messages').value += message + '\n';
    }

    function sendMessage() {
        let msg = document.getElementById('message').value;
        if (msg) {
            document.ws.send(msg);
            document.getElementById('message').value = '';
        }
    }
} catch (Exception) {
    console.log(Exception)
}