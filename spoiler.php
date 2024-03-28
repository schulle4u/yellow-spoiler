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
            list($language, $class, $id) = $this->getSpoilerInformation($name);
            if ($language=="spoiler" && !is_string_empty($text)) {
                $output = "<div class=\"".htmlspecialchars($language)."\"";
                if (!is_string_empty($id)) $output .= " id=\"".htmlspecialchars($id)."\"";
                $output .= ">\n";
                $output .= "<details>\n";
                if (preg_match("/<h[1-6](?:\s+[^>]*)*>(.*?)<\/h[1-6]>/i", $text, $headlineMatches)) {
                    $summaryContent = isset($headlineMatches[1]) ? $headlineMatches[1] : "";
                    $output .= "<summary>".htmlspecialchars($summaryContent)."</summary>\n";
                } else {
                    $output .= "<summary>".htmlspecialchars(ucfirst($language))."</summary>\n";
                }
                $output .= $this->markdownToHtml($text);
                $output .= "</details>\n";
                $output .= "</div>\n";
            }
        }
        return $output;
    }
    
    // Handle page output data
    public function onParsePageOutput($page, $text) {
        $output = null;
        if ($text && preg_match("/^(.*?<div class=\"spoiler\">)(.*?)(<\/div>)(.*)$/s", $text, $matches)) {
            $spoilerContent = $matches[2];
            if (preg_match("/<h[1-6](?:\s+[^>]*)*>(.*?)<\/h[1-6]>/i", $spoilerContent, $headlineMatches)) {
                $summaryContent = isset($headlineMatches[1]) ? $headlineMatches[1] : "";
                $output = $matches[1]."<details><summary>".$summaryContent."</summary>".$matches[2]."</details>".$matches[4];
            } else {
                $output = $matches[1]."<details><summary>Spoiler</summary>".$matches[2]."</details>".$matches[4];
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
    
    // Convert Markdown to html
    public function MarkdownToHtml($text) {
        $text = htmlspecialchars($text);
        $text = preg_replace_callback('/\\\[\\\n]/', function($m) { return $m[0] == "\\\\" ? "\\" : "<br />\n"; }, $text);
        $text = preg_replace_callback('/^(#{1,6})\s+(.*?)\s*#*\s*$/m', function($matches) { $numHashes = strlen($matches[1]); $headerText = $matches[2]; return "<h$numHashes>$headerText</h$numHashes>"; }, $text);
        $text = preg_replace("/\*\*(.+?)\*\*/", "<b>$1</b>", $text);
        $text = preg_replace("/\*(.+?)\*/", "<i>$1</i>", $text);
        $text = preg_replace("/(?<!\()(https?:\/\/[^ )]+)(?!\))/", "<a href=\"$1\">$1</a>", $text);
        $text = preg_replace("/\[(.*?)\]\((https?:\/\/[^ )]+)\)/", "<a href=\"$2\">$1</a>", $text);
        $text = preg_replace("/(\S+@\S+\.[a-z]+)/", "<a href=\"mailto:$1\">$1</a>", $text);
        return $text;
    }
}
