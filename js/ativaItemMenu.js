function ativaItemMenu() {
    const url = window.location.pathname
    const itensMenu = document.getElementsByClassName('nav-link')
    for (let i = 0; i < itensMenu.length; i++) {
        if (itensMenu[i].pathname == url) {
            itensMenu[i].classList.add("active");
        }
    }
}