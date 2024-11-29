<?php

namespace Ponponumi\WebpageTool;

class ThemeColor
{
    public string $color = "";

    public function __construct(string $color="")
    {
        $this->color = $color;
    }
}
