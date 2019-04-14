<?php
  $title = "About";
  require_once "../assets/includes/setup.php";
    require_once PATH_INC . "header.php";
  require_once PATH_INC . "nav.inc.php";

?>
        <div class="about-main-content-wrapper">
            <div class = "about-main-content">
                <div id="about-page-header">
                    <h1>Developing for Developers</h1>
                </div>
                <div class="about-section-wrapper">
                    <div>
                        <h2 class="about-section-header">Who are we?</h2>
                        <p class="about-content">
                            Skinny Britches is a small but effective development team that came together in the fall of 2017. Our team is made up of six college students that all attend Rochester Institute of Technology. We all came together in a web development class to develop a  nice and easy to use tutorial website for anyone deciding to use Atom for their developer environment. Even though we are a relatively new team, each member provides our team with different talents that we plan on utilizing to maximize our output for the end user.
                        </p>
                    </div>
                </div>
                <div class="about-section-wrapper">
                    <h2 class="about-section-header">Why did we make this site?</h2>
                    <p class="about-content">
                        The idea for this tutorial site initially started as the brainchild of the leader of our dev team. We call him Bryan. After some brainstorming amongst the team, we decided that many technical tutorial websites were a little difficult to understand and a lot of them were very VERY dry. We figured it would be a good idea to make a website that doesn’t bore the user to death but also makes learning how to use a specific IDE a breeze.
                    </p>
                </div>
                <div class="about-section-wrapper">
                    <h2 class="about-section-header">What makes us different?</h2>
                    <p class="about-content">
                        What separates team Skinny Britches from the rest of the bunch, is that we are developing this site with the user in mind. Instead of throwing a bunch of technically lingo onto the page, we carefully aim to have every user of our site be able to digest the information we have to offer and be able to learn the editor in a precise fashion.
                    </p>
                </div>
                <div class="about-section-wrapper">
                    <h2 class="about-section-header">Where did our team logo come from?</h2>
                    <p class="about-content">
                        Just a little fun fact in case you were wondering, we were all in a meeting to discuss what the best foot forward would be to ensure this website's success and then it came to our attention that we didn’t have a logo. Our inspiration for the logo’s design was derived from the famous eggman.
                    </p>
                </div>
            </div>
        </div>
        <div class="team-images-wrapper">
            <div class="meet-team-header-wrapper">
                <h2 id="meet-team-header">Meet the Team!</h2>
            </div>
            <div class="team-images-div">
                <div class="slideshow-container">

                    <div class="teamSlide fade">
                        <figure class="team-member-figure">
                            <img class="team-member-image" src="../assets/images/bryan.jpg">
                            <div class="member-info-wrapper">
                                <figcaption class="member-info">Bryan Camp</figcaption>
                                <figcaption class="member-info">Leader</figcaption>
                            </div>
                        </figure>
                        <figure class="team-member-figure">
                            <img class="team-member-image" src="../assets/images/josh.jpg">
                            <div class="member-info-wrapper">
                                <figcaption>Josh Schrader</figcaption>
                                <figcaption>Information Designer</figcaption>
                            </div>
                        </figure>
                    </div>

                    <div class="teamSlide fade">
                        <figure class="team-member-figure">
                            <img class="team-member-image" src="../assets/images/vince.jpg">
                            <div class="member-info-wrapper">
                                <figcaption>Vincent Cheng</figcaption>
                                <figcaption>Interaction Designer</figcaption>
                            </div>
                        </figure>
                        <figure class="team-member-figure">
                            <img class="team-member-image" src="../assets/images/mac.jpg">
                            <div class="member-info-wrapper">
                                <figcaption>Cormac Kenney</figcaption>
                                <figcaption>Artist</figcaption>
                            </div>
                        </figure>
                    </div>

                    <div class="teamSlide fade">
                        <figure class="team-member-figure">
                            <img class="team-member-image" src="../assets/images/rob.jpg">
                            <div class="member-info-wrapper">
                                <figcaption>Robert Graham</figcaption>
                                <figcaption>Content Producer</figcaption>
                            </div>
                        </figure>
                        <figure class="team-member-figure">
                            <img class="team-member-image" src="../assets/images/zac.jpg">
                            <div class="member-info-wrapper">
                                <figcaption>Zacharry Georges</figcaption>
                                <figcaption>Programmer</figcaption>
                            </div>
                        </figure>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(x) {
                showSlides(slideIndex += x);
            }

            function showSlides(x) {
                var i;
                var slides = document.getElementsByClassName("teamSlide");
                if (x > slides.length) {
                    slideIndex = 1;
                }
                if (x < 1) {
                    slideIndex = slides.length;
                }
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
                }
                slides[slideIndex-1].style.display = "block";
            }
        </script>
<?php require_once PATH_INC . 'footer.php'?>
