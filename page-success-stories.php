<?php
/*
Page of before and after client stories.
The sidebar is highly custom to this page so it has been constructed manually.
*/
get_header();
?>

<div class="wrap">
<div id="content">
        <h1 class="entry-title">Real People, Real Success</h1>
        <?php
        the_content();
        ?>
</div>

<div id="sidebar" class="sidebar widget-area">
    <div id="call-now" class="callnow-sidebar">
        <span id="numberassigned">1-855-JUMPSTART</span>
    </div>
    <aside class="widget">
        <?php gravity_form("NEW PATIENT: Landing Page Form", $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=false); ?>
    </aside>
    <aside class="widget">
        <h1 class="h2">Program Overview</h1>
        <p>The only way to change your life is to change your lifestyle. Theres no magic milkshake, no supernutrient, no secret pill. We agree with the National Institutes of Health and The American Dietetic Association that &hellip; <a href="http://www.jumpstartmd.com/program-overview">Read More</a></p>
    </aside>
    <aside class="widget">
        <h1 class="h2">FAQ</h1>
        <p>How much weight can I expect to lose? Our patients lose two to five pounds each week. Women tend to lose two to three pounds, while men lose three to five. Of course, your results will depend on many factors, including &hellip; <a href="http://www.jumpstartmd.com/program-overview#faq">Read More</a></p>
    </aside>
    <aside class="widget">
        <h1 class="h2">Get the Stats</h1>
        <p>Don’t take our word for it–read the statistics for yourself. Here are some important facts and figures you should know about our effective weight loss program, including how our weight control program stacks up against the competition. &hellip; <a href="http://www.jumpstartmd.com/program-overview#faq">Read More</a></p>
        <a class="btn btn-orange pad-light" href="#call-now">GET STARTED NOW!</a>
    </aside>
    <aside class="widget">
        <img src="http://www.jumpstartmd.com/wp-content/uploads/2012/08/success-stories.png">
        <section class="zero-marg">
            <h2 class="h3">Amanda Moynihan</h2>
            <img class="alignright" src="http://www.jumpstartmd.com/wp-content/uploads/2012/08/Amanda-M.png">
            <p>Im happy to say Im not only 75 pounds lighter, I just recently ran a half-marathon! Oh, and my husband and I are expecting a baby in May. Thanks JumpstartMD
from all of us! <br>* Results May Vary</p>
        </section>
        <section>
            <h2 class="h3">J Webb</h2>
            <img class="alignright" src="http://www.jumpstartmd.com/wp-content/uploads/2012/08/J-Webb.png">
            <p>I've lost nearly 70 pounds in just 6 months! Not only that, my blood pressure has gone from near stage one hypertension to a normal level, along with lowered cholesterol and glucose. <br>* Results May Vary</p>
        </section>
        <section>
            <h2 class="h3">KFOG DJ Annalisa</h2>
            <img class="alignright" src="http://www.jumpstartmd.com/wp-content/uploads/2012/08/Annalisa.png">
            <p>The thing that was different about this is it started to work so quickly that within the first week I started to notice a difference. In the second week I noticed a difference. The results were great, and they still are, and fast! <br>* Results May Vary</p>
        </section>
        <img src="http://www.jumpstartmd.com/wp-content/uploads/2012/08/listen-annalisa-success.png">
        <a class="btn btn-orange pad-light" href="#call-now">GET STARTED NOW!</a> 
    </aside>
</div>

<div class="clear"></div>

<section class="call-block">
<div class="border-wrap">
<h3>Call Today for More Information</h3>
<span id="numberassigned_footer">1-855-JUMPSTART</span>
</div>
</section>
</div><!-- .wrap -->

<?php
get_footer();
?>


