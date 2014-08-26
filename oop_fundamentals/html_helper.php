<?php 
class HTML_Helper
{	
	public function print_table($array)
	{
		echo '<table>';
		for($i = 0; $i < count($array); $i++)
		{
			if($i == 0)
			{
				echo '<tr>';
				foreach($array[$i] as $key => $value)
				{
					echo '<td>' . $key . '</td>';
				}
				echo '</tr>';
			}
			echo '<tr>';
			foreach($array[$i] as $key => $value)
			{
				echo '<td>' . $value . '</td>';
			}
			echo '</tr>';
		}		
		echo '</table>';
	}

	public function print_select($name, $array)
	{
		echo '<select name=' . $name . '>';
		foreach ($array as $value)
		{
			echo '<option value=' . $value . '>' . $value . '</option>';
		}
		echo '</select>';
	}
}

$array = array(
						array("first_name" => "Michael", "last_name" => "Choi", "nick_name" => "Sensei"),
						array("first_name" => "Andrew", "last_name" => "Lee", "nick_name" => "jazz"),
						array("first_name" => "Edu", "last_name" => "Baik", "nick_name" => "rock"),
						array("first_name" => "Eric", "last_name" => "Choi", "nick_name" => "classical"),
						array("first_name" => "Rory", "last_name" => "Parsey", "nick_name" => "white"),
						array("first_name" => "Evan", "last_name" => "Sadler", "nick_name" => "brown")
						);

$table = new HTML_Helper();
$table->print_table($array);



$sample = array("CA", "WA", "UT", "TX", "AZ", "NY") ;

$table->print_select("state", $sample);


 ?>


