<?php

		require_once "../banco/conecta.php";
		date_default_timezone_set('America/Sao_Paulo');
	
		conecta_banco();
		
		$_POST['titulo'	     ] = addslashes(trim($_POST['titulo'	  ]));
		$_POST['autores'	 ] = addslashes(trim($_POST['autores'	  ]));
		$_POST['orientadores'] = addslashes(trim($_POST['orientadores']));
		$_POST['palavrachave'] = addslashes(trim($_POST['palavrachave']));
		$_POST['ano'		 ] = addslashes(trim($_POST['ano'		  ]));
		$_POST['resumo'	 	 ] = addslashes(trim($_POST['resumo'	  ]));
		$_POST['arquivos'	 ] = addslashes(trim($_POST['arquivos'	  ]));
		
		$fileName1 = pathinfo(basename($_FILES["arquivo1"]["name"]),PATHINFO_FILENAME);
		$fileType1 = pathinfo(basename($_FILES["arquivo1"]["name"]),PATHINFO_EXTENSION);
		
		//colocar data e hora no anexo
		//$_POST['anexo1'] = $fileName1.'_'.date('d_m_Y_H_i_s').'.'.$fileType1;
		//$_POST['anexo2'] = $fileName2.'_'.date('d_m_Y_H_i_s').'.'.$fileType2;
		
		$_POST['anexo'] = $fileName1.'.'.$fileType1;
		
		$query = "insert into projeto (titulo, autores, orientadores, palavrachave, ano, resumo, arquivos, anexo) values
		        ('{$_POST['titulo']}', '{$_POST['autores']}', '{$_POST['orientadores']}', '{$_POST['palavrachave']}', '{$_POST['ano']}', '{$_POST['resumo']}', '{$_POST['arquivos']}', '{$_POST['anexo']}')";
		//file_put_contents("log.txt",$query);
		if(!$ref=mysql_query($query)) {
			die("Não foi possível executar a instrução MySQL: <br><br>{$query}");
		}		
		
		$last_id = mysql_insert_id(); 
		
		$_FILES['arquivo1']['novoNome'] = $_POST['anexo'];
		
		$target_dir = "Anexo/";
		$novaPasta = $target_dir.'projeto_'.$last_id;
		foreach ($_FILES as $key => $value) {
			$target_file = basename($_FILES[$key]["name"]);
			$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$fileName = pathinfo($target_file,PATHINFO_FILENAME);
			$target_file = rtrim($target_file,'.'.$fileType);

			#tamanho do arquivo

			if (!file_exists($novaPasta)){
			  mkdir($novaPasta);
			  chmod($novaPasta, 0777);
			}

			$newFile = $_FILES[$key]['novoNome'];
			// echo $newFile.'<br>';

			if(!move_uploaded_file($_FILES[$key]["tmp_name"], $novaPasta.'/'.$newFile)){
			  return 0;
			}
		}
		
		mysql_close();
		header('location:cadastro.php?status=1');