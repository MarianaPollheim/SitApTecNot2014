/* 
 * medidas.js
 */

var spanLargura = document.getElementById('largura');
var spanAltura = document.getElementById('altura');

//Pega a largura da janela
spanLargura.innerHTML = window.innerWidth + ' px';
//Pega a altura da janela
spanAltura.innerHTML = window.innerHeight + ' px';

//Ao redimensionar a janela
window.onresize = function() {
    spanLargura.innerHTML = window.innerWidth + ' px';
    spanAltura.innerHTML = window.innerHeight + ' px';
};
