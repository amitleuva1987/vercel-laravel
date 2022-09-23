@extends('layout.layout')

@section('content')
<style>
      .paused-account-modal{display:block;position:fixed;z-index:999;padding-top:100px;left:0;top:0;width:100%;height:100%;background-color:#000;background-color:rgba(0,0,0,.6)}.paused-account-modal .paused-account-modal-content{background-color:#fefefe;margin:auto;padding:20px;width:500px;height:320px;border-radius:10px;text-align:center}.paused-account-modal .paused-account-modal-content img.paused-account-modal-image{margin-top:30px}.paused-account-modal .paused-account-modal-content .paused-account-modal-create-funnels{margin-top:35px;font-size:20px;color:#435569;font-weight:700}.paused-account-modal .paused-account-modal-content .paused-account-modal-your-page{font-size:12px;color:#435569}.paused-account-modal .paused-account-modal-content .paused-account-modal-learn-more{margin-top:55px}.paused-account-modal .paused-account-modal-content .paused-account-modal-learn-more a{color:#432811!important;border-color:#cc9818;background-color:#ffcb0e!important;border:1px solid #d4d4d4;border-radius:5px;padding:10px;text-decoration:none}.paused-account-modal .paused-account-modal-content .paused-account-modal-learn-more a:hover{cursor:pointer}
    </style>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none !important">
<filter id="grayscale">
<fecolormatrix type="matrix" values="0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0"></fecolormatrix>
</filter>
</svg>
<div class="containerWrapper">
<meta name="robots" content="noindex, nofollow">
<textarea id="tracking-body-top" style="display: none !important"></textarea>
<input id="submit-form-action" value="redirect-url" data-url="#" data-ar-service="" data-ar-list="" data-webhook="" type="hidden">
<div class="nodoHiddenFormFields hide">
<input id="elHidden1" class="elInputHidden elInput" name="ad" type="hidden">
<input id="elHidden2" class="elInputHidden elInput" name="tag" type="hidden">
<input id="elHidden3" class="elInputHidden elInput" name="" type="hidden">
<input id="elHidden4" class="elInputHidden elInput" name="" type="hidden">
<input id="elHidden5" class="elInputHidden elInput" name="" type="hidden">
</div>
<div class="nodoCustomHTML hide"></div>
<div class="modalBackdropWrapper" style="display: none; background-color: rgba(0, 0, 0, 0.4); height: 100%;"></div>
<div class="container containerModal midContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid border3px cornersAll bgNoRepeat radius0 borderLight shadow40 emptySection" id="modalPopup" data-title="Modal" data-block-color="0074C7" style="margin-top: 100px; padding-top: 40px; padding-bottom: 40px; outline: none; border-color: rgb(211, 211, 211); display: none; background-color: rgb(255, 255, 255);" data-trigger="none" data-animate="top" data-delay="0">
<div class="containerInner ui-sortable">
<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-2848010000" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="margin-bottom: 0px; outline: none; padding-top: 0px;">
<div id="col-full-482" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column" style="outline: none;">
<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-79906" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; cursor: pointer; outline: none;" aria-disabled="false">
<div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 hsSize3" style="text-align: center;" data-bold="inherit" contenteditable="false"><b>
Grab Your Free Ebook Now</b></div>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-98155" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; cursor: pointer; outline: none;" aria-disabled="false">
<div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 hsSize21" style="text-align: center;" data-bold="inherit" contenteditable="false">
Share This Offer With Your Friends</div>
</div>
</div>
</div>
</div>
<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-5506710000" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="margin-bottom: 0px; outline: none;">
<div id="col-left-668" class="innerContent col_left ui-resizable col-md-5" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="Left column" style="outline: none;">
<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-45419" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; cursor: pointer; outline: none;" aria-disabled="false">
<div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 hsSize18" style="text-align: right;" data-bold="inherit" contenteditable="false"><b>
Share This Offer:</b></div>
</div>
</div>
</div>
<div id="col-right-529" class="innerContent col_right ui-resizable col-md-7" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="Right column" style="outline: none;">
<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
<div class="de elSharing elMargin0 elAlign_left ui-droppable de-editable" id="tmp_social-42746" data-de-type="social" data-de-editing="false" data-title="Social Shares" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 2px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="social-likes socialLikesPreview social-likes_visible social-likes_ready social-likes_block" data-title="Share Title">
<div class="social-likes__widget social-likes__widget_facebook" title="Share link on Facebook">
<span class="social-likes__button social-likes__button_facebook"><span class="social-likes__icon social-likes__icon_facebook"></span>Facebook</span><span class="social-likes__counter social-likes__counter_facebook social-likes__counter_empty"></span>
</div>
<div class="social-likes__widget social-likes__widget_twitter" data-via="twitter-user" title="Share link on Twitter">
<span class="social-likes__button social-likes__button_twitter"><span class="social-likes__icon social-likes__icon_twitter"></span>Twitter</span><span class="social-likes__counter social-likes__counter_twitter social-likes__counter_empty"></span>
</div>
<div class="social-likes__widget social-likes__widget_plusone" title="Share link on Google+">
<span class="social-likes__button social-likes__button_plusone"><span class="social-likes__icon social-likes__icon_plusone"></span>Google+</span><span class="social-likes__counter social-likes__counter_plusone social-likes__counter_empty"></span>
</div>
</div>
<div class="social-likes socialLikesLive social-likes_block" data-url="#" data-title="Share Title" style="display: none;">
<div class="facebook" title="Share link on Facebook">Facebook</div>
<div class="twitter" data-via="twitter-user" title="Share link on Twitter">Twitter</div>
<div class="plusone" title="Share link on Google+">Google+</div>
</div>
</div>
</div>
</div>
</div>
<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-2848010000-188" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row - Clone" style="margin-bottom: 0px; outline: none; padding-top: 0px;">
<div id="col-full-482-152" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column" style="outline: none;">
<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
<div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="tmp_button-86929" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; outline: none; cursor: pointer;" aria-disabled="false">
<a href="#" class="elButton elButtonColor1 elButtonSize1 elButtonSubtle elButtonIcon2 elButtonTxtColor2 elButtonShadow1 elButtonFluid" style="color: rgb(255, 255, 255); background-color: rgb(67, 168, 96);">
<span class="elButtonMain">Download Ebook Right Now</span>
<span class="elButtonSub"></span>
</a>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-82509" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; cursor: pointer; outline: none;" aria-disabled="false">
<div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 hsSize0 elHeadlineIcon_check" style="text-align: center; color: rgba(47, 47, 47, 0.619608);" data-bold="inherit" contenteditable="false">
Yes, you are getting free access to this book right now <div> Just click the download button above.</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="closeLPModal"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="" data-src="https://assets.clickfunnels.com/images/closemodal.png"></div>
</div>
<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>
<div class="container noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 midContainer emptySection" id="section-5250310000" data-title="Section" data-block-color="0074C7" style="padding-top: 40px; padding-bottom: 40px; outline: none; background-color: rgb(255, 255, 255);" data-trigger="none" data-animate="fade" data-delay="500">
<div class="containerInner ui-sortable">
<div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin load" id="row-4102110000" data-trigger="load" data-animate="fade" data-delay="500" data-title="1 column row" style="margin-bottom: 0px; outline: none;">
<div id="col-full-784" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column" style="outline: none;">
<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
<div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-77604" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
<img src="//scale.discover360.app/hosted/images/46/136382d3ce4b619129b6ce1c4c02b8/d360-white-1-.svg" class="elIMG ximg" width="200" alt="Discover360.app">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>
<div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll activeSection_topBorder activeSection_bottomBorder radius5 borderLight emptySection load top border1px shadow20 midContainer bgCover" id="section-1031410000" data-title="main download area" data-block-color="0074C7" style="padding-top: 20px; padding-bottom: 40px; margin-top: 0px; border-color: rgba(158, 167, 178, 0.309804); outline: none; background-color: rgba(255, 255, 255, 0.298039);" data-trigger="load" data-animate="top" data-delay="500">
<div class="containerInner ui-sortable" style="padding-left: 30px; padding-right: 30px;">
<div style="outline: none; margin-bottom: 0px;" class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-5277510000" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row">
<div style="outline: none;" id="col-full-381" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column">
<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
<div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-27472" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; outline: none; cursor: pointer;" aria-disabled="false">
<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg" data-src="//scale.discover360.app/hosted/images/40/85f1d0596011e49606834873b28fe0/11-128.png">
</div>
<div style="margin-top: 0px; outline: none; cursor: pointer;" class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-77834" data-de-type="headline" data-de-editing="false" data-title="main headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" aria-disabled="false">
<div class="ne elHeadline elMargin0 elBGStyle0 hsTextShadow0 lh2 hsSize4 elFont_global" style="text-align: center; color: rgb(51, 99, 161);" data-bold="inherit" contenteditable="false">
<b>You're Booked!</b>
</div>
</div>
<div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-23710" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 20px; cursor: pointer; outline: none;" aria-disabled="false">
<div class="ne elHeadline lh3 elMargin0 elBGStyle0 hsTextShadow0 hsSize1" style="text-align: left; color: rgba(47, 47, 47, 0.780392);" data-bold="inherit" contenteditable="false">I sent you an email confirming the date/time. Please mark this in your calendar now. <div><br></div>
<div>Myself, or someone on my team will call you via Zoom or phone at the time that you selected.</div>
<div><br></div>
<div>If you're more than 5-mins late the call will be cancelled and you will not be able to reschedule. </div>
<div>Please make sure you're in a quiet room, no airports, no calls while driving, etc. </div>
<div><br></div>
<div>I look forward to helping you RISE! </div>
<div><br></div>
<div>-Rudy</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="dropZoneForSections ui-droppable" style="display: none;"><div class="dropIconr"><i class="fa fa-plus"></i></div></div>
<style id="link_color_style">a{color:rgb(115,180,252);}</style>
<style id="button_style_tmp_button-86929">#tmp_button-86929 .elButtonFlat:hover{background-color:#378b4f!important;}#tmp_button-86929 .elButtonBottomBorder:hover{background-color:#378b4f!important;}#tmp_button-86929 .elButtonSubtle:hover{background-color:#378b4f!important;}#tmp_button-86929 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(67,168,96)),color-stop(1,#378b4f));background-image:-o-linear-gradient(bottom,rgb(67,168,96) 0%,#378b4f 100%);background-image:-moz-linear-gradient(bottom,rgb(67,168,96) 0%,#378b4f 100%);background-image:-webkit-linear-gradient(bottom,rgb(67,168,96) 0%,#378b4f 100%);background-image:-ms-linear-gradient(bottom,rgb(67,168,96) 0%,#378b4f 100%);background-image:linear-gradient(to bottom,rgb(67,168,96) 0%,#378b4f 100%);}#tmp_button-86929 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(67,168,96)),color-stop(0,#378b4f));background-image:-o-linear-gradient(bottom,rgb(67,168,96) 100%,#378b4f 0%);background-image:-moz-linear-gradient(bottom,rgb(67,168,96) 100%,#378b4f 0%);background-image:-webkit-linear-gradient(bottom,rgb(67,168,96) 100%,#378b4f 0%);background-image:-ms-linear-gradient(bottom,rgb(67,168,96) 100%,#378b4f 0%);background-image:linear-gradient(to bottom,rgb(67,168,96) 100%,#378b4f 0%);}#tmp_button-86929 .elButtonBorder{border:3px solid rgb(67,168,96)!important;color:rgb(67,168,96)!important;}#tmp_button-86929 .elButtonBorder:hover{background-color:rgb(67,168,96)!important;color:#FFF!important;}</style>
<style id="bold_style_tmp_headline1-79906">#tmp_headline1-79906 .elHeadline b{color:rgb(51,99,161);}</style>
<style id="bold_style_headline-79458">#headline-79458 .elHeadline b{color:rgb(81,81,81);}</style>
<style id="button_style_tmp_button-45711-136">#tmp_button-45711-136 .elButtonFlat:hover{background-color:#d38314!important;}#tmp_button-45711-136 .elButtonBottomBorder:hover{background-color:#d38314!important;}#tmp_button-45711-136 .elButtonSubtle:hover{background-color:#d38314!important;}#tmp_button-45711-136 .elButtonGradient{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgb(234,152,38)),color-stop(1,#d38314));background-image:-o-linear-gradient(bottom,rgb(234,152,38) 0%,#d38314 100%);background-image:-moz-linear-gradient(bottom,rgb(234,152,38) 0%,#d38314 100%);background-image:-webkit-linear-gradient(bottom,rgb(234,152,38) 0%,#d38314 100%);background-image:-ms-linear-gradient(bottom,rgb(234,152,38) 0%,#d38314 100%);background-image:linear-gradient(to bottom,rgb(234,152,38) 0%,#d38314 100%);}#tmp_button-45711-136 .elButtonGradient:hover{background-image:-webkit-gradient(linear,left top,left bottom,color-stop(1,rgb(234,152,38)),color-stop(0,#d38314));background-image:-o-linear-gradient(bottom,rgb(234,152,38) 100%,#d38314 0%);background-image:-moz-linear-gradient(bottom,rgb(234,152,38) 100%,#d38314 0%);background-image:-webkit-linear-gradient(bottom,rgb(234,152,38) 100%,#d38314 0%);background-image:-ms-linear-gradient(bottom,rgb(234,152,38) 100%,#d38314 0%);background-image:linear-gradient(to bottom,rgb(234,152,38) 100%,#d38314 0%);}#tmp_button-45711-136 .elButtonBorder{border:3px solid rgb(234,152,38)!important;color:rgb(234,152,38)!important;}#tmp_button-45711-136 .elButtonBorder:hover{background-color:rgb(234,152,38)!important;color:#FFF!important;}</style>
<input type="hidden" name="cf-state-county-dropdown-feature-enabled" value="true">
</div>
<style id="custom-css"></style>
<input type="hidden" value="55635747" id="page-id">
<input type="hidden" value="55635747" id="root-id">
<input type="hidden" value="core" id="variant-check">
<input type="hidden" value="3770351" id="user-id">
<input type="hidden" value="" id="cf-cid">
<input type="hidden" value="false" id="cf-page-oto">
<input type="hidden" value="false" id="ff-can-use-payment-intent-on-funnel-payments">
<script type="text/javascript">
    window.CFAppDomain = "app.clickfunnels.com"
    window.domainIsCFInternal = "false" == "true"
  </script>
<script src="//scale.discover360.app/assets/lander.js"></script>
<div id="fb-root"></div>
<script async>
window.addEventListener('load', function(){
	(function(d, s, id){
	  if($('.fbCommentsPlaceholder').size()>0){
	   var js, fjs = d.getElementsByTagName(s)[0];
	   if (d.getElementById(id)) {return;}
	   js = d.createElement(s); js.id = id;
	   js.src = "https://connect.facebook.net/en_US/sdk.js";
	   fjs.parentNode.insertBefore(js, fjs);
	  }
	 }(document, 'script', 'facebook-jssdk'));
});
 </script>
<script>
  window.cfFacebookInitOptions = {
    appId            : 246441615530259,
    autoLogAppEvents : false,
    status           : true,
    xfbml            : true,
    version          : "v3.3"
  };
  window.fbAsyncInit = function() {
    FB.init(window.cfFacebookInitOptions);
  
    // Iterates over all .fb-comments elements on the page, and renders them using the FB SDK.
    // It only runs if we have not told the FB.init() to render XFBML on page load
    var renderFacebookComments = function(renderXFBMLAtLoadTime) {
      // If we have already marked XFBML to render at page load time, do not proceed.
      if(renderXFBMLAtLoadTime) { return; }
  
      var comments = document.getElementsByClassName('fb-comments');
      var i = 0;
      var len = comments.length;
      var comment = null;
      for(; i < len; i++) {
        comment = comments[i];
        FB.XFBML.parse(comment.parentElement); // comments need to be rendered/parsed from their parent element.
      }
    }
  
    renderFacebookComments(true);
  };
</script>
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
<![endif]-->
<div class="nodoBadge">
<a href="https://www.clickfunnels.com/?aff_sub2=badge&amp;aff_sub=not_paid" target="_blank"><img src="//scale.discover360.app/hosted/images/3d/392630953c4119a324492bb1c05778/ClickfunnelsTag.png" alt="Powered By ClickFunnels.com" onclick="ga('send', 'event', 'Free Badge', 'Click', 'View ClickFunnels.com');" data-lazy-loading="false" style="width: 164px;"></a>
</div>
<form target="_parent" data-cf-form-action="true" action="https://scale.discover360.app/success-v2" method="post" id="cfAR" style="display:none">
<span data-cf-form-fields="true"></span>
<input id="cf_contact_name" name="contact[name]" data-cf-form-field="name" placeholder="name" data-stripe="name">
<input id="cf_contact_first_name" name="contact[first_name]" data-cf-form-field="first_name" placeholder="first_name" data-recurly="first_name">
<input id="cf_contact_last_name" name="contact[last_name]" data-cf-form-field="last_name" placeholder="last_name" data-recurly="last_name">
<input id="cf_contact_email" name="contact[email]" data-cf-form-field="email" placeholder="email">
<input id="cf_contact_phone" name="contact[phone]" data-cf-form-field="phone" placeholder="phone" data-recurly="phone">
<input id="cf_contact_address" name="contact[address]" data-cf-form-field="address" placeholder="address" data-stripe="address_line1" data-recurly="address1">
<input id="cf_contact_city" name="contact[city]" data-cf-form-field="city" placeholder="city" data-stripe="address_city" data-recurly="city">
<input id="cf_contact_state" name="contact[state]" data-cf-form-field="state" placeholder="state" data-stripe="address_state" data-recurly="state">
<input id="cf_contact_country" name="contact[country]" data-cf-form-field="country" placeholder="country" data-stripe="address_country" data-recurly="country">
<input id="cf_contact_zip" name="contact[zip]" data-cf-form-field="zip" placeholder="ZIP" data-stripe="address_zip" data-recurly="postal_code">
<input id="cf_contact_shipping_address" name="contact[shipping_address]" data-cf-form-field="shipping_address" placeholder="shipping_address" data-stripe="shipping_address">
<input id="cf_contact_shipping_city" name="contact[shipping_city]" data-cf-form-field="shipping_city" placeholder="shipping_city" data-stripe="shipping_city">
<input id="cf_contact_shipping_state" name="contact[shipping_state]" data-cf-form-field="shipping_state" placeholder="shipping_state" data-stripe="shipping_state">
<input id="cf_contact_shipping_country" name="contact[shipping_country]" data-cf-form-field="shipping_country" placeholder="shipping_country" data-stripe="shipping_country">
<input id="cf_contact_shipping_zip" name="contact[shipping_zip]" data-cf-form-field="shipping_zip" placeholder="shipping_ZIP" data-stripe="shipping_zip">
<input id="cf_contact_vat_number" name="contact[vat_number]" data-cf-form-field="vat_number" data-recurly="vat_number">
<input id="cf_contact_affiliate_id" name="contact[affiliate_id]" data-cf-form-field="affiliate_id" data-param="affiliate_id">
<input id="cf_contact_cf_affiliate_id" name="contact[cf_affiliate_id]" data-cf-form-field="cf_affiliate_id" data-param="cf_affiliate_id">
<input id="cf_cf_affiliate_id" name="cf_affiliate_id" data-param="cf_affiliate_id">
<input id="cf_contact_affiliate_aff_sub" name="contact[aff_sub]" data-cf-form-field="aff_sub" data-param="aff_sub">
<input id="cf_contact_affiliate_aff_sub2" name="contact[aff_sub2]" data-cf-form-field="aff_sub2" data-param="aff_sub2">
<input id="cf_contact_time_zone" name="time_zone" data-cf-form-field="time_zone" placeholder="time_zone">
<input id="utm_source" name="utm_source" data-cf-form-field="utm_source" data-param="utm_source">
<input id="utm_medium" name="utm_medium" data-cf-form-field="utm_medium" data-param="utm_medium">
<input id="utm_campaign" name="utm_campaign" data-cf-form-field="utm_campaign" data-param="utm_campaign">
<input id="utm_term" name="utm_term" data-cf-form-field="utm_term" data-param="utm_term">
<input id="utm_content" name="utm_content" data-cf-form-field="utm_content" data-param="utm_content">
<input id="cf_uvid" name="cf_uvid" data-cf-form-field="cf_uvid">
<input type="text" name="webinar_delay" id="webinar_delay" placeholder="Webinar Delay">
<span data-cf-product-template="true">
<input type="radio" name="purchase[product_id]" value="" data-storage="false">
<input type="checkbox" name="purchase[product_ids][]" value="" data-storage="false">
</span>
<span data-cf-product-variations-template="true">
<input type="checkbox" class="pvPurchaseProductName" name="purchase[product_variants][][product_id]" value="" data-storage="false">
<input type="checkbox" class="pvPurchaseProductVariantName" name="purchase[product_variants][][product_variant_id]" value="" data-storage="false">
<input type="input" class="pvPurchaseProductVariantQuantity" name="purchase[product_variants][][quantity]" value="" data-storage="false">
</span>
<input id="cf_contact_number" data-stripe="number" data-storage="false" data-recurly="number">
<input id="cf_contact_month" data-stripe="exp-month" data-storage="" data-recurly="month">
<input id="cf_contact_year" data-stripe="exp-year" data-storage="" data-recurly="year">
<input id="cf_contact_month_year" data-stripe="exp" data-storage="">
<input id="cf_contact_cvc" data-stripe="cvc" data-storage="false" data-recurly="cvv">
<input type="hidden" name="purchase[payment_method_nonce]" data-storage="false">
<input type="hidden" name="purchase[order_saas_url]" data-storage="false">
<input type="submit">
<input name="contact[cart_affiliate_id]" value="" type="hidden" style="display:none;" data-param="affiliate">
</form>
<span class="countdown-time" style="display:none;"></span>
<span class="webinar-last-time" style="display:none;"></span>
<span class="webinar-ext" style="display:none;"></span>
<span class="webinar-ot" style="display:none;"></span>
<span class="contact-created" style="display:none;"></span>
<script>
      window.addEventListener('load', function () {
      });
  </script>
<div class="otoloading" style="display: none;">
<div class="otoloadingtext">
<h2>Working...</h2>
<div><i class="fa fa-spinner fa-spin"></i></div>
</div>
</div>
<script type="text/javascript">
    document.createElement('video');document.createElement('audio');document.createElement('track');
  </script>
<style>
    #IntercomDefaultWidget {
      display:none;
    }
    .selectAW-date-demo, .elTicketAddToCalendar, .elTicketAddToCalendarV2 {
      display:none;
    }
    .video-js {
      padding-top:56.25%;
    }
    .vjs-big-play-button,.vjs-control-bar {
      z-index: 10 !important;
    }
    .vjs-fullscreen {
      padding-top:0;
    }
  </style>
<script type="text/html" id="cfx_all_canada">
    <option value="">Select Province</option>
    <option value="">------------------------------</option>
    <option value="AB">Alberta</option>
    <option value="BC">British Columbia</option>
    <option value="MB">Manitoba</option>
    <option value="NB">New Brunswick</option>
    <option value="NL">Newfoundland and Labrador</option>
    <option value="NS">Nova Scotia</option>
    <option value="ON">Ontario</option>
    <option value="PE">Prince Edward Island</option>
    <option value="QC">Quebec</option>
    <option value="SK">Saskatchewan</option>
    <option value="NT">Northwest Territories</option>
    <option value="NU">Nunavut</option>
    <option value="YT">Yukon</option>
</script>
<script type="text/html" id="cfx_all_states">
    <option value="">Select State</option>
    <option value="">------------------------------</option>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District Of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</script>
<script type="text/html" id="cfx_all_countries">
    <option value="">Select Country</option>
    <option value="">------------------------------</option>
    <option value="United States of America">United States</option>
    <option value="Canada">Canada</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="Ireland">Ireland</option>
    <option value="Australia">Australia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="">------------------------------</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antarctica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cote D'ivoire">Cote D'ivoire</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-bissau">Guinea-bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
    <option value="Korea, Republic of">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macao">Macao</option>
    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
    <option value="Moldova, Republic of">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russian Federation">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Helena">Saint Helena</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option value="Saint Lucia">Saint Lucia</option>
    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Timor-leste">Timor-leste</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States">United States</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Viet Nam">Viet Nam</option>
    <option value="Virgin Islands, British">Virgin Islands, British</option>
    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
    <option value="Wallis and Futuna">Wallis and Futuna</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
</script>
<script async>
      var page_key = '1dxxpe3bvz90ptyl';
      var fid = '12303615';
      var fspos = '5';
      var fvrs = '1';
      var cf_tracker = cf_tracker || [];
      (function() {
        cf_key = 'w2xfbpm3';
        page_key = '1dxxpe3bvz90ptyl';
        serverUrl = '//scale.discover360.app/images/background.png';
        var cf = document.createElement('script');
        cf.type = 'text/javascript';
        cf.async = true;
        cf.src = '//scale.discover360.app/vendor.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(cf, s);
      })();
    </script>
<script type="text/javascript">function getURLParameter(e){return decodeURIComponent((RegExp(e+"=(.+?)(&|$)").exec(location.search)||[,null])[1])}function getURLParameterExact(e){for(var t=window.location.search.substring(1).split("&"),n=0;n<t.length;n++){var r=t[n].split("=");if(r[0]==e)return r[1]}}</script><script type="text/javascript">window.addEventListener("load",function(){$(function(){"null"!=getURLParameter("email")&&($('input[name="contact[email]"]').val(getURLParameterExact("email")),$("[name=email]").val(getURLParameterExact("email"))),"null"!=getURLParameter("name")&&($('input[name="contact[name]"]').val(getURLParameterExact("name")),$("[name=name]").val(getURLParameterExact("name"))),"null"!=getURLParameter("first_name")&&($('input[name="contact[first_name]"]').val(getURLParameter("first_name")),$("[name=first_name]").val(getURLParameter("first_name"))),"null"!=getURLParameter("last_name")&&($('input[name="contact[last_name]"]').val(getURLParameter("last_name")),$("[name=last_name]").val(getURLParameter("last_name"))),"null"!=getURLParameter("address_1")&&($('input[name="contact[address_1]"]').val(getURLParameter("address")),$("[name=address_1]").val(getURLParameter("address_1"))),"null"!=getURLParameter("address_2")&&($('input[name="contact[address_1]"]').val(getURLParameter("address")),$("[name=address_2]").val(getURLParameter("address_2"))),"null"!=getURLParameter("city")&&($('input[name="contact[city]"]').val(getURLParameter("city")),$("[name=city]").val(getURLParameter("city"))),"null"!=getURLParameter("state")&&($('input[name="contact[state]"]').val(getURLParameter("state")),$("[name=state]").val(getURLParameter("state"))),"null"!=getURLParameter("zip")&&($('input[name="contact[zip]"]').val(getURLParameter("zip")),$("[name=zip]").val(getURLParameter("zip"))),"null"!=getURLParameter("phone")&&($('input[name="contact[phone]"]').val(getURLParameter("phone")),$("[name=phone]").val(getURLParameter("phone")))})});</script>
<script type="text/javascript" src="//scale.discover360.app/assets/pushcrew.js" async="async"></script><meta name='can_calculate_taxes' content='false'><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"74e9d000b6428f94","token":"405b708a9b0242e88fda34dc27903686","version":"2022.8.1","si":100}' crossorigin="anonymous"></script>
@endsection
