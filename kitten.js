function changeKitten() {
    var image = document.getElementById('kitty_picture');
    if (image.src.match("kitten")) {
        image.src = "angry.jpg";
    } else {
        image.src = "kitten.jpg";
    }
}

function switch_sides() {

    var smaller = document.getElementById('smaller_block');
    smaller.className = 'larger';
}

function revert_sides() {
    var smaller = document.getElementById('smaller_block');
    smaller.className = 'left';
}

function add_foot_info() {
    var footer = document.getElementById('footer');
    var msgstr = 'Copyright Mark 2014';
    footer.innerHTML = msgstr;
}

function checkContent() {
    var fieldValue = document.getElementById("username").value;
    if (fieldValue === null || fieldValue === "") {
        event.preventDefault();
        alert('you must enter the something');
    }

}

