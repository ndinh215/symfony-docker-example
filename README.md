# Symfony Dev Environment

This is a Symfony Development Environment that is very useful if you often have to play with Symfony.

The Idea is, that you can get a fresh Symfony installation with all the stuff you could need within seconds, using one command.

The Setup comes with a lot of extras like mysql, postgresql, zookeeper, redis, nginx, fpm, zeromq, kafka, elasticsearch, mongodb, xdebug.
Most time you don't need all these extras, i suggest to ignore them.
if you need your environment for a longer time, you can easly drop these dependencies.


## Getting Started
This Dev Environment is using Docker and Fig

    sudo apt-get install -y git docker python-pip && sudo pip install fig

To install a new Symfony project i created a small bash script,
this will clone this repository and boot up fig.

    curl -L https://raw.githubusercontent.com/timglabisch/symfony-docker-example/master/symfony.sh > ~/symfony.sh && chmod +x ~/symfony.sh && ~/symfony.sh some_directory


## Notices

### Graylog
Graylog will not persist any kind of configuration, i plan to change this later on.