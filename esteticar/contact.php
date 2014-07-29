<?php

if(!$_POST) exit;

$email = $_POST['email'];


//$error[] = preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $_POST['email']) ? '' : 'INVALID EMAIL ADDRESS';
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email )){
	$error.="Endereço de Email Invalido";
	$errors=1;
}
if($errors==1) echo $error;
else{
	$values = array ('name','email','message');
	$required = array('name','email','message');
	 
	$your_email = "contato@esteticaracs.com.br";
	$email_subject = "New Message: ".$_POST['subject'];
	$email_content = "new message:\n";
	
	foreach($values as $key => $value){
	  if(in_array($value,$required)){
		if ($key != 'subject' && $key != 'company') {
		  if( empty($_POST[$value]) ) { echo 'PREENCHA OS CAMPOS OBRIGATORIOS'; exit; }
		}
		$email_content .= $value.': '.$_POST[$value]."\n";
	  }
	}
	 
	if(@mail($your_email,$email_subject,$email_content)) {
		echo 'MENSAGEM ENVIADA COM SUCESSO! BREVE ENTRAREMOS EM CONTATO.<br/><a href="contact.html">Nova Mensagem</a>'; 
	} else {
		echo 'ERRO!';
	}
}
?>