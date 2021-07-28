<?php

	session_start();

	//MODOS DE ENCERRAR UMA SESSÃO
	//unset() = o unset() elimina um índice da sessão. Vai eliminar o que você colocar entre parenteses.

	//session_destroy() = Destroi completamente a variável de sessão

	session_destroy();

	/*Depois que a sessão é destruida você precisa fazer uma nova requisição para que a sessão seja de fato apagada.Geralmente as pessoas fazem isso forçando o redirecionamento à uma outra página.*/
	header('Location: index.php')

?>