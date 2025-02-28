let searchBtn = document.querySelector("#search-button")
let searchForm = document.querySelector(".search-form") 
let loginForm = document.querySelector(".login-form")

function showbar(){
    searchBtn.classList.toggle("fa-times")
    searchForm.classList.toggle("active")
}
function showform(){
    loginForm.classList.add("active")
}
function hideform(){
    loginForm.classList.remove("active")
}
