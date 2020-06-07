<?php require_once 'header.php';?>
<main>
	<div id="content">
		<form id="signupForm" class="frmForm">
			<h1>Cadastro</h1>
		
		<p>Cadastre-se já para ter acesso à <strong>30 dias</strong> de acesso gratuíto e teste nosso sistema.</p>
		
			<label for="realtorEmail">* Email:</label>
			<input type="email" id="realtorEmail" name="realtorEmail" size="50" required placeholder="seuemail@dominio.com.br">
			
			<label for="realtorPassword">* Senha:</label>
			<input type="password" id="realtorPassword" name="realtorPassword" size="30" required>
			
			<label for="realtorPassword2">* Confirme sua Senha:</label>
			<input type="password" id="realtorPassword2" name="realtorPassword2" size="30" required>
		
			<label for="realtorName">* Nome Completo:</label> 
			<input type="text" id="realtorName" name="realtorName" size="50" required>
			
			<div>
    			<label for="realtorCreci">* Creci:</label> <input type="number"
    				id="realtorCreci" name="realtorCreci" size="10" required> <select
    				id="realtorEstadoCreci" name="realtorEstadoCreci" required>
    				<option value="null" selected>selecione</option>
    				<option value="AC">AC</option>
    				<option value="AL">AL</option>
    				<option value="AP">AP</option>
    				<option value="AM">AM</option>
    				<option value="BA">BA</option>
    				<option value="CE">CE</option>
    				<option value="DF">DF</option>
    				<option value="ES">ES</option>
    				<option value="GO">GO</option>
    				<option value="MA">MA</option>
    				<option value="MT">MT</option>
    				<option value="MS">MS</option>
    				<option value="MG">MG</option>
    				<option value="PA">PA</option>
    				<option value="PB">PB</option>
    				<option value="PR">PR</option>
    				<option value="PE">PE</option>
    				<option value="PI">PI</option>
    				<option value="RJ">RJ</option>
    				<option value="RN">RN</option>
    				<option value="RS">RS</option>
    				<option value="RO">RO</option>
    				<option value="RR">RR</option>
    				<option value="SC">SC</option>
    				<option value="SP">SP</option>
    				<option value="SE">SE</option>
    				<option value="TO">TO</option>
    			</select>
			</div>

			<label for="realtorMobile">* Celular:</label> 
			<input type="tel" id="realtorMobile" name="realtorMobile" size="14" required placeholder="(xx) xxxx-xxxx">
			
			<p>* Campos obrigatórios.</p>
			<p><input id="frmSubmitButton" class="frmButton" type="submit"	value="Enviar Dados">

		</form>
		<script>
    	$("#frmSubmitButton").click(function(){
			event.preventDefault();
			let pwd1 = $.trim($("input[name='realtorPassword']").val());
			let pwd2 = $.trim($("input[name='realtorPassword2']").val());
    		if (checkPassword (pwd1, pwd2)){
				let formData = {
					realtorEmail:$.trim($("input[name='realtorEmail']").val()),
					realtorPassword:$.trim($("input[name='realtorPassword']").val()),
					realtorName:$.trim($("#realtorName").val()),
					realtorCreci:$.trim($("#realtorCreci").val()),
					realtorEstadoCreci:$.trim($("select[name='realtorEstadoCreci']").val()),
					realtorMobile:$.trim($("#realtorMobile").val())
				};
				let formDataJSON = JSON.stringify(formData)
				$.post("<?php echo ABSOLUTEURL . API;?>realtor", formDataJSON, function(){
    	        	console.log("Dados enviados");
        		});
			}
    	});

		function checkPassword (pass1, pass2){
			if (pass1 == pass2) return true;
		}
    	</script>
	</div>
</main>
<?php require_once 'footer.php';?>