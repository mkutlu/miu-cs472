document.addEventListener('DOMContentLoaded', function(event) {
    let init = function () {
        const puzzleArea = document.getElementById('puzzlearea');
        const divs = puzzleArea.getElementsByTagName("div");

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
});
