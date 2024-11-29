<?php

namespace Ponponumi\WebpageTool;

class Title
{
    public string $siteName = "";
    public string $pageName = "";
    public string $markOff = "";

    public function __construct(string $siteName,string $pageName="",string $markoff=" | ")
    {
        $this->siteName = $siteName;
        $this->pageName = $pageName;
        $this->markOff = $markoff;
    }

    public function siteNameChange(string $siteName): void
    {
        $this->siteName = $siteName;
    }
}
