<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se o parâmetro "content" foi enviado
    if (isset($_POST['content'])) {
        // Obter o conteúdo enviado pelo formulário
        $content = $_POST['content'];

        // Salvar o conteúdo no arquivo de texto
        file_put_contents('notepad.txt', $content);

        // Responder com um status HTTP 200 (OK)
        http_response_code(200);
    } else {
        // Responder com um status HTTP 400 (Bad Request) se o parâmetro "content" não foi enviado
        http_response_code(400);
    }
} else {
    // Responder com um status HTTP 405 (Method Not Allowed) se o método da requisição não for POST
    http_response_code(405);
}
?>
