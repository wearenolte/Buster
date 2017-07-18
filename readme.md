# Buster

> Creates new version numbers based on the current time measured in the number of seconds since the Unix Epoch.

Everytime you execute the `NodeJS` or `PHP` update the version number, if the file `.deploy.json`
exist it will update that file if it does not exist it will create a new one, so you need to make
sure when you are running the script you have writting permissions ([unix permissions](https://en.wikipedia.org/wiki/File_system_permissions#Permissions)).

## PHP Version

```bash
php ./version.php
```

## Node Version

```bash
node ./version.js
```

Any of the previous examples it will create a new JSON file located on `./deploy.json` if something
fails it will return a code of `1` and it will create an empty JSON object, and if everything was
correct it will return `0` and is going to create a JSON object with a `version` key on it.
