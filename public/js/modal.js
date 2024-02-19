
let modal = document.getElementById('modal');
let closeButton = document.getElementsByClassName('close')[0];
let watchButton = document.getElementById('watchButton');
let trailerFrame = document.getElementById('trailerFrame');
let src = trailerFrame.src;


watchButton.onclick = function(){
    openModal(src);
}

function openModal(trailerUrl){
    modal.style.display = 'block';
    trailerFrame.src = trailerUrl;
}
function closeModal(){
    modal.style.display = 'none';
    trailerFrame.src = '';
}

closeButton.onclick = closeModal;

window.onclick =  function (event){
    if(event.target === modal){
        closeModal();
    }
}


