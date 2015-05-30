<?php

function checkLogin($loginData)
{
	$result = array();
	if (!isset($formData['user']) || !strcmp($formData['user'], '')){
		array_push($result, 'userError');
	}
	if (!isset($formData['pass']) || !strcmp($formData['pass'], '')){
		array_push($result, 'passError');
	}
	return $result;
}

function checkPersonalData($formData)
{
	$result = array();
	if (!isset($formData['Username']) || !strcmp($formData['Username'],'')) {
		array_push($result, 'usernameError');
	}
	if (!isset($formData['Name']) || !strcmp($formData['Name'],'')) {
		array_push($result, 'nameError');
	}
	if (!isset($formData['Email']) || !strcmp($formData['Email'],'')) {
		array_push($result, 'emailError');
	}
	if (!isset($formData['Password']) || !strcmp($formData['Password'],'')) {
		array_push($result, 'passError');
	} else {
		if (!isset($formData['RepeatPassword']) || !strcmp($formData['RepeatPassword'],'')) {
			array_push($result, 'repassError');
		} else if (strcmp($formData['Password'], $formData['RepeatPassword'])) {
			array_push($result, 'cmppassError');
		}
	}
	return $result;
}

function checkFinancialData($formData)
{
	$result = array();
	if (!isset($formData['income']) || $formData['income']<0 || $formData['income']>2){
		array_push($result, 'incomeError');
	}
	return $result;
}

function checkTerms($formData)
{
	$result = array();
	if (!isset($formData['Terms']) || strcmp($formData['Terms'], 'on')){
		array_push($result, 'termsError');
	}
	return $result;
}
?>