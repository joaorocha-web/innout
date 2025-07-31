
(function (){
    const menuBtn = document.querySelector(".menu-toggle")
    
    menuBtn.onclick = function (e){
    const body = document.body
    body.classList.toggle('hide-sidebar')
}
})()

