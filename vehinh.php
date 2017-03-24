<?php
	$width=$_POST['width'];
	$height=$_POST['height'];
	
	if ($width>0&&$height>0)
	{
		echo "Kết Quả: Hình bạn cần vẽ có chiều cao là $height và chiều rộng là $width ";
	}
	else
	{
		echo "Kết Quả: Số liệu bạn nhập vào không chính xác.";
	}
	$result="<br><table border=1 bordercolor=black width=300 height=200 cellspacing=5 cellpadding=5>";
	$h=$width-$height;
	
	if ($h==0)
	{
		for ($i=0; $i<$height; $i++)
		{
			$result=$result."<tr>";
			$socot=$width-($width-($i+1));
			for ($j=0; $j<$socot; $j++)
			{
				$result=$result."<td></td>";
			}
			$result=$result."</tr>";
		}
	}
	else if ($h<0)
	{
		for ($i=0; $i<$height+$h; $i++)
		{
			$result=$result."<tr>";
			$socot=$width-($width-($i+1));
			for ($j=0; $j<$socot; $j++)
			{
				$result=$result."<td></td>";
			}
			$result=$result."</tr>";
		}
		for ($i=0; $i<-$h; $i++)
		{
			$result=$result."<tr>";
			for ($j=0; $j<$width; $j++)
			{
				$result=$result."<td></td>";
			}
			$result=$result."</tr>";
		}
	}
	else if ($h>0)
	{
		for ($i=0; $i<$height; $i++)
		{
			$result=$result."<tr>";
			$socot=$width-($width-($i+1));
			for ($j=0; $j<$socot+$h; $j++)
			{
				$result=$result."<td></td>";
			}
			$result=$result."</tr>";
		}
	}
	$result=$result."</table>";
	
	echo $result;
?>