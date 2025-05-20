<?php
function Cipher($input, $oldAlphabet, $newAlphabet, &$output)
{
	$output = "";
	$inputLen = strlen($input);

	if (strlen($oldAlphabet) != strlen($newAlphabet))
		return false;

	for ($i = 0; $i < $inputLen; ++$i)
	{
		$oldCharIndex = strpos($oldAlphabet, strtolower($input[$i]));

		if ($oldCharIndex !== false)
			$output .= ctype_upper($input[$i]) ? strtoupper($newAlphabet[$oldCharIndex]) : $newAlphabet[$oldCharIndex];
		else
			$output .= $input[$i];
	}

	return true;
}

function Encipher($input, $cipherAlphabet, &$output)
{
	//$plainAlphabet = "abcdefghijklmnopqrstuvwxyz";
	$plainAlphabet = "1234567890";
	return Cipher($input, $plainAlphabet, $cipherAlphabet, $output);
}

function Decipher($input, $cipherAlphabet, &$output)
{
	$plainAlphabet = "1234567890";
	return Cipher($input, $cipherAlphabet, $plainAlphabet, $output);
}







$text = "123 456 789 01234567890";
$cipherAlphabet = "0987654321";
$cipherText;
$plainText;

$encipherResult = Encipher($text, $cipherAlphabet, $cipherText);
$decipherResult = Decipher($cipherText, $cipherAlphabet, $plainText);
?>