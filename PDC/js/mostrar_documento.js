var div = document.getElementById('contenido');

function mostrar(que_mostrar){
    if(que_mostrar == "resoluciones"){
        div.style.display='block';
    }
    else if(sucursal == "asuncion"){
        div.innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.4149173804785!2d-57.651875285662825!3d-25.290260183852972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945d09f0850b28df%3A0xb24ab727c165eb87!2sPartido%20Dem%C3%B3crata%20Cristiano!5e0!3m2!1ses!2spy!4v1599779371579!5m2!1ses!2spy" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>'
    }
    
}