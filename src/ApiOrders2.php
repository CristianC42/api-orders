<?php
include 'order.php';

class ApiOrders2{



    function getCompany(){
        $order = new order();
        $company = $_GET['company'];
        $result = $order->filtroCompañia($company);
        $orders = array();
        $orders['register'] = array();


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
    function getDate(){
        $order = new order();
        $date = $_GET['date'];
        $result = $order->filtroFecha($date);
        $orders = array();
        $orders['register'] = array();

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

$api = new ApiOrders2();

     if (isset($_GET['company']))  
     {
        $api->getCompany();
     }else{
        $api->getDate();
     }
        

?>