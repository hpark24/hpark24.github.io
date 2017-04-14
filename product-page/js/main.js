$(document).ready(function() {
    $("header form").submit(
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
                    $("header form input[type='text']").val("");
                }).fail(function(data) {
                    alert(JSON.parse(data.responseText).email[0]);
                });
                
                event.preventDefault();
            });
            
    $("#ups-form form").submit(
            function(event) {
                var formData = $(this).serializeArray();
                
                // $("#try-it-out h2").text(formData[0].value);
                
                console.log(formData);
                
                event.preventDefault();
            });
            
    $("footer form").submit(
            function(event) {
                var formData = $(this).serialize();
                
                $.ajax({
                    type: "POST",
                    url: "https://web2-product-page.herokuapp.com/subscribers",
                    data: formData,
                    dataType: "json"
                }).done(function(data) {
                    console.log(data.email);
                    $("header form input[type='text']").val("");
                }).fail(function(data) {
                    alert(JSON.parse(data.responseText).email[0]);
                });
                
                event.preventDefault();
            });
});