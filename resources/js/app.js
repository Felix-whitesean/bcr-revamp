import './bootstrap';
var info = document.querySelector('.info');
var toggleP = info.querySelector('p');
var infoBtn = info.querySelector('h4');
var main = document.querySelector('.main');
var toaster = main.querySelector('.toast');

toggleP.style.display = 'none';
infoBtn.addEventListener('click', function(){
    toggleP.style.display = 'block';
    console.log(toggleP);
});
infoBtn.addEventListener('mouseleave', function(){
    toggleP.style.display = 'none';
    console.log(toggleP);
});

// function toast(toast_type, toast_title, toast_message, timeout){
//     var toastTitle = toaster.querySelector('h4');
//     var toastContent = toaster.querySelector('p');
//     toaster.style.display = "flex";
//     setTimeout(function () {
//         toaster.style.display = "none";
//     }, timeout);
// }