<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid" style="background-color: white">
    <h2 class="text-center" style="padding-top: 80px">CONTACT</h2>
    <div class="row">
        <div class="col-sm-5">
            <p><strong>Contact us and we'll get back to you within 24 hours.</strong></p>
            <p><span class="glyphicon glyphicon-map-marker"></span><strong>IIM Academics Pvt Ltd. , Gurgaon, Haryana 122001</strong></p>
            <p><span class="glyphicon glyphicon-phone"></span><strong> TOLL FREE: 1800-11-3340</strong></p>
            <p><span class="glyphicon glyphicon-envelope"></span><strong>admissionsupport @iimacademics.com</strong></p>	   
        </div>
        <div class="col-sm-7">
            <form role="form" action="<?= base_url(); ?>Pages/contactus" method="post">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="message" placeholder="Message or query" rows="5" required></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-danger pull-right" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter = new google.maps.LatLng(28.409152, 77.042778);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 12,
            scrollwheel: false,
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

