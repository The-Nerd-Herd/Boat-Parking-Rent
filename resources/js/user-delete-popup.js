
let popup;
let mask;
let popupCancleButton;
let popupShowButton;
window.addEventListener('load' ,()=>{
    console.log('hello')
    popup = document.getElementById('user-delete-popup');
    mask = document.getElementById('mask');

    popupCancleButton = document.getElementById('popupClose').addEventListener('click', closePopup);
    popupShowButton = document.getElementById('deleteUserButton').addEventListener('click', openPopup);

    console.log(popup);
    console.log(mask);
})

function openPopup() {
    popup.style.display = "flex";
    mask.style.display = "block";
    document.body.style.overflow = "hidden";
    window.scrollTo(0,0);
    console.log(popup.style.display);
    console.log(mask.style.display);
}

function closePopup()
{
    mask.style.display = "none";
    popup.style.display = "none";
    document.body.style.overflow = "auto";

    console.log(popup.style.display);
    console.log(mask.style.display);
}

