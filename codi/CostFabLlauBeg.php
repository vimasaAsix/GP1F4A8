<?php
	
	class llauna {
		
		private $radi;
		private $logintud;
		private $gruix;
		private $densitat;
		private $costpergram;
		
		public function __construct($r,$l,$g,$d,$cpg){
			$this->radi = $r;
			$this->longitud = $l;
			$this->gruix = $g;
			$this->densitat = $d;
			$this->costpergram = $cpg;
		}
		
		private function volum_material_llauna_cm3(){
			$ab = M_PI * $this->radi**2;
			$al = 2 * M_PI * $this->radi * $this->longitud;
			$volum = (2*$ab + $al) * $this->gruix; 
			return $volum;		
 		}
 		
 		private function massa_material_llauna_grams(){
			$massa = $this->volum_material_llauna_cm3() * $this->densitat;
			return $massa;		
 		}
 		
 		private function cost_fabricacio_llauna_en_dolars(){
			$cost = $this->massa_material_llauna_grams() * $this->costpergram; 
			return $cost;			
 		}
 		
 		public function mostra_cost_fabricacio_llauna_en_dolars(){
			$mostra_cost = "El cost de fabricació de la llauna de beguda en $ és: ".$this -> cost_fabricacio_llauna_en_dolars()."$<br>"; 
			return $mostra_cost;			
 		}	
	}
?>
<!DOCTYPE html>
<html lang="ca">
	<head>
		<meta charset="utf-8">
		<title>
			Cost de Fabricació de llauna de begudes
		</title>
	</head>
	<body>
		<?php
			$llauna_beguda = new llauna($_GET['r'],$_GET['l'],$_GET['g'],$_GET['d'],$_GET['cpg']);
			echo $llauna_beguda->mostra_cost_fabricacio_llauna_en_dolars();
			echo '<p><font size="1">Servidor: '.getenv('HOST_NAME').'</font></p>';
		?>
		<a href="index.php">Torna al formulari inicial</a>
	</body>
</html>


	
	
