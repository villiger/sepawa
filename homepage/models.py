# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from time import strftime
from django.db import models
from imagekit.models import ProcessedImageField, ImageSpecField
from imagekit.processors import ResizeToFill, ResizeToFit, Thumbnail
from tinymce.models import HTMLField
from tinymce.widgets import TinyMCE
import binascii, os

def partner_image_path(instance, filename):
    hex_dig = binascii.hexlify(os.urandom(50))[:8].decode()
    return 'partner/{0}/{1}'.format(hex_dig, filename)

def foto_image_path(instance, filename):
    hex_dig = binascii.hexlify(os.urandom(50))[:8].decode()
    return 'foto/{0}/{1}'.format(hex_dig, filename)

def anhang_path(instance, filename):
    hex_dig = binascii.hexlify(os.urandom(50))[:8].decode()
    return 'anhang/{0}/{1}'.format(hex_dig, filename)

def dokument_path(instance, filename):
    hex_dig = binascii.hexlify(os.urandom(50))[:8].decode()
    return 'dokument/{0}/{1}'.format(hex_dig, filename)

class Partner(models.Model):
    name = models.CharField(max_length=50)
    url = models.URLField()
    image = ProcessedImageField(upload_to=partner_image_path, processors=[ResizeToFill(158, 118)], format='PNG')
    updated = models.DateTimeField(auto_now=True)
    created = models.DateTimeField(auto_now_add=True)

    class Meta:
        verbose_name = 'Partner'
        verbose_name_plural = 'Partner'
        ordering = ['name']

    def absolute_url(self):
        if self.url.__str__().startswith("http"):
            return self.url
        else:
            return "http://" + self.url

    def __str__(self):
        return self.name

class Adresse(models.Model):
    KORPORATIVE = 'korporative'
    EINZELNE = 'einzelne'
    TYP_CHOICES = (
        (KORPORATIVE, 'korporativ'),
        (EINZELNE, 'einzeln'),
    )

    FRAU = 'Frau'
    HERR = 'Herr'
    ANREDE_CHOICES = (
        (FRAU, FRAU),
        (HERR, HERR),
    )

    LEER = ''
    DOKTOR = 'Dr.'
    TITEL_CHOICES = (
        (LEER, LEER),
        (DOKTOR, DOKTOR),
    )

    typ = models.CharField(max_length=20, choices=TYP_CHOICES, default=KORPORATIVE)
    firma = models.CharField(max_length=50, blank=True)
    anrede = models.CharField(max_length=10, choices=ANREDE_CHOICES, default=FRAU)
    titel = models.CharField(max_length=10, choices=TITEL_CHOICES, default=LEER, blank=True)
    vorname = models.CharField(max_length=50)
    nachname = models.CharField(max_length=50)
    adresse = models.CharField(max_length=50)
    plz = models.CharField(max_length=10, verbose_name='PLZ')
    ort = models.CharField(max_length=50)
    land = models.CharField(max_length=2)
    email_firma = models.EmailField(max_length=50, blank=True, verbose_name='Email geschäftlich')
    email_privat = models.EmailField(max_length=50, blank=True, verbose_name='Email privat')
    updated = models.DateTimeField(auto_now=True)
    created = models.DateTimeField(auto_now_add=True)

    class Meta:
        verbose_name = 'Adresse'
        verbose_name_plural = 'Adressen'
        ordering = ['firma', 'nachname', 'vorname']

    def __str__(self):
        return self.vorname + ' ' + self.nachname

class FotoGalerie(models.Model):
    titel = models.CharField(max_length=100)
    datum = models.DateField()
    updated = models.DateTimeField(auto_now=True)
    created = models.DateTimeField(auto_now_add=True)

    class Meta:
        verbose_name = 'Fotogalerie'
        verbose_name_plural = 'Fotogalerien'
        ordering = ['-datum']

    def __str__(self):
        return self.titel

class Foto(models.Model):
    galerie = models.ForeignKey(FotoGalerie, on_delete=models.CASCADE)
    titel = models.CharField(max_length=100, blank=True)
    image = ProcessedImageField(upload_to=foto_image_path, processors=[ResizeToFit(1500, 1500, upscale=False)], format='JPEG')
    thumbnail = ImageSpecField(source='image', processors=[Thumbnail(320, 240, upscale=True)], format='JPEG')
    updated = models.DateTimeField(auto_now=True)
    created = models.DateTimeField(auto_now_add=True)

    class Meta:
        verbose_name = 'Foto'
        verbose_name_plural = 'Fotos'

    def __str__(self):
        return self.titel

class Neuigkeit(models.Model):
    titel = models.CharField(max_length=255)
    inhalt = HTMLField()
    datum = models.DateField()
    updated = models.DateTimeField(auto_now=True)
    created = models.DateTimeField(auto_now_add=True)

    class Meta:
        verbose_name = 'Neuigkeit'
        verbose_name_plural = 'Neuigkeiten'
        ordering = ['-datum']

    def __str__(self):
        return self.titel

class Anhang(models.Model):
    neuigkeit = models.ForeignKey(Neuigkeit, on_delete=models.CASCADE)
    titel = models.CharField(max_length=100)
    datei = models.FileField(upload_to=anhang_path, max_length=255)
    updated = models.DateTimeField(auto_now=True)
    created = models.DateTimeField(auto_now_add=True)

    class Meta:
        verbose_name = 'Anhang'
        verbose_name_plural = 'Anhänge'
        ordering = ['titel']

    def __str__(self):
        return self.titel

class Dokument(models.Model):
    titel = models.CharField(max_length=100)
    beschreibung = models.TextField(blank=True)
    dokument = models.FileField(upload_to=dokument_path, max_length=255)
    datum = models.DateField()
    updated = models.DateTimeField(auto_now=True)
    created = models.DateTimeField(auto_now_add=True)

    class Meta:
        verbose_name = 'Dokument'
        verbose_name_plural = 'Dokumente'
        ordering = ['-datum', 'titel']

    def __str__(self):
        return self.titel
