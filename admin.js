var home = document.getElementById("home");
var category =  document.getElementById("category");
var product = document.getElementById("product");
var home_a = document.getElementById("home-link");
var category_a =  document.getElementById("category-link");
var product_a = document.getElementById("product-link");

home_a.addEventListener('click',()=>{
    home.classList.toggle("nav-list-active");
    category.classList.remove("nav-list-active");
    product.classList.remove("nav-list-active");
})

category_a.addEventListener('click',()=>{
    home.classList.remove("nav-list-active");
    category.classList.toggle("nav-list-active");
    product.classList.remove("nav-list-active");
})

product_a.addEventListener('click',()=>{
    home.classList.remove("nav-list-active");
    category.classList.remove("nav-list-active");
    product.classList.toggle("nav-list-active");
})