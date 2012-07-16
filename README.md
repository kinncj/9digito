9digito
=======

Validação de números de celular para o 9 digito de SP

Exemplo
======

	<?php

	use Validator\Operators;

   	$operators = new Operators();

   	$operator = $operators->getOperatorByPhoneNumber(64290088);

   	if ($operator->isValid()) {

        echo 'Novo número com 9 dígitos: '.$operator->get9DigitNumber();

   	}

   	echo 'Operadora: '.$operator->getName();