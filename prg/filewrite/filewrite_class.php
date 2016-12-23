<?PHP
	class filewrite{
		
		public $FPATH2PrG;
		public $TEXTS;
		
		public function __construct($path, $text){
			$this->FPATH2PrG = $path;
			$this->TEXTS = $text;
		}
		public function filewrites(){ 
			$fp = fopen($this->FPATH2PrG.".txt","w");
			fwrite($fp, $this->TEXTS);
			if(rename($this->FPATH2PrG.".txt",$this->FPATH2PrG.".cpp" )){
				fclose($fp);
			}
		}
	}
?>