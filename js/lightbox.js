const imagenes = document.querySelectorAll(".img-galeria")
const imagenesLight = document.querySelector(".agregar-imagen")
const contenedorLight = document.querySelector(".imagen-light")
const hamburguer1 = document.querySelector(".hamburguer")

imagenes.forEach(imagen => {
    imagen.addEventListener("click", () => {
        aparecerImagen(imagen.getAttribute("src"))
        console.log(
            imagenes.entries()
        )
    })
})

contenedorLight.addEventListener("click", (e) => {
    if (e.target != imagenesLight) {
        contenedorLight.classList.toggle("show")
        imagenesLight.classList.toggle("showImage")
        hamburguer1.style.opacity = "1"
    }
})

document.body.addEventListener("keydown", function (event) {
    if (event.code == 'Escape' || event.keyCode == 27) {
        contenedorLight.classList.remove("show")
        imagenesLight.classList.remove("showImage")
        hamburguer1.style.opacity = "1"
    }
});

const aparecerImagen = (imagen) => {
    imagenesLight.src = imagen
    contenedorLight.classList.toggle("show")
    imagenesLight.classList.toggle("showImage")
    hamburguer1.style.opacity = "0"
    
}