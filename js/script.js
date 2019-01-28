$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
// function validateForm(){
// 	var x =document.forms["connectForm"]["usr"].value;
// 	if (x == "") {
//     alert("Name must be filled out");
//     return false;
//   }
// }
// $("connectForm").submit(function(){
//   alert("Submitted");
// });