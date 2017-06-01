<?php
$xmlstr = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<TCM xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="TCM_schema.xsd">
	
	<!-- Alphabet -->
	<alphabet>
	
			<buchstabe id="A"/>
			<buchstabe id="B"/>
			<buchstabe id="C"/>
			<buchstabe id="D"/>
			<buchstabe id="E"/>
			<buchstabe id="F"/>
			<buchstabe id="G"/>
			<buchstabe id="H"/>
			<buchstabe id="I"/>
			<buchstabe id="J"/>
			<buchstabe id="K"/>
			<buchstabe id="L"/>
			<buchstabe id="M"/>
			<buchstabe id="N"/>
			<buchstabe id="O"/>
			<buchstabe id="P"/>
			<buchstabe id="Q"/>
			<buchstabe id="R"/>
			<buchstabe id="S"/>
			<buchstabe id="T"/>
			<buchstabe id="U"/>
			<buchstabe id="V"/>
			<buchstabe id="W"/>
			<buchstabe id="X"/>
			<buchstabe id="Y"/>
			<buchstabe id="Z"/>
				
	</alphabet>

	<!-- Kategorien -->
    <kategorien>
       
        <kategorie id="k_0001">
            <name>Adstringierende Kräuter</name>
        </kategorie>

        <kategorie id="k_0002">
            <name>Hitzeeliminierende Kräuter</name>
        </kategorie>

        <kategorie id="k_0003">
            <name>Innen wärmen, Kälte ausleiten</name>
        </kategorie>

        <kategorie id="k_0004">
            <name>Kalten Schleim transformieren</name>
        </kategorie>

        <kategorie id="k_0005">
            <name>Nässe und Schleim transformieren</name>
        </kategorie>

        <kategorie id="k_0006">
            <name>Kühle, scharfe Kräuter</name>
        </kategorie>

        <kategorie id="k_0007">
            <name>Kühle Kräuter, die Hitze eliminieren und Nässe trocknen</name>
        </kategorie>

        <kategorie id="k_0008">
            <name>Nässe eliminieren</name>
        </kategorie>

        <kategorie id="k_0009">
            <name>Nahrungsstagnation auflösen</name>
        </kategorie>

        <kategorie id="k_0010">
            <name>Qi Beweger</name>
        </kategorie>

        <kategorie id="k_0011">
            <name>Qi Tonics</name>
        </kategorie>

        <kategorie id="k_0012">
            <name>Warme, scharfe Kräuter</name>
        </kategorie>

        <kategorie id="k_0013">
            <name>Xue Bewegung</name>
        </kategorie>

        <kategorie id="k_0014">
            <name>Xue Kühlen</name>
        </kategorie>

        <kategorie id="k_0015">
            <name>Xue Tonics</name>
        </kategorie>
        
    </kategorien>
	
	<!-- Kräuter -->
	<kraeuter>
	
		<kraut id="bai_shao">
			<kategorie id="k_0015"></kategorie>
            <name>Bai Shao</name>
            <merkmal>in erster Linie Xue-Tonic</merkmal>
            <merkmal>bestes Holz- Qi- Tonic wegen der Geschmeidigkeit, macht die Gerichtetheit der Spannung</merkmal>
            <merkmal>trägt die Nährung in die Anspannung und macht sie geschmeidig, deswegen bei Sehnen- Problemen, bei Sehnenscheidenentzündungen!</merkmal>
            <merkmal>Basis für Shao Yao Tang</merkmal>
            <wirkung>adstringierend, schützt vor Erschöpfung durch zuviel Schwitzen</wirkung>
            <wirkung>kühl, sauer, wirkt auf H, gut für Bänder und Sehnen</wirkung>
            <wirkung>wirkt nach oben, bei Hitze-DF</wirkung>
            <bild quelle="bai_shao.jpg"></bild>
        </kraut>

        <kraut id="bai_zhu">
        	<kategorie id="k_0011"></kategorie>
            <name>Bai Zhu</name>
            <wirkung>wandelt Nässe um, zentraler Qi- Tonic, eher trocknend, weil Qi xu oft Nässe macht</wirkung>
            <wirkung>Stagnation von Flüssigkeiten wird abgebaut</wirkung>
            <wirkung>aromatisch, aufsteigend</wirkung>
            <wirkung>kann NW anderer Kräuter aufheben, schiebt Funktionen an,  wie Schütteln</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="ban_xia">
        	<kategorie id="k_0004"></kategorie>
        	<kategorie id="k_0005"></kategorie>
        	<name>Ban Xia</name>
            <merkmal>hochgiftig, darf nur in Ingwer gekocht verbreitet werden</merkmal>
            <merkmal>gut zusammen mit Chen Pi, weil dies bewegt</merkmal>
            <bild quelle="ban_xia.jpg"></bild>
        </kraut>

        <kraut id="bo_he">
        	<kategorie id="k_0006"></kategorie>
            <name>Bo He</name>
            <merkmal>generell scharf, H+M</merkmal>
            <merkmal>kühl, scharf, aromatisch (ganz zum Schluss einkochen und Deckel drauf)</merkmal>
            <merkmal>nicht bei LH, stillenden Müttern</merkmal>
            <wirkung>verteilt Wind Hitze, eliminiert Hitze in Kopf, Augen und Kehle</wirkung>
            <wirkung>fördert Holz- Qi- Fluss, gut bei allen Holz- Qi- Stagnationen</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="chai_hu">
        	<kategorie id="k_0006"></kategorie>
            <name>Chai Hu</name>
            <alternativname>Bupleurum</alternativname>
            <merkmal>kühl, scharf, bitter, wirkt aufsteigend (die meisten bitteren kühlen K senken ab)</merkmal>
            <wirkung>hier bes. scharfer Aspekt für bewegen, reguliert und weist aus, Stagnationen lösen</wirkung>
            <wirkung>wirkt nach oben und kann KS machen, deswegen nicht als Qi- Tonic nehmen, aber eigentlich ist es ein Holz- Qi- Beweger, weil entspannt</wirkung> 
            <wirkung>OF öffnen über Lösung der Spannung, Spannung wird aber auch reguliert</wirkung>
            <wirkung>kühlt</wirkung>
            <wirkung>E- Qi- Ausrichtung wird ermöglicht, damit auch Ausrichtung des W- Qi</wirkung>
            <wirkung>wirkt also auf E, also auf das schon offene System</wirkung>
            <wirkung>geht aber auch auf tiefere Ebenen, Chen Pi bleibt auf E- Ebene</wirkung>
            <wirkung>je angespannter man ist, umso stärker ist die Erwartungshaltung, umso angespannter auch nach formeleinnahme</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="chen_pi">
        	<kategorie id="k_0010"></kategorie>
            <name>Chen Pi</name>
            <merkmal>Orangenschalen</merkmal>
            <merkmal>leicht warm</merkmal>
            <wirkung>wirkt in der Mitte</wirkung>
            <wirkung>reguliert Nahrung</wirkung>
            <bild quelle="chen_pi.jpg"></bild>
        </kraut>

        <kraut id="chuan_xiong">
        	<kategorie id="k_0013"></kategorie>
            <name>Chuan Xiong</name>
            <merkmal>Xue- bewegend, nährt aber nicht</merkmal>
            <merkmal>aromatisch, man nutzt es aber nicht dazu, aber mit Deckel kochen sonst verflüchtigt sich die wirkung</merkmal>
            <wirkung>bringt nach oben (könnte Schwindel verursachen), deswegen bei Gravidität möglich</wirkung>
            <wirkung>regt Fluss an, bewegt den Stau weiter</wirkung>
            <wirkung>bei hoher Dosierung könnte Windanfall enstehen</wirkung>
            <wirkung>es sollte keine Stagnation vorliegen</wirkung>
            <wirkung>würde Blutungen verstärken, weil öffnend</wirkung>
            <bild quelle="chuan_xiong.jpg"></bild>
        </kraut>

        <kraut id="dang_gui">
        	<kategorie id="k_0015"></kategorie>
            <name>Dang Gui</name>
            <merkmal>sicher auch als Einzelkraut und in hohen Dosen</merkmal>
            <merkmal>auch als Fußbäder z.B. bei PNP, weil es bewegt</merkmal>
            <merkmal>als Prozess ist es wärmend (als Einzelkraut); da es auf Xue- Ebene wirkt, ist es aber eher kühlend, weil Xue kühler ist als Qi</merkmal>
            <wirkung>nährt, bewegt am meisten, Mutter aller Xue- Nährung</wirkung>
            <wirkung>bringt Nährung auf Xue- Ebene</wirkung>
            <wirkung>keine Nässegefahr</wirkung>
            <wirkung>nährt und bewegt in Richtung System, macht keine Stagnation</wirkung>
            <wirkung>„Ginseng für die Frau“, weil Frauen eher Xue- Mangel mit Stagnation haben</wirkung>
            <bild quelle="dan_gui.jpg"></bild>
        </kraut>

        <kraut id="dang_shen_ren_shen">
        	<kategorie id="k_0011"></kategorie>
            <name>Dang Shen / Ren Shen</name>
            <alternativname>Codonopsis</alternativname>
            <merkmal>Alternative zu Ren Shen (Ginseng)</merkmal>
            <wirkung>befeuchtend, regeneriert Flüssigkeiten</wirkung>
            <wirkung>flüssigkeitsstabilisierend, stabilisiert Embolien, Vitalität wird wiederhergestellt</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="da_zao">
        	<kategorie id="k_0011"></kategorie>
            <name>Da Zao</name>
            <merkmal>milder E- Qi- Tonic</merkmal>
            <merkmal>neutral, süß, gut für Verdauung</merkmal>
            <wirkung>wärmend, kann nässen</wirkung>
            <wirkung>moderiert wirkung anderer Kräuter</wirkung>
            <bild quelle="da_zao.jpg"></bild>
        </kraut>

        <kraut id="fang_feng">
        	<kategorie id="k_0012"></kategorie>
            <name>Fang Feng</name>
            <alternativname>Radix ledebouriellae</alternativname>
            <merkmal>Schild gegen den Wind</merkmal>
            <merkmal>in formeln gegen Migräne (Wind) oder schmerzhafter DF</merkmal>
            <merkmal>KI: Xue xu mit Krämpfen, antagonistisch zu Gan Jiang</merkmal>
            <wirkung>leicht warm, scharf, süß, E, W, H, 3-9 g</wirkung>
            <wirkung>öffnet OF, lässt Wind raus (KS, Schmerzen, Frösteln)</wirkung>
            <wirkung>weist Wind Nässe mit Stagnation aus</wirkung>
            <wirkung>wird auch bei Innerem Wind im Yang- Bereich verwendet (Tremor, RLS), aber als Assistent, weil es süß ist, nährt
            </wirkung>
            <wirkung>auch bei Wind auf Verdauungsebene, wenn H- Qi- Stagnation Verdauung behindert (auch als Assistent)
            </wirkung>
            <wirkung>bringt bewegende wirkung an die OF, z.B. bei Handgelenk</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="fu_ling">
        	<kategorie id="k_0008"></kategorie>
            <name>Fu Ling</name>
            <merkmal>Pilz</merkmal>
            <wirkung>trafo Nässe auf E- Ebene, zusammen mit Bai Zhu (Qi- Tonic)</wirkung>
            <wirkung>bei Nässe durch E- Qi- Mangel, eliminiert Nässe, wird gerne mit Qi- Tonic kombiniert</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="fu_zi">
        	<kategorie id="k_0003"></kategorie>
            <name>Fu Zi</name>
            <alternativname>Radix lateralis aconiti</alternativname>
            <merkmal>heiß, scharf, giftig, wirkt auf E, F, W, tox. wirkung ab 15 g</merkmal>
            <merkmal>Gift durch Kochen eliminiert, 30- 60 min vorher kochen, bevor anderes in formel kommt</merkmal>
            <merkmal>Vorsicht bei Yin- Mangel und bei falscher Kälte (of. Kälte aber rote Zunge)</merkmal>
            <merkmal>nicht mit Bai Mu und Bai Zhi</merkmal>
            <wirkung>kann in Überdosis schädigend auf Yin wirken (westlich Niere)</wirkung>
            <wirkung>grundsätzlich zur Yang- Aktivierung + Kältegefühl</wirkung>
            <wirkung>bei Schmerzen durch Kälte- Nässe- Bi (Obstruktionssyndrom)</wirkung>
            <wirkung>gibt man auch, bevor alles zusammenbricht (ähnlich Katecholamine)</wirkung>
            <wirkung>Blockaden lösen, Öffnung schaffen, scharf zirkuliert ja auch die Wärme</wirkung>
            <wirkung>gerne in Kombi mit frischem Ingwer: fördert E- Trafo</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="gan_cao">
        	<kategorie id="k_0011"></kategorie>
            <name>Gan Cao</name>
            <merkmal>macht formeln erträglicher und effizienter, verbessert Interaktionen von Kräutern</merkmal>
            <wirkung>Süßholz, wirkt harmonisierend, weil es nur mild tonsiert</wirkung>
            <wirkung>hitzeausleitend, wirkt auf allen WP</wirkung>
            <wirkung>ähnlich ist Da Zao (Dattel), nährt mehr Richtung Xue, harmonisiert aber nicht so doll</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="gan_jiang">
        <!--keine kategorie bekannt-->
            <name>Gan Jiang</name>
            <merkmal>getrocknete Ingwerwurzel, 3- 12 g</merkmal>
            <merkmal>trockener Ingwer ist bzgl. Zirkulation viel intensiver als frischer</merkmal>
            <wirkung>heiß, scharf, wirkt auf Mitte = Verdauung, auch auf Atmung, generell auf Feuer- Ebene</wirkung>
            <wirkung>wärmt Atmung, weil in Kälte die Flüssigkeiten stagnieren (Schleim, Polypen...)	oftmals als Zeichen der Qi- Schwäche</wirkung>
            <wirkung>Yang befreien, wenn Yang durch Kälte blockiert (nach z.B. in Eis einbrechen)</wirkung>
            <wirkung>wärmt und startet Flüssigkeit- Zirkulation, kann also auch Xue- Zirkulation machen</wirkung>
            <wirkung>KI: Hitze, Yin xu, Grav.</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="geng_mi">
        <!-- keine kategorie bekannt -->
            <name>Geng Mi</name>
            <merkmal>glutenfreier Reis, um Verdauung zu erleichtern</merkmal>
            <wirkung></wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="gui_zhi">
        	<kategorie id="k_0012"></kategorie>
            <name>Gui Zhi</name>
            <alternativname>Ramulus Zinamonii Cassiae</alternativname>
            <merkmal>Zimtzweig</merkmal>
            <merkmal>6 g, 3-9 g für Wind- Kälte, 9- 15 g für schmerzvolle Obstruktionen</merkmal>
            <merkmal>weil es gut bewegt, kommt es gerne in Gelenksformeln rein</merkmal>
            <merkmal>warm, scharf, süß, F, M, Fließen</merkmal>
            <merkmal>bei Kälte- Steifigkeit der Gelenke gut mit Fu Zi kombinieren</merkmal>
            <wirkung>Zweig öffnet und bewegt mehr, Zirkulation an OF Rinde wärmt mehr das Innere</wirkung>
            <wirkung>reguliert die Ebene an OF zwischen Nähr- Qi und Abwehr- Qi bei Windkälte bei Mangel mit Schwitzen ohne Erholung</wirkung>
            <wirkung>wärmt, weist Kälte aus, z.B. Kälte- Nässe- Schmerz der Gelenke</wirkung>
            <wirkung>macht Yang frei</wirkung>
            <wirkung>generell wird OF geöffnet durch leichte Bewegung, Wärme, Yang- Anhebung</wirkung>
            <wirkung>fördert Qi- Zirkulation an OF, vorwiegend im vorderen neuen Bereich</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="huang_lian">
        	<kategorie id="k_0002"></kategorie>
        	<kategorie id="k_0007"></kategorie>
            <name>Huang Lian</name>
            <alternativname>Rhizoma coptidis</alternativname>
            <merkmal>stärkstes von allen, intensiv und kurz, auf alle 3 E, wirkt auch auf Shen</merkmal>
            <merkmal>rote Augen, Halsschmerzen, Geschwüre, Abszesse, schneller Puls</merkmal>
            <merkmal>auch gut für gestörte F- W- Achse mit Schlafproblemen</merkmal>
            <wirkung>holt Hitze auch unten raus</wirkung>
            <wirkung>geht in tiefe Schichten</wirkung>
            <wirkung>kalt, bitter, F, E, H</wirkung>
            <wirkung>eliminiert Feuer und entgiftet</wirkung>
            <wirkung>NH im Verdauungsbereich, DF, Sodbrennen bei Magenhitze</wirkung>
            <wirkung>Hitze auf Xue- Ebene (Blutungen)</wirkung>
            <wirkung>KI: Yin xue, Kälte in Verdauung, antagonistisch zu Ju Hua, Xuan Shen</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="huang_qi">
        	<kategorie id="k_0011"></kategorie>
            <name>Huang Qi</name>
            <merkmal>auch äußerlich bei schlecht heilenden Wunden (aber auch gegessen)</merkmal>
            <merkmal>gut als Einzelkraut, sehr komplex, wie eigene formel</merkmal>
            <wirkung>Astragalus, wirkt regenerativ</wirkung>
            <wirkung>hebt das Erde-Yang an</wirkung>
            <bild quelle="huang_qi.jpg"></bild>
        </kraut>

        <kraut id="huang_qin">
        	<kategorie id="k_0007"></kategorie>
        	<kategorie id="k_0002"></kategorie>
            <name>Huang Qin</name>
            <alternativname>Radic scutellariae baikalensis</alternativname>
            <merkmal>kalt, bitter, H, E, M, 6-15 g</merkmal>
            <merkmal>sehr gut für Nässe Hitze, bes. im Stuhl (ähnlich Coptis)</merkmal>
            <merkmal>sehr guter AB-Ersatz</merkmal>
            <merkmal>gegen Fieber, Wunden, Hitzezeichen</merkmal>
            <merkmal>rotes Gesicht, KS, Unruhe, bitterer Mundgeschmack </merkmal>
            <merkmal>KI: LH, DF mit Kälte- Hintergrund, verträgt sich nicht mit Mu Dan Pi</merkmal>
            <wirkung>mehr oben und mitte (Huang Bai wirkt eher auf UE)</wirkung>
            <wirkung>eliminiert Hitze, besonders im OE, bei blutstockender Hitze</wirkung>
            <wirkung>beruhigt den Foetus (bei Hitze)</wirkung>
            <wirkung>sedierende wirkung auf aufsteigendes Holz-Yang</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="jing_jie">
        	<kategorie id="k_0012"></kategorie>
            <name>Jing Jie</name>
            <alternativname>Flos schizonepetae</alternativname>
            <merkmal>leicht warm, scharf, aromatisch, E + M</merkmal>
            <merkmal>Hautausschlag kann Wind- Hitze sein: Jucken, Z rel. normal</merkmal>
            <merkmal>3- 9 g als Einzelkraut, 12 g bzw. 6- 9 g in formel</merkmal>		
            <wirkung>befreit OF, macht Wind- Aspekt weg, ist nicht wegen der Wärme drin</wirkung>
            <wirkung>ventilierende wirkung auf Haut, erleichtert Jucken Wind ist immer Fülle, Blockade</wirkung>
            <wirkung>auch blutstockende wirkung, weil scharf, deswegen bewegt</wirkung>		
            <bild quelle=""></bild>
        </kraut>

        <kraut id="mai_ya">
        	<kategorie id="k_0009"></kategorie>
            <name>Mai Ya</name>
            <merkmal>Gerstenmalz</merkmal>
            <merkmal>gegen Milchverdauungsprobleme bei Babies, auch gegen Brustmilchstagnation</merkmal>
            <merkmal>reguliert geschmeidigen Qi- Fluss (Rülpsen, Aufstoßen)</merkmal>
            <wirkung>roh neutral, getrocknet warm, süß, E+++, stärkt Verdauung bei E- Qi xu</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="mu_dan_pi">
        	<kategorie id="k_0014"></kategorie>
            <name>Mu Dan Pi</name>
            <merkmal>Rinde der Pfingstrosenwurzel</merkmal>
            <merkmal>auch bei Mangelhitze, deswegen auch in Rehmania 6- formel</merkmal>
            <merkmal>bewegt Xue- Ebene, löst Xue- Stagnationen auf, deswegen gut für Verletzungen</merkmal>
            <wirkung>hitzeeliminierend</wirkung>
            <wirkung>wundlindernd, auch äußerlich</wirkung>
            <wirkung>greift stagniertes Holz- Feuer (KS, Augen)</wirkung>
            <bild quelle="mu_dan_pi.jpg"/>
        </kraut>

        <kraut id="qiang_hui">
        	<kategorie id="k_0012"></kategorie>
            <name>Qiang Huo</name>
            <alternativname>Rhizoma et Radix Notopterygii</alternativname>
            <merkmal>warm, aromatisch, scharf, bitter, 6- 15 g</merkmal>
            <wirkung>entlastet OF, weist Kälte aus typisch für Wind- Kälte (Nässe, Schwere, Schläfrigkeit)</wirkung>
            <wirkung>löst schmerzvolle Obstruktion , Wind- Kälte- Nässe- Stagnation</wirkung>
            <wirkung>Wind steht für plötzliche Blockade bei schon längerer Stagnation</wirkung>
            <wirkung>auch für Gelenkschmerzen ohne Erkältung (oft H Xue xu)</wirkung>
            <wirkung>weil es OF öffnet, ist es gut für obere Gelenke (Schulter, EB)</wirkung>
            <wirkung>reguliert zentrale Steigen und Sinken- Achse, richtet das Qi auf in W+F- Achse</wirkung>
            <wirkung>aufpassen bei Xue xu und Yin xu, weil es schwächt, durch das Aufrichten</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="rou_dou_kou">
        	<kategorie id="k_0001"></kategorie>
            <name>Rou Dou Kou</name>
            <merkmal>fleischiger Kardamon</merkmal>
            <merkmal>wenn bestimmte Funktionen aus Richtung kommen</merkmal>
            <merkmal>stabilisieren heißt, es kann Bewegung stabilisiert werden, adstringieren = festhalten</merkmal>
            <merkmal>DF, Urin, Schwitzen, oft mit Mangelhintergrund</merkmal>
            <merkmal>warm, scharf, E</merkmal>
            <wirkung>Verdauung und Trafo stabilisieren</wirkung>
            <wirkung>zirkuliert Qi (deswegen bei DF oder Verstopfung), löst Schmerz</wirkung>
            <wirkung>kann DF bei Kälte (Qi xu, Yang xu) stoppen</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="shan_yao">
        	<kategorie id="k_0011"></kategorie>
            <name>Shan Yao</name>
            <alternativname>Yamswurzel</alternativname>
            <merkmal>milde, adstringierend, Erde</merkmal>
            <merkmal>für formeln, die Nährung nach oben bringen sollen, also als Kombi mit Xue- Tonic</merkmal>
            <wirkung>sauer, aufrichtend</wirkung>
            <wirkung>adstringiert, verhindert den übermäßigen Verbrauch der Jing- Ebene, schafft Verbindung von Qi- zur Jing- Ebene</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="shan_zha">
        <!-- Keine kategorie bekannt -->
            <name>Shan Zha</name>
            <alternativname>Weißdornbeere</alternativname>
            <merkmal>bestes kraut, 30 g, sehr gut mit Dan Shen</merkmal>
            <merkmal>leicht warm, sauer, zirkuliert, E + H</merkmal>
            <wirkung>reguliert Xue ju (hier roh besser)</wirkung>
            <wirkung>reguliert Anspannung</wirkung>
            <wirkung>gegen DF (hier gekocht besser)</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="shan_zhu_you">
        	<kategorie id="k_0001"></kategorie>
            <name>Shan Zhu You</name>
            <alternativname>Japanische Kornellkirsche</alternativname>
            <wirkung>stabilisierend und bindend (adstringierend) auf W-Ebene</wirkung>
            <wirkung>zieht Nährung anderer Kräuter auf W-Ebene</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="sheng_di_huang">
        	<kategorie id="k_0015"></kategorie>
            <name>Sheng Di Huang</name>
            <alternativname>Rehmannia-Wurzel (unbehandelt)</alternativname>
            <wirkung>Xue-Tonic in Richtung Yin bei LH, auch bei Xue-Hitze</wirkung>
            <wirkung>ist kühl, verlangsamt die Trafo, dadurch wird die wirkung der formel auf tiefere Ebene gebracht</wirkung>
            <bild quelle="sheng_di_huang.jpg"></bild>
        </kraut>

        <kraut id="sheng_jiang">
        	<kategorie id="k_0012"></kategorie>
            <name>Sheng Jiang</name>
            <alternativname>Ingwer (frisch)</alternativname>
            <merkmal>warm + scharf, Atmung und Verdauung</merkmal>
            <merkmal>für pathogene Windkälte, Wind- Kälte- Husten mit Schleim</merkmal>
            <merkmal>KI: Hitze in Atmung und Magen</merkmal>
            <merkmal>Holunderblütentee kühlt oben aber auch im Magen, gut mit Ingwer</merkmal>
            <wirkung>wärmt und reguliert Magen, Ü + E (Kälte im Kochtopf)</wirkung>
            <wirkung>reduziert Toxizität von anderen Kräutern z.B. Fu Zi</wirkung>
            <wirkung>gut bei Schwitzen nach Erkrankung, weil es so gut reguliert</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="sheng_ma">
        	<kategorie id="k_0006"></kategorie>
            <name>Sheng Ma</name>
            <alternativname>Rhizoma Cimicifugae</alternativname>
            <alternativname>Schwarzer Kokosch</alternativname>
            <merkmal>kühl, süß, scharf, gut für Verdauung und Atmung</merkmal>
            <merkmal>Zahnfleischentzündungen, Aphten, geschwollene Kehle, Wundsein</merkmal>
            <wirkung>ventiliert Masern und Windpocken in frühen Stadien</wirkung>
            <wirkung>für KS durch Windhitze</wirkung>
            <wirkung>eliminiert Hitze und Gift (stagnierte Hitze)</wirkung>
            <wirkung>hebt das abgesunkene Yang (Müdigkeit, Kurzatmigkeit)</wirkung>
            <wirkung>kann als Übermittler eingesetzt werden</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="shen_qu">
        	<kategorie id="k_0009"></kategorie>
            <name>Shen Qu</name>
            <alternativname>Massa fermentata</alternativname>
            <merkmal>warm, süß, scharf, vegetarisches Congee</merkmal>
            <merkmal>Völle, Aufstoßen, DF, Darmgeräusche, DF</merkmal>
            <merkmal>nicht bei Magen-Hitze und Gravidität</merkmal>
            <wirkung>eguliert Verdauung, Nahrungsstagnation, harmonisiert Magen</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="shi_gao">
        	<kategorie id="k_0002"></kategorie>
            <name>Shi Gao</name>
            <alternativname>Gypsum</alternativname>
            <merkmal>auch bei KS, Zahnschmerzen, Zahnfleisch entzündet</merkmal>
            <merkmal>Ekzeme, Verbrennungen, ulzerierende Wunden</merkmal>
            <merkmal>gut für Kinder</merkmal>
            <merkmal>Z: rot, gelber Belag</merkmal>
            <merkmal>20-45 min kochen, 9-20 g</merkmal>
            <merkmal>nicht bei LH als Kaiser, kann aber trotzdem in formel rein</merkmal>
            <wirkung>sehr sehr kalt, scharf</wirkung>
            <wirkung>eliminiert hohes Fieber ohne Frösteln bei Durst, Unruhe, Schwitzen,</wirkung>
            <wirkung>eliminert Magen-Feuer</wirkung>
            <wirkung>klärt Feuer aus Atmung, Husten, klebriger Schleim</wirkung>
            <wirkung>nährt (süß), schädigt aber auch die Verdauung</wirkung>

            <bild quelle=""></bild>
        </kraut>

        <kraut id="shu_di_huang">
        	<kategorie id="k_0015"></kategorie>
            <name>Shu Di Huang</name>
            <merkmal>nicht bei LH</merkmal>
            <merkmal>Wenn ich nähren will, nehme ich viel, bei wenig erreiche ich auch die Xue- Ebene, kann es dann aber mit wärmenden und kühlenden Kräutern kombinieren.</merkmal>
            <merkmal>Wenn ich auf Qi- Ebene bleiben möchte, wäre beides falsch.</merkmal>
            <wirkung>in Rotwein gekocht, nährt auch Xue in Richtung Yin, aber warm</wirkung>
            <wirkung>am dichtesten dran an Yin, sehr klebrig und nässend, muss mit Xue- Bewegung kombiniert werden, z.B. Dang Gui</wirkung>
            <wirkung>Die Xue- Ebene muss genährt, aber dafür auch erreicht werden, deswegen wird es langsam trafo. </wirkung>
            <bild quelle="shu_di_huang.jpg"></bild>
        </kraut>

        <kraut id="xi_xin">
        	<kategorie id="k_0012"></kategorie>
            <name>Xi Xin</name>
            <alternativname>Herba cum Radicae Asari</alternativname>
            <merkmal>1-3 g</merkmal>
            <merkmal>warm, scharf, W, M, stark wirksam, deswegen niedrige Dosis</merkmal>
            <merkmal>formeln bekommen mehr Biss</merkmal>
            <merkmal>bei Wind Kälte mit Körperschmerzen, KS</merkmal>
            <merkmal>generell bei Kälte + Schmerzen, schmerzvolle Obstruktions- Kälte</merkmal>
            <merkmal>wichtigstes Zahnschmerz- kraut</merkmal>
            <merkmal>KI: Astragulus, Talkum</merkmal>
            <wirkung>öffnet OF, weist Kälte aus, also für äußere Fülle- Kälte</wirkung>
            <wirkung>stupst auch das Wasser-Yang an</wirkung>
            <wirkung>wärmt Atmung, transformiert Schleim, auch für Nase freimachen</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="ze_xie">
        	<kategorie id="k_0008"></kategorie>
            <name>Ze Xie</name>
            <wirkung>wasser-, hitzeeliminierend, saugt Wasser wie Schwamm auf</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="zhi_gan_zao">
        	<kategorie id="k_0011"></kategorie>
            <name>Zhi Gan Zao</name>
            <merkmal>in Honig gebacken, nässt dadurch nicht</merkmal>
            <wirkung>wärmend</wirkung>
            <bild quelle=""></bild>
        </kraut>

        <kraut id="zhi_mu">
        	<kategorie id="k_0002"></kategorie>
            <name>Zhi Mu</name>
            <merkmal>zur Hitzeeliminierung, zweitstärkste nach Gips</merkmal>
            <wirkung>aber zusätzlich auch formelwirkung in Richtung Yin, unterstützt Yin- Regeneration</wirkung>
            <wirkung>ankern das Yang, Hitze wird nicht einfach nur abgeschnitten (wie z.B. durch Coptis)</wirkung>
            <wirkung>besser für Yin- Nährung, befeuchtet, unterstützt Yin</wirkung>
            <wirkung>regeneriert Flüssigkeiten durch Hitze wegmachen</wirkung>
            <bild quelle=""></bild>
        </kraut>
        
    </kraeuter>
    
    <!-- Formelklassen -->
    <klassen>
    
    	<klasse id="kl_0001">
    		<name>Formeln, die harmonisieren</name>
    	</klasse>
    	
    	<klasse id="kl_0002">
    		<name>Formeln, die Hitze eliminieren</name>
    	</klasse>
    	
    	<klasse id="kl_0003">
    		<name>Formeln, die das Innere wärmen</name>
    	</klasse>
    	
    	<klasse id="kl_0004">
    		<name>Formeln, die Nahrungsstagnation auflösen</name>
    	</klasse>
    	
    	<klasse id="kl_0005">
    		<name>Formeln, die die Oberfläche befreien mit spezifischen Kopf- und Nackensymptomen</name>
    	</klasse>
    	
    	<klasse id="kl_0006">
    		<name>Qi-tonisierende Formeln</name>
    	</klasse>
    	
    	<klasse id="kl_0007">
    		<name>Formeln, die regulieren und harmonisieren Holz und Erde</name>
    	</klasse>
    	
    	<klasse id="kl_0008">
    		<name>Tonisierende Kräuter-Formeln</name>
    	</klasse>
    	
    	<klasse id="kl_0009">
    		<name>Yin-Tonics</name>
    	</klasse>
    
    </klassen>
	
	<!-- Formeln -->
	<formeln>
	
	<!-- Vorschlag: nur anwendungsgebiet und wirkung unter dem eigentlichen Formelnamen aufnehmen. -->
	<!-- Alles, was zur "Überklasse" der Formel gehört (oberer Teil des .docx) weglassen. -->
	<!-- notiz: alles, was Notizen sind, weitere Anmerkungen, Vergleiche, etc. -->
        
        <formel id="f_0001">
            <name>Ban Xia Xie Xin Tang</name>
            <klasse id="kl_0001"></klasse>
    <!-- 	<anwendungsgebiet>nicht bei äußeren Fülle-Mustern, diese müssen befreit werden, hier würden harmonisierende Formeln den pF erleichtern</anwendungsgebiet>
            <anwendungsgebiet>gut bei Holz-Qi-Stagnation</anwendungsgebiet>	-->
            <anwendungsgebiet>bei pathogenem Befall vom Stuhl</anwendungsgebiet>
            <anwendungsgebiet>Komplex von Mangel und Fülle oder Hitze + Kälte</anwendungsgebiet>
            <anwendungsgebiet>bei Hitzestagnation, wenn halb äußerer und innerer pF nicht ganz eliminiert ist</anwendungsgebiet>
            <anwendungsgebiet>bei latenter Verdauungsstörung, Kälte, E- Qi xu</anwendungsgebiet>
            <anwendungsgebiet>Völle, Aufstoßen, Ü, E, DF</anwendungsgebiet>
            <wirkung>harmonisiert Verdauung</wirkung>
            <wirkung>holt rebellierendes Qi runter (Ü + E)</wirkung>
            <wirkung>verteilt Nahrungsstagnation</wirkung>
            <notiz>eine Variante von Xiao Chai Hu Tang</notiz>
            <notiz>Z: dünner, gelber, teigiger Belag</notiz>
            <notiz>P: drahtig , beschleunigt</notiz>
            <bestandteil kraut="ban_xia" menge="9g" wichtigkeit="Kaiser">Schleim, Nässe, scharf (bewegt), bitter (senkt ab)</bestandteil>
            <bestandteil kraut="gan_jiang" menge="9g" wichtigkeit="Kaiser">warm</bestandteil>
            <bestandteil kraut="huang_qin" menge="9g" wichtigkeit="Minister">Scute, bitter</bestandteil>
            <bestandteil kraut="huang_lian" menge="3g" wichtigkeit="Minister">Coptis, bitter</bestandteil>
            <bestandteil kraut="dang_shen_ren_shen" menge="9g" wichtigkeit="Assistent">fördern Mitte, verhindern, dass absenkende Funktion von Ban Xia das Qi schädigt</bestandteil>
            <bestandteil kraut="da_zao" menge="12 Stück, eher weniger" wichtigkeit="Assistent"></bestandteil>
            <bestandteil kraut="zhi_gan_zao" menge="9g" wichtigkeit="Botschafter">harmonisiert</bestandteil>
        </formel>

        <formel id="f_0002">
            <name>Xiao Chai Hu Tang</name>
            <klasse id="kl_0001"></klasse>
    <!-- 	<anwendungsgebiet>nicht bei äußeren Fülle-Mustern, diese müssen befreit werden, hier würden harmonisierende Formeln den pF erleichtern</anwendungsgebiet>
            <anwendungsgebiet>gut bei Holz-Qi-Stagnation</anwendungsgebiet> 	-->
            <anwendungsgebiet>Harmonisierung der Zwischenschicht, auf Shao-Ebene</anwendungsgebiet>
            <anwendungsgebiet>Wechsel von Fieber und Frösteln (z.B. Malaria). Gleichzeitigkeit ist normales äußeres Muster, bei nur Fieber, dann nur Innen</anwendungsgebiet>
            <anwendungsgebiet>Wechsel durch Anspannung auf H-Ebene</anwendungsgebiet>
            <anwendungsgebiet>bitterer Mund, Ärger, Völlegefühl, Reizbarkeit</anwendungsgebiet>
            <wirkung>3 Hauptgruppen für Mittelschicht:
                a) Wechselseitigkeit, Völle in Brust
                b) Aufsteigen von Hitze ( Schwindel, Sodbrennen)
                c) Stagnation (Aufstoßen, Ü)</wirkung>
            <notiz>Kleine Bupleurum Suppe, Xiao = klein</notiz>
            <notiz>geht auch als diagnostic pill, danach zeigt sich eigentliches Muster</notiz>
            <notiz>P: gespannt, xuan mai</notiz>
            <notiz>Z: dünner weißer Belag</notiz>
            <bestandteil kraut="chai_hu" menge="24g" wichtigkeit="Kaiser">wichtigstes Kraut, reguliert Holz-Qi, aufsteigend, kühl</bestandteil>
            <bestandteil kraut="huang_qin" menge="3g" wichtigkeit="Minister">holt Hitze weg, ohne dass es in Tiefe geht, ventiliert pF nach oben bei gleichzeitiger Bewegung der Stagnation, wirkt nach oben</bestandteil>
            <bestandteil kraut="ban_xia" menge="24g" wichtigkeit="Assistent">wärmt, trafo von Schleim in ME</bestandteil>
            <bestandteil kraut="sheng_jiang" menge="9g" wichtigkeit="Assistent">harmonisiert ME, holt rebellierendes Qi nach unten</bestandteil>
            <bestandteil kraut="dang_shen_ren_shen" menge="9g/2-3x soviel" wichtigkeit="Assistent">für Qi-Bewegung, nicht als Tonic, unterstützt aufrechtes Qi, Verhindern das Eindringen des pF in die Tiefe, relativieren scharfes trockenes Ban Xia</bestandteil>
            <bestandteil kraut="zhi_gan_zao" menge="6g" wichtigkeit="Assistent">unterstützt aufrechtes Qi, Verhindern das Eindringen des pF in die Tiefe, relativieren scharfes trockenes Ban Xia</bestandteil>
            <bestandteil kraut="da_zao" menge="12 Stück" wichtigkeit="Assistent">unterstützt aufrechtes Qi, Verhindern das Eindringen des pF in die Tiefe, relativieren scharfes trockenes Ban Xia</bestandteil>
        </formel>

        <formel id="f_0003">
            <name>Bai Hu Tang</name>
            <klasse id="kl_0002"></klasse>
            <anwendungsgebiet>starker pF, der kein Wind erzeugt (kann trotzdem Erkältung sein)</anwendungsgebiet>
            <anwendungsgebiet>hier Abneigung gegen Hitze, kein Frösteln, keine Abneigung gegen Kälte.
                    die ist bei WH und WK!
                    wenn Frösteln weggeht, dann tiefere Schicht, wenn Frösteln bleibt, dann Mangel</anwendungsgebiet>
            <wirkung>hier keine OF öffnen, da sowiese schon Schwitzen
                    bei Wind ist Blockade durch pF, deswegen muss Ballast abgeworfen werden
                    hier den Kämpfern Eimer Wasser über den Kopf gießen, alle Tore sind ja schon offen</wirkung>
            <wirkung>holt Hitze aus Verdauung, generiert Flüssigkeiten- relativiert Durst
                    Ind.:
                    1. hohes Fieber, rotes Gesicht
                        - FH auf Qi-Ebene ohne Wind
                        - Meningitis, Arthritis, Diabetes, Nasenbluten, KS
                        - Zahnfleischentzündung, weil Verdauung ja noch of Ebene ist 
                            - durchTrockenheit und Hitze geschädigt
                    2. Schwitzen
                    3. Durst
                    4. Puls: stark, voll, groß, auf allen drei Ebenen</wirkung>
            <notiz>Z: rot, trocken, gelber Belag, kann auch weiß sein</notiz>
            <notiz>gilt als das oberflächlichste der Inneren Hitze</notiz>
            <notiz>starke und sichere Formel, Shi Gao aber nicht zu lange</notiz> 	
            <notiz>normalerweise 2-4 Dosen, wenn 6-7 Dosen ohne Effekt, war Muster falsch</notiz>	
            <notiz>gerade gut für Kinder</notiz>
            <bestandteil kraut="shi_gao" menge="30g" wichtigkeit="Kaiser">sehr stark hitzeeliminierend</bestandteil>
            <bestandteil kraut="zhi_mu" menge="9g" wichtigkeit="Minister">zweitstärkster Hitzeeliminator, befeuchtet, unterstützt Yin</bestandteil>
            <bestandteil kraut="zhi_gan_zao" menge="3g" wichtigkeit="Assistent">unterstützt Verdauung, befeuchtend</bestandteil>
            <bestandteil kraut="geng_mi" menge="9-15g" wichtigkeit="Botschafter">hilft, dass Kälte nicht Verdauung schädigt</bestandteil>
            <!-- "zhi gan cao" und "geng mi" hatten beide Wichtigkeiten, Assistent und Botschafter -->
            <!-- vorerst vernachlässigt -->
        </formel>

        <formel id="f_0004">
            <name>Si Ni Tang</name>
            <klasse id="kl_0003"></klasse>
            <anwendungsgebiet>bei Yang xu, Qi xu, abgesacktem W + E-Yang, macht einfach nur warm</anwendungsgebiet>
            <anwendungsgebiet>ohne sonstige Yang-Mangel-Zeichen</anwendungsgebiet>
            <notiz>Kalte Extremitäten Suppe</notiz>
            <notiz>Formel, wenn noch genug Yin da ist</notiz>
            <notiz>P: abgesackt</notiz>
            <notiz>Z: feuchter weißer Belag</notiz>
            <bestandteil kraut="fu_zi" menge="6-9g"></bestandteil>
            <bestandteil kraut="gan_jiang" menge="4.5g"></bestandteil>
            <bestandteil kraut="zhi_gan_zao" menge="5g"></bestandteil>
        </formel>

        <formel id="f_0005">
            <name>Jian Pi Wan</name>
            <klasse id="kl_0004"></klasse>
            <anwendungsgebiet>primärer Fokus ist Qi- Stärkung, nicht bei Mangel ohne Stagnation</anwendungsgebiet>
            <anwendungsgebiet>bei Erde Qi xu mit DF oder Obstipation, stärkt Nahrungsflamme</anwendungsgebiet>
            <anwendungsgebiet>stärkt Verdauung, reduziert Nahrungsstagnation, Inappetenz, Völlegefühl</anwendungsgebiet>
            <anwendungsgebiet>wenn Stagnation angefangen hat, sich in Hitze umzuwandeln</anwendungsgebiet>
            <anwendungsgebiet>mehr gegen weich wässrigen DF als Verstopfung</anwendungsgebiet>
            <notiz>Si Jun Zi Tang ist drin, aber zu schwach</notiz>
            <notiz>Z: gelber Belag</notiz>
            <bestandteil kraut="bai_zhu" menge="75g" wichtigkeit="Kaiser"></bestandteil>
            <bestandteil kraut="fu_ling" menge="60g" wichtigkeit="Kaiser"></bestandteil>
            <bestandteil kraut="dang_shen_ren_shen" menge="45g" wichtigkeit="Kaiser"></bestandteil>
            <bestandteil kraut="shan_yao" menge="30g" wichtigkeit="Minister">leicht sauer, hält Funktion</bestandteil>
            <bestandteil kraut="rou_dou_kou" menge="30g" wichtigkeit="Minister">wärmt Stuhl</bestandteil>
            <bestandteil kraut="shan_zha" menge="30g" wichtigkeit="Assistent"></bestandteil>
            <bestandteil kraut="shen_qu" menge="30g" wichtigkeit="Assistent">reduzieren die Nahrungsstagnation</bestandteil>
            <bestandteil kraut="mai_ya" menge="30g" wichtigkeit="Assistent"></bestandteil>
            <!-- <bestandteil kraut="mu_xiang" menge="22.5g" wichtigkeit="Assistent"></bestandteil> nicht gefunden, deshalb weggelassen -->
            <bestandteil kraut="chen_pi" menge="30g" wichtigkeit="Assistent">Qi-Stärkung</bestandteil>
            <!-- <bestandteil kraut="sha_ren" menge="30g" wichtigkeit="Assistent"></bestandteil> (nicht gefunden) -->
            <bestandteil kraut="huang_lian" menge="22.5g" wichtigkeit="Assistent">Nässe trocknen</bestandteil>
            <bestandteil kraut="gan_cao" menge="22.5g" wichtigkeit="Botschafter"></bestandteil>
        </formel>

        <formel id="f_0006">
            <name>Chuan Xiong Cha Tiao San</name>
            <klasse id="kl_0005"></klasse>
            <anwendungsgebiet>Chuan Xiong Pulver, das mit grünem Tee getrunken wird
                            wirkt im Yang- Bereich
            </anwendungsgebiet>
            <wirkung>2x6 g nach dem Essen mit grünem Tee
                        nach Essen wirkt Formel immer nach oben
                        während Essen auf Verdauung
                        vor dem Essen in Tiefe, nach Innen
            </wirkung>
            <notiz>bei KS, durch äußeren Wind, weil klares Yang stagniert (kann durch alle Ursachen sein)</notiz>
            <notiz>auch als Grundformel für chron. KS geeignet</notiz>
            <notiz>Fieber Frösteln, verstopfte Nase</notiz>
            <notiz>P: aufsteigend, of</notiz>
            <notiz>geht generell um Wind, H oder K ist sekundär</notiz>
            <notiz>auch für rhythmische wiederkehrende KS geeignet</notiz>
            <notiz>es wird aber nur die Manifestation, nicht die Wurzel behandelt</notiz>
            <notiz>es ginge auch bei Commotio</notiz>
            <notiz>bewegt und erleichtert den Kopf, Bo He bringt Formel nach oben, auch Chuan Xiong</notiz>
            <notiz>nicht bei aufsteigendem Holz- Yang</notiz>
            <notiz>bei chronischer Migräne bei Xue- Schwäche und –Stagnation: Cnidium 9 von Seven Forest</notiz>
            <notiz>Grüner Tee wirkt als Botschafter, indem er Hitze ausweist</notiz>
            <bestandteil kraut="bo_he" menge="240g" wichtigkeit="Kaiser">aufsteigend</bestandteil>
            <bestandteil kraut="chuan_xiong" menge="120g" wichtigkeit="Minister">lindert KS auf tieferer Ebene</bestandteil>
            <bestandteil kraut="bai_zhu" menge="60g" wichtigkeit="Minister">klärend auf Nase und Kopf, mehr vorne KS</bestandteil>
            <bestandteil kraut="qiang_hui" menge="60g" wichtigkeit="Minister">	zentrale Steigen- und Sinken- Achse	
                                                                                Verbindung von F + W
                                                                                spricht stabilere Ebene an, also hintere KS
            </bestandteil>
            <bestandteil kraut="xi_xin" menge="30g" wichtigkeit="Minister">verteilt Kälte</bestandteil>
            <bestandteil kraut="jing_jie" menge="120g" wichtigkeit="Assistent">beide öffnen OF, erleichtern</bestandteil>																										
            <bestandteil kraut="fang_feng" menge="45g" wichtigkeit="Assistent"></bestandteil>
            <bestandteil kraut="gan_cao" menge="60g" wichtigkeit="Botschafter">harmonisieren</bestandteil>
        </formel>

        <formel id="f_0007">
            <name>Bu Zhong Yi Qi Tang</name>
            <klasse id="kl_0006"></klasse>
            <anwendungsgebiet>Erde-Qi-tonisierend, nicht bei Holz überkontrolliert Erde, hier Tong Xie Yao Fang</anwendungsgebiet>
            <wirkung>hebt Erde- Yang an (durch Astragulus), um Qi- Kollaps zu verhindern</wirkung>
            <notiz>dadurch gut für Hexenschuss</notiz>
            <bestandteil kraut="huang_qi" menge="12-24g"></bestandteil>
            <bestandteil kraut="dang_shen_ren_shen" menge="9-12g"></bestandteil>
            <bestandteil kraut="bai_zhu" menge="9-12g"></bestandteil>
            <bestandteil kraut="zhi_gan_zao" menge="3-6g"></bestandteil>
            <bestandteil kraut="dang_gui" menge="6-12g"></bestandteil>
            <bestandteil kraut="chen_pi" menge="6-9g"></bestandteil>
            <bestandteil kraut="sheng_ma" menge="3-6g"></bestandteil>
            <bestandteil kraut="chai_hu" menge="3-9g"></bestandteil>
        </formel>

        <formel id="f_0008">
            <!-- fehlende Modifikationen_erstmal missachtet -->
            <name>Xiao Yao San</name>
            <klasse id="kl_0007"></klasse>
            <anwendungsgebiet>frei und leicht durchs Leben gehen, ohne Absicht gehen (Holz rausnehmen)</anwendungsgebiet>
            <wirkung>Holz- Qi- Stagnation regulieren vor dem Hintergrund von Xue xu</wirkung>
            <wirkung>E- Qi stärken, Xue stärken</wirkung>
            <notiz>H überkontrolliert E, da nicht ins F kommt</notiz>
            <notiz>H überkontrolliert E oder E xu mit relativen H- Überschuss</notiz>
            <notiz>KS, Brustschmerz, bitterer Mund, Müdigkeit, Angespanntheit</notiz>
            <notiz>unregelmäßige Menses, Brustschmerzen</notiz>
            <notiz>Gereiztheit, Nörgeligkeit, Stimmungsschwankungen</notiz>
            <notiz>Qi- Bewegung muss Xue gestärkt werden, bei Qi- Stärkung muss Xue bewegt werden</notiz>
            <bestandteil kraut="chai_hu" menge="9g">öffnet für die Feuerphase, wichtig für Relativierung und E erreichen</bestandteil>
            <bestandteil kraut="dang_gui" menge="9g">bewegt Ebene darunter, ohne dass ein Xue xu vorliegt</bestandteil>
            <bestandteil kraut="bai_shao" menge="9g">nährt, H- Qi- Regulator</bestandteil>
            <bestandteil kraut="bai_zhu" menge="9g">gut mit Fu Ling</bestandteil>
            <bestandteil kraut="fu_ling" menge="9g">weil Nässe entstehen kann durch E- Qi Xu,erleichter Qi/Xue-Bewegung</bestandteil>
            <bestandteil kraut="zhi_gan_zao" menge="6g"></bestandteil>
            <bestandteil kraut="sheng_jiang" menge="3g">reguliert, hebt an mit Bo He, deswegen gut für emotionale Probleme</bestandteil>
            <bestandteil kraut="bo_he" menge="3g"></bestandteil>
        </formel>

        <formel id="f_0009">
            <name>Jin Gui Shen Qi Wan</name>
            <klasse id="kl_0008"></klasse>
            <anwendungsgebiet>- nicht ganz so yangig, eher Wasser- Qi- stärkend</anwendungsgebiet>
            <wirkung>wärmt und tonisiert das Yang, wirkt eher auf W- Qi- Ebene</wirkung>
            <wirkung>nicht sehr heiß, recht milde, ausgeglichen, harmlos</wirkung>
            <wirkung>Aktivierung der Yang- Prozesse ohne Hitze auszulösen, wärmt ohne Trockenheit</wirkung>
            <wirkung>transformiert Wasser, leitet aus, gut für Ödeme</wirkung>
            <wirkung>rettet Yang, keine Nässe</wirkung>
            <wirkung>Formel soll noch 1000 J älter sein als Liu Wei Di Huang Wan
                    ist eigentlich Yin- Formel (hier + Fu Zi und Gui Zhi)
            </wirkung>
            <notiz>Indikation: gut bei Diabetes und Hypothyreose</notiz>
            <notiz>auch genannt: "Geheimnis des goldenen Kabinetts"</notiz>
            <bestandteil kraut="sheng_di_huang" menge="24g" wichtigkeit="Kaiser">	nährend, langsam, in Richtung Yin, gerne bei Leere Hitze
                                                                                    Sheng Di Huang eigentlich Yin- nährend, also kühlend, durch die Minister 
                                                                                    wird es in Richtung Yang gebracht, also Yin wird geschützt und genährt, dann in Yang umgewandelt
            </bestandteil>
            <bestandteil kraut="shan_zhu_you" menge="12g" wichtigkeit="Minister">	jap. Kornellkirsche, stabilisierend und bindend (adstringierend)
                                                                                    auf W- Ebene, zieht Nährung anderer Kräuter auf W- Ebene
                                                                                    bringen es in Richtung H- Ebene
            </bestandteil>
            <bestandteil kraut="shan_yao" menge="12g" wichtigkeit="Minister">		mildestes Qi- Tonik, leicht saure Wirkung ist adstringierend
                                                                                    fördern E- Ebene, bindet mein System an die Umwelt an
            </bestandteil>
            <bestandteil kraut="fu_zi" menge="3g" wichtigkeit="Minister">			s. Einzelkräuter
            </bestandteil>
            <bestandteil kraut="gui_zhi" menge="3g" wichtigkeit="Minister">			Zimtzweig
                                                                                    Zirkulation wird gefördert, bringt Fu Zi nach oben
            </bestandteil>
            <bestandteil kraut="ze_xie" menge="9g">									wasser-, hitzeeliminierend, saugt Wasser wie Schwamm auf
            </bestandteil>
            <bestandteil kraut="fu_ling" menge="9g" wichtigkeit="Assistent">		bei Nässe durch E- Qi- Mangel, eliminiert Nässe, 
                                                                                    wird gerne mit Qi- Tonikum kombiniert
                                                                                    für Erde
            </bestandteil>
            <bestandteil kraut="mu_dan_pi" menge="9g" wichtigkeit="Assistent">		Rinde der Pfingstrosenwurzel, hitzeeliminierend
                                                                                    eliminiert Stagnationshitze, reguliert auch Xue- Ebene,
                                                                                    denn wenn Yang auf Wasserebene schwach ist, stagniert das Xue
            </bestandteil>
        </formel>

        <formel id="f_0010">
            <!-- fehlende Modifikationen_erstmal missachtet -->
            <name>Liu Wei Di Huang Wan</name>
            <klasse id="kl_0009"></klasse>
            <anwendungsgebiet>Zentralster Yin- Tonic, nicht speziell ankernd, trotzdem auch für LH</anwendungsgebiet>
            <wirkung>W und H- Yin werden bearbeitet</wirkung>
            <wirkung>produziert keine Nässe, gut für Kinder, reguliert besonders Sinken</wirkung>
            <notiz>eine der ältesten Formel, sehr sicher</notiz>
            <notiz>gut für Diabetiker</notiz>
            <notiz>Kaiser und Minister sind nährende Gruppe, Assistenten mit ausleitendem Effekt nach unten</notiz>
            <bestandteil kraut="shu_di_huang" menge="24g" wichtigkeit="Kaiser">	durch langsame Wirkung und Kombi mit den anderen 
                                                                                Kräutern bringt es Nährung auf Jing- Ebene
                                                                                Sheng Di Huang wäre schlechter verdaulich
            </bestandteil>
            <bestandteil kraut="shan_zhu_you" menge="12g" wichtigkeit="Minister">	nährt Holz, stabilisiert Jing- Ebene 
            </bestandteil>
            <bestandteil kraut="shan_yao" menge="12g" wichtigkeit="Minister">	adstringiert, verhindert den übermäßigen Verbrauch der 
                                                                                Jing- Ebene, schafft Verbindung von Qi- zur Jing- Ebene
                                                                                Bai Zhu oder Ren Shen wirken zu stark nach oben
            </bestandteil>
            <bestandteil kraut="mu_dan_pi" menge="6g" wichtigkeit="Assistent">	eliminiert Hitze von Holz- Ebene 
            </bestandteil>
            <bestandteil kraut="fu_ling" menge="6g" wichtigkeit="Assistent">	zieht Nässe aus Erde 
            </bestandteil>
            <bestandteil kraut="ze_xie" menge="6g" wichtigkeit="Assistent">		zieht Hitze raus, so dass Flüss. nicht verklumpen
                                                                                kontrolliert LH
            </bestandteil>
        </formel>
        
    </formeln>
    
</TCM>
XML;
?>