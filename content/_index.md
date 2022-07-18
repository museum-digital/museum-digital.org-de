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
        "museum-digital helps museums bring their collections online. All published objects can be found at museum-digital:global.",
        [
            "https://global.museum-digital.org/search.php",
            "sv",
            "Browse the collections"
        ]
    ],
    [
        "/data/img/banners/cat.jpg",
        "",
        "Digital Storytelling",
        "Using the <a href='https://en.about.museum-digital.org/software/themator/'>Themator</a>, museums can publish their narratives digitally both in a more traditional 'portal' form as well as a scrollytelling format",
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

### The Fruit of Common Efforts

<br/>

{% lr_section_image_right(image = "/data/img/logo/mdlogo-code-256px.png", image_alt = "Logo") %}
#### Publishing, from a regional to a global context

museums publish and manage their collection data primarily in regional instances of museum-digital. Published data is however also aggregated in larger instances, such as [museum-digital:global](https://global.museum-digital.org/), that allow searching in all the collections published on museum-digital.

<form action="https://global.museum-digital.org/search.php">
    <input type="search" name="sv" placeholder="Browse the collections">
</form>
{% end %}

<br/>

{% lr_section_image_left(image = "/data/img/logos/mdterm-512px.png", image_alt = "Logo") %}
#### Taking load off each other's shoulders

For making such a diverse set of objects - from museums from different countries and recorded using different languages - legible and searchable, controlled vocabularies are an essential tool. At museum-digital, we keep centralized vocabularies for different types of entries. If a museum thus has already linked an object to a place, that place is available to all other museums as well. Our controlled vocabularies can be browsed and downloaded at [md:term](https://term.museum-digital.de/).
{% end %}
