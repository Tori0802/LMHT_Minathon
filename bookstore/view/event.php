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
            const myLatLng = { lat: 10.95301, lng: 106.866777 };
        
            // The map, centered at selected location
            const map = new google.maps.Map(document.getElementById("mapCanvas"), {
                zoom: 12,
                center: myLatLng
            });
            var contentString = 
            '<div id="content">'+
                '<h1 style="font-size:20px;">Da Nang Blood event</h1>'+ 
                '<p>Time: 17:00-20:00, 19/2/2023</p>'+
                '<p>Place: Dong Nai General Hospital</p>'+
            '</div>';
            var contentString1 = 
            '<div id="content">'+
                '<h1 style="font-size:20px;">Bach Khoa Blood event</h1>'+ 
                '<p>Time: 7:00-9:00, 21/2/2023</p>'+
                '<p>Place: Ho Chi Minh City University of Technology - Vietnam National University Ho Chi Minh City (Campus 2)</p>'+
            '</div>';
            var contentString2 = 
            '<div id="content">'+
                '<h1 style="font-size:20px;">HCMUTE event</h1>'+ 
                '<p>Time: 7:00-9:00, 24/4/2023</p>'+
                '<p>Place: HCMC University of Technology and Education</p>'+
            '</div>';

    // Add info window
    const infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    const infowindow1 = new google.maps.InfoWindow({
        content: contentString1
    });
    const infowindow2 = new google.maps.InfoWindow({
        content: contentString2
    });
	
    // The marker, positioned at selected location
    const marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Googleplex (CodexWorld)'
    });

    const marker1 = new google.maps.Marker({
        position: { lat: 10.88060, lng: 106.80537 },
        map: map,
        title: 'Googleplex (CodexWorld)'
    });
    const marker2 = new google.maps.Marker({
        position: { lat: 10.85213, lng: 106.77197 },
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
    google.maps.event.addListener(marker2, 'click', function() {
        infowindow2.open(map, marker2);
    });
    // Open info window on load
    infowindow.open(map, marker);
    infowindow.open(map, marker1);
    infowindow.open(map, marker2);
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
            <a href="/bookstore/event/default" class="list_btn nav-link link-dark fw-bolder sidebar-hover" aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="/bookstore/event/default"></use>
                </svg>
                List Event
            </a>
        </li>
        <li>
            <a href="/bookstore/event/map" class="map_btn nav-link link-dark fw-bolder sidebar-hover">
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
                    Da Nang Blood event
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p><strong>Time:</strong> 17:00-20:00, 19/2/2023</p>
                    <p><strong>Place:</strong> Dong Nai General Hospital</p>
                    <p><strong>Describe: </strong>With the message "Blood of gratitude", nearly 150 union members of the Institute enthusiastically participated in blood donation on the festival in the hope that each drop of blood donated will contribute to bringing life to the community and the whole society. . Even more meaningful, today's blood donation program was held on the day of the People's Volunteer Blood Donor Day on April 7 and is expected to collect 120 blood units.</p>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Bach Khoa Blood event
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <p><strong>Time:</strong> 7:00-9:00, 21/2/2023</p>
                    <p><strong>Place:</strong> Ho Chi Minh City University of Technology - Vietnam National University Ho Chi Minh City (Campus 2)</p>
                    <p><strong>Describe: </strong>With the message "Blood of gratitude", nearly 150 union members of the Institute enthusiastically participated in blood donation on the festival in the hope that each drop of blood donated will contribute to bringing life to the community and the whole society. . Even more meaningful, today's blood donation program was held on the day of the People's Volunteer Blood Donor Day on April 7 and is expected to collect 120 blood units.</p>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    HCMUTE Event
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p><strong>Time:</strong> 7:00-9:00, 24/4/2023</p>
                    <p><strong>Place:</strong> HCMC University of Technology and Education</p>
                    <p><strong>Describe: </strong>With the message "Blood of gratitude", nearly 150 union members of the Institute enthusiastically participated in blood donation on the festival in the hope that each drop of blood donated will contribute to bringing life to the community and the whole society. . Even more meaningful, today's blood donation program was held on the day of the People's Volunteer Blood Donor Day on April 7 and is expected to collect 120 blood units.</p>
                    <button type="button" class="btn btn-primary">Register</button>
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