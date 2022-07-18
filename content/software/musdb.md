+++
title = "musdb"
description = "musdb ist unser Tool für Erfassung, Inventarisierung und Museumsmanagement."

[extra]
keywords = "musdb, Inventarisierung, Museumsmanagement, Museen, Software"
banner_image = "/data/img/banners/usda_nrcs_montana_snow_survey65.jpg"
banner_image_alt = "Public domain / US gov't work. USDA NRCS Montana / Snow Survey65.tif / Man working on computer, analyzing data, 1977."
html_id = "musdb"
og_image = "/data/img/logo-musdb/musdbLogoBrown.svg"
faq = [
    [
        "How much does musdb cost?",
        "musdb is free of charge and will stay so. Users with the required permissions can add as many additional users as necessary."
    ],
    [
        "What are the system requirements for musdb?",
        "musdb is fully web-based. Thus only an up-to-date browser is required to use musdb."
    ],
    [
        "Is it possible to use musdb only for collection management without publishing?",
        "Yes."
    ],
    [
        "Can I import my existing collection data to musdb?",
        "In principle, yes. Given that the data has been compiled in a structured way, we have thus far always found a way to import the data. Import scripts for common exchange formats such as LIDO and exports from other popular collection management systems exist out of the box (a list can be [found in the handbook](https://de.handbook.museum-digital.info/import/liste-der-importformate.html)) and can be used in cooperation with our technical team or on one's own using musdb's WebDAV interface for import data."
    ],
    [
        "Does musdb support two-factor authentication?",
        "Yes. Users can enable two-factor authentication based on hardware tokens (e.g. Yubikeys or Nitrokeys), TOTP (which is e.g. used by Google Authenticator) or by mail."
    ],
    [
        "Is there any limit to the number of images that can be uploaded per object?",
        "No. You may upload as many images (or other media types such as video, audio, PDFs, or 3D representations) as necessary."
    ],
    [
        "Can musdb be used for managing our museum library?",
        "Yes."
    ],
]
+++

## musdb

musdb wurde ursprünglich als Eingabetool zur öffentlichen Seite entwickelt. Seitdem haben wir es zu einem vollständigen Inventarisierungswerkzeug erweitert. Auch Funktionen zum Museumsmanagement sind vorhanden.

Zentral ist dabei:

- Weiterenwicklungen findet auf Wunsch und in Rücksprache mit den Museen statt
- musdb wird kollaborativ entwickelt: Anpassungen für ein Museum stehen allen Museen zur Verfügung
- mit musdb arbeitet man kollaborativ: die Vokabulare, die für Verknüpfungen mit Personen, Orten, Zeiten und Schlagworten benutzt werden, werden von allen Museen im gleichen Sprachraum gemeinsam genutzt
- musdb ist auf eine einfache und intuitive Benutzung ausgelegt
- Hilfestellungen und Warnungen regen dazu an, nicht nur einzugeben, sondern qualitativ hochwertige Datensätze zu erzeugen

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Dashboard.jpg",
    image_alt="Dashboard / Standard-Startseite von musdb."
    ) %}Die Standard-Startseite von musdb ist ein benutzerdefinierbares Dashboard. Auch andere Seiten können vom Benutzer als Startseite eingestellt werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-BatchEditing.jpg",
    image_alt="Stapelverarbeitung in musdb."
    ) %}musdb bietet Funktionalitäten zur Stapelverarbeitung. Beispielsweise können Filtermengen gesammelt vertaggt oder veröffentlicht werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Export.jpg",
    image_alt="XML-Export"
    ) %}Benutzer können ihre Daten in md:xml (einer einfachen Notation für die Informationen aller verfügbaren Felder) und LIDO exportieren.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Backgrounds.jpg",
    image_alt="Hintergrund-Recherche-Tool."
    ) %}Im Bereich "Hintergründe" können Benutzer direkt in musdb in den kontrollierten Vokabularen recherchieren.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Find-an-Expert.jpg",
    image_alt='Finde einen Exporten": Benutzer verbinden.'
    ) %}Mit dem "Finde einen Experten"-Button können Benutzer andere finden, die zum gleichen Thema gearbeitet haben. Nur solche Benutzer, die dies explizit anschalten, werden hier aufgelistet.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Multilingual.jpg",
    image_alt="Mehrsprachigkeit in musdb."
    ) %}musdb ist mehrsprachig und kann auch mit mehrsprachigen Eingaben arbeiten.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Navigation.jpg",
    image_alt="Navigation von musdb."
    ) %}Die Navigation gibt einen groben Überblick über die verschiedenen Sektionen von musdb: Museen, Sammlungen, Objekte, Objektgruppen, Ausstellungen, und mehr.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-ObjectOverview.jpg",
    image_alt="Objektübersicht in musdb."
    ) %}Eine Objekt-Übersichtsseite im Bildermodus. In der rechten Sidebar werden verschiedene Option zur Suche und zum filterbasierten Export angeboten. Eine einfache Listenansicht ist ebenfalls verfügbar.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-ObjectPage.jpg",
    image_alt="Objektseite"
    ) %}Die Hauptsektion der Objektseite. Oben können Basisinformationen zum Objekt eingegeben werden. Unten sind die Registerkarten für die Bearbeitung detaillierter Informationen zum Objekt sichtbar.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-RecordHistory.jpg",
    image_alt="Datensatzgeschichte eines Objektes."
    ) %}Bearbeitungen an Objektdatensätzen werden geloggt.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Research.jpg",
    image_alt="Registerkarte: Provenienzrecherche."
    ) %}Mit der Registerkarte Provenienzrecherche können detaillierte Reporte zu einer vordefinierten Auswahl von relevanten Themen gespeichert werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Restoration.jpg",
    image_alt="Registerkarte: Restaurierung"
    ) %}Die Registerkarte Restauration bietet einerseits die Option, eine farbkodierte und schnell zu erfassende Zusammenfassung des Objektzustands zu notieren, andererseits detaillierte Reporte zu speichern.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Settings.jpg",
    image_alt="Benutzer- und Rechteverwaltung."
    ) %}Museumsdirektoren können detaillierte Rechte- und Zugriffseinstellungen für die Benutzer ihres Museums vornehmen.{% end %}

{{ museumdigital_preview_list_end() }}

----

### Technisches

#### Design

musdb soll einfach und intuitiv zu benutzen sein. Es soll Spaß machen. Das heißt, dass die Oberfläche einen klaren Fokus auf den Haupt-Gegenstand der jeweiligen Seite bieten sollte. Um dieses Ziel zu erreichen besteht für Benutzer an vielen Stellen die Möglichkeit, sich Features an- und auszuschalten. Optionale Features (etwa die zur Generierung eines QR-Codes für Objektseiten, oder ein "Inhaltsverzeichnis" um auf einer längeren Seite direkt zum richtigen Bereich zu springen) sind in einer Toolbox am Fensterrand untergebracht.

_Einfach_ heißt aber auch, dass häufige Benutzer schnell - und auf die ihnen am meisten gelegene Art - arbeiten können. Dafür bietet musdb eine Vielzahl an Hilfestellungen. Bei der folgenden Liste handelt es sich deshalb nur um eine Auswahl:

- Eine Anzeige, wieviele Buchstaben in einem Eingabefeld eingegeben sind und wieviele es mindestens und maximal sein können
- PuQi: Der Publikationsqualitätsindex zeigt, wie sich die Angaben zum Objekt verbessern lassen
- Plausi: Mithilfe der kontrollierten Vokabulare kann musdb warnen, wenn Eingaben nicht plausibel sind (Beispiel: Eine Malerin kann ein Gemälde nicht gemalt haben, bevor sie geboren wurde)
- Textbausteine erleichtern die schnelle Eingabe von gleichen Inhalten

Alternativ zur üblichen Navigation mit der Maus ermöglicht musdb eine umfassende Steuerung per Tastatur und ein eigenes Kontextmenü.

#### Entwicklung

musdb basiert auf PHP8 und MySQL. Eine Reihe PHP- und JavaScript-Bibliotheken kommen zum Einsatz. Die Liste der verwendeten Bibliotheken kann im Handbuch gefunden werden.

----

{{ build_accordion_lr_section(title = "Features and basic concepts", items = [
    [
        "Centralized Controlled Vocabularies",
        "All museums working with musdb use one set of controlled vocabularies for linked actors, places, times, and tags. The work for enriching such concepts with translations, links to the common norm data repositories etc. thus only needs to be done once - and everybody immediately profits from having accessible those entries that have already been entered for another museum beforehand."
    ],
    [
        "Exports",
        "All object data can be exported using a simple XML notation based on our own data structure ('md:xml') for full exports or in common exchange formats such as LIDO. An export to Excel files and autogenerated catalogues are available as well.",
    ],
    [
        "Edit whichever way is most suitable to you",
        "musdb supports a multitude of ways to update object data. Users can toggle the object editing page to a fully customizable form, in which given fields or subsections of object data can be moved in place using drag and drop. For editing many objects at once, there are batch editing capabilities and a table-based editing mode available. And if you're still not satisfied, you can even write your own interface using the API."
    ],
    [
        "Flexible search",
        "Searching objects is done using a custom query language built on top of the Manticore search database and our taxonomies. If you want to search not only objects, but a given term in all of your museum's data, you can use musdb's universal search feature."
    ],
    [
        "Automatic quality control",
        "musdb aims to make it easy to enter high quality data. To this end, we have included many features for, among other things, enabling you to simply make tags more specific using our controlled vocabularies and a simple right click; PuQI, a tool for quantifying the quality of publishable object information entered; automatic improvement suggestions, that enable you to semi-automatically run obvious corrections and completions of your data using a Tinder-like interface."
    ],
]) }}

----

{% counter_section_left(api = "md_musdb_system", name = "languages") %}
musdb is build for multi-lingual use and has been translated to a number of languages. Of course, we are always looking forward to help in translating the musdb (just like all other tools at museum-digital) to new languages. A description of how our dedicated translation tool can be used for doing so is [available on the blog (German)](https://blog.museum-digital.org/de/2019/03/02/museum-digital-uebersetzen/).
{% end %}

----

{{ build_faq_list(title = "FAQ") }}

----

### Resourcen

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/musdb/",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="") %}musdb im Handbuch{% end %}

{% museumdigital_linktiles_tile(link="https://www.youtube.com/playlist?list=PLFbmcALPcmvLtbv38OpjEkHFteP-qhmDY",
    image="/data/img/logos-ext/YouTube_social_red_square_2017.svg",
    image_alt="") %}Videos on YouTube{% end %}

{% museumdigital_linktiles_tile(link="https://demo.museum-digital.org/musdb/swagger/",
    image="/data/img/icons/more.svg",
    image_alt="") %}API-Dokumentation{% end %}

{{ museumdigital_linktiles_list_end() }}

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/category/technik-design/musdb-technik-design/feed/",
    html_url="https://blog.museum-digital.org/de/category/technik-design/musdb-technik-design/",
    title="Neuigkeiten zur Entwicklung von musdb im Blog") }}
