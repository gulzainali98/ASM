$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
	$(".login-form").onsubmit=doAction();
	
});
function doAction(){
	location.href('boards.html');
}