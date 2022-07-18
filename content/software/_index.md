+++
title = "Software"
description = "Bei museum-digital haben wir verschiedene Software-Anwendungen entwickelt, um die Digitalisierung im Museum zu erleichtern."

[extra]
keywords = "Software, Museen, Museumsobjekte, Museumssoftware, museum-digital"
banner_image = "/data/img/banners/RetrofuturismPostersNASA/grand_tour.jpg"
banner_image_alt = "Courtesy NASA/JPL-Caltech."
html_id = "software"
+++

## Software

Bei museum-digital haben wir über die Jahre verschiedene Anwendungen entwickelt, um unserem Ziel, einer einfachen und inklusiven Digitalisierung im Museum näherzukommen. museum-digital wurde ursprünglich zum Zwecke der digitalen Publikation von Objektdaten [gegründet](/about), und so entwickelten wir zuerst eine [Ausgabeoberfläche für Objektinformationen](/software/frontend).

Da die ursprüngliche Eingabemethode - Museum erfasst die Daten lokal, sendet sie an Programmierer, Programmierer trägt sie in die Datenbank ein - bald nicht mehr zu stemmen war, wurde eine einfache Eingabeoberfläche, [musdb](/software/musdb), entwickelt. Einige Museen, die noch keine Inventarisierungsdatenbank, aber Erfahrung mit musdb hatten, begannen nach Inventarisierungsfunktionen zu fragen, und so änderte sich der Anspruch von musdb: Statt einer Eingabeoberfläche für eine Publikationsplatform, wurde es zum Inventarisierungswerkzeug mit Publikationsoption.

Bald darauf begann die Frage nach einer Möglichkeit zur digitalen Erfassung von Geschichten drängender zu werden. Museumsobjekte, die nicht in einen Kontext eingebettet sind, mögen zwar interessant sein, aber auch das Einbetten der Objekte in einen größeren Zusammenhang ist eine zentrale Aufgabe von Museen. Als Reaktion auf diese Frage wurde der [Themator](/software/themator) als unabhängig von den vorherigen Werkzeugen laufendes Tool entwickelt.

Eine frühe Richtungsentscheidung bei der Entwicklung der Ausgabe und von musdb war es, mit allen Museen einer Sprachversion gemeinsam kuratierte kontrollierte Vokabulare zu verwenden. Diese werden intern mit dem Normdaten-Kontroll-Tool [nodac](/software/nodac) bearbeitet. Da die Vokabulare zunehmend wuchsen und wachsen, und mittlerweile selbst eine nutzbringende Quelle auch für andere Anwendungen sein können, entwickelten [md:term](/software/term), mit dem Nutzer die Vokabulare durchsuchen und maschinell auslesen können.

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/frontend",
    image="/data/img/logo/mdlogo-code-128px.png",
    image_alt="Logo") %}Ausgabe/Portals{% end %}

{% museumdigital_linktiles_tile(link="/software/musdb",
    image="/data/img/logo-musdb/musdbLogoBrown-128.png",
    image_alt="Logo") %}musdb{% end %}

{% museumdigital_linktiles_tile(link="/software/themator",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Themator{% end %}

{% museumdigital_linktiles_tile(link="/software/term-nodac",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term & nodac{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/category/technik-design/feed/",
    html_url="https://blog.museum-digital.org/de/category/technik-design/",
    title="Technik-bezogene Neuigkeiten in unserem Blog") }}
