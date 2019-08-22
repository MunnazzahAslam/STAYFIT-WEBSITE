const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});

function bmi () {
var height = Number(document.getElementById("height").value);
var weight = Number(document.getElementById("weight").value);
var result = weight / (height * height);
document.getElementById("result").innerHTML = "Your Calculated BMI is:" + result;
var val=document.bmiform.result.value;

  if(val<18){document.getElementById('lbltipAddedComment').innerHTML = 'You are underweight!';}
    if(val>18){document.getElementById('lbltipAddedComment').innerHTML = 'You are overweight!';}
      if(val=18){document.getElementById('lbltipAddedComment').innerHTML = 'You have healthy BMI!';}
  }


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
