<?php
// Ler o conteúdo do arquivo de notas
$content = file_get_contents('notepad.txt');
?>
<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Um bloco de notas simples para usar no computador e copiar texto no celular ou vice-versa, para uso pessoal. ">
      <link rel="icon" href="icon.png" type="image/icon type">
      <link rel="stylesheet" type="text/css" href="css/view-text.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://cdn.jsdelivr.net/gh/jalisonsousa/RemoveBanner/removeBanner2.js"></script>
      <title> JSNote Online - Texto</title>
   </head>
   <body>
      <main>
         <div class="container">
            <h1>Visualizar Texto</h1>
            <center>
               <div class="content">
                  <pre id="preview" style="font-size: 18px;"><?php echo htmlentities($content); ?></pre>
               </div>
               <button id="copyButton" class="button">Copiar Conteúdo</button>
               <button onclick="goToFilesPage()" class="button">Voltar para a Página Inicial</button>
            </center>
         </div>
         <div class="footer">
            <a href="https://github.com/jalisonsousa">
               <img src="https://cdn.discordapp.com/attachments/410233690212401162/1128038777533780060/1689008345978.png" alt="JalisonSousa" class="footer-image">
            </a>
         </div>
      </main>
      <div id="particles-js"></div>
      <script src="js/particles.min.js"></script>
      <script src="js/app.js"></script>
      <script src="js/sweetAlert-view-text.js"></script>
      <script>
         function goToFilesPage() {
            window.location.href = '\index.html';
         }
      </script>
   </body>
</html>