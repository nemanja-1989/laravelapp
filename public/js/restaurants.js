document.addEventListener("DOMContentLoaded", function() {
    const button = document.getElementById("button").addEventListener("click", loadRestaurants);

    function loadRestaurants(e) {
        
        const xhr = new XMLHttpRequest();

        xhr.open("GET", "http://127.0.0.1:8000/api/restaurants", true);

        xhr.onload = function() {

            if(this.status === 200) {
                
                let restaurants = JSON.parse(this.responseText);
                console.log(restaurants);

                let output = "";
                restaurants.data.forEach(function(value, key) {
                    // console.log(value.restaurant_name);
                    output += `
                        <h4>Restaurant name: ${value.restaurant_name}</h4>
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
                });
                const div = document.querySelector("#div").innerHTML = output;
                document.querySelector("#div").style.cssText = "margin-top: 50px;";
                
            }
        }

        xhr.send();

        e.preventDefault();
    }
});