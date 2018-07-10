<?php
/**
 * HOME PAGE >> CONTENT >> NEWCASTLE >> Popup
 *
 * This is the template to display event map and additional information for the
 * either Reveal Show or D&AD event.
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

global $environment;
global $mapsKey;

/**==========================================================================**/
?>


<div id="popup-location">
    <div class="popup-body">
        <div class="popup-map" id="google-map"></div>
        <div class="popup-info-wrapper">
            <div class="info-item">
                14th – 28th June 2018
                <span class="caption">10am – 6pm</span>
            </div>
            <div class="info-item">
                Squires Annexe
                <span class="caption">Northumbria University, NE1 8SU</span>
            </div>
            <div class="info-item">
                Free
                <span class="caption">admission</span>
            </div>
            <div class="info-item">
                <a class="button button-m" href="<?php echo url ?>assets/event-info-newcastle.ics" download="IxD Reveal Show 2018">Add to calendar</a>
            </div>
        </div>
    </div>
    <button class="button-lg button-none" id="popup-close" onclick="showPopup()">close</button>
</div>

<script>
    function initMap() {
        var uluru = {lat: 54.979338, lng: -1.607964};
        var map = new google.maps.Map(document.getElementById('google-map'), {zoom: 16, center: uluru});
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo $mapsKey ?>&callback=initMap"></script>
