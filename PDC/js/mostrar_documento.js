var div = document.getElementById('contenido');

var odca = document.getElementById('fotos_odca');
var pdc = document.getElementById('fotos_pdc');

var pdc_foto = document.getElementById('thumb_pdc');
var odca_foto = document.getElementById('thumb_odca');

function mostrar(que_mostrar){
    if(que_mostrar == "resoluciones"){
        div.style.display='block';
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
