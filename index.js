let buttonsOpen = document.querySelectorAll(".open-button");
let modal = document.querySelector("#modal");

let buttonsArray = Array.from(buttonsOpen);

buttonsArray.map((button) =>
  button.addEventListener("click", (event) => {
    
    let id = event.target.id;
    let text = document.querySelector(".modal-body");

    modal.classList.add("open");

    fetch("http://localhost/getAdditionalData.php?getId=" + id)
      .then((response) => response.json())
      .then(
        (data) =>
          (text.innerHTML =
            "Дата рождения: " +
            data["birthday"] +
            "<br/> Ссылка на профиль: <a href=" +
            data["profileLink"] +
            ">" +
            data["profileLink"] +
            "<a/>")
      );
  })
);

document.querySelector(".btn-close").addEventListener("click", () => {
    modal.classList.remove("open");
});
