django-fcgi-apache-config
=========================

If you're an unfortunately soul trying to run Django on webhosts using apache+fcgi, this config file is for you! I'm looking at Hostgator, Dreamhosts, and others.

Set up
------

 - rename your_app.fcgi to your app name
 - change the last line inside .htaccess to the app name you renamed in the previous step
 - change the path to your static content inside .htaccess (preferrably to point to somewhere inside public_html so apache can pick it up)
 - change paths to point to your django app and its settings
 
Good luck!