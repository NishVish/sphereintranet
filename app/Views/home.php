<?php
include 'header.php';
?>
<?php if(session()->getFlashdata('message')): ?>
    <p style="color: green;"><?= session()->getFlashdata('message') ?></p>
<?php endif; ?>
<!-- 
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <td>image</td>

        <td>IITM Chennai<br>IITM Chennai<br>16,17,18 July 2025<br>Successfully Completed</td>
        <td>IITM Bengaluru<br>IITM Bengaluru<br>24,25,26 July 2025<br>Successfully Completed</td>
        <td>IITM Pune<br>IITM Pune<br>27,28,29 Nov 2025<br>Successfully Completed</td>
        <td>IITM Hyderabad<br>IITM Hyderabad<br>04,05,06 Dec 2025<br>Time 11:00 AM - 6:00 PM<br>Successfully Completed</td>
        <td>IITM Kochi<br>IITM Kochi<br>08,09,10 Jan 2026<br>Rajiv Gandhi Indoor Stadium, Kadavanthra P.O., Kochi - 682020<br>Time 11:00 AM - 6:00 PM<br>Trade Visitor Registration</td>
        <td>IITM Kolkata<br>IITM Kolkata<br>TBA<br>Time 11:00 AM - 6:00 PM<br>Trade Visitor Registration</td>
        <td>IITM Ahmedabad<br>IITM Ahmedabad<br>20-21 March 2026<br>Gracia Hall, YMCA Convention Center, Ahmedabad<br>Time 11:00 AM - 6:00 PM<br>Trade Visitor Registration</td>
        <td>IITM Delhi / NCR<br>IITM Delhi / NCR<br>TBA<br>TBA</td>
        <td>IITM Mumbai<br>IITM Mumbai<br>TBA<br>TBA</td>

    </tr>
</table>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <td>image</td>

        <td>OTR - India 2026<br>12th to 17th January<br>With more than 1.2 billion inhabitants India offers enormous growth in outbound travel.</td>
        <td>OTR Middle East 2026<br>9th to 13th February<br>The Middle East region is one of the smallest, yet fast growing, tourist generating regions in the world.</td>
        <td>OTR - South East Asia<br>TBA<br>Southeast Asia has been a top international travel destination for years.</td>

    </tr>
</table>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <td>image</td>

        <td>Holiday Expo<br>Vadodara<br>9,10 and 11 October 2025<br>Venue: Grand Mercure Vadodara Surya Palace, opp. Parsi Agiary, Sarod, Sayajiganj, Vadodara, Gujarat 390020<br>Successfully Completed</td>
        
        <td>Visakhapatnam Scenic Beauty<br>Visakhapatnam<br>07 and 08 November 2025<br>Venue: RVR Conventions, Daspalla Hills, Ram Nagar, Visakhapatnam - 530021, Andhra Pradesh, India<br>Successfully Completed</td>
        
        <td>Scenic Wonders of Coimbatore<br>Coimbatore<br>TBA<br>Venue: TBA<br>Register</td>
        
        <td>Varanasi<br>27, 28 & Mar 1, 2026<br>Venue: TBA<br>Register</td>

    </tr>
</table>

<table>
    <tr>
        <td>image</td>

  <td>eventname <br>venue <br>date <br> moreinfo</td>
  <td>eventname <br>venue <br>date <br> moreinfo</td>
  <td>eventname <br>venue <br>date <br> moreinfo</td>
  <td>eventname <br>venue <br>date <br> moreinfo</td>
 

        </tr>
     
</table> -->

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 12px;
        background: #fff;
        box-shadow: 0 3px 6px rgba(0,0,0,0.08);
        border-radius: 6px;
        overflow: hidden;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    td {
        border-bottom: 1px solid #eee;
        padding: 10px;
        vertical-align: top;
    }

    tr:first-child td {
        font-weight: bold;
        background: #f8f8f8;
        text-align: center;
    }

    td img {
        max-width: 80px;
        border-radius: 4px;
    }

    td:not(:first-child) {
        line-height: 1.4;
    }

    td:hover {
        background: #fafafa;
        transition: 0.25s;
    }

    .location {
        font-weight: bold;
        color: #2c3e50;
        display: block;
        margin-bottom: 3px;
    }

    .date, .venue, .status {
        display: block;
        color: #555;
        margin-bottom: 2px;
    }

    .table-title {
        font-size: 1.1em;
        margin-bottom: 8px;
        color: #34495e;
        font-weight: bold;
    }
</style>

<table>
    <tr>
        <td><img src="https://iitmindia.com/wp-content/uploads/2024/03/image-1.png" alt=""></td>
        <td><span class="location">IITM Chennai</span><span class="date">16-18 July 2025</span><span class="status">Completed</span></td>
        <td><span class="location">IITM Bengaluru</span><span class="date">24-26 July 2025</span><span class="status">Completed</span></td>
        <td><span class="location">IITM Pune</span><span class="date">27-29 Nov 2025</span><span class="status">Completed</span></td>
        <td><span class="location">IITM Hyderabad</span><span class="date">04-06 Dec 2025 | 11:00-18:00</span><span class="status">Completed</span></td>
        <td><span class="location">IITM Kochi</span><span class="date">08-10 Jan 2026 | 11:00-18:00</span><span class="venue">Rajiv Gandhi Indoor Stadium, Kochi</span><span class="status">Registration</span></td>
        <td><span class="location">IITM Kolkata</span><span class="date">TBA | 11:00-18:00</span><span class="status">Registration</span></td>
        <td><span class="location">IITM Ahmedabad</span><span class="date">20-21 Mar 2026 | 11:00-18:00</span><span class="venue">Gracia Hall, YMCA Convention Center</span><span class="status">Registration</span></td>
        <td><span class="location">IITM Delhi/NCR</span><span class="date">TBA</span><span class="status">TBA</span></td>
        <td><span class="location">IITM Mumbai</span><span class="date">TBA</span><span class="status">TBA</span></td>
    </tr>
</table>

<table>
    <tr>
        <td><img src="https://otrglobe.com/wp-content/uploads/2023/01/logo.png" alt=""></td>
        <td><span class="location">OTR - India 2026</span><span class="date">12-17 Jan</span><span class="status">India: 1.2B+ inhabitants, huge outbound travel growth.</span></td>
        <td><span class="location">OTR Middle East 2026</span><span class="date">9-13 Feb</span><span class="status">Middle East: fast-growing tourist region.</span></td>
        <td><span class="location">OTR - SE Asia</span><span class="date">TBA</span><span class="status">Southeast Asia: top international travel destination.</span></td>
    </tr>
</table>

<table>
    <tr>
        <td><img src="https://www.holidayexpo.in/img/Holidayexpo_logo.png" alt=""></td>
        <td><span class="location">Holiday Expo, Vadodara</span><span class="date">9-11 Oct 2025</span><span class="venue">Grand Mercure Vadodara Surya Palace, Sayajiganj, Vadodara</span><span class="status">Completed</span></td>
        <td><span class="location">Visakhapatnam Scenic Beauty</span><span class="date">07-08 Nov 2025</span><span class="venue">RVR Conventions, Visakhapatnam</span><span class="status">Completed</span></td>
        <td><span class="location">Scenic Wonders of Coimbatore</span><span class="date">TBA</span><span class="venue">TBA</span><span class="status">Register</span></td>
        <td><span class="location">Varanasi</span><span class="date">27-28 Feb & 1 Mar 2026</span><span class="venue">TBA</span><span class="status">Register</span></td>
    </tr>
</table>

<?php if (!empty($announcements) && is_array($announcements)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Topic</th>
                <th>Info</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($announcements as $announcement): ?>
                <tr>
                    <td><?= esc($announcement['id']) ?></td>
                    <td><?= esc($announcement['date']) ?></td>
                    <td><?= esc($announcement['topic']) ?></td>
                    <td><?= esc($announcement['info']) ?></td>
                    <td><?= esc($announcement['department']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No announcements found.</p>
<?php endif; ?>

<!-- 
<link rel="stylesheet" href="<?= base_url('public/css/home.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/tools.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/chat.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/communication.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/creative.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/event.css') ?>"> -->