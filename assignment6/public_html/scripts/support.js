/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

"use strict";
//const $ = selector => document.querySelector(selector);


$(document).ready(() => { // addEventListener
   $(".accordion").accordion({ // adding widget accordion
      event:"click", 
      icons: false, 
      active: false,
      collapsible: true
   });
});


/*
let removeDuplicates = curElement => { 
    let sectionChildren = $('section'); // variable sectionChildren obtains elements under section tag
   
    for(let child of sectionChildren.children) { 
       if(child !== curElement) { // if selected element is not equal to given
           if(child.tagName === 'H2') { // if tag name is h2,
              child.classList.remove("minus"); // remove class minus
           }
       } 
       if(child !== curElement.nextElementSibling) { // if selected element is not equal to given h2's child,
           if(child.tagName === 'DIV') { 
                   child.classList.remove("open"); // remove class open
            }
       }
    }
    
};

let toggle = evt => { // toggle event 
    
    let h2Element = evt.currentTarget; // variable h2Element obtains current h2 element
    let divElement = h2Element.nextElementSibling; // variable divElement obtains current h2 element's sibling
    
    
    h2Element.classList.toggle("minus"); // add class minus, if there already is, remove class minus
    divElement.classList.toggle("open"); // add class open, if there already is, remove class open
    
    removeDuplicates(h2Element); // checks if other tab is open. If found, close it.

    evt.preventDefault();
    
};
document.addEventListener("DOMContentLoaded", () => { // add event to document object model contents 
    let sectionChildren = $('section'); // variable sectionChildren obtains elements under section tag

    
    for(let child of sectionChildren.children) {
        child.addEventListener("click", toggle); // add click event to section element's children
    }
    
});
 */
