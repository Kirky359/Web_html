// Находим все кнопки "Buy"
const buyButtons = document.querySelectorAll(".button--buy");

// Находим модальное окно, select и overlay
const contactFormSection = document.querySelector(".contact-form-section");
const overlay = document.querySelector(".overlay");
const packageSelect = document.getElementById("package");
const closeButton = document.querySelector(".close-btn");

// Функция для открытия модального окна и выбора пакета
function openForm(selectedPackage) {
  contactFormSection.classList.add("show"); // Показать модальное окно
  overlay.classList.add("show"); // Показать затемнение
  packageSelect.value = selectedPackage; // Установить выбранный пакет в select
}

// Обработчик клика для каждой кнопки "Buy"
buyButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const selectedPackage = button.getAttribute("data-package"); // Получаем пакет из атрибута data-package
    openForm(selectedPackage); // Открываем модальное окно с нужным пакетом
  });
});

// Закрытие модального окна
function closeForm() {
  contactFormSection.classList.remove("show"); // Скрыть модальное окно
  overlay.classList.remove("show"); // Убрать затемнение
}

// Добавляем обработчик клика на кнопку закрытия и на overlay
closeButton.addEventListener("click", closeForm);
overlay.addEventListener("click", closeForm);
