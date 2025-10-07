<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Spoiler 0.9.2

Bestimmte Seitenelemente verstecken.

<p align="center"><img src="SCREENSHOT.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-spoiler/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man Seiteninhalte versteckt

Erstelle ein allgemeines Blockelement und verwende `spoiler` als Klassenattribut. 

## Beispiele

Inhaltsdatei mit verstecktem Textblock:

~~~
---
Title: Spoiler-Beispiel
SpoilerSummary: Zeig es mir!
---
Klicke auf die Schaltfläche, um den versteckten Text anzuzeigen. 

! {.spoiler}
! Dieser Text ist versteckt.  
! **Textformatierung wird unterstützt.**
! [Links und Bilder ebenfalls](https://datenstrom.se)

Hier ist weiterer Text. 
~~~

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
