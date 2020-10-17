var div1 = document.getElementById('contenido1');
var div2 = document.getElementById('contenido2');
var div3 = document.getElementById('contenido3');

var odca = document.getElementById('fotos_odca');
var pdc = document.getElementById('fotos_pdc');

var pdc_foto = document.getElementById('thumb_pdc');
var odca_foto = document.getElementById('thumb_odca');

function mostrar(que_mostrar){
    if(que_mostrar == "resoluciones"){
        div1.style.display='block';
        div2.style.display='none';
        div3.style.display='none';
    }else if(que_mostrar == "conferencia"){
        div1.style.display='none';
        div2.style.display='block';
        div3.style.display='none';
    }else if(que_mostrar == "programa"){
        div1.style.display='none';
        div2.style.display='none';
        div3.style.display='block';        
    }
    
}


function mostrar_galeria(que_galeria){
    if(que_galeria == 'PDC'){
        odca.style.display='none';
        pdc.style.display='block';
    }else if(que_galeria == 'ODCA'){
        pdc.style.display='none';
        odca.style.display='block';
        
    }
}

function galeria(ruta, quien){
    if(quien == 'pdc'){
        pdc_foto.innerHTML = `<img src="${ruta}">`
        Swal.fire({
            imageUrl: ruta,
            width: 800,
            imageWidth: 700,
            confirmButtonText: 'Volver',
          })
    }else if(quien == 'odca'){
        odca_foto.innerHTML = `<img src="${ruta}">`
    }
    
    
}

var tsje = document.getElementById('contenido_tsje');
var cronograma = document.getElementById('contenido_cronograma');


function sala_mostrar(que_pdf){
    if(que_pdf == 'tsje'){
        cronograma.style.display='none';
        tsje.style.display='block';

    }if(que_pdf == 'cronograma'){
        tsje.style.display='none';
        cronograma.style.display='block';
    }

}
