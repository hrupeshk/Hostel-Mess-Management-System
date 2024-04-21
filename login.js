const wrapper=document.querySelector('.wrapper');
const registerLink=document.querySelector('.register-link');
const loginLink=document.querySelector('.login-link');

registerLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});            
loginLink.addEventListener('click',()=>{  
    wrapper.classList.remove('active');
});  







// Get the button element by its ID
var button = document.getElementById("myButton");

// Add event listener to the button
button.addEventListener("click", function() {
    // Displaying an alert message when the button is clicked
    alert("Congrates Your Registration is successfull !!"); 
});

// document.getElementById("loginButton").addEventListener("click", function() {
//     window.location.href = "localhost/employee1/form1.php "; 
// });



