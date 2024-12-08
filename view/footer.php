<footer>
<div class="footer">
    <div>
        <h3>GREENY</h3>
        <p>Adipiscing asperiores ipsum ipsa repellat consequatur reprehenderit quisquam assumenda dolor perspiciatis sit ipsum dolor amet.</p>
    </div>
    <div>
        <h3>Contact Us</h3>
        <p>Email: <a href="mailto:support@example.com">support@example.com</a></p>
        <p>Phone: +120 279 532 13</p>
        <p>Address: 114-50, 2nd Avenue, NY 90001 United States</p>
    </div>
    <div>
        <h3>Quick Links</h3>
        <p><a href="#">My Account</a></p>
        <p><a href="#">Order History</a></p>
        <p><a href="#">Order Tracking</a></p>
        <p><a href="#">Best-Seller</a></p>
        <p><a href="#">New Arrivals</a></p>
    </div>
    <div class="app-links">
        <h3>Download App</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#"><img src="google-play.png" alt="Google Play"></a>
        <a href="#"><img src="app-store.png" alt="App Store"></a>
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
    <script>
      // JavaScript để xử lý dropdown menu
      const userMenuToggle = document.getElementById('user-menu-toggle');
      const userDropdown = document.getElementById('user-dropdown');

      userMenuToggle.addEventListener('click', (event) => {
        if (event.target.tagName === 'A') {
          return;
        }

        event.preventDefault();
        // Toggle menu hiển thị hoặc ẩn
        if (userDropdown.style.display === 'block') {
          userDropdown.style.display = 'none';
        } else {
          userDropdown.style.display = 'block';
        }
      });

      // Đóng menu nếu nhấn ra ngoài
      document.addEventListener('click', (event) => {
        if (!userMenuToggle.contains(event.target) && !userDropdown.contains(event.target)) {
          userDropdown.style.display = 'none';
        }
      });
    </script>

<script>
      // JavaScript để xử lý dropdown menu
      const userMenuToggle = document.getElementById('user-menu-toggle');
      const userDropdown = document.getElementById('user-dropdown');

      userMenuToggle.addEventListener('click', (event) => {
        if (event.target.tagName === 'A') {
          return;
        }

        event.preventDefault();
        // Toggle menu hiển thị hoặc ẩn
        if (userDropdown.style.display === 'block') {
          userDropdown.style.display = 'none';
        } else {
          userDropdown.style.display = 'block';
        }
      });

      // Đóng menu nếu nhấn ra ngoài
      document.addEventListener('click', (event) => {
        if (!userMenuToggle.contains(event.target) && !userDropdown.contains(event.target)) {
          userDropdown.style.display = 'none';
        }
      });
    </script>
</body>
</html>