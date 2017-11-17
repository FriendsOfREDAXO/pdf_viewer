# PDF Viewer

Das REDAXO-AddOn stellt das *pdf.js*-Script von Mozilla zur Verfügung. Das Script läuft unter der Apache-Lizenz. [pdf.js](https://github.com/mozilla/pdf.js)


## Link-Beispiel

`<a href="<?= rex_url::base('assets/addons/pdf_viewer/pdf.js-gh-pages/web/viewer.html?file=/media/deinePDFdatei.pdf') ?>">Link</a> `

## Möchte man diese Lösung mit dem AddOn pdfOut oder anderen URLs mit Parametern kombinieren, muss die übergebene Url unbedingt per urlencode kodiert werden. `urlencode($foo)`

## Credits
Realisierung: Christian Gehrke
