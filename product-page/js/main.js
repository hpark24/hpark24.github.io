$(document).ready(function() {
    $(".success-response p").hide();
    
    $(".email-form").each(function (){
        var selectedForm = $(this);
        
        console.log(selectedForm);
        selectedForm.submit(
            function(event) {
                var formData = $(this).serialize();
                
                // console.log(formData);
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
                    // selectedForm.parent().children(".success-response").children("p").delay(3200).hide(300);
                }).fail(function(data) {
                    // alert(JSON.parse(data.responseText).email[0]);
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
                
                console.log(formData);
                
                $.ajax({
                    type: "GET",
                    url: 'https://secure.shippingapis.com/ShippingAPI.dll?API=TrackV2&XML=<TrackRequest USERID="849PRATT1002"><TrackID ID="9400111899223130473898"></TrackID></TrackRequest>',
                    data: formData,
                    dataType: "xml"
                }).done(function(data) {
                    console.log(data);
                }).fail(function(data) {
                });
                
                event.preventDefault();
            });
            
    // $("footer form").submit(
    //         function(event) {
    //             var formData = $(this).serialize();
                
    //             $.ajax({
    //                 type: "POST",
    //                 url: "https://web2-product-page.herokuapp.com/subscribers",
    //                 data: formData,
    //                 dataType: "json"
    //             }).done(function(data) {
    //                 console.log(data.email);
    //                 $("footer form input[type='text']").val("");
    //                 $("#response-footer > h4").show(300).text("We receive your address. Thank you!");
    //                 $("#response-footer > h4").delay(3200).hide(300);
    //             }).fail(function(data) {
    //                 alert(JSON.parse(data.responseText).email[0]);
    //             });
                
    //             event.preventDefault();
    //         });
});