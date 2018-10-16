<?php

namespace ImageDataURI;
class Converter
{
    public $_tmpname;
    private $_pathinfo;
    private $_type;
    private $_data;
    private $_uri;

    function __construct()
    {
        $this->_tmpname  = null;
        $this->_pathinfo = '';
        $this->_type     = null;
        $this->_data     = null;
        $this->_uri      = '';
    }

    public function setTmpname($tmpname)
    {
        isset($tmpname) ? $this->_tmpname = $tmpname : $this->_tmpname = null;
    }

    public function getTmpname()
    {
        return($this->_tmpname);
    }

    public function convertData($tmpname = null)
    {
        isset($tmpname) ? $this->_tmpname = $tmpname : null;

        if (!is_null($this->_tmpname)) {
            $this->_type = pathinfo($this->_tmpname, PATHINFO_EXTENSION);
            $this->_data = file_get_contents($this->_tmpname);
            $this->_uri  = 'data:image/' . $this->_type . ';base64,' . base64_encode($this->_data);

            return($this->_uri);
        } else {
            return(null);
        }

    }
}
