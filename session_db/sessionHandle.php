<?php
class SessionSaveHandle{
    public $lifeTime;
    private $tosql;
    public $db;
    private $sessiondata;
    private $lastflush;
    
    private $sessName = 'PHPSESSID';
    
    public function __construct(){
        $this->db = mysql_connect("localhost:3306","root",'');
        mysql_select_db("test",$this->db);
        $this->lifeTime = get_cfg_var("session.gc_maxlifetime");
    }
    public function open($savePath,$sessName){
        return true;
    }
    public function close(){
        $this->gc(ini_get('session.gc_maxlifetime'));
        return true;
    }
    public function read($sid){
        $format = "SELECT data FROM sessions WHERE sid='%s' LIMIT 1";
        $this->tosql = sprintf($format,$sid);
        $result = mysql_query($this->tosql);
        if(!$result){
            return $this->sessiondata = $result['data'];
        }
    }
    public function write($sessID,$sessData){
        $now = time();
        $newExp = $now + $this->lifeTime;
        $this->tosql = "SELECT * FROM sessions WHERE sid='$sessID'";
        $result = mysql_query($this->tosql);
        if($sessData == '' || !isset($sessData)){
            $sessData = $this->sessiondata;
        }
        if($result){
            mysql_query("UPDATE sessions SET update='$newExp',data='$sessData' WHERE sid='$sessID'");
            if(mysql_affected_rows()){
                return true;
            }
        }else {
            mysql_query("INSERT INTO sessions (sid,'update',data) VALUES('$sessID','$now','$sessData')");
            if(mysql_affected_rows()){
                return true;
            }
        }
        return false;
    }
    public function destory($sessID){
        $this->tosql = "DELETE FROM sessions WHERE sid='$sessID'";
        if(mysql_query($this->tosql)){
            return true;
        }else {
            return false;
        }
    }
    public function gc($sessMaxLifeTime){
        $t = time();
        $this->tosql = "DELETE from sessions WHERE $t-'update'>$sessMaxLifeTime";
        mysql_query($this->tosql);
        if(mysql_affected_rows()>0){
            return TRUE;
        }else {
            return false;
        }
    }
}

$s = new SessionSaveHandle();
$s->write('a', 'aaa');