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
