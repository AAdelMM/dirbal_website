   // JavaScript for changing subtitle text
   document.addEventListener('DOMContentLoaded', function () {
    const subtitles = [
        "آخر الموضوعات", // Initial text
       " و أهم الإضافات الاخيرة",
        "الى مختلف الفروع"
    ];
    let currentSubtitleIndex = 0;
    const subtitleElement = document.getElementById('subtitle');

    function changeSubtitle() {
        subtitleElement.textContent = subtitles[currentSubtitleIndex];
        currentSubtitleIndex = (currentSubtitleIndex + 1) % subtitles.length;
    }

    setInterval(changeSubtitle, 5000); // Change subtitle every 5 seconds

    // JavaScript for looping GIF background
 
});
//rows animation
document.addEventListener("DOMContentLoaded", () => {

  // Helper function to check if an element is in the viewport
  const isInViewport = (element) => {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  };

  // Function to add animation class when elements come into view
  const handleScroll = () => {
    const rows = document.querySelectorAll(".row1, .row2, .row3");

    rows.forEach((row, index) => {
      if (isInViewport(row)) {
        setTimeout(() => {
          row.classList.add("animate");
        }, index * 300); // Delay each row's animation by 300ms
      }
    });
  };

  // Listen to scroll events
  window.addEventListener("scroll", handleScroll);

  // Initial check in case elements are already in view on load
  handleScroll();
});

//footer
document.addEventListener('DOMContentLoaded', () => {
  const footer = document.querySelector('#footer');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        footer.classList.add('visible');
        // Optionally, stop observing after it's visible to improve performance
        observer.unobserve(footer);
      }
    });
  }, {
    threshold: 0.1 // Adjust this value to control when the footer becomes visible
  });

  observer.observe(footer);
});

//search



document.addEventListener('DOMContentLoaded', function () {
  const searchIcon = document.querySelector('.searchIcon');
  const searchSection = document.getElementById('searchSection');
  const searchInput = document.getElementById('searchInput');
  const closeIcon = searchSection.querySelector('.Close');

  // Show the search section and focus the input when the search icon is clicked
  searchIcon.addEventListener('click', function () {
    searchSection.classList.add('show');
    setTimeout(() => {
      searchInput.focus();
    }, 300); // Delay focus to ensure smooth transition
  });

  // Hide the search section when the close icon is clicked
  closeIcon.addEventListener('click', function () {
    searchSection.classList.remove('show');
  });

  // Optionally, close the search section when clicking outside of it
  document.addEventListener('click', function (event) {
    if (!searchSection.contains(event.target) && !searchIcon.contains(event.target)) {
      searchSection.classList.remove('show');
    }
  });

  // Handle placeholder visibility when input is focused or blurred
  searchInput.addEventListener('focus', function () {
    this.placeholder = '';
  });

  searchInput.addEventListener('blur', function () {
    if (this.value.trim() === '') {
      this.placeholder = 'كلمة/كلمات البحث...';
    }
  });
});

function redirectToFavorite() {
  // Example additional logic before redirecting
  console.log("Redirecting to the favorite page...");
  window.location.href = "favorite";
}

//for menu

document.addEventListener('DOMContentLoaded', function() {
  const menuItems = document.querySelectorAll('.Head');

  menuItems.forEach(item => {
    item.addEventListener('click', function() {
      // Toggle the submenu
      const submenu = item.nextElementSibling;
      const arrow = item.querySelector('.arrow');

      if (submenu.classList.contains('show')) {
        submenu.classList.remove('show');
        arrow.classList.remove('rotate');
        // Optional: Delay hiding the submenu until the animation ends
        setTimeout(() => {
          submenu.style.display = 'none';
        }, 1000);
      } else {
        submenu.style.display = 'flex';
        setTimeout(() => {
          submenu.classList.add('show');
          arrow.classList.add('rotate');
        }, 10); // Slight delay to ensure the display change takes effect before animating
      }
    });
  });
});

//toggle menu
document.addEventListener('DOMContentLoaded', function() {
  // Get references to menu icon and menu container
  const menuIcon = document.getElementById('menuIcon');
  const menuContainer = document.getElementById('menuContainer');
  const menuCloseIcon = document.getElementById('menuCloseIcon'); // Assuming you add an ID to your close icon

  // Function to toggle menu visibility
  function toggleMenu() {
    menuContainer.classList.toggle('hidden'); // Toggle the 'hidden' class
  }

  // Event listener for menu icon on main page
  menuIcon.addEventListener('click', toggleMenu);

  // Event listener for close icon within menu itself
  menuCloseIcon.addEventListener('click', toggleMenu);
});


