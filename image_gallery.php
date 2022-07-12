<?php include "./include/header.php";
include "./ejnff/db.php";
?>
        <div class="header-space"></div>
        <main class="main-container">
            <div class="container">

                <div class="vc_row wpb_row vc_row-fluid vc_row-61d416a2ed118">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d416a2ed605">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper" style="margin-top: 100px;">
                                <div class="heading-block heading-5cdd2723f9933 tal h-h1 vc_custom_1557997482100">
                                  <h1 class="h">Image <span>Gallery</span></h1>
                                  
                                </div>
                                <div class="portfolio-block filter-block portfolio-5cdd277e7ae77 popup-gallery portfolio-grid style-style1" data-type="grid">
                                    <!-- <div class="filter-buttons tal">
                                        <div class="wrap">
                                            <button class="button current" data-filter="*">All</button>
                                            <button class="button" data-filter=".category-action-movie">Action movie</button>
                                            <button class="button" data-filter=".category-comedy">Comedy</button>
                                            <button class="button" data-filter=".category-detective">Detective</button>
                                            <button class="button" data-filter=".category-drama">Drama</button>
                                            <button class="button" data-filter=".category-historical-film">Historical Film</button>
                                            <button class="button" data-filter=".category-melodrama">Melodrama</button>
                                        </div>
                                    </div> -->

                                    <div class="load-wrap row isotope">
                                        <div class="grid-sizer col-1"></div>
                                        
                                        <?php                            
                             if(isset($_GET["upto"]))
                        $query = $db->query("SELECT a.year, g.* from  latest_updates g left join add_year a on a.id=g.year group by g.year order by id desc  LIMIT ".$_GET["upto"]);                    
                    else if(isset($_GET["from"]) && isset($_GET["total"]))
                            $query = $db->query("SELECT a.year, g.* from  latest_updates g left join add_year a on a.id=g.year group by g.year order by id desc  LIMIT ".$_GET["from"].", ".$_GET["total"]);
                    else                                                                                                                                     
			$query = $db->query("SELECT a.year, g.* from  latest_updates g left join add_year a on a.id=g.year group by g.year order by id desc LIMIT 6");
			if($query->num_rows > 0){ 
            ?>
                            <?php while($row = $query->fetch_assoc()){ ?>
                                        <article class=" category-action-movie col-12 col-sm-6 col-md-4">
                                            <div class="portfolio-item-grid wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                                
                                            <div class="img-block">
                                                    <div style="background-image: url('ejnff/latest_updates/<?php echo $row['image'];?>')"></div>
                                                </div>
                                                <a  href="image_gallery_show.php?title=<?php echo $row['year'];?>">
                                                <div class="content">
                                                    <!-- <div class="num">01</div> -->
                                                    <!--<h5 class="h"><?php //echo $row['year'];?></h5>-->
                                                    <!-- <div class="cat">Action movie</div> -->
                                                </div>
                                               </a>
                                            </div>
                                        </article>

                                        <?php  }}?>

                                      
                                    </div>
                                    <!-- <div class="loadmore-button-block">
                                        <a class="loadmore-button new" href="#" data-array="[{&quot;id&quot;:378,&quot;cat&quot;:[&quot;action-movie&quot;]},{&quot;id&quot;:377,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:382,&quot;cat&quot;:[&quot;historical-film&quot;]},{&quot;id&quot;:381,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:380,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:379,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:390,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:383,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:389,&quot;cat&quot;:[&quot;melodrama&quot;]},{&quot;id&quot;:388,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:387,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:386,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:385,&quot;cat&quot;:[&quot;melodrama&quot;]},{&quot;id&quot;:384,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:397,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:398,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:399,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:400,&quot;cat&quot;:[&quot;historical-film&quot;]},{&quot;id&quot;:401,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:402,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:396,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:395,&quot;cat&quot;:[&quot;melodrama&quot;]},{&quot;id&quot;:394,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:391,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:393,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:392,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:403,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:404,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:405,&quot;cat&quot;:[&quot;historical-film&quot;]},{&quot;id&quot;:406,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:407,&quot;cat&quot;:[&quot;historical-film&quot;]}] "
                                            data-action="portfolio" data-count="9" data-atts="{&quot;uniqid&quot;:&quot;5cdd277e7ae77&quot;,&quot;count_items&quot;:&quot;9&quot;,&quot;type&quot;:&quot;grid&quot;,&quot;grid_style&quot;:&quot;style1&quot;,&quot;carousel_style&quot;:&quot;style1&quot;,&quot;sub_heading&quot;:&quot;chapter&quot;,&quot;sub_heading2&quot;:&quot;chapter&quot;,&quot;heading&quot;:&quot;&quot;,&quot;button_label&quot;:&quot;watch full portfolio&quot;,&quot;cols&quot;:&quot; col-12 col-sm-6 col-md-4&quot;,&quot;carousel_cols&quot;:&quot;xs:1,sm:2,md:3,lg:4,&quot;,&quot;gap&quot;:&quot;on&quot;,&quot;filter_buttons&quot;:&quot;on&quot;,&quot;filter_buttons_align&quot;:&quot;tal&quot;,&quot;navigation&quot;:&quot;load_more&quot;,&quot;popup_mode&quot;:&quot;on&quot;,&quot;thumb_size&quot;:&quot;large&quot;,&quot;css_animation&quot;:&quot;fadeInLeft&quot;,&quot;slider_loop&quot;:&quot;on&quot;,&quot;slider_autoplay&quot;:&quot;on&quot;,&quot;slider_autoplay_timeout&quot;:&quot;5000&quot;,&quot;slider_arrows&quot;:&quot;on&quot;,&quot;slider_counter&quot;:&quot;on&quot;,&quot;orderby&quot;:&quot;post__in&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;source&quot;:&quot;&quot;,&quot;items&quot;:&quot;&quot;,&quot;categories&quot;:&quot;&quot;,&quot;css&quot;:&quot;&quot;}"><span>load more</span></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        
      
    </div>

    <!--googleoff: all-->
    <div id="cookie-law-info-bar" data-nosnippet="true"><span>This website uses cookies to improve your experience. We'll assume you're ok with this, but you can opt-out if you wish.<br />
<a role='button' tabindex='0' data-cli_action="accept" id="cookie_action_close_header"  class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button" style="display:inline-block;  margin:10px 5px; ">Accept</a><a role='button' tabindex='0' id="cookie_action_close_header_reject"  class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header_reject cli_action_button"  data-cli_action="reject" style="margin:5px;" >Reject</a> </span></div>
    <div id="cookie-law-info-again" style="display:none;" data-nosnippet="true"><span id="cookie_hdr_showagain">Privacy & Cookies Policy</span></div>
    <div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog" aria-labelledby="cliSettingsPopup" aria-hidden="true">
        <div class="cli-modal-dialog" role="document">
            <div class="cli-modal-content cli-bar-popup">
                <button type="button" class="cli-modal-close" id="cliModalClose">
			<svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"></path><path d="M0 0h24v24h-24z" fill="none"></path></svg>
			<span class="wt-cli-sr-only">Close</span>
	  	</button>
                <div class="cli-modal-body">
                    <div class="cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-privacy-overview">
                                    <h4>Privacy Overview</h4>
                                    <div class="cli-privacy-content">
                                        <div class="cli-privacy-content-text">This website uses cookies to improve your experience while you navigate through the website. Out of these cookies, the cookies that are categorized as necessary are stored on your browser as they are essential for
                                            the working of basic functionalities of the website. We also use third-party cookies that help us analyze and understand how you use this website. These cookies will be stored in your browser only with your
                                            consent. You also have the option to opt-out of these cookies. But opting out of some of these cookies may have an effect on your browsing experience.</div>
                                    </div>
                                    <a class="cli-privacy-readmore" tabindex="0" role="button" data-readmore-text="Show more" data-readless-text="Show less"></a>
                                </div>
                            </div>
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="necessary" data-toggle="cli-toggle-tab">
								Necessary							</a>
                                        <div class="wt-cli-necessary-checkbox">
                                            <input type="checkbox" class="cli-user-preference-checkbox" id="wt-cli-checkbox-necessary" data-id="checkbox-necessary" checked="checked" />
                                            <label class="form-check-label" for="wt-cli-checkbox-necessary">Necessary</label>
                                        </div>
                                        <span class="cli-necessary-caption">Always Enabled</span> </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="necessary">
                                            <p>Necessary cookies are absolutely essential for the website to function properly. This category only includes cookies that ensures basic functionalities and security features of the website. These cookies do
                                                not store any personal information.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="non-necessary" data-toggle="cli-toggle-tab">
								Non-necessary							</a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-non-necessary" class="cli-user-preference-checkbox" data-id="checkbox-non-necessary" checked='checked' />
                                            <label for="wt-cli-checkbox-non-necessary" class="cli-slider" data-cli-enable="Enabled" data-cli-disable="Disabled"><span class="wt-cli-sr-only">Non-necessary</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="non-necessary">
                                            <p>Any cookies that may not be particularly necessary for the website to function and is used specifically to collect user personal data via analytics, ads, other embedded contents are termed as non-necessary cookies.
                                                It is mandatory to procure user consent prior to running these cookies on your website.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cli-modal-footer">
                    <div class="wt-cli-element cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-tab-footer wt-cli-privacy-overview-actions">

                                    <a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept" class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE & ACCEPT</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
    <div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
    <!--googleon: all-->
    <?php include "./include/footer.php"?>