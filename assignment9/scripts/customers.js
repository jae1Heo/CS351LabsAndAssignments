/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

"use strict";

//const $ = selector => document.querySelector(selector);


let validateCustomerInfo = (email, password, event) => {
    let email_reg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    let password_reg = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    
    
    if(!email) {
        alert("Please provide email");
        event.preventDefault();  // Prevent form submission
        return false;
    }
    else if(!email_reg.test(email)) {
        alert("Customer not found, please validate credentials");
        event.preventDefault();  // Prevent form submission
        return false;
    }
    
    if(!password) {
        // 
        /*
        alert("Please provide password");
        event.preventDefault();  // Prevent form submission
        return false;
         */
        return true;
    }
    else {
        if(!password_reg.test(password)) {
            alert("Customer not found, please validate credentials");
            event.preventDefault();  // Prevent form submission
            return false;
        }
    }
    
    if(String(password) !== String(document.querySelector(".cf").value)) {
            alert("Password is not matching");
            event.preventDefault();
            return false;
        } 
    
    return true;
};

let validateBillingAddress = (zip_code, phone_no, event) => {
    let zip_reg = /^\d{5}(-\d{4})?(?!-)$/;
    let phone_reg = /^(1\s?)?(\d{3}|\(\d{3}\))[\s\-]?\d{3}[\s\-]?\d{4}$/gm;
    
    if(!zip_code) {
        alert("Please provide zip code");
        event.preventDefault();  // Prevent form submission
        return false;
    }
    else if(!zip_reg.test(zip_code)) {
        alert("Customer not found, please validate credentials");
        event.preventDefault();  // Prevent form submission
        return false;
    }
    
    if(!phone_no) {
        alert("Please provide phone number");
        event.preventDefault();  // Prevent form submission
        return false;
    }
    else if(!phone_reg.test(phone_no)) {
        alert("Customer not found, please validate credentials");
        event.preventDefault();  // Prevent form submission
        return false;
    }
    
    return true;
};

let validateShippingAddress = (zip_code, phone_no, event) => {
    let zip_reg = /^\d{5}(-\d{4})?(?!-)$/;
    let phone_reg = /^(1\s?)?(\d{3}|\(\d{3}\))[\s\-]?\d{3}[\s\-]?\d{4}$/gm;
    
    if(!zip_code) {
        alert("Please provide zip code");
        event.preventDefault();  // Prevent form submission
        return false;
    }
    else if(!zip_reg.test(zip_code)) {
        alert("Customer not found, please valid credentials");
        event.preventDefault();  // Prevent form submission
        return false;
    }
    
    if(!phone_no) {
        alert("Please provide phone number");
        event.preventDefault();  // Prevent form submission
        return false;
    }
    else if(!phone_reg.test(phone_no)) {
        alert("Customer not found, please valid credentials");
        event.preventDefault();  // Prevent form submission
        return false;
    }

    return true;
};




document.addEventListener("DOMContentLoaded", () => {
    let cInfoSubmit = document.querySelector(".c_info_submit");
    let cAddrSubmit = document.querySelector(".c_b_addr_submit");
    let cShippingSubmit = document.querySelector(".c_s_addr_submit");
    
    
    cInfoSubmit.addEventListener("click", (event) => {
            
            if(validateCustomerInfo(document.querySelector(".email").value, document.querySelector(".pw").value,event)) {
               document.querySelector(".success").innerHTML = "Customer information updated";
              
            }
    });
    
    cAddrSubmit.addEventListener("click", (event) => {
           if(validateBillingAddress(document.querySelector(".zip_b").value, document.querySelector(".phone_b").value),event) {
                document.querySelector(".success").innerHTML = "Billing address updated";
                       
            } 
    });
    
    cShippingSubmit.addEventListener("click", (event) => {
           if(validateShippingAddress(document.querySelector(".zip_s").value, document.querySelector(".phone_s").value),event) {
              document.querySelector(".success").innerHTML = "Shipping address updated";
              
           }
    });
    
    let url = new URLSearchParams(window.location.search); 
    let action = url.get('action');
    
    if(action === 'Update Customer Information') {
        document.querySelector(".success").innerHTML = "Customer information updated";
    }
    else if (action === 'Update Billing Address') {
       document.querySelector(".success").innerHTML = "Billing address updated";
    }
    else if (action === 'Update Shipping Address') {
       document.querySelector(".success").innerHTML = "Shipping address updated";
    }

    
});
