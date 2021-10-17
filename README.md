# Exemplos criados para apresentação no IXCTalks, evento interno da IXCSoft, realizado presencialmente no dia 16 de Outubro de 2021.


# Programação assíncrona com PHP

Este repositório contém alguns exemplos de programação assíncrona em PHP, utilizando diversos pacotes.

Para todos os exemplos, é necessário a instalação do Composer(exceto Swoole), para isso, navegue até a pasta do exemplo e execute:

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

## Timer
Você pode usar o **Timer**, para executar operação não bloqueante de tempo em tempo, com fácil configuração.

Execute no terminal:

`php timer.php start`

Documentação completa do pacote: https://github.com/walkor/Workerman

## Websocket (Comunicação com o servidor)

Você pode utilizar websocket para criar apliçações do tipo *realtime*, como **chats**.

Execute no terminal:

`php websocket.php start`

No navegador acesse: `http://localhost/async-php/workerman/public`.

## Ratchet (Chat básico)

### Ratchet é uma biblioteca PHP fracamente acoplada que fornece aos desenvolvedores ferramentas para criar aplicativos
bidirecionais em tempo real entre clientes e servidores por meio de WebSockets. Esta não é a Internet do seu avô.

Para iniciar o serviço do Ratchet, execute no seu terminal no diretório do exemplo:

`php ratchet.php`

No navegador acesse: `http://localhost/async-php/ratchet`.

Documentação completa do pacote: http://socketo.me/

## Swoole

### Extensão PHP de código aberto para Async IO, Coroutines e Fibers

Para o Swoole, é necessário instalar a extensão: https://www.swoole.co.uk/docs/get-started/installation

Exemplo de *Coroutine*, adição de exemplo, para execução assíncrona do *loop foreach*.

Em seu terminal, execute:

`php coroutine.php`

Documentação completa da extensão: https://www.swoole.co.uk/

