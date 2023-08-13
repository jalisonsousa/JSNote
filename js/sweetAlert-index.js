function saveContent() {
  var e = document.getElementById("content").value;
  fetch("salvar.php", {
    method: "POST",
    body: new URLSearchParams({
      content: e,
    }),
  })
    .then(function (response) {
      if (response.ok) {
        Swal.fire({
          title: "Salvo com sucesso!",
          icon: "success",
          timer: 1500, // Tempo em milissegundos
          showConfirmButton: false, // Remove o botão de confirmação
        });
      } else {
        Swal.fire({
          title: "Ocorreu um erro ao salvar o conteúdo.",
          icon: "error",
          timer: 1500, // Tempo em milissegundos
          showConfirmButton: false, // Remove o botão de confirmação
        });
      }
    })
    .catch(function (error) {
      console.error("Erro:", error);
    });
}

function goToFilesPage() {
  window.location.href = "view-text.php";
}