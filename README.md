# How to run

## 1. Make log files

Log files need to be made in advance to run this applications.

```
.
├── 1.initial
│   ├── main.php
│   └── test.log
├── 2.anonymous-function
│   ├── lib
│   │   └── Tail.php
│   ├── main.php
│   └── test.log
├── 3.interface
│   ├── lib
│   │   ├── RecordHandler.php
│   │   ├── SlackRecordHandler.php
│   │   └── Tail.php
│   ├── main.php
│   └── test.log
├── 4.inheritance
│   ├── lib
│   │   ├── SlackTail.php
│   │   └── Tail.php
│   ├── main.php
│   └── test.log
└── README.md

```

## 2. change directory

```
$ cd 1.initial
```

or

```
$ cd 2.anonymous-function 
```

or 

```
$ cd 3.interface
```

or

```
$ cd 4.inheritance is ok.
```

## 3. run application.

```
$ php main.php
```

## 4. add a text to log file.

```
$ echo Hello, World >> test.log
```
