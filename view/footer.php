<footer>

    
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
</body>
</html>