function handleHamburger() {
  hamburger = document.getElementsByClassName("Hamburger")[0];
  mobileNav = document.getElementsByClassName("Mobile-Nav__ul")[0];
  mainContent = document.getElementsByClassName("Main-Content")[0];
  siteFooter = document.getElementsByClassName("footer__container")[0];

  hamburger.addEventListener("click", () => {     
      if (mobileNav.style.display === "block") {
        mobileNav.style.display = "none";
        mainContent.style.display = "block";
        siteFooter.style.display = "block";
      } else {
        mobileNav.style.display = "block";
        mainContent.style.display = "none";
        siteFooter.style.display = "none";
      }
  });
}

window.addEventListener("load", function () {
  handleHamburger();
});