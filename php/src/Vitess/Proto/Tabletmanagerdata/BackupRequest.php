<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: tabletmanagerdata.proto

namespace Vitess\Proto\Tabletmanagerdata {

  class BackupRequest extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $concurrency = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'tabletmanagerdata.BackupRequest');

      // OPTIONAL INT64 concurrency = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "concurrency";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <concurrency> has a value
     *
     * @return boolean
     */
    public function hasConcurrency(){
      return $this->_has(1);
    }
    
    /**
     * Clear <concurrency> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\BackupRequest
     */
    public function clearConcurrency(){
      return $this->_clear(1);
    }
    
    /**
     * Get <concurrency> value
     *
     * @return int
     */
    public function getConcurrency(){
      return $this->_get(1);
    }
    
    /**
     * Set <concurrency> value
     *
     * @param int $value
     * @return \Vitess\Proto\Tabletmanagerdata\BackupRequest
     */
    public function setConcurrency( $value){
      return $this->_set(1, $value);
    }
  }
}

