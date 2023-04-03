hasliked = false
clickCount = 0

function like() {
    document.getElementById("notliked").setAttribute("src", "like2.png");
    hasliked = true
    clickCount = clickCount + 1

    if(clickCount % 2 == 0) {
        document.getElementById("notliked").setAttribute("src", "like1.png");
    }
}
