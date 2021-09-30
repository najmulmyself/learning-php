<?php

echo date('Y-m-d');

// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week

echo date("\nl ");

// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)
date_default_timezone_set("Asia/Dhaka");

echo "\nThe time is " . date("h:i:s a");