document.addEventListener('DOMContentLoaded', () => {
    // Variables
    const subtitles = [
      "آخر الموضوعات", 
      "و أهم الإضافات الاخيرة",
      "الى مختلف الفروع"
    ];
    let currentSubtitleIndex = 0;
    const subtitleElement = document.getElementById('subtitle');
    const section = document.getElementById('section-2');
    const footer = document.getElementById('footer');
    const scrollToTopButton = document.getElementById('scrollToTopButton');
    const navbar = document.getElementById('navbar');
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.navbar-link');
    let lastActiveIndex = -1;
  
    // Function to change subtitle text
    function changeSubtitle() {
      subtitleElement.textContent = subtitles[currentSubtitleIndex];
      currentSubtitleIndex = (currentSubtitleIndex + 1) % subtitles.length;
    }
  
    // Function to update the background GIF
    function updateBackground() {
      const uniqueGifUrl = "{{ asset('images/section2bg.gif') }}?v=" + new Date().valueOf();
      section.style.backgroundImage = `url(${uniqueGifUrl})`;
    }
  
    // Helper function to check if an element is in the viewport
    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  
    // Function to add animation class to rows when they come into view
    function handleScroll() {
      const rows = document.querySelectorAll(".row1, .row2, .row3");
      rows.forEach((row, index) => {
        if (isInViewport(row)) {
          setTimeout(() => {
            row.classList.add("animate");
          }, index * 300);
        }
      });
  
      updateActiveLink();
      toggleScrollToTopButton();
      toggleFooter();
    }
  
    // Function to update active navigation link
    function updateActiveLink() {
      const scrollPosition = window.scrollY + navbar.offsetHeight;
      sections.forEach((section, index) => {
        if (scrollPosition >= section.offsetTop && scrollPosition < section.offsetTop + section.offsetHeight) {
          if (lastActiveIndex !== index) {
            if (lastActiveIndex >= 0) {
              navLinks[lastActiveIndex].classList.remove('active');
            }
            navLinks[index].classList.add('active');
            lastActiveIndex = index;
          }
        } else {
          navLinks[index].classList.remove('active');
        }
      });
    }
  
    // Function to toggle the visibility of the scroll-to-top button
    function toggleScrollToTopButton() {
      if (window.scrollY > window.innerHeight / 2) {
        scrollToTopButton.style.display = 'block';
      } else {
        scrollToTopButton.style.display = 'none';
      }
    }
  
    // Function to toggle the footer visibility
    function toggleFooter() {
      if (window.scrollY > window.innerHeight / 2) {
        footer.classList.add('visible');
      } else {
        footer.classList.remove('visible');
      }
    }
  
    // Smooth scrolling for navigation links
    document.querySelectorAll('.navbar-link').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - navbar.offsetHeight,
            behavior: 'smooth'
          });
        }
      });
    });
  
    // Scroll to top on button click
    scrollToTopButton.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  
    // Initialize
    setInterval(changeSubtitle, 5000); // Change subtitle every 5 seconds
    setInterval(updateBackground, 10000); // Update background every 10 seconds
    updateBackground(); // Set initial background
    window.addEventListener('scroll', handleScroll); // Handle scroll
    window.addEventListener('resize', updateActiveLink); // Handle resize
    handleScroll(); // Initial check
  });
  