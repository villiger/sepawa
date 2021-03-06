"""sepawa URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.11/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""
from django.conf.urls import url
from django.contrib import admin
from django.contrib.auth import views as auth_views

from . import views

urlpatterns = [
    url(r'^$', views.index, name='index'),
    url(r'^neuigkeit/(?P<id>\w+)/$', views.neuigkeit),
    url(r'^neuigkeiten/$', views.neuigkeiten),
    url(r'^intern/$', views.intern_index, name='intern'),
    url(r'^intern/adressen/$', views.intern_adressen, name='adressen'),
    url(r'^intern/dokumente/$', views.intern_dokumente),
    url(r'^intern/fotogalerien/$', views.intern_fotogalerien),
    url(r'^intern/fotogalerien/(?P<id>\w+)/$', views.intern_fotogalerien_fotos),
    url(r'^anmeldung-gv/$', views.anmeldung_gv),
    url(r'^anmeldung-gv/(?P<password>\w+)/$', views.anmeldung_gv),
    url(r'^intern/anmeldung-gv/$', views.intern_anmeldung_gv, name='anmeldung-gv'),
    url(r'^intern/anmeldung-gv/ok$', views.intern_anmeldung_gv_ok, name='anmeldung-gv-ok'),
    url(r'^intern/$', views.intern_index, name='intern'),
    url(r'^login/$', auth_views.login, name='login'),
    url(r'^logout/$', auth_views.logout, {'next_page': '/'}, name='logout'),
]
