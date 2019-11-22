//Get theme setting from local storage
var darkMode = JSON.parse(localStorage.getItem('darkMode')) || {},
    $slider = $("#slider-theme-container :checkbox");

//Save theme setting to local storage
$slider.on("change", function(){
    darkMode[this.id] = this.checked;
    localStorage.setItem("darkMode", JSON.stringify(darkMode));
});

//Toggle theme
function myFunction() {
    if ($('#slider-theme').is(":checked")) {
        //Browser meta theme color
        document.getElementById("theme-color").setAttribute("content", "#06F");

        //Body theme
        $('body').addClass('dark');
    } else {
        //Browser meta theme color
        document.getElementById("theme-color").setAttribute("content", "#1450BD");

        //Body theme
        $('body').removeClass('dark');
    }
}

//Set theme on page load
$.each(darkMode, function(key, value) {
    $("#" + key).prop('checked', value);
    myFunction();
});

//Set theme on slider toggle
$('#slider-theme').change(function() {
    myFunction();
});

//Skip smooth transitions during page load
window.onload = function() {
    $('body').addClass('theme-loaded');
}