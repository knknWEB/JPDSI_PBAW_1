<?php
namespace kernel;
class Messages{
	private $err=array();
	private $inf=array();
	private $i=0;
	public function errTab($msgs){
		$this->err[]=$msgs;
		$this->i++;
	}
	public function infoTab($msgs){
		$this->inf[]=$msgs;
		$this->i++;
	}
	public function isEmpty(){
		return $this->i==0;
	}
	public function isError(){
		return count ($this->err)>0;
	}
	public function isInfo(){
		return count ($this->inf)>0;
	}
	public function getErrors(){
		return $this->err;
	}
	public function getInfos(){
		return $this->inf;
	}
	public function clear(){
		$this->err=array();
		$this->inf= array();
		$this->i=0;
	}
}