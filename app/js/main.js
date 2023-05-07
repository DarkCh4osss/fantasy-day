const copy = document.getElementById("copyright");
const date = new Date().getFullYear();
copy.innerText = date;

const logoText = document.getElementById("logo");
logoText.addEventListener("click", () => {
  window.location.href = "/";
});

document.addEventListener("DOMContentLoaded", function () {
  let splide = new Splide(".splide", {
    perPage: 3,
  });
  splide.mount();
});
