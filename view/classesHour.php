<?php 

echo 'Cadastrar horario das classes';


 ?>


	<form action="../controller/classesHour.php" method="POST">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label for="exampleFormControlSelect1">CURSO</label>
				<select class="form-control" id="curso" name="curso">
					<option value="Cabelereiro">Cabelereiro</option>
					<option value="Interativo InforMix">Interativo InforMix</option>
					<option value="Interativo">Interativo</option>
					<option value="SSecretariado executivoP">Secretariado executivo</option>
					<option value="Barbeiro">Barbeiro</option>
					<option value="Atendente Farmácia">Atendente Farmácia</option>
					<option value="Eletricista">Eletricista</option>
				</select>
			</div>
		</div>
		
		<div class="col-md-2">
			<div class="form-group">
				<label for="exampleFormControlSelect1">SALA</label>
				<select class="form-control" id="sala" name="sala">
					<option value="BELEZA">BELEZA</option>
					<option value="MULT I">MULT I</option>
					<option value="MULT II">MULT II</option>
					<option value="LAB I">LAB I</option>
					<option value="LAB II">LAB II</option>
				</select>
			</div>
		</div>

		<div class="col-md-2">
			<div class="form-group">
				<label for="exampleFormControlSelect1">Dia da Semana</label>
				<select class="form-control" id="dia" name="dia">
					<option value="Segunda">Segunda</option>
					<option value="Segunda - Quarta">Segunda - Quarta</option>
					<option value="Terça">Terça</option>
					<option value="Terça - Quinta">Terça - Quinta</option>
					<option value="Quarta">Quarta</option>
					<option value="Quinta">Quinta</option>
					<option value="Sexta">Sexta</option>
					<option value="Sabado">Sábado</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label for="exampleFormControlSelect1">Horário</label>
				<select class="form-control" id="horario" name="horario">
					<option value="08:00 - 09:00">08:00 - 09:00</option>
					<option value="08:00 - 10:00">08:00 - 10:00</option>
					<option value="08:00 - 11:00">08:00 - 11:00</option>
					<option value="09:00 - 10:00">09:00 - 10:00</option>
					<option value="10:00 - 11:00">10:00 - 11:00</option>
					<option value="10:00 - 12:00">10:00 - 12:00</option>
					<option value="13:00 - 15:00">13:00 - 15:00</option>
					<option value="11:00 - 14:00">11:00 - 14:00</option>
					<option value="14:00 - 15:00">14:00 - 15:00</option>
					<option value="14:00 - 17:00">14:00 - 17:00</option>
					<option value="14:00 - 18:00">14:00 - 18:00</option>
					<option value="18:00 - 20:00">18:00 - 20:00</option>
				</select>
			</div>
		</div>
		<!-- 
		<div class="col-md-4">
			<div class="form-group">
				<label >Data Inicio do curso</label>
				<input type="date" name="data_nasc" id="data_nasc" min="2018-01-01"
				max="2040-12-31" class="form-control">
			</div>
		</div>
		 -->

	</div>
	
		<div class="col-md-4">
			<button class="btn btn-primary id="btn_cad_hour" name="btn_cad_hour" type="submit">Cadastrar</button>
		</div>
	
</form>			
