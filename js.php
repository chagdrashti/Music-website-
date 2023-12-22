jQuery(function($) {TeamModuleInitialize();});function TeamModuleInitialize() {$( document ).on( 's123.page.ready', function( event ) {var $section = $('section.s123-module-team:not(.layout-9)');$section.each(function( index ) {var $sectionThis = $(this);$sectionThis.find('.team-phone-btn').click(function() {var $this = $(this);var $teamPhone = $this.closest('.team-phone');buildPopup('teamPopupFloatDivPhone','',$teamPhone.find('.team-phone-popover').html(),'',true,true,true,'','');});var categories = new ModuleLayoutCategories({$items :  $sectionThis.find('.team-category'),$categoriesContainer : $sectionThis.find('.categories-panel'),$filterButton : $sectionThis.find('.items-responsive-filter'),$categories : $sectionThis.find('.items-categories-container li')});});});}jQuery(function($) {TeamModuleInitialize_Layout9();});function TeamModuleInitialize_Layout9() {$( document ).on( 's123.page.ready', function( event ) {var $section = $('section.s123-module-team.layout-9');$section.each(function( index ) {var $sectionThis = $(this);$section.off('module_layout_categories.shown').on('module_layout_categories.shown', function( event, catID ) {var $category = $(this).find('.team-category[data-categories-filter="'+catID+'"]');var numberImagesInRow = getSlidesPerView($category);var spaceBetween = 30;var highestMember = 0;if ( numberImagesInRow == 0 ) {$category.find('.owl-carousel').addClass('manually-loaded');$category.find('.team-member-wrap').css({height: ''});initializeTeamPhone($sectionThis);return;}
if ( $category.find('.owl-carousel').hasClass('owl-loaded') ) return;$category.find('.team-member-wrap').css({height: ''});$category.find('.team-member-wrap').each(function() {if ( $(this).height() > highestMember ) {highestMember = $(this).height();}});if ( findBootstrapEnvironment()  === 'xs' ) {$category.find('.team-member-wrap').css({height: (highestMember + spaceBetween) + 'px'});} else {$category.find('.team-member-wrap').css({height: highestMember + 'px'});}
$category.find('.owl-carousel').owlCarousel({items: numberImagesInRow,autoplay: false,autoplayTimeout: 0,center: true,dots: $category.find('.owl-carousel').data('item-count') > 7 ? false : true,dotsEach: (numberImagesInRow % 2 == 1 ? true : false),margin: spaceBetween,loop: true,lazyLoad: true,stagePadding: 50,rtl: $('html').attr('dir') == 'rtl',responsive: {0: {items: 1},479: {items: 1},768: {items: 1},979: {items: 3},1199: {items: 3}},onInitialize: function() {initializeTeamPhone($sectionThis);window.myLazyLoad.update();},onResize: function() {window.myLazyLoad.update();},onDrag: function() {window.myLazyLoad.update();},onLoadLazy: function() {window.myLazyLoad.update();}});});if ( $sectionThis.find('.team-category[data-categories-filter="s123-g-show-all"]').length > 0 ) {$sectionThis.trigger('module_layout_categories.shown',['s123-g-show-all']);}
var categories = new ModuleLayoutCategories({$items :  $sectionThis.find('.team-category'),$categoriesContainer : $sectionThis.find('.categories-panel'),$filterButton : $sectionThis.find('.items-responsive-filter'),$categories : $sectionThis.find('.items-categories-container li')});});function initializeTeamPhone( $teamSection ) {$teamSection.off('click.initializeTeamPhone').on('click.initializeTeamPhone','.team-phone-btn', function() {var $teamPhone = $(this).closest('.team-phone');buildPopup('teamPopupFloatDivPhone','',$teamPhone.find('.team-phone-popover').html(),'',true,true,true,'','');})}});function getSlidesPerView( $category ) {var slidesPerView = 3.3;var originalItems = [];$category.find('.team-member').each(function() {if ( !$(this).closest('.owl-item').hasClass('cloned') ) {originalItems.push($(this));}});switch( findBootstrapEnvironment() ) {case 'xs':case 'sm':slidesPerView = originalItems.length < 2 ? 0 : 1;break;default:slidesPerView = originalItems.length <= 3 ? 0 : 3;break;}
return slidesPerView;}
if ( IsWizard() ) {$(document).on('wizard.preview.device.changed', function( event ) {var $section = $('section.s123-module-team.layout-9');$section.each(function( index ) {var $sectionThis = $(this);var $category = $sectionThis.find('.team-category').filter(':visible');var $carousel = $category.find('.owl-carousel');$carousel.trigger('destroy.owl.carousel');$carousel.removeClass('owl-loaded owl-carousel-init manually-loaded');$sectionThis.trigger('module_layout_categories.shown',[$category.data('categories-filter')]);});});}}jQuery(function($) {headersModuleInitialize_Layout();});function headersModuleInitialize_Layout() {$( document ).on( "s123.page.ready", function( event ) {var $sections = $('section.s123-module-headers:is(.layout-6,.layout-7,.layout-8,.layout-9,.layout-18,.layout-20,.layout-22,.layout-23,.layout-24,.layout-25,.layout-26,.layout-27,.layout-29,.layout-30,.layout-35,.layout-39,.layout-40)');$sections.each(function( index ) {var $s = $(this);var $carousel = $s.find('[data-ride="carousel"]');var sliderSpeed = $s.data('slider-speed');if ( sliderSpeed == '' || parseInt(sliderSpeed) < 1 || parseInt(sliderSpeed) > 21 ) {sliderSpeed = 5000;} else {sliderSpeed = parseInt(sliderSpeed) * 1000;}
if( $s.hasClass('layout-20') ) {var $firstImage = $s.find('.headers-image').first();if ( $firstImage.length > 0 ) {var img = new Image();img.src = $firstImage.data('bg');img.onload = function() {var aspectRatio = this.width / this.height;$s.find('.headers-image').css('aspect-ratio',String(aspectRatio));if( $s.find('.headers-container').hasClass('circle-under-image') && aspectRatio < 1 ) {$s.addClass('corner-circle');}};}}
if( $s.hasClass('layout-22') || $s.hasClass('layout-29') ) {var $headersDescription = $s.find('.headers-description');var $headersimage = $s.find('.headers-image');if ( $headersimage.length > 0 && $headersDescription.length > 0 ) {if ( ($headersDescription.get(0).offsetHeight - 60) > $headersimage.get(0).offsetHeight ) {$s.get(0).style.setProperty('--headers-description-height',$headersDescription.get(0).offsetHeight+'px');}}}
$carousel.carousel({interval: sliderSpeed});});});}jQuery(function($) {HeadersModuleInitialize_Layout5();});function HeadersModuleInitialize_Layout5() {$( document ).on( 's123.page.ready', function( event ) {var $section = $('section.s123-module-headers.layout-5');$section.each(function( index ) {var $sectionThis = $(this);var $flickityContainer = $sectionThis.find('.carousel');var originalFirstImageSize = {};if ( $flickityContainer.length === 0 ) return;$flickityContainer.flickity({imagesLoaded: true,lazyLoad: 2,pageDots: false,wrapAround: true,percentPosition: false});});});}jQuery(function($) {HeadersModuleInitialize_Layout30();});function HeadersModuleInitialize_Layout30() {$( document ).on( 's123.page.ready', function( event ) {var $section = $('section.s123-module-headers.layout-30');$section.each(function( index ) {var $sectionThis = $(this);$sectionThis.find('.contactUsForm').each( function( index ) {var $form = $(this);var customFormMultiSteps = new CustomFormMultiSteps();customFormMultiSteps.init({$form: $form,$nextButton: $form.find('.next-form-btn'),$submitButton: $form.find('.submit-form-btn'),$previousButton: $form.find('.previous-form-btn'),totalSteps: $form.find('.custom-form-steps').data('total-steps')});var forms_GoogleRecaptcha = new Forms_GoogleRecaptcha();forms_GoogleRecaptcha.init($form);$form.validate({errorElement: 'div',errorClass: 'help-block',focusInvalid: true,ignore: ':hidden:not(.custom-form-step:visible input[name^="datePicker-"])',highlight: function (e) {$(e).closest('.form-group').removeClass('has-info').addClass('has-error');},success: function (e) {$(e).closest('.form-group').removeClass('has-error');$(e).remove();},errorPlacement: function (error, element) {if( element.is('input[type=checkbox]') || element.is('input[type=radio]') ) {var controls = element.closest('div[class*="col-"]');if( controls.find(':checkbox,:radio').length > 0 ) element.closest('.form-group').append(error);else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));}
else if( element.is('.select2') ) {error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));}
else if( element.is('.chosen-select') ) {error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));}
else {error.appendTo(element.closest('.form-group'));}},submitHandler: function( form ) {var $form = $(form);var clickAction = $form.data('click-action');$form.append($('<div class="conv-code-container"></div>'));var $convCodeContainer = $form.find('.conv-code-container');var thankYouMessage = translations.ThankYouAfterSubmmit;if ( $form.data('thanks-msg') ) {thankYouMessage = $form.data('thanks-msg');}
$form.find('button:submit').prop('disabled', true);S123.ButtonLoading.start($form.find('button:submit'));var url = "/versions/"+$('#versionNUM').val()+"/include/contactO.php";if ( $form.hasClass('custom-form') || $form.hasClass('horizontal-custom-form') ) {if ( !CustomForm_IsLastStep( $form ) ) {$form.find('.next-form-btn:visible').trigger('click');S123.ButtonLoading.stop($form.find('button:submit'));$form.find('button:submit').prop('disabled', false);return false;}
if ( !CustomForm_IsFillOutAtLeastOneField($form) ) {bootbox.alert(translations.fillOutAtLeastOneField);S123.ButtonLoading.stop($form.find('button:submit'));$form.find('button:submit').prop('disabled', false);return false;}
url = "/versions/"+$('#versionNUM').val()+"/include/customFormO.php";}
if ( forms_GoogleRecaptcha.isActive && !forms_GoogleRecaptcha.isGotToken ) {forms_GoogleRecaptcha.getToken();return false;}
$.ajax({type: "POST",url: url,data: $form.serialize(),success: function( data ) {var dataObj = jQuery.parseJSON(data);$form.trigger("reset");if ( clickAction == 'thankYouMessage' || clickAction == '' ) {bootbox.alert({title: translations.sent,message: thankYouMessage+'<iframe src="/versions/'+$('#versionNUM').val()+'/include/contactSentO.php?w='+$('#w').val()+'&websiteID='+dataObj.websiteID+'&moduleID='+dataObj.moduleID+'" style="width:100%;height:30px;" frameborder="0"></iframe>',className: 'contactUsConfirm',buttons: {ok: {label: translations.Ok}},backdrop: true});} else {if ( dataObj.conv_code.length > 0 ) {var $convCode = $('<div>' + dataObj.conv_code + '</div>');$convCodeContainer.html($convCode.text());}
if( top.$('#websitePreviewIframe').length ) {bootbox.alert({title: translations.previewExternalLinkTitle,message: translations.previewExternalLinkMsg.replace('{{externalLink}}','<b>'+dataObj.action.url+'</b>'),className: 'externalAlert'});} else {window.open(dataObj.action.url,'_self');}}
customFormMultiSteps.reset();forms_GoogleRecaptcha.reset();S123.ButtonLoading.stop($form.find('button:submit'));$form.find('button:submit').prop('disabled', false);WizardNotificationUpdate();}});return false;}});$form.find('.f-b-date-timePicker').each( function() {var $option = $(this);var $datePicker = $option.find('.fake-input.date-time-picker');var $hiddenInput = $option.find('[data-id="'+$datePicker.data('related-id')+'"]');var $datePickerIcon = $option.find('.f-b-date-timePicker-icon');var formBuilderCalendar = new calendar_handler();$datePicker.data('date-format',$form.data('date-format'));formBuilderCalendar.init({$fakeInput: $datePicker,$hiddenInput: $hiddenInput,$fakeInputIcon: $datePickerIcon,type: 'datePicker',title: translations.chooseDate,calendarSettings: {format: $datePicker.data('date-format'),weekStart: 0,todayBtn: "linked",clearBtn: false,language: languageCode,todayHighlight: true},onSubmit: function( selectedDate ) {$datePicker.html(selectedDate);$hiddenInput.val(selectedDate);}});});CustomForm_DisableTwoColumns($form);});});});}