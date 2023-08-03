const checkboxes = document.getElementsByClassName("todo");

for (let i = 0; i < checkboxes.length; i++) {
  checkboxes[i].addEventListener("change", function() {
    const checked = checkboxes[i].checked;
    console.log(checked);
  });
}
