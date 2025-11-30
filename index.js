const items = document.querySelectorAll("[data-anime]");

const handleIntersection = (entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
    } else {
      entry.target.classList.remove("animate");
    }
  });
};

const observerOptions = {
  root: null,
  rootMargin: '0px 0px -15% 0px', 
  threshold: 0.0 
};


const observer = new IntersectionObserver(handleIntersection, observerOptions);

items.forEach(item => {
  observer.observe(item);
});