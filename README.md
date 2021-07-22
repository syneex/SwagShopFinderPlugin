# Shopware 6 - Basic Developer Course - SwagShopFinder Plugin
This repository contains the whole plugin code for the Shopware 6 Plugin "SwagShopFinder" that is shown and developed in the Shopware Academy Course ['Shopware 6 - Developer Training Basic (EN)'](https://academy.shopware.com/courses/shopware-6-developer-training-english).

## Setup
Since I'm on Windows 10 setting up the Development Environment was kind of a tricky situation as I didn't want to create everything from scratch and install all dependencies but do it with a containerized way. Therefore I tried Docker, which didn't work and then switched to Dockware. After some research I connected my IDE (PhpStorm) via SFTP connection to the docker container containing the Shopware dev environment and deployed each changes.

## Difficulties
As I already explained, this course was not as easy for me as I thought it was because I needed to search a lot for myself. But if any other guys who are doing this course may have the same problem, I hope this repo helps. So one difficulty was the Footer Subscriber. First of all, the path in the course is outdated. Instead of SwagShopFinder/src/Resources/views/layout/footer/footer.html.twig it is SwagShopFinder/src/Resources/views/storefront/layout/footer/footer.html.twig. Then the guy in the video also doesn't mention that you have to clear the cache (call './bin/console cache:clear') when you're not seeing the changes (I assume that is because he has a local environment set up and not a containerized one). Also currently I'm trying to figure out why my API Router doesn't work. Herefore I discovered new commands in the console: './bin/console debug:route' and './bin/console router:match' where you can see either all routes in the shopware api or wether one route exists for a specified method.

## Info about me
I'm not a Shopware plugin developer but someone who is interested in Shopware itself hence I made this repository (as there was no git repo for reference) to provide other course attendees my source code and also to document my own progress on this plugin.
