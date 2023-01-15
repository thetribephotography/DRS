import { set } from "lodash";

// Shows and hides group selection under access rights selection in Upload Form
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




// Tom-Select for multiple seelection in dropdowns
    new TomSelect('#select-role', {
      maxItems: 3,
    });


