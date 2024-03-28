<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Spoiler 0.8.8

Bestimmte Seitenelemente verstecken.

<p align="center"><img src="SCREENSHOT.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-spoiler/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man Seiteninhalte versteckt

Erstelle einen umschlossenen Code-Block und verwende `spoiler` als Sprach-Parameter. Für weitere Formatierungsmöglichkeiten kannst du einen Notizblock mit Spoiler-Klasse verwenden. 

## Beispiele

Inhaltsdatei mit verstecktem Textblock:

~~~
---
Title: Spoiler example
---
Click on the button to show the hidden text. 

```spoiler
This text is hidden by default. If you can read this, you successfully clicked the right button. 
```

! {.spoiler}
! This test is also hidden.  
! **Text formatting is supported.**
! [Links and images too](https://datenstrom.se)

More text is here. 
~~~

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
