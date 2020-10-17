var div = document.getElementById('contenido');

function mostrar(que_mostrar){
    if(que_mostrar == "resoluciones"){
        div.style.display='block';
    }
    
}


var odca = document.getElementById('fotos_odca');
var pdc = document.getElementById('fotos_pdc');
var convencion_11 = document.getElementById('fotos_convencion-11');
var presi_cumple = document.getElementById('presi_cumple');



function mostrar_galeria(que_galeria){
    if(que_galeria == 'PDC'){
        presi_cumple.style.display='none';
        odca.style.display='none';
        convencion_11.style.display='none';
        pdc.style.display='block';

    }else if(que_galeria == 'ODCA'){
        presi_cumple.style.display='none';
        pdc.style.display='none';
        convencion_11.style.display='none';
        odca.style.display='block';  

    }else if(que_galeria == 'convencion-11'){
        presi_cumple.style.display='none';
        pdc.style.display='none';
        odca.style.display='none';
        convencion_11.style.display='block';

    }
    else if(que_galeria == 'presi_cumple'){

        pdc.style.display='none';
        odca.style.display='none';
        convencion_11.style.display='none';
        presi_cumple.style.display='block';

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
