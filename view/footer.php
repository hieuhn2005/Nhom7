<footer>

    <div class="footer-content">
    
    <div class="copyright">
    
    <p>&copy; All Copyrights Reserved by Mironcoder</p>
    
    </div>
    
    <div class="payment-methods">
    
    <img src="view/img/01.jpg" alt="PayPal">
    
    <img src="view/img/02.jpg" alt="Maestro">
    
    <img src="view/img/03.jpg" alt="Discover">
    
    <img src="view/img/04.jpg" alt="Visa">
    
    </div>
    
    </div>
    
    </footer>

    <script>
        let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
</body>
</html>