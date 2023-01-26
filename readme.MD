# Loggix Client
## Composer package for Laravel
````
composer require italisecdir/loggix-client
````
Configure .env variables
````
LOGGIX_ACTIVE=true
LOGGIX_SERVER=https://loggix.xxxxxxxxxx.xxx
LOGGIX_VERSION=v1
LOGGIX_TOKEN=xxxxxxxxxxxxxxxxxxxx
````
LOGGIX_TOKEN is the one specified in the client table of the Loggix Server. This token is unique and identifies the client application to log it's entries separately of the rest.
This token is created by the Loggix Server Administrator.

## Linux command line client
### Installation
````
mkdir temp
cd temp
wget -qO install.sh https://raw.githubusercontent.com/italisecdir/loggix-client/main/cli/linux/install.sh
chmod +x install.sh
sudo ./install.sh
rm install.sh
````
Especificar el nombre del servidor Loggix cuando lo pregunte el instalador:
````
Loggix Server (eg: https://loggix.server.com): https://loggix...
````
Ejecutar una prueba
````
loggix prueba inf
````

