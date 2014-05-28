<?php
function init_panier(){
  if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
    $_SESSION['panier']['name'] = array();
    $_SESSION['panier']['nb'] = array();
    $_SESSION['panier']['prix'] = array();
  }
}

function add_item($name, $nb, $prix){
	init_panier();
	$item_search = array_search($name, $_SESSION['panier']['name']);

	if ($item_search){
    $_SESSION['panier']['nb'][$item_search] += $nb;
  }else{
	  array_push($_SESSION['panier']['name'], $name);
	  array_push($_SESSION['panier']['nb'], $nb);
	  array_push($_SESSION['panier']['prix'], $prix);
	}
}

function rm_item($name){
  $tmp = array();
  $tmp['name'] = array();
  $tmp['nb'] = array();
  $tmp['prix'] = array();

  for($i = 0; $i < count($_SESSION['panier']['name']); $i++){
    if ($_SESSION['panier']['name'][$i] != $name){
     	array_push($tmp['name'], $_SESSION['panier']['name'][$i]);
      array_push($tmp['nb'], $_SESSION['panier']['nb'][$i]);
      array_push($tmp['prix'], $_SESSION['panier']['prix'][$i]);
    }
  }
  $_SESSION['panier'] =  $tmp;
}

function edit_count($name, $nb){
  if ($nb > 0){
    $item_search = array_search($name, $_SESSION['panier']['name']);
   	if ($item_search != false)
     	$_SESSION['panier']['nb'][$item_search] = $nb;
  }else
  	rm_item($name);
}

function total(){
  $total = 0;
  for($i = 0; $i < count($_SESSION['panier']['name']); $i++){
    $total += $_SESSION['panier']['nb'][$i] * $_SESSION['panier']['prix'][$i];
  }
  return $total;
}

