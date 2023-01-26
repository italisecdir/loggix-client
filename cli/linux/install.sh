#!/bin/bash
/usr/bin/wget -O /usr/bin/loggix https://raw.githubusercontent.com/italisecdir/loggix-client/main/cli/linux/template
read -p "Loggix Server (eg: https://loggix.server.com): " host
sudo /usr/bin/sed -i "s|{{HOST}}|$host|gi" /usr/bin/loggix
chmod +x /usr/bin/loggix
