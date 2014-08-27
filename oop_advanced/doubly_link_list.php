<?php 
class Spaceship
{
	// link to the previous node
	public $prev;
	// link to the next node
	public $next;
	// link to the nodes value
	public $data;

	public function __construct($value)
	{
		$this->data = $value;
	}
}

class Deck 
{
	// first node of the list
	public $head;
	// last node of the list
	public $tail;
	
	function add_spaceship($value)
	{
    $new_spaceship = new Spaceship($value);
    if ($this->head == NULL)
    {
      $this->head = $new_spaceship;
      $this->tail = $new_spaceship;
    }
    else
    {
      $this->tail->next = $new_spaceship;
      $new_spaceship->prev = $this->tail;
      $this->tail = $new_spaceship;
    }
	}

  function insert_spaceship($value,$stop_value)
  {
    $new_spaceship = new Spaceship($value);
    if ($this->head->data == $stop_value)
    {
      $this->head->prev = $new_spaceship;
      $new_spaceship->next = $this->head;
      $this->head = $new_spaceship;
    }
    else
    { 
      $current = $this->head;
      while ($current->data != $stop_value)
      {
        $current = $current->next;
      }
      $current->prev->next = $new_spaceship;
      $new_spaceship->prev = $current->prev;
      $new_spaceship->next = $current;
      $current->prev = $new_spaceship;
    }

  }

  function destroy_spaceship($value)
  {
    if ($this->head->data == $value)
    {
      $this->head = $this->head->next;
      $this->head->prev = NULL;
    }
    elseif ($this->tail->data == $value)
    {
      $this->tail = $this->tail->prev;
      $this->tail->next->prev = NULL;
      $this->tail->next = NULL;

    }
    else
    {
      $current = $this->head;
      while ($current->data != $value)
      {
        $current = $current->next;
      }
      $current->prev->next = $current->next; 
      $current->next->prev = $current->prev;
    }
   }

	function print_values()
	{
		$current = $this->head;
		while ($current != NULL)
		{
			echo $current->data . "<br>";
			$current = $current->next;
		}
	}
}

$doubly = new Deck();
$doubly->add_spaceship('first');
$doubly->add_spaceship('second');
$doubly->add_spaceship('third');
$doubly->add_spaceship('fourth');
$doubly->insert_spaceship('fifth', 'third');
$doubly->insert_spaceship('test', 'first');
$doubly->insert_spaceship('last-test', 'fourth');
$doubly->destroy_spaceship('fourth');
$doubly->print_values();

?>