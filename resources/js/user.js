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
