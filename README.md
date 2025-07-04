# WP Sync DB

- [Introduction](#introduction)
- [Description](#description)
  - [Selective Sync](#selective-sync)
  - [Bi-directional Sync](#bi-directional-sync)
  - [Database Export & Backup](#database-export-backup)
  - [Encrypted Transfers](#encrypted-transfers)
  - [Automatic Find & Replace](#automatic-find-replace)
  - [Stress Tested on Massive Sites](#stress-tested-on-massive-sites)
  - [Detect Limitations Automatically](#detect-limitations-automatically)
  - [Sync Media Libraries Between Installations](#sync-media-libraries-between-installations)
- [Installation](#installation)
  - [Using composer](#using-composer)
  - [Using git-updater](#using-git-updater)
- [Usage](#usage)
  - [WP Cli](#wp-cli)
- [Similar Tools](#similar-tools)
- [Isn't this the same as WP Migrate DB Pro?](#isnt-this-the-same-as-wp-migrate-db-pro)
- [Is this Illegal?](#is-this-illegal)

<!--toc:end-->

> [!NOTE]
> This fork is maintained and will be updated with bug fixes and security patches.\
> But no new features are planned, please open a PR if you have a feature request.

## Introduction

WP Sync DB eliminates the manual work of migrating a WP database. Copy your db from one WP install to another with a single-click in your dashboard. Especially handy for syncing a local development database with a live site.

<p align="center"><img src="https://raw.github.com/slang800/psychic-ninja/master/wp-migrate-db.png"/></p>

## Description

WP Sync DB exports your database as a MySQL data dump (much like phpMyAdmin), does a find and replace on URLs and file paths, then allows you to save it to your computer, or send it directly to another WordPress instance. It is perfect for developers who develop locally and need to move their WordPress site to a staging or production server.

### Selective Sync

WP Sync DB lets you choose which DB tables are migrated. Have a huge analytics table you'd rather not send? Simply deselect it and it won't be synced.

### Bi-directional Sync

#### Pull: Replace a Local DB with a Remote DB

If you have a test site setup locally but you need the latest data from the production server, just install WP Sync DB on both sites and you can pull the live database down, replacing your local database in just a few clicks.

#### Push: Replace a Remote DB with a Local DB

If you're developing a new feature for a site that's already live, you likely need to tweak your settings locally before deploying. Once you've perfected your configuration on your development machine, it's easy to send the settings to your production server. Just push to the server, replacing your remote database with your local one.

### Database Export & Backup

Not only can WP Sync DB pull and push your DB: it can export your DB to an SQL file that you can save and backup wherever you want. No need to ssh into your machine or open up phpMyAdmin.

### Encrypted Transfers

All data is sent over SSL to prevent your database from being read during the transfer. WP Sync DB also uses HMAC encryption to sign and verify every request. This ensures that all requests are coming from an authorized server and haven't been tampered with en route.

### Automatic Find & Replace

When migrating a WordPress site, URLs in the content, widgets, menus, etc need to be updated to the new site's URL. Doing this manually is annoying, time consuming, and very error-prone. WP Sync DB does all of this for you.

### Media migration

WP Sync DB can also migrate media files between WordPress installations, the module is now integrated into the main plugin. It will automatically copy media files from the source to the destination during a migration, ensuring that all media is up-to-date and consistent across installations.

### Stress Tested on Massive Sites

Huge database? No prob. WP Sync DB has been tested with tables several GBs in size.

### Detect Limitations Automatically

WP Sync DB checks both the remote and local servers to determine limitations and optimize for performance. For example, we detect the MySQL `max_allowed_packet_size` and adjust how much SQL we execute at a time.

### Sync Media Libraries Between Installations

Using the optional [WP Sync DB Media Files](https://github.com/jsongerber/wp-sync-db-media-files) addon, you can have media files synced between installs too.

## Installation

### Using composer

If you manage your WordPress site using composer (e.g. with [Bedrock](https://roots.io/bedrock/)), you can install WP Sync DB using the following command:

```bash
composer require jsongerber/wp-sync-db
```

### Using git-updater

1. Install [git-updater](https://github.com/afragen/git-updater) by downloading the latest zip [here](https://github.com/afragen/git-updater/releases). We rely on this plugin for updating WP Sync DB directly from this git repo.
1. Activate git-updater, then go to Settings > Git Updater.
1. If asked, enter your license key or click "Activate Free Version".
1. Go to the "Install Plugin" tab.
1. Enter "https://github.com/jsongerber/wp-sync-db" in the "Plugin URI" field, you can leave the other fields blank.
1. Click "Install Plugin" and wait for the confirmation message.
1. Click the "Activate Plugin" link that appears after installation.

### Manual installation (not recommended)

> [!WARNING] This method is not recommended, as you will not receive automatic updates.

1. Download the zip from the [latest release](https://github.com/jsongerber/wp-sync-db/releases/latest).

> [!NOTE] You must choose the "wp-sync-db-x.x.x.zip" file, not the "source code" zip.

2. Upload the zip to your WordPress site via the Plugins > Add New > Upload Plugin menu.
3. Activate the plugin.

## Usage

Once installed, you can access WP Sync DB from the Tools > WP Sync DB menu in your WordPress admin dashboard. From there, you can create migration profiles, perform migrations, and manage your database syncs.

### WP Cli

To use WP Sync DB via WP-CLI, you must first create a migration profile in the WP Sync DB admin interface.\
Once you have a profile set up, you can get its id by going to the "Migrate" tab in the WP Sync DB admin interface. The profile number is displayed next to the profile name.

Or you can use the WP-CLI command to list all profiles:

```bash
wp wpsdb profiles
```

Once you have the profile number, you can run the migration using the following command:

```bash
wp wpsdb migrate [profile-number]
```

## Similar Tools

- [Interconnect IT's Search & Replace](https://github.com/interconnectit/Search-Replace-DB)

## Isn't this the same as WP Migrate DB Pro?

No, of course not, don't be silly. I took out the license verification code, a really shady looking PressTrends reporter, and the tab for installing the Media Files addon before I published 1.4. Release 1.3 was the same as [WP Migrate DB Pro](https://deliciousbrains.com/wp-migrate-db-pro), but I've made several improvements since then.

## Is this Illegal?

**No.** Just because this is based on the paid-for WP Migrate DB Pro, it doesn't mean I can't release it. WP Migrate DB Pro is released under GPLv2, a copyleft license that guarantees my freedom (and the freedom of all users) to copy, distribute, and/or modify this software.

I _was_ forced to rename it from "WP Migrate DB" to "WP Sync DB" after Delicious Brains decided to trademark the name "WP Migrate DB", [filed a DMCA takedown](http://wptavern.com/dmca-takedown-notice-issued-against-fork-of-wp-migrate-db-pro) against the repo, and threatened to take me to court. But they should be OK with it now.
