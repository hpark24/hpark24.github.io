$(document).ready(function() {
    $.support.cors = true;
    
    $(".success-response p").hide();
    
    $(".email-form").each(function (){
        var selectedForm = $(this);
        
        console.log(selectedForm);
        selectedForm.submit(
            function(event) {
                var formData = $(this).serialize();
                
                $.ajax({
                    type: "POST",
                    url: "https://web2-product-page.herokuapp.com/subscribers",
                    data: formData,
                    dataType: "json"
                }).done(function(data) {
                    console.log(data.email);
                    selectedForm.children("form input[type='text']").val("");
                    selectedForm.parent().children(".success-response").children("p").hide();
                    selectedForm.parent().children(".success-response").children("p").text("We receive your address. Thank you!").removeClass("error-red").show(300).delay(3200).hide(300);
                }).fail(function(data) {
                    var errorMsg = JSON.parse(data.responseText).email[0];
                    selectedForm.parent().children(".success-response").children("p").addClass("error-red").text(errorMsg).show();
                });
                
                event.preventDefault();
            });
    });
            
            
            
    $("#usps-form form").submit(
            function(event) {
                var formData = $(this).serializeArray();
                
                // $("#try-it-out h2").text(formData[0].value);
                
                // console.log(formData[0].value);
                
                var uspsUrl = 'https://secure.shippingapis.com/ShippingAPI.dll?API=TrackV2&XML=<TrackRequest USERID="849PRATT1002"><TrackID ID="' + formData[0].value + '"></TrackID></TrackRequest>';
                
                console.log(uspsUrl);
                
                $.ajax({
                    type: "GET",
                    url: uspsUrl,
                    data: formData,
                    dataType: "xml",
                    crossDomain: true,
                    xhrFields: {withCredentials: false}
                }).done(function(data) {
                    console.log(data);
                }).fail(function(data) {
                });
                
                event.preventDefault();
            });
});