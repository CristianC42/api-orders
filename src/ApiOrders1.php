<?php
include 'order.php';

class ApiOrders1{
    function getAll(){
        $order = new Order();
        $orders = array();
        $orders['register'] = array();
        $result = $order -> getTable();
        
        if($result->rowCount()){
           while($row = $result->fetch()){
              $register = array(
                 'date' => $row['date'],
                 'company' => $row['company'],
                 'qty' => $row['qty'],
        );
        array_push($orders['register'], $register);
            }
      http_response_code(200);
      echo json_encode($orders);
      }else{
      http_response_code(404);
      echo json_encode(array('error' => 'Data not found'));
      }
    } 
    
}

$api = new ApiOrders1();
$api->getAll();

?>