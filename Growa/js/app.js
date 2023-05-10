function ajustarAltoTextarea() {
    var imagen = document.getElementById('imagenCampo');
    var textarea = document.getElementById('mensaje');
    var alturaDeseada = (imagen.offsetHeight) - 240;
    
    textarea.style.height = imagen.offsetHeight + 'px';
    console.log(imagen.offsetHeight);
    console.log(alturaDeseada);

}
  
window.addEventListener('DOMContentLoaded', ajustarAltoTextarea);
window.addEventListener('resize', ajustarAltoTextarea);

230