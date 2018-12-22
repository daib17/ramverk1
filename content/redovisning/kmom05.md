---
---

Kmom05
-------------------------
**Berätta om arbetet med din CI-kedja, vilka verktyg valde du och hur gick det att integrera med dem?**

Following the instructions for this week's exercise, I integrated all the tools described in the article (Travis, CircleCI, Scrutinizer, SensioLabs and CodeClimate) using a test repository in me/comment.
In the module used in my redovisa page, I chose to integrate Travis, CircleCI and Scrutinizer.

All these tools are very intuitive and easy to implemented with the exception of SensioLabs that makes it a bit harder, having to create an account and also hiding certain features behind payment plans.  


**Vilken extern tjänst uppskattade du mest, eller har du förslag på ytterligare externa tjänster att använda?**

I think I like Scrutinizer best. I find the generated report comprehensive and easy to navigate. It gives a clear description of the issues sorted by category and severity. It lists classes by rating, size, complexity and test coverage. It also gives a numerical score for the code quality which, in my opinion, provides a strong inceptive to improve your code.      


**Vilken kodkvalitet säger verktygen i din CI-kedja att du har, håller du med?**

I've got a score of 9.54 in code quality. I guess that anything lower than 100% in a small module like this it is not very good, but scrutinizer finds issues in the files in config/di that I don't really know how to resolve.


**Gjorde du några förbättringar på din modul i detta kmom, isåfall vad?**

Last week I refactored my code and test classes to achieve 100% coverage. That helped me get decent results in the automated tests this week, but my code still needs extra refactoring to fix some issues found in the tests.  


**Vilket ramverk undersökte du och hur hanterar det ramverket sin CI-kedja, vilka verktyg används?**

Laravel supports PHPUnit out of the box and uses Laravel Dusk for browser automation and testing API. According to the Laravel's documentation in the continuous integration section, Dusk tests can be run using CircleCI, Codeship, Heroku CI and Travis CI.


**Fann du någon nivå på kodtäckning och kodkvalitet för ramverket och dess moduler?**

Laravel's repository in GitHub includes badges for Travis validation and Packagist with information about number of downloads, license and version. I didn't find anything else in relation to the tools we have seen this week.  


**Vilken är din TIL för detta kmom?**

This week I learned that automated tests are actually not that hard to integrate and they really feel like a setup up in the code's quality control.
