+++
title = "museum-digital:qa"
description = "museum-digital:qa ist ein Webservice, der eine öffentliche Nutzung der Datenqualitätschecks von museum-digital - und weiteren Checks - ermöglicht."

[extra]
keywords = "musdb, Datenqualität, Interoperabilität, Webservice, API, Sammlungsmanagementsystem"
banner_image = "/data/img/banners/US_Capitol_Workmen-Make-Dome--Repairs_1960_9257463248_63f45a4878_o.jpg"
banner_image_alt = "Public domain / US gov't work. US Capitol / Workmen Make Dome Repairs 1960."
html_id = "mdqa"
og_image = "/data/img/logo/mdlogo-code.svg"
+++

## museum-digital:qa

museum-digitial:qa ist ein öffentlich zugänglicher Webservice zur Qualitätsprüfung von Objektdaten. Durch die Nachnutzung der Teile des Importtools von museum-digital, die für das Auslesen verschiedener Importformate relevant sind, können Objektdaten aus einer Reihe von Formaten - sowohl offenen Standards wie LIDO als auch einigen softwarespezifischen Formaten - ausgelesen werden.

Auf Basis der so extrahierten Daten bietet museum-digital:qa Zugang zu Qualitätsprüfungen. Einerseits können Museen, die [musdb](./musdb) nicht nutzen, ihre Daten mit denselben Qualitätsprüfungen prüfen, die auch musdb bietet.

Andererseits kann museum-digital:qa als eine Plattform fungieren, um weitere Prüfungen, die in musdb noch nicht eingebaut sind, einer breiten Masse von Museen zur verfügung zu stellen. Beginnend mit einer Prüfung der Konformität von Objektdatensätzen gemäß den Empfehlungen der Arbeitsgruppe Minimaldatensatz - die darauf abzielen eine Auswahl von grundlegenden Feldern zu definieren, die für eine sinnvolle Veröffentlichung von Objektdatensätzen unbedingt erforderlich sind, - können so weitere, spezifischere Prüfungen (und andere Werkzeuge) leicht in museum-digital:qa eingebaut werden.

## Für die Nachnutzung gemacht

Während museum-digital:qa auch über ein Webinterface genutzt werden kann, bietet es auch eine offene Schnittstelle, die es Software-Anbietern ermöglicht, die über museum-digital:qa angebotetenen Tools einfach in ihre eigene Software zu integrieren. Wir freuen uns über jede Nachnutzung, damit die so verfügbar gemachten Werkzeuge Museen helfen können, eine bessere Datenqualität zu erreichen - unabhängig von der von ihnen eingesetzten Software.

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://quality.museum-digital.org/",
    image="/data/img/logo/mdlogo-code.svg",
    image_alt="Logo") %}museum-digital:qa{% end %}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/misc/md-qa/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Handbook (German) on md:qa{% end %}

{% museumdigital_linktiles_tile(link="https://quality.museum-digital.org/swagger/",
    image="/data/img/icons/more.svg",
    image_alt="") %}API documentation{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/category/technik-design/museum-digital-qa-de/feed/",
    html_url="https://blog.museum-digital.org/category/technik-design/museum-digital-qa-de/",
    title="News") }}
