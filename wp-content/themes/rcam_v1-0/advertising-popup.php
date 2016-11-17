<?php 
	if(
        is_home() 
        || is_single('Caminhoneiro sofre com estereótipos, quando deveria ser o herói da história')/* 18/11 */
        || is_single('Aprenda a montar seu currículo para conquistar um emprego de caminhoneiro')/* 19/11 */
        || is_single('O caminhão com turbinas mais rápido do mundo')/* 19/11 */
        || is_single('Churrascada! Quem não gosta?')/* 20/11 */
        || is_single('Os caminhoneiros estão mais jovens')/* 20/11 */
        || is_single('Vencemos')/* 21/11 */
        || is_single('A lenda vive')/* 21/11 */
        || is_single('sentimentos opostos')/* 22/11 */
        || is_single('Assim nasce um caminhoneiro')/* 23/11 */
        || is_single('25 frases de caminhoneiro encontradas nas estradas brasileiras')/* 23/11 */
        || is_single('O REI DO GADO')/* 24/11 */
        || is_single('Temos futuro! Mas…..')/* 24/11 */
        || is_single('14 filmes de caminhoneiro imperdíveis')/* 25/11 */
        || is_single('AS 14 ESTRADAS MAIS PERIGOSAS DO MUNDO')/* 25/11 */
    ){
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-13'));
	}

?>
