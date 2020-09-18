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

function galeria(ruta){

        Swal.fire({
            imageUrl: ruta,
            width: 800,
            imageWidth: 700,
            confirmButtonText: 'Volver',
          })

    
    
}


    