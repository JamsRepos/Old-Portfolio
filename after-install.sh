#!/bin/bash
# This file is ran after deployment, it ensures that craft is up to date, project config has been applied and ownership of files is correct.

cd /var/www/jdf.gg

shopt -s extglob
rm -rf !(.env|*.tar.gz|*.sh)

tar -xvf archive-$(date -I).tar.gz

cd /var/www/

chown -R www-data:www-data jdf.gg
cd jdf.gg

runuser -u www-data -- php craft up --interactive=0

rm archive-$(date -I).tar.gz

if [ -d "storage/runtime/compiled_templates" ]
then
    chown www-data:www-data storage/runtime/compiled_templates
else
    mkdir storage/runtime/compiled_templates
    chown www-data:www-data storage/runtime/compiled_templates
fi