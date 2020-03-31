[![issues](https://img.shields.io/github/issues/devkartic/c3mail?style=flat-square)](https://github.com/devkartic/c3mail/issues)
[![forks](https://img.shields.io/github/forks/devkartic/c3mail?style=flat-square)](https://github.com/devkartic/c3mail/network/members)
[![stargazers](https://img.shields.io/github/stars/devkartic/c3mail?style=flat-square)](https://github.com/devkartic/c3mail/stargazers)
[![license](https://img.shields.io/twitter/url?url=https%3A%2F%2Fgithub.com%2Fdevkartic%2Fc3mail)](https://twitter.com/GharamiKartic)

# c3mail package in laravel.

## This package for email send and save into database.

### User guide

#### step 1 : installation
composer require crazycoderscafe/c3mail

composer update

#### step 2 : Mail configuration

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls

#### step 3 : Custom forwarding mail address

Directory : config/c3mail.php

return [
  'send_mail_to' => 'example@gmail.com'
];

#### step 4 : Custom views

Directory : resources/views/c3mail/


My blog : http://www.crazycoderscafe.com/

