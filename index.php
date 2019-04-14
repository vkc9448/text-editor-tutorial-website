
<!-- Includes the global nav -->
<?php
$title = "Home";
require_once "assets/includes/setup.php";
require_once PATH_INC . "header.php";
require_once PATH_INC . "nav.inc.php";
?>

        <div class="headers-wrapper">
            <div class="landing-title-div">
                <h1 id="landing-title">Welcome to Editor's Choice</h1>
            </div>
            <div class="landing-subtitle-div">
                <h4 id="landing-subtitle">'Developing for Developers'</h4>
            </div>
        </div>

        <div class="landing-content-div">
            <div class="landing-main-text">
                <p>Welcome to Editor's Choice! A website you can use to learn all about a variety of text editors all in one place! By default you are in the  <span style="color: #6EB987;"><strong>Atom</strong></span> text editor section.</p>
            </div>
            <div class="landing-button-wrapper">
                <div class="btn-div">
                    <button onclick="location.href='General/Atom/index.php'" type="button" class="btn get-started-btn">Get Started!</button>
                </div>
                <div class="btn-div">
					<button onclick="location.href='About/about.php'" type="button" class="btn get-started-btn">About Us!</button>
                </div>
                <div class="btn-div">
                    <button onclick="location.href='Sources/index.php'" type="button" class="btn get-started-btn">Sources!</button>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>

    </html>
