@extends('layout.layout')

@section('content')
<style>
      .paused-account-modal{display:block;position:fixed;z-index:999;padding-top:100px;left:0;top:0;width:100%;height:100%;background-color:#000;background-color:rgba(0,0,0,.6)}.paused-account-modal .paused-account-modal-content{background-color:#fefefe;margin:auto;padding:20px;width:500px;height:320px;border-radius:10px;text-align:center}.paused-account-modal .paused-account-modal-content img.paused-account-modal-image{margin-top:30px}.paused-account-modal .paused-account-modal-content .paused-account-modal-create-funnels{margin-top:35px;font-size:20px;color:#435569;font-weight:700}.paused-account-modal .paused-account-modal-content .paused-account-modal-your-page{font-size:12px;color:#435569}.paused-account-modal .paused-account-modal-content .paused-account-modal-learn-more{margin-top:55px}.paused-account-modal .paused-account-modal-content .paused-account-modal-learn-more a{color:#432811!important;border-color:#cc9818;background-color:#ffcb0e!important;border:1px solid #d4d4d4;border-radius:5px;padding:10px;text-decoration:none}.paused-account-modal .paused-account-modal-content .paused-account-modal-learn-more a:hover{cursor:pointer}
    </style>
    <div class="row mx-auto">
    <div class="de de-image-block elMargin0 ui-droppable elAlign_center de-editable" id="tmp_image-23739" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="outline: none; cursor: pointer; margin-top: 0px;" aria-disabled="false">
<img src="//scale.discover360.app/hosted/images/46/136382d3ce4b619129b6ce1c4c02b8/d360-white-1-.svg" class="elIMG ximg" width="200" data-lazy-loading="false" alt="Discover360" tabindex="0">
</div>
    </div>
    <div class="row mx-auto">    
<div class="d-flex justify-content-center" >
<a href="{{ route('schedule') }}">
<div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="tmp_button-24234" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="max-width:500px; margin: 15px auto; outline: none; cursor: pointer; font-family: Oswald, Helvetica, sans-serif !important;" aria-disabled="false" data-elbuttontype="1" data-google-font="Oswald">

<button type="submit" style="background: blue; border: none; display: block; width: 100%; padding: 10px; color: white;font-size: 18px;" class="elButtonMain">
Schedule Event
</button>
</a>        
</div>
        
         </div>
    </div>
@endsection