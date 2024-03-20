function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
 }
 

const $resForm = document.querySelector('.wireles');


$resForm || document.querySelector('.footer-end2img').insertAdjacentHTML('beforeend', copy);

$('body').on('input', '.form-control-donate', function(){
	this.value = this.value.replace(/[^0-9\.\,]/g, '');
});