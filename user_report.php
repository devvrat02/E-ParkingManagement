<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Parking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #76b852;
        }
        /* Style the header */
        
        header {
            background-color: #5AFF00;
            padding: 10px;
            font-size: 25px;
            color: solid black;
        }
        /* Create two columns/boxes that floats next to each other */
        
        nav {
            float: left;
            width: 30%;
            height: 300px;
            /* only for demonstration, should be removed */
            background: black;
            padding: 20px;
        }
        /* Style the list inside the menu */
        
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        
        article {
            float: left;
            padding: 20px;
            width: 70%;
            background-color: #f4c430;
            height: 300px;
            /* only for demonstration, should be removed */
        }
        /* Clear floats after the columns */
        
        section:after {
            display: table;
            clear: both;
        }
        /* Style the footer */
        
        footer {
            background-color: #5AFF00;
            padding: 10px;
            text-align: center;
            color: solid black;
        }
        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        
        @media (max-width: 600px) {
            nav,
            article {
                width: 100%;
                height: auto;
            }
        }
    </style>

</head>

<body>
    <header>
        <h2>Book Your Parking</h2>
    </header>

    <section>
        <nav>
            <ul>
                <li><a href="#">USER dASHBOARD</a></li>
                <li><a href="#">BOOK PARKING</a></li>
                <li><a href="#">LOCATION/PATH</a></li>
                <li><a href="#">REPORTS</a></li>
            </ul>
            </div>
        </nav>

        <article id='box'>
            <h1>Hurry up for booking weather u get a parking or not</h1>
        </article>
    </section>

    <footer>
        <p>E-Parking Project</p>
    </footer>

</body>

</html>