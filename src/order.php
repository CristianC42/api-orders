<?php
include 'DBconn.php';

class Order extends DBconn{

    public function getTable(){
        $result = $this->connect()->query('SELECT * FROM orders');

        return $result;
    }

    public function filtroCompañia($company){
        $sql = 'SELECT * FROM orders WHERE company LIKE "'.$company.'%"';
        $result = $this->connect()->query($sql);
        $this->disconnect();
        return $result;
    }
    public function filtroFecha($date){
        $sql = 'SELECT * FROM orders WHERE date >= "'.$date.'"';
        $result = $this->connect()->query($sql);
        $this->disconnect();
        return $result;
    }
}

?>