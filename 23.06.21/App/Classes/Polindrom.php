<?php

namespace Classes;

class Polindrom
{
    protected string $str;

    /**
     * @param string $str
     */
    public function setStr(string $str): static
    {
        $this->str = $str;
        return $this;
    }

    public function getRevers()
    {
        $htmlArr = "";
        $html = strrev($this->str);

        $htmlArr =preg_replace("/[.,!-?:]+\s+/uis","",str_split(strrev($this->str), 1)) ;
        $item = "";

        foreach ($htmlArr as $value) {
            $item .= $value;
        }
//        return $item;
        if ($this->str != $item) return "Not Polindrom";
        return "Polindrom";

    }
}