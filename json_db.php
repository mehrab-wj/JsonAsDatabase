<?php
/*
    * Github: https://github.com/mehrab-wj/JsonAsDatabase
*/
class JsonDatabase {
    private $path;
    private $autosave = true;
    public $db;
    public function __construct($path,$autosave = true) {
      $this->path = $path;
      $this->autosave = $autosave;
      $this->load();
    }
    public function load() {
      if (file_exists($this->path)) {
        $this->db =  json_decode(file_get_contents($this->path));
      }
      else { $this->db = json_decode([]); }
    }
    public function save() {
      if (file_exists($this->path)) {
        return file_put_contents($this->path, json_encode($this->db,JSON_PRETTY_PRINT));
      }
      return false;
    }
    public function __destruct() {
        if ($this->autosave) {
            $this->save();
        }
    }
}


?>
