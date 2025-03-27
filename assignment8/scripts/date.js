/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */


"use strict";

let date = new Date(Date.now()); // variable date obtains current date
document.getElementById("curDate").textContent = date.toLocaleDateString(); // insert current date in mm/dd/yyyy format to element has id curDate

