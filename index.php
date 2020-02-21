<?php 
    require("vendor/autoload.php");
//    require 'src/CSS/Style.css';
//    include 'src/CSS/Style.css';

    use HighlightLib\Assembler\Assembler;
    use HighlightLib\Clasifier\Clasifier;
    use HighlightLib\CodeHighlight;
    use HighlightLib\Tokenizer\Tokenizer;

    $codehighlight = new CodeHighlight(new Tokenizer(), new Clasifier(), new Assembler());

//    $string =
//        "
//        function bubble_Sort ( \$my_array )
//        {
//            do
//            {
//                \$swapped = false ;
//                for ( \$i = 0 , \$c = count ( \$my_array ) - 1 ; \$i < \$c ; \$i ++ )
//                {
//                    if ( \$my_array [ \$i ] > \$my_array [ \$i + 1 ] )
//                    {
//                        list ( \$my_array [ \$i + 1 ] , \$my_array [ \$i ] ) =
//                                array ( \$my_array [ \$i ] , \$my_array [ \$i + 1 ] ) ;
//                        \$swapped = true ;
//                    }
//                }
//            }
//            while ( \$swapped ) ;
//        return \$my_array ;
//        }
//        ";

//    $string='7 $3 true  ( 23 false }a abstract . $asd : } ( { 123 { ) )
//    } } {
//    }} {"';

    $string = 'abstract false function bubble_Sort ( $my_array ) { do { $swapped = false ; for ( $i = 0 , $c = count ( $my_array ) - 1 ; $i < $c ; $i ++ ) { if ( $my_array [ $i ] > $my_array [ $i + 1 ] ) { list ( $my_array [ $i + 1 ] , $my_array [ $i ] ) = array ( $my_array [ $i ] , $my_array [ $i + 1 ] ) ; $swapped = true ; } } } while ( $swapped ) ; return $my_array ; }';

    //print_r("<br><br>".$string."<br><br>");
    $array = $codehighlight->highlight($string);
    print_r($array);



