<?php
class retard {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
  function is_stupid() {
    return true;
  }
}
$moron = new retard();
$moron->set_name("N");

if($moron->is_stupid()){
  echo $moron->$name." is quite dumb";
}

?>
