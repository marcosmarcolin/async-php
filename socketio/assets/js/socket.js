try {

    let url = 'http://' + document.domain + ':2021';
    document.socket = io.connect(url);

    document.socket.on('connect', function () {
        document.socket.emit('addUser', document.userName);
    });

} catch (exception) {
    console.log(exception);
}