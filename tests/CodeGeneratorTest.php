<?php

class CodeGeneratorTest extends PHPUnit_Framework_TestCase
{

  /**
   * Generate code Numeric
   */
  public function testGenerateNumbers()
  {

    $cg = new CodeGenerator();

    $cg->setAmount(20);//number of characters
    $cg->setSpecialCharacter(false);
    $cg->setAlphabetLowerCase(false);
    $cg->setAlphabetUpperCase(false);
    $codeOutput = $cg->generate();

    echo $codeOutput . "\n";;
    $this->assertTrue(is_numeric($codeOutput));

  }

  /**
   * Generate code Alphanumeric
   */
  public function testGenerateAlphaNumeric()
  {

    $cg = new CodeGenerator();

    $cg->setAmount(20);//number of characters
    $cg->setSpecialCharacter(false);
    $codeOutput = $cg->generate();

    echo $codeOutput . "\n";
    $this->assertTrue(is_string($codeOutput));

  }

  /**
   * Generate code SpecialCharacter
   */
  public function testGenerateSpecialCharacter()
  {

    $cg = new CodeGenerator();

    $cg->setAmount(20);//number of characters
    $cg->setAlphabetLowerCase(false);
    $cg->setAlphabetUpperCase(false);
    $cg->setNumber(false);
    $codeOutput = $cg->generate();

    echo $codeOutput . "\n";;
    $this->assertTrue(is_string($codeOutput));

  }

}
