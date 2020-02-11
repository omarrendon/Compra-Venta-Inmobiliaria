// VARIABLES
const contenedor = document.querySelector("#container");
const form = document.getElementById('form')
const compradores = document.getElementById('compradores')

// TAMAÑO DE PANTALLA
const comprobarAncho = () => {
  if (window.innerWidth <= 1024) {
    contenedor.classList.remove("active");
  } else {
    contenedor.classList.add("active");
  }
};
comprobarAncho();
window.addEventListener("resize", () => {
  comprobarAncho();
});

// TOGGLE DE BOTONES
document.querySelector("#btn-menu").addEventListener("click", () => {
  contenedor.classList.toggle("active");
});

document.querySelector("#btn-add").addEventListener("click", () => {
  form.classList.toggle("form-active");
});

document.querySelector('#btn-compradores').addEventListener("click", () => {
  compradores.classList.toggle("compradores-active")
})


