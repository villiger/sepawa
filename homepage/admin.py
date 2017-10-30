# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.contrib import admin
from django.utils.translation import ugettext_lazy
from django.utils.html import mark_safe
from imagekit.admin import AdminThumbnail
from . import models

admin.site.site_header = ugettext_lazy('SEPAWA Admin')

class PartnerAdmin(admin.ModelAdmin):
    list_display = ['name', 'url', 'admin_thumbnail']
    search_fields = ['name']
    admin_thumbnail = AdminThumbnail(image_field='image')

class AdresseAdmin(admin.ModelAdmin):
    list_display = ['nachname', 'vorname', 'ort', 'firma']
    search_fields = ['nachname', 'vorname', 'ort', 'firma']

class FotoInlineAdmin(admin.TabularInline):
    list_display = ['titel', 'preview']
    readonly_fields = ['preview']
    model = models.Foto

    def preview(self, obj):
        return mark_safe("""<img src="%s" alt="Thumbnail"/>""" % obj.thumbnail.url if obj and obj.thumbnail else '')

class FotoGalerieAdmin(admin.ModelAdmin):
    list_display = ['titel', 'datum']
    search_fields = ['titel', 'datum']
    inlines = [ FotoInlineAdmin ]

class AnhangInlineAdmin(admin.TabularInline):
    list_display = ['titel', 'datei']
    model = models.Anhang

class NeuigkeitAdmin(admin.ModelAdmin):
    list_display = ['titel', 'datum']
    search_fields = ['titel', 'inhalt', 'datum']
    inlines = [ AnhangInlineAdmin ]

admin.site.register(models.Partner, PartnerAdmin)
admin.site.register(models.Adresse, AdresseAdmin)
admin.site.register(models.FotoGalerie, FotoGalerieAdmin)
admin.site.register(models.Neuigkeit, NeuigkeitAdmin)
