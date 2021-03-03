if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready) //checks to ensure that the page elements have loaded
}else{
    ready();
}

function ready(){
    const removeBtn = document.getElementsByClassName('btn-danger');
    console.log(removeBtn);
    
    console.log(cartCount);

    for (var i = 0; i < removeBtn.length; i++){ //loops through all remove buttons in cart
        var button = removeBtn[i];
        button.addEventListener('click', removeCartItem);
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input');
    for (var i = 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-btn');
    for (var i = 0; i < addToCartButtons.length; i++){
        var addButton = addToCartButtons[i];
        addButton.addEventListener('click', addToCartClicked);
    }
    
}




function removeCartItem(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    count -= 1;
    updateCartTotal();
    

}

function quantityChanged(event){
    var input = event.target;
    // checks to see if input is NotANumber or if user has input a value less than 0
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1;

    } 
    updateCartTotal();
}

function addToCartClicked(event){
    var button = event.target;
    var shopItem = button.parentElement.parentElement;

    var itemTitle = shopItem.getElementsByClassName('shop-item-title')[0].innerText;
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText;
    var imgSrc = shopItem.getElementsByClassName('shop-item-image')[0].src;

    addItemToCart(itemTitle, price, imgSrc);
    updateCartTotal();
}



function addItemToCart(title, price, imgSrc){

  
    var cartRow = document.createElement('div'); //creates new div element
    cartRow.classList.add('cart-row');
    var cartItems = document.getElementsByClassName('cart-items')[0];
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title');
    for (var i = 0; i < cartItemNames.length; i++){
        if (cartItemNames[i].innerText === title){ //checks if cart item of same title has already been added
            alert('This item has already been added to the shopping cart')
            return; //immedietely exits function

        }
    }
    var cartRowContents = `
        <div class="cart-item">
            <img src="${imgSrc}"
            width="100" height=100>
            <h2 class="cart-item-title">${title}</h2> 
            <h3 class="item-price">${price}</h3>
        </div>
                    
        <div class ="cart-quantity">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="remove-btn btn-danger" type="button">Remove</button>
        </div>`;
    cartRow.innerHTML = cartRowContents;
    cartItems.append(cartRow); //appends empty div to end of div
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click',removeCartItem); //ensures remove functionality for newly added cart items
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change',quantityChanged);
    cartCount.classList.remove('hide');
    count +=1;
   
   

}


var cartCount = document.getElementById('cartCount');
var count = 0;
function updateCartTotal(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]; //gets first item in cart
    var cartRows = cartItemContainer.getElementsByClassName('cart-row');
    var total = 0;
    
    for(var i = 0; i < cartRows.length; i++){
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName('item-price')[0];
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0];
        console.log(priceElement);
        console.log(quantityElement);

        var price = parseFloat(priceElement.innerText.replace('£','')); //parsefloat turns string into float and .replace removes £ from text
        console.log(price);

        var quantity = quantityElement.value;
        total = total + (price * quantity);
        
       
       
    }
    document.getElementsByClassName('cart-total-price')[0].innerText = '£' + total;
    cartCount.innerHTML = count;
}



