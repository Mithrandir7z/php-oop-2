<?php 

class Console {

    public $nomeConsole;

    public $marca;

    public $scheda_video;

    //richiede nome console e marca
    public function __construct($_nomeConsole, $_marca) {

        $this->nomeConsole = $_nomeConsole;
        $this->marca = $_marca;
    }

    //ritorna un array, facile per stampare
    public function getInfoData() {

        return [
            'Nome Console' => $this->nomeConsole,
            'Marca' => $this->marca,
            'Scheda Video' => $this->scheda_video
        ];
    }
}

?>