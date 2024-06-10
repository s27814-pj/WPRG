<?php
    class NoweAuto {
        protected $model, $price, $rateEURtoPLN;

        public function __construct() {
            $this->model = "default";
            $this->price = 77777.77;
            $this->rateEURtoPLN = 4.77;
        }

        public function ObliczCene(){
            return $this->price*$this->rateEURtoPLN;
        }
    }

    class AutoZDodatkami extends NoweAuto{
        protected $alarm, $radio, $ac;

        public function __construct()
        {
            parent::__construct();
            $this->alarm=77.7;
            $this->radio=777.7;
            $this->ac=7777.7;
        }

        public function ObliczCene()
        {
            return ($this->alarm+$this->price+$this->ac+$this->radio)*$this->rateEURtoPLN;
        }
    }
    class Ubezpieczenie extends NoweAuto{
        protected $percentValue, $years;

        public function __construct()
        {
            parent::__construct();
            $this->years=99;
            $this->percentValue=7.7;
        }
        public function ObliczCene()
        {
            return ($this->percentValue*(parent::ObliczCene()*((100-$this->years)/100)));
        }
    }

    $now = new Ubezpieczenie();
    echo $now->ObliczCene();