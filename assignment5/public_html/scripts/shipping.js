/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

"use strict";

const $ = selector => document.querySelector(selector); // predefine, now for codes below, $ now available instead of document.querySelector();

let calculate = () => {
     let val = calculateShipping(parseFloat($("#cost").value)); // variable val stores calculated cost
     if(val < 0) { // if calculateShipping() returns negative number, 
         alert("Invalid value"); // show message that user inserted invalid value
     }
     else {
         $("#result").value = val.toFixed(2); // update the textbox result
         
    }
};

let calculateShipping = (value) => {
    if (value < 0 || isNaN(value)) { // if given value is invalid,
        return -1; // return -1
    }
    
    if(value > 0 && value <= 50) { // if value is greater than 0, less than 50,
        return value + (value * 0.2);
    }
    else if(value > 50 && value <= 200) { // if value is greater than 50, less than 200,
        return value + (value * 0.18);
    }
    else if(value > 200 && value <= 500) { // if value is greater than 200, less than 500,
        return value + (value * 0.15);
    }
    else if(value > 500 && value <= 1000) { // if value is greater than 500, less than 1000,
        return value + (value * 0.12);
    }
    else { // if value is greater than 1000, 
        return value + (value * 0.08);
    }
};


document.addEventListener("DOMContentLoaded", () => { // adding function calculate to the button
   $("#calculate").addEventListener("click", calculate);
   $("#result").focus();
});
