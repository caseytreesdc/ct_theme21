function handleHamburger() {
  let hamburger = document.getElementsByClassName("Hamburger")[0];
  let mobileNav = document.getElementsByClassName("Mobile-Nav__ul")[0];
  let mobileUtilityNav = document.getElementsByClassName("Mobile-Utility")[0];
  let mainContent = document.getElementsByClassName("Main-Content")[0];
  let siteFooter = document.getElementsByClassName("footer__container")[0];
  let getUpdates = document.getElementsByClassName("Updates")[0];

  function displaySetting() {
    if (mobileNav.style.display === "block") {
      mobileNav.style.display = "none";
      mobileUtilityNav.style.display = "none";
      mainContent.style.display = "block";
      siteFooter.style.display = "block";
      getUpdates.style.display = "block";
    } else {
      mobileNav.style.display = "block";
      mobileUtilityNav.style.display = "flex";
      mainContent.style.display = "none";
      siteFooter.style.display = "none";
      getUpdates.style.display = "none";
    }
  }

  hamburger.addEventListener("click", displaySetting);
}

window.addEventListener("load", function () {
  handleHamburger();
});
