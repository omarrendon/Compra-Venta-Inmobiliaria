// VARIABLES
const contenedor = document.querySelector("#container");
const form = document.getElementById('form');
const compradores = document.getElementById('compradores');
const vendedores = document.getElementById('vendedores');
const formVendedor = document.getElementById('formVendedor');

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

// menu lateral
document.querySelector("#btn-menu").addEventListener("click", () => {
  contenedor.classList.toggle("active");
});
// formulario compradores
document.querySelector("#btn-add").addEventListener("click", () => {
  form.classList.toggle("form-active");
});
// menu compradores
document.querySelector('#btn-compradores').addEventListener("click", () => {
  compradores.classList.toggle("compradores-active")
})
// menu vendedores
document.querySelector('#btn-vendedores').addEventListener('click', () => {
  vendedores.classList.toggle("vendedores-active")
})
// formaulario vendedores
document.querySelector('#btn-addVendedores').addEventListener('click', () => {
  formVendedor.classList.toggle("formVendedor-active")
})

