function hideEmptyPTags() {
  const pTags = document.getElementsByTagName("p");

  for (var i = 0; i < pTags.length; i++) {
    if (pTags[i].innerHTML == "&nbsp;") {
      pTags[i].classList.add("hidden");
    }
  }
}

// hideEmptyPTags();
// can be removed in PRD
