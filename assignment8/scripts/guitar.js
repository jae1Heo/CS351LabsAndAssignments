/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */


"use strict";

$(document).ready(() => { 
    //let index = 1;
    // initializing slider
   $(".bxslider").bxSlider({
       randomStart: true, // starts with random image
       captions: true, // make caption to visible 
       pager: true, // removing pager icon
       slideWidth: 200, // width of slider image
       pause: 3000, // shows 3 seconds and move to the next image
       auto: true, // moves slide automatically
       controls: false, // remove control buttons on both sides
       pagerType:'short' // pager type to number
       /*
        onSlideAfter: () => { // callback api, called after swipped. 
           if(index >= total) { // if default number is greater than total,
               index = 1; // reset the index
           }
           else {
               index++; // otherwise, increase index
           }
           $(".number").text(index + "/" + total); // update text
       }
         
       */
   });
   
   //let total = 6; // number of total images in the slide
   //$(".number").text(index + "/" + total); // default text
   
});
