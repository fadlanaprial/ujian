<?php 
function cetak_gambar($jumlah__)
{
	for ($i = 1; $i <= $jumlah__; $i++)  
    {  
        for ($j = 1; $j <= $jumlah__; $j++)  
        {  
        	if ($i == 1 || $i == $jumlah__ || $j == ($jumlah__/2)+0.5)
        	{
        		echo "x&nbsp;";
        	}
        	else
        	{
        		echo "=&nbsp;";
        	}
        }  
        echo "<br>"; 
    }  
}
cetak_gambar(7);


?>

   
