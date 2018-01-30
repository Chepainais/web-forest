# web-forest
Symfony4 easyAdmin test project

Project created because of lack of documentation how to do things.
Officail manual contains basic things, not covers all possibilities of parameters or switches to very poorly explained advanced things.
If you are new in symfony and easyAdmin - a lot of things is meaningless and makes no sense.
So help community and make better demo with fully explained manual, how to achieve your goals.

We start with form creation, where main entity is Forest and you want from one form add all related entity records

So begin:
Install symfony4 flex application

`composer create-project symfony/website-skeleton web-forest`

Install server, to test application. No need for apache, nginx e.t.c. while application in development

`composer require server --dev` [Server commands](docs/server.md)

Install EasyAdmin

`composer req admin`

