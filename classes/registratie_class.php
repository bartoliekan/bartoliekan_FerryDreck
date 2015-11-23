<?php
    error_reporting(E_ALL);

    class Nieuwsbrief {
        
        private $con;
        
        public function __construct() {
            
            $this->con = new mysqli("localhost", "bartol1q", "Kasteeldreef2015", "bartol1q_fans");
            
            if (mysqli_connect_error($this->con)) {
                echo "Er is een fout opgetreden bij het verbinden met de database.";    
            }
        }
        
        public function addMember($v, $a, $e, $t) {
            // = new mysqli("localhost", "root", "root", "fans");
            
            //if (isset($v, $a, $e, $t)) {
            //    echo "Vul alle velden in.";
            //}
            
            $v = $this->con->real_escape_string($v);
            $a = $this->con->real_escape_string($a);
            $e = $this->con->real_escape_string($e);
            $t = $this->con->real_escape_string($t);
            
            $sql = "INSERT INTO inschrijvingen (voornaam, achternaam, email, telefoonnummer) VALUES ('$v','$a','$e','$t')";
            $this->con->query($sql);
            
        }
    }
    
?>