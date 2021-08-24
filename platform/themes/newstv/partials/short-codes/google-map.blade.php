{{--<div class="google-map" >--}}
    {{--<div  >--}}
        {{--<iframe width="100%" src="https://maps.google.com/maps?q={{ theme_option('address') }}%20&t=&z=13&ie=UTF8&iwloc=&output=embed"--}}
                {{--frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>--}}
    {{--</div>--}}
{{--</div>--}}
<?php $map_id='map_'.rand(1,9);?>
<div class="google-map" style="height: 350px;" id="{{$map_id}}"></div>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQOA4-dMup6O_XDMJfFBd1Je93XoSxRRI&callback=init{{$map_id}}&libraries=&v=weekly"
        defer
></script>
<script>
    // Initialize and add the map
    function init{{$map_id}}() {
        // The location of Uluru
        const uluru = { lat: <?=  theme_option('map-lat') ?>, lng: <?=  theme_option('map-long') ?> };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("{{$map_id}}"), {
            zoom: 12,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon:'http://test.beyondcreative.agency//storage/ico-07.png',
        });
    }
    {{--function initMap() {--}}
        {{--// The location of Uluru--}}
        {{--const uluru = { lat:"<?=  theme_option('map-lat') ?>", lng:" <?=  theme_option('map-long') ?>" };--}}
        {{--// The map, centered at Uluru--}}
        {{--const map = new google.maps.Map(document.getElementById("map"), {--}}
            {{--zoom: 12,--}}
            {{--center: uluru,--}}
        {{--});--}}
        {{--// The marker, positioned at Uluru--}}
        {{--const marker = new google.maps.Marker({--}}
            {{--position: uluru,--}}
            {{--map: map,--}}
        {{--});--}}
    {{--}--}}
</script>