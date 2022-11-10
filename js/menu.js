const hamburguer = document.querySelector(".hamburguer")
const menu = document.querySelector(".menu-navegacion")

hamburguer.addEventListener("click", () => {
    menu.classList.toggle("spread")
})


window.addEventListener("click", e => {
    if (menu.classList.contains("spread") &&
        e.target!=menu && e.target!=hamburguer) {
        menu.classList.toggle("spread")
    }
})

document.body.addEventListener("keydown", function (event) {
    console.log(event.code, event.keyCode);
    if (event.code == 'Escape' || event.keyCode == 27) {
        contenedorLight.classList.remove("show")
        imagenesLight.classList.remove("showImage")
        hamburguer1.style.opacity = "1"
    }
});