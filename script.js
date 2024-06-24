function toggleMenu() {
  var navbar = document.getElementById("navbar");
  navbar.classList.toggle("active");
}

function toggleReadMore() {
  var moreText = document.getElementById("more-text");
  var readMoreBtn = document.getElementById("read-more-btn");

  if (moreText.style.display === "none") {
    moreText.style.display = "inline";
    readMoreBtn.innerText = "Baca lebih sedikit";
  } else {
    moreText.style.display = "none";
    readMoreBtn.innerText = "Baca selengkapnya";
  }
}
