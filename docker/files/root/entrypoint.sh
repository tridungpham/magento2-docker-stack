#!/bin/bash
set -e
exec /usr/bin/supervisord --nodaemon -c /etc/supervisor/supervisord.conf
