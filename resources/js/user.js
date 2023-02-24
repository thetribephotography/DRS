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



    //  Multiple select dropdowns 
       $(document).ready(function () {
           $(".category-multiple").select2({
               placeholder: "Select a Category",
           });

           $(".tags-multiple").select2({
               placeholder: "Select a Tag",
               tags: true,
           });

          $(".roles-multiple").select2({
              placeholder: "Select a Group",
              
           });

           $(document).ready(function () {
               $(".members-multiple").select2({
                   placeholder: "Select Group Members",
               });
           });
           
       });