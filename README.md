[heroku](https://exampleappdocker20200530.herokuapp.com/)

E-Mail Address: sample@sample.com

Password: samplepassword




#create-project

```
docker-laravel$ mkdir project
docker-laravel$ docker-compose up --build
docker-laravel$ docker exec -it php bash
(docker) $ composer create-project laravel/laravel ./
```

#set up vue.js
```
(docker) $ composer require laravel/ui
(docker) $ php artisan ui vue
(docker) $ npm install
(docker) $ php artisan ui vue --auth
(docker) $ npm install
```

#change in project/.env

```
DB_CONNECTION=mysql
DB_HOST=db-host
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=docker
DB_PASSWORD=docker

```
#migrate
```
(docker) $ php artisan migrate
```

#instance vue component
```
npm run dev
```

#heroku deploy
```
(docker) $ sudo apt install gnupg gnupg2  gnupg1
(docker) $ curl https://cli-assets.heroku.com/install-ubuntu.sh | sh
(docker) $ git init
(docker) $ heroku login --interactive
(docker) $ heroku create exampleapp$(whoami)$(date "+%Y%m%d")
(docker) $ git add .
(docker) $ git commit -m "initial commit"
(docker) $ git push heroku master
```

#heroku db set up 1
```
(docker) $ heroku addons:add cleardb
```

#heroku db set up 2
app/Providers/Providers/AppServiceProvider.php
```
    public function boot()
    {
    
        if (\App::environment('production')) {
            \URL::forceScheme('https');
        }
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }
```

#heroku db set up 3
```
(docker) $ heroku config | grep CLEARDB_DATABASE_URL

mysql://[uset_name]:[password]@[host_name]/[database_name]?reconnect=true

(docker) $ heroku config:set DB_USERNAME=user_name
(docker) $ heroku config:set DB_PASSWORD=password
(docker) $ heroku config:set DB_HOST=host_name
(docker) $ heroku config:set DB_DATABASE=database_name

(docker) $ heroku config:set APP_KEY=$(php artisan key:generate --show)
(docker) $ heroku config:set APP_ENV=heroku
(docker) $ heroku config:set LANG=ja_JP.UTF-8
(docker) $ heroku config:set TZ=Asia/Tokyo
(docker) $ heroku run php artisan migrate
```

#heroku open
```
(docker) $ heroku open
```
