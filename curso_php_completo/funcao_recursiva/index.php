<?php  

	$hierarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinados' =>array(
				//Inicio: Diretor Comercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados'=>array(
						//Inicio: Diretor Comercial
						array(
							'nome_cargo'=>'Gerente de Vendas'
						)
						//Termino: Diretor Comercial
					)
					//
				),
				// Termino: Diretor Comercial

				array()
			)
		)
	);

?>