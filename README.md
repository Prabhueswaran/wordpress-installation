# wordpress-installation
## Step 1: Installing Nginx on Ubuntu 20.04

> $ sudo apt update 
> 
> $ sudo apt install nginx
> 
> $ sudo systemctl status nginx 
> 
> $ sudo systemctl enable nginx

## Step 2: Installing PHP in Ubuntu 20.04

> $ sudo apt install php php-mysql php-fpm
> 
> $ sudo systemctl status php7.4-fpm
> 
> $ sudo systemctl enable php7.4-fpm

## Step 3: Configuring Nginx to work with PHP-FPM

> $ sudo vim /etc/nginx/sites-available/default
> Replace the defacult config file from this repo
https://github.com/Prabhueswaran/wordpress-installation/blob/main/default 

> $ sudo nginx -t
> 
> $ sudo systemctl restart nginx

 
## Step 4: Installing WordPress in Ubuntu 20.04

> cd /tmp
>
> curl -LO https://wordpress.org/latest.tar.gz
>
> tar xzvf latest.tar.gz
>
> cp /tmp/wordpress/wp-config-sample.php /tmp/wordpress/wp-config.php
>
> sudo cp -a /tmp/wordpress/. /var/www/wordpress
>
> sudo chown -R www-data:www-data /var/www/wordpress

## Step 5: Setting up the WordPress Configuration File

> curl -s https://api.wordpress.org/secret-key/1.1/salt/
>
> sudo vim /var/www/wordpress/wp-config.php
>

> define('AUTH_KEY',         '+6]rah[{N`m.+3*[B0kh:%8k7?hLMy-TR0@vo7@P0#A%qh[tGU;jb*9iaSf9lgs=');
> 
> define('SECURE_AUTH_KEY',  'e-r}g{! 7O2D`_XKznl-ed]=,o-9C--^Srj+W>PE~/--9CsuScU&e-x>6Skg|BV~');
> 
> define('LOGGED_IN_KEY',    'm 8`MThoD6mkItH)^+Q]sJY:Pucs-lQ<PcwUf%VTyA~@k/[P~gk9]v/}#g/b2p=&');
> 
> define('NONCE_KEY',        '(9jo1-9)8kBALC:0ZW8s6Lc+ErM<4twk_R+*+VU(meCOo+6Xk6&A2T_FjeKGV2N6');
> 
> define('AUTH_SALT',        '{m3x?K)*p5^]@+kd+Y|EL6@A5kOoTr4[801>^5PSXTA0EOYKK*SxIuxT]f1+^Vk0');
> 
> define('SECURE_AUTH_SALT', 'YEl@Q;<R;[Q#TR0?|!q^#(CI|<hBb}E,jENXs/Vf.^GAdAnKL$b?uvroGC+LXk%L');
> 
> define('LOGGED_IN_SALT',   'pCN{r,^B`V})62iYhDP[{mg+$/Lye3k 2}}DvYkUoVmZoj[<<$(Av&o08G0|Y6*H');
> 
> define('NONCE_SALT',       ';uuOO+5{c1!&YYQ]`-Qq$I3+m[#jF+?dE|S*_$s^CH,8`o,817E){Bo6u13r/n|w');


![image](https://user-images.githubusercontent.com/42967535/115277933-78c55f80-a162-11eb-904a-cb77f25e3e4f.png)

## Step 6: Configure nginx 

Replace the defacult config file from this repo
