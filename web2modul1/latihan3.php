<?php
function test()
{
   static $a=0;
   $a=$a+1;
   return "Ini adalah pemanggilan ke-$a fungsi test() <br />";
}
  
echo test();
echo test();
echo test();
echo test();
echo test();

?>