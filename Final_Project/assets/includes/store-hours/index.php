<!DOCTYPE html>
<html lang="en" xml:lang="en"><head>
    <meta charset="utf-8">

    <head>
        <title>PHP Store Hours</title>

        <style type="text/css">
        body {
            font-family: 'Helvetica Neue', arial;
            text-align: center;
            font-size: 24px;
        }
        table {
            font-size: 24px;
            text-align: left;
            margin: 100px auto 0 auto;
            border-collapse: collapse;
        }
        td {
            padding: 2px 8px;
            border: 1px solid #ccc;
        }
        .closed {
            color: rgb(255, 0, 0);
        }
        .open {
            color: green;
            font-weight: bold;
        }
        </style>
    </head>

    <body>

    <h2>Store Hours</h2>

    <?php

    // REQUIRED
    // Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
    date_default_timezone_set('Pacific/Honolulu');
    // Include the store hours class
    require __DIR__ . '/StoreHours.class.php';

    // REQUIRED
    // Define daily open hours
    // Must be in 24-hour format, separated by dash
    // If closed for the day, leave blank (ex. sunday)
    // If open multiple times in one day, enter time ranges separated by a comma
    $hours = array(
        'mon' => array(' '),
        'tue' => array('13:00-21:00'),
        'wed' => array('13:00-21:00'),
        'thu' => array('13:00-21:00'), 
        'fri' => array('16:00-23:00'),
        'sat' => array('16:00-23:00'),
        'sun' => array(' ')
    );

    // OPTIONAL
    // Add exceptions (great for holidays etc.)
    // MUST be in a format month/day[/year] or [year-]month-day
    // Do not include the year if the exception repeats annually
    $exceptions = array(
        '12/25'  => array(' '),
        '01/01' => array(' '),
    );

    $config = array(
        'separator'      => ' - ',
        'join'           => ' and ',
        'format'         => 'g:ia',
        'overview_weekdays'  => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')
    );

    // Instantiate class
    $store_hours = new StoreHours($hours, $exceptions, $config);
    
    // Display open / closed message
    if($store_hours->is_open()) {
        echo "<span class='open'>Yes, we're open!</span> Today's hours are " . $store_hours->hours_today() . ".";
    } else { //Sorry, we're closed for holidays. 
        //echo "<p class='closed'>Sorry, we're closed. Today's hours are " . $store_hours->hours_today() . ".</p>";
        if($store_hours->hours_today() == "" || $store_hours->hours_today() == " "){
            echo "<p class='closed'>Sorry, we're closed.</p>";
        } else {
            echo "<p class='closed'>Sorry, we're closed. Today's hours are " . $store_hours->hours_today() . ".</p>";

        }
    }

    // Display full list of open hours (for a week without exceptions)
    echo '<table>';
    foreach ($store_hours->hours_this_week() as $days => $hours) {
        echo '<tr>';
        echo '<td>' . $days . '</td>';
        echo '<td>' . $hours . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    // Same list, but group days with identical hours
    echo '<table>';
    foreach ($store_hours->hours_this_week(true) as $days => $hours) {
        echo '<tr>';
        echo '<td>' . $days . '</td>';
        echo '<td>' . $hours . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    ?>

    </body>

</html>
