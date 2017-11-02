# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.shortcuts import render
from django.http import HttpResponse

import random

def index(request):
    partner_list = [
        "img/partner/96726_wetrok_logo.gif",
        "img/partner/96732_henkel_logo.gif",
        "img/partner/96738_logoklk_neu.gif",
        "img/partner/96747_logobrenntag.gif",
        "img/partner/96756_logoschaerer.gif",
        "img/partner/96768_logohydrior.gif",
        "img/partner/98520_logobasf.gif",
        "img/partner/99500_logoimpag.gif",
        "img/partner/99506_logochemia.gif",
        "img/partner/99515_logozsk.gif",
        "img/partner/99524_logoprochem.gif",
        "img/partner/99530_logokarit.gif",
        "img/partner/99536_logorahnneu.gif",
        "img/partner/99551_logosteinfels.gif",
        "img/partner/99557_logogeorgeswalther.gif",
        "img/partner/99566_logoerbsloeh.gif",
        "img/partner/99572_logoomya.gif",
        "img/partner/99578_logocht.gif",
        "img/partner/99584_logoluzi2.gif",
        "img/partner/99590_logodiversey.gif",
        "img/partner/99596_logofripoo.jpg",
        "img/partner/99597_logotemmentec.gif",
        "img/partner/99603_logobtc.gif",
        "img/partner/99609_logoakzonobel.gif",
        "img/partner/99620_logotrichema.gif",
        "img/partner/104744_logohalag.gif",
        "img/partner/108204_logoter.gif",
        "img/partner/111585_logolehvoss.gif",
        "img/partner/115368_logo_azelis3.jpg",
        "img/partner/116072_logolucridis.gif",
        "img/partner/116420_logopermcos.gif",
        "img/partner/116432_logounivar.gif",
        "img/partner/118429_logofrike_neu2.gif"
    ]

    random.shuffle(partner_list)

    context = {
        "partner_featured": partner_list[:4],
        "partner_list": partner_list[4:]
    }
    
    return render(request, "index.html", context)
