### Simple Test
This test written in an hour to show my skills on PHP (I'm not sure it does, but, this is the only thing I can offer)

It's just print some two shapes, star and tree, on the console or web. Follow the below steps to see the not-much-interesting output.


## installation

Clone the repository:

`$ git clone https://github.com/smoqadam/test && cd test`


#### Install the dependencies

`$ composer install`


## Running

The `console.php` is responsible for console application and the `index.php` is the front-controller for the web application.

#### Console

Open the terminal and run the following command:

`$ php console.php list`

The output would be like this:

```
echo 1.0.0

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  echo
  help  Displays help for a command
  list  Lists commands
```

#### Commands

`$ php console.php echo [shape] [size]`

Shape: `star | tree`

size: `large | medium | small`

example:

`$ php console.php echo tree large`

And the output should be something like this:
```
         +
         x
        xxx
       xxxxx
      xxxxxxx
     xxxxxxxxx
    xxxxxxxxxxx
   xxxxxxxxxxxxx
  xxxxxxxxxxxxxxx
 xxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxx
```


## Web

Start a web-server by running the following command:

`$ php -S localhost:8888`

then open http://localhost:8888 on your browser.

