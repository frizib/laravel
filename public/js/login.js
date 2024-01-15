//Открываем модальное окно
document.getElementById("button-login-id").addEventListener("click", function(){
    document.getElementById("modal-login").classList.add("open")
})

//Модальное окно закрывается при нажатии на кнопку закрытия
document.getElementById("close-modal-login-button").addEventListener("click", function(){
    document.getElementById("modal-login").classList.remove("open")
})

//Модальное окно закрывается при нажатии на Esc или на темную область страницы
window.addEventListener('keydown', (e)=>{
    if (e.key == "Escape"){
        document.getElementById("modal-login").classList.remove("open")
    }
})

document.querySelector("#modal-login .modal_box").addEventListener('click', event =>{
    event._isClickWithInModal = true;
})

document.getElementById("modal-login").addEventListener('click', event => {
    if (event._isClickWithInModal) return;
    event.currentTarget.classList.remove('open');
})