<?php /* Template Name: HomePageLayout */ ?>
<?php $options = get_option('mh_options'); ?>
<?php get_header(); ?>
        <div id="top" class="body-container-wrapper row clearfix home-page-body">
            <div class="container-wrapper row container-wrapper-crousel">
                <div id="myCarousel" data-ride="carousel" class="carousel slide">
                    <!-- Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                         <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides-->
                    <div role="listbox" class="carousel-inner">
                        <div class="item active"><img src="<?php bloginfo('template_directory'); ?>/images-new/banner1.jpg" alt="Easa online training">
                            <div class="carousel-content col-sm-5 col-md-5">
                                <div style="color:white;font-family: 'PT Sans', sans-serif;" class="content-heading">Training Programs</div>
                                    <h4 style="color:white;font-family: 'Raleway', sans-serif;">Best in class employee enablement and<br>training programs.</h4>
<br>
                                <div  class="content-button"><input type="button" value="READ MORE" onClick="window.location='http://365onlinetraining.com/training-programs/';"></div>
                            </div>
                        </div>
                       
                        <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images-new/banner2.png" alt="Project management">
                            <div class="carousel-content col-sm-5 col-md-5">
                                <div style="color:black;font-family: 'PT Sans', sans-serif;" class="content-heading">Project Support</div>
		<h4 style="color:black; font-family: 'Raleway', sans-serif;">Highly efficient support services which<br>help in delivering theprojects on time.</h4><br>
                                <div class="content-button"><input type="button" value="READ MORE" onClick="window.location='http://365onlinetraining.com/training-programs/';"></div>
                            </div>
                        </div>
						 <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images-new/banner3.jpeg" alt="Corporate training">
                            <div class="carousel-content col-sm-5 col-md-5">
                                <div style="color:white;font-family: 'PT Sans', sans-serif;" class="content-heading">Enterprise Digital Solution</div>
                               <h4 style="color:white;font-family: 'Raleway', sans-serif;">Digital solution to empower organization<br>to be online 365 days a year.</h4><br>
                                <div class="content-button"><input type="button" value="READ MORE" onClick="window.location='http://365onlinetraining.com/training-programs/';"></div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-wrapper row category-wrapper">
                <div class="container-center row">
                    <div class="category-group-tabs clearfix">
                        <ul class="category-tabs-link clearfix">
                            <li class="tabs-title col-xs-6 col-sm-3 tabs-title-active">
                                <div id="experience">
                                    <h4 class="category-tab-title"><b>Experience</b></h4></div>
                            </li>
                            <li class="tabs-title col-xs-6 col-sm-3">
                                <div id="commerce">
                                    <h4 class="category-tab-title"><b>Commerce</b></h4></div>
                            </li>
                            <li class="tabs-title col-xs-6 col-sm-3">
                                <div id="content">
                                    <h4 class="category-tab-title"><b>Content</b></h4></div>
                            </li>
                            <li class="tabs-title col-xs-6 col-sm-3">
                                <div id="mobility">
                                    <h4 class="category-tab-title"><b>Mobility</b></h4></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-wrapper row category-group-info-wrapper" >
                <div class="container-center row">
                    <div class="category-group-info clearfix">
                        <div class="col-sm-12 center-block">
                            <div class="category-group-info-title-ex text-center">
                                <h3 style="font-family: 'PT Sans', sans-serif;">Digital Experience</h3></div>
                         <div class="category-group-info-desc">
                                <div style="font-family: 'Raleway', sans-serif;">
                                <p><font size="5">Digital Experience is the center of all Enterprise strategies. We help enterprises to achieve their vision and empower them to provide un matched digital Experience to their Customer. We use both best in class Oracle WebCenter Sites and Sites cloud solution to achieve this.</font></p>
</div>
</div>
                         
                            <div class="category-group-tab-button text-center"><a class="button read-more-button"><span><b>Read More</b></span></a></div>
                        </div>
                    </div>
                    <div class="category-group-info clearfix">
                        <div class="col-sm-12 center-block">
                            <div class="category-group-info-title-ex text-center">
                                <h3 style="font-family: 'PT Sans', sans-serif;">Web Commerce</h3></div>
                            <div class="category-group-info-desc">
                                <div style="font-family: 'Raleway', sans-serif;"><p><font size="5">Our web commerce solution help organization to deliver a personalized online buying experience to their customers. We use our expertise in Oracle ATG web commerce and open Source product like Magento and Prestashop to deliver the commerce portal.</font></p></div>
                            </div>
                            <div class="category-group-tab-button text-center"><a class="button read-more-button"><span><b>Read More</b></span></a></div>
                        </div>
                    </div>
                    <div class="category-group-info clearfix">
                        <div class="col-sm-12 center-block">
                            <div class="category-group-info-title-ex text-center">
                                <h3 style="font-family: 'PT Sans', sans-serif;">Enterprise Content Management</h3></div>
                            <div class="category-group-info-desc">
                                <div style="font-family: 'Raleway', sans-serif;"><p><font size="5">Content managemet is one of the key task for all the enterprises and we help them to achieve this. Our solution uses Oracle WebCenter Content and document cloud service to create scalable repositories which support enterprise-wide applications.</font></p></div>
                            </div>
                            <div class="category-group-tab-button text-center"><a class="button read-more-button"><span><b>Read More</b></span></a></div>
                        </div>
                    </div>
                    <div class="category-group-info clearfix">
                        <div class="col-sm-12 center-block">
                            <div class="category-group-info-title-ex text-center">
                                <h3 style="font-family: 'PT Sans', sans-serif;">Enterprise Mobility</h3></div>
                            <div class="category-group-info-desc">
                                <div style="font-family: 'Lato', sans-serif;"><p><font size="5">We deliver the most advanced solution for developing and securing mobile applications. Our solution use Oracle Mobile Application Framework and Mobile cloud Service to to deliver highly engaging mobile experiences.</font></p></div>
                            </div>
                            <div class="category-group-tab-button text-center"><a class="button read-more-button"><span><b>Read More</b></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container-wrapper row" style="background-color:#e6e6e6;margin-top:0px;">
            <div class="container-left col-xs-12 col-md-12 column">
                <div class="courses-wrapper">
                    <div class="container-heading col-xs-12">
<br>
                        <h3  style="color:#262626; font-family: 'PT Sans', sans-serif;">T r a i n i n g &nbsp;&nbsp;P r o g r a m s</h3>
<hr style="border : 0;height: 1px; width:50%;letter-spacing:px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
<br></div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot01.jpg"></div>
             <div class="training-more-wrap"><span><input type="button" value="Read More " onClick="window.location='http://365onlinetraining.com/oracle-webcenter-sites-online-training/';"></span></div>
                            </div>
                            <div ><h5><strong>Oracle WebCenter Sites Training</strong></h5>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(2);
document.write(dt.toDateString());

</script> ';  ?>
 </div>
		 
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot01.jpg"></div>
                               <div class="training-more-wrap"><span> <input type="button" value="Read More " onClick="window.location='http://365onlinetraining.com/oracle-webcenter-content-training/';"></span></div>
                            </div>
                            <div ><h5><strong>Oracle WebCenter Content Training</h5></strong>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(2);
document.write(dt.toDateString());

</script> ';  ?></div>
							
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot03.png"></div>
                              <div class="training-more-wrap"><span> <input type="button" value="Read More " onClick="window.location='http://365onlinetraining.com/oracle-mobile-application-framework-training-maf/';"></span></div>
                            </div>
                            <div ><h5><strong>Oracle MAF Training</h5></strong>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(3);
document.write(dt.toDateString());

</script> ';  ?></div>
							
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot04.png"></div>
                     <div class="training-more-wrap"><span> <input type="button" value="Read More " onClick="window.location='http://365onlinetraining.com/oracle-atg-training/';"></span></div>
                            </div>
                            <div ><h5><strong>Oracle ATG Web Commerce Training</h5></strong>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(3);
document.write(dt.toDateString());

</script> ';  ?></div>
							
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot05.jpg"></div>
                             <div class="training-more-wrap"><span> <input type="button" value="Read More " onClick="window.location='http://365onlinetraining.com/training-programs/';"></span></div>  
                            </div>
                            <div ><h5><strong>Oracle Weblogic 12C Training</h5></strong>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(4);
document.write(dt.toDateString());

</script> ';  ?></div>
							
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot06.jpg"></div>
                              <div class="training-more-wrap"><span> <input type="button" value="Read More " onClick="window.location='http://365onlinetraining.com/oracle-adf-online-training/';"></span></div> 
                            </div>
                            <div><h5><strong>Oracle ADF Training</h5></strong>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(4);
document.write(dt.toDateString());

</script> ';  ?></div>
							
                        </div>
                    </div>
                </div>
            </div><br>
        </div>
           <div class="container-wrapper row" style="background-color:black;margin-top:0px;">
                <div class="container-center row">
                    <div class="container-cloud-wrapper clearfix">
                        <div class="container-cloud-info">
                            <div class="container-cloud-title clearfix">
<br>
                                <h3 style="color:white;font-family: 'PT Sans', sans-serif;">C l o u d &nbsp;&nbsp;S o l u t i o n s</h3>
<hr style="border : 0;height: 1px; width:50%;background-image: linear-gradient(to right, rgba(255,255,255,255), rgba(255,255,255,255), rgba(255,255,255,255));"></div>
<br>
                            <div class=" row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-left">
                                    <div ><a href="#" class="button button-cloud"><h3 style="color:white;font-family: 'Raleway', sans-serif;"><img src="<?php bloginfo('template_directory'); ?>/images-new/arrow-white.png">&nbsp;Oracle Eloqua Marketing Cloud Service</h3></a></div>
                                    <div ><a href="#" class="button button-cloud"><h3 style="color:white;font-family: 'Raleway', sans-serif;"><img src="<?php bloginfo('template_directory'); ?>/images-new/arrow-white.png">&nbsp;Oracle Sites Cloud Service</h3></a></div> 
                                    <div ><a href="#" class="button button-cloud"><h3 style="color:white;font-family: 'Raleway', sans-serif;"><img src="<?php bloginfo('template_directory'); ?>/images-new/arrow-white.png">&nbsp;Oracle Document Cloud Service</h3></a></div>
                                    <div ><a href="#" class="button button-cloud"><h3 style="color:white;font-family: 'Raleway', sans-serif;"><img src="<?php bloginfo('template_directory'); ?>/images-new/arrow-white.png">&nbsp;Oracle Java Cloud Service</h3></a></div>
                                </div>
								<div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right" style="margin-top:-220px"><div ><img src="<?php bloginfo('template_directory'); ?>/images-new/cloud.png"></div>
<br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
         <!--    <div class="container-wrapper row" style="background-color:#e6e6e6;margin-top:0px;">
                <div class="container-center col-xs-12 column">
                    <div class="client-wrapper clearfix">
<br>
                        <h4  style="color:#262626">O u r &nbsp;&nbsp;P a s t &nbsp;&nbsp;C l i e n t s</h4>
<hr style="border : 0;height: 1px; width:50%;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
                    <div id="myCarousel2" data-ride="carousel" data-type="multi" data-interval="3000" class="carousel slide fdi-Carousel clearfix">
                        <div role="listbox" class="client-list clearfix carousel-inner second-inner">
                            <div class="client-img-wrp item active">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c1.png"></div>
                                </div>
                            </div>
                            <div class="client-img-wrp item">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c2.png"></div>
                                </div>
                            </div>
                            <div class="client-img-wrp item">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c3.png"></div>
                                </div>
                            </div>
							<div class="client-img-wrp item ">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c4.png"></div>
                                </div>
                            </div>
							
                        </div>
                        <a href="#myCarousel2" role="button" data-slide="prev" class="left carousel-control">
                            <div class="glyphicon glyphicon-chevron-left"><img src="<?php bloginfo('template_directory'); ?>/images-new/arrow-left.png"></div><span class="sr-only">Previous</span></a>
                        <a href="#myCarousel2" role="button" data-slide="next" class="right carousel-control">
                            <div class="glyphicon glyphicon-chevron-right"><img src="<?php bloginfo('template_directory'); ?>/images-new/arrow-right.png"></div><span class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
        </div> -->
       <!-- <div class="container-wrapper row">
            <div class="container-center col-xs-12 column">
                <div class="feeds-wrapper clearfix">
                    <div id="myCarousel3" data-ride="carousel" class="carousel clearfix">
                        <div role="listbox" class="client-list clearfix carousel-inner second-inner">
                            <div class="client-img-wrp item active clearfix">
                                <div class="client-1 col-sm-12">
                                    <div class="clearfix"><span class="clearfix">“Very good training with excellent training material. Tushar has in-depth understanding of Wencenter Sites Product; he explains complex things in a simple way (“If you can't explain it simply, you don't understand it well enough- Milena Djurasovic"</span></div>
                                </div>
                            </div>
                            <div class="client-img-wrp item clearfix">
                                <div class="client-1 col-sm-12">
                                    <div class="clearfix"><span class="clearfix">“Lorem ipsum 365 online training provide us the best in class service. We are very happy by the their quality”</span><span>Michal Sam, Director, Y@Z company</span></div>
                                </div>
                            </div>
                            <div class="client-img-wrp item clearfix">
                                <div class="client-1 col-sm-12">
                                    <div class="clearfix"><span class="clearfix">“We are very happy by the their quality. 365 online training provide us the best in class service. ”</span><span>Kamrarjeet Singh, CEO, Abc company</span></div>
                                </div>
                            </div>
                        </div>
                        <a href="#myCarousel3" role="button" data-slide="prev" class="left carousel-control">
                            <div class="glyphicon glyphicon-chevron-left"><img src="<?php bloginfo('template_directory'); ?>/images-new/left-arrow.png"></div><span class="sr-only">Previous</span></a>
                        <a href="#myCarousel3" role="button" data-slide="next" class="right carousel-control">
                            <div class="glyphicon glyphicon-chevron-right"><img src="<?php bloginfo('template_directory'); ?>/images-new/right-arrow.png"></div><span class="sr-only">Next</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div style="background:black" class="footer">
           <div class="row footer-about-company-row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="footer-about-company">
                        <div class="region-footer">
                            <div class="content">
                                <h5 style="font-family: 'Raleway', sans-serif;">Copyright 2016 365 Online. All Right Reserved &nbsp;&nbsp;&nbsp;<a href="#top"><img style="height:25px; widht:25px" src="<?php bloginfo('template_directory'); ?>/images-new/up-arrow.png"></a></h5></div>
                        </div>
                    </div>
                </div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                </div>
            </div>
        </div>
    
</body>

