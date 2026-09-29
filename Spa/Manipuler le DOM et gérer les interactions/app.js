document.addEventListener("DOMContentLoaded", () => {
  const btnShowForm = document.querySelector("#btn-show-form");
  const sectionForm = document.querySelector("#section-form");
  const btnCancelForm = document.querySelector("#btn-cancel-form");

  btnShowForm.addEventListener("click", () => {
    btnShowForm.hidden = true;
    sectionForm.hidden = false;
  });

  btnCancelForm.addEventListener("click", () => {
    sectionForm.hidden = true;
    btnShowForm.hidden = false;

    document.querySelector("#form-categorie").reset();
  });

  const form = document.querySelector("#form-categorie");
  const catNom = document.querySelector("#cat-nom");
  const catCouleur = document.querySelector("#cat-couleur");
  const tableBody = document.querySelector("#table-categories-body");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    const nom = catNom.value;
    const couleur = catCouleur.value;

    tableBody.insertAdjacentHTML(
      "beforeend",
      `<tr>
      <td>${nom}</td>
      <td>${couleur}</td>
      </tr>`,
    );

    form.reset();

    sectionForm.hidden = true;
    btnShowForm.hidden = false;
  });
});
