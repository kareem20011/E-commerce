setTimeout(function(){
    let alarts = document.getElementsByClassName('alert');
    for (let alart of alarts) {
        alart.classList.add("d-none")
    }
}, 3000)