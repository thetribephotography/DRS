import { set } from "lodash";

function text(x) {
    if (x == 0 )document.getElementbyId("publish_show"). style.display = "block";
    else document.getElementbyId("publish_show"). style.display = "hidden";
    return;
  }

const box = document.getElementById('box');

function handleRadioClick() {
  if (document.getElementById('group').checked) {
    box.style.display = 'block';
  } else {
    box.style.display = 'none';
  }
}

const radioButtons = document.querySelectorAll('input[name="example"]');
radioButtons.forEach(radio => {
  radio.addEventListener('click', handleRadioClick);
});

// $(document).ready(function() {
//   $('.js-example-basic-multiple').select2();
// });

