$(function() {
    let init = function() {
        const puzzleArea = $('#puzzlearea');
        const divs = $('#puzzlearea').find('div');

        // initialize each piece
        for (let i = 0; i < divs.length; i++) {
            const div = divs[i];

            // calculate x and y for this piece
            const x = ((i % 4) * 100);
            const y = (Math.floor(i / 4) * 100);

            // set basic style and background
            div.className = "puzzlepiece";
            div.style.left = x + 'px';
            div.style.top = y + 'px';
            div.style.backgroundImage = 'url("background.jpeg")';
            div.style.backgroundPosition = -x + 'px ' + (-y) + 'px';

            // store x and y for later
            div.x = x;
            div.y = y;
        }
    };
    init();

    $('body').on('click', '.puzzlepiece', function(event) {
        checkAvailableMove(event.target);
    });

    function checkAvailableMove(target) {
        let left = $(target).position().left;
        let top = $(target).position().top;

        //Check top
        let checkLeft = left;
        let checkTop = top - 100;
        setProperPiece(checkLeft, checkTop, target);

        //Check right side
        checkLeft = left + 100;
        checkTop = top;
        setProperPiece(checkLeft, checkTop, target);

        //Check bottom side
        checkLeft = left;
        checkTop = top + 100;
        setProperPiece(checkLeft, checkTop, target);

        //Check left side
        checkLeft = left - 100;
        checkTop = top;
        setProperPiece(checkLeft, checkTop, target);
    }

    function setProperPiece(checkLeft, checkTop, target) {
        let temp = $(".puzzlepiece").filter(function() {
            var self = $(this);
            var result = self.css('left') === checkLeft + 'px' &&
                self.css('top') === checkTop + 'px';
            return result;
        });
        checkElement = temp.length > 0 ? temp : undefined;
        if (checkTop >= 0 && checkLeft <= 300 && checkLeft >= 0 && checkTop <= 300 && checkElement == undefined) {
            $(target).css("left", checkLeft + 'px');
            $(target).css("top", checkTop + 'px');
        }
    }

    $('#shufflebutton').on('click', function(event) {
        shuffle();
    });

    function shuffle() {
        for (var j = 0; j < getRandomArbitrary(0, 50); j++) {
            $(".puzzlepiece").trigger("click");
        }
    }

    function getRandomArbitrary(min, max) {
        return Math.random() * (max - min) + min;
    }
});