$(document).ready(function(){
	$('#menuAtivar').click(function(){
		$('.menu').stop().slideToggle();	
	});
		
	$(window).scroll(function(){
		if($(this).scrollTop() > 280){
			$('.voltarAoTopo').stop().animate({
				'bottom':'30px'	
			}, 2000, 'easeOutElastic');	
		}else{
			$('.voltarAoTopo').stop().animate({
				'bottom':'-100px'	
			}, 200);
		}		
	});	
	
	$('.voltarAoTopo').on('click', function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
  		return false;
	});
	
	$('textarea').keyup(function (e) {
		var rows = $(this).val().split("\n");
		$(this).prop('rows', rows.length);
	});

	$('tr.cotaContemplada').on('click', function(){		
		$('#formInteresseModal').bootstrapValidator('disableSubmitButtons', false).bootstrapValidator('resetForm', true);		

		var cotaCodigo			= $(this).attr('data-cotaCodigo');
		var cotaCredito 		= $(this).attr('data-cotaCredito');
		var cotaEntrada			= $(this).attr('data-cotaEntrada');
		var cotaParcelas		= $(this).attr('data-cotaParcelas');		
		var cotaAdminNome		= $(this).attr('data-cotaAdministradoraNome');
//		var cotaAdminImg		= $(this).attr('data-cotaAdministradoraImg');
		var cotaSituacao		= $(this).attr('data-cotaSituacao');
		var cotaTipo			= $(this).attr('data-cotaTipo');
		var cotaObs				= $(this).attr('data-cotaObservacao');
		var cotaLink			= $(this).attr('data-cotaLink');				
		console.log(cotaSituacao);
		$('#cotaInteresseModal .modal-body #cotaCodigoModal').attr('value', cotaCodigo);
		$('#cotaInteresseModal .modal-body #tbCotaCredito').html(cotaCredito);
		$('#cotaInteresseModal .modal-body #tbCotaEntrada').html(cotaEntrada);
		$('#cotaInteresseModal .modal-body #tbCotaParcelas').html(cotaParcelas);
        //      $('#cotaInteresseModal .modal-body #tbCotaAdminImg').attr('src', cotaAdminImg);
	//	$('#cotaInteresseModal .modal-body #tbCotaAdminImg').attr({'title':cotaAdminNome, 'alt':cotaAdminNome});
		$('#cotaInteresseModal .modal-body #tbCotaAdmin').html(cotaAdminNome);
		$('#cotaInteresseModal .modal-body #tbCotaSituacao').html(cotaSituacao);
		$('#cotaInteresseModal .modal-body #tbCotaTipo').html(cotaTipo);
		$('#cotaInteresseModal .modal-body #tbCotaObs').html(cotaObs);
		$('#cotaInteresseModal .modal-body #cotaModalLink').attr('href', cotaLink);		
	});
	
	$('#formInteresseModal').bootstrapValidator({
		message: 'Este campo não é válido.',
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
			interesseNome: {
				validators: {
					notEmpty: {
						message: '<i class="fa fa-exclamation-triangle"></i> Insira seu nome.'
					},
					stringLength: {
						max: 40,
						message: '<i class="fa fa-exclamation-triangle"></i> Máximo 40 caracteres.'
					}
				}
			},			
			interesseEmail:{
				validators: {
					notEmpty:{
						message: '<i class="fa fa-exclamation-triangle"></i> Insira seu e-mail.'	
					},
					emailAddress: {
						message: '<i class="fa fa-exclamation-triangle"></i> Insira um e-mail válido.'
					},
					stringLength:{
						max:100,
						message: '<i class="fa fa-exclamation-triangle"></i> Máximo de 100 caracteres.'	
					}
				}	
			},
			interesseTelefone: {
				validators:{
					notEmpty:{
						message: '<i class="fa fa-exclamation-triangle"></i> Insira seu telefone ou celular.'
					},
					stringLength: {
						min:5,
						max:30,
						message: '<i class="fa fa-exclamation-triangle"></i> Entre 5 e 30 caracteres.'	
					}					 
				}	
			},	
			interesseCelular: {
				validators:{
					stringLength: {
						min:5,
						max:30,
						message: '<i class="fa fa-exclamation-triangle"></i> Entre 5 e 30 caracteres.'	
					}					 
				}	
			},			
			interesseMensagem:{
				validators:{					
					stringLength: {
						max:5000,
						message: '<i class="fa fa-exclamation-triangle"></i> Máximo 5000 caracteres.'	
					}	
				}	
			}
		}
	}); 
	
	$('#tbCotasImoveis').DataTable({
		"paging":		false,
		"ordering": 	true,
		"info":     	false,
		"searching": 	false,		
		"language": {
			"decimal": ",",
			"thousands": "."
		}		
	});
	
	$('#tbCotasVeiculos').DataTable({
		"paging":		false,
		"ordering": 	true,
		"info":     	false,
		"searching": 	false,		
		"language": {
			"decimal": ",",
			"thousands": "."
		}		
	});		
});

function isValidEmail(emailText){
  var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
  return pattern.test(emailText);
}