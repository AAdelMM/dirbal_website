   // JavaScript for changing subtitle text
  /*  document.addEventListener('DOMContentLoaded', function () {
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
 
}); */
//last topics new animation

/* document.addEventListener('DOMContentLoaded', () => {
    const row1 = document.getElementById('subtitle-row1');
    const row2 = document.getElementById('subtitle-row2');

    function startAnimation() {
        // Reset all classes
        row1.classList.remove('fall', 'disappear');
        row2.classList.remove('fall', 'disappear');

        // Start the sequence
        setTimeout(() => {
            row2.classList.add('fall'); // Row 2 falls from above
        }, 500); // Delay to stagger the start of row 2's fall

        setTimeout(() => {
            row1.classList.add('fall'); // Row 1 falls from above
        }, 1500); // Row 1 starts falling after row 2 is visible

        setTimeout(() => {
            row2.classList.add('disappear'); // Row 2 starts disappearing
        }, 4000); // Row 2 starts disappearing after it's fully visible for 2 seconds

        setTimeout(() => {
            row1.classList.add('disappear'); // Row 1 starts disappearing
        }, 5000); // Row 1 starts disappearing after it's fully visible for 2 seconds

        // Loop the animation
        setTimeout(startAnimation, 7000); // Restart the entire sequence after it's complete
    }

    // Start the animation for the first time
    startAnimation();
}); */


//end last topics new animation
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
/* document.addEventListener('DOMContentLoaded', () => {
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
}); */

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

//carousel

// carousel.js

document.addEventListener('DOMContentLoaded', () => {
  const carouselWrapper = document.getElementById('carouselWrapper');
  const prevArrow = document.getElementById('prevArrow');
  const nextArrow = document.getElementById('nextArrow');
  const sections = document.querySelectorAll('.carousel-section');
  let currentIndex = 0;

  function updateCarousel() {
      const offset = -currentIndex * 100; // Calculate the offset in percentage
      carouselWrapper.style.transform = `translateX(${offset}vw)`;
  }

  // Event listeners for arrow buttons
  nextArrow.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % sections.length; // Move to the next section, wrap around if at the end
      updateCarousel();
  });

  prevArrow.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + sections.length) % sections.length; // Move to the previous section, wrap around if at the beginning
      updateCarousel();
  });
});

//preload message

document.addEventListener('DOMContentLoaded', (event) => {
  // Function to check if the user has visited before
  function isFirstVisit() {
    return !localStorage.getItem('hasVisited');
  }

  // Function to set the visit flag in localStorage
  function setVisitFlag() {
    localStorage.setItem('hasVisited', 'true');
  }

  // Execute only on first visit
  if (isFirstVisit()) {
    const loadingMessage = document.getElementById('loadingMessage');
    console.log('User is visiting for the first time, showing loading message.');

    // Hide the loading message after 4 seconds
    setTimeout(function () {
      loadingMessage.classList.add('hidden-message');
      console.log('Hiding the loading message after 4 seconds.');

      // Optionally remove the element from the DOM after the transition ends
      loadingMessage.addEventListener('transitionend', () => {
        console.log('Removing the loading message from DOM.');
        loadingMessage.remove();
      });
    }, 4000);

    // Set the visit flag
    setVisitFlag();
  } else {
    // Immediately hide the loading message on subsequent visits
    console.log('User has visited before, hiding loading message.');
    const loadingMessage = document.getElementById('loadingMessage');
    if (loadingMessage) {
      loadingMessage.style.display = 'none';
    } else {
      console.error('Element with ID loadingMessage not found.');
    }
  }
});

//for quotes


/////////
//fade last words in last topics sections

document.addEventListener('DOMContentLoaded', function () {
  const textPreview = document.getElementById('text-preview');
  const words = textPreview.textContent.trim().split(' ');

  // Get the last 6 words
  const fadeCount = 6;
  const totalWords = words.length;
  const fadingWords = words.slice(totalWords - fadeCount);

  // Remove the last 6 words from the original text
  const remainingText = words.slice(0, totalWords - fadeCount).join(' ');

  // Create spans for the fading words with different opacities
  const fadingSpans = fadingWords.map((word, index) => {
    const className = `fading-word-${index + 1}`;
    return `<span class="${className}">${word}</span>`;
  }).join(' ');

  // Update the content of text-preview
  textPreview.innerHTML = `${remainingText} ${fadingSpans}`;
});

//pagination indicator dots

document.addEventListener('DOMContentLoaded', function () {
  const carouselWrapper = document.getElementById('carouselWrapper');
  const sections = document.querySelectorAll('.carousel-section');
  const prevArrow = document.getElementById('prevArrow');
  const nextArrow = document.getElementById('nextArrow');
  const dots = document.querySelectorAll('.carousel-dot');
  let currentIndex = 0;

  function updateCarousel(index) {
      // Ensure the index is within bounds
      if (index < 0) index = sections.length - 1;
      if (index >= sections.length) index = 0;

      // Update the position of the carousel
      carouselWrapper.style.transform = `translateX(-${index * 100}%)`;

      // Update the active dot
      dots.forEach(dot => dot.classList.remove('active'));
      dots[index].classList.add('active');

      currentIndex = index;
  }

  // Event listeners for arrows
  prevArrow.addEventListener('click', () => updateCarousel(currentIndex - 1));
  nextArrow.addEventListener('click', () => updateCarousel(currentIndex + 1));

  // Event listeners for dots
  dots.forEach(dot => {
      dot.addEventListener('click', () => {
          const index = parseInt(dot.getAttribute('data-index'));
          updateCarousel(index);
      });
  });

  // Initialize the carousel
  updateCarousel(currentIndex);
});
