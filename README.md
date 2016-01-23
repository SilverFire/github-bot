# github-bot

This is a bot that helps with automated comments on github issues.

## Features

- Reply to issues when a label is added. E.g. add a comment to tell user to use forum instead when an issues does not contain a bug report or feature request.
- WIP: move issues to other repositories, if the issue is specific to an extension.

## Installation

- deploy this repo on a webserver.
- run `composer install`
- create a `config.local.php` and override things from `config.php` there.
- run `./yii github/register` to install webhooks in the repos

## Uninstall

- run `./yii github/un-register` to remove webhooks from the repos

