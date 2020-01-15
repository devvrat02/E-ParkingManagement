<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        body {
            background-color: #76b852;
            font-family: 'Handlee', cursive;
            font-size: 13pt;
            padding: 10px;
            margin: 0;
        }
        
        h1 {
            font-size: 15pt;
            color: #891A03;
            text-align: center;
            padding: 18px 0 18px 0;
            margin: 0 0 10px 0;
        }
        
        h1 span {
            border: 4px dashed #891A03;
            padding: 10px;
        }
        
        p {
            padding: 0;
            margin: 0;
        }
        
        #header p {
            font-size: 25pt;
            color: #3b464c;
            padding-top: 5px;
            margin: 0;
            font-weight: bold;
            text-align: center;
        }
        
        hr {
            border: 0;
            height: 1px;
            background: #f36f48;
        }
        
        form {
            text-align: center;
            margin-top: 0;
        }
        
        .submit {
            background-color: #3fb6b2;
            padding: 12px 45px;
            border-radius: 5px;
            cursor: pointer;
            color: #ffffff;
            border: none;
            outline: none;
            margin: 0;
            font-weight: bold;
        }
        
        .submit:hover {
            background-color: #43a09d;
        }
        
        textarea {
            height: 100px;
        }
        
        input,
        textarea {
            margin-bottom: 10px;
            font-size: 11pt;
            padding: 15px 10px 10px;
            border: 1px solid #cecece;
            background-color: #efefef;
            color: #787575;
            border-radius: 5px;
            width: 70%;
            outline: none;
        }
        
        #contacts img {
            height: 50px;
            width: 50px;
            margin-left: 7px;
            margin-right: 7px;
        }
        
        #contacts a {
            text-decoration: none;
        }
        
        #contacts img:hover {
            opacity: 0.8;
        }
        
        #contacts {
            text-align: center;
        }
    </style>
</head>





<body>
    <!-- header start -->
    <div id="header" class="section">
        <p> E-Parking Management </p>
    </div>
    <!-- header end -->

    <div class="section">
        <h1><span>About Us</span></h1>
        <p>
            Hey there! <strong>Do you find it difficult to find a place to park your vehicle?</strong>. Dont worry! We are here with an alternative to help you dealing with the parking issues. <i> How about online slot booking?</i> Yes that's what we
            are here for. Just register here and leave the rest on us, we'll provide you the best and the nearest place to park your vehicle and that to with a <i> pre booking facility </i>
        </p>


        <!-- About Me section start -->
        <div class="section">
            <h1><span>Objective</span></h1>
            <p>In the period of development, India is facing many problems to deal with and one of those is lack of sufficient parking space. The problem is simple � even as the number of vehicles has expanded, parking space in Indian cities has remained
                constant or reduced due to a growing population. Especially when land is limited and expensive, like in metropolises, rising parking demand spaces puts immense pressure on it. On top of that, we don�t even have a well settled management
                system for parking in this country. The objective is to introduce a system that uses sensors to detect the availability of parking space in the nearest locality and can ease the problem by providing the facility of pre-booking the slots
                via a web application. Online slot management will add the benefit of efficient utilization of free spaces in an economical way. The system is expected to reduce chaotic situations like overcrowded footpaths, illegal parking, traffic jams
                due to on-road parking and criminal activities due to improper surveillance.

            </p>
        </div>
        <!-- About Me section end -->




        <!-- Form section start -->
        <div class="section">
            <h1><span>Contact Us</span></h1>


            <circle cx="50" cy="50" r="50" fill="#FDD835" />
            <circle cx="30" cy="30" r="10" fill="#FFFFFF" />
            <circle cx="70" cy="30" r="10" fill="#FFFFFF" />
            <circle cx="30" cy="30" r="5" fill="#000000" />
            <circle cx="70" cy="30" r="5" fill="#000000" />
            <path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none" />
            </svg>

            <form>
                <input name="name" placeholder="Name" type="text" required /><br/>
                <input name="email" placeholder="Email" type="email" required /><br/>
                <textarea name="message" placeholder="Message" required></textarea>
                <input type="submit" value="SEND" class="submit" />
            </form>
        </div>

        <!-- Form section end -->
        <p></p>
        <!-- Contacts section start -->
        <div class="section" id="contacts">
            <h1><span>Follow Us</span></h1>
            <div>
                <a href="#">
                    <img alt="Facebook" src="img/facebook_logos_PNG19757.png" />
                </a>
                <a href="#">
                    <img alt="Twitter" src="img/103-1036917_twitter-logo-2-hd-twitter-logo-png-clipart.png" />
                </a>
            </div>
        </div>
        <!-- Contacts section end -->


</body>

</html>