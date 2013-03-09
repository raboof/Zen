### CoderDojo Zen
Initially a basic Dojo listing manager. We plan to enhance and add features down 
the line. You can help us make it better by forking this project, adding stuff and then issuing
a pull request back to us!

### Some things to add/hack/dream about
- User settings
- Improved admin panel
- Improved overall Dojo list w/ search
- Mutliple admins on a Dojo
- If country == US, have states also.

### Zen is built on and uses: 
- CodeIgniter http://codeigniter.com/
- Tank Auth http://www.konyukhov.com/soft/tank_auth/
- Twitter Bootstrap http://twitter.github.com/bootstrap/

### Local deployment notes 
- Create a MySQL database:
  - install mysql-server 
  - create a database
    - sudo mysqladmin create dojozen
  - create a user (choose a password different than '1234')
    - echo "grant all privileges on dojozen.* to 'dojozen'@'localhost' identified by '1234'" | sudo mysql dojozen
  - create an empty database
    - mysql dojozen --user=dojozen -p < schema.sql
  - fill in the details in  `'/application/config/database.php'`. 
- enter an encryption key in `'/application/config/config.php'` on line 227
- configure reCaptcha
  - get reCaptcha keys from https://www.google.com/recaptcha/admin/create for the captcha used through the app
  - fill in the keys on lines 131 and 132 in `'/application/config/tank_auth.php'`.
- Configure a webserver
  - install apache (sometimes known as 'httpd')
  - add a new configuration file at /etc/httpd/conf.d/zen.conf. If this apache instance is not going to serve any other sites you can safely set it like this, otherwise you need vhosts:

```
    <Directory /home/arnouten/dev/Zen>
      Require all granted
    </Directory>
    #Alias /Zen /home/arnouten/dev/Zen
    DocumentRoot /home/arnouten/dev/Zen
```

  - Note `.htaccess` is used to mask the `'index.php'` part of the URL, depending on your set up, you may need to edit this. 
