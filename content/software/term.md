+++
title = "md:term"
description = "md:term is a vocabulary browser that is, among others, used for making museum-digital's controlled vocubaliries accessible on their own."

[extra]
keywords = "Software, Kontrollierte Vokabulare, Taxonomien"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p518.jpg"
banner_image_alt = "Image from page 518 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
+++

## md:term - Vokabularbrowser

md:term ist ein öffentliches Interface für kontrollierte Vokabulare. Mit ihm kann man Hierarchien von Schlagworten und Orten navigieren, die Beschreibungen und Übersetzungen von Labels und Konzepten betrachten. Aber vor allem ermöglicht es das gezielte Suchen innerhalb eines gegebenen Vokabulars und stellt die Einträge in menschen- und maschinenlesbaren Formaten bereit.

---- 

### md:term als Portal

Die Referenzimplementierung von md:term präsentiert museum-digitals kontrollierte Vokabulare für Orte, Akteure, Schlagworte und Zeiten zusammen mit einigen externen - wie der Hornbostel-Sachs-Systematk oder dem Technikthesaurus. Die in md:term präsentierten Vokabulare können auch als Gesamtabzug heruntergeladen werden.

md:term kann unabhängig von museum-digital als Präsentationstool für Vokabulare verwendet werden. Am Besten funktioniert es jedoch in Kombination mit [nodac](/software/nodac).

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_place_2.png",
    image_alt="md:term Ortsseite: Hansaviertel"
    ) %}Neben den stets verfügbaren Links zu maschinenlesbaren Exportmöglichkeiten, Basisinformationen und Links zu Normdatenrepositorien listen Ortsseiten über- und untergeordnete Orte auf und zeigen den Ort auf einer Karte auf.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_tag.png",
    image_alt="md:term Schlagwortseite"
    ) %}Eine Schlagwortseite positioniert das Schlagwort hierarchisch, verweist auf andere Normdatenbestände, beschreibt es und bietet maschinenlesbare Exportmöglichkeiten. Zusätzlich können Objekte von museum-digital gelistet werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_downloads.png",
    image_alt="Downloadseite von md:term"
    ) %}Vollständige JSON- und SKOS/XML-Dumps unserer kontrollierten Vokabulare können über die Download-Seite heruntergeladen werden{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/md-term/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}md:term im Handbuch{% end %}

{% museumdigital_linktiles_tile(link="https://term.museum-digital.de/",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term{% end %}

{% museumdigital_linktiles_tile(link="https://term.museum-digital.de/swagger/",
    image="/data/img/icons/more.svg",
    image_alt="") %}API-Dokumentation{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/category/technik-design/entwicklung-mdterm/feed/",
    html_url="https://blog.museum-digital.org/de/category/technik-design/entwicklung-mdterm/",
    title="News") }}
