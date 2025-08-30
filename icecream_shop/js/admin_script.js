const userBtn = document.querySelector("#user-btn");
userBtn.addEventListener('click' , function(){
    const userBox = document.querySelector('.profile-detail');
    userBox.classList.toggle('active');
})

const toggle = document.querySelector('.toggle-btn');
toggle.addEventListener('click' , function(){
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
})



// document.addEventListener("DOMContentLoaded", function() {
//     const userBtn = document.querySelector("#user-btn");
//     if (userBtn) {
//         userBtn.addEventListener("click", function() {
//             document.querySelector(".profile-detail").classList.toggle("active");
//         });
//     }

//     const toggle = document.querySelector(".toggle-btn");
//     if (toggle) {
//         toggle.addEventListener("click", function() {
//             document.querySelector(".sidebar").classList.toggle("active");
//         });
//     }
// });
