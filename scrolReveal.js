/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
  origin: "top",
  distance: "80px",
  duration: 1000,
  reset: true,
});
/*SCROLL HOME*/
sr.reveal(".scNav", {});
sr.reveal(".delivery", { delay: 200 });
sr.reveal(".main-description", { delay: 400 });
sr.reveal(".main-tabak", { delay: 500 });
/*SCROLL DEALOFWEEK*/
sr.reveal(".image-part h3", {});
sr.reveal(".image-part h2", { delay: 200 });
sr.reveal(".image-part p", { delay: 300 });
sr.reveal(".weekly-menu", { delay: 500 });
sr.reveal(".weekly-meal-card img", { delay: 600, interval: 200 });
sr.reveal(".weekly-meal-card p", { delay: 600, interval: 200 });
/*SCROLL ABOUT*/
sr.reveal(".about img", {});
sr.reveal(".about-all h4", { delay: 200 });
sr.reveal(".about-all h2", { delay: 400 });
sr.reveal(".about-all p", { delay: 500 });
sr.reveal(".about-item-title h3 ", { interval: 500 });
sr.reveal(".about-item-title p", { interval: 400 });
sr.reveal(".about-item i", { interval: 500 });
/*SCROLL BLOG*/
sr.reveal(".blog h1", {});
sr.reveal(".blog-card", { interval: 200 });
sr.reveal(".view-more p", { delay: 200 });
/*SCROLL DIETICIANS*/
sr.reveal(".dieticians h1", {});
sr.reveal(".dieticians p", { delay: 200 });
sr.reveal(".dieticians-card img", { delay: 400, interval: 500 });
sr.reveal(".dieticians-card h3", { delay: 200, interval: 500 });
sr.reveal(".dieticians-card p", { delay: 500, interval: 500 });
sr.reveal(".dietitian-socials a", { delay: 200, interval: 200 });
