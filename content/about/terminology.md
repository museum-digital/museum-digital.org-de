+++
title = "Terminologie-Arbeit "
description = "Bei museum-digital nutzen wir kontrollierte Vokabulare um das Auffinden zu erleichtern. Hier beschreiben wir, wie wir dabei vorgehen."

[extra]
keywords = "Terminologie, Museen, Kontrolliertes Vokabular, Tagging"
banner_image = "/data/img/banners/Banner_Heiligbrodt_Collections_Insects_Unlocked.jpg"
banner_image_alt = "Public domain image by Alex Wild for the Insects Unlocked project. / Ludolph Heiligbrodt collection / The insect collection of 19th century Texas naturalist Ludolph Heiligbrodt is housed at the University of Texas at Austin."
html_id = "terminology"
+++

## Kontrollierte Vokabulare bei museum-digital

Für museum-digital sind kontrollierte Begriffe von zentraler Bedeutung. In vier verschiedenen Katalogen werden Akteure (Personen, Institutionen, ...) Geografika (Orte und Gebäude), Zeiten (Zeitpunkte und Zeiträume) sowie Schlagworte erfasst. Die einzelnen Begriffe werden angereichert mit Definitionen und Verweisen auf externe kontrollierte Vokabulare (Wikipedia, GND, ULAN, RKD, MBL, LAGIS, geonames, TGN, AAT, LCSH, ...). Gleichzeitig werden die Begriffe in Hierarchien eingepasst. Dies hat den Vorteil, dass bei einer Suche nach einem übergeordneten Begriff immer auch die Objekte zu den untergeordneten Begriffen gefunden werden. Eine Suche nach Kinderspielzeug findet so auch alle Schaukelpferde und eine Suche nach Fahrzeugen findet alle Automobile.

----

## Wie werden die Vokabulare kontrolliert?

Vokabulararbeit ist bei museum-digital zentralisiert. Alle Museen in allen Instanzen einer Sprachvariante von museum-digital arbeiten mit dem jeweils gleichen Set von kontrollierten Begriffen. Gründliche Vokabularbeit ist sehr zeitaufwendig sein, deshalb wurde versucht möglichst viel davon den teilnehmenden Museen abzunehmen. Zentralisierte Vokabularbeit führt außerdem zu eindeutigeren Resultaten. Für die Vokabulararbeit haben wir ein eigenes Tool, nodac, entwickelt mit welchem viele Anreicherungen semi-automatisch durchgeführt werden können und mit dem es einfach ist, die jeweiligen Hierarchien zu erzeugen. Mit diesem Tool lassen sich zudem Massenkorrekturen durchführen. Aus freiwilligen Beiträgen der Museen, mit Unterstützung einiger Bundesländer, aus Projektmitteln und insbesondere durch ehrenamtlichen Einsatz wird die Normdatenarbeit von einem kleinem Team bewerkstelligt.

----

###Derzeitiger Stand

Die kontrollierten Vokabulare zu ordnen und anzureichern ist ein immer währender Prozess, nicht zuletzt weil neue Inhalte jeden Tag dazu kommen. Um eine klarere Einschätzung unseres Fortschritts treffen zu können, benutzen wir eine Ampel-Kategorisierung für den Prüfstatus der Einträge.

{{ chart_md_vocabulary_progress() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/term",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term (Vokabularbrowser){% end %}

{% museumdigital_linktiles_tile(link="/software/nodac",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}nodac{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/tag/kontrollierte-vokabulare/feed/", html_url="https://blog.museum-digital.org/de/tag/kontrollierte-vokabulare/", title="Neuigkeiten") }}

{{ embed_chartjs() }}
<script src="/js/dashboard-controlled-vocabs-status.js" type="text/javascript" async></script>
