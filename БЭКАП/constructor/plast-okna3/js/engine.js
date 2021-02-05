	window.onload = function (){ 
		if(!window.FormData){
			var div = ge('content');
			div.innerHTML = "Ваш браузер не поддерживает объект FormData";
			div.className = 'notSupport'; 
		}
	};


$(document).ready(function (){
	var errorTxt = 'Ошибка отправки';
	$("#sendform").validate({
		submitHandler: function (form){
			var form = document.forms.sendform,
				formData = new FormData(form),
				xhr = new XMLHttpRequest();

			xhr.open("POST", "http://veryline.ru/clients/plast-okna3/send.php");
			
			xhr.onreadystatechange = function (){
				if (xhr.readyState == 4){
					if(xhr.status == 200){
						$("#sendform").html('<p class="thank">Данные отправлены!<p>');
					}
				}
			}; 
		}
	});	
});

function sendSuccess(callback){
	$(callback).find("form").html(thank);
}
