const loginMessage = "Busque aqui seus pedidos com eficiência e rapidez!";
const messageElement = document.getElementById("login-message");

function typeWriter(text, i, fnCallback) {
    if (i < text.length) {
        messageElement.innerHTML += text.charAt(i);
        i++;
        setTimeout(() => typeWriter(text, i, fnCallback), 50);
    } else if (typeof fnCallback === "function") {
        setTimeout(fnCallback, 1000);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    typeWriter(loginMessage, 0, function () {
    });
});