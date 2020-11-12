
<?php
	//вот эти две строчки и есть WAF фильтр если удалишь, то сайт будет подвержен xss
	$filter = array("<", ">");
	$_POST['name']=str_replace ($filter, "|", $_GET['q']);

	if (isset($_POST)) {
		print("Имя: " . $_POST['name']);
	}
?>
	
