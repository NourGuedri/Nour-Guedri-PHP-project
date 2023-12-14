<?php

include_once('../model/Order.php');
include_once('../database/config.php');
class OrderController extends Connexion{
    function __construct() {
        parent::__construct();
    }
    //this function is used to create an order
    function createOrder(Order $order) {
        $address_id = $order->getAddress_id();
        $total = $order->getTotal();
        $query = "INSERT INTO `order` (`address_id`, `total`) VALUES ('$address_id', '$total')";
        $res = $this->pdo->prepare($query);
        $res->execute();
        // $last_id = $this->pdo->lastInsertId();
        // return $last_id; 
        return $res;
    }
    function listorder(){
        $query = "select o.* ,a.* from `order` o, address a where  o.address_id = a.id";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function deleteOrder($ref) {
        $query = "DELETE FROM `order` WHERE `id` = '$ref'";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res; 
    }

}


?>