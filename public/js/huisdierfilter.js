let list_of_huisdieren = document.getElementsByClassName("Huisdier");
let wrapper_hond = document.getElementById("Hondwrapper");
let wrapper_kat= document.getElementById("Katwrapper");
let wrapper_konijn= document.getElementById("Konijnwrapper");
let wrapper_vogel= document.getElementById("Vogelwrapper");
let wrapper_fret = document.getElementById("Fretwrapper");

let checkbox_hond = document.getElementById("Hond");
let checkbox_kat= document.getElementById("Kat");
let checkbox_konijn= document.getElementById("Konijn");
let checkbox_vogel= document.getElementById("Vogel");
let checkbox_fret = document.getElementById("Fret");

checkbox_hond.checked = true;
checkbox_kat.checked = true;
checkbox_konijn.checked = true;
checkbox_vogel.checked = true;
checkbox_fret.checked = true;

function filter(checkbox, soort, wrapper) {
    checkbox.addEventListener('change', function() {
        if(checkbox.checked) {
            wrapper.classList.add('filterSection__wrapperActive');
            for(let i = 0; i < list_of_huisdieren.length; i++) {
                if (list_of_huisdieren[i].dataset.soort == soort) {
                    list_of_huisdieren[i].style.display = '';
                }
            }
        }
        else {
            wrapper.classList.remove('filterSection__wrapperActive')
            for(let i = 0; i < list_of_huisdieren.length; i++) {
                if (list_of_huisdieren[i].dataset.soort == soort) {
                    list_of_huisdieren[i].style.display = 'none';
                }
            }
        }
    
    });
}

filter(checkbox_hond, 'Hond', wrapper_hond);
filter(checkbox_kat, 'Kat', wrapper_kat);
filter(checkbox_konijn, 'Konijn', wrapper_konijn);
filter(checkbox_vogel, 'Vogel', wrapper_vogel);
filter(checkbox_fret, 'Fret', wrapper_fret);