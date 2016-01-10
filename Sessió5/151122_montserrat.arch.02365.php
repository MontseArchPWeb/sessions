<?php

class File{
    protected $ruta;
    protected $system;
    
    public function __construct($ruta){
        $this->ruta = $ruta;
        $this->system = new System();
        chdir('/www/project1');
        $this->createDir();
        $this->checkIfFileExists();
    }
    
    protected function createDir(){  
       	if(!file_exists ($this->ruta."tumbs")){
            $command = "mkdir ".$this->ruta."tumbs";
            $this->system->execCommand($command);
	}
    }
    
    protected function checkIfFileExists(){
        $y = 1;
        if (is_dir($this->ruta)){
         $filehandle = opendir($this->ruta); // Abrir archivos
         while (($file = readdir($filehandle))!== false) {
            if ($file != "." && $file != "..") {
		$ruta_completa = $this->ruta . $file;
                    if (!is_dir($ruta_completa)){
                        //$this->getFileList($ruta_completa);
                        if($this->ValidatePhoto($file)){
                             if (!file_exists($this->ruta."tumbs/".$file)){
                                $this->createThumb($file);
                             }
                            $this->image_list[$y] = $file;
                            $y++;
                        }
                    }
                }
            }
            closedir($filehandle); // Fin lectura archivos
        }else{
            echo $this->ruta;
            echo "<br />No es una ruta valida";
        }
    }
    
    protected function getFileList($ruta_completa){
        echo $ruta_completa;
        echo "<br>";
    }
}

class Image extends File{
    
    protected $image_list = array();
    const DirMini = "tumbs/";
    
    protected function createThumb($photo){
        $input = $this->ruta.$photo;
        $output = $this->ruta.self::DirMini.$photo;
        $convert = "convert -resize 40x40";
        $command = "$convert $input $output";
        $this->system->execCommand($command);
    }
    
    protected function ValidatePhoto($file){
	$extension=preg_match( '/^.*\.(jpg|jpeg|png|gif)$/i', $file);
	return $extension;
    }
    
    public function getImages(){
       return $this->image_list; 
    }
}

class System{
    public function execCommand($command){
        echo shell_exec($command);
    }
}

$path = "fotos/";
$image = new Image($path);
$image_list = $image->getImages();

for($i=1;$image_list[$i]!=null;$i++){
    ?> 				
        <a href="<?php echo $path.$image_list[$i]?>"><img src="<?php echo $path."tumbs/".$image_list[$i] ?>" width="70px"></a>	<br>
        <?php
}




