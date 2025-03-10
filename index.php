<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'roombookingdb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch room names from the database for the search bar dropdown
$query = "SELECT room_id, room_name FROM rooms";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking System - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
        }
        .carousel-item {
            height: 500px;
            background-size: cover;
            background-position: center;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 1rem;
            border-radius: 8px;
        }
        .welcome-section {
            text-align: center;
            padding: 2rem 1rem;
            background-color: #e9ecef;
            margin-bottom: 1rem;
        }
        .welcome-section h1 {
            font-size: 2.5rem;
            font-weight: 600;
        }
        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
            margin-bottom: 1.5rem;
        }
        .search-box {
            background-color: #404034;
            padding: 20px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .search-box input, .search-box select {
            margin-right: 10px;
            padding: 10px;
            border: none;
            border-radius: 4px;
        }
        .search-box select {
            width: 200px;
        }
        .search-box input[type="date"] {
            width: 170px;
        }
        .search-box button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .search-box button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Room Booking System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Check Availability</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="calendar_ben.html">Bilik Perbentangan</a></li>
                        <li><a class="dropdown-item" href="calendar_kom.html">Bilik Komputer</a></li>
                        <li><a class="dropdown-item" href="calendar_sem.html">Bilik Seminar</a></li>
                        <li><a class="dropdown-item" href="calendar_ru1.html">Ruang Pameran 1</a></li>
                        <li><a class="dropdown-item" href="calendar_ru2.html">Ruang Pameran 2</a></li>
                        <li><a class="dropdown-item" href="calendar_ru3.html">Ruang Pameran 3</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="main.php">Book a Room</a></li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Login</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login.html">User</a></li>
                        <li><a class="dropdown-item" href="admin_login.html">Admin</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Welcome Section -->
<div class="welcome-section">
    <h1>Welcome to the Room Booking System</h1>
    <p>Book rooms with ease and manage your reservations effortlessly.</p>
</div>


    <!-- Carousel Section -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('/RoomReservationApp/images/cmeeting.jpg');">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Modern Meeting Rooms</h5>
                    <p>Fully equipped meeting rooms for productive sessions.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('/RoomReservationApp/images/cseminar.jpg');">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Conference Halls</h5>
                    <p>Spacious conference halls for events and gatherings.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('/RoomReservationApp/images/cexhibit.jpg');">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Exhibit Area</h5>
                    <p>Private spaces designed for presentations and showcases.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('/RoomReservationApp/images/ckomputer.jpg');">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Computer Room</h5>
                    <p>Fully equipped computer room for training and learning.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
        <figure class="text-center">
            <blockquote class="blockquote">
                <h1 class="display-6">“Seek knowledge from the cradle to the grave.”</h1>
            </blockquote>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">Prophet Muhammad (peace be upon him)</cite>
            </figcaption>
        </figure>
    </br>

    <!-- Search Bar -->
    <figure class="text-center">
        <blockquote class="blockquote">
            <p><strong>Check Room Availability Here</strong></p>
        </blockquote>
    </figure>
    <div class="search-container">
        <form class="search-box" method="GET" action="calendar_test.html">
            <!-- Room Dropdown -->
            <select name="room_id" required>
                <option value="">Select Room</option>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <option value="<?php echo $row['room_id']; ?>"><?php echo $row['room_name']; ?></option>
                <?php } ?>
            </select>
            <!-- Submit Button -->
            <button type="submit">Search</button>
        </form>
    </div>

     <!-- Room Card Section -->
     <div class="container my-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="/RoomReservationApp/images/meeting.jpg" class="card-img-top" alt="Bilik Perbentangan">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Bilik Perbentangan</h5>
                            <p class="card-text">Spacious meeting rooms for productive sessions.</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="main.php?room_id=1" class="btn btn-primary">Book Now</a>
                                <a href="#" class="btn btn-secondary">Check Availability</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional cards follow the same structure -->
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="/RoomReservationApp/images/komputer.jpg" class="card-img-top" alt="Bilik Seminar">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Bilik Komputer</h5>
                            <p class="card-text">Fully equipped computer room for training and learning.</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="main.php?room_id=2" class="btn btn-primary">Book Now</a>
                                <a href="#" class="btn btn-secondary">Check Availability</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="/RoomReservationApp/images/pameran.jpg" class="card-img-top" alt="Bilik Pameran">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Ruang Pameran</h5>
                            <p class="card-text">Private spaces designed for presentations and showcases.</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="main.php?room_id=3" class="btn btn-primary">Book Now</a>
                                <a href="#" class="btn btn-secondary">Check Availability</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="/RoomReservationApp/images/cmeeting.jpg" class="card-img-top" alt="Bilik Perbentangan">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Bilik Komputer</h5>
                            <p class="card-text">Comfortable private spaces for focused work.</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="main.php?room_id=1" class="btn btn-primary">Book Now</a>
                                <a href="#" class="btn btn-secondary">Check Availability</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional cards follow the same structure -->
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="/RoomReservationApp/images/seminar.jpg" class="card-img-top" alt="Bilik Seminar">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Bilik Seminar</h5>
                            <p class="card-text">Spacious conference hall for events and gatherings.</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="main.php?room_id=2" class="btn btn-primary">Book Now</a>
                                <a href="#" class="btn btn-secondary">Check Availability</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="/RoomReservationApp/images/cexhibit.jpg" class="card-img-top" alt="Bilik Pameran">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Bilik Pameran</h5>
                            <p class="card-text">Private spaces designed for presentations and showcases.</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="main.php?room_id=3" class="btn btn-primary">Book Now</a>
                                <a href="#" class="btn btn-secondary">Check Availability</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>

<?php $conn->close(); ?>