To install server

`composer require server --dev`
Run server

`php bin/console server:run`
And server runs at address 127.0.0.1:8000
If you need specify another IP or port, then run

`php bin/console server:run 192.168.88.1:8080`

To allow acces from non local IPs (if you develop on virtual server, Vagrant, Docker)
then specify IP to `0.0.0.0:8000`