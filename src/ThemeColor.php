<?php

namespace Ponponumi\WebpageTool;

class ThemeColor
{
    public string $color = "";
    public string $cssVariableThemeColorName = "";

    public function __construct(string $color="")
    {
        $this->colorChange($color);
    }

    public function colorChange(string $color=""): void
    {
        // 色を変える
        if(preg_match('/^#[0-9a-fA-F]{6}$/', $color) === 1){
            // 通常の16進数なら
            $this->color = $color;
        }elseif(preg_match('/^#[0-9a-fA-F]{3}$/', $color) === 1){
            // 3桁表記なら
            $colorSplit = str_split($color);
            $color = "#" . $colorSplit[1] . $colorSplit[1] . $colorSplit[2] . $colorSplit[2] . $colorSplit[3] . $colorSplit[3];
            $this->color = $color;
        }elseif($color === ""){
            $this->color = "";
        }
    }

    public function cssVariableNameChange(string $name=""): void
    {
        $this->cssVariableThemeColorName = $name;
    }

    public function get(): string
    {
        return $this->color;
    }

    public function echo(): void
    {
        echo $this->color;
    }

    public function metaGet(): string
    {
        $color = $this->get();

        if($color !== ""){
            return '<meta name="theme-color" content="' . $color . '">';
        }

        return "";
    }

    public function metaEcho(): void
    {
        echo $this->metaGet();
    }

    public function cssGet(): string
    {
        $css = "";
        $name = $this->cssVariableThemeColorName;

        if($name !== "" && $this->color !== ""){
            $css = ":root{" . $name . ":" . $this->color . ";}";
        }

        return $css;
    }

    public function styleGet(): string
    {
        $css = $this->cssGet();
        $style = "";

        if($css !== ""){
            $style = "<style>" . $css . "</style>";
        }

        return $style;
    }

    public function styleEcho(): void
    {
        echo $this->styleGet();
    }
}
