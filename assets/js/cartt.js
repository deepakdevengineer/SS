// Function to add item to the cart
function addItemToCart() {
    // Logic to add the item to the cart
    // For demonstration purposes, adding a predefined product
    var productName = 'Reddish';
    var productPrice = 89.99;
  
    // Create a new product element
    var newProduct = 
      <div class="product">
        <div class="product-image">
          <img src="assets/img/products/features_product01.png" />
        </div>
        <div class="product-details">
          <div class="product-title">${productName}</div>
          <p class="product-description">Red Microgreen</p>
        </div>
        <div class="product-price">${productPrice}</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1"/>
        </div>
        <div class="product-removal">
          <button class="remove-product">Remove</button>
        </div>
        <div class="product-line-price">${productPrice}</div>
      </div>
    ;
  
    // Append the new product to the shopping cart
    $('.shopping-cart').append(newProduct);
  
    // Recalculate cart totals
    recalculateCart();
  }
  
  // Event listener for the "Shop Now" button click
  $(document).ready(function() {
    $('#addToCartButton').on('click', function(e) {
      e.preventDefault(); // Prevent the default action of the link
      addItemToCart(); // Call the function to add item to cart
    });
  });