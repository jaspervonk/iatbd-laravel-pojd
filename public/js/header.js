window.onload = () => {
    // Inladen van de elementen voor het Menu
    const menuButton = document.getElementById("js--menuButton");
    const navList = document.getElementById("js--navList");
  
    // Click event op menuButton --> Toggle het menu
    menuButton.addEventListener("click", () => {
        navList.classList.toggle("header__nav__list--active");
    })
}
  