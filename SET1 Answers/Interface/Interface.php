<?php
    interface IFSC {
        public function PrintCode();
    }

    class SBI implements IFSC {
        public $ifsc;

        function __construct($ifsc)
        {
            $this->ifsc = $ifsc;
        }

        function PrintCode()
        {
            echo "IFSC Code of SBI is: $this->ifsc";
        }
    }

    $obj = new SBI("SBI00033982");
    $obj->PrintCode();
?>