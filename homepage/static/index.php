<?php
$partner = array(
    "img/partner/96726_wetrok_logo.gif",
    "img/partner/96732_henkel_logo.gif",
    "img/partner/96738_logoklk_neu.gif",
    "img/partner/96747_logobrenntag.gif",
    "img/partner/96756_logoschaerer.gif",
    "img/partner/96768_logohydrior.gif",
    "img/partner/98520_logobasf.gif",
    "img/partner/99500_logoimpag.gif",
    "img/partner/99506_logochemia.gif",
    "img/partner/99515_logozsk.gif",
    "img/partner/99524_logoprochem.gif",
    "img/partner/99530_logokarit.gif",
    "img/partner/99536_logorahnneu.gif",
    "img/partner/99551_logosteinfels.gif",
    "img/partner/99557_logogeorgeswalther.gif",
    "img/partner/99566_logoerbsloeh.gif",
    "img/partner/99572_logoomya.gif",
    "img/partner/99578_logocht.gif",
    "img/partner/99584_logoluzi2.gif",
    "img/partner/99590_logodiversey.gif",
    "img/partner/99596_logofripoo.jpg",
    "img/partner/99597_logotemmentec.gif",
    "img/partner/99603_logobtc.gif",
    "img/partner/99609_logoakzonobel.gif",
    "img/partner/99620_logotrichema.gif",
    "img/partner/104744_logohalag.gif",
    "img/partner/108204_logoter.gif",
    "img/partner/111585_logolehvoss.gif",
    "img/partner/115368_logo_azelis3.jpg",
    "img/partner/116072_logolucridis.gif",
    "img/partner/116420_logopermcos.gif",
    "img/partner/116432_logounivar.gif",
    "img/partner/118429_logofrike_neu2.gif"
);

shuffle($partner);

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SEPAWA Schweiz</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" rel="stylesheet" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <style>
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
                font-family: 'Open Sans', sans-serif;
                font-weight: 300;
                font-size: 18px;
                color: #0A302D;
            }

            li {
                list-style-type: square;
            }

            h1 {
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: 300;
                font-size: 35px;
            }

            h2 {
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: 300;
                font-size: 24px;
                margin-bottom: 5px;
                margin-top: 30px;
            }

            a {
                text-decoration: underline;
                color: #0A302D;
            }

            .clear {
                clear: both;
            }

            .center {
                width: 900px;
                margin: 0 auto;
            }

            .header {
                position: relative;
                height: 100%;
                min-height: 800px;
                background-image: url(img/background_1.jpg);
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            }

            .spacer_narrow {
                height: 7.5%;
            }

            .spacer_wide {
                height: 15%;
            }

            .navigation {
                background-color: rgba(255, 255, 255, 0.8);
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            }

            .navigation .logo {
                display: inline-block;
                width: 220px;
                height: 100px;
                margin: 0;
                margin-left: -5px;
                background-image: url(img/logo.png);
                background-size: contain;
                background-position: center center;
                background-repeat: no-repeat;
            }

            .navigation .center {
                height: 100px;
            }

            .navigation ul {
                float: right;
            }

            .navigation li {
                display: table-cell;
                padding: 0 20px;
                vertical-align: middle;
                height: 100%;
                font-size: 25px;
                color: #002A64;
                height: 100px;
                position: relative;
                cursor: pointer;
            }

            .navigation li .indicator {
                display: none;
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 5px;
                background-color: #002A64;
            }

            .navigation li:hover .indicator {
                display: block;
            }

            .navigation li a {
                height: 100%;
                width: 100%;
                text-decoration: none;
                color: #002A64;
            }

            .welcome {
                position: relative;
                max-width: 600px;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 28px;
                font-style: italic;
                color: white;
                text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
                opacity: 0.8;
            }

            .welcome .bracket {
                position: absolute;
                top: -5px;
                left: -55px;
                font-size: 100px;
                color: #FFE171;
            }

            .welcome-partner {
                position: absolute;
                bottom: 20px;
            }

            .darker {
                padding: 20px 0;
                background-color: rgba(99, 137, 134, 0.5);
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            }

            .brighter {
                padding: 20px 0;
                background-color: rgba(99, 137, 134, 0.2);
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            }

            .partner {
                float: left;
                margin: 20px 0 20px 50px;
                box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            }

            .partner img {
                padding: 14.5px;
                background-color: white;
                float: left;
                opacity: 0.8;
            }

            .header .partner img {
                filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 3.5+ */
                filter: gray; /* IE6-9 */
                -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */
                opacity: 0.5;
            }

            .partner:hover img {
                filter: none;
                -webkit-filter: grayscale(0%);
                opacity: 1;
            }

            .vorstand .mitglied {
                float: left;
                margin: 20px 0 20px 50px;
                box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
                background-color: white;
            }

            .vorstand .mitglied img {
                display: block;
                padding: 10px;
                background-color: white;
                float: left;
                opacity: 0.8;
                width: 405px;
            }

            .vorstand .mitglied span {
                display: block;
                margin: 10px;
            }

            .links {
                width: 100%;
            }

            .links td {
                width: 50%;
                padding: 10px 0;
                margin: 0;
                vertical-align: top;
            }

            .floating-container {
                margin-left: -50px;
            }

            
            
            @media screen and (max-device-width: 480px) and (orientation: portrait) {
                .center {
                    width: 450px;
                    margin: 0 auto;
                }

                .welcome {
                    position: relative;
                    max-width: 400px;
                }
            }
        </style>
    </head>
    <body>
        <div class="header">
            <div class="spacer_wide"></div>
            <div class="navigation">
                <div class="center">
                    <div class="logo"></div>
                    <ul>
                        <li><a href="#neuigkeiten">Neuigkeiten</a><span class="indicator"></span></li>
                        <li><a href="#partner">Partner</a><span class="indicator"></span></li>
                        <li><a href="#portrait">Portrait</a><span class="indicator"></span></li>
                        <li><a href="#links">Links</a><span class="indicator"></span></li>
                    </ul>
                </div>
            </div>
            <div class="spacer_narrow"></div>
            <div class="center">
                <div class="welcome">
                    <p>
                        Die SEPAWA ist die Vereinigung der Seifen-, Parfüm- und Waschmittelfachleute und bezweckt
                        die Aus- und Weiterbildung aller Tätigen in den Branchen:
                    </p>
                    <ul>
                        <li>Wasch- und Reinigungsmittel</li>
                        <li>Kosmetik</li>
                        <li>Parfümerie</li>
                    </ul>
                    <div class="bracket">”</div>
                </div>
                <div class="welcome-partner">
                    <div class="floating-container">
                        <?php for ($i = 0; $i < 4; $i++): ?>
                            <a class="partner" href="#"><img src="<?= $partner[$i] ?>"></a>
                        <?php endfor ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <a name="neuigkeiten"></a>
        <div class="brighter">
            <div class="center">
                <h1>Neuigkeiten</h1>
                <h2>23.03.2017 &mdash; Professionelle Reinigung und Pflege (PRP)</h2>
                <p>
                    Die Vortragsveranstaltung Professionelle Reinigung und Pflege (PRP) findet am 23./24. März 2017 statt.
                    An zwei Tagen wird unter dem Veranstaltungstitel <emph>Let`s go! - Trends in Formulierung und Nachhaltigkeit</emph>
                    die besondere Bedeutung der Rohstoffe und deren Applikation aus verschiedenen Blickwinkeln referiert. 
                </p>

                <h2>04.09.2017 &mdash; Bewerbung Formulierungskurs Sepawa / ZHAW 2017</h2>
                <p>
                    Sehr geehrte Interessentin, sehr geehrter Interessent Wir freuen uns über Ihr Interesse an unserer
                    Sommerschool SEPAWA / ZHAW zum diesjährigen Thema <emph>Aerosol, Fette und Wachse</emph>.
                    Für den Kurs 2017 nehmen wir gerne Bewerbungen entgegen.
                </p>

                <h2>18.10.2017 &mdash; 64. Sepawa Congress and European Detergents Conference</h2>
                <p>
                    Am 18. - 20. Oktober 2017 findet der Sepawa Kongress in Berlin statt.
                    Weitere Informationen finden Sie unter folgendem Link:
                    <a href="http://www.sepawa.com/index/sepawa-congress/home.html" target="_blank">www.sepawa.com/index/sepawa-congress/home.html</a>
                </p>
            </div>
        </div>
        <a name="partner"></a>
        <div class="darker">
            <div class="center">
                <h1>Partner</h1>
                <div class="floating-container">
                    <?php for ($i = 4; $i < count($partner); $i++): ?>
                        <a class="partner" href="#"><img src="<?= $partner[$i] ?>"></a>
                    <?php endfor ?>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <a name="portrait"></a>
        <div class="brighter">
            <div class="center">
                <h1>Portrait</h1>
                <p>
                    <p>
                        Die SEPAWA will Wissen und spezifische Branchenerfahrungen interdisziplinär weitervermitteln. 
                        Dies geschieht durch:
                    </p>
                    <ul>
                        <li>Veranstaltung von Fachtagungen, Vorträgen und Exkursionen</li>
                        <li>Unterstützung und Förderung von wissenschaftlichen Arbeiten</li>
                        <li>Unterstützung und Förderung bei der Publkation von Fachartikeln</li>
                        <li>Mitarbeit bei der Erarbeitung von Lehrmitteln</li>
                        <li>Förderung des Berufsnachwuches</li>
                        <li>Zusammenarbeit mit artverwandten Vereinigungen und Verbänden</li>
                        <li>Aufbau und Pflege von Beziehungen zu internationalen Organisationen, welche ähnliche Ziele verfolgen</li>
                    </ul>
                </p>
                <p>
                    Die SEPAWA ist Plattform für den permanenten Meinungsaustausch unter Fachleuten der unterschiedlichen Produktionsstufen und hilft so mit, den Branchenerfolg für die Zukunft zu sichern.
                </p>
                <p>
                    Als Mitglied erhalten Sie Zugang zum SEPAWA Jahreskongress, an welchem hochkarätige Referenten aktuelle Themen behandeln. Lokale Fachveranstaltungen und Exkursionen ermöglichen Einblicke in unterschiedlichste Themengebiete und bieten Gelegenheit für den Gedankenaustausch unter Mitgliedern.
                </p>
                <h2>Vorstand</h2>
                <div class="vorstand floating-container">
                    <div class="mitglied">
                        <img src="img/portrait/ruedi.jpg">
                        <span><strong>Präsident</strong><br>Ruedi Gitzi<br><a href="mailto:praesident@sepawa.ch">Email</a></span>
                    </div>
                    <div class="mitglied">
                        <img src="img/portrait/marco.jpg">
                        <span><strong>Aktuar und Stv. Präsident</strong><br>Marco Bracher<br><a href="mailto:praesident@sepawa.ch">Email</a></span>
                    </div>
                    <div class="mitglied">
                        <img src="img/portrait/roland.jpg">
                        <span><strong>Kassier</strong><br>Roland Borner<br><a href="mailto:praesident@sepawa.ch">Email</a></span>
                    </div>
                    <div class="mitglied">
                        <img src="img/portrait/thomas.jpg">
                        <span><strong>Verbindung zur Hochschule</strong><br>Dr. Thomas Hofmann<br><a href="mailto:praesident@sepawa.ch">Email</a></span>
                    </div>
                    <div class="mitglied">
                        <img src="img/portrait/horst.jpg">
                        <span><strong>Mitglied des Vorstandes der SEPAWA e.V.</strong><br>Dr. Horst Lothar Möhle<br><a href="mailto:praesident@sepawa.ch">Email</a></span>
                    </div>
                    <div class="mitglied">
                        <img src="img/portrait/marina.jpg">
                        <span><strong>Vertreterin der Parfümindustrie</strong><br>Marina Simeunovic<br><a href="mailto:praesident@sepawa.ch">Email</a></span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <a name="links"></a>
        <div class="darker">
            <div class="center">
                <h1>Links</h1>
                <h2>Nützliche Links</h2>
                <table class="links">
                    <tr>
                        <td>Anmeldestelle Chemikalien (BAG)</td>
                        <td><a href="http://www.bag.admin.ch" target="_blank">www.bag.admin.ch</a></td>
                    </tr>
                    <tr>
                        <td>Übersetzer D/E/F/ES</td>
                        <td><a href="http://dict.leo.org" target="_blank">dict.leo.org</a></td>
                    </tr>
                    <tr>
                        <td>Zolltarife EU (TARIC)</td>
                        <td><a href="http://ec.europa.eu/taxation_customs/dds2/taric" target="_blank">ec.europa.eu/taxation_customs/dds2/taric</a></td>
                    </tr>
                    <tr>
                        <td>Zolltarife Schweiz (TARES)</td>
                        <td><a href="http://xtares.admin.ch/tares  " target="_blank">xtares.admin.ch/tares</a></td>
                    </tr>
                </table>

                <h2>Schulen / Weiterbildung</h2>
                <table class="links">
                    <tr>
                        <td>Chemiestudium an der Fachhochschule Wädenswil</td>
                        <td><a href="http://www.lsfm.zhaw.ch" target="_blank">www.lsfm.zhaw.ch</a></td>
                    </tr>
                    <tr>
                        <td>Hochschule Luzern, Technik &amp; Architektur</td>
                        <td><a href="http://www.hslu.ch/technik-architektur" target="_blank">www.hslu.ch/technik-architektur</a></td>
                    </tr>
                </table>

                <h2>Verbände / Vereine</h2>
                <table class="links">
                    <tr>
                        <td>Deutsche Gesellschaft für wissenschaftliche und angewandte Kosmetik E.V.</td>
                        <td><a href="http://www.dgk-ev.de" target="_blank">www.dgk-ev.de</a></td>
                    </tr>
                    <tr>
                        <td>Gesellschaft Schweizerischer Kosmetik-Chemiker</td>
                        <td><a href="http://www.swissscc.ch" target="_blank">www.swissscc.ch</a></td>
                    </tr>
                    <tr>
                        <td>Schweizerischer Kosmetik- und Waschmittelverband SKW</td>
                        <td><a href="http://www.skw-cds.ch" target="_blank">www.skw-cds.ch</a></td>
                    </tr>
                </table>
	  
	            <h2>Zeitschriften</h2>
                <table class="links">
                    <tr>
                        <td>CHEManager</td>
                        <td><a href="http://ww.chemanager-online.com" target="_blank">www.chemanager-online.com</a></td>
                    </tr>
                    <tr>
                        <td>Chemie Technik</td>
                        <td><a href="http://www.chemietechnik.de" target="_blank">www.chemietechnik.de</a></td>
                    </tr>
                    <tr>
                        <td>COSSMA Cosmetics, Spray Technology and Marketin</td>
                        <td><a href="http://www.cossma.com" target="_blank">www.cossma.com</a></td>
                    </tr>
                    <tr>
                        <td>Euro Cosmetics</td>
                        <td><a href="http://www.eurocosmetics-magazine.com" target="_blank">www.eurocosmetics-magazine.com</a></td>
                    </tr>
                    <tr>
                        <td>European Journal of Lipid Science and Technology</td>
                        <td><a href="http://www.wiley-vch.de/publish/en/journals/alphabeticIndex/2114/" target="_blank">www.wiley-vch.de</a></td>
                    </tr>
                    <tr>
                        <td>Kosmetik International</td>
                        <td><a href="http://www.ki-online.de" target="_blank">www.ki-online.de</a></td>
                    </tr>
                    <tr>
                        <td>Personal Care Magazine</td>
                        <td><a href="http://www.personalcaremagazine.com" target="_blank">www.personalcaremagazine.com</a></td>
                    </tr>
                    <tr>
                        <td>SOFW Journal</td>
                        <td><a href="http://www.sofw.com" target="_blank">www.sofw.com</a></td>
                    </tr>
                    <tr>
                        <td>Tenside Surfactants Detergents Journal (TDS)</td>
                        <td><a href="http://www.tsdjournal.com" target="_blank">www.tsdjournal.com</a></td>
                    </tr>
                    <tr>
                        <td>The Chemical Week</td>
                        <td><a href="http://www.chemweek.com" target="_blank">www.chemweek.com</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
