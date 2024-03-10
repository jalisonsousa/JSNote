function copyText(e) {
    var t = document.createElement("textarea");
    t.value = e;
    document.body.appendChild(t);
    t.select();
    document.execCommand("copy");
    document.body.removeChild(t);
    Swal.fire({
        title: "copiado com sucesso!",
        icon: "success",
        timer: 1500, // Tempo em milissegundos
        showConfirmButton: false // Remove o botão de confirmação
    });
}
document.addEventListener("DOMContentLoaded", function() {
    var e = document.getElementById("copyButton");
    var t = document.getElementById("preview");
    e.addEventListener("click", function() {
        copyText(t.textContent);
    });
});