<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Spoiler 0.9.1

Bestimmte Seitenelemente verstecken.

<p align="center"><img src="SCREENSHOT.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-spoiler/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man Seiteninhalte versteckt

Erstelle einen benutzerdefinierten notizblock und verwende `spoiler` als Klassenattribut. 

## Beispiele

Inhaltsdatei mit verstecktem Textblock:

~~~
---
Title: Spoiler example
---
Click on the button to show the hidden text. 

! {.spoiler}
! This text is also hidden.  
! **Text formatting is supported.**
! [Links and images too](https://datenstrom.se)

More text is here. 
~~~

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
