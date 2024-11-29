<?php

namespace Ponponumi\WebpageTool;

class Title
{
    public string $siteName = "";
    public string $pageName = "";
    public string $markOff = "";

    public function __construct(string $siteName,string $pageName="",string $markOff=" | ")
    {
        $this->siteNameChange($siteName);
        $this->pageNameChange($pageName);
        $this->markOffChange($markOff);
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

    public function get(): string
    {
        // タイトルを取得する
        $title = $this->siteName;

        if($this->pageName !== ""){
            $title = $this->pageName . $this->markOff . $title;
        }

        return $title;
    }
}
