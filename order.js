$(document).ready('function')() ;{
    $('#order').click(function () { })(event); {
        event.preventDefault();
        //fetch data from form
        var food = $('food-name').val();
        var number = $('food-units').val();
        alert("This feature is coming soon");
        //construct and send http request,url,body,header(custom),method
        // $.ajax({
        //     url: "api.foodapi.com/order",
        //     type: "post",
        //     header:{
        //         "api-key":"Ddsishfkjnvvvdnfjnjjv778"
        //     },
        //     data:{
        //         "food": food,
        //         "units": units,
        //     },
        //     success: function(data){
        //         //process data
        //     },
        //     error:  function(error){
        //         alert("Error occurred");
        //     },
        // })
    };
}