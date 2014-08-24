# Gain12 [![Build status](https://travis-ci.org/FuturePortal/Gain12.svg?branch=develop)](https://travis-ci.org/FuturePortal/Gain12/builds)

Gain12 is a motivating website to help you track your life changing challenges. Excited? So are we! More information
can be found at http://gain12.com.

### Setup

1. Make sure you have downloaded/installed [VirtualBox](https://www.virtualbox.org/wiki/Downloads),
[Vagrant](http://www.vagrantup.com/downloads) (>1.6.2) and [git](http://git-scm.com/downloads).
1. Create a folder on you PC where you want to install the Gain12 project files.
1. Open your command line interface (CLI) and navigate to your new folder.
1. Fork the project and `git clone git@github.com:`**your_username**`/Gain12.git Gain12Web` to your computer.
1. Navigate your CLI to the Gain12Web folder using `cd ./Gain12Web`.
1. Add this repository to your remotes running `git remote add upstream git@github.com:FuturePortal/Gain12.git` (this
is where you will be pulling updates from).
1. Run `vagrant up` to install and set up the vagrant box and install Gain12.
1. While vagrant up is running, add `192.168.56.235 dev.gain12.com` to your
[hosts file](http://en.wikipedia.org/wiki/Hosts_(file)). (linux/iOS: `sudo -- sh -c 'echo "\n# Gain12 website\n192.168.56.235 dev.gain12.com" >> /etc/hosts'`)
1. Once vagrant up is finished, you're ready to develop!

### Pulling updates

After you pull new commits into your project using `git pull upstream develop`, you want to run `vagrant reload`.
This will make sure the database, composer and other modules get updated.

# Copyright

This project does not hold an open source licence, therefor, the standard copyright laws apply. However, please feel free to fork the project and submit changes in a pull request to this project.

# Development

### Content styling using SASS/SCSS

Gain12 uses SASS. This is managed using Grunt. To (re)build the css file, run: `dev/build-css-js.sh`. Or you can let
Grunt watch for changes in your scss files running `dev/watch-css-js-changes.sh`.

### Code standards

All Pull Requests should follow the
[PSR-2 standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).
@T-888 will automatically check all commits and post feedback on PR's.

### Branching

We try to follow the [git branching model](http://nvie.com/posts/a-successful-git-branching-model/). If you, for
example, decided to make the homepage responsive, your branch should be called `feature/responsive-homepage`.

### Database

The database is constructed using the sql files in `gain12/database/`. The sql file format should be
`YYMMDDHHMM-what-changed.sql`. This makes sure the database is patched in the right order. To update the database with your new sql file, run `dev/database-update.sh`. Note that this file will only run once. If you want to re-run the file, remove it from the `dbupdate` database table.

### Composer

Added a new library to composer? Make sure you run `dev/composer-update.sh`. This will update the projects
dependencies in the `composer.lock` file.

# Pull requests

### Creating a PR

1. Push the changes you made to your fork of Gain12: `git push origin `**your_branch_name**
1. Open the [main project page](http://github.com/FuturePortal/Gain12/) and hit the
`Compare & pull request` button. This will show you all the changes you made in that specific branch and it allows
you to create a pull request.
1. Once created @T-888 will check your code standards and check the test results, plus a project owner will review your changes as soon as possible.
