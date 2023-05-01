+++
title = "nodac"
description = "nodac ist das museum-digitals Werkzeug für das Verwalten von kontrollierten Vokabularen."

[extra]
keywords = "Software, Controlled Vocabularies, Subject Headings"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p235.jpg"
banner_image_alt = "Image from page 235 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
faq = [
    [
        "Kann nodac mit meinem eigenen Vokabular arbeiten?",
        "Wahrscheinlich ja. Eine gegebene Instanz von nodac kann aber jeweils nur ein Set von Vokabularen verwalten, sodass wir eine weitere einrichten müssten."
    ],
    [
        "Kann ich nodac benutzen, um mein kontrolliertes Vokabular zu veröffentlichen?",
        "Nein. nodac ist ein reines Verwaltungs-Tool. Für die Veröffentlichung kontrollierter Vokabulare (besonders solcher, die in nodac verwaltet werden) haben wir mit [md:term](/software/nodac) ein eigenes Tool geschaffen."
    ],
]
+++

## nodac: Kontrollierte Vokabulare verwalten

nodac ist das Werkzeug von museum-digital zum Kuratieren kontrollierter Vokabulare. Das bedeutet das korrekte Benennen, Beschreiben, Übersetzen und übersetzen der Einträge; das Erstellen von Begriffshierarchien und das Verknüpfen von Begriffen mit den entsprechenden Einträgen in externen Repositories wie Wikidata, GND, AAT, Geonamen.

Als primäres Management-Tool hinter den Vokabularen von museum-digital muss nodac trainierbar sein. So kann man in nodac Begriffe grundsätzlich _blacklisten_ , die automatische Übertragung von Begriffen von einem Vokabular in ein Anderes festlegen das und dauerhafte Umschreibungen von Begriffen in ihre kanonikalische Form speichern. So ermöglicht nodac nicht nur einen präsizen, sondern vor allem auch einen nachhaltigen und resourcenschonenden Einsatz.

nodac kann mit mehreren polyhierarchischen Thesauri entsprechend des SKOS 2-Standards arbeiten.

### Linked open data

An vielen Stellen nutzt nodac die Vorteile von Linked Open Data. So können Quellen wie Wikidata und die Gemeinsame Normdatei (GND) nicht nur verknüpft, sondern auch zur automatischen Vervollständigung  eines Datensatzes genutzt werden.

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_01_Startpage.png",
    image_alt="Startseite von nodac"
    ) %}Auf der Startseite von nodac werden die neuesten Einträge aufgelistet und ein Überblick über die eigenen Aktivitäten gegeben. Sie kann mit gespeicherten Suchabfragen an das eigene Arbeiten angepasst werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_02_Overview_Actors.png",
    image_alt="Übersichtsseite für Akteure"
    ) %}Übersichtsseiten zeigen den bisherigen Fortschritt beim Anreichern und Kontrollieren eines Vokabulars als Text und in Diagrammen. Alle gezeigten Metriken fungieren gleichzeitig als Vorschläge für weitere Suchen.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_03_Search_Tags.png",
    image_alt=""
    ) %}Eine Trefferliste einer Suche nach Schlagworten. In der linken Seitenspalte sind viele der verfügbaren Suchoptionen zu sehen.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_06_Edit_Page_Actor.png",
    image_alt=""
    ) %}Bearbeitungsseite für Akteure (1): Für jede erfasste Entität existiert eine Bearbeitungsseite. Hier können Beschreibungen und andere Basisinformationen erfasst und übersetzt werden. Über die Linke Seitenspalte kann die Entität als "gecheckt" kategorisiert und zu anderen Begriffen Synonym gesetzt werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_07_Actors_noda_Links.png",
    image_alt=""
    ) %}Bearbeitungsseite für Akteure (2): Auch die Repräsentation derselben Entität in den wichtigsten Normdatenrepositorien kann erfasst werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_08_Edit_Page_Actor_Objects.png",
    image_alt=""
    ) %}Bearbeitungsseite für Akteure (3): nodac kann mit musdb verknüpft werden. Ist das der Fall, werden die mit einem gegebenen Eintrag verknüpften Objekte aus musdb ganz unten auf der Bearbeitungsseite aufgelistet.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_09_Import_Wikidata.png",
    image_alt=""
    ) %}Falls eine Entität bereits in Wikidata / Wikipedia bekannt ist, können die dort vorhandenen Daten importiert werden. Hier zu sehen ist eine Suche in Wikidata auf Basis des Namens.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_10_Places_Wikidata_by_Coordinates.png",
    image_alt=""
    ) %}Speziell für Orte gibt es die Möglichkeit, den entsprechenden Ort in Wikidata auf Basis der Koordinaten zu suchen.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_05_Actors_Blacklist.png",
    image_alt=""
    ) %}Begriffe, die eindeutig und unter allen Umständen falsch sind, können verboten werden. In der Folge können gleichnamige Begriffe weder in musdb noch in nodac selbst neu angelegt werden.{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ build_faq_list(title = "FAQ") }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/nodac/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Handbuch zu nodac{% end %}

{% museumdigital_linktiles_tile(link="https://youtube.com/playlist?list=PLlwIIHnjvD4fRhTJR-5xLe-NG-C_rVEhA",
    image="/data/img/logos-ext/YouTube_social_red_square_2017.svg",
    image_alt="Logo von Youtube") %}Videos zu nodac on YouTube{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/category/technik-design/entwicklung-mdterm/feed/",
    html_url="https://blog.museum-digital.org/de/category/technik-design/entwicklung-mdterm/",
    title="News") }}
