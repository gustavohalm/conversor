<?php
	if(isset($_POST['send_nfe']))
	{
		$arr_xml = [];
		for($c=1; $c <= 45; $c++)
		{
			$key = "upl".$c;
			if( is_uploaded_file($_FILES[$key]['tmp_name']) )
			{
				$arr_xml =nfe($key, "tmp_name", $arr_xml);
			}	
		}	
		$zipname = 'xmls.zip';
		unlink($zipname);

		$zip = new ZipArchive();
		$zip->open($zipname, ZipArchive::CREATE);
		$tmp_file = tempnam('.', '');
		$zip->open($zip_name, ZipArchive::CREATE);

		foreach ($arr_xml as $file) 
		{
			$zip->addFile($file, $file);
		}
		$zip->close();
		ob_clean();
		header('Content-Type: application/zip');
		header('Content-disposition: attachment; filename='.$zipname);	
		header('Content-Length: ' . filesize($zipname));	
		readfile($zipname);
	}
	
	if(isset($_POST['send_cfe']))
	{
		$arr_xml = [];
		for($c=1; $c <= 45; $c++)
		{
			$key = "up".$c;
			if( is_uploaded_file($_FILES[$key]['tmp_name']) )
			{
				$arr_xml =cfe($key, "tmp_name", $arr_xml);
			}	
		}
			
		$zipname = 'xmls.zip';
		unlink($zipname);

		$zip = new ZipArchive();
		$zip->open($zipname, ZipArchive::CREATE);
		$tmp_file = tempnam('.', '');
		$zip->open($zip_name, ZipArchive::CREATE);

		foreach ($arr_xml as $file) {
			$zip->addFile($file, $file);
		}
		$zip->close();
		ob_clean();
		header('Content-Type: application/zip');
		header('Content-disposition: attachment; filename='.$zipname);	
		header('Content-Length: ' . filesize($zipname));	
		readfile($zipname);
	}
	
	
	function nfe($name_file, $temp, $arr)
	{
		$xml = simplexml_load_file($_FILES[$name_file][$temp]);
		//foreach($xml->NFe->infNFe->det as $row)
		//{
		//	$row->prod->cProd = preg_replace("/^0-9/", "", $row->prod->cProd);
		//}
		$max =sizeof($xml->NFe->infNFe->det);
		for($i =0; $i < $max; $i++)
		{
			$number = rand(0, 9);
			//echo $xml->NFe->infNFe->det[$i]->prod->cProd = preg_replace("/[^0-9]/", $number, $xml->NFe->infNFe->det[$i]->prod->cProd) . "<br>";
            $xml->NFe->infNFe->det[$i]->prod->cProd = preg_replace("/[^0-9]/", $number, $xml->NFe->infNFe->det[$i]->prod->cProd);
		}
		$dom = new DOMDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($xml->asXML());
		
		$file_name = "". rand(0,9) . rand(0,13) . rand(0,8) . rand(9, 89) .rand(1, 49). rand(55, 189) .".xml";
		$arr[] = $file_name;
		//header("Content-type: text/xml");
		//qheader('Content-Disposition: attachment; filename="'.$file_name.'"');
		 $dom->saveXML();
		 $dom->save($file_name);
		return $arr;
	}
	function cfe($name_file, $temp, $arr)
	{
		
		$xml = simplexml_load_file($_FILES[$name_file][$temp]);
		//foreach($xml->NFe->infNFe->det as $row)
		//{
		//	$row->prod->cProd = preg_replace("/^0-9/", "", $row->prod->cProd);
		//}
		$max =sizeof($xml->infNFe->det);
		for($i =0; $i < $max; $i++)
		{
			$number = rand(0, 9);
			//echo $xml->NFe->infNFe->det[$i]->prod->cProd = preg_replace("/[^0-9]/", $number, $xml->NFe->infNFe->det[$i]->prod->cProd) . "<br>";
            $xml->infNFe->det[$i]->prod->cProd = preg_replace("/[^0-9]/", $number, $xml->infNFe->det[$i]->prod->cProd);
		}
		$dom = new DOMDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($xml->asXML());
		
		$file_name = "". rand(0,9) . rand(0,13) . rand(0,8) . rand(9, 89) .rand(1, 49). rand(55, 189) .".xml";
		$arr[] = $file_name;
		//header("Content-type: text/xml");
		//qheader('Content-Disposition: attachment; filename="'.$file_name.'"');
		 $dom->saveXML();
		 $dom->save($file_name);
		return $arr;
	}
?>