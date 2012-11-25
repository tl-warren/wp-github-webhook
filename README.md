wp-github-webhook
=================

Automatically update a live Wordpress plugin or theme via SSH or FTP when its GitHub repo is commited to.

It is a port of https://github.com/Coppertino/github-webhook.

Note that you need admin access to the repo for defining a WebHook URL which will trigger the whole process.

Vision
======

Ideally this will allow you to create a Wordpress plugin or theme as a repo on GitHub which will then automatically be synced with a clone on a live web server when a commit is pushed.

An admin panel would allow you to define which branches of which repos to sync.

Ideas
=====

Using a quick check for the presence of style.css, a repo could be labeled as a theme or plugin and thus be placed in the right directory.

Etc.
====

I just realized this boils down to installing a plugin or theme directly from GitHub.

If the need for access to the admin panel of the repo could be circumvented this would allow to install Wordpress plugins or themes by only copy-pasting its GitHub URI.