async function loadGallerySettings() {
  try {
    const response = await fetch("http://localhost:3000/gallerySettings");

    if (!response.ok) {
      throw new Error(`HTTP ошибка! Статус: ${response.status}`);
    }

    const settings = await response.json();
    console.log("Настройки галереи:", settings);

    const categorySelect = document.getElementById("category-select");
    const tagSelect = document.getElementById("tag-select");

    if (!categorySelect || !tagSelect) {
      throw new Error(
        "Элементы select для категорий и тегов не найдены в HTML."
      );
    }

    categorySelect.innerHTML = "";
    tagSelect.innerHTML = "";

    settings.categories.forEach((category) => {
      const option = document.createElement("option");
      option.value = category;
      option.textContent = capitalizeFirstLetter(category);
      categorySelect.appendChild(option);
    });

    settings.tags.forEach((tag) => {
      const option = document.createElement("option");
      option.value = tag;
      option.textContent = `#${tag}`;
      tagSelect.appendChild(option);
    });
  } catch (error) {
    console.error("Ошибка загрузки настроек галереи:", error);
  }
}

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

loadGallerySettings();
