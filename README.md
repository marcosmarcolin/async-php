# Programação assíncrona com PHP

Este repositório contém alguns exemplos de programação assíncrona em PHP, utilizando diversos pacotes.

Para todos os exemplos, é necessário a instalação do Composer, para isso, navegue até a pasta do exemplo e execute:

`composer install`

## phpsocket.io (Chat básico)

#### Uma implementação alternativa do lado do servidor de socket.io em PHP baseada no Workerman.

Para iniciar o serviço do SocketIO em mode debug, execute no seu terminal no diretório do exemplo:

`php socketio.php start`

Para parar, pressione `Ctrl + C`

No navegador acesse: `http://localhost/async-php/socketio`.

Documentação completa do pacote: https://github.com/walkor/phpsocket.io

Layout utilizado no exemplo: https://www.bootdey.com/snippets/view/animated-chat-window

## Workerman

#### Workerman é uma estrutura de PHP orientada a eventos assíncronos com alto desempenho para construir aplicativos de rede rápidos e escaláveis. Workerman oferece suporte a HTTP, Websocket, SSL e outros protocolos personalizados. Workerman suporta extensão de evento.

Documentação completa do pacote: https://github.com/walkor/Workerman

## Ratchet (Chat básico)

Ratchet é uma biblioteca PHP fracamente acoplada que fornece aos desenvolvedores ferramentas para criar aplicativos
bidirecionais em tempo real entre clientes e servidores por meio de WebSockets. Esta não é a Internet do seu avô.

Para iniciar o serviço do Ratchet, execute no seu terminal no diretório do exemplo:

`php ratchet.php`

No navegador acesse: `http://localhost/async-php/ratchet`.

Documentação completa do pacote: http://socketo.me/

