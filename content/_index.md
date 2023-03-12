+++
title = "museum-digital"
description = "museum-digital ist eine Initiative zur Digitalisierung von Museen"
template = "startpage.html"

[extra]
keywords = "Museen, Digitalisierung, Community, Forschung"
banner_image = "/data/img/zalfa-imani-1xp5VxvyKL0-unsplash.jpg"
banner_image_alt = "Zalfa Imani, December 1, 2020, Unsplash License, https://unsplash.com/photos/1xp5VxvyKL0"
page_banner = [
    [
        "/data/img/zalfa-imani-1xp5VxvyKL0-unsplash.jpg",
        "",
        "museum-digital:global",
        "museum-digital hilft Museen ihre Sammlungen online zu bringen. Alle veröffentlichten Objekte können gemeinsam auf museum-digital:global durchsucht werden.",
        [
            "https://global.museum-digital.org/search.php",
            "sv",
            "Suchen"
        ]
    ],
    [
        "/data/img/banners/cat.jpg",
        "",
        "Digitales Storytelling",
        'Mit dem <a href="/software/themator/">Themator</a> können Museen und andere ihre Erzählungen in einer Portalansicht und im "Scrollytelling"-Format veröffentlichen.',
    ]
]
html_id = "home"
+++

## museum-digital

museum-digital ist eine Initiative, ist eine Software-Suite und ist eine Platform. Im Januar 2009 kamen im Bitterfelder Kreismuseum Mitarbeiter und Mitarbeiterinnen von Museen aus Sachsen-Anhalt zusammen und beschlossen den Weg ins Netz zu wagen. Das war die Geburtsstunde von museum-digital. Schon damals war klar: Erfolgreich im Netz sichtbar werden, das kann nur gemeinsam gelingen. Gemeinsam wird die Software entwickelt und gemeinsam präsentieren sich die Museen im Netz. Was damals als kleine Gemeinschaft begann ist zu einer Community gewachsen, die Sprach- und Ländergrenzen überwindet.

----

{{ museumdigital_map_global() }}

----

### Gemeinsam gut

Jedes Museum hat eigene Möglichkeiten und eigene Ziele. Bei museum-digital arbeiten alle zusammen. Anders als aktuelle Portale im Internet bietet museum-digital sowohl Möglichkeiten zur [Publikation](/software/frontend) als auch zur [Erfassung und Inventarisierung](/software/musdb) von Museumsobjekt-Informationen. Für jede Sprachversion gibt es einen gemeinsam genutzten und gepflegten Pool von kontrollierten und angereicherten Begriffen. Dieser zentralen Pool spart viel Arbeit, hilft Verknüpfungen sichtbar zu machen und ist die Grundlage des erfolgreichen Veröffentlichens im Netz.

Die Community von museum-digital schließt niemanden aus, jedes Museum kann sich beteiligen - die größten Schätze sind oft an den entlegendsten Orten zu finden. Offen sein für Museen aller Art und aller Größen - das gelingt nur, weil Flexibilität und Einfachheit als oberste Zielvorgaben die Arbeit von museum-digital bestimmen. Zu den wichtigsten Grundsätzen gehört darüberhinaus, dass jedes Museum jederzeit die volle Kontrolle über die Informationen zu seinen eigenen Objekten behält.

----

### Das Ergebnis gemeinsamer Anstrengungen

<br/>

{% lr_section_image_right(image = "/data/img/logo/mdlogo-code-256px.png", image_alt = "Logo") %}
#### Veröffentlichung, im regionalen und globalen Kontext

Museen veröffentlichen ihre Sammlungsdaten bei museum-digital zuallererst in einer "regionalen" Instanz. Von dort werden sie automatisch in übergeordnete Instanzen, wie [museum-digital:global](https://global.museum-digital.org/), synchronisiert, die eine Suche über die Sammlungen vieler Museen auf einen Schlag ermöglichen.

<form action="https://global.museum-digital.org/search.php">
    <input type="search" name="sv" placeholder="In museum-digital:global suchen">
</form>
{% end %}

<br/>

{% lr_section_image_left(image = "/data/img/logos/mdterm-512px.png", image_alt = "Logo") %}
#### Gegenseitig Arbeit abnehmen

Um so diverse Objekte, von verschiedenenen Arten von Museen, teilweise erfasst in verschiedenen Sprachen, verständlich und durchsuchbar zu machen, sind kontrollierte Vokabulare ein essentielles Werkzeug. Bei museum-digital arbeiten wir mit vier zentral verwalteten kontrollierten Vokabularen. Wenn ein Museum einen Ort angelegt und mit einem Objekt verknüpft hat, ist der Ort so für das nächste Museum schon verfügbar und mit Übersetzungen, Koordinaten und mehr angereichert. Unsere kontrollierten Vokabulare für Akteure, Orte, Zeiten und Schlagworte sowie einige andere Thesauri lassen sich mit [md:term](https://term.museum-digital.de/) durchsuchen, benutzen und herunterladen.
{% end %}

----

## Termine

{{ calendar_upcoming_events(cal_directory="/about/calendar/", hl_all="Kommende Termine", hl_local="Kommende Termine auf Deutsch", feed_all="upcoming_events", feed_local="upcoming_events_local") }}
