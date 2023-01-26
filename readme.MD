# Loggix Client
## Composer package for Laravel
To use Loggix from a Laravel project you just need to require the package using composer and set some environment variables to define the server location, the token of the application you want to log from and the behaviour of the library.
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
The linux command line utility is intended for sending log information to the Loggix server from outside a Laravel application. Use it to log info/errors from inside cron jobs, automated tasks, etc
### Installation
````
mkdir temp
cd temp
wget -qO install.sh https://raw.githubusercontent.com/italisecdir/loggix-client/main/cli/linux/install.sh
chmod +x install.sh
sudo ./install.sh
````
When a Loggix Server prompt appears, specify the protocol://hostname of the Loggix Server:
````
Loggix Server (eg: https://loggix.server.com): https://loggix...
````
Execute a test
````
loggix prueba inf
````
Remove installation file
````
rm install.sh
````

The Client utility is deployed under /usr/bin folder and it is called loggix
