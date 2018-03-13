<html>

	<head>
		<meta charset="UTF-8"/>
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link href="css/form.css" rel="stylesheet"/>
		
		<script src="js/jquery-3.3.1.js">
		</script>
		
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
		</script>
		
		
		<script src="js/jquery.mask.js">
		</script>
		
		<script>
			$(document).ready( function(){				
				$("#campo_fone").mask('(00) 00000-0000');
				$("#campo_date").mask('00/00/0000');
				$("#campo_date2").mask('00/00/0000');
				
				$("#campo_date3").datepicker({ minDate: -20, maxDate: "+1M +10D"});
				
			})
		</script>
		
		
		
	</head>

	<body>
	
		<h1> Formulários </h1>
		
		<form method="POST" action="" enctype="multipart/form-data">

			<div>
				<label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome"/>
			</div>

			<div>
				<label>Email:</label>
				<input type="text" name="email" />
			</div>
			
			<div>
				<label>Senha:</label>
				<input type="password" name="senha" />
			</div>
			
			<div>
				<label>Arquivo:</label>
				<input type="file" name="arquivo"/>			
			</div>
			
			<div>
				<input type="submit" value="SALVAR" />
			</div>
			
			<br>
			<br>
			
			<div>
				<input type="radio" name="campo_radio" value="Valor01" id="campo_radio_01">
				<label for="campo_radio_01">RadioBox Valor 01</label><br>
				<input type="radio" name="campo_radio" value="Valor02" id="campo_radio_02">
				<label for="campo_radio_02">RadioBox Valor 02</label><br>
				<input type="radio" name="campo_radio" value="Valor03" id="campo_radio_03">
				<label for="campo_radio_03">RadioBox Valor 03</label><br>
			</div>
			
			<br>
			<br>
			
			<div>
				<input type="checkbox" name="campo_checkbox_01" value="chk01" id="campo_checkbox_01">
				<label for="campo_checkbox_01">Checkbox 01 Opção Marcada/Desmarcada</label><br>
				<input type="checkbox" name="campo_checkbox_02" value="chk02" id="campo_checkbox_02">
				<label for="campo_checkbox_02">Checkbox 02 Opção Marcada/Desmarcada</label><br>
			</div>
			
			<br>
			<br>
			
			<div>
				<label for="text_area"><b>TextArea = Área de texto que não sei pq não funcionou o text-align: left</b></label>
<textarea rows="10" cols="150" id="text_area"><?php echo "Eu juro que queria colocar um texto daquele gerador de texto em latim porém não lembrei o nome do site.\nEu juro que queria colocar um texto daquele gerador de texto em latim porém não lembrei o nome do site.\nEu juro que queria colocar um texto daquele gerador de texto em latim porém não lembrei o nome do site.\nEu juro que queria colocar um texto daquele gerador de texto em latim porém não lembrei o nome do site.\nEu juro que queria colocar um texto daquele gerador de texto em latim porém não lembrei o nome do site.\nEu juro que queria colocar um texto daquele gerador de texto em latim porém não lembrei o nome do site.";?></textarea>
			</div>
			
			<br>
			<br>
			
			<div>
				<!-- <select name="campo_select" form="??????"> -->
				<label for="campo_select">Campo select:</label>
				<select name="campo_select" id="campo_select" multiple="multiple">
					<option value="Valor01">Valor 01</option>
					<option value="Valor02">Valor 02</option>
					<option value="Valor03">Valor 03</option>
					<option value="Valor04">Valor 04</option>
				</select>			
			</div>
			
			<br>
			<br>
			
			
			<div>
				<label for="campo_date">Campo data:</label>
				<input type="date" name="campo_date" id="campo_date">
				<input type="text" name="campo_date2" id="campo_date2">
				
				<input type="text" name="campo_date3" id="campo_date3">
			</div>
			
			<br>
			
			
			<div>
				<label for="campo_fone">Telefone:</label>
				<input type="tel" name="campo_fone" id="campo_fone" class="phone" maxlength="9">
			</div>			
			
			
			<div>
				 <input type="reset" value="LIMPA TELA">
			</div>

		</form>
	
	</body>

</html>