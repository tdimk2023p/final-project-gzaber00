
function on() {
document.getElementById("overlay").style.display = "block";
}

function off() {
document.getElementById("overlay").style.display = "none";
}
  Swal.fire({
	title: "Bantu Pulangkan Kucingku!",
	customClass: 'swal-wide',
	text: "Bantu aku untuk memulangkan kucingku dengan cara menyeret kartu kucing (Seret kartu untuk mengisi survey)",
	imageUrl: "./assets/img/guide.gif",
	imageWidth: 800,
	imageHeight: 400,
	backdrop: `
		rgba(10,10,10,0.7)
		url("./assets/img/huohuo.png")
		left top
		no-repeat
	`
});
$('.btn-next').on('click', function() {
	
	var currentStepNum = $('#checkout-progress').data('current-step');
	var nextStepNum = (currentStepNum + 1);
	var currentStep = $('.step.step-' + currentStepNum);
	var nextStep = $('.step.step-' + nextStepNum);
	var progressBar = $('#checkout-progress');
	$('.btn-prev').removeClass('disabled');
	$('#section'+currentStepNum).toggle();
	$('#section'+nextStepNum).toggle();
	if(nextStepNum == 10) {
		$(this).toggle();
		$('.btn-submit').toggle();
	}
	/*if(nextStepNum == 5){
		$(this).addClass('disabled');
	}*/
	$('.checkout-progress').removeClass('.step-' + currentStepNum).addClass('.step-' + (currentStepNum + 1));
	
	currentStep.removeClass('active').addClass('valid');
	currentStep.find('span').addClass('opaque');
	currentStep.find('.fa.fa-check').removeClass('opaque');
	
	nextStep.addClass('active');
	progressBar.removeAttr('class').addClass('step-' + nextStepNum).data('current-step', nextStepNum);
});

$('.btn-submit').on('click',function(){
	on();
	
	if(Cookies.get('skor') == '10'){
		Cookies.set('chest_key', 1);
		Cookies.set('survey_done', 1);
	}else{
		Cookies.set('chest_key', 0);
	}
	$('.btn-submit').toggle('disabled');
	$('.btn-prev').toggle();
	var currentStepNum = $('#checkout-progress').data('current-step');
	var currentStep = $('.step.step-' + currentStepNum);
	currentStep.removeClass('active').addClass('valid');
	currentStep.find('.fa.fa-check').removeClass('opaque');
	setTimeout(function() { 
        window.location.href = "./";
    }, 3000);
	
});

$('.btn-prev').on('click', function() {
	
	var currentStepNum = $('#checkout-progress').data('current-step');
	var prevStepNum = (currentStepNum - 1);
	var currentStep = $('.step.step-' + currentStepNum);
	var prevStep = $('.step.step-' + prevStepNum);
	var progressBar = $('#checkout-progress');
	$('.btn-next').removeClass('disabled');
	$('#section'+currentStepNum).toggle();
	$('#section'+prevStepNum).toggle();
	if(currentStepNum == 10){
		$('.btn-submit').toggle();
		$('.btn-next').toggle();
	}
	if(currentStepNum == 1) {
		return false;
	}
	if(prevStepNum == 1){
		$(this).addClass('disabled');
	}
	$('.checkout-progress').removeClass('.step-' + currentStepNum).addClass('.step-' + (prevStepNum));
	
	currentStep.removeClass('active');
	prevStep.find('span').removeClass('opaque');
	prevStep.find('.fa.fa-check').addClass('opaque');
	
	prevStep.addClass('active').removeClass('valid');
	progressBar.removeAttr('class').addClass('step-' + prevStepNum).data('current-step', prevStepNum);
});