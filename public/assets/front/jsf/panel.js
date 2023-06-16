
// var addItemId = 0; 
// function addtocart(item){
//     var selectedItem=document.createElement('div');
//     selectedItem.classList.add('cartImg');
//     selectedItem.setAttribute('id',addItemId);
//     var img= document.createElement('img');
//     img.setAttribute('src',item.children[0].currentSrc);
//     var cartItems= document.getElementById('title');
//     selectedItem.append(img);
//     cartItems.append(selectedItem);

// }
// JavaScript code
// ...

// Function to handle the "Add to Cart" button click
function addToCart() {
    // Get the quantity input value
    const quantityInput = document.querySelector(".pro-qty input");
    const quantity = parseInt(quantityInput.value);

    // Create a new item element
    const itemElement = document.createElement("div");
    itemElement.classList.add("item");

    // Create a span element for the item name
    const nameElement = document.createElement("span");
    nameElement.textContent = "<?=$details[0]->name?>";
    itemElement.appendChild(nameElement);

    // Create a span element for the item quantity
    const quantityElement = document.createElement("span");
    quantityElement.textContent = "Quantity: " + quantity;
    itemElement.appendChild(quantityElement);

    // Append the item element to the panel
    const panel = document.getElementById("panel");
    panel.appendChild(itemElement);

    // Optional: You can update the UI or perform other actions after adding the item
}

// Attach the click event handler to the "Add to Cart" button
const addToCartButton = document.querySelector(".variant_quantity_btn button");
addToCartButton.addEventListener("click", addToCart);
