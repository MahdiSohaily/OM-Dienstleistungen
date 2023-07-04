<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '../../Layouts/Navbar.vue';
import Footer from '../../Layouts/Footer.vue';

const props = defineProps({
    company: Object,
    blog_page: Object,
    posts: Array
});

</script>
<template>
    <Head title="Blog" />
    <Navbar :company="company" />
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="col-8 mx-auto card card-body  shadow-blur mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="mx-auto my-auto">
                    <div class="h-100">
                        <h4 class="mb-1">
                            Datenschutzerklärung
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h4 class="mb-0">1. Datenschutz auf einen Blick</h4>
                    </div>
                    <div class="card-body p-3">
                        <h5>Allgemeine Hinweise</h5>
                        <p>
                            Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen
                            Daten
                            passiert, wenn Sie diese Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie
                            persönlich identifiziert werden können. Ausführliche Informationen zum Thema Datenschutz
                            entnehmen
                            Sie unserer unter diesem Text aufgeführten Datenschutzerklärung.
                        </p>
                        <h6>Datenerfassung auf dieser Website</h6>
                        <p class="text-bold">Wer ist verantwortlich für die Datenerfassung auf dieser Website?</p>
                        <p>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten
                            können Sie dem Abschnitt „Hinweis zur Verantwortlichen Stelle“ in dieser Datenschutzerklärung
                            entnehmen.
                        </p>
                        <p class="text-bold">Wie erfassen wir Ihre Daten?</p>
                        <p>
                            Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich
                            z. B. um
                            Daten handeln, die Sie in ein Kontaktformular eingeben.
                        </p>
                        <p>
                            Andere Daten werden automatisch oder nach Ihrer Einwilligung beim Besuch der Website durch
                            unsere ITSysteme erfasst. Das sind vor allem technische Daten (z. B. Internetbrowser,
                            Betriebssystem oder Uhrzeit
                            des Seitenaufrufs). Die Erfassung dieser Daten erfolgt automatisch, sobald Sie diese Website
                            betreten.
                        </p>

                        <p class="text-bold">Wofür nutzen wir Ihre Daten?</p>
                        <p>Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu gewährleisten.
                            Andere
                            Daten können zur Analyse Ihres Nutzerverhaltens verwendet werden.
                        </p>

                        <p class="text-bold">Welche Rechte haben Sie bezüglich Ihrer Daten?</p>
                        <p>
                            Sie haben jederzeit das Recht, unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer
                            gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die
                            Berichtigung oder
                            Löschung dieser Daten zu verlangen. Wenn Sie eine Einwilligung zur Datenverarbeitung erteilt
                            haben,
                            können Sie diese Einwilligung jederzeit für die Zukunft widerrufen. Außerdem haben Sie das
                            Recht, unter
                            bestimmten Umständen die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu
                            verlangen.
                            Des Weiteren steht Ihnen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu.
                            Hierzu sowie zu weiteren Fragen zum Thema Datenschutz können Sie sich jederzeit an uns wenden
                        </p>
                        <h5>Analyse-Tools und Tools von Drittanbietern</h5>
                        <p>
                            Beim Besuch dieser Website kann Ihr Surf-Verhalten statistisch ausgewertet werden. Das geschieht
                            vor
                            allem mit sogenannten Analyseprogrammen.
                            Detaillierte Informationen zu diesen Analyseprogrammen finden Sie in der folgenden
                            Datenschutzerklärung
                        </p>

                        <h4>2. Hosting</h4>
                        <p>Wir hosten die Inhalte unserer Website bei folgendem Anbieter:</p>

                        <h5>
                            Externes Hosting
                        </h5>
                        <p>Diese Website wird extern gehostet. Die personenbezogenen Daten, die auf dieser Website erfasst
                            werden,
                            werden auf den Servern des Hosters / der Hoster gespeichert. Hierbei kann es sich v. a. um
                            IP-Adressen,
                            Kontaktanfragen, Meta- und Kommunikationsdaten, Vertragsdaten, Kontaktdaten, Namen,
                            Websitezugriffe
                            und sonstige Daten, die über eine Website generiert werden, handeln.
                        </p>
                        <p>
                            Das externe Hosting erfolgt zum Zwecke der Vertragserfüllung gegenüber unseren potenziellen und
                            bestehenden Kunden (Art. 6 Abs. 1 lit. b DSGVO) und im Interesse einer sicheren, schnellen und
                            effizienten
                            Bereitstellung unseres Online-Angebots durch einen professionellen Anbieter (Art. 6 Abs. 1 lit.
                            f DSGVO).
                            Sofern eine entsprechende Einwilligung abgefragt wurde, erfolgt die Verarbeitung ausschließlich
                            auf
                            Grundlage von Art. 6 Abs. 1 lit. a DSGVO und § 25 Abs. 1 TTDSG, soweit die Einwilligung die
                            Speicherung
                            von Cookies oder den Zugriff auf Informationen im Endgerät des Nutzers (z. B.
                            Device-Fingerprinting) im
                            Sinne des TTDSG umfasst. Die Einwilligung ist jederzeit widerrufbar.
                        </p>
                        <p>Unser(e) Hoster wird bzw. werden Ihre Daten nur insoweit verarbeiten, wie dies zur Erfüllung
                            seiner
                            Leistungspflichten erforderlich ist und unsere Weisungen in Bezug auf diese Daten befolgen.
                        </p>
                        <p>
                            Wir setzen folgende(n) Hoster ein:
                        </p>
                        <cite>
                            <pre>
GoDaddy.com, LLC
2155 E GoDaddy Way,
Tempe, Arizona 85284,
United States
EU MOSS: EU372022452
                            </pre>
                        </cite>
                        <p class="text-bold">Auftragsverarbeitung</p>
                        <p>Wir haben einen Vertrag über Auftragsverarbeitung (AVV) zur Nutzung des oben genannten Dienstes
                            geschlossen. Hierbei handelt es sich um einen datenschutzrechtlich vorgeschriebenen Vertrag, der
                            gewährleistet, dass dieser die personenbezogenen Daten unserer Websitebesucher nur nach unseren
                            Weisungen und unter Einhaltung der DSGVO verarbeitet.
                        </p>

                        <h4>3. Allgemeine Hinweise und Pflichtinformationen</h4>
                        <h5>Datenschutz</h5>
                        <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln
                            Ihre
                            personenbezogenen Daten vertraulich und entsprechend den gesetzlichen Datenschutzvorschriften
                            sowie
                            dieser Datenschutzerklärung
                        </p>
                        <p>
                            Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten erhoben.
                            Personenbezogene Daten sind Daten, mit denen Sie persönlich identifiziert werden können. Die
                            vorliegende
                            Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir sie nutzen. Sie erläutert
                            auch, wie
                            und zu welchem Zweck das geschieht.
                        </p>

                        <p>Wir weisen darauf hin, dass die Datenübertragung im Internet (z. B. bei der Kommunikation per
                            E-Mail)
                            Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte
                            ist nicht
                            möglich.
                        </p>

                        <h5>Hinweis zur verantwortlichen Stelle</h5>
                        <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
                        <pre>
O&M Dienstleistungen GbR
Am Tonschuppen 2
53347 Alfter
<br>
<a href="tel:04917681155605">Telefon: +49 (0) 176 81155605</a>
<a href="mailto:info@om-dienstleistungen.de">E-Mail: info@om-dienstleistungen.de</a>
</pre>
                        <p>
                            Verantwortliche Stelle ist die natürliche oder juristische Person, die allein oder gemeinsam mit
                            anderen über
                            die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z. B. Namen, E-Mail-Adressen
                            o. Ä.)
                            entscheidet.
                        </p>
                        <h5>Speicherdauer</h5>
                        <p>Soweit innerhalb dieser Datenschutzerklärung keine speziellere Speicherdauer genannt wurde,
                            verbleiben
                            Ihre personenbezogenen Daten bei uns, bis der Zweck für die Datenverarbeitung entfällt. Wenn Sie
                            ein
                            berechtigtes Löschersuchen geltend machen oder eine Einwilligung zur Datenverarbeitung
                            widerrufen,
                            werden Ihre Daten gelöscht, sofern wir keine anderen rechtlich zulässigen Gründe für die
                            Speicherung Ihrer
                            personenbezogenen Daten haben (z. B. steuer- oder handelsrechtliche Aufbewahrungsfristen); im
                            letztgenannten Fall erfolgt die Löschung nach Fortfall dieser Gründe.
                        </p>
                        <h5>Allgemeine Hinweise zu den Rechtsgrundlagen der Datenverarbeitung auf dieser
                            Website</h5>
                        <p>Sofern Sie in die Datenverarbeitung eingewilligt haben, verarbeiten wir Ihre personenbezogenen
                            Daten auf
                            Grundlage von Art. 6 Abs. 1 lit. a DSGVO bzw. Art. 9 Abs. 2 lit. a DSGVO, sofern besondere
                            Datenkategorien
                            nach Art. 9 Abs. 1 DSGVO verarbeitet werden. Im Falle einer ausdrücklichen Einwilligung in die
                            Übertragung
                            personenbezogener Daten in Drittstaaten erfolgt die Datenverarbeitung außerdem auf Grundlage von
                            Art.
                            49 Abs. 1 lit. a DSGVO. Sofern Sie in die Speicherung von Cookies oder in den Zugriff auf
                            Informationen in
                            Ihr Endgerät (z. B. via Device-Fingerprinting) eingewilligt haben, erfolgt die Datenverarbeitung
                            zusätzlich
                            auf Grundlage von § 25 Abs. 1 TTDSG. Die Einwilligung ist jederzeit widerrufbar. Sind Ihre Daten
                            zur
                            Vertragserfüllung oder zur Durchführung vorvertraglicher Maßnahmen erforderlich, verarbeiten wir
                            Ihre
                            Daten auf Grundlage des Art. 6 Abs. 1 lit. b DSGVO. Des Weiteren verarbeiten wir Ihre Daten,
                            sofern diese
                            zur Erfüllung einer rechtlichen Verpflichtung erforderlich sind auf Grundlage von Art. 6 Abs. 1
                            lit. c DSGVO.
                            Die Datenverarbeitung kann ferner auf Grundlage unseres berechtigten Interesses nach Art. 6 Abs.
                            1 lit. f
                            DSGVO erfolgen. Über die jeweils im Einzelfall einschlägigen Rechtsgrundlagen wird in den
                            folgenden
                            Absätzen dieser Datenschutzerklärung informiert.
                        </p>
                        <h5>Hinweis zur Datenweitergabe in die USA und sonstige Drittstaaten</h5>
                        <p>Wir verwenden unter anderem Tools von Unternehmen mit Sitz in den USA oder sonstigen
                            datenschutzrechtlich nicht sicheren Drittstaaten. Wenn diese Tools aktiv sind, können Ihre
                            personenbezogene Daten in diese Drittstaaten übertragen und dort verarbeitet werden. Wir weisen
                            darauf
                            hin, dass in diesen Ländern kein mit der EU vergleichbares Datenschutzniveau garantiert werden
                            kann.
                            Beispielsweise sind US-Unternehmen dazu verpflichtet, personenbezogene Daten an
                            Sicherheitsbehörden
                            herauszugeben, ohne dass Sie als Betroffener hiergegen gerichtlich vorgehen könnten. Es kann
                            daher nicht
                            ausgeschlossen werden, dass US-Behörden (z. B. Geheimdienste) Ihre auf US-Servern befindlichen
                            Daten zu
                            Überwachungszwecken verarbeiten, auswerten und dauerhaft speichern. Wir haben auf diese
                            Verarbeitungstätigkeiten keinen Einfluss.
                        </p>
                        <h5>Widerruf Ihrer Einwilligung zur Datenverarbeitung</h5>
                        <p>Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung möglich. Sie
                            können eine
                            bereits erteilte Einwilligung jederzeit widerrufen. Die Rechtmäßigkeit der bis zum Widerruf
                            erfolgten
                            Datenverarbeitung bleibt vom Widerruf unberührt
                        </p>
                        <h5>Widerspruchsrecht gegen die Datenerhebung in besonderen Fällen sowie gegen
                            Direktwerbung (Art. 21 DSGVO)
                        </h5>

                        <p>
                            WENN DIE DATENVERARBEITUNG AUF GRUNDLAGE VON ART. 6 ABS. 1 LIT. E ODER F DSGVO
                            ERFOLGT, HABEN SIE JEDERZEIT DAS RECHT, AUS GRÜNDEN, DIE SICH AUS IHRER BESONDEREN
                            SITUATION ERGEBEN, GEGEN DIE VERARBEITUNG IHRER PERSONENBEZOGENEN DATEN
                            WIDERSPRUCH EINZULEGEN; DIES GILT AUCH FÜR EIN AUF DIESE BESTIMMUNGEN GESTÜTZTES
                            PROFILING. DIE JEWEILIGE RECHTSGRUNDLAGE, AUF DENEN EINE VERARBEITUNG BERUHT,
                            ENTNEHMEN SIE DIESER DATENSCHUTZERKLÄRUNG. WENN SIE WIDERSPRUCH EINLEGEN,
                            WERDEN WIR IHRE BETROFFENEN PERSONENBEZOGENEN DATEN NICHT MEHR VERARBEITEN, ES
                            SEI DENN, WIR KÖNNEN ZWINGENDE SCHUTZWÜRDIGE GRÜNDE FÜR DIE VERARBEITUNG
                            NACHWEISEN, DIE IHRE INTERESSEN, RECHTE UND FREIHEITEN ÜBERWIEGEN ODER DIE
                            VERARBEITUNG DIENT DER GELTENDMACHUNG, AUSÜBUNG ODER VERTEIDIGUNG VON
                            RECHTSANSPRÜCHEN (WIDERSPRUCH NACH ART. 21 ABS. 1 DSGVO).
                        </p>
                        <p>
                            WERDEN IHRE PERSONENBEZOGENEN DATEN VERARBEITET, UM DIREKTWERBUNG ZU BETREIBEN,
                            SO HABEN SIE DAS RECHT, JEDERZEIT WIDERSPRUCH GEGEN DIE VERARBEITUNG SIE
                            BETREFFENDER PERSONENBEZOGENER DATEN ZUM ZWECKE DERARTIGER WERBUNG
                            EINZULEGEN; DIES GILT AUCH FÜR DAS PROFILING, SOWEIT ES MIT SOLCHER DIREKTWERBUNG IN
                            VERBINDUNG STEHT. WENN SIE WIDERSPRECHEN, WERDEN IHRE PERSONENBEZOGENEN DATEN
                            ANSCHLIESSEND NICHT MEHR ZUM ZWECKE DER DIREKTWERBUNG VERWENDET (WIDERSPRUCH
                            NACH ART. 21 ABS. 2 DSGVO).
                        </p>

                        <h5>Beschwerderecht bei der zuständigen Aufsichtsbehörde</h5>
                        <p>Im Falle von Verstößen gegen die DSGVO steht den Betroffenen ein Beschwerderecht bei einer
                            Aufsichtsbehörde, insbesondere in dem Mitgliedstaat ihres gewöhnlichen Aufenthalts, ihres
                            Arbeitsplatzes
                            oder des Orts des mutmaßlichen Verstoßes zu. Das Beschwerderecht besteht unbeschadet
                            anderweitiger
                            verwaltungsrechtlicher oder gerichtlicher Rechtsbehelfe.
                        </p>

                        <h5>Recht auf Datenübertragbarkeit</h5>
                        <p>
                            Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines
                            Vertrags
                            automatisiert verarbeiten, an sich oder an einen Dritten in einem gängigen, maschinenlesbaren
                            Format
                            aushändigen zu lassen. Sofern Sie die direkte Übertragung der Daten an einen anderen
                            Verantwortlichen
                            verlangen, erfolgt dies nur, soweit es technisch machbar ist.
                        </p>

                        <h5>Auskunft, Berichtigung und Löschung</h5>
                        <p>
                            Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf
                            unentgeltliche
                            Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den
                            Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung oder Löschung dieser Daten.
                            Hierzu sowie
                            zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit an uns wenden.
                        </p>

                        <h5>
                            Recht auf Einschränkung der Verarbeitung
                        </h5>
                        <p>
                            Sie haben das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu
                            verlangen.
                            Hierzu können Sie sich jederzeit an uns wenden. Das Recht auf Einschränkung der Verarbeitung
                            besteht in
                            folgenden Fällen:
                        </p>

                        <ul>
                            <li class="mb-1">
                                Wenn Sie die Richtigkeit Ihrer bei uns gespeicherten personenbezogenen Daten bestreiten,
                                benötigen wir
                                in der Regel Zeit, um dies zu überprüfen. Für die Dauer der Prüfung haben Sie das Recht, die
                                Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.
                            </li>
                            <li class="mb-1">
                                Wenn die Verarbeitung Ihrer personenbezogenen Daten unrechtmäßig geschah/geschieht, können
                                Sie
                                statt der Löschung die Einschränkung der Datenverarbeitung verlangen.
                            </li>
                            <li class="mb-1">Wenn wir Ihre personenbezogenen Daten nicht mehr benötigen, Sie sie jedoch zur
                                Ausübung,
                                Verteidigung oder Geltendmachung von Rechtsansprüchen benötigen, haben Sie das Recht, statt
                                der
                                Löschung die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.
                            </li>
                            <li class="mb-1">Wenn Sie einen Widerspruch nach Art. 21 Abs. 1 DSGVO eingelegt haben, muss eine
                                Abwägung
                                zwischen
                                Ihren und unseren Interessen vorgenommen werden. Solange noch nicht feststeht, wessen
                                Interessen
                                überwiegen, haben Sie das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen
                                Daten
                                zu verlangen.
                            </li>
                        </ul>

                        <p>Wenn Sie die Verarbeitung Ihrer personenbezogenen Daten eingeschränkt haben, dürfen diese Daten –
                            von
                            ihrer Speicherung abgesehen – nur mit Ihrer Einwilligung oder zur Geltendmachung, Ausübung oder
                            Verteidigung von Rechtsansprüchen oder zum Schutz der Rechte einer anderen natürlichen oder
                            juristischen Person oder aus Gründen eines wichtigen öffentlichen Interesses der Europäischen
                            Union oder
                            eines Mitgliedstaats verarbeitet werden.
                        </p>
                        <h5>SSL- bzw. TLS-Verschlüsselung</h5>
                        <p>Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte,
                            wie zum
                            Beispiel Bestellungen oder Anfragen, die Sie an uns als Seitenbetreiber senden, eine SSL- bzw.
                            TLSVerschlüsselung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile des
                            Browsers von
                            <code>http://</code> auf <code>https://</code> wechselt und an dem Schloss-Symbol
                            in Ihrer
                            Browserzeile.
                            Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, die Sie an uns
                            übermitteln, nicht
                            von Dritten mitgelesen werden.
                        </p>
                        <h5>Widerspruch gegen Werbe-E-Mails</h5>
                        <p>Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten zur Übersendung von
                            nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit widersprochen.
                            Die
                            Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten
                            Zusendung von
                            Werbeinformationen, etwa durch Spam-E-Mails, vor.
                        </p>

                        <h4>4. Datenerfassung auf dieser Website</h4>
                        <h5>Kontaktformular</h5>
                        <p>Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem
                            Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der
                            Anfrage
                            und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre
                            Einwilligung weiter.</p>
                        <p>Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre
                            Anfrage mit
                            der Erfüllung eines Vertrags zusammenhängt oder zur Durchführung vorvertraglicher Maßnahmen
                            erforderlich ist. In allen übrigen Fällen beruht die Verarbeitung auf unserem berechtigten
                            Interesse an der
                            effektiven Bearbeitung der an uns gerichteten Anfragen (Art. 6 Abs. 1 lit. f DSGVO) oder auf
                            Ihrer
                            Einwilligung (Art. 6 Abs. 1 lit. a DSGVO) sofern diese abgefragt wurde; die Einwilligung ist
                            jederzeit
                            widerrufbar.
                        </p>
                        <p>Die von Ihnen im Kontaktformular eingegebenen Daten verbleiben bei uns, bis Sie uns zur Löschung
                            auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung
                            entfällt
                            (z. B. nach abgeschlossener Bearbeitung Ihrer Anfrage). Zwingende gesetzliche Bestimmungen –
                            insbesondere Aufbewahrungsfristen – bleiben unberührt.
                        </p>
                        <h5>Anfrage per E-Mail, Telefon oder Telefax</h5>
                        <p>Wenn Sie uns per E-Mail, Telefon oder Telefax kontaktieren, wird Ihre Anfrage inklusive aller
                            daraus
                            hervorgehenden personenbezogenen Daten (Name, Anfrage) zum Zwecke der Bearbeitung Ihres
                            Anliegens
                            bei uns gespeichert und verarbeitet. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.
                        </p>
                        <p>Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre
                            Anfrage mit
                            der Erfüllung eines Vertrags zusammenhängt oder zur Durchführung vorvertraglicher Maßnahmen
                            erforderlich ist. In allen übrigen Fällen beruht die Verarbeitung auf unserem berechtigten
                            Interesse an der
                            effektiven Bearbeitung der an uns gerichteten Anfragen (Art. 6 Abs. 1 lit. f DSGVO) oder auf
                            Ihrer
                            Einwilligung (Art. 6 Abs. 1 lit. a DSGVO) sofern diese abgefragt wurde; die Einwilligung ist
                            jederzeit
                            widerrufbar.
                        </p>

                        <p>Die von Ihnen an uns per Kontaktanfragen übersandten Daten verbleiben bei uns, bis Sie uns zur
                            Löschung
                            auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung
                            entfällt
                            (z. B. nach abgeschlossener Bearbeitung Ihres Anliegens). Zwingende gesetzliche Bestimmungen –
                            insbesondere gesetzliche Aufbewahrungsfristen – bleiben unberührt.
                        </p>
                        <h5>Registrierung mit Google</h5>
                        <p>Statt einer direkten Registrierung auf dieser Website können Sie sich mit Google registrieren.
                            Anbieter
                            dieses Dienstes ist die Google Ireland Limited („Google”), Gordon House, Barrow Street, Dublin
                            4, Irland.
                        </p>

                        <p>Um sich mit Google zu registrieren, müssen Sie ausschließlich Ihre Google-Namen und Ihr Passwort
                            eingeben. Google wird Sie identifizieren und unserer Website Ihre Identität bestätigen.
                        </p>
                        <p>Wenn Sie sich mit Google anmelden, ist es uns ggf. möglich bestimmte Informationen auf Ihrem
                            Konto zu
                            nutzen, um Ihr Profil bei uns zu vervollständigen. Ob und welche Informationen das sind,
                            entscheiden Sie im
                            Rahmen Ihrer Google-Sicherheitseinstellungen, die Sie hier finden:
                            <a class="text-info"
                                href="https://myaccount.google.com/security">https://myaccount.google.com/security</a> und
                            <a class="text-info"
                                href="https://myaccount.google.com/permissions">https://myaccount.google.com/permissions</a>.
                        </p>
                        <p>Die Datenverarbeitung, die mit der Google-Registrierung einhergeht beruht auf unserem
                            berechtigten
                            Interesse, unseren Nutzern einen möglichst einfachen Registrierungsprozess zu ermöglichen (Art.
                            6 Abs. 1
                            lit. f DSGVO). Da die Nutzung der Registrierungsfunktion freiwillig ist und die Nutzer selbst
                            über die
                            jeweiligen Zugriffsmöglichkeiten entscheiden können, sind keine entgegenstehenden überwiegenden
                            Rechte der Betroffenen ersichtlich.
                        </p>
                        <h4>5. Soziale Medien</h4>
                        <h5>Instagram</h5>
                        <p>Auf dieser Website sind Funktionen des Dienstes Instagram eingebunden. Diese Funktionen werden
                            angeboten durch die Meta Platforms Ireland Limited, 4 Grand Canal Square, Grand Canal Harbour,
                            Dublin 2,
                            Irland.
                        </p>
                        <p>Wenn das Social-Media-Element aktiv ist, wird eine direkte Verbindung zwischen Ihrem Endgerät und
                            dem
                            Instagram-Server hergestellt. Instagram erhält dadurch Informationen über den Besuch dieser
                            Website
                            durch Sie.
                        </p>
                        <p>Wenn Sie in Ihrem Instagram-Account eingeloggt sind, können Sie durch Anklicken des
                            Instagram-Buttons
                            die Inhalte dieser Website mit Ihrem Instagram-Profil verlinken. Dadurch kann Instagram den
                            Besuch dieser
                            Website Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten
                            keine
                            Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Instagram erhalten.
                        </p>
                        <p>Soweit eine Einwilligung (Consent) eingeholt wurde, erfolgt der Einsatz des o. g. Dienstes auf
                            Grundlage von
                            Art. 6 Abs. 1 lit. a DSGVO und § 25 TTDSG. Die Einwilligung ist jederzeit widerrufbar. Soweit
                            keine
                            Einwilligung eingeholt wurde, erfolgt die Verwendung des Dienstes auf Grundlage unseres
                            berechtigten
                            Interesses an einer möglichst umfassenden Sichtbarkeit in den Sozialen Medien.
                        </p>
                        <p>Soweit mit Hilfe des hier beschriebenen Tools personenbezogene Daten auf unserer Website erfasst
                            und an
                            Facebook bzw. Instagram weitergeleitet werden, sind wir und die Meta Platforms Ireland Limited,
                            4 Grand
                            Canal Square, Grand Canal Harbour, Dublin 2, Irland gemeinsam für diese Datenverarbeitung
                            verantwortlich (Art. 26 DSGVO). Die gemeinsame Verantwortlichkeit beschränkt sich dabei
                            ausschließlich
                            auf die Erfassung der Daten und deren Weitergabe an Facebook bzw. Instagram. Die nach der
                            Weiterleitung
                            erfolgende Verarbeitung durch Facebook bzw. Instagram ist nicht Teil der gemeinsamen
                            Verantwortung.
                            Die uns gemeinsam obliegenden Verpflichtungen wurden in einer Vereinbarung über gemeinsame
                            Verarbeitung festgehalten. Den Wortlaut der Vereinbarung finden Sie unter:
                            <a class="text-info"
                                href="https://www.facebook.com/legal/controller_addendum">https://www.facebook.com/legal/controller_addendum</a>.
                            Laut dieser Vereinbarung sind wir für die Erteilung
                            der Datenschutzinformationen beim Einsatz des Facebook- bzw. Instagram-Tools und für die
                            datenschutzrechtlich sichere Implementierung des Tools auf unserer Website verantwortlich. Für
                            die
                            Datensicherheit der Facebook bzw. Instagram-Produkte ist Facebook verantwortlich.
                            Betroffenenrechte
                            (z. B. Auskunftsersuchen) hinsichtlich der bei Facebook bzw. Instagram verarbeiteten Daten
                            können Sie
                            direkt bei Facebook geltend machen. Wenn Sie die Betroffenenrechte bei uns geltend machen, sind
                            wir
                            verpflichtet, diese an Facebook weiterzuleiten.
                        </p>
                        <p>Die Datenübertragung in die USA wird auf die Standardvertragsklauseln der EU-Kommission gestützt.
                            Details finden Sie hier:
                        </p>
                        <p>
                            <a class="text-info"
                                href="https://www.facebook.com/legal/EU_data_transfer_addendum">https://www.facebook.com/legal/EU_data_transfer_addendum</a>,
                            <br>
                            <a class="text-info"
                                href="https://help.instagram.com/519522125107875">https://help.instagram.com/519522125107875</a>
                            und
                            <br>
                            <a class="text-info"
                                href="https://de-de.facebook.com/help/566994660333381">https://de-de.facebook.com/help/566994660333381</a>.
                        </p>
                        <p>Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Instagram:
                            <a class="text-info"
                                href="https://instagram.com/about/legal/privacy/">https://instagram.com/about/legal/privacy/</a>.
                        </p>
                        <h4>6. Analyse-Tools und Werbung</h4>
                        <h5>Google Ads</h5>
                        <p>Der Websitebetreiber verwendet Google Ads. Google Ads ist ein Online-Werbeprogramm der Google
                            Ireland Limited („Google“), Gordon House, Barrow Street, Dublin 4, Irland.</p>
                        <p>Google Ads ermöglicht es uns Werbeanzeigen in der Google-Suchmaschine oder auf Drittwebseiten
                            auszuspielen, wenn der Nutzer bestimmte Suchbegriffe bei Google eingibt (Keyword-Targeting).
                            Ferner
                            können zielgerichtete Werbeanzeigen anhand der bei Google vorhandenen Nutzerdaten (z. B.
                            Standortdaten und Interessen) ausgespielt werden (Zielgruppen-Targeting). Wir als
                            Websitebetreiber
                            können diese Daten quantitativ auswerten, indem wir beispielsweise analysieren, welche
                            Suchbegriffe zur
                            Ausspielung unserer Werbeanzeigen geführt haben und wie viele Anzeigen zu entsprechenden Klicks
                            geführt haben.
                        </p>
                        <p>Die Nutzung dieses Dienstes erfolgt auf Grundlage Ihrer Einwi</p>
                        <p>Die Datenübertragung in die USA wird auf die Standardvertragsklauseln der EU-Kommission gestützt.
                            Details finden Sie hier:
                            <a class="text-info"
                                href="https://policies.google.com/privacy/frameworks">https://policies.google.com/privacy/frameworks</a>
                            und
                            <a class="text-info"
                                href="https://privacy.google.com/businesses/controllerterms/mccs/">https://privacy.google.com/businesses/controllerterms/mccs/</a>.
                        </p>
                        <h5>Google Conversion-Tracking</h5>
                        <p>
                            Diese Website nutzt Google Conversion Tracking. Anbieter ist die Google Ireland Limited
                            („Google“), Gordon
                            House, Barrow Street, Dublin 4, Irland.



                        </p>
                        <p>
                            Mit Hilfe von Google-Conversion-Tracking können Google und wir erkennen, ob der Nutzer bestimmte
                            Aktionen durchgeführt hat. So können wir beispielsweise auswerten, welche Buttons auf unserer
                            Website
                            wie häufig geklickt und welche Produkte besonders häufig angesehen oder gekauft wurden. Diese
                            Informationen dienen dazu, Conversion-Statistiken zu erstellen. Wir erfahren die Gesamtanzahl
                            der Nutzer,
                            die auf unsere Anzeigen geklickt haben und welche Aktionen sie durchgeführt haben. Wir erhalten
                            keine
                            Informationen, mit denen wir den Nutzer persönlich identifizieren können. Google selbst nutzt
                            zur
                            Identifikation Cookies oder vergleichbare Wiedererkennungstechnologien.</p>
                        <p>
                            Die Nutzung dieses Dienstes erfolgt auf Grundlage Ihrer Einwilligung nach Art. 6 Abs. 1 lit. a
                            DSGVO und §
                            25 Abs. 1 TTDSG. Die Einwilligung ist jederzeit widerrufbar.</p>
                        <p>Mehr Informationen zu Google Conversion-Tracking finden Sie in den Datenschutzbestimmungen von
                            Google:</p>
                        <p><a class="text-info"
                                href="https://policies.google.com/privacy?hl=de">https://policies.google.com/privacy?hl=de</a>.
                        </p>
                        <h4>7. Plugins und Tools</h4>
                        <h5>Google Maps</h5>
                        <p>Diese Seite nutzt den Kartendienst Google Maps. Anbieter ist die Google Ireland Limited
                            („Google“), Gordon
                            House, Barrow Street, Dublin 4, Irland.
                        </p>
                        <p>Zur Nutzung der Funktionen von Google Maps ist es notwendig, Ihre IP-Adresse zu speichern. Diese
                            Informationen werden in der Regel an einen Server von Google in den USA übertragen und dort
                            gespeichert.
                            Der Anbieter dieser Seite hat keinen Einfluss auf diese Datenübertragung. Wenn Google Maps
                            aktiviert ist,
                            kann Google zum Zwecke der einheitlichen Darstellung der Schriftarten Google Fonts verwenden.
                            Beim
                            Aufruf von Google Maps lädt Ihr Browser die benötigten Web Fonts in ihren Browsercache, um Texte
                            und
                            Schriftarten korrekt anzuzeigen.
                        </p>
                        <p>Die Nutzung von Google Maps erfolgt im Interesse einer ansprechenden Darstellung unserer
                            OnlineAngebote und an einer leichten Auffindbarkeit der von uns auf der Website angegebenen
                            Orte. Dies stellt
                            ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar. Sofern eine
                            entsprechende
                            Einwilligung abgefragt wurde, erfolgt die Verarbeitung ausschließlich auf Grundlage von Art. 6
                            Abs. 1 lit. a
                            DSGVO und § 25 Abs. 1 TTDSG, soweit die Einwilligung die Speicherung von Cookies oder den
                            Zugriff auf
                            Informationen im Endgerät des Nutzers (z. B. Device-Fingerprinting) im Sinne des TTDSG umfasst.
                            Die
                            Einwilligung ist jederzeit widerrufbar.
                        </p>
                        <p>Die Datenübertragung in die USA wird auf die Standardvertragsklauseln der EU-Kommission gestützt.
                            Details finden Sie hier:
                        </p>
                        <p>
                            <a class="text-info"
                                href="https://policies.google.com/privacy/frameworks">https://policies.google.com/privacy/frameworks</a>
                            und
                            <a class="text-info"
                                href="https://privacy.google.com/businesses/controllerterms/mccs/">https://privacy.google.com/businesses/controllerterms/mccs/</a>.
                        </p>
                        <h4>8. eCommerce und Zahlungsanbieter</h4>
                        <h5>Verarbeiten von Kunden- und Vertragsdaten</h5>
                        <p>
                            Wir erheben, verarbeiten und nutzen personenbezogene Kunden- und Vertragsdaten zur Begründung,
                            inhaltlichen Ausgestaltung und Änderung unserer Vertragsbeziehungen. Personenbezogene Daten über
                            die
                            Inanspruchnahme dieser Website (Nutzungsdaten) erheben, verarbeiten und nutzen wir nur, soweit
                            dies
                            erforderlich ist, um dem Nutzer die Inanspruchnahme des Dienstes zu ermöglichen oder
                            abzurechnen.
                            Rechtsgrundlage hierfür ist Art. 6 Abs. 1 lit. b DSGVO.
                        </p>
                        <p>Die erhobenen Kundendaten werden nach Abschluss des Auftrags oder Beendigung der
                            Geschäftsbeziehung und Ablauf der ggf. bestehenden gesetzlichen Aufbewahrungsfristen gelöscht.
                            Gesetzliche Aufbewahrungsfristen bleiben unberührt.
                        </p>




                        <a href="#">33</a>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer :name="company.name" />
</template>
<style>
p {
    white-space: break-spaces !important;
    word-wrap: none !important;
}
</style>