<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Team AJAX - Local Bootstrap</title>
<!-- Bootstrap lokal -->
<link rel="stylesheet" href="../Plugins/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container py-5">
<h3 class="text-center mb-4">Our <span class="text-primary">Team</span></h3>

<!-- Tab Navigation -->
<ul class="nav nav-tabs justify-content-center" id="teamTabs">
    <li class="nav-item">
    <a class="nav-link active" href="#" data-role="doctor">Doctor</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#" data-role="event">Event Planning</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#" data-role="lab">Lab</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#" data-role="marketing">Marketing</a>
    </li>
</ul>

<!-- Content -->
<div class="row mt-4" id="team-content">
    <!-- Team members will load here -->
</div>
</div>

<!-- Bootstrap JS lokal -->
<script src="../Plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll('#teamTabs .nav-link');
    const content = document.getElementById('team-content');

    function loadTeam(role) {
    fetch('team-data.json')
        .then(response => response.json())
        .then(data => {
        content.innerHTML = "";
        const members = data[role] || [];
        members.forEach(member => {
            const col = document.createElement('div');
            col.className = 'col-md-4 mb-4';
            col.innerHTML = `
            <div class="card text-center">
                <img src="${member.image}" class="card-img-top" alt="${member.name}">
                <div class="card-body">
                <h5 class="card-title">${member.name}</h5>
                <p class="card-text">${member.position}</p>
                </div>
            </div>`;
            content.appendChild(col);
        });
        });
    }

    tabs.forEach(tab => {
    tab.addEventListener('click', function (e) {
        e.preventDefault();
        tabs.forEach(t =>
