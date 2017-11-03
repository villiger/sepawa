#!/bin/bash

NAME="sepawa"                              #Name of the application (*)
DJANGODIR=/srv/sepawa             # Django project directory (*)
SOCKFILE=/srv/sepawa/sepawa_gunicorn.sock        # we will communicate using this unix socket (*)
USER=avi                                      # the user to run as (*)
GROUP=users                                     # the group to run as (*)
NUM_WORKERS=1                                     # how many worker processes should Gunicorn spawn (*)
DJANGO_SETTINGS_MODULE=sepawa.settings_local             # which settings file should Django use (*)
DJANGO_WSGI_MODULE=sepawa.wsgi                     # WSGI module name (*)

echo "Starting $NAME as `whoami`"

# Activate the virtual environment
cd $DJANGODIR
source /srv/sepawa/sepawaenv/bin/activate
export DJANGO_SETTINGS_MODULE=$DJANGO_SETTINGS_MODULE
export PYTHONPATH=$DJANGODIR:$PYTHONPATH

# Create the run directory if it doesn't exist
RUNDIR=$(dirname $SOCKFILE)
test -d $RUNDIR || mkdir -p $RUNDIR

# Start your Django Unicorn
# Programs meant to be run under supervisor should not daemonize themselves (do not use --daemon)
exec /srv/sepawa/sepawaenv/bin/gunicorn \
    --name $NAME \
    --workers $NUM_WORKERS \
    --user $USER \
    --bind=unix:$SOCKFILE \
    ${DJANGO_WSGI_MODULE}:application
