let e,o;window.addEventListener("load",()=>{console.log("hello"),e=document.getElementById("user-delete-popup"),o=document.getElementById("mask"),document.getElementById("popupClose").addEventListener("click",t),document.getElementById("deleteUserButton").addEventListener("click",l),console.log(e),console.log(o)});function l(){e.style.display="flex",o.style.display="block",document.body.style.overflow="hidden",window.scrollTo(0,0),console.log(e.style.display),console.log(o.style.display)}function t(){o.style.display="none",e.style.display="none",document.body.style.overflow="auto",console.log(e.style.display),console.log(o.style.display)}
