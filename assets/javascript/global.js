$(window).load(function() {
	$('.flexslider').flexslider({
		directionNav: false,
		controlNav: false
	});
});
$(document).ready(function(){
	$('#loginframe').modal({show: false});
});
$(document).ready(function(){
    $("#show-reply").click(function(){
        $(".new-post").show();
        $("#show-reply").hide();
    });   
    $("#submit-comment").click(function(){
        // ajax submit the comment to the server, add it, hide the field and show the Add reply button
        var articleID = window.location.pathname.split("/");
        var request = $.ajax({
            url: window.baseUrl + "index.php/ajax/submitcomment",
            type: "POST",
            data: {text: $("#comment-ta").val(), type: 0x1, id: articleID[articleID.length-1]}
            });
            
        request.done(function(msg){
            if(msg == 0x01)
            {
                $("#show-reply").show();
                $(".new-post").hide();
            }
            else if(msg == 0x02 || msg == 0x03)
            {
                alert("There was an error with submiting your comment, please try again later");
            }
        });
    });
});

$(document).ready(function(){
    $("#realmID").change(function(){
        var request = $.ajax({
            url: window.baseUrl + "index.php/ajax/realminfo",
            type: "POST",
            data: {id: $("#realmID").val()}
        });
        
        request.done(function(result){
            $("#world-server-status").html(result);
        });
        
        request.error(function(jqXHR, textStatus, errorThrown){
            alert("There was an error with selecting the realm. Please try again later");
        });
    });
});