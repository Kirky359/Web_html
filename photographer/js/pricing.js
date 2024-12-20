document.addEventListener("DOMContentLoaded", () => {
  const buyButtons = document.querySelectorAll(".button--buy");
  const contactFormSection = document.querySelector(".contact-form-section");
  const overlay = document.querySelector(".overlay");
  const packageSelect = document.getElementById("package");
  const closeButton = document.querySelector(".close-btn");

  function openForm(selectedPackage) {
    console.log("Открытие формы");
    contactFormSection.classList.add("show");
    overlay.classList.add("show");
    packageSelect.value = selectedPackage;

    console.log("Добавленные классы:", contactFormSection.className);
    console.log("Overlay классы:", overlay.className);
  }

  buyButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const selectedPackage = button.getAttribute("data-package");
      openForm(selectedPackage);
    });
  });

  function closeForm() {
    console.log("Закрытие формы");
    contactFormSection.classList.remove("show");
    overlay.classList.remove("show");
  }

  closeButton.addEventListener("click", closeForm);
  overlay.addEventListener("click", closeForm);
});
