$(document).ready(function(){

	
	//Consulta CEP
	$('#FormCEP').on('submit', function(event){


		event.preventDefault();

		var Dados=$(this).serialize();
		var CEP=$ ('#CEP').val();


		$.ajax({

			url: 'https://viacep.com.br/ws/'+CEP+'/json/',
			method: 'get',
			datatype: 'json',
			data: Dados,
			success: function (Dados){


				$('#retornoCEP').html("");

				$('#retornoCEP').append('<div>'+Dados.logradouro+','+Dados.bairro+'-'+Dados.localidade+'-'+Dados.uf+'</div>');

				

			},

			error: function(Dados){

				alert('CEP não encontrado, por gentileza verificar se o CEP está correto e tentar novamente.');
				$ ('#CEP').val('');


			}

		})


		//Consulta preço e prazo

		$.ajax({

			url: 'Controller_Correio.php',
			method: 'post',
			datatype: 'html',
			data: Dados,
			success: function (Dados){

				$('#retornoCEP').append('<div>'+Dados+'</div>');
			}

		})




	})	




});