<?php
/**
 * Created by PhpStorm.
 * User: chun
 * Date: 11/19/14
 * Time: 7:03 AM
 */

class Tools {

  var $dbConn;
  function __construct(){

    $this->dbConn = new mysqli('localhost','root','anhvta','healthybody');
    if($this->dbConn->connect_error)
      die('cannot connect to db');
  }
  function productLink($productLabel){
    $sql = "select * from product where label='".mysql_escape_string($productLabel)."'";
    $result = $this->dbConn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Url: " . $row["url"]. "<br>";
      }
    }
  }
  function ingredientTable($productLabel){
    $sql = "select * from product where label='".mysql_escape_string($productLabel)."'";
    $result = $this->dbConn->query($sql);
    $ingredients = array();
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $ingredients[] = $row['ingredients'];
      }
    }
    $this->displayIngredients($ingredients);
  }
  function displayIngredients($ingredients){

    if (count($ingredients) > 0){
      foreach($ingredients as $ingredient){
        
      }
    }
  }
  function __destruct(){

  }
} 