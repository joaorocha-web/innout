
(function (){
    const menuBtn = document.querySelector(".menu-toggle")
    
    menuBtn.onclick = function (e){
    const body = document.body
    body.classList.toggle('hide-menu')
}
})()



function activateClock(){
    const activeClock = document.querySelector('[active-clock]')
    if(!activeClock) return 

    function addOneSecond(hours, minutes, seconds){
    const data = new Date()
    data.setHours(parseInt(hours))
    data.setMinutes(parseInt(minutes))
    data.setSeconds(parseInt(seconds) + 1)

    const h = `${data.getHours()}`.padStart(2, 0)
    const m = `${data.getMinutes()}`.padStart(2, 0)
    const s = `${data.getSeconds()}`.padStart(2, 0)

    return `${h}:${m}:${s}`

    }

    setInterval(function (){
        const parts = activeClock.innerHTML.split(':')
        activeClock.innerHTML = addOneSecond(...parts)
    }, 1000)
}

activateClock();
