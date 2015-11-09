
$(document).ready(function(){
    $(".delete").click(function(){
        $.ajax({
            type: "POST",
            url: "delete.php", //Relative or absolute path to response.php file
            data: {
                id: $(this).attr("name")
            },
            success: function(data) {
                console.log(data);
            }
        });
        $(this).parent().parent().remove();
    });
});
