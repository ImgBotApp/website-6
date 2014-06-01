<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'Englisch',
        'download'                        => 'Download',
        'documentation'                   => 'Dokumentation',
        'forum'                           => 'Forum',
        'blog'                            => 'Blog',
        'support'                         => 'Hilfe',
        'donate'                          => 'Spenden',
        'store'                           => 'Shop',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> ist ein, als C-Erweiterung entwickeltes Web-Framework mit einem Fokus auf <a href=':1:'>Performance</a> und niedriger Ressourcennutzung.",
        'the_fastest_php_framework'       => 'Das schnellste<br />PHP Framework',
        'try_online'                      => 'Ausprobieren',
        'see_screencasts'                 => 'Screencasts ansehen',
        'everything_you_need_upper'       => 'ERFÜLLT IHRE ANFORDERUNGEN',
        'full_mvc_applications'           => "Vollständige <a href=':1'>MVC-Anwendungen</a>",
        'single_module'                   => 'Einzelnes Modul',
        'multi_module'                    => 'Mehrere Module',
        'micro_applications'              => 'Minimalanwendungen',
        'orm'                             => 'ORM',
        'transactions'                    => 'Transaktionen',
        'behaviors'                       => 'Verhaltensabläufe',
        'relations'                       => 'Relationen',
        'phql'                            => 'PHQL',
        'events'                          => 'Hooks',
        'validations'                     => 'Validierung',
        'hydration'                       => 'Ergebnistypen',
        'logging'                         => 'Logging',
        'profiling'                       => 'Profiling',
        'sharding'                        => 'Sharding',
        'odm_for_mongo'                   => 'ODM für MongoDB',
        'template_engine_volt'            => 'Template-Engine (Volt)',
        'di_ioc'                          => 'DI/IOC',
        'events_management'               => 'Ereignisverwaltung',
        'encryption'                      => 'Verschlüsselung',
        'http_request'                    => 'HTTP-Anfrage',
        'http_response'                   => '-Antwort',
        'http_cookies'                    => '-Cookies',
        'escaping'                        => 'Zeichenmasken',
        'filtering'                       => 'Zeichenfilter',
        'forms_builder'                   => 'Formulargenerierung',
        'forms_validation'                => 'Validierung',
        'flash_messages'                  => 'Hinweismeldungen',
        'cache'                           => 'Cache',
        'pagination'                      => 'Paginierung',
        'annotations'                     => 'Anmerkungen',
        'security'                        => 'Sicherheit',
        'translations'                    => 'Übersetzungen',
        'assets_management'               => 'Inhaltsverwaltung',
        'universal_auto_loader'           => 'Allgemeiner Autoloader',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'PHALCON FORUM',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => 'EMAIL',
        'services_upper'                  => 'DIENSTE',
        'consulting_upper'                => 'BERATUNG',
        'requirements_analysis'           => 'Anforderungsanalyse',
        'implementation'                  => 'Implementierung',
        'ongoing_support'                 => 'Laufende Unterstützung',
        'read_more'                       => 'mehr',
        'hosting_upper'                   => 'HOSTING',
        'phalcon_can_be_installed'        => 'Phalcon kann auf folgenden Systemen installiert werden',
        'main_upper'                      => 'ALLGEMEINES',
        'consulting'                      => 'Beratung',
        'hosting'                         => 'Hosting',
        'support_upper'                   => 'SUPPORT',
        'forum_community'                 => 'Forum / Gemeinschaft',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Bug-Tracker',
        'get_involved_upper'              => 'MITMACHEN',
        'team'                            => 'Team',
        'about'                           => 'Über uns',
        'roadmap'                         => 'Roadmap',
        'donate_to_phalcon'               => 'Dem Phalcon-Projekt spenden:',
        'or'                              => 'oder',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google+',
        'vimeo'                           => 'Vimeo',
        'amazing_contributors'            => 'Unsere unglaublichen Mitwirkenden:',

        'download_phalcon'                => 'Phalcon Herunterladen',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows-DLLs',
        'download_developer_tools'        => 'Entwicklungswerkzeuge',
        'download_ide_stubs'              => 'IDE-Platzhalter',
        'download_note'                   => 'Phalcon ist eine in C geschriebene Erweiterung, daher müssen Sie die passende Version in binärer Form herunterladen oder die Erweiterung mithilfe des Quellcodes kompilieren.',
        'download_compilation'            => 'Kompilieren',
        'download_compilation_1'          => 'Auf Linux können Sie die Erweiterung mithilfe des Quellcodes einfach kompilieren und installieren.',
        'download_requirements'           => 'Systemanforderungen',
        'download_requirements_1'         => 'Es werden einige vorinstallierte Softwarepakete benötigt:',
        'download_requirements_2'         => 'PHP5-Entwicklerressourcen',
        'download_requirements_3'         => 'GCC-Compiler',
        'download_compilation_11'         => '1. Um die Erweiterung selber zu kompilieren sind folgende Schritte erforderlich:',
        'download_compilation_12'         => '2. Fügen Sie die Erweiterung zu ihrer php.ini hinzu:',
        'download_compilation_13'         => '3. Zum Schluss noch den Webserver neu starten',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => " <a href=':1:'>FortRabbit</a> hat gnädigerweise eine <a href=':2:'>Repository</a> bereitgestellt.",
        'download_debian_2'               => 'Das Debian-Paket heißt php5-phalcon.',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "Für ArchLinux ist ein <a href=':1:'>PKGBUILD</a> verfügbar.",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "Sie finden das Softwarepaket <a href=':1:'>hier</a> (vielen Dank an <a href=':2:'>Mariusz Łączak</a>).",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'Eine Version für FreeBSD ist vorhanden. Sie müssen lediglich die folgenden Befehle ausführen um sie zu installieren:',
        'download_dependencies'           => 'Abhängigkeiten',
        'download_dependencies_1'         => 'Obwohl Phalcon nicht direkt auf andere PHP-Erweiterungen zugreift, nutzt es einige um die Funktionalität zu erweitern. Die genutzten Erweiterungen sind:',
        'download_dependencies_2'         => 'Es ist nicht notwendig, dass alle zuvor aufgelisteten Erweiterungen auf dem System installiert sind. Sie können auch nur die PHP-Erweiterungen installieren, die für Ihre Anforderungen notwenig sind. Beispielsweise können Sie bei der Nutzung einer MySQL-Datenbank nur PDO und PDO/MySQL installieren und auf Oracle, SQlite, PostgreSQL und MongoDB verzichten.',
        'download_need_help'              => 'Benötigen Sie Hilfe?',
        'download_need_help_1'            => "Falls Sie Unterstützung benötigen, finden Sie diesen auf unserer  <a href=':1:'>Support-Seite</a>. Wir werden unser Bestes tun, um Ihnen zu helfen.",

        'download_windows_note'           => 'Wir empfehlen Ihnen dringendst die letztemögliche PHP-Version (passend zu unseren DLLs), zu nutzen, da Sie nur auf diesem Weg den vollen Funktionumfang von Phalcon nutzen können.',
        'download_windows_stable'         => 'Releases',
        'download_windows_installation'   => 'Installation',
        'download_windows_installation_1' => "Um Phalcon auf Windows zu nutzen, können Sie eine DLL-Bibliothek herunterladen. Bearbeiten Sie Ihre php.ini, fügen Sie dies am Ende hinzu und starten Sie den Server neu, um die Erweiterung zu laden. <a href=':1:'>Mehr</a>.",
        'download_windows_guides'         => 'Ähnliche Anleitungen',
        'download_windows_guides_xampp'   => 'XAMPP Installation',
        'download_windows_guides_wamp'    => 'WAMP Installation',
        'download_windows_alpha'          => 'Alpha- und Betaversionen',
        'download_source_code'            => "Quellcode:  <a href=':1:' target='_download' title='GitHub-Repository'>GitHub</a>",
        'download_source_code_switch'     => "Quellcode (bitte auf den benötigten Zweig wechseln): <a href=':1:' target='_download' title='GitHub-Repository'>GitHub</a>",
        'download_no_alpha_beta'          => 'Derzeit sind keine Alpha-/Betaversionen verfügbar.',
        'download_windows_older'          => 'ältere Versionen',

        'download_devtools_1'             => 'Diese Anwendungssammlung enthält nützliche Skripte, um ein Codegerüst zu generieren. Kernkomponenten Ihrer Anwendung können mit einem einfachen Befehl erstellt werden - dies ermöglicht die einfache Entwicklung von Anwendungen mit Phalcon.',
        'download_devtools_docs'          => "Dokumentation: <a href=':1:'>Phalcon Entwicklerwerkzeuge</a>",
        'download_devtools_composer'      => 'Installation via Composer',
        'download_devtools_composer_1'    => 'Installieren Sie Composer in einem beliebigen Verzeichnis:',
        'download_devtools_composer_2'    => 'composer.json wie folgt erstellen:',
        'download_devtools_composer_3'    => 'Führen Sie den Composer-Installer aus:',
        'download_devtools_composer_4'    => 'Erstellen Sie eine symbolische Verknüpfung zum phalcon.php-Skript:',
        'download_devtools_download'      => 'Sie können ein universelles Paket für sämtliche Plattformen mit den Entwicklungswerkzeugen bei <a href=":1:">GitHub</a> herunterladen.',

        'download_vagrant'                => 'Vagrant',
        'download_vagrant_boxes'          => 'Vagrant-Container',
        'download_vagrant_1'              => "<a href=':1:'>Vagrant</a> ist ein hervorragendes Werkzeit um leichte, reproduzierbare und portable Entwicklungsumgebungen zu erstellen und zu konfigurieren.",
        'download_vagrant_2'              => "Nutzen Sie einen der folgenden Container um Phalcon auf einer vorkonfigurierten Umgebung zu testen oder um etwas zu entwickeln.",
        'download_box_1'                  => "Container #1",
        'download_box_2'                  => "Container #2",
        'download_box_user_pass'          => "MySQL Benutzer: :1: Passwort: :2:",
        'download_box_doc_root'           => "HTTP-Wurzelverzeichnis: :1:",
        'download_examples'               => "Vorinstallierte Beispiele",
        'download_examples_1'             => "Die folgenden Beispiele sind auf allen Vagrant-Containern vorinstalliert:",

        'consulting_header'               => "Wir bieten Unterstützung für Phalcon<br>und/oder PHP-Implementierungen",
        'requirements_analysis_1'         => 'Eines der größten Probleme von Entwicklern bei der Realisierung von Projekten sind fehlende adäquat definierte Anforderungen. Es ist häufig der Fall, dass ein Kunde eine andere Zielsetzung als der Entwickler verfolgt, und diese letztendlich liefert.',
        'requirements_analysis_2'         => 'Wir bieten Ihnen eine Dienst zur Analyse Ihres Bedarfes, diskutieren mit den Kunden und Übersetzen deren Vision in genaue Spezifikationen für Entwickler.',
        'implementation_1'                => 'Wenn Sie uns zur Entwicklung Ihrer Anwendung beauftragen möchten, werden wir dies gerne tun. Durch die Nutzung des aktuellsten Standes der Technik, bieten wir robuste Lösungen für Ihre Aufgaben oder Projekte an. Neben der reinen Entwicklung vervollständigen wir diese mit Tests und Dokumentation.',
        'ongoing_support_1'               => 'Kunden mit Interesse an einem längerfristigen Wartungsvertrag bieten wir Unterstützung für Projekte. Kunden können Support auf stundenbasis (mindestens 2 Stunden) für 50 USD pro Stunde erwerben.',
        'ongoing_support_2'               => 'Support-Stunden verfallen nicht und können später genutzt werden. Kunden mit Bedarf an einem laufendem Support-Schema bieten wir flexible und an die Anforderungen angepasste Konditionen an.',
        'sponsors'                        => 'Sponsoren',
        'sponsors_1'                      => 'Denjenigen, welche unsere Arbeit und die weitere Entwicklung von Phalcon unterstützen möchten, bieten wir verschiedene Patenschaften an, welche zu jedem Budget passen.',
        'sponsors_2'                      => 'Manchmal wünschen Kunden die Implementierung von bestimmten Funktionen, welche normalerweise durch ihre hohe Komplexität oder einen hohen Umfang mehr Zeit benötigen würden. Wir können derartige Anfragen sicher zu unseren normalen Tarifen bearbeiten.',
        'contact'                         => 'Kontakt',
        'contact_1'                       => "Sie können uns gerne <a href=':1:'>kontaktieren</a> um Ihre Anforderungen zu diskutieren, damit wir eine Lösung anbieten können, welche auf ihre Bedürfnisse und ihr Budget zugeschnitten ist. Kein Projekt ist zu groß oder zu klein.",

        'phalcon_team'                    => 'Das Phalcon-Team',
        'team_andres_1'                   => 'Andres ist kein Open-Source-Neuling. In den letzten neun Jahren hat er verschiedene Frameworks für PHP entwickelt und veröffentlicht. Zudem ist er mit der Entwicklung von Webanwendungen vertraut - seiner Hauptleidenschaft.',
        'team_andres_2'                   => "Als TR35-Gewinner versucht Andes' mit der richtigen Wahl und Implementation oder dem richtigen Werkzeug einen Auftrag mit Fokus auf Geschwindigkeit auszuführen. Um dies zu erreichen entwickelte er 2011 die Idee eine neue Art von Framework für PHP-Entwickler zu entwerfen, welches auf Benutzerfreundlichkeit, Funktionsreichtum und insbesondere Geschwindigkeit ausgelegt ist.",
        'team_andres_3'                   => 'Durch diesen neuen innovativen Ansatz wurde Phalcon geboren. Ein PHP-Framework, in C geschrieben, welches zahlreiche Funktionen für Entwickler bietet und trotzdem maximale Geschwindigkeit und minimalen Ressourcenverbrauch vereint.',
        'team_andres_4'                   => 'Andres ist einer der Kernentwickler von Phalcon und die Inspirationsquelle des Projektes.',
        'team_nikos_1'                    => 'Nikos arbeitet seit mehr als 20 Jahren in der IT-Industrie. Im Jahr 2000 wurde er Teil der PHP-Welt und nutzt die Sprache seitdem für persönliche Projekte und Projekte seiner Arbeitgeber.',
        'team_nikos_2'                    => 'Er liebt es, neue Technologien und Wege zu entdecken, welche eine Integration mit bestehenden Anwendungen ermöglichen. Dies führt zur Maximierung von Vorteilen sämtlicher beteiligten Projekte.',
        'team_nikos_3'                    => 'Er ist ein begeisterter Unterstützer von Test Driven Development (TDD) und versucht immer, seinen Programmcode vollständig abzudecken.',
        'team_nikos_4'                    => "Nikos' bestehendes Interesse an neuen und innovativen Technologien abseits der bestehenden Wege führte ihn zu Phalcon. Er trat dem Kernteam bei und seine Aufgaben betreffen vor allem die Koordinierung von NFRs, Fehlerberichten, Hilfe mit Tests, Dokumentation und Incubator. Nikos ist zudem für die Bereitstellung der Windows DLLs des Projektes zuständig und bietet - wann immer dies möglich ist - Hilfe und Support.",
        'team_nikolay_1'                  => 'Nikolay entwickelt seit mehr als 10 Jahren Webanwendungen. Er ist sowohl mit hochperformanten, als auch komplexen Websites und Designs vertraut.',
        'team_nikolay_2'                  => 'Nikolay arbeitet bereits seit langem mit Open-Source-Projekten und nutzt diese immer, wenn die Anforderungen dies zulassen. Auf diese Art und Weise verbringt er einen großen Teil seiner Freizeit mit der Community, um einen Beitrag zur Entwicklung der Anwendungsarchitektur und der Geschwindigkeit beizusteuern. Er half insbesondere bei der Verbesserung von Open-Source CMS-Systemen, bei welchen er viel positives Feedback von der Community erhielt.',
        'team_nikolay_3'                  => 'Seine große Erfahrung mit Open-Source Projekten half ihm, sein technischen Wissen zur verbessern und dies der Gemeinschaft zur Verfügung zu stellen. ',
        'team_nikolay_4'                  => 'Nikolay ist ein begeisterter Unterstützer von maximaler Performance bei Webanwendungen. Nachdem er Phalcon kennen lernte, beschloss er diese Ideen weiter zu verfolgen und wurde ein Evangelist des Projektes. Er betreut die russische Community und bietet Ressourcen für russisch-sprechende Entwickler.',
        'team_nikolay_5'                  => "Seine Beiträge: ein Mirror der Hauptwebsite in Russisch (<a href=':1:'>http://www.phalconphp.ru</a>), ein Mirror der Dokumentation auf Russisch (<a href=':2:'>http://docs.phalconphp.ru</a>), Verbesserung der englischen Dokumentation sowie die Betreuung einer Gruppe im sozialen Netzwerk Vkontakte (<a href=':3:'>http://vk.com/phalconphp</a>).",

        'get_involved'                    => 'Mitmachen',
        'about_description_1'             => "Erstaunliche Projekte benötigen erstaunliche Hände. Wir mögen dich noch nicht kennen, aber wir wissen, dass du der Richtige bist. Gemeinsam können wir die Welt verändern! Hier bei Phalcon, entwickeln wir die nächste Framework-Generation für PHP; und wir möchten dir beeindruckende Geschwindigkeit bieten, während wir die Entwicklung zu einem einfachen und entspannten Erlebnis machen. ",
        'about_description_2'             => 'Wir hoffen, dass Ihnen Phalcon genau so wie uns gefällt. Wir sind immer bereit, vielfältige Beiträge entgegenzunehmen um das Projekt voranzutreiben:',
        'about_translations_1'            => "Wir versuchen so viele Entwickler wie möglich zu erreichen und sämtliche Sprachbarrieren einzureißen. Dies erreichen wir durch die Nutzung von <a href=':1:'>:2:</a>, welches die Verwaltung von sämtlichen Wörtern oder Sätzen erlaubt, welche auf dieser Website übersetzt werden müssen. Das aktuelle Projekt-Repository findet sich <a href=':3:'>hier</a> und unten sehen Sie den Fortschritt der Übersetzungsbemühungen.",
        'documentation_upper'             => 'DOKUMENTATION',
        'about_documentation_1'           => 'Die Repository dieser Website ist auf Github verfügbar. Sie dürfen gerne Inhalte oder Rechtschreibfehler verbessern, Beispiele und Artikel hinzufügen, ... Wenn Sie möchten, können Sie auch einen Teil des Inhaltes in eine andere Sprache übersetzen.',
        'screencasts'                     => 'Screencasts',
        'about_screencasts_1'             => "Jeder liebt Screencasts. Wenn Sie etwas Zeit haben und die Community mit lehrreichen Videos unterstützen möchten, freuen wir uns sehr. Sehen Sie sich unseren <a href=':1:'>Vimeo-Kanal</a> zum Einstieg an.",
        'tests'                           => 'Tests',
        'about_tests_1'                   => "Keine Software ist fehlerfrei. Wenn Sie einen Fehler finden, zögern Sie nicht, uns diesen mitzuteilen. Wir verfügen über mehr als <a href=':1:'>8000</a> automatisierte Test. Unit-Tests sind jedoch nicht ausreichend. Helfen Sie uns bei der Erweiterung der bestehenden Sammlung an Tests oder verbessern Sie die bestehende. Jeder hinzugefügte Test macht das Framework stabiler.",
        'sample_applications'             => 'Beispielanwendungen',
        'about_sample_apps_1'             => 'Große Beispiele helfen beim Verständnis der vielen Möglichkeiten des Phalcon-Frameworks. Teilen Sie Ihre Repositories, denn Beispielanwendungen helfen anderen bei Ihrer Arbeit und unterstützen Sie zudem mit Feedback über Ihre eigene Arbeit!',
        'evangelism'                      => 'Evangelisation',
        'about_evangelism_1'              => "Viele Leute wissen noch nicht, dass Phalcon existiert oder dass es wirklich funktioniert. Wir sind sicher, dass viele Entwickler von Phalcon profitieren würden, wenn Sie es kennen würden. Wenn Sie ein PHP Event/Meeting kennen und gerne über das Projekt sprechen würden, haben Sie unsere volle Unterstützung. Wer möchte nicht das Werkzeug kennenlernen, welche die PHP-Entwicklung revolutionieren wird?",
        'share_your_experiences'          => 'Teile deine Erfahrungen',
        'about_share_experiences_1'       => "Seien Sie nicht schüchtern, Ihre Erfahrungen mit Phalcon oder einzelnen Komponenten zu teilen. Obwohl nicht alle Anfragen sofort implementiert werden können, hilft uns ihr Feedback bei der Entwicklung von neuen Funktionen, welche die Entwicklung des Projekten prägen können.",
        'about_blog_1'                    => "Wenn Sie gerne Texte schreiben, möchten wir Sie gerne darauf aufmerksam machen, dass wir auf <a href=':1:'>unserem Blog</a> gerne Tutorials von Ihnen veröffentlichen. Wenn Sie selbst einen Blog betreiben, können wir Ihre Artikel auf unseren Seiten bei sozialen Netzwerken verbreiten, damit diese eine maximale Sichtbarkeit erreichen. Falls Sie in einer anderen Sprache als Englisch schreiben, teilen und übersetzten wir gerne Ihre Artikel. Kennen Sie andere PHP-bezogene Blogs, die das Projekt gerne ihren Lesern vorstellen würden?",
        'donations_sponsoring'            => 'Spenden / Sponsoring',
        'about_sponsoring_1'              => "Wir sind ein kleines aber effektives Entwicklerteam. Wir versuchen, so viel Zeit wie möglich mit dem Projekt zu verbringen. Unsere Leidenschaft für das Projekt verbessert dieses konstant. Phalcon ist Open-Source-Software und freiwillige Beiträge sind für die weitere Entwicklung erforderlich. Sie können die Entwicklung aktiv durch Spenden an das Projekt oder Entwickler unterstützen. Mehr Zeit und Ressourcen für das Projekt beudeutet mehr Aktivität, mehr Verbesserung, mehr Untersützung und mehr erstaunliche Features.",
        'social_networks'                 => 'Soziale Netzwerke',
        'about_social_networks_1'         => "Phalcon entwickelt sich durch unsere Verbesserungswünsche täglich weiter. Soziale Netzwerke sind Teil unseres heutigen Lebens und jeder interagiert mit anderen durch diese. Teile deine Phalcon-Erlebnisse mit deinen sozialen Kreisen und verbreite das Projekt. Zunehmend mehr Menschen beteiligen sich an unserer Gemeinschaft und machen sie dadurch kraftvoller, facettenreicher und populärer. Like, '+1' oder teile Beiträge, welche wir regelmäßig durch verschiedenen sozialen Netzwerke verbreiten. Die Leute, welche Phalcon durch dich entdecken, werden dir danken!",
        'about_social_networks_2'         => "Wir sind in den populäreren sozialen Netzwerken vertreten. Wenn Sie uns folgen, helfen Sie uns dabei, die Verbreitung und Sichtbarkeit des Projektes zu erhöhen.",
        'follow_on_twitter'               => 'Folge uns bei Twitter',
        'facebook_page'                   => 'Facebook-Seite',
        'google_plus_page'                => 'Google+-Seite',
        'official_blog'                   => 'Offizieller Blog',
        'star_on_github'                  => 'Projekt auf Github merken',
        'thank_you'                       => 'Vielen Dank!',
        'about_thank_you_1'               => 'Wir danken allen Helfern und Mitgliedern der Gemeinschaft, welche Phalcon zum besten Framework seiner Art machen. Ihr Engagment motiviert uns jeden Tag. Wir danken für Ihr Vertrauen in Phalcon.',
        'flying_with_phalcon'             => 'Vielen Dank dass Sie mit Phalcon geflogen sind! &lt;3',

        'hosting_description'             => 'Phalcon kann auf jedem Computer installiert werden, sofern ein SSH Root (oder sudo) Zugriff vorhanden ist. Unten finden Sie eine Reihe von Firmen welche dies anbieten:',
        'hosting_fortrabbit_1'            => 'Fortrabbit bietet verschiedene Hostingprodukte an, welche die Bedürfnisse von Entwicklern für nahezu sämtliche Anwendungsfälle befriedigen sollten.',
        'hosting_fortrabbit_2'            => "Fortrabbit bietet eine große Zahl <a href=':1:'>Erweiterungen</a> an, welche auch die Bedürfnisse von anspruchsvollen Projekten befriedigen.",
        'hosting_fortrabbit_3'            => 'Stabile Versionen von Phalcon sind vorinstalliert, Sie können diese einfach von dem Administrations-Dashboard aktivieren.',
        'hosting_webfaction_1'            => 'WebFaction Hosting für Entwickler. Shell Zugang und schnelle Server wo sämtliche Werkzeuge vorinstalliert und gewartet werden.',
        'hosting_webfaction_2'            => "Um PhalconPHP bei WebFaction zu installieren folgende <a href=':1:'>Instruktionen</a> befolgen.",
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud bietet eine skalierbare Lösung bei der nur die tatsächlich genutzten Ressourcen bezahlt werden.',
        'hosting_amazon_ec2_2'            => "Wähle eine vorkonfigurierte Vorlage eines Amazon Machine Images (AMI), um sofort durchzustarten. Alternativ können Sie ein AMI mit Ihren Anwendungen, Bibliotheken, Daten und sonstigen Einstellungen erstellen. <a href=':1:'>Mehr...</a>",
        'hosting_linode_1'                => "Setzen Sie virtuelle Linux-Server in der Linode-Cloud ein. Innerhalb von wenigen Sekunden lässt sich ein Server mit einer Distribution Ihrer Wahl, ausgewählten Ressourcen und Standorten aufsetzen. <a href=':1:'>Weitere Informationen</a>",
        'hosting_digital_ocean_1'         => "Verdammt schnelle Cloud-Technologie für Entwickler. Erstelle einen SSD-Cloudserver in 55 Sekunden. <a href=':1:'>Mehr</a>",
        'hosting_rackspace_1'             => "Cloud-Server sind virtuelle Maschinen mit Linux oder Windows&reg; Server in der Rackspace-Cloud. Ressourcen wie CPU, RAM und Speicherplatz können abhängig von den Bedürfnissen angepasst werden. Sie zahlen nur für die Ressourcen, die Sie benötigen. <a href=':1:'>Mehr erfahren...</a>",
        'hosting_install_instructions'    => 'Installiere Phalcon mithilfe der Standardanleitung.',
        'hosting_azure_1'                 => "Die <a href=':1:'>Windows Azure Cloud</a> bietet Ihnen hochskalierbares und verwaltbares Windows-Hosting für Ihre Webanwendungen. Benutzen Sie Phalcon um Ihre Kosten pro Instanz zu senken.",
        'hosting_azure_2'                 => "Um Phalcon zu installieren, folge der Schritt-für-Schritt-Anleitung <a href=':1:'>dieses SitePoint-Artikels</a>.",

        'testimonials'                    => 'Referenzen',
        'testimonials_description'        => "Unten finden Sie eine Sammlung von Berichten und Erfolgsgeschichten - sowohl von Ihnen als auch von den Entwicklern und Nutzern von Phalcon PHP. Wir freuen uns immer über E-Mails mit Erfolgsgeschichten und veröffentlichen diese nach Möglichkeit in unserem Blog. Wenn Sie uns Ihre Geschichten senden oder in Kontakt treten möchten, können Sie uns gerne eine E-Mail schreiben - <a href='mailto::1:'>:2:</a>.",
        'testimonials_1'                  => "Grüße an das Phalcon-Team! Ich habe ein Projekt auf Basis des Phalcon-Frameworks entwickelt. Es ist ein Guitarama (<a href=':1:'>:2:</a>) - Gitarrenakkordkatalog. Die Seite richtet sich an das russische Publikum und nutzt die russische Sprache, aber ich hoffe das sollte nicht zu Verständnisproblemen führen. Anfang Januar 2013 wurde die Seite erneut gestartet und wächst seitdem kontinuierlich. Aktuelle Besucher pro Tag: ~1500 eindeutige Besucher und ~5000 Seitenaufrufe. Die Seite läuft auf einem alten physischen Server mit 1xP4-3Ghz und 4GB RAM. Noch einmal, vielen Dank für ein hervorragendes Framework und alles was ihr getan habt :) Michael.",
        'testimonials_2'                  => "Hallo, Phalcon-Team. Ich möchte gerne unsere Erfolgsgeschichte mit Phalcon bei unseren Projekten <a href=':1:'>:2:</a> und <a href=':3:'>:4:</a> teilen, welche zu den meistbesuchten Webseiten in Kasachstan und den TOP-10 der CIS gehören. Beide Websiten nutzen eine einfache RESTful-ähnliche API, welche mit Phalcon\Mvc\Micro erstellt wurde. Zu den Spitzenzeiten verarbeiten unsere Server um die 400 Anfragen pro Sekunde und das ist noch nicht am Limit. Der Wechsel zu Phalcon ermöglichte uns die Reduzierung der Anwortzeit und eine Reduzierung von CPU- und RAM-Bedarf. Zudem wurde der Entwicklungsprozess verkürzt. Wir werden auch weiterhin Phalcon für unsere nächsten Projekte Nutzen. Vielen Dank für eure hervorragende Arbeit! Mit freundlichen Grüßen, Nikita Vershinin, Lead Developer, Kolesa.kz und krisha.kz",
        'testimonials_3'                  => "Phalcon-Team, das von euch geschaffene Framework ist erstaunlich. Ich habe noch nie ein Framework genutzt, welches Geschwindigkeit, Effizienz und Intuitivität vereint. Ich möchte bei diesem Projekt mitmachen und so viel wie möglich zurückbringen. Letztens habe ich mit einem ~800-Stunden-Projekt begonnen und kann stolz sagen, dass wir das Phalcon-Framework nutzen. Bravo. Brian Seymour",
        'testimonials_4'                  => "Hey Leute, ich bin gerade über Phalcon gestolpert und es ist einfach genial! Ich wollte einfach nur sagen wie genial ihr seid! So, danke für dieses Framework und arbeitet so weiter! Ivan Penchev",
        'testimonials_5'                  => "Hey Leute, ich habe einen einfachen URL-Verkürzungsdienst mit Phalcon erstellt. Das war aufregend! Wirklich. <a href=':1:'>:2:</a>. Die Demo finden Sie hier <a href=':3:'>:4:</a> :) Murat Küçükosman",
        'testimonials_6'                  => "Hallo Phalcon-Team, ich habe ein kleines Projekt für polnische Benutzer mit ihrem Framework erstellt. Ich muss zugeben, dass die Performance beeindruckend ist. Mein Dienst um den Inhalt von Webseiten zu validieren: <a href=':1:'>:2:</a>.",
        'testimonials_7'                  => "Hey Leute! Ich wollte nur kurz auf die letzte Veröffentlichung unseres alten Projektes hinweisen - <a href=':1:'>:2:</a>. Der Wechsel zu Phalcon ermöglichte uns die Serverlast im Vergleich zum vorherigen Framework zu halbieren - hervorragend!",

        'support_note'                    => "Viele Fehler entstehen, weil Nutzer nicht die letzte Version benutzen. Bitte besuchen Sie :1:, laden Sie die letzte verfügbare Version herunter (oder kompilieren Sie diese) und bestägen Sie, ob das von Ihnen beobachtete Fehlverhalten tatsächlich ein Fehler ist.",
        'support_download_page'           => "Download-Seite",
        'support_documentation_1'         => "Bitte nutzen Sie zuerst :1:. Sie können zudem die Suchfunktion in unseren Dokumenten nutzen, um zu finden, was Sie suchen. Falls Ihre Frage immer noch nicht beantwortet wurde, finden Sie im folgenden weitere Möglichkeiten.",
        'support_phalcon_forum'           => "Phalcon Forum",
        'support_forum_1'                 => "Sie können Fragen im <a href=':1:'>Diskussions Forum</a> stellen",
        'support_irc'                     => "IRC-Kanal",
        'support_irc_1'                   => "Sie finden uns auf dem Kanal :1: des Freenode-Netzwerkes.",
        'support_stack_overflow_1'        => "Wenn Sie mit Stack Overflow vertraut sind oder dieses bevorzugen, können Sie den <a href=':1:'>phalcon</a>-Tag nutzen, um etwas zu suchen oder Ihre Anfrage zu taggen.",
        'support_please_note'             => "Bitte beachten:",
        'support_please_note_1'           => "Stack Overflow steht in keiner Verbindung zu Phalcon",
        'support_please_note_2'           => "Bitte veröffentlichen Sie Fehler mithilfe des <a href=':1:'>Issue Trackers</a> bei GitHub.",
        'support_please_note_3'           => "Bitte keine Feature Anfragen erfassen, diese werden im <a href=':1:'>Issue Tracker</a> auf Github verwaltet",
        'support_please_note_4'           => "Stellen Sie sicher, dass Sie 'phalcon' als Tag in der Frage integrieren",
        'support_please_note_5'           => "Stellen Sie sicher, dass Sie 'Phalcon' in der Frage erwähnen",
        'support_reporting_a_bug'         => "Fehler melden",
        'support_reporting_a_bug_1'       => "Sollte keine der oben genannten Optionen funktioniert haben, bitte Bugs im <a href=':1:'>issue tracker</a> auf github melden.",


    );

    // return $messages;