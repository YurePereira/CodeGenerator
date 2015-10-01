# CodeGenerator
Gerador de código aleatório, com opções de configuração.

A utilização da classe CodeGenerator para gerar códigos aleatórios é bem simples de se feito, após realizado o carregamento das classes CodeGenerator e CodeGeneratorException que se encontram no mesmo arquivo, basta fazer uma simples instâcia dela e usar seus métodos que possibilitam a customização dos códigos gerados, abaixo se segue alguns exemplos de sua utilização.



Exemplo 1:

    /* Gerando Códigos Numericos */
    $cg = new CodeGenerator();
    
    $cg->setAmount(20);//number of characters
    $cg->setSpecialCharacter(false);//Definir se o código gerado vai ter caracteres especiais onde o default é TRUE.
    $cg->setAlphabetLowerCase(false);//Definir se o código gerado vai ter caracteres alfabeticos em caixa baixa onde o default é TRUE.
    $cg->setAlphabetUpperCase(false);//Definir se o código gerado vai ter caracteres alfabeticos em caixa alta onde o default é TRUE.
    $codeOutput = $cg->generate();
    
    echo $codeOutput;//Uma String aleatória formada só por números.



Exemplo 2:

    /* Gerando Códigos sem caracteres especiais */
    $cg = new CodeGenerator();
    
    $cg->setAmount(20);//number of characters
    $cg->setSpecialCharacter(false);//Definir se o código gerado vai ter caracteres especiais onde o default é TRUE.
    $codeOutput = $cg->generate();
    
    echo $codeOutput;//Uma String aleatória formada por números e letras alfabeticas em caixa baixa e alta.



Exemplo 3:

    /* Gerando Códigos só com caracteres especiais */
    $cg = new CodeGenerator();
    
    $cg->setAmount(20);//number of characters
    $cg->setAlphabetLowerCase(false);//Definir se o código gerado vai ter caracteres alfabeticos em caixa baixa onde o default é TRUE.
    $cg->setAlphabetUpperCase(false);//Definir se o código gerado vai ter caracteres alfabeticos em caixa alta onde o default é TRUE.
    $cg->setNumber(false);//Definir se o código gerado vai ter números onde o default é TRUE.
    $codeOutput = $cg->generate();
    
    echo $codeOutput;//Uma String só com caracteres especiais.
