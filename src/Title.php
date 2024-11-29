<?php

namespace Ponponumi\WebpageTool;

class Title
{
    public string $siteName = "";
    public string $pageName = "";
    public string $markOff = "";

    public function __construct(string $siteName,string $pageName="",string $markoff=" | ")
    {
        $this->siteNameChange($siteName);
        $this->pageNameChange($pageName);
        $this->markOffChange($markoff);
    }

    public function siteNameChange(string $siteName): void
    {
        $this->siteName = $siteName;
    }

    public function pageNameChange(string $pageName=""): void
    {
        $this->pageName = $pageName;
    }

    public function markOffChange(string $markOff=" | "): void
    {
        $this->markOff = $markOff;
    }
}
