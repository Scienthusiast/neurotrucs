<?php
try
{
	require_once("conn.php");
	$results_in_bdd = 0;
	if($_POST)
	{
		if(isset($_POST['nom']))
		{
			$nom = $_POST['nom'];
		}
		else
		{
			$nom = '';	
		}
		if(isset($_POST['prenom']))
		{
			$prenom = $_POST['prenom'];
		}
		else
		{
			$prenom = '';	
		}
		if(isset($_POST['email']))
		{
			$email = $_POST['email'];
		}
		else
		{
			$email = '';	
		}
		if(isset($_POST['objet']))
		{
			$objet = $_POST['objet'];
		}
		else
		{
			$objet = '';	
		}
		if(isset($_POST['message']))
		{
			$message = $_POST['message'];
		}
		else
		{
			$message = '';	
		}
		$req = $bdd->prepare('INSERT INTO neurotrucs_contact VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP)');
		$results_in_bdd = ($req->execute(array($nom, $prenom, $email, $objet, $message)));
	}
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
	header("Location: contact.php?succes=".$results_in_bdd);
?>