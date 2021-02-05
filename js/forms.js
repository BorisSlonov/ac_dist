$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

/* $('#cost-form').submit(function (e) {
    e.preventDefault();
    var $this=$(this);
    var contact=$this.find('[name=contact]').val();
    var name=$this.find('[name=name]').val();
    var text=$this.find('[name=text]').val();
    var formData=new FormData(this);
    var files=$this.find('input[type=file]').prop('files');
    formData.delete('file');
    formData.append('type',$this.attr('type'));
    $.each(files,function(i,item){
        formData.append(i,item);
    });

    $.ajax({
        type:'post',
        data:formData,
        cache:false,
        contentType: false,
        processData: false
    }).done(function (response) {
        //show_success();
        $.jGrowl("Форма отправлена", {
            theme:'notification-success'
        });
    });
}); */

$('.appeal-form-submit').click(function (e) {
	e.preventDefault();
	var $this = $(this).closest('.cost-form-inner');
	var contact = $this.find('[name=contact]').val();
	$this.find('[name=contact]').val('');
	var name = $this.find('[name=name]').val();
	$this.find('[name=name]').val('');
	var text = $this.find('[name=description]').val();
	$this.find('[name=description]').val('');
	var formData = new FormData();
	$this.find( 'label span' ).removeClass('is_file');
	$this.find( 'label span' ).html('Прикрепить файл');
	var files = $this.find('input[type=file]')[0].files;
	formData.append('type', $this.attr('type'));
	formData.append('contact', contact);
	formData.append('name', name);
	formData.append('text', text);
	$.each(files, function (i, item) {
		formData.append(i, item);
	});

	$.ajax({
		type: 'post',
		data: formData,
		dataType: 'json',
		cache: false,
		contentType: false,
		processData: false,
		success: function(data){
			if(data.status==='ok') {
				alert("Спасибо! Ваше сообщение отправлено");
				$('.pp_req_close').click();
			}
		}
	});
});

$(document).on('click', 'button[name=delete_form]', function (e) {
	e.preventDefault();
	console.log('delete');
	var $this = $(this);
	$.ajax({
		type: 'post',
		data: {id: $this.attr('form_id'), what: 'delete'}
	}).done(function (response) {
		console.log('delete ok');
		$this.closest('div[name=form_container]').remove();
	});
});


/*
 $(document).on('click','a[name=download_files]',function (e) {
 e.preventDefault();
 console.log('download');
 var $this=$(this);
 $.ajax({
 type:'post',
 data:{id:$this.attr('form_id'),what:'download'}
 }).done(function (response) {
 //console.log(response);
 window.location=response;
 });
 });*/

 
