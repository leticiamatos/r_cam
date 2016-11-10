jQuery('.btn_upload').on('click',function(e){
    jQuery('.settings_content').slideDown();
    e.preventDefault();
});

jQuery('.btn_close').on('click',function(e){
    jQuery('.settings_content').slideUp();
    e.preventDefault();
});

jQuery('.popup').on('click',function(e){
    jQuery('.popup').slideUp();
    e.preventDefault();
});

if (jQuery('#snippet').is(":checked")) {
    jQuery('#anonymizeip')[0].checked = false;
    jQuery('#anonymizeip').attr("disabled", true);
}

jQuery('#snippet').change(function () {
    if (this.checked) {
        jQuery('#anonymizeip')[0].checked = false;
        jQuery('#anonymizeip').attr("disabled", true);
    } else {
        jQuery('#anonymizeip').removeAttr("disabled");
    }
});
