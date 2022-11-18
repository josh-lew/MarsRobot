# MarsRobot

### Description 
A robot designed to move on Mars. The robot moves within a specified grid (the first input - i.e '5x5' or '35x15' etc. taken as a string) following a series of instructions (second input).

The instructions input takes a string containing multiple commands:
```
L: Turn the robot left
R: Turn the robot right
F: Move forward on it's facing direction
```

```
Sample command string: FFRFFFLFRF
```

The robot always starts at location 1, 1 facing North. Any instructions that would move the robot off the grid are ignored.

The robot's final location is then output. For example:

```
4,5,East
```
### Comments
I elected to approach this task using functional programming over OOP as it seemed appropriate and lighter. If I was to refactor to OOP I would utilise classes for both the robot and the grid.

I aimed to adhear to the solid principles where possible, notably the Single Responsibility Principle in relation to determining the individual co-ordinates and direction faced by the robot from the supplied instructions string. I feel this method was less DRY but aligned better with SOLID. 

All functions have successfully been unit tested.

##Getting Started 

### Dependencies 

``` 
- PHP version 7.4.32 
- PHPUnit version 9.5.26
```

### Installing
Clone this repo:
```
git@github.com:josh-lew/MarsRobot.git
```
Navigate into the newly created repo:
```
cd MarsRobot
```

### Author
- Josh Lewis - [@josh-lew](https://github.com/josh-lew)
