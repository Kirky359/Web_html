const buyButtons = document.querySelectorAll(".button--buy");

const contactFormSection = document.querySelector(".contact-form-section");
const overlay = document.querySelector(".overlay");
const packageSelect = document.getElementById("package");
const closeButton = document.querySelector(".close-btn");

function openForm(selectedPackage) {
  contactFormSection.classList.add("show");
  overlay.classList.add("show");
  packageSelect.value = selectedPackage;
}

buyButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const selectedPackage = button.getAttribute("data-package");
    openForm(selectedPackage);
  });
});

function closeForm() {
  contactFormSection.classList.remove("show");
  overlay.classList.remove("show");
}

closeButton.addEventListener("click", closeForm);
overlay.addEventListener("click", closeForm);
