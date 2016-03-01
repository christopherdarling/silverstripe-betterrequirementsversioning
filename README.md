[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/christopherdarling/silverstripe-betterrequirementsversioning/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/christopherdarling/silverstripe-betterrequirementsversioning/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/christopherdarling/silverstripe-betterrequirementsversioning/badges/build.png?b=master)](https://scrutinizer-ci.com/g/christopherdarling/silverstripe-betterrequirementsversioning/build-status/master)

silverstripe-betterrequirementsversioning
=========================================

Replaces the querystring ?m=timestamp versioning to include the filestamp before the file extension for better caching

## Installation
1. Install the module as usual.
2. Add the following code to your .htaccess

```
<IfModule mod_rewrite.c>
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule ^(.+)\.(\d+)\.(js|css|png|jpg|gif)$ $1.$3 [L]
</IfModule>
```
