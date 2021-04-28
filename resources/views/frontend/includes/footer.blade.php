<footer class="w3l-footers-14 py-5">
    <div class="container py-md-5 py-sm-3">
        <div class="row w3l-footer-top-form no-gutters">
            <div class="col-lg-7 grid-two-column">
                <div class="footer-image">
                    <img src="{{asset('/')}}assets/frontend/images/banner1.jpg" class="img-fluid radius-image">
                </div>
                <div class="text-grid grid-column">
                    <h4>Subscribe to receive my best posts once a month</h4>
                    <p>
                        Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a
                        notification by email.</p>
                </div>
            </div>
            <div class="col-lg-5 form-submitinfo pl-lg-5">
                <form action="#" method="GET">
                    <input type="email" name=" placeholder" placeholder="Enter Your Email" required="">
                    <button type="submit" class="btn btn-primary btn-style submitbtn mt-3">Subscribe Now</button>
                </form>
            </div>
        </div>
        <div class="row footers14-top no-gutters">
            <div class="col-lg-6 footer14-nav-left">
                <ul class="footer14-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-6 footer14-app text-lg-right">
                <span>Download app :</span>
                <a href="#url"><span class="fa fa-apple"></span></a>
                <a href="#url"><span class="fa fa-windows"></span></a>
                <a href="#url"><span class="fa fa-android"></span></a>

            </div>
        </div>
        <div class="footers14-bottom d-flex">
            <div class="copyright">
                <p>© 2021 Reprise. All RIghts Reserved. Design by <a href="#URL">W3Layouts</a></p>
            </div>
            <div class="language-select d-flex">
                <span class="fa fa-language" aria-hidden="true"></span>
                <select>
                    <option>English</option>
                    <option>Estonina</option>
                    <option>Deutsch</option>
                    <option>Nederlan;ds</option>
                </select>
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        &uarr;
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

</footer>
