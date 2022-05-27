<?php
class StopWatch{
    private $startTime;
    private $endTime;
    public function __construct(){
        $this->startTime=microtime(true);
    }
    public function start(){
        $this->startTime=microtime(true);
    }
    public function stop(){
        $this->endTime=microtime(true);
    }
    public function getElapsedTime(){
        return $this->endTime-$this->startTime;
    }
}
$stopWatch = new StopWatch();
$stopWatch->start();
for ($i=0;$i<100000;$i++){
}
$stopWatch->stop();
echo $stopWatch->getElapsedTime();
?>