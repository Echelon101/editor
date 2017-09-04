<?php
$input = "<h2> {[rowcount:Name:id:10]} kaufen</h2><p><br>Sie erhalten {[rowcount:rowcount:id:10]} Adressen der gew&auml;hlten Branche als kommagetrennte Textdatei. Diese k&ouml;nnen Sie in den allermeisten F&auml;llen problemlos in Ihre Anwendungsprogramme importieren und verwenden. Aus Platz- und Performancegr&uuml;nden erhalten Sie diese in gepackter Form (ZIP-Datei).<br><br>Zur Neukundengewinnung ideal auch inkl. E-Mail-Adressen, sofern bekannt und angegeben.<br>Steigern Sie Ihren Umsatz durch unsere gepr&uuml;ften Branchenadressen.<br><br></p>";

preg_match_all("/\[[^\]]*\]/", $input, $matches);

echo "<pre><code>";
print_r($matches);
echo "</code></pre>";