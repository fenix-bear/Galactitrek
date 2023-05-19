var navlogo;

const observer = new IntersectionObserver((entries) => {
  navlogo = document.querySelector(".navlogo");
  entries.forEach((entry) => {
    console.log(entry)
    if (!entry.isIntersecting) {
      navlogo.classList.add("logovisible");
    } else {
      navlogo.classList.remove("logovisible");
    }
  })
});

console.log(navlogo);

const hiddenElements = document.querySelectorAll(".mainlogo");
hiddenElements.forEach((el) => observer.observe(el));