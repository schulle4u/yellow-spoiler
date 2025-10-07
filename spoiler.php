<?php
// Spoiler extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/spoiler

class YellowSpoiler {
    const VERSION = "0.9.2";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="spoiler" && $type=="general") {
            $htmlAttributes = $this->yellow->lookup->getHtmlAttributes($attributes);
            if ($this->yellow->page->isExisting("spoilerSummary")) {
                $summary = htmlspecialchars($this->yellow->page->get("spoilerSummary"));
            } else {
                $summary = htmlspecialchars(ucfirst($name));
            }
            $output = "<details$htmlAttributes>\n";
            $output .= "<summary>$summary</summary>\n";
            $output .= "$text\n";
            $output .= "</details>\n";
        }
        return $output;
    }
}
