const refreshGalleryIcon = document.getElementById("refresh-gallery");
const categorySelect = document.getElementById("category-select");
const tagSelect = document.getElementById("tag-select");
const galleryPhotosContainer = document.querySelector(
  ".recent-gallery__photos"
);

async function fetchGalleryData(category, tag) {
  try {
    const response = await fetch("http://localhost:3000/albums");
    const data = await response.json();

    console.log("Fetched data:", data);

    const album = data.find((item) => item.category === category);
    if (!album || !album.tags[tag]) {
      galleryPhotosContainer.innerHTML =
        "<p>No photos available for this selection.</p>";
      return;
    }

    const photos = album.tags[tag].map((photo) => photo.url);
    displayPhotos(photos);
  } catch (error) {
    console.error("Error fetching gallery data:", error);
  }
}

function displayPhotos(photos) {
  galleryPhotosContainer.innerHTML = "";
  photos.forEach((photoSrc) => {
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

categorySelect.addEventListener("change", () => {
  fetchGalleryData(categorySelect.value, tagSelect.value);
});
tagSelect.addEventListener("change", () => {
  fetchGalleryData(categorySelect.value, tagSelect.value);
});
refreshGalleryIcon.addEventListener("click", () => {
  fetchGalleryData(categorySelect.value, tagSelect.value);
});
