<?php


class H1 extends TagPaired
{
    public function html()
    {
        return "<h1 class='$this->class' style='$this->style'>$this->innerText</h1>";
    }
}