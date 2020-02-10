const contenedor = document.querySelector('#container');
const form = document.querySelector('#form');


document.querySelector('#btn-menu').addEventListener('click', () => {
	contenedor.classList.toggle('active');
});

const comprobarAncho = () => {
	if(window.innerWidth <= 1024){
		contenedor.classList.remove('active');
	} else {
		contenedor.classList.add('active');
	}
}
comprobarAncho();
window.addEventListener('resize', () => {
	comprobarAncho();
});

//Compradores
document.querySelector('#btn-add').addEventListener('click', () => {
	form.classList.toggle('form-active')
})