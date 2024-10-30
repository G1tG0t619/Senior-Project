// Tabbed Menu
function openTab(evt, tabName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("menu");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-black-active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " w3-black-active";
}

// Sub-tabbed Menu
function openSubTab(evt, tabName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("menu");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-black-active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " w3-black-active";
}

// Initialize by opening the WELCOME tab
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".tablink").click();
});

// Tracking Order System
function trackOrder() {
    var orderNumber = document.getElementById("orderNumber").value;
    var orderStatus = document.getElementById("orderStatus");
    var orderStatusText = document.getElementById("orderStatusText");

    var orders = {
        "12345": "Your order is being processed.",
        "67890": "Your order has been shipped.",
        "11223": "Your order has been delivered.",
    };

    if (orders[orderNumber]) {
        orderStatusText.innerHTML = orders[orderNumber];
    } else {
        orderStatusText.innerHTML = "Order not found. Please check the order number and try again.";
    }

    orderStatus.style.display = "block";
    return false;
}