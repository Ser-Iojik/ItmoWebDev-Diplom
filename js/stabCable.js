let slider = document.getElementById("myRange");
let output_one = document.getElementById("one_value");
let output_two = document.getElementById("two_value");
let output_tree = document.getElementById("tree_value");
let dev_but = document.getElementById("dev_but");
let dev_on_off = document.getElementById("dev_on_off");
let fire = document.getElementById("fire");
output_one.innerHTML = slider.value;
output_two.innerHTML = slider.value;
output_tree.innerHTML = slider.value;

slider.oninput = function() {
    output_one.innerHTML = this.value;
    output_two.innerHTML = this.value;
    output_tree.innerHTML = this.value;
    if (this.value >= 215 && this.value <= 230) {
        dev_but.style.background = '#19ff04';
        fire.style.display = 'none';
    } else if (this.value >= 120 && this.value <= 215) {
        dev_but.style.background = '#d81a0d';
        fire.style.display = 'none';
    } else if (this.value >= 230 && this.value <= 280) {
        dev_but.style.background = '#d81a0d';
        fire.style.display = 'none';
        if (this.value >= 260 && this.value <= 280) {
            fire.style.display = 'block';
        }
    }
}