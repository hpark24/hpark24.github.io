$(document).ready(function() {
    $(".success-response p").hide();
    
    $(".email-form").each(function (){
        var selectedForm = $(this);
        
        selectedForm.submit(
            function(event) {
                var formData = $(this).serialize();
                
                $.ajax({
                    type: "POST",
                    url: "https://web2-product-page.herokuapp.com/subscribers",
                    data: formData,
                    dataType: "json"
                }).done(function(data) {
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
                var uspsUrl = 'https://secure.shippingapis.com/ShippingAPI.dll?API=TrackV2&XML=<TrackRequest USERID="849PRATT1002"><TrackID ID="' + formData[0].value + '"></TrackID></TrackRequest>';
                var proxy = "https://cors-anywhere.herokuapp.com/";
                
                $.ajax({
                    type: "GET",
                    url: proxy + uspsUrl,
                    dataType: "text",
                    header: ""
                }).done(function(data) {
                    $xml = $( $.parseXML(data) );
                    
                    var isInvalid = $xml.find("TrackSummary")[0].innerHTML;
                    
                    invalidSummary = "The Postal Service could not locate the tracking information for your request. Please verify your tracking number and try again later.";
                    
                    if ( isInvalid.valueOf() != invalidSummary.valueOf()  ) {
                        $("#usps-form form").children("form input[type='text']").val("");
                        $("#usps-form form").parent().children(".success-response").children("p").hide();
                        
                        $("#box-in-app").slideUp(800,
                            function () {
                                $("#progress-bar").css( { width: "22px" } );
                                
                                trackId = $xml.find("TrackInfo")[0].attributes[0].nodeValue;
                    
                                trackDetailArray = $xml.find("TrackDetail");
                                trackDetailNum = $xml.find("TrackDetail").length - 1;
                    
                                trackStartDateArray = trackDetailArray[trackDetailNum].innerHTML.split(", ");
                                trackEndDateArray = trackDetailArray[0].innerHTML.split(", ");
                    
                                trackStartDate = trackStartDateArray[1] + " " + trackStartDateArray[2];
                                trackEndDate = trackEndDateArray[1] + " " + trackEndDateArray[2];
                    
                                $("#package-id").text(trackId);
                                $("#package-start").text(trackStartDate);
                                $("#package-end").text(trackEndDate);
                                $("#progress-bar").animate( { width: "348px" } , 1200, "swing");
                        
                                $("#box-in-app").slideDown(800, "swing");
                            }
                        );
                    } else {
                        $("#usps-form form").parent().children(".success-response").children("p").addClass("error-red").text("Sorry. We canno locate your tracking information").show();
                    }
                });
                
                event.preventDefault();
            });
});