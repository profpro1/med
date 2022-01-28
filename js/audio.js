
function init() {
    $.getJSON("audio.json", audioOut);
}

function audioOut(data) {
    // var audio = JSON.parse(data);
    console.log(data);
    var out = '';
    for (var key in data) {
        out += '<div class="audio">';
        out += `<div class="author_name">${data[key].author}</div>`;
        out += `<div class="audio_name">${data[key].name}</div>`;
        out += `<div class="audio_descr">${data[key].description}</div>`;
        out += `<audio controls controlsList="nodownload">
        <source src="audio/${data[key].src}" type="audio/mp3">
    </audio>`;
        out += '</div>';
    }
    $('.audio-out').html(out);
}
$(document).ready(function () {
    init();
});