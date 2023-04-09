<?php
  require_once("./view/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #mapCanvas{
            width: 500px;
            height: 500px;
            margin-left: 20%;
            padding-left: 20px;
            margin-top: 50px;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyADwfBjGmnE0ffgLbRSvWT0VwK-2f6CBE4" defer></script>
    <script>
        // Initialize and add the map
        function initMap() {
            // Latitude and longitude of the selected location
            const myLatLng = { lat: 10.88314, lng: 106.81090 };
        
            // The map, centered at selected location
            const map = new google.maps.Map(document.getElementById("mapCanvas"), {
                zoom: 12,
                center: myLatLng
            });
            var contentString = 
            '<div id="content">'+
                '<h1 style="font-size:20px;">Blood event</h1>'+ 
                '<p>Thời gian: 14:00-15:00 19/4/2023</p>'+
                '<p>Địa điểm: Ho Chi Minh City</p>'+
            '</div>';

    // Add info window
    const infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    const infowindow1 = new google.maps.InfoWindow({
        content: contentString
    });
	
    // The marker, positioned at selected location
    const marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Googleplex (CodexWorld)'
    });

    const marker1 = new google.maps.Marker({
        position: { lat: 10.88819725017638, lng: 106.81158642985352 },
        map: map,
        title: 'Googleplex (CodexWorld)'
    });

    // Marker click event: open info window
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });

    google.maps.event.addListener(marker1, 'click', function() {
        infowindow1.open(map, marker1);
    });
    // Open info window on load
    infowindow.open(map, marker);
    infowindow.open(map, marker1);
}

window.initMap = initMap;
</script>
    <title>Document</title>
</head>
<body>
<div class="row mb-5" style="height: 600px;">
    <div class="col-sm-2">
    <div class="d-flex flex-column flex-shrink-0 p-1 bg-white border-2 border-danger rounded" style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/bookstore/event/default" class="nav-link link-dark fw-bolder sidebar-hover" aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="/bookstore/event/default"></use>
                </svg>
                List Event
            </a>
        </li>
        <li>
            <a href="/bookstore/event/map" class="nav-link link-dark fw-bolder sidebar-hover">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="/bookstore/event/map"></use>
                </svg>
                Map
            </a>
        </li>
    </ul>
</div>
    </div>

    <?php
        if ($data['type'] == 'map'){?>
            <div class="col-sm-10">
                    <div id="mapCanvas"></div>
            </div>

      <?php  } else {?>
        <div class="col-sm-10">
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Event 1
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p><strong>Time:</strong> 17:00-20:00, 19/2/2023</p>
                    <p><strong>Place:</strong> 23/ 66 Ho Tung Mau street</p>
                    <p><strong>Describe:</strong><strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Event 2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Event 3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            </div>
        </div>
     <?php }
    ?>
</div>
</body>
</html>

<?php
  require_once("./view/footer.php");
?>