async function loadGallerySettings() {
  try {
    const response = await fetch("http://localhost:3000/gallerySettings");

    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const settings = await response.json();

    const categorySelect = document.getElementById("category-select");
    const tagSelect = document.getElementById("tag-select");

    if (!categorySelect || !tagSelect) {
      console.error(
        "Select elements for category or tag not found in the DOM."
      );
      return;
    }

    categorySelect.innerHTML = settings.categories
      .map(
        (category) =>
          `<option value="${category}">${capitalizeFirstLetter(
            category
          )}</option>`
      )
      .join("");

    tagSelect.innerHTML = settings.tags
      .map((tag) => `<option value="${tag}">#${tag}</option>`)
      .join("");
  } catch (error) {
    console.error("Error loading gallery settings:", error);
  }
}

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

function displayPhotos(photos) {
  const galleryPhotosContainer = document.querySelector(
    ".recent-gallery__photos"
  );
  galleryPhotosContainer.innerHTML = photos
    .map(
      (photoSrc) => `
      <div class="photo-item">
        <img src="${photoSrc}" alt="Gallery Photo" class="photo-item__image" />
      </div>`
    )
    .join("");
}

document.getElementById("category-select").addEventListener("change", () => {
  fetchGalleryData(
    document.getElementById("category-select").value,
    document.getElementById("tag-select").value
  );
});

document.getElementById("tag-select").addEventListener("change", () => {
  fetchGalleryData(
    document.getElementById("category-select").value,
    document.getElementById("tag-select").value
  );
});

loadGallerySettings();

const categorySelect = document.getElementById("category-select");
const tagSelect = document.getElementById("tag-select");
const galleryPhotosContainer = document.querySelector(
  ".recent-gallery__photos"
);

async function fetchGalleryData(category, tag) {
  try {
    const response = await fetch("http://127.0.0.1:3000/albums");
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    const data = await response.json();

    const galleryPhotosContainer = document.querySelector(
      ".recent-gallery__photos"
    );

    const album = data.find((item) => item.category === category);

    if (!album || !album.tags || !album.tags[tag]) {
      galleryPhotosContainer.innerHTML =
        "<p>No photos available for this selection.</p>";
      return;
    }

    const photos = album.tags[tag].map(
      (photo) => `http://127.0.0.1:3000${photo.url}`
    );
    displayPhotos(photos);
  } catch (error) {
    console.error("Error fetching gallery data:", error);
  }
}

function displayPhotos(photos) {
  const galleryPhotosContainer = document.querySelector(
    ".recent-gallery__photos"
  );

  galleryPhotosContainer.innerHTML = photos
    .map(
      (photoSrc) => `
      <div class="photo-item">
        <img src="${photoSrc}" alt="Gallery Photo" class="photo-item__image" />
      </div>`
    )
    .join("");
}

document.getElementById("category-select").addEventListener("change", () => {
  fetchGalleryData(
    document.getElementById("category-select").value,
    document.getElementById("tag-select").value
  );
});

document.getElementById("tag-select").addEventListener("change", () => {
  fetchGalleryData(
    document.getElementById("category-select").value,
    document.getElementById("tag-select").value
  );
});

loadGallerySettings();

categorySelect.addEventListener("change", () => {
  fetchGalleryData(categorySelect.value, tagSelect.value);
});
tagSelect.addEventListener("change", () => {
  fetchGalleryData(categorySelect.value, tagSelect.value);
});

function openMenu() {
  document.querySelector(".menu").classList.add("menu--active");
  document.body.style.overflow = "hidden";
}

function closeMenu() {
  document.querySelector(".menu").classList.remove("menu--active");
  document.body.style.overflow = "";
}
