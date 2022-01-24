var inputImg = $('#inputImg');
var cajaImg = $('#caja');

inputImg.change(function () {
    //en caso de que no alla ninguna imagen seleccionada 
var archivos = inputImg.prop('files');
if(!archivos||!archivos.length){
    cajaImg.attr('src','');
    return;
}
var primerArchivo = archivos[0];

var objetUrl = URL.createObjectURL(primerArchivo);

cajaImg.attr('src',objetUrl);

});