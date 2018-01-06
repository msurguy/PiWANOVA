# Intro

This is the repository for the PiWANOVA project which is described at length on [Hackster](https://www.hackster.io/msurguy/pi-zero-wan-piwanova-9846b3)

This is a Guestbook - like Laravel application that displays a dashboard that is updated remotely via cellular network using Hologram Nova modem connected to a Raspberry Pi.

Most of this application was made by following this tutorial: https://scotch.io/tutorials/build-a-guestbook-with-laravel-and-vuejs 

The parts that are most essential for my application are the [SignaturesController](https://github.com/msurguy/PiWANOVA/blob/master/app/Http/Controllers/SignaturesController.php) and the presence of "json" folder under "resources". The JSON file in that folder is remotely updated via cellular connection, and in turn shows an updated dashboard to all users connected to the Raspberry Pi's WiFi network.

## Installation and running

When cloned or downloaded, run this on your Raspberry Pi (make sure it is connected to the internet via WiFi or Ethernet first, and that PHP 7 and Node/NPM are installed):

```
composer install
npm install
```
You must change the application key by running the following command:
```
php artisan key:generate
```

After that, you can launch the Laravel application by typing 
```
php artisan serve --port=8081 --host=192.168.42.1
```

Enjoy!
