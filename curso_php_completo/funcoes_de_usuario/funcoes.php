<?php  

	function nome()	{
		return "Vitor Hugo Balon de Oliveira";
	}

	function salario() {
		return 946.00;
	}

	function somar($a, $b) {
		return $a+$b;
	}

	// DESSA FORMA OS VALORES DE '$a' E '$b' FICAM PADRÃO A NÃO SER QUE SEJA INFORMADO VALORES PELO USUÁRIO
	function numero($a = 5, $b = 3) {
		return $a+$b;
	}

	// O 'func_get_args()' PERMITE PEGAR MULTIPLOS VALORES INFORMADOS EM UMA FUNÇÃO E ARMAZENALOS EM UM ARRAY
	function valores($argumento) {
		$argumento = func_get_args();
		return $argumento;
	}

?>