<?php


class Br extends UnTagPaired
{
    public function html()
    {
        return "<br style='$this->style' class='$this->class'>";
    }
}
