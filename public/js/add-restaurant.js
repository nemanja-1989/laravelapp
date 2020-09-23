document.addEventListener("DOMContentLoaded", function() {

    function http() {
        this.http = new XMLHttpRequest();
    }

    //POST METHOD
    http.prototype.post = function(url, data) {
        
        this.http.open("POST", url, true);

        this.http.setRequestHeader("Content-type", "application/json");

        let self = this;
        this.http.onload = function() {
            console.log(self.http.responseText);
        }

        this.http.send(JSON.stringify(data));

    }
    
    const httpPOST = new http();

    document.querySelector("#button-add").addEventListener("click", addNewRestaurant);

    function addNewRestaurant(e) {
        // console.log(1);

       let name = document.querySelector("#name").value;
       let delivery_number = document.querySelector("#delivery_number").value;
       let delivery_time = document.querySelector("#delivery_time").value;
       let min_price_order = document.querySelector("#min_price_order").value;
       let about_delivery = document.querySelector("#about_delivery").value;
       let delivery_price = document.querySelector("#delivery_price").value;
       let restaurant_location = document.querySelector("#restaurant_location").value;

    //    console.log(name);
       
       const data = {
            name: `${name}`,
            delivery_number: `${delivery_number}`,
            delivery_time: `${delivery_time}`,
            min_price_order: `${min_price_order}`,
            about_delivery: `${about_delivery}`,
            delivery_price: `${delivery_price}`,
            restaurant_location: `${restaurant_location}`
        };
    
        httpPOST.post("http://127.0.0.1:8000/api/restaurants", data);

        //FORM VALIDATION
        let regName = /^[a-zA-Z]{1,20}$/;
        let regDeliveryNumber = /^[0-9\-\_\/]{3,20}$/;
        let regDeliveryTime = /^[0-9\:]{1,10}$/;
        let regMinPriceOrder = /^[0-9]{1,10}$/;
        

        if(name === "") {
            alert("Please enter valid name!");
        }else if(!name.match(regName)) {
            alert("Please enter only aplpha characters for restaurant name!");
        }else if(delivery_number == "") {
            alert("Please enter Delivery number!");
        }else if(!delivery_number.match(regDeliveryNumber)) {
            alert("Please enter digits for Delivery number!");
        }else if(delivery_time == "") {
            alert("Please enter Delivery time!");
        }else if(!delivery_time.match(regDeliveryTime)) {
            alert("Please enter valid time with two dots!");
        }else if(min_price_order == "") {
            alert("Please enter Minimum price order!");
        }else if(!min_price_order.match(regMinPriceOrder)) {
            alert("Please enter only digits for Minimum price order field!");
        }else if(about_delivery == "") {
            alert("Please enter About delivery into field!");
        }else if(delivery_price == "") {
            alert("Please enter Delivery price!");
        }else if(restaurant_location == "") {
            alert("Plase enter Restaurant location");
        }else {
            document.querySelector("#alert-alert").setAttribute("class", "alert alert-success");
            document.querySelector("#alert-alert").innerHTML = `<h3>Restaurant successfully added!</h3>`;
            
        }
        
        e.preventDefault();
    }

});
