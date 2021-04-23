<?php


abstract class UnTagPaired
{
    protected string $style;
    protected string $class;

    /**
     * @param string $style
     * @return TagPaired
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @param string $class
     * @return TagPaired
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;
    }

    abstract public function html();
}