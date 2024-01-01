
const cloud = document.getElementById("cloud");  /**para obtener el elemento con el id cloud */
const barraLateral = document.querySelector(".barra-lateral"); /**para obtener el elemento  con la clase barra-lateral */
const spans = document.querySelectorAll("span");/**para todos los span encontrados */ 
const palanca = document.querySelector(".switch"); /**para obtener el elemento con la clase switch */
const circulo = document.querySelector(".circulo"); /**para obtener el elemento con la clase circulo */
const menu = document.querySelector(".menu"); /**para obtener el elemento con la clase menu */
const main = document.querySelector("main"); /**para obtener el elemento main */
const iconoUsuario = document.querySelector('.usuario ion-icon');

//responsive
menu.addEventListener("click",()=>{  /**para que cuando se haga click en el elemento con la clase menu se ejecute la funcion */
    barraLateral.classList.toggle("max-barra-lateral"); /**para que se agregue la clase max-barra-lateral */
    if(barraLateral.classList.contains("max-barra-lateral")){ /**para que si la barra lateral contiene la clase max-barra-lateral */
        menu.children[0].style.display = "none"; /**para ocultar el primer icono */
        menu.children[1].style.display = "block";/**para mostrr el segundo icono */
    }
    else{ /**para que si la barra lateral no contiene la clase max-barra-lateral */
        menu.children[0].style.display = "block"; /**para mostrar el primer icono */
        menu.children[1].style.display = "none"; /**para ocultar el segundo icono */
    }
    if(window.innerWidth<=320){ /**para que si el ancho de la ventana es menor o igual a 320px */
        barraLateral.classList.add("mini-barra-lateral"); /**para que se agregue la clase mini-barra-lateral */
        main.classList.add("min-main"); /**para que se agregue la clase min-main */
        spans.forEach((span)=>{ /**para cada span encontrado */
            span.classList.add("oculto"); /**para que se agregue la clase oculto */
        })
    }
});
//responsive


palanca.addEventListener("click",()=>{ /**para que cuando se haga click en el elemento con la clase switch se ejecute la funcion */
    let body = document.body; /**para obtener el elemento body */
    if (body.classList.contains('dark-mode')){ /**para que si el body contiene la clase dark-mode */
        iconoUsuario.style.color = '#000'; 
    }else{ /**para que si el body no contiene la clase dark-mode */
        iconoUsuario.style.color = '#fff'; 
    }
    body.classList.toggle("dark-mode"); /**para que se agregue la clase dark-mode */
    circulo.classList.toggle("prendido"); /**para que se agregue la clase prendido */
});

cloud.addEventListener("click",()=>{ /**para que cuando se haga click en el elemento con el id cloud se ejecute la funcion */
    barraLateral.classList.toggle("mini-barra-lateral"); /**para que se agregue la clase mini-barra-lateral */
    main.classList.toggle("min-main");  /**para que se agregue la clase min-main */
    spans.forEach((span)=>{ /**para cada span encontrado */
        span.classList.toggle("oculto"); /**para que se agregue la clase oculto */ 
    });
});
