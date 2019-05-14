<?php
class Reserva {
    private $reservaid;
    private $salaid;
    private $data;
    private $horario;
    private $userid;

 
    
   
   
    function set_reservaid($reservaid) {
        $this->reservaid = $reservaid;
    }
    function set_salaid($salaid) {
        $this->salaid = $salaid;
    }
    function set_data($data) {
        $this->data = $data;
    }
    function set_horario($horario) {
        $this->horario = $horario;
    }
    function set_userid($userid) {
        $this->userid = $userid;
    }


    function get_reservaid() {
        return $this->reservaid ;
    }
    function get_salaid() {
        return $this->salaid ;
    }
    function get_data() {
        return $this->data ;
    }
        function get_horario() {
        return $this->horario ;
    }
    function get_userid() {
        return $this->userid ;
    }

}
?> 