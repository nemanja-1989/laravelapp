document.addEventListener("DOMContentLoaded", function() {
    // console.log(1);
    const find = document.querySelector("#button").addEventListener("click", findRestaurant);

    function findRestaurant() {
        
        const input = document.querySelector("input#restaurant").value;
        // console.log(input);

        xhr = new XMLHttpRequest();

        xhr.open("GET", "http://127.0.0.1:8000/api/restaurants", true);

        xhr.onload = function() {
            
            if(this.status === 200) {
                
                // console.log(1);

                let restaurants = JSON.parse(this.responseText);
                // console.log(restaurants);
                // console.log(restaurants.data);
                restaurants.data.forEach(function(value, key) {
                    if(value.restaurant_name === input) {
                        // console.log(1);
                        let div = document.querySelector("#div");
                        div.innerHTML = `
                            <h2 style='margin-top: 20px;'>Restaurant name: ${value.restaurant_name}</h2>
                            <ul>
                            <li>Restaurant delivery number: ${value.delivery_number}</li>
                            <li>Delivery time needed: ${value.delivery_time_needed}</li>
                            <li>Minimum price order: ${value.minimum_price_order}</li>
                            <li>Delivery price: ${value.delivery_price}</li>
                            <li>Restaurant location: ${value.restaurant_location}</li>
                            <li><a href='${value.href_2.restaurant_details}'>Restaurant details</a></li>
                            <li><a href='${value.href_1.restaurant_menu}'>Restaurant menu</a></li>
                            <li>Restaurant information: ${value.restaurant_delivery_information}</li>
                        </ul>
                        `;
                    }
                });
            }
        }

        xhr.send();
    }
    
});