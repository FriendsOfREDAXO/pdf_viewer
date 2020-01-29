# PDF Viewer

Das REDAXO-AddOn stellt das *pdf.js*-Script von Mozilla zur Verfügung. 
Das Script läuft unter der Apache-Lizenz. [pdf.js](https://github.com/mozilla/pdf.js)

PDFs können so ohne zusätzliches PlugIn im Browser betrachtet werden

## Link-Beispiel

```html
<a href="<?= rex_url::assets('addons/pdf_viewer/vendor/web/viewer.html?file=/media/deinePDFdatei.pdf') ?>">Link</a> 
```

## Tipp
Möchte man diese Lösung mit dem AddOn pdfOut oder anderen URLs mit Parametern kombinieren, muss die übergebene Url unbedingt per urlencode kodiert werden. `urlencode($foo)`

### Autor

**Friends Of REDAXO**

* http://www.redaxo.org
* https://github.com/FriendsOfREDAXO


**Credits**

Realisierung: Christian Gehrke

[KLXM Crossmedia GmbH](https://klxm.de)

