<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Spoiler 0.9.2

Hide certain page elements.

<p align="center"><img src="SCREENSHOT.png" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/schulle4u/yellow-spoiler/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to hide page elements

Create a general block element and use `spoiler` as class attribute. 

## Examples

Content file with hidden text and custom summary:

~~~
---
Title: Spoiler example
SpoilerSummary: Hidden text
---
Click on the button to show the hidden text. 

! {.spoiler}
! This text is hidden.  
! **Text formatting is supported.**
! [Links and images too](https://datenstrom.se)

More text is here. 
~~~

Here is an example with multiple spoilers on one page, opening only one at a time: 

~~~
---
Title: Yellow FAQ
SpoilerSummary: Tell me more!
---
## Who uses Datenstrom Yellow?

! {.spoiler name=yellow}
! Datenstrom Yellow is for people who make small websites. Edit your website in a web browser. Log in with your user account. You can use the normal navigation, make some changes and see the result immediately. It is a great way to update your website. No database, no admin panel, no krimskrams. Datenstrom Yellow doesn't get in your way. 

## How do I install Datenstrom Yellow?

! {.spoiler name=yellow}
! Download one file, unzip it and copy everything to your web server. The most important things are included. There are extensions with additional features, languages and themes that you can install. 

## Where can I ask more questions?

! {.spoiler name=yellow}
! Something doesn't work as expected? Looking for more information? There's a good chance that your question has already been answered. If not, describe what you want to do and which problems you have. The Datenstrom community is a place to help each other. Where you can ask and answer questions. 
~~~

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).
