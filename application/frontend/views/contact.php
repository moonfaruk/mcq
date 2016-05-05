
    
    
    
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><span class="page-active">Contact</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <div class="contact-map">
                    <div class="google-map-canvas" id="map-canvas" style="height: 542px;">
                    </div>
                </div>
            </div> <!-- /.col-md-5 -->
            
            <div class="col-md-7">
                <div class="contact-page-content">
                    <div class="contact-heading">
                        <h3>Our Contact Details</h3>
                        <p>Someone finds it difficult to understand your creative idea? There is a better visualisation. Share your views with me...</p>
                    </div>
                    <div class="contact-form clearfix">
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="name-id">First Name:</label>
                                <span class="small-text">Put your name here</span>
                            </span>
                            <input type="text" id="name-id" name="name-id">
                        </p>
                        <p class="full-row"> 
                            <span class="contact-label">
                                <label for="surname-id">Last Name:</label>
                                <span class="small-text">Put your surname here</span>
                            </span>
                            <input type="text" id="surname-id" name="surname-id">
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="email-id">E-mail:</label>
                                <span class="small-text">Type email address</span>
                            </span>
                            <input type="text" id="email-id" name="email-id">
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="message">Message:</label>
                                <span class="small-text">Type email address</span>
                            </span>
                            <textarea name="message" id="message" rows="6"></textarea>
                        </p>
                        <p class="full-row">
                            <input class="mainBtn" type="submit" name="" value="Send Message">
                        </p>
                    </div>
                </div>
            </div> <!-- /.col-md-7 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
<script>
        function initialize() {
          var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(42.888543, 20.879661)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>