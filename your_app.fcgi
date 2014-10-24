#!/home/path/to/your/python/interpreter/venv/bin/python

#I recommend that if you have access to your shared hosting, you install virtualenv and do 
#everything within that container
import os,sys

#this is the path to your django app (same directory as where manage.py resides)
sys.path.append("/path/to/your/django/app")

#you need to modify this to point to site-packages. Hopefully within venv
sys.path.insert(0, "/home/path/to/python/libs/venv/lib/python2.7/site-packages")

os.environ['DJANGO_SETTINGS_MODULE'] = "storytelling.settings"
from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")