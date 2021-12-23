function peticionAjax() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let sugerencias = JSON.parse(this.responseText);
            for (let sugerencia of sugerencias.alternativas) {
                document.body.appendChild('<br>');
                document.body.appendChild(sugerencia);
            }
        }
    };
    xhttp.open("GET", "usu_alternativos_json.php", true);
    xhttp.send();
}

let entrada_usuario = document.getElementById("usuario");
let usu_introducido = entrada_usuario.innerHTML;
if (usu_introducido.length > 3) {
    entrada_usuario.addEventListener("keyup", peticionAjax);
}
