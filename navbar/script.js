const toggleButton = document.getElementsByClassName('toggle-button');
const navbarLinks = document.getElementsByClassName('navbar-links');

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('avtive');
});
