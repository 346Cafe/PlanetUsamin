$(function(){
	$(".form-control").keyup(function(){
		if(checkValiedMail($("#mail").val())){
			changeBorderColor("#mail", "success");
		}else{
			if($("#mail").val() == ""){
				changeBorderColor("#mail", "secondary");
			}else{
				changeBorderColor("#mail", "danger");
			}
		}

		if($("#content").val() != ""){
			changeBorderColor("#content", "success");
		}else{
			changeBorderColor("#content", "secondary");
		}
			
		if(checkValiedMail($("#mail").val()) && $("#content").val() != ""){
			$("#submit").removeClass("btn-secondary");
			$("#submit").addClass("btn-primary");
			$("#submit").removeAttr("disabled");
		}else{
			$("#submit").attr("disabled", "disabled");
			$("#submit").addClass("btn-secondary");
		}
	});
});

function checkValiedMail(str){
	var match = /[!#-9A-~]+@+[a-z0-9]+.+[^.]$/i;
	if(str != ""){
		if(str.match(match)){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

function changeBorderColor(id, color){
	$(id).removeClass("border-secondary");
	$(id).removeClass("border-success");
	$(id).removeClass("border-danger");

	$(id).addClass("border-" + color);
}