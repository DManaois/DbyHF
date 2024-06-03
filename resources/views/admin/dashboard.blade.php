<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/admindashboard.css') }}">
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
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
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
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
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
                <h2>Welcome Admin! Below you'll see the lists of patients and Contents.</h2>
            </div>

            <div class="maincontents">
            <div class="card">
                <h3>Lists of Patients</h3>
                <table>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($patients))
                        @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->first_name }}</td>
                            <td>{{ $patient->last_name }}</td>
                            <td>{{ $patient->address }}</td>
                            <td>{{ $patient->contact_number }}</td>
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>

                <div class="card">
                    <h3>What is ADHD?</h3>
                    <p>Content about ADHD</p>
                </div>
                <div class="card">
                    <h3>The ADHD Brain</h3>
                    <p>Content about the ADHD brain</p>
                </div>
                <div class="card">
                    <h3>ADHD Symptoms</h3>
                    <p>Content about ADHD symptoms</p>
                </div>
                <div class="card">
                    <h3>ADHD in Children</h3>
                    <p>Content about ADHD in children</p>
                </div>
                <div class="card">
                    <h3>ADHD in Adults</h3>
                    <p>Content about ADHD in adults</p>
                </div>
            </div>
    
        </main>
    </div>

</body>
</html>
