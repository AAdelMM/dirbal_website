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
    const section = document.getElementById('section-2');
    function updateBackground() {
        const uniqueGifUrl = "{{ asset('images/section2bg.gif') }}?v=" + new Date().valueOf();
        section.style.backgroundImage = "url('" + uniqueGifUrl + "')";
    }

    // Update the background every 10 seconds (or choose your interval)
    setInterval(updateBackground, 10000);
    // Initial background set
    updateBackground();
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