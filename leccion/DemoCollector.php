<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ORDER BY iddemo ASC ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'iddemo'},$c{'nombre'},$c{'tipo'},$c{'fecha'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }


  function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM demo where iddemo= ? ", array("{$id}"));
    $ObjDemo = new  Demo($row[0]{'iddemo'},$row[0]{'nombre'},$row[0]{'tipo'},$row[0]{'fecha'});
  
    return $ObjDemo;        
  }


  function updateDemo($id,$nombre){
    $insertrow = self::$db->updateRow
      ("UPDATE public.demo SET nombre = ? WHERE iddemo  = ? ", array(  "{$nombre}",$id));
  }


  function deleteDemo($id){
    $insertrow = self::$db->deleteRow
      ("DELETE FROM  public.demo WHERE iddemo  = ? ", array(  "{$id}"));
  }
  function createDemo($nombre){
    $insertrow = self::$db->insertRow("INSERT INTO public.demo (nombre) VALUES (?)", array("{$nombre}"));
      
  }

}
?>

