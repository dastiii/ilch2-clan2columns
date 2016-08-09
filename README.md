# clan2columns

This is an ilch 2.0 layout powered by bootstrap.


### Usage

==Automatic installation through admin control panel coming soon==

Just copy all the files from *dist/*, create a folder called clan2columns in your layouts folder and paste the contents from *dist/* in. That's how it should look:

    - application
        - layouts
            - clan2columns
                - config
                - css
                - fonts
                - ...
                - index.php

### Customization

In order to customize the look of the layout, your installation should meet the following **requirements**:

#### nodejs and npm
- Download [NodeJS](https://nodejs.org/en/) 

If you already have nodejs installed, install the dependencies.

    npm install


#### sass
Since sass is distributed as a ruby gem, you need to install ruby first.

After ruby is installed you can install sass with the following command

    gem install sass

#### grunt

Grunt should've been installed by issuing npm install as it is defined as a dependency, therefore you should be able to compile the layout on your own with

    grunt

#### Make changes

- You can edit the html in *dist/index.php*
- All your css changes should go in *src/scss/app.scss*
- To add javascript, just put your javascript files in *src/js *
- Add images by putting them straight to *dist/images* or use grunt to copy them over

After you have made any changes to the javascript or scss portions, you have to run grunt again:

    // run all tasks    
    grunt

    // only preprocess scss
    grunt scss

    // let grunt watch for changed files
    grunt watch
