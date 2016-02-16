<?php require 'home_custom_search.php';

$CI = get_instance();
$CI->load->model('user/post_model');
$parent_categories = $CI->post_model->get_all_parent_categories();

?>

<!-- Container -->
<div class="container-fluid main-container">
    <h4>LEARNING AND DEVELOPMENT</h4>
    <!-- tabs -->
    <div class="container-fluid main-container">
        <div class="row">
            <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Business Planning
                </div>
            </a>
             <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Finance & Accounting
                </div>
            </a>
             <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Marketing
                </div>
            </a>
             <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Human Resources
                </div>
            </a>
             <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Adminstration
                </div>
            </a>
             <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    International Trade
                </div>
            </a>
            <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Legal
                </div>
            </a>
             <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Operations
                </div>
            </a>
             <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Project Management
                </div>
            </a>
             <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Information Technology
                </div>
            </a>
             <a href="#">
                <div class="col-lg-2" style="text-align: center; border: thin solid #000; padding: 20px 5px; background: #f2f2f2; margin: 1px" >
                    <span style="font-size: 60px; color: #fff"><i class="fa fa-paper-plane"></i></span><br/>
                    Women in Business
                </div>
            </a>

        </div>
    </div>
    <!-- tabs end -->
    <div class="row" style="display: none">

            <div class="real-estate" style="background-color: #ffffff !important; margin-top:35px !important">
                    <div class="row">
                        <div class="col-lg-3" >
                            <a href="https://www.coursera.org/courses?query=entrepreneurship&amp;languages=en /" target="_blank"> <img src="http://imaginebusiness.com.ng/marketconnect/uploads/cou.png" alt="Business Registration" width="276" height="180" /></a>
                        </div>
                        <div class="col-lg-3" >
                            <a href="http://nigeria.smetoolkit.org/nigeria/en " target="_blank"> <img src="http://imaginebusiness.com.ng/marketconnect/uploads/sme.png" alt="" width="276" height="180" /></a>
                        </div>
                        <div class="col-lg-3" id="1deals">
                            <a href="http://aiki.ng/en/Pages/Home.aspx/" target="_blank">&nbsp; &nbsp; <img src="http://imaginebusiness.com.ng/marketconnect/uploads/aiki.png" alt="" width="277" height="181" /> </a>
                        </div>
                        <div class="col-lg-3" id="1deals">
                            <a href="http://www.entrepreneurship.org/" target="_blank"> <img src="http://imaginebusiness.com.ng/marketconnect/uploads/ent.png" alt="" width="262" height="171" /></a>
                        </div>

                    </div>

            </div>


        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="sidebar">
                <?php //require_once'sidebar.php';?>
            </div>
        </div>

    </div>
</div>
<script>

    $(document).ready(function() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });

</script>