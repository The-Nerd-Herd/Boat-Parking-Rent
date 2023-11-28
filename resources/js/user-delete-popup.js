
let popup;
let mask;

window.addEventListener('load' ,()=>{
    console.log('hello')
    popup = document.getElementById('user-delete-popup');
    mask = document.getElementById('mask');
    popup.display = "none";
    mask.display = "none";
    console.log(popup);
    console.log(mask)

})

function openPupup() {
    popup.display = "block" ;
    mask.displa = "block";
}

function closePupup()
{
    popup.visible = "none";
    mask.visible = "none";
}

