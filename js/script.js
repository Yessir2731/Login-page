// Select navbar links and hamburger button for mobile toggle
const navbr = document.querySelectorAll('.navbar-link')[0];
const hamburger = document.querySelectorAll('.toggler-button')[0];

// Toggle visibility of navbar links on mobile when hamburger is clicked
hamburger.addEventListener('click', function() {
   navbr.classList.toggle('active');
});

// Profile dropdown functionality
const profileMenu = document.querySelector('.profile-menu');
const profileDropdown = document.querySelector('.dropdown-menu');

// Toggle profile dropdown visibility when profile is clicked
profileMenu.addEventListener('click', function() {
   profileMenu.classList.toggle('active');
});

// Close the dropdown if the user clicks outside of the profile menu
window.addEventListener('click', function(event) {
   if (!event.target.closest('.profile-menu')) {
      if (profileMenu.classList.contains('active')) {
         profileMenu.classList.remove('active');
      }
   }
});
