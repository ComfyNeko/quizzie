<?php
class RemoteConnect
{
  public function connectToServer($serverName=null)
  {
    if($serverName==null){
      throw new Exception('no test');
    }
    $fp = fsockopen($serverName,80);
    return ($fp) ? true : false;
  }

  public function returnSampleObject()
  {
    return $this;
  }
  public function testIsMyString(){
  $string = 'Mostly Harmless';
  $this->assertGreaterThan(0,strlen($string));
  $this->assertContains(“42”,$string);
}
}
?>
