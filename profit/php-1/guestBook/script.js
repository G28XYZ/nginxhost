document.addEventListener("DOMContentLoaded", function (event) {
  const deleteButtons = document.querySelectorAll(".guest__delete-button");
  deleteButtons.forEach((button, i) =>
    button.addEventListener("click", (e) => {
      document.location.href = `?id=${i}`;
    })
  );
});
