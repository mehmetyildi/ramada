jQuery('.popup img').click(function(event){

    event.stopPropagation();
});
jQuery(document).keydown(function(e){
    if (e.keyCode === 27){ 
        jQuery('.popup').fadeOut(300);
       
    }
});

jQuery('.popup').click(function(){
    jQuery('.popup').fadeOut(300);
});