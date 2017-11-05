# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.contrib import admin
from django.utils.translation import ugettext_lazy
from django.utils.html import mark_safe
from django.shortcuts import get_object_or_404
from imagekit.admin import AdminThumbnail
from multiupload.admin import MultiUploadAdmin
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

class FotoGalerieAdmin(MultiUploadAdmin):
    list_display = ['titel', 'datum']
    search_fields = ['titel', 'datum']
    inlines = [ FotoInlineAdmin ]
    multiupload_form = True
    multiupload_list = False

    def process_uploaded_file(self, uploaded, galerie, request):
        titel = request.POST.get('title', None)
        foto = galerie.foto_set.create(image=uploaded, titel=titel)
        foto.save()
        return {
            'url': foto.image.url,
            'thumbnail': foto.thumbnail.url,
            'id': foto.id,
            'name': foto.titel
        }

    def delete_file(self, pk, request):
        obj = get_object_or_404(models.Foto, pk=pk)
        return obj.delete()

class AnhangInlineAdmin(admin.TabularInline):
    list_display = ['titel', 'datei']
    model = models.Anhang

class NeuigkeitAdmin(admin.ModelAdmin):
    list_display = ['titel', 'datum']
    search_fields = ['titel', 'inhalt', 'datum']
    inlines = [ AnhangInlineAdmin ]

class DokumentAdmin(admin.ModelAdmin):
    list_display = ['titel', 'datum', 'dokument']
    search_fields = ['titel', 'beschreibung', 'datum']

admin.site.register(models.Partner, PartnerAdmin)
admin.site.register(models.Adresse, AdresseAdmin)
admin.site.register(models.FotoGalerie, FotoGalerieAdmin)
admin.site.register(models.Neuigkeit, NeuigkeitAdmin)
admin.site.register(models.Dokument, DokumentAdmin)
