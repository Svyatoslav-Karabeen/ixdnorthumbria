<?php
/**
 * HOME PAGE >> CONTENT >> NEWCASTLE >> Popup
 * This is the template that displays event map with additional information
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 **/

global $environment;

/**==========================================================================**/
?>

<div class="popup-container" id="popup-location">
    <div class="popup-body">
        <div class="popup-map">
            <img src="<?php echo url ?>assets/img/map-newcastle.jpg" alt="IxD Reveal Show location">
            <!-- <div id="google-map"></div> -->
        </div>
        <div class="popup-info-wrapper">
            <div class="info-item date">
                14th – 28th June 2018
                <span class="caption time">10am – 6pm</span>
            </div>
            <div class="info-item location">
                Squires Annexe
                <span class="caption address">Northumbria University, NE1 8SU</span>
            </div>
            <div class="info-item admission">
                Free
                <span class="caption price">admission</span>
            </div>
            <div class="info-item download-ics">
                <a class="download" href="<?php echo url ?>assets/event-info-newcastle.ics" download="IxD Reveal Show 2018">Add to calendar</a>
            </div>
        </div>
    </div>
    <button class="popup-outside-button" id="popup-close" onclick="hideLocation()">close</button>
</div>

<script>
    function initMap() {
        var uluru = {lat: 54.9732001, lng: -1.5997123};
        var map = new google.maps.Map(document.getElementById('google-map'), {zoom: 16, center: uluru});
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>``
