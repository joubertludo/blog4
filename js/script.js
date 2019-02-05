$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
// function validateForm(){
// 	var needs-validation =document.forms["connectForm"]["usr"].value;
// 	if (x == "") {
//     alert("Name must be filled out");
//     return false;
//   }
// }
// $("connectForm").submit(function(){
//   alert("Submitted");
// });
function validateForm(){
	var signForm=$('.needs-validation');
	var pass1=$('#inputPassword1').val();
	var pass2=$('#inputPassword2').val();
	if (pass1!=pass2){
		$('.result').html("Mots de passe différents");
		return false;
	}


}
function validateEmptyPost(){
	if ($('#title').val()=='' || $('#categorie')==''){
		$('.result').html("Veuillez compléter les champs vides.");
		return false;
	}
}
 // 