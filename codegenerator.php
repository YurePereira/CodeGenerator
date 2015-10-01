<?php
/**
 * Gerador de código aleatório, com opções de configuração.
 *
 * @author Francisco Yure <franciscoyurep@gmail.com>
 * @since 2014-09-09 0.1
 * @version 0.1
 *
 */
class CodeGenerator {

	const NUMBERS = '0123456789';
	const ALPHABET_LOWER_CASE = 'abcdefghijklmnopqrstuvwxyz';
	const ALPHABET_UPPER_CASE = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	const SPECIAL_CHARACTERS = '!#$%&\()*+,-./:;<=>?^_{|}~[]';

	private $isNumber;
	private $isAlphabetLowerCase;
	private $isAlphabetUpperCase;
	private $isSpecialCharacter;
	private $amount;
	private $characters;
	private $removeCharacters;
	private $code;

	public function __construct() {

		$this->code = '';
		$this->isNumber = true;
		$this->isAlphabetLowerCase = true;
		$this->isAlphabetUpperCase = true;
		$this->isSpecialCharacter = true;
		$this->characters = '';
		$this->amount = 10;
		$this->removeCharacters = '';

	}

	private function setCharacter() {

		$this->characters .= $this->isNumber ? self::NUMBERS : '';
		$this->characters .= $this->isAlphabetUpperCase ? self::ALPHABET_UPPER_CASE : '';
		$this->characters .= $this->isSpecialCharacter ? self::SPECIAL_CHARACTERS : '';
		$this->characters .= $this->isAlphabetLowerCase ? self::ALPHABET_LOWER_CASE : '';

		if (strlen($this->removeCharacters) > 0) {

			$strArrayRemove = str_split($this->removeCharacters);
			$newCharacters = str_replace($strArrayRemove, '', $this->characters);
			$this->characters = $newCharacters;

		}

		if (empty($this->characters)) {
			throw new CodeGeneratorException("Error the string is clean, at least one must be set to TRUE.", 1);
		}

	}

	public function setAmount($amount) {
		$this->amount = $amount;
	}

	public function setNumber($isNumber) {
		$this->isNumber = $isNumber;
	}

	public function setAlphabetUpperCase($isAlphabetUpperCase) {
		$this->isAlphabetUpperCase = $isAlphabetUpperCase;
	}

	public function setSpecialCharacter($isSpecialCharacter) {
		$this->isSpecialCharacter = $isSpecialCharacter;
	}

	public function setAlphabetLowerCase($isAlphabetLowerCase) {
		$this->isAlphabetLowerCase = $isAlphabetLowerCase;
	}

	public function setRemovecharacters($removeCharacters) {
		$this->removeCharacters = $removeCharacters;
	}

	public function generate() {

		$this->setCharacter();

		for ($i = 0; $i < $this->amount; $i++) {
			$max = strlen($this->characters) - 1;
			$this->code .= $this->characters[mt_rand(0, $max)];
		}

		return $this->code;

	}

}

class CodeGeneratorException extends Exception {}
