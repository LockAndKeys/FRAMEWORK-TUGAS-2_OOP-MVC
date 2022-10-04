<?php
require_once("Lat4_3a.php");
class asisten extends mahasiswa
{
    public $nama;
    function __construct()
    {
    }
    function setNama($a)
    {
        $this->nama = $a;
    }
    function getNama()
    {
        return $this->nama;
    }
    function destruct()
    {
    }
}
