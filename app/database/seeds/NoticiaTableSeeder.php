<?php

class NoticiaTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('noticias')->delete();

		Noticia::create(array(
			'titulo' => 'Inquisición',
			'fotoNoticia' => 'Inquisition.jpg',
			'noticiaCont' => 'El término Inquisición o Santa Inquisición hace referencia a varias instituciones dedicadas a la supresión de la herejía mayoritariamente en el seno de la Iglesia católica. La herejía en la era medieval muchas veces se castigaba con la pena de muerte y de esta se derivan todas las demás. La Inquisición medieval se fundó en 1184 en la zona de Languedoc (en el sur de Francia) para combatir la herejía de los cátaros o albigenses. En 1249 se implantó también en el reino de Aragón (fue la primera Inquisición estatal y en la Edad Moderna, con la unión de Aragón con Castilla, se extendió a ésta con el nombre de Inquisición española (1478-1821), bajo control directo de la monarquía hispánica, cuyo ámbito de acción se extendió después a América, la Inquisición portuguesa (1536-1821) y la Inquisición romana (1542-1965). Aunque en los países de mayoría protestante también hubo persecuciones, en este caso contra católicos, contra reformadores radicales como los anabaptistas y contra supuestos practicantes de brujería, los tribunales se constituían en el marco del poder real o local, generalmente adecuado para cada caso concreto y no constituyeron una institución específica.'
		));

		Noticia::create(array(
			'titulo' => 'Las Cruzadas',
			'fotoNoticia' => 'cruzadas.jpg',
			'noticiaCont' => 'Las Cruzadas fueron una serie de campañas militares impulsadas por el papado y llevadas a cabo por gran parte de la Europa latina cristiana, principalmente por la Francia de los Capetos y el Sacro Imperio Romano. Las cruzadas, con el objetivo específico inicial de restablecer el control cristiano sobre Tierra Santa, se libraron durante un período de casi doscientos años, entre 1095 y 1291. Más tarde, otras campañas en España y Europa Oriental, de las que algunas no vieron su final hasta el siglo XV, recibieron la misma calificación. Las cruzadas fueron sostenidas principalmente contra los musulmanes, aunque también contra los eslavos paganos, judíos, cristianos ortodoxos griegos y rusos, mongoles, cátaros, husitas, valdenses, prusianos y contra enemigos políticos de los papas. Los cruzados tomaron votos y se les concedió indulgencia por los pecados del pasado.'
		));

		Noticia::create(array(
			'titulo' => 'Revolución Francesa',
			'fotoNoticia' => 'Prise_de_la_Bastille.jpg',
			'noticiaCont' => 'La Revolución francesa fue un conflicto social y político, con diversos periodos de violencia, que convulsionó Francia y, por extensión de sus implicaciones, a otras naciones de Europa que enfrentaban a partidarios y opositores del sistema conocido como el Antiguo Régimen. Se inició con la autoproclamación del Tercer Estado como Asamblea Nacional en 1789 y finalizó con el golpe de estado de Napoleón Bonaparte en 1799.

Si bien, después de que la Primera República cayera tras el golpe de Estado de Napoleón Bonaparte, la organización política de Francia durante el siglo XIX osciló entre república, imperio y monarquía constitucional, lo cierto es que la revolución marcó el final definitivo del feudalismo y del absolutismo en ese país,1 y dio a luz a un nuevo régimen donde la burguesía, apoyada en ocasiones por las masas populares, se convirtió en la fuerza política dominante en el país. La revolución socavó las bases del sistema monárquico como tal, más allá de sus estertores, en la medida en que lo derrocó con un discurso e iniciativas capaces de volverlo ilegítimo.

Según la historiografía clásica, la Revolución francesa marca el inicio de la Edad Contemporánea al sentar las bases de la democracia moderna, lo que la sitúa en el corazón del siglo XIX. Abrió nuevos horizontes políticos basados en el principio de la soberanía popular, que será el motor de las revoluciones de 1830, de 1848 y de 1871.'
		));
	}	
}