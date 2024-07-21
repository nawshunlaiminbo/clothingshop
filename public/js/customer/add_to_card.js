document.addEventListener('DOMContentLoaded', (event) => {
    const add_to_icon = document.querySelector(".add_to_cart_icon");
    const shopping_cart_box = document.querySelector(".shopping_cart_box");
    const close_button = document.querySelector(".close_button");

    if (add_to_icon) {
        add_to_icon.addEventListener("click", () => {
            console.log('hello');
            shopping_cart_box.style.display = "block";
        });
    }

    if (close_button) {
        close_button.addEventListener("click", () => {
            shopping_cart_box.style.display = "none";
        });
    }
});
