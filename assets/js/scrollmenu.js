// Smooth scroll to section on menu click
document.querySelectorAll(".menu-item").forEach((item) => {
  item.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    window.scrollTo({
      top: target.offsetTop,
      behavior: "smooth",
    });
  });
});

// Change active menu item on scroll
window.addEventListener("scroll", function () {
  let scrollPosition =
    document.documentElement.scrollTop || document.body.scrollTop;

  document.querySelectorAll(".section-tab").forEach((section) => {
    if (
      scrollPosition >= section.offsetTop - 60 &&
      scrollPosition < section.offsetTop + section.offsetHeight
    ) {
      document.querySelectorAll(".menu-item").forEach((item) => {
        item.classList.remove("active");
      });
      const activeItem = document.querySelector(
        `.menu-item[href="#${section.id}"]`
      );
      activeItem.classList.add("active");
      scrollToActiveMenuItem(activeItem);
    }
  });
});

// Function to scroll the menu to ensure the active item is visible
function scrollToActiveMenuItem(activeItem) {
  const menu = document.querySelector(".horizontal-menu");
  const menuRect = menu.getBoundingClientRect();
  const activeItemRect = activeItem.getBoundingClientRect();

  // If the active item is not fully visible, scroll the menu
  if (
    activeItemRect.left < menuRect.left ||
    activeItemRect.right > menuRect.right
  ) {
    const offset = activeItemRect.left - menuRect.left;
    menu.scrollBy({ left: offset, behavior: "smooth" });
  }
}

// Horizontal scroll with arrow keys
window.addEventListener("keydown", function (e) {
  const menu = document.querySelector(".horizontal-menu");
  if (e.key === "ArrowRight") {
    menu.scrollBy({ left: 100, behavior: "smooth" });
  } else if (e.key === "ArrowLeft") {
    menu.scrollBy({ left: -100, behavior: "smooth" });
  }
});

// Horizontal scroll with arrow buttons
const leftArrow = document.querySelector(".left-arrow");
const rightArrow = document.querySelector(".right-arrow");
const menu = document.querySelector(".horizontal-menu");

leftArrow.addEventListener("click", () => {
  menu.scrollBy({ left: -100, behavior: "smooth" });
});

rightArrow.addEventListener("click", () => {
  menu.scrollBy({ left: 100, behavior: "smooth" });
});

// Show/hide arrows based on scroll position
menu.addEventListener("scroll", () => {
  if (menu.scrollLeft === 0) {
    leftArrow.style.display = "none";
  } else {
    leftArrow.style.display = "block";
  }

  if (menu.scrollLeft + menu.clientWidth >= menu.scrollWidth) {
    rightArrow.style.display = "none";
  } else {
    rightArrow.style.display = "block";
  }
});

// Initial check for arrows visibility
window.addEventListener("load", () => {
  if (menu.scrollWidth <= menu.clientWidth) {
    leftArrow.style.display = "none";
    rightArrow.style.display = "none";
  } else {
    rightArrow.style.display = "block";
  }
});
