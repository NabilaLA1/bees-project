var slideIndex = 0; // Start the index at 0

// Function to display the initial slideshow
showSlides(slideIndex);

// Function to move to the next or previous slide
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Function to display a specific slide
function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Function to control slideshow visibility
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n >= slides.length) { slideIndex = 0; }
  if (n < 0) { slideIndex = slides.length - 1; }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex].style.display = "block";
}
