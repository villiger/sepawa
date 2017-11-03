# -*- coding: utf-8 -*-
from __future__ import unicode_literals

import random

from django.shortcuts import render
from django.http import HttpResponse
from .models import Partner, Neuigkeit

def index(request):
    neuigkeit_list = Neuigkeit.objects.order_by('-datum')[:4]
    partner_list = Partner.objects.order_by('?')
    return render(request, 'index.html', {
        'neuigkeit_list': neuigkeit_list,
        'partner_featured': partner_list[:4],
        'partner_list': partner_list[4:]
    })

def neuigkeit(request, id):
    neuigkeit = Neuigkeit.objects.get(pk=id)
    return render(request, 'neuigkeit.html', {
        'neuigkeit': neuigkeit
    })

def design(request):
    return render(request, 'design.html')
