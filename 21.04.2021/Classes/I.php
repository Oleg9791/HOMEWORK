<?php


class I extends TagPaired
{

    public function html()
    {
        return "<i class='$this->class' style='$this->style'>$this->innerText</i>";
    }
}