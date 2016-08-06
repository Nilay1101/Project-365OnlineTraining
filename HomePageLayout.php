<?php /* Template Name: HomePageLayout */ ?>
<?php $options = get_option('mh_options'); ?>
<?php get_header(); ?>
        <div class="body-container-wrapper row clearfix home-page-body">
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
                        <div class="item active"><img src="<?php bloginfo('template_directory'); ?>/images-new/easa-online-training.jpg" alt="Easa online training">
                            <div class="carousel-content col-sm-5 col-md-5">
                                <div class="content-heading">Training Programs</div>
                                <div class="content-details">
                                    Best in class employee enablement and training programs.
								</div>
                                <div class="content-button"><input type="button" value="Read more" onClick="window.location='http://365onlinetraining.com/training-programs/';"></div>
                            </div>
                        </div>
                       
                        <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images-new/project-management.jpg" alt="Project management">
                            <div class="carousel-content col-sm-5 col-md-5">
                                <div class="content-heading">Project Support</div>
								<div class="content-details">
                                    Highly efficient support services which help in delivering the projects on time.</div>  
                                <div class="content-button"><input type="button" value="Read more" onClick="window.location='http://365onlinetraining.com/training-programs/';"></div>
                            </div>
                        </div>
						 <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images-new/corporate-training.jpg" alt="Corporate training">
                            <div class="carousel-content col-sm-5 col-md-5">
                                <div class="content-heading">Enterprise Digital Solution</div>
                                <div class="content-details">
                                     Digital solution to empower organization to be online 365 days a year.</div>
                                <div class="content-button"><input type="button" value="Read more" onClick="window.location='http://365onlinetraining.com/training-programs/';"></div>
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
                                    <h4 class="category-tab-title">Experience</h4></div>
                            </li>
                            <li class="tabs-title col-xs-6 col-sm-3">
                                <div id="commerce">
                                    <h4 class="category-tab-title">Commerce</h4></div>
                            </li>
                            <li class="tabs-title col-xs-6 col-sm-3">
                                <div id="content">
                                    <h4 class="category-tab-title">Content</h4></div>
                            </li>
                            <li class="tabs-title col-xs-6 col-sm-3">
                                <div id="mobility">
                                    <h4 class="category-tab-title">Mobility</h4></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-wrapper row category-group-info-wrapper">
                <div class="container-center row">
                    <div class="category-group-info clearfix">
                        <div class="col-sm-8 center-block">
                            <div class="category-group-info-title-ex text-center">
                                <h3>Digital Experience</h3></div>
                            <div class="category-group-info-desc">
                                <div>Digital Experience is the center of all Enterprise strategies. We help enterprises to achieve their vision and empower them to provide un matched digital Experience to their Customer. We use both best in class Oracle WebCenter Sites and Sites cloud solution to achieve this.</div>
                            </div>
                            <div class="category-group-tab-button text-center"><a class="button read-more-button"><span>Read More</span></a></div>
                        </div>
                    </div>
                    <div class="category-group-info clearfix">
                        <div class="col-sm-8 center-block">
                            <div class="category-group-info-title-ex text-center">
                                <h3>Web Commerce</h3></div>
                            <div class="category-group-info-desc">
                                <div>Our web commerce solution help organization to deliver a personalized online buying experience to their customers. We use our expertise in Oracle ATG web commerce and open Source product like Magento and Prestashop to deliver the commerce portal.</div>
                            </div>
                            <div class="category-group-tab-button text-center"><a class="button read-more-button"><span>Read More</span></a></div>
                        </div>
                    </div>
                    <div class="category-group-info clearfix">
                        <div class="col-sm-8 center-block">
                            <div class="category-group-info-title-ex text-center">
                                <h3>Enterprise Content Management</h3></div>
                            <div class="category-group-info-desc">
                                <div>Content managemet is one of the key task for all the enterprises and we help them to achieve this. Our solution uses Oracle WebCenter Content and document cloud service to create scalable repositories which support enterprise-wide applications.</div>
                            </div>
                            <div class="category-group-tab-button text-center"><a class="button read-more-button"><span>Read More</span></a></div>
                        </div>
                    </div>
                    <div class="category-group-info clearfix">
                        <div class="col-sm-8 center-block">
                            <div class="category-group-info-title-ex text-center">
                                <h3>Enterprise Mobility</h3></div>
                            <div class="category-group-info-desc">
                                <div>We deliver the most advanced solution for developing and securing mobile applications. Our solution use Oracle Mobile Application Framework and Mobile cloud Service to to deliver highly engaging mobile experiences.</div>
                            </div>
                            <div class="category-group-tab-button text-center"><a class="button read-more-button"><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container-wrapper row">
            <div class="container-left col-xs-12 col-md-12 column">
                <div class="courses-wrapper">
                    <div class="container-heading col-xs-12">
                        <h3>Training Programs</h3></div>
                    <div class="container-details col-xs-6 col-sm-4">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot01.jpg"></div>
                               <div class="training-dd-wrap">
                                    <!--<div class="container-dd-training">
                                       <div class="container-dd-training-detail"> <span>Date&nbsp;–&nbsp;</span><span class="training-date">Sunday, 10th July</span></div>
                                    </div>-->
                                    <div class="training-more-wrap"><span> <input type="button" value="Read More" onClick="window.location='http://365onlinetraining.com/oracle-webcenter-sites-online-training/';"></span></div>
                                </div>
                            </div>
                            <div class="container-dd-heading">Oracle WebCenter Sites Training<br>&nbsp;</div>
							 
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-4">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot01.jpg"></div>
                                <div class="training-dd-wrap">
                                   <!-- <div class="container-dd-training">
                                        <div class="container-dd-training-detail"> <span>Date&nbsp;–&nbsp;</span><span class="training-date">Sunday, 10th July</span></div>
                                    </div> -->
                                    <div class="training-more-wrap"><span> <input type="button" value="Read More" onClick="window.location='http://365onlinetraining.com/oracle-webcenter-content-training/';"></span></div>
                                </div>
                            </div>
                            <div class="container-dd-heading">Oracle WebCenter Content Training</div>
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-4">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot03.png"></div>
                                <div class="training-dd-wrap">
                                    <!--<div class="container-dd-training">
                                        <div class="container-dd-training-detail"> <span>Date&nbsp;–&nbsp;</span><span class="training-date">Sunday 17th July</span></div>
                                    </div> -->
                                    <div class="training-more-wrap"><span> <input type="button" value="Read More" onClick="window.location='http://365onlinetraining.com/oracle-mobile-application-framework-training-maf/';"></span></div>
                                </div>
                            </div>
                            <div class="container-dd-heading">Oracle MAF Training</div>
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-4">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot04.png"></div>
                                <div class="training-dd-wrap">
                                    <!--<div class="container-dd-training">
                                        <div class="container-dd-training-detail"> <span>Date&nbsp;–&nbsp;</span><span class="training-date">Sunday 17th July</span></div>
                                    </div> -->
                                    <div class="training-more-wrap"><span> <input type="button" value="Read More" onClick="window.location='http://365onlinetraining.com/oracle-atg-training/';"></span></div>
                                </div>
                            </div>
                            <div class="container-dd-heading">Oracle ATG Web Commerce Training</div>
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-4">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot05.jpg"></div>
                                <div class="training-dd-wrap">
                                    <!--<div class="container-dd-training">
                                        <div class="container-dd-training-detail"> <span>Date&nbsp;–&nbsp;</span><span class="training-date">Sunday, 17th July</span></div>
                                    </div> -->
                                    <div class="training-more-wrap"><span> <input type="button" value="Read More" onClick="window.location='http://365onlinetraining.com/training-programs/';"></span></div>
                                </div>
                            </div>
                            <div class="container-dd-heading">Oracle Weblogic 12C Training</div>
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-4">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot06.jpg"></div>
                                <div class="training-dd-wrap">
                                    <!--<div class="container-dd-training">
                                        <div class="container-dd-training-detail"> <span>Date&nbsp;–&nbsp;</span><span class="training-date">Sunday, 17th July</span></div>
                                    </div> -->
                                    <div class="training-more-wrap"><span> <input type="button" value="Read More" onClick="window.location='http://365onlinetraining.com/oracle-adf-online-training/';"></span></div>
                                </div>
                            </div>
                            <div class="container-dd-heading">Oracle ADF Training</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container-wrapper row">
                <div class="container-center row">
                    <div class="container-cloud-wrapper clearfix">
                        <div class="container-cloud-info">
                            <div class="container-cloud-title clearfix">
                                <h3>Cloud Solutions</h3></div>
                            <div class="container-cloud-info-wrap clearfix">
                                <div class="cloud-info-wrap-top col-xs-12">
                                    <div class="cloud-tab-info"><a href="#" class="button button-cloud"><span>Oracle Eloqua Marketing Cloud Service</span></a></div>
                                </div>
                                <div class="cloud-info-wrap-medium col-xs-12">
                                    <div class="cloud-info-wrap-left col-xs-4 pull-left">
                                        <div class="cloud-tab-info"><a href="#" class="button button-cloud"><span></span></a></div>
                                       <div class="cloud-tab-info"><a href="#" class="button button-cloud"><span>Oracle Sites Cloud Service</span></a></div> 
                                        <div class="cloud-tab-info"><a href="#" class="button button-cloud"><span></span></a></div> 
                                    </div>
                                    <div class="cloud-info-wrap-mid-img col-xs-4">
                                        <div class="cloud-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/cloud-computing.png"></div>
                                    </div>
                                    <div class="cloud-info-wrap-right col-xs-4 pull-right">
                                        <div class="cloud-tab-info"><a href="#" class="button button-cloud"><span></span></a></div>
                                        <div class="cloud-tab-info"><a href="#" class="button button-cloud"><span></span>Oracle Document Cloud Service</a></div>
                                        <div class="cloud-tab-info"><a href="#" class="button button-cloud"><span></span></a></div>
                                    </div>
                                </div>
                                <div class="cloud-info-wrap-bottom col-xs-12">
                                    <div class="cloud-tab-info"><a href="#" class="button button-cloud"><span>Oracle Java Cloud Service</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-wrapper row">
                <div class="container-center col-xs-12 column">
                    <div class="client-wrapper clearfix">
                        <h4>Our Past Clients</h4>
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
                        </div>
                        <a href="#myCarousel2" role="button" data-slide="prev" class="left carousel-control">
                            <div class="glyphicon glyphicon-chevron-left"><img src="<?php bloginfo('template_directory'); ?>/images-new/left-arrow.png"></div><span class="sr-only">Previous</span></a>
                        <a href="#myCarousel2" role="button" data-slide="next" class="right carousel-control">
                            <div class="glyphicon glyphicon-chevron-right"><img src="<?php bloginfo('template_directory'); ?>/images-new/right-arrow.png"></div><span class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="footer">
            <div class="row footer-about-company-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="footer-about-company">
                        <div class="region-footer">
                            <div class="content">
                                <h4>Copyright 2016 365 Online. All Right Reserved</h4></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>

