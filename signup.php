<?php require_once 'header.php';?>
	<div id="content">
	    <h1>Cadastro</h1>
	    <form>
	      <label>Nome Completo:</label>
	      <input type="text" name="realtorName"><br/>
	      <label>Email:</label>
	      <input type="text" name="realtorEmail"><br/>
	      <label>Celular:</label>
	      <input type="text" name="realtorMobile"><br/>
	      <label>Creci:</label>
	      <input type="text" name="realtorCreci">
	      <select id="estado" name="realtorEstadoCreci">
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
          </select><br/>
          <input type="submit" value="Enviar">
	    </form>
	</div>
<?php require_once 'footer.php';?>