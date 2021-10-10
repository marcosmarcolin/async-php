try {

    let url = 'http://localhost:2021';
    let socket = io.connect(url);

    socket.on("connect", () => {
        console.log('Conectado com sucesso!');
    });

    socket.on('message', (message) => {
        console.log(message);
    });

    socket.on('error', (e) => {
        console.log('Error: ' + e);
    });

} catch (exception) {
    console.log(exception);
}