$(document).ready(()=>registerSetup());

function registerSetup(){
    const form = $('.register-form');
    const formContainer = $(form).parent();
    const formWrap = $(formContainer).parent();
    const dismissBtn = $(formContainer).children('.dismiss');

    // enable showing and hiding of form modal
    const modalTrigger = $("#openForm");
    // toggle the form on and off
    $(modalTrigger).click(()=>{
        if($(formWrap).hasClass('show')){
            $(formContainer).removeClass('show');
            setTimeout(()=>{$(formWrap).removeClass('show');}, 100);
        } else {
            $(formWrap).addClass('show');
            setTimeout(()=>{$(formContainer).addClass('show');}, 100);
        }
    });
    // enable hiding of modal from clicks outside it
    $(dismissBtn).click(function(e){
        setTimeout(()=>{$(formWrap).removeClass('show');}, 100);
        $(formContainer).removeClass('show');
    })


    // add listener
    $(form).submit(function(e){
        e.preventDefault();
        // this object I'm creating is what I'll be sending through ajax
        // the function is defined in another js script
        const formDataObj = getFormDataAsOject(this);
        formDataObj.route = $(this).attr('data-route');

        console.log(formDataObj);


        // show user processing status
        const statusElem = $(this).find('.status');
        $(statusElem).addClass('show');
        $(statusElem).find('.message').html("Registering...");

        // register(formDataObj);
    });
}

function register(formData){
    // show user an update on request
    const statusElem = $("form#register").find('.status');
    $(statusElem).addClass('show');
    $(statusElem).find('.message').html("Registering...");

        // send the ajax request
    $.post(formData.route,
        {
            _token: formData._token[0],
            name: formData.name,
            email: formData.email
        }
    ).done((data, status)=>{
        console.log(data);
        // if user successfully signs up
        if(status=='success'){
            // flast to user that process was done
            $(statusElem).find('.message').html("Registered, redirecting...");
            // redirect to the hop link... pasted it here because of some weird error
            window.location.href = data;
        }
    })
    .fail(( jqXHR, status )=>{
        console.log(jqXHR);

        const error = JSON.parse(jqXHR.responseText);
        $(statusElem).find('.message').html('<p>'+error.message+'</p> <p>'+JSON.stringify(error.errors)+'</p>');
    });
}
