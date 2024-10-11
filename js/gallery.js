// Получаем элементы
const refreshGalleryIcon = document.getElementById("refresh-gallery"); // Иконка обновления
const categorySelect = document.getElementById("category-select"); // Селектор категорий
const tagSelect = document.getElementById("tag-select"); // Селектор тегов
const galleryPhotosContainer = document.querySelector(
  ".recent-gallery__photos"
); // Контейнер для галереи

// Пример данных изображений для каждой категории и тега
const galleryData = {
  wedding: {
    blacknwhite: [
      "/photos/index/wedding-blacknwhite/img-1.png",
      "/photos/index/wedding-blacknwhite/img-2.png",
      "/photos/index/wedding-blacknwhite/img-3.png",
      "/photos/index/wedding-blacknwhite/img-4.png",
      "/photos/index/wedding-blacknwhite/img-5.png",
      "/photos/index/wedding-blacknwhite/img-6.png",
      "/photos/index/wedding-blacknwhite/img-7.png",
      "/photos/index/wedding-blacknwhite/img-8.png",
      "/photos/index/wedding-blacknwhite/img-9.png",
    ],
    colorful: [
      "/photos/index/wedding-color/img-1.png",
      "/photos/index/wedding-color/img-2.png",
      "/photos/index/wedding-color/img-3.png",
      "/photos/index/wedding-color/img-4.png",
      "/photos/index/wedding-color/img-5.png",
      "/photos/index/wedding-color/img-6.png",
      "/photos/index/wedding-color/img-7.png",
      "/photos/index/wedding-color/img-8.png",
      "/photos/index/wedding-color/img-9.png",
    ],
  },
  landscape: {
    // Заменено с portrait на landscape
    blacknwhite: [
      "/photos/index/landscape-blacknwhite/img-1.png",
      "/photos/index/landscape-blacknwhite/img-2.png",
      "/photos/index/landscape-blacknwhite/img-3.png",
      "/photos/index/landscape-blacknwhite/img-4.png",
      "/photos/index/landscape-blacknwhite/img-5.png",
      "/photos/index/landscape-blacknwhite/img-6.png",
      "/photos/index/landscape-blacknwhite/img-7.png",
      "/photos/index/landscape-blacknwhite/img-8.png",
      "/photos/index/landscape-blacknwhite/img-9.png",
    ],
    colorful: [
      "/photos/index/landscape-color/img-1.png",
      "/photos/index/landscape-color/img-2.png",
      "/photos/index/landscape-color/img-3.png",
      "/photos/index/landscape-color/img-4.png",
      "/photos/index/landscape-color/img-5.png",
      "/photos/index/landscape-color/img-6.png",
      "/photos/index/landscape-color/img-7.png",
      "/photos/index/landscape-color/img-8.png",
      "/photos/index/landscape-color/img-9.png",
    ],
  },
};

// Функция обновления галереи
function updateGallery() {
  const selectedCategory = categorySelect.value; // Получаем выбранную категорию
  const selectedTag = tagSelect.value; // Получаем выбранный тег

  // Получаем массив изображений для выбранной категории и тега
  const selectedPhotos = galleryData[selectedCategory][selectedTag];

  // Очищаем контейнер галереи
  galleryPhotosContainer.innerHTML = "";

  // Добавляем новые фотографии
  selectedPhotos.forEach((photoSrc) => {
    const photoItem = document.createElement("div");
    photoItem.classList.add("photo-item");

    const img = document.createElement("img");
    img.src = photoSrc;
    img.alt = "Gallery Photo";
    img.classList.add("photo-item__image");

    photoItem.appendChild(img);
    galleryPhotosContainer.appendChild(photoItem);
  });
}

// Добавляем обработчики изменений для селекторов
categorySelect.addEventListener("change", updateGallery);
tagSelect.addEventListener("change", updateGallery);
