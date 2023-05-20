var navlogo = document.querySelector(".navlogo");

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

const hiddenElements = document.querySelectorAll(".mainlogo");
hiddenElements.forEach((el) => observer.observe(el));

if (document.querySelector(".mainlogo") == undefined){
  navlogo.classList.remove("logohidden");
}
