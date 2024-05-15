document.addEventListener("DOMContentLoaded", function() {
    var options = {
        strings: [
            "user@jsonbin:~$ ls -la<br>" +
            "total 12<br>" +
            "drwxr-xr-x  3 user user 4096 Apr  5 12:34 .<br>" +
            "drwxr-xr-x 10 user user 4096 Apr  5 12:34 ..<br>" +
            "drwxr-xr-x  2 user user 4096 Apr  5 12:34 data<br><br>" +
            "user@jsonbin:~$ cat data/data.json<br>" +
            "{<br>&nbsp;&nbsp;\"name\": \"John\",<br>&nbsp;&nbsp;\"age\": 30,<br>&nbsp;&nbsp;\"city\": \"New York\"<br>}<br><br>" +
            "user@jsonbin:~$ exit"
        ],
        typeSpeed: 50,
        backSpeed: 25,
        startDelay: 500,
        backDelay: 1000,
        loop: true,
        showCursor: true,
        cursorChar: '|',
        contentType: 'html'
    };

    var typed = new Typed("#typed", options);

});
