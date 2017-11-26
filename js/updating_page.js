$( "#update" ).click(function() {
    $.ajax({
        type: "POST",
        url: "/messages/showAll",
        success: function() {
            location.reload();
        }
    });
});