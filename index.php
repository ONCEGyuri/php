<h1>Első PHP program</h1>

<?php

    $a = 11;
    $b = 13;

    print "
            $a+$b=" . ($a+$b) . "<br>
            $a-$b=" . ($a-$b) . "<br>
            $a*$b=" . ($a*$b) . "<br>
            $a/$b=" . ($a/$b) . "<br>
    ";
?>

<hr>

<pre>
<?php

    print_r( $_GET ) ;

    print $_GET['nev']

?>
</pre>

<hr>

<?php

    if( isset($_GET['a']) && isset($_GET['b'])) {
        $a = $_GET['a'];
        $b = $_GET['b'];

        print "
                $a+$b=" . ($a+$b) . "<br>
                $a-$b=" . ($a-$b) . "<br>
                $a*$b=" . ($a*$b) . "<br>
                $a/$b=" . ($a/$b) . "<br>
        ";
    }
    else {
        $a = rand(2,99) ;
        $b = rand(2,99) ;
        print "
                Adj meg paramétereket, pl. így:

                <blockquote>
                    <a href='./?a=$a&b=$b'>?a=$a&$b=$b</a>
                </blockquote>
        ";
        
    }
?>