<?php
function displayCalendar($month, $year)
{
    /* draw table */
    $calendar = '<table border = 1>';
    /* table headings */
    $headings = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    $calendar .= '<tr><td>' . implode('</td><td>', $headings) . '</td></tr>';
    /* days and weeks ... */
    $running_day = date('w', mktime(0, 0, 0, $month, 1, $year));
    $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
    $days_in_this_week = 1; // checks how many days are in this week and how many days has been printed
    $day_counter = 0;
    /* row for week one */
    $calendar .= '<tr>';
    /* print "blank" days until the first of the current week */
    for ($x = 0; $x < $running_day; $x++) {
        $calendar .= '<td> </td>';
        $days_in_this_week++;
    }
    /* keep going with days.... */
    for ($list_day = 1; $list_day <= $days_in_month; $list_day++) {
        $calendar .= '<td>';
        /* add in the day number */
        $calendar .=  $list_day;
        $calendar .= '</td>';
        if ($running_day == 6) {
            $calendar .= '</tr>';
            //if month is running then tr should be opened
            if (($day_counter + 1) != $days_in_month) {
                $calendar .= '<tr>';
            }
            $running_day = -1; //running day starts from 0 and end at 6
            $days_in_this_week = 0; //afer last day of the week counter has been reset
        }
        $days_in_this_week++;
        $running_day++;
        $day_counter++;
    }
    /* finish the rest of the days in the week */
    if ($days_in_this_week < 8 && $days_in_this_week != 1) {
        for ($x = 1; $x <= (8 - $days_in_this_week); $x++) {
            $calendar .= '<td> </td>';
        }
    }
    /* final row */
    $calendar .= '</tr>';
    /* end the table */
    $calendar .= '</table>';
    /* all done, return result */
    return $calendar;
}
/* sample usages */
echo '<h2>July 2021</h2>';
echo displayCalendar(7, 2021);
echo '<h2>August 2021</h2>';
echo displayCalendar(8, 2021);
echo '<h2>September 2021</h2>';
echo displayCalendar(9, 2021);
echo '<h2>october 2021</h2>';
echo displayCalendar(10, 2021);
?>
<?php
function showCurrentMonth($current_Month, $year)
{
$date = mktime(12, 0, 0, $current_Month, 1, $year);
$numberOfDays =cal_days_in_month(CAL_GREGORIAN,$current_Month, $year);
$offset = date("w", $date);
$row_number = 1;
// time to draw the month header
echo "<table style='color:blue; border:1px solid blue; width:500px; height:300px;'><br/>";
echo "<tr><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td></tr> <tr>";
// this will print the additional td record in case the month is not starting with the Sunday.
for($i = 1; $i <= $offset; $i++)
{
echo "<td></td>";
}
//  this will print the number of days.
for($day = 1; $day <= $numberOfDays; $day++)
{
if( ($day + $offset - 1) % 7 == 0 && $day != 1)
{
echo "</tr> <tr>";
$row_number++;
}
echo "<td>" . $day . "</td>";
}
while( ($day + $offset) <= $row_number * 7)
{
echo "<td></td>";
$day++;
}
echo "</tr></table>";
}
?>
<html>
<head>
<title>Calendar of the current month (Dec 2019)</title>
</head>
<body>
<p>Calendar of the Dec 2019</p>
<?php
// Dec 2019 in PHP
showCurrentMonth(10,2021);
?>
</body>
</html>