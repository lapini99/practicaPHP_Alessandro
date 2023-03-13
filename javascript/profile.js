let btnModify = document.querySelector("#modify");
let btnSave = document.querySelector("#save");
let input = document.querySelectorAll(".mod");

btnModify.addEventListener("click", () => {
    input.forEach(element => element.removeAttribute("disabled"));
    // input.setAttribute("disabled", true);
});

btnSave.addEventListener("click", () => {
    input.forEach(element => element.setAttribute("disabled", true));
});
