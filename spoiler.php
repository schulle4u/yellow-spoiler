<?php
// Spoiler extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/spoiler

class YellowSpoiler {
    const VERSION = "0.8.8";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if (substru($name, 0, 7)=="spoiler" && $type=="code") {
            list($language, $summary, $class, $id) = $this->getSpoilerInformation($name);
            if ($language=="spoiler" && !is_string_empty($text)) {
                $output = "<div class=\"".htmlspecialchars($language)."\"";
                if (!is_string_empty($id)) $output .= " id=\"".htmlspecialchars($id)."\"";
                $output .= ">\n";
                $output .= "<details>\n";
                $output .= "<summary>".htmlspecialchars($summary)."</summary>\n";
                $output .= $text;
                $output .= "</details>\n";
                $output .= "</div>\n";
            }
        }
        return $output;
    }
    
    // Return spoiler information
    public function getSpoilerInformation($name) {
        $language = $class = $id = "";
        foreach (explode(" ", $name) as $token) {
            if (substru($token, 0, 7)=="spoiler" && is_string_empty($language)) $language = $token;
            if (substru($token, 0, 1)==".") $class = $class." ".substru($token, 1);
            if (substru($token, 0, 1)=="#") $id = substru($token, 1);
        }
        return array($language, $class, $id);
    }
}
