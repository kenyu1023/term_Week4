<?php include "partials/header.php"; ?>
<div class="contact large-12 medium-12 small-12">
    <div class="large-6 medium-12 columns">
        <div class="info">
            <h2>Ellory Buscemi</h2>
            <div class="large-6 medium-12 small-12 columns">
                <div class="address">
                    <h4>New York</h4>
                    <p>4234 Longview Avenue</p>
                    <p>Bronx</p>
                    <p>New York</p>
                    <p>10463</p>
                    <p>718-549-9330</p>
                </div>
            </div>
            <div class="large-6 medium-12 small-12 columns">
                <div class="info-discription">
                    <p>Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. 
                    </p>
                </div>
            </div>
            <div class="large-12 medium-12 small-12 columns">
                <div class="hiring">
                    <h3>Hello!</h3>
                    <p>Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="large-6 medium-12 small-12 columns">

        <form acrion="#" method="post">
            <h3>Form</h3>
            <div class="table">
                <div class="small-12 medium-12 large-12 columns"><label>Name</label></div>
                <div class="small-12 medium-12 large-12 columns"><input type="text"
                                                                      name="name"
                                                                      placeholder="Name"></div>

                <div class="small-12 medium-12 large-12 columns"><label>E-mail</label></div>
                <div class="small-12 medium-12 large-12 columns"><input type="text"
                                                                      name="mail"
                                                                      placeholder="E-mail Address"></div>

                <div class="small-12 medium-12 large-12 columns"><label>Address</label></div>
                <div class="small-12 medium-12 large-12 columns"><input type="text"
                                                                      name="address"
                                                                      placeholder="Address"></div>

                <div class="small-12 medium-12 large-12 columns"><label>Gender</label></div>
                <div class="small-12 medium-radio columns"><input type="radio"
                                                                   name="gender"
                                                                   value="female"><label>Female</label></div>
                <div class="small-12 medium-radio columns"><input type="radio"
                                                                   name="gender"
                                                                   value="male"><label>Male</label></div>
                <div class="small-12 medium-radio columns"><input type="radio"
                                                                   name="gender"
                                                                   value="other"><label>Other</label></div>

                <div class="small-12 medium-12 large-12 columns"><label class="message-label">Messege</label></div>
                <div class="small-12 medium-12 large-12 columns"><textarea name="messege"
                                                                         placeholder="Messege Please"></textarea></div>

                <div class="small-12 medium-12 large-12 columns"><input type="submit"
                                                                        value="Submit"></div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
</body>
</html>

