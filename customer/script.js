'use strict';

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

function postForm() {
    let input_name = document.getElementById("input_name").value;
    let input_number = document.getElementById("input_number").value;
    let input_url = document.getElementById("input_url").value;
    let input_topic = document.getElementById("input_topic").value;
    localStorage.name = input_name;
    document.getElementById('offer-name').innerHTML = localStorage.name;

}