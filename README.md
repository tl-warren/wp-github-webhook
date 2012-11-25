wp-github-webhook
=================

Automatically sync repository data from GitHub as a plugin or theme via SSH or FTP protocols.

It is a port of https://github.com/Coppertino/github-webhook.

Note that you need admin access to the repo for defining a WebHook URL which will trigger the whole process.

Vision
======

Ideally this will allow you to create a Wordpress plugin or theme as a repo on GitHub which will then automatically be synced with a clone on a live web server when a commit is pushed.

An admin panel would allow you to define which branches of which repos to sync.

Ideas
=====

Using a quick check for the presence of style.css, a repo could be labeled as a theme or plugin and thus be placed in the right directory.

If the need for access to the admin panel of the repo could be circumvented this would allow to install any repo as a Wordpress plugin or theme only by copy-pasting its GitHub URI.