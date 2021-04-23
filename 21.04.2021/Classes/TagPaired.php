<?php


abstract class TagPaired extends UnTagPaired
{
    protected string $innerText;

    /**
     * @param string $innerText
     * @return I
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }
}