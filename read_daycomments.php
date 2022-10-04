<?php
	require_once "../config.php";
	
	//loome andmebaasideühenduse
	$conn = new mysqli($server_host, $server_user_name, $server_password, $database);
	//määrame suhtlemisel kasutatava kooditabeli
	$conn->set_charset("utf8");
	//valmistame ette SQL keeles päringu
	$stmt = $conn->prepare("SELECT comment, grade, added  FROM vp_daycomment");
	echo $conn->error;
	//seome loetavat andmed muutujatega
	$stmt->bind_result($comment_from_db, $grade_from_db, $added_from_db);
	//täendame käsu
	$stmt->execute();
	echo $stmt->error;
	//võtan andmeid
	//kui on oodata vaid 1 võimalik kirje
	//if($stmt->fetch();{
		//kõik mida teha
	//}
	$comments_html = null;
	//kui on oodata mitut, aga teadmata arv
	while($stmt->fetch()){
		//	<p>Kommentaar, hinne päevale: x, lisatud yyyyyy.</p>
		$comments_html .= "<p>" .$comment_from_db .", hinna päevale: " .$grade_from_db .", lisatud "
		.$added_from_db .".</p> \n";
	}
	//sulgeme käsu/päringu
	$stmt->close();
	//sulgeme andmebaasiühenduse
	$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Claudia-Nicol, veebiprogrameerimine</title>
</head>
<body>
	<h1>Claudia-Nicol, veebiprogrameerimine</h1>
	<p>See leht on loodud õppetöö raames ja ei sisalda tõsist infot!</p>
	<p>Õppetöö toimus <a href="http://www.tlu.ee">Tallinna Ülikoolis</a> Digitehnoloogide Institudis.</p>
	<img src="tlu1.jpg" alt="Tallinna Ülikooli Astra õppehoone">
	<p>Mina olen Claudia-Nicol Zaitseva, olen 19 aastat vana, õppin Tallinna Ülikoolis Informaatika ja Digimeedia erialal.<p>
	<?php echo $comments_html; ?>
</body>
</html>