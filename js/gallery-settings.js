async function loadGallerySettings() {
  try {
    const response = await fetch("http://localhost:3000/gallerySettings");

    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const settings = await response.json();
    console.log("Gallery Settings :", settings);

    const categorySelect = document.getElementById("category-select");
    const tagSelect = document.getElementById("tag-select");

    if (!categorySelect || !tagSelect) {
      throw new Error("Element select for cateroy is not found in HTML.");
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
    console.error("Error loading settings:", error);
  }
}

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

loadGallerySettings();
