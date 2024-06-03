<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/patient/patientdashboard.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <div class="container">
        <div class="asidecontent">
            <aside>
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
                <ul>
                    <li><a href="{{ route('patient.dashboard') }}">Dashboard</a></li>
                    <li><a href="#">Task Manager</a></li>
                    <li><a href="#">Behavior Tracker</a></li>
                    <li><a href="#">Sleep Tracker</a></li>
                    <li><a href="#">Productivity Planner</a></li>             
                </ul>
                          
                <div class="learnmore">
                    <p>Click Here to Learn About the Website</p>
                </div>
                <div class="logoutbutton">
                    <ul>
                        <li>
                            <li><a href="#">Logout</a></li>                
                        </li>
                    </ul>
                </div>
            </aside>
  
        </div>

        <main>
            
            <div class="dashboard">
                <h1>Dashboard</h1>
                <div class="profile">
                    <h3>Hello, {{ Auth::user()->first_name }}!</h3>
                    <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/default_profile_picture.jpg') }}" alt="Profile Picture">
                    <div class="dropdown">
                        <button class="dropbtn">Profile Options</button>
                        <div class="dropdown-content">
                            <a href="#">Edit Profile</a>
                            <a href="#">Change Password</a>
                            <a href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="greetings">
                <h2>Welcome Everyone! Below you'll see your analytics for tasks, behavior, sleep and productivity planner. To view the full details, simply navigate to the specified features on the left.</h2>
            </div>

            <div class="analytics-grid">
                <div class="taskmanager">
                    <canvas id="taskChart" width="400" height="400"></canvas>
                </div>
                <div class="behavior">
                    <canvas id="behaviorChart" width="400" height="400"></canvas>
                </div>
                <div class="sleep">
                    <canvas id="sleepChart" width="400" height="400"></canvas>
                </div>
                <div class="productivity">
                    <canvas id="productivityChart" width="400" height="400"></canvas>
                </div>
            </div>
            
        </main>
    </div>
    <script>
        
        var ctxTask = document.getElementById('taskChart').getContext('2d');
        var taskChart = new Chart(ctxTask, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'Incomplete'],
                datasets: [{
                    label: 'Task Status',
                    data: [75, 25],
                    backgroundColor: ['#36a2eb', '#ff6384']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom'
                },
                title: {
                    display: true,
                    text: 'Task Status'
                }
            }
        });

        var ctxBehavior = document.getElementById('behaviorChart').getContext('2d');
        var behaviorChart = new Chart(ctxBehavior, {
            type: 'doughnut',
            data: {
                labels: ['Good', 'Bad'],
                datasets: [{
                    label: 'Behavior Status',
                    data: [80, 20],
                    backgroundColor: ['#4caf50', '#f44336']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom'
                },
                title: {
                    display: true,
                    text: 'Behavior Status'
                }
            }
        });

        var ctxSleep = document.getElementById('sleepChart').getContext('2d');
        var sleepChart = new Chart(ctxSleep, {
            type: 'doughnut',
            data: {
                labels: ['Sufficient', 'Insufficient'],
                datasets: [{
                    label: 'Sleep Status',
                    data: [60, 40],
                    backgroundColor: ['#ff9800', '#9e9e9e']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom'
                },
                title: {
                    display: true,
                    text: 'Sleep Status'
                }
            }
        });

        var ctxProductivity = document.getElementById('productivityChart').getContext('2d');
        var productivityChart = new Chart(ctxProductivity, {
            type: 'doughnut',
            data: {
                labels: ['High', 'Low'],
                datasets: [{
                    label: 'Productivity Status',
                    data: [70, 30],
                    backgroundColor: ['#8e44ad', '#c0392b']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom'
                },
                title: {
                    display: true,
                    text: 'Productivity Status'
                }
            }
        });
    </script>
</body>
</html>
