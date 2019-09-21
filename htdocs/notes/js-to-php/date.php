<?php

header( 'Content-type: text/plain' );

// create a date object

    // $my$date = new $date();

// get the month, date, and year as integers

    $month = date('n') - 1;
    $date = (int)date('j');
    $year = (int)date('Y');

    var_dump( $month, $date, $year);

// determine the correct suffix

    if( $date % 10 === 1 && $date !== 11 )
    {

        $suffix = 'st';

    }

    else if( $date % 10 === 2 && $date !== 12 )
    {

        $suffix = 'nd';

    }

    else if( $date % 10 === 3 && $date !== 13 )
    {

        $suffix = 'rd';

    }

    else
    {

        $suffix = 'th';

    }

// determine the name of the $month

    if( $month === 0 )
    {

        $monthName = 'January';

    }

    else if( $month === 1 )
    {

        $monthName = 'February';

    }

    else if( $month === 2 )
    {

        $monthName = 'March';

    }

    else if( $month === 3 )
    {

        $monthName = 'April';

    }

    else if( $month === 4 )
    {

        $monthName = 'May';

    }

    else if( $month === 5 )
    {

        $monthName = 'June';

    }

    else if( $month === 6 )
    {

        $monthName = 'July';

    }

    else if( $month === 7 )
    {

        $monthName = 'August';

    }

    else if( $month === 8 )
    {

        $monthName = 'September';

    }

    else if( $month === 9 )
    {

        $monthName = 'October';

    }

    else if( $month === 10 )
    {

        $monthName = 'November';

    }

    else
    {

        $monthName = 'December';

    }

// print all the info

    echo 'Today is: ', $monthName ,' ', $date, $suffix, ', ', $year;


?>