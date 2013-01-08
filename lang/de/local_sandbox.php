<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

$string['pluginname'] = 'Sandkasten';
$string['adjustcoursestartdate'] = 'Kursbeginn anpassen';
$string['adjustcoursestartdatedescription'] = 'Beim Zurücksetzen des Kurses soll der Kursbeginn auf das aktuelle Datum anstatt auf das in der Kurssicherungsdatei hinterlegte Datum gesetzt werden';
$string['coursebackupsdescription'] = 'Geben Sie den Pfad an, an dem die Kurssicherungen liegen, die der Sandkasten nutzen soll. Kurssicherungen unter diesem Pfad müssen mit dem kurzen Kursname des zurückzusetzenden Kurses benannt sein und die Dateiendung .mbz haben.';
$string['coursebackupsdirectory'] = 'Speicherort der Kurssicherungen';
$string['coursebackupsheading'] = 'Kurssicherungen';
$string['cronrunday'] = 'Ausführungstage';
$string['cronrundaydescription'] = 'Die Sandkasten-Kurse sollen an diesen Tagen zurückgesetzt werden';
$string['cronruntime'] = 'Ausführungszeit';
$string['cronruntimedescription'] = 'Die Sandkasten-Kurse sollen jeweils um diese Uhrzeit zurückgesetzt werden';
$string['cronruntimeheading'] = 'Ausführungszeit';
$string['emailsubjecterror'] = 'FEHLER: Sandkasten';
$string['emailsubjectnotify'] = 'HINWEIS: Sandkasten';
$string['emailsubjectwarning'] = 'WARNUNG: Sandkasten';
$string['errordirectorynotexist'] = 'FEHLER: Das Sandkasten-Verzeichnis "{$a}" existiert nicht oder es konnte darauf nicht zugegriffen werden, Ausführung wird beendet...';
$string['errordirectorynotreadable'] = 'FEHLER: Das Sandkasten-Verzeichnis "{$a}" konnte nicht zum Lesen geöffnet werden, Ausführung wird beendet...';
$string['errorlastcronerror'] = 'FEHLER: Der Zeitpunkt der letzten Ausführung des Sandkastens konnte nicht aus der Datenbank gelesen werdenestamp from database, Ausführung wird beendet...';
$string['exitingnoneed'] = 'Der Zeitpunkt zur nächsten Ausführung des Sandkastens ist noch nicht erreicht, Ausführung wird beendet...';
$string['noticedaysnotconfigured'] = 'HINWEIS: Die Tage, an denen der Sandkasten ausgeführt werden soll, sind nicht konfiguriert, es gibt also nichts zu tun, Ausführung wird beendet...';
$string['noticedirectorynotconfigured'] = 'HINWEIS: Das Sandkasten-Verzeichnis ist nicht konfiguriert, es gibt also nichts zu tun, Ausführung wird beendet...';
$string['noticerestorecount'] = 'HINWEIS: {$a} Kurse wurden zurückgesetzt';
$string['notifyheading'] = 'Benachrichtigungen';
$string['notifylevel'] = 'E-Mail Schwelle';
$string['notifyleveldescription'] = 'E-Mail-Mitteilungen bei Fehlern werden erst bei der eingestellten Fehlerstufe oder darüber verschickt';
$string['notifyonerrors'] = 'E-Mail bei Fehlern an';
$string['notifyonerrorsdescription'] = 'Wenn Fehler bei der Ausführung des Sandkastens auftreten, können E-Mail-Benachrichtigungen verschickt werden. Wer soll diese Mitteilungen erhalten?';
$string['nowprocessing'] = 'JETZT: Kurs "{$a}" wird verarbeitet';
$string['skippingadjuststartdatefailed'] = 'WARNUNG: Der Kursbeginn des Kurses "{$a}" konnte nicht angepasst werden, die Ausführung wird bei der nächsten Datei fortsetzt...';
$string['skippingcreatefailed'] = 'WARNUNG: Der Kurs "{$a}" konnte nicht angelegt werden, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingdbupdatefailed'] = 'WARNUNG: Die Aktualisierung des Datenbanksatzes des Kurses "{$a}" schlug fehl, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingdeletionfailed'] = 'WARNUNG: Der Kurs "{$a}" konnte (teilweise oder gar nicht) gelöscht werden, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingnocourse'] = 'WARNUNG: Es gibt keinen Kurs mit dem Kurznamen "{$a}", die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingrestorefailed'] = 'WARNUNG: Die Wiederherstellung des Kurses "{$a}" schlug fehl, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingunzipfailed'] = 'WARNUNG: Das Entpacken der Datei "{$a}" schlug fehl, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['successrestored'] = 'ERFOLG: Kurs "{$a}" wurde zurückgesetzt';