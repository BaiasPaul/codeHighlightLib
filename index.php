<?php 
    require("vendor/autoload.php");

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

    $string = 'abstract       false    function bubble_Sort ( $my_array ) { do { $swapped = false ; for ( $i = 0 , $c = count ( $my_array ) - 1 ; $i < $c ; $i ++ ) { if ( $my_array [ $i ] > $my_array [ $i + 1 ] ) { list ( $my_array [ $i + 1 ] , $my_array [ $i ] ) = array ( $my_array [ $i ] , $my_array [ $i + 1 ] ) ; $swapped = true ; } } } while ( $swapped ) ; return $my_array ; }';

    $array = $codehighlight->highlight($string);
    print_r($array);



