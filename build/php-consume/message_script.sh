#!/usr/bin/env bash
sleep 10;
/var/www/project/bin/console messenger:consume-messages >&1;
