# -*- coding: utf-8 -*-
# Generated by Django 1.11.6 on 2017-11-04 09:36
from __future__ import unicode_literals

from django.db import migrations, models
import homepage.models


class Migration(migrations.Migration):

    dependencies = [
        ('homepage', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Dokument',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titel', models.CharField(max_length=100)),
                ('beschreibung', models.TextField(blank=True)),
                ('dokument', models.FileField(max_length=255, upload_to=homepage.models.dokument_path)),
                ('datum', models.DateField()),
                ('updated', models.DateTimeField(auto_now=True)),
                ('created', models.DateTimeField(auto_now_add=True)),
            ],
        ),
    ]
