# -*- coding: utf-8 -*-
from __future__ import unicode_literals

import random

from django.shortcuts import render, redirect
from django.contrib.auth.decorators import login_required
from django.http import HttpResponse
from django.views.generic.edit import FormView
from django.db.models import Q
from .models import Partner, Neuigkeit, Adresse, Dokument, FotoGalerie, Foto

def index(request):
    neuigkeit_list = Neuigkeit.objects.order_by('-datum')[:3]
    partner_list = Partner.objects.order_by('?')
    return render(request, 'index.html', {
        'neuigkeit_list': neuigkeit_list,
        'partner_featured': partner_list[:4],
        'partner_list': partner_list
    })

def neuigkeit(request, id):
    neuigkeit = Neuigkeit.objects.get(pk=id)
    return render(request, 'neuigkeit.html', {
        'neuigkeit': neuigkeit
    })

def neuigkeiten(request):
    neuigkeit_list = neuigkeit_list = Neuigkeit.objects.order_by('-datum')
    return render(request, 'neuigkeiten.html', {
        'neuigkeit_list': neuigkeit_list
    })

@login_required
def intern_index(request):
    return render(request, 'intern/index.html')

@login_required
def intern_adressen(request):
    search = request.GET.get('search')
    if search:
        adresse_list = Adresse.objects.filter(
            Q(firma__contains=search) |
            Q(vorname__contains=search) |
            Q(nachname__contains=search) |
            Q(ort__contains=search) |
            Q(land__contains=search)
        )
    else:
        adresse_list = Adresse.objects.all()
    return render(request, 'intern/adressen.html', {
        'adresse_list': adresse_list
    })

@login_required
def intern_dokumente(request):
    dokument_list = Dokument.objects.all()
    return render(request, 'intern/dokumente.html', {
        'dokument_list': dokument_list
    })

@login_required
def intern_fotogalerien(request):
    fotogalerie_list = FotoGalerie.objects.all()
    return render(request, 'intern/fotogalerien.html', {
        'fotogalerie_list': fotogalerie_list
    })

@login_required
def intern_fotogalerien_fotos(request, id):
    fotogalerie = FotoGalerie.objects.get(pk=id)
    return render(request, 'intern/fotogalerien.fotos.html', {
        'fotogalerie': fotogalerie
    })
