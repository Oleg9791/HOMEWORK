<?php


class B extends TagPaired
{
    public function html()
    {
        return "<b class='$this->class' style='$this->style'>$this->innerText</b>";
    }
}