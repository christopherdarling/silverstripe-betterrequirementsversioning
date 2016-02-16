[![Build Status](https://secure.travis-ci.org/Respect/Validation.png)](http://travis-ci.org/Respect/Validation)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Respect/Validation/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Respect/Validation/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Respect/Validation/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Respect/Validation/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/respect/validation/v/stable.png)](https://packagist.org/packages/respect/validation)
[![Total Downloads](https://poser.pugx.org/respect/validation/downloads.png)](https://packagist.org/packages/respect/validation)
[![License](https://poser.pugx.org/respect/validation/license.png)](https://packagist.org/packages/respect/validation)

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
