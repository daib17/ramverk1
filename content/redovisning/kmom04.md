---
---

Kmom04
-------------------------
**Hur gick arbetet med att lyfta ut koden ur redovisa-sidan och placera i en egen modul, några svårigheter, utmaningar eller annat värt att nämna?**

Following the step by step article that helped us create and publish our first module went really well. Things got a bit more complicated when I tried to create my own module from the weather forecast part of my redovisa project. The views added some extra difficulty and I also ran into problems with the testing classes. I think choosing the needed parts for the module was the hardest part of the assignment.


**Gick det bra att publicera på Packagist och ta emot uppdateringar från GitHub?**

It went fine. I didn't have any problems with Packagist. It was really easy to publish the module and, at least while working on this assignment, Packagist was able to detect updates in the GitHub repository really quickly.


**Fungerade det smidigt att åter installera modulen i din redovisa-sida med composer, kunde du följa din egen installationsmanual?**

I used the readme.md file in the remserver module as a base for my own weather forecast module. It worked really well. I had some problems when I decided to change the name of my module, but nothing I couldn't solve following the steps once again.


**Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?**

Code coverage is 100%, but I initially got some problems with the test classes throwing exceptions that took a while to figure out. These errors were mainly due to missing pieces of code that I mistakenly left out in the process of pulling the parts from the redovisa project into the module.


**Några reflektioner över skillnaden med och utan modul?**

Using modules does not affect the functionality of the application from the user's perspective, but it helps a lot when it comes to code reusability, maintenance and testing. It feels great to delegate a heavy task like dependency management to Composer. A simple edit in composer.json and <code>composer update</code> will pull the right version of every single module from Packagist.


**Vilket ramverk undersökte du och hur hanterar det ramverket paketering, moduler och versionshantering?**

Laravel uses packages to add functionality to the framework. Some packages are stand-alone, so they work with any PHP framework. These packages are requested using Composer. Other packages are intended to enhance a Laravel application and they are Laravel specific. These packages are registered using Service providers in the config/app.php file.
Laravel uses semantic versioning for the framework itself following the major.minor.patch format.


**Vilken är din TIL för detta kmom?**

This week, working with modules and Packagist, helped me get a better understanding of how composer does its thing. We have already been using Composer for a while, but even though I understood that Composer requested external packages, I had no idea how or that we could create our own modules in such a simple manner.
