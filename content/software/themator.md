+++
title = "Themator"
description = "Der Themator ist museum-digitals Software für digitales Story-telling."

[extra]
keywords = "Software, Story-telling, Themen, Narrative, Digitale Ausstellungen"
banner_image = "/data/img/banners/RetrofuturismPostersNASA/trappist_cut.jpg"
banner_image_alt = "Courtesy NASA/JPL-Caltech."
html_id = "themator"
og_image = "/data/img/logos/themator-512.png"
+++

## Der Themator - Digitales Story-Telling und digitale Ausstellungen

Der Themator ist museum-digitals Software für digitales Storytelling.

Bald nachdem das [Haupt-Frontend](/software/frontend) für museum-digital programmiert und veröffentlicht war, wurde die Frage nach Möglichkeiten zur Einbettung der Objektinformationen in digitale Narrative häufiger gestellt. Als Antwort darauf begann die Entwicklung des Themators.

Der Themator ist um _Themen_ strukturiert, die anderen Themen über- und/oder untergeordnet sein können. Sie können mit Objekten (sowohl solchen, die nur im Themator erfasst wurden als auch solchen aus den verschiedenen Portalen von museum-digital), Literatureinträgen, und mehr verknüpft werden. Der Fokus auf Themen ermöglicht eine breite Reihe an Anwendungsfällen im Bereich des digitalen Storytellings, besonders wo es mit Museumsobjekten in Berührung kommt. Einerseits kann der Themator für digitale Ausstellungen verwendet werden. Andererseits wurde er beispielsweise aber auch schon zur Erstellung von Lehrmaterialien für die deutsche Minderheit in Ungarn eingesetzt.

Die Breite der möglichen Anwendungsfälle führte zur Entscheidung den Themator als komplett eigenständiges Werkzeug zu gestalten. Er ermöglicht die Einbindung von Objekten aus verschiedenen Instanzen in ein und dasselbe Thema.

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-Overview.jpg",
    image_alt="Übersicht der Themen in der deutschsprachigen Version"
    ) %}Übersicht der Themen in der deutschsprachigen Version{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-TopicPage.jpg",
    image_alt='Eine "Themenseite" im Themator'
    ) %}Eine "Themenseite" im Themator{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-ExhibitionView.jpg",
    image_alt=""
    ) %}Der Themator bietet eine Ausstellungsansicht, ein wenig wie eine Diavorführung{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-TopicObjects.jpg",
    image_alt="Liste der mit einem Thema verbundenen Objekte"
    ) %}Liste der mit einem Thema verbundenen Objekte{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-SingleObject.jpg",
    image_alt=""
    ) %}Ansicht eines einzelnen Objektes. Neben jenen Objekten, die speziell für den Themator erfasst wurden, können auch Objekte eingebunden werden, die aus museum-digital kommen.{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://themator.museum-digital.de/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Themator (Deutsch){% end %}

{% museumdigital_linktiles_tile(link="https://hu-themator.museum-digital.org/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Themator (Ungarisch){% end %}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Themator/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Handbuchseiten zum Themator{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/category/technik-design/themator-de/feed/",
    html_url="https://blog.museum-digital.org/de/category/technik-design/themator-de/",
    title="Neuigkeiten zum Themator") }}
