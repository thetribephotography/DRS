import { set } from "lodash";
import ScrollReveal from "scrollreveal";

// Shows and hides group selection under access rights selection in Upload Form
const box = document.getElementById("box");

//For Landing page divs
ScrollReveal().reveal(".section", { duration: 1000 });

//For upload types boxes in landing page
ScrollReveal().reveal(".upload-box", {
  delay: 1000,
  interval: 500,
  duration: 4000,
});

function handleRadioClick() {
  if (document.getElementById("group").checked) {
    box.style.display = "block";
  } else {
    box.style.display = "none";
  }
}

const radioButtons = document.querySelectorAll('input[name="example"]');
radioButtons.forEach((radio) => {
  radio.addEventListener("click", handleRadioClick);
});

//  show/hide the license select dropdown based on the checkbox value
const hasLicenseCheckbox = document.getElementById("has_license");
const licenseOptions = document.getElementById("license_options");

hasLicenseCheckbox.addEventListener("change", (event) => {
  if (event.target.checked) {
    licenseOptions.style.display = "block";
  } else {
    licenseOptions.style.display = "none";
  }
});

//For User Dashboard Page. Show Modal on create clcik
const createDiv = document.getElementById("create-div");
const modalDiv = document.getElementById("modal-div");
const modalDivButton = document.getElementById("modal-div-btn");

//Open
createDiv.addEventListener("click", () => {
  modalDiv.style.display = "block";
});

//Close
modalDivButton.addEventListener("click", () => {
  modalDiv.style.display = "none";
});

//End

//  Multiple select dropdowns
$(document).ready(function () {
  $(".category-multiple").select2({
    placeholder: "Select a Category",
  });

  $(".tags-multiple").select2({
    placeholder: "Select a Tag",
    tags: true,
  });
});

$(document).ready(function () {
  $(".members-multiple").select2({
    placeholder: "Select Group Members",
  });
});
//   $(document).ready(function () {
//   $(".roles-multiple").select2({
//       placeholder: "Select a Group",
//   });
// });

$(document).ready(function () {
  $(".grouping-multiple").select2({
    placeholder: "Select Group",
  });
});
