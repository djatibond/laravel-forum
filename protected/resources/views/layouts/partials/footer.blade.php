<div class="footer_widget">
    <div class="container">
        <div class="col-md-4">
            <aside id="text-1" class="widget widget_text">
                <h3 class="widget-title">
                    <span>COME VISIT US</span></h3>
                <div class="textwidget">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                    <p>
                        <em style="color: #fff;">standard chunk.,<br>
                            Finibus Bonorum,<br>
                            Ipsum generators, treatise</em>
                    </p>
                </div>
            </aside>
        </div>
        <div class="col-md-4">
            <aside id="text-2" class="widget widget_text">
                <h3 class="widget-title">
                    <span>MORE ABOUT US</span></h3>
                <div class="textwidget">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem
                        Ipsum,.</p>
                </div>
            </aside>
        </div>
        <div class="col-md-4">
            <div id="map" class="embed-responsive" ></div>
        </div>
    </div>
</div>
<div class="footer_middle">
    <div class="container">
        <div class="col-sm-12">
            <div class="footer-icons">
                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<div class="footer_bottom">
    <div class="container">
        <div class="copy">
            <p>Copyright © 2018 Laravel Project. All Rights Reserved | Design & Created by <a href="{{ url('/') }}" target="_blank">Djati Forum</a> </p>
        </div>
    </div>
</div>

<!-- Map -->
<script>
    function initMap() {
        var disini = {lat: -7.761326, lng: 110.432575};
        var map = new google.maps.Map(document.getElementById('map'), { zoom: 13, center: disini });
        var marker = new google.maps.Marker({
            position: disini, map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRpZmxOSQPNWIi5QKNL02cEYY1YPvswC0&callback=initMap"> </script>
