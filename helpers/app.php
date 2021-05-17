<?php
function dd($array) {
	var_dump($array);
	exit();
}
function jd($array) {
	echo json_encode($array);
	exit();
}
function ed($array) {
	echo $array;
	exit();
}
function getbiodata($name,$ifnull = " - ") {
	$data = json_decode(file_get_contents('data/biodata.json'));
	if(isset($data->{$name}))
		return $data->{$name};
	return $ifnull;
}
function getskill($name = null,$ifnull = " - ") {
	$data = json_decode(file_get_contents('data/skill.json'));
	if($name == null)
		return $data;
	if(isset($data->{$name}))
		return $data->{$name};
	return $ifnull;
}
function getresume($name = null,$ifnull = " - ") {
	$data = json_decode(file_get_contents('data/resume.json'));
	if($name == null)
		return $data;
	if(isset($data->{$name}))
		return $data->{$name};
	return $ifnull;
}
function converthptowa($hp) {
	$hp = str_replace('+', '', $hp);
	$hp = str_replace(' ', '', $hp);
	$hp = str_replace('-', '', $hp);
	return $hp;
}