//section animations 
const sections = document.querySelectorAll('section');
window.addEventListener('scroll',cheksections);

function cheksections(){
    //alert("tintou");
   const triggerBottom = window.innerHeight;

   sections.forEach(section => {
     const sectionTop = section.getBoundingClientRect().top;

     if(sectionTop < triggerBottom){

        section.classList.add('active');
     }else{
        section.classList.remove('active');
     }
   
   });

}
//menu js
 
var menu = document.querySelector('.menu');
var nav= document.querySelector('.nav');
menu.onclick = function(){ 
     //menu.classList.toggle('show');
     //nav.classList.toggle('show');

}

 function enterSalon(salonId) {
   // Ici, vous pouvez ajouter le code pour gérer l'action d'entrer dans un salon spécifique
        alert("Vous êtes entré dans le salon " + salonId);
        // Vous pouvez rediriger vers une nouvelle page ou effectuer d'autres actions nécessaires
}



// JavaScript to switch images for each employee
function prevImage(button) {
   const imageSlider = button.parentElement;
   const images = imageSlider.querySelectorAll('img');
   let currentImageIndex = Array.from(images).findIndex(img => img.style.display !== 'none');
   currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
   images.forEach((image, index) => {
       image.style.display = index === currentImageIndex ? 'block' : 'none';
   });
}

function nextImage(button) {
   const imageSlider = button.parentElement;
   const images = imageSlider.querySelectorAll('img');
   let currentImageIndex = Array.from(images).findIndex(img => img.style.display !== 'none');
   currentImageIndex = (currentImageIndex + 1) % images.length;
   images.forEach((image, index) => {
       image.style.display = index === currentImageIndex ? 'block' : 'none';
   });
}


