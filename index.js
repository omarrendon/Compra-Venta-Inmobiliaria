// VARIABLES
const contenedor = document.querySelector("#container");
const form = document.getElementById('form');
const compradores = document.getElementById('compradores');
const vendedores = document.getElementById('vendedores');
const compraVenta = document.getElementById('compraVenta');
const formVendedor = document.getElementById('formVendedor');
const main = document.getElementById('main');

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
// formaulario vendedores
document.querySelector('#btn-addVendedores').addEventListener('click', () => {
  formVendedor.classList.toggle("formVsendedor-active")
})

// menu compradores
document.querySelector('#btn-compradores').addEventListener("click", () => {
  compradores.classList.toggle("compradores-active");
 
})
// menu vendedores
document.querySelector('#btn-vendedores').addEventListener('click', () => {
  vendedores.classList.toggle("vendedores-active")
})

//menu Compra Venta
document.querySelector('#btn-compraVenta').addEventListener('click', () => {
    compraVenta.classList.toggle("compraVenta-active")
})

// MODAL ACCIONES
const modalCompras = document.getElementById('myModal');
const btnCompras = document.getElementById('btn-compraVentas-Compras');
const spanCompras = document.getElementsByClassName("close")[0];

const modalVenta = document.getElementById('myModalVenta');
const span = document.getElementsByClassName("close")[1];
const btnVentas = document.getElementById('btn-compraVentas-Ventas');


// Cuando se hace click en el boton (COMPRAS) para abrir el modal 
btnCompras.onclick = function ( ) {
  modalCompras.style.display = "block";
}
// Cuando se hace click en el boton X para cerrar el modal
spanCompras.onclick = function ( ) {
  modalCompras.style.display = "none";
}
// Cuando se hace click fuera del modal se cierra 
// window.onclick = function(event) {
//   if (event.target == modalCompras) {
//     modalCompras.style.display = "none";
//   }
// }
// Cuando se hace click en el boton (VENTAS) para abrir el modal 
btnVentas.onclick = function ( ) {
  modalVenta.style.display = "block"
}
// Cuando se hace click fuera del modal se cierra 
// window.onclick = function(event) {
//   if (event.target == modalVenta) {
//     modalVenta.style.display = "none";
//   }
// }
// Cuando se hace click en el boton X para cerrar el modal
span.onclick = function ( ) {
  modalVenta.style.display = "none";
}



