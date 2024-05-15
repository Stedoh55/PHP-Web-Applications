<!DOCTYPE html>
    <head>
        <title>Steven Simoni MD5 Cracker</title>
    </head>
    <body>
        <h1>MD5 cracker</h1>
        <p> This application takes an MD5 hash of the four digit pin and check all 10,000 possible four digit PINs to determine the PIN </p>

        <pre>
Debug Output:

<?php
        $goodtext = "Not found";

                // If there is no parameter, this code is all skipped
                if ( isset($_GET['md5']) ) {
                    $time_pre = microtime(true);
                    $md5 = $_GET['md5'];

                    // The Possible number combinations
                    $txt = "0123456789";
                    $show = 15;

                   // First numeral
                    for($i=0; $i<strlen($txt); $i++ ) {
                        $ch1 = $txt[$i];   // The first of four characters

                        // First inner loop. Note the use of new variables
                        // $j and $ch2 
                        for($j=0; $j<strlen($txt); $j++ ) {
                            $ch2 = $txt[$j];  // Our second character

                            for($k=0; $k<strlen($txt); $k++ ) {
                            $ch3 = $txt[$k];  // Our third character

                                for($n=0; $n<strlen($txt); $n++ ) {
                                $ch4 = $txt[$n];  // Our third character


                                    // Concatenate the two characters together to 
                                    // form the "possible" pre-hash text
                                    $try = $ch1.$ch2.$ch3.$ch4;

                                    // Run the hash and then check to see if we match
                                    $check = hash('md5', $try);
                                    if ( $check == $md5 ) {
                                        $goodtext = $try;
                                        break;   // Exit the inner loop
                                    } /* Hash closed */

                                    // Debug output until $show hits 0
                                    if ( $show > 0 ) {
                                        print "$check $try\n";
                                        $show = $show - 1;
                                    } /* Debug closed */

                                } /* Fourth character closed*/
                                    
                            } /* Third character closed*/

                        } /* Second numeral closed*/

                    } /* First numeral closed*/


                    // Compute elapsed time
                    $time_post = microtime(true);
                    print "Elapsed time: ";
                    print $time_post-$time_pre;
                    print "\n";

                } /* First if statement closed*/

            ?>
        </pre>

        <!-- Use the very short syntax and call htmlentities() -->
        <p> PIN: <?= htmlentities($goodtext); ?></p>
        <form>
            <input type="text" name="md5" size="40" />
            <input type="submit" value="Crack MD5"/>
        </form>
        <ul>
            <li><a href="index.php">Reset</a></li>
        </ul>

    </body>
</html>

