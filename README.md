yii-base
========

A responsive Yii theme utilising all the goodness of H5BP and Twitter Bootstrap.

After trying various Yii Bootstrap extensions, I decided to create a simple theme that uses Yii's standard components and widgets.

The theme takes advantage of the fantastic HTML5 Boilerplate (H5BP) with a modified .htaccess to enable pretty urls in Yii.

H5BP's best practices and .htaccess can dramatically increase the performance of your website. Try it in YSlow!


Usage:

Create a new webapp in Yii.

Copy the 'base' folder to your themes folder.

Make some minor changes to the main config file or replace it with the included example.

Copy the .htaccess to your root folder and set 'RewriteBase /base/' to your application's root folder.


Notes:

By default I make the assumption that you are using Apache and the .htaccess enables URL Rewriting.
The theme can be used without pretty urls by deleting/renaming the .htaccess file and modifying the urlManager properties in the main config file.

Currently there is no Gii generator for the view files. I may look into adding this when I have more time, or you're welcome to get involved yourself.
Instead, you should create the views as usual and copy them over to the theme folder for modification. This has the benefit of having a fallback to Yii's standard theme.

You will see how I have modified the standard contact and login pages which should help you on your way. Compare them side by side and see how I have added the necessary css classes to the standard widgets.
I have also removed the divs that wrap the input fields since they're not needed and the css class 'row' conflicts with Bootstrap's own.


Tips:

Don't modify the Bootstrap files. Use the included styles.css and script.js so that you can easily update Bootstrap when necessary.
However, I have combined bootstrap.min.css and bootstrap-responsive.css as bootstrap-and-responsive.min.css. Why make 2 trips to the server?
You will need to be aware of this if you update the Bootstrap files.


License:

Free to use under the terms of any respective Yii, H5BP or Twitter Bootstrap Licences.

The logo license details can be found here: http://www.yiiframework.com/logo/