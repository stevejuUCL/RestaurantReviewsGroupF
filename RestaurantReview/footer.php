<!-- subscribe -->
<div class="subscribe agileits-w3layouts">
    <div class="container">
        <div class="col-md-6 social-icons w3-agile-icons">
            <h4>Keep in touch</h4>
            <ul>
                <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                <li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
                <li><a class="fa fa-weibo icon fa-weibo" href="#"> </a></li>
            </ul>
        </div>
        <div class="col-md-6 subscribe-right">
            <h3 class="title">Leave Email for<br><span>Recommendations</span></h3>
            <form action="#" method="post">
                <input name="email" placeholder="Enter your Email..." required="" type="email">
                <input type="submit" value="Send to Feat">
                <div class="clearfix"> </div>
            </form>
            <img alt="" class="sub-w3lsimg" src="../RestaurantReview/img/i1.png"/>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //subscribe -->
<!-- footer -->
<div class="footer agileits-w3layouts">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Group</h3>
                <ul>
                    <li><a href="../HTMLfiles-noLongerUsed/about.html">About Us</a></li>
                    <li><a href="../HTMLfiles-noLongerUsed/contact.html">Contact Us</a></li>
                    <li><a href="#">Feedbacks</a></li>
                    <li><a href="../HTMLfiles-noLongerUsed/help.html">Need Help</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>help</h3>
                <ul>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="../HTMLfiles-noLongerUsed/loginBusinessman.html">Cancel Reservation</a></li>
                    <li><a href="../HTMLfiles-noLongerUsed/loginBusinessman.html">Report</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Project info</h3>
                <ul>
                    <li><a href="http://www.cs.ucl.ac.uk/1819/a6u/t2/comp0034_web_development/">Moodle page</a></li>
                    <li><a href="https://www.ucl.ac.uk/">About UCL</a></li>
                    <li><a href="#">Project Report</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Other</h3>
                <ul>
                    <li><a href="#">Code</a></li>
                    <li><a href="https://github.com/stevejuUCL/RestaurantReviewsGroupF.git">GitHub page</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<!-- //footer -->

<!-- start-smooth-scrolling -->
<script src="../RestaurantReview/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="../RestaurantReview/js/move-top.js"></script>
<script type="text/javascript" src="../RestaurantReview/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../RestaurantReview/js/bootstrap.js"></script>
</body>
</html>