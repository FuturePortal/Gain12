# Gain12

Gain12 is a motivating website to help you track your life changing challenges. Excited? So are we! More information
can be found at http://gain12.com.

### Setup

1. Make sure you have downloaded/installed [VirtualBox](https://www.virtualbox.org/wiki/Downloads) and
[Vagrant](http://www.vagrantup.com/downloads) (>1.6.2).
1. Create a folder on you PC where you want to install the project files.
1. Open your command line interface (CLI) and navigate to your new folder.
1. Fork the project and `git clone git@github.com:`**your_username**`/Gain12.git gain12-web` to your computer.
1. Navigate your CLI to the gain12-web folder using `cd ./gain12-web`.
1. Add this repository to your remotes running `git remote add upstream git@github.com:FuturePortal/Gain12.git` (this
is where you will be pulling updates from).
1. Run `vagrant up` to install and set up the vagrant box and install gain12.
1. While vagrant up is running, add `192.168.56.235 dev.gain12.com` to your
[hosts file](http://en.wikipedia.org/wiki/Hosts_(file)). (linux/iOS: `sudo -- sh -c 'echo "\n# Gain12 website\n192.168.56.235 dev.gain12.com" >> /etc/hosts'`)
1. Once vagrant up is finished, you're ready to develop!

### Pulling updates

After you pull new commits into your project using `git pull upstream develop`, you want to run `vagrant reload`.
This will make sure the database, composer and other modules get updated.

# Development

### Content styling using SASS/SCSS

Gain12 uses SASS. This is managed using Grunt. To rebuild the css file, run: `dev/build-css-js.sh`. Or you can let
Grunt watch for changes in your scss files running `dev/watch-css-js-changes.sh`.

### Code standards

All Pull Requests should follow the
[PSR-2 standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).
Travis-CI will automatically check all commits and will report to you when your build failes!

### Branching

We try to follow the [git branching model](http://nvie.com/posts/a-successful-git-branching-model/). If you, for
example, decided to make the homepage responsive, your branch should be called `feature/responsive-homepage`.

### Database

The database is constructed using the sql files in `gain12/database/`. The sql file format should be
`YYMMDDHHMM-what-changed.sql`. This makes sure the database is patched in the right order. To update the database with your new sql file, run `dev/database-update.sh`. Note that this file will only run once. If you want to re-run the file, remove it from the `dbupdate` table.

### Composer

Added a new library to composer? Make sure you run `dev/composer-update.sh`. This will update the projects
dependencies in the `composer.lock` file.

# Pull requests

### Creating a PR

1. Push the changes to your (fork) of Gain12: `git push origin `**your_branch_name**
1. Open the [main project page](http://github.com/FuturePortal/Gain12/) and hit the
`Compare & pull request` button. That will show you all the changes you made in that specific branch and it allows
you to create a pull request.
1. Once created a project owner will review your PR asap.
