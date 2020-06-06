$(document).ready(()=>formStatus());


const formStatus = ()=>{
    // get all form statuses
    const elem = $('form').find('.status');
    const dismiss = $(elem).find('.dismiss');
    $(dismiss).click(function(){
        const clicked = $(this).parent();
        // hide it
        $(clicked).removeClass('show');
    });
}