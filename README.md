# docker-compose file for Linux-Apache-MySQL-PHP stack

## 🚀 Quickstart

_Make sure you have Docker and Git installed before proceeding_

````
# Clone this repository
git clone https://github.com/SavvasStephanides/lamp-in-docker.git

# Go to directory
cd lamp-in-docker

# Run docker-compose
docker-compose up
````

To visit your site, go to http://localhost from a browser. You should see a site starting with "Below are messages from MySQL:"

To access the Adminer database console, go to http://localhost:8081

## Configuration

### Initialising your database with a `.sql` file

To initialise your database, simply put your .sql file(s) to the `database/initialisation` folder. You can add as many files as you like and they will be executed during the `docker-compose up` process.

### Your site's content

Add all your content of your website to the `webapp/content` folder.

### Change ports

By default, the webapp will be hosted on the `:80` port on your host machine and the Adminer console on `:8081`. To change this, update the `ports` on the `docker-compose.yml` file. To change the port of your webapp, change `80:80` to `<your port>:80`.

### Database `root` password

To change the root password of your database, change text after `MYSQL_ROOT_PASSWORD:` in `docker-compose.yml` file to whichever password you choose.
