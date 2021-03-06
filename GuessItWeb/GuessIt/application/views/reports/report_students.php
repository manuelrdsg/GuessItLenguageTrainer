<div class="col-md-10">
<div class="container-fluid">
	<ul class="nav nav-tabs nav-justified">
		<li role="presentation" class="active"> <a href=""> Informe por alumnos </a> </li>
		<li role="presentation" > <a href="<?php echo base_url('index.php/Main/show_report_definitions')?>"> Informe por definiciones </a> </li>
	</ul>
	
	<?php echo form_open('index.php/Main/input_login_user/','class="form"')?>
	<div class="col-md-6">
	
		<!-- Lista de alumnos -->
	
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading"> Alumnos </div>
				<div class="panel-body">
					<select multiple id="alumnos_seleccionados">
						<option value="1"> 49076548E </option>
						<option value="2"> 98765498H </option>
					</select>
				</div>
			</div>
		</div>
		
		<!-- Informe -->
		
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading"> Informe </div>
				<div class="panel-body">
					<select id="informe_seleccionado">
						<option value="1"> Número de definiciones jugadas </option>
						<option value="2"> Número / Porcentaje de definiciones acertadas </option>
						<option value=""> Porcentaje de reportes que coinciden con el docente </option>
						<option value=""> Número de definiciones introducidas </option>
						<option value=""> Número de definiciones introducidas jugadas por cualquiera </option>
						<option value=""> Número / Porcentaje de definiciones introducidas acertadas por cualquiera </option>
						<option value=""> Valoración media recibida por las definiciones introducidas </option>
					</select>
				</div>
			</div>
		</div>
		
		<!-- Tipo del informe -->
		
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading"> Tipo de informe </div>
				<div class="panel-body">
					<div class="form-group">
						<input type="radio" name="tipo" value="grafico"> Gráfica <br>
						<input type="radio" name="tipo" value="tabla"> Tablas <br>
						<input type="radio" name="tipo" value="csv"> Fichero CSV <br>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-4">
		<!-- Rango del informe -->
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading"> Rango del informe </div>
				<div class="panel-body">
					<div class="form-group">
						<input type="radio" name="rango" value="dias"> Días
						<input type="radio" name="rango" value="semanas"> Semanas
						<input type="radio" name="rango" value="todo"> Total
					</div>
					<div class="form-group">
						<input type="text" class="form-control input-mg" name="rango_ini" placeHolder="Inicio del rango YYYY-MM-DD">
						<input type="text" class="form-control input-mg" name="rango_fin" placeHolder="Fin del rango YYYY-MM-DD">
					</div>
				</div>
			</div>
		</div>
		
		<!-- Niveles -->
		
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading"> Niveles </div>
				<div class="panel-body">
					<select multiple id="niveles_seleccionados">
						<option value="1"> Nivel 1 </option>
						<option value="2"> Nivel 2 </option>
						<option value="3"> Nivel 3 </option>
						<option value="4"> Nivel 4 </option>
					</select>
				</div>
			</div>
		</div>
		
		<!-- Boton de generar -->
		
		<div class="row">
			<div class="form-group">
				<button type="submit" class="btn btn-default btn-lg btn-block"> Generar </button>
			</div>
		</div>
	</div>
	<?php echo form_close();?>
</div>
</div>
