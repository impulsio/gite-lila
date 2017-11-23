<?php

function connect()
{
	$bdd=mysqli_connect('localhost', 'gitelila', 'Mc5LDbiVlAIhTNbh', 'gitelila');
	mysqli_query($bdd, "SET NAMES 'utf8'");
  mysqli_autocommit($bdd,TRUE);
	return $bdd;
}

function getNbRow($requete)
{
	$bdd=connect();
	$resultats = mysqli_query($bdd, $requete);
	return mysqli_num_rows($resultats);
}

function getListe($requete)
{
	$bdd=connect();
	$retour = array();
	$resultats = mysqli_query($bdd, $requete);
	if (mysqli_num_rows($resultats) > 0)
	{
		while ($resultat=mysqli_fetch_assoc($resultats))
		{
			$retour[] = $resultat;
		}
	}
	return $retour;
}

function getListeWithKey($requete, $key, $value)
{
	$bdd=connect();
	$retour = array();
	$resultats = mysqli_query($bdd, $requete);
	if (mysqli_num_rows($resultats) > 0)
	{
		while ($resultat=mysqli_fetch_assoc($resultats))
		{
			$retour[$resultat[$key]] = $resultat[$value];
		}
	}
	return $retour;
}

function getOne($requete)
{
	$bdd=connect();
	$resultats = mysqli_query($bdd, $requete);
	return mysqli_fetch_assoc($resultats);
}

function insert($requete)
{
	$bdd=connect();
	mysqli_query($bdd, $requete);
   mysqli_close($bdd);
}

?>
