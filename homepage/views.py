# -*- coding: utf-8 -*-
from __future__ import unicode_literals

import random

from django.shortcuts import render, redirect
from django.contrib.auth.decorators import login_required
from django.http import HttpResponse
from .models import Partner, Neuigkeit, Adresse, Dokument, FotoGalerie

def index(request):
    neuigkeit_list = Neuigkeit.objects.order_by('-datum')[:4]
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

@login_required
def intern_index(request):
    return render(request, 'intern/index.html')

@login_required
def intern_adressen(request):
    adresse_list = Adresse.objects.all()
    return render(request, 'intern/adressen.html', {
        'adresse_list': adresse_list
    })

@login_required
def intern_dokumente(request):
    return render(request, 'intern/dokumente.html')

@login_required
def intern_fotogalerien(request):
    return render(request, 'intern/fotogalerien.html')
