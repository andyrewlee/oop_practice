<?php

$file = file_get_contents('dictionary.json');
$data = json_decode($file);

$words = array();

foreach ($data as $key => $value)
{
	$words[] = $key;
}

unset($file);//prevent memory leaks for large json.

class Branch
{
    public $value;
    public $left;
    public $right;

    function __construct($value)
    {
        $this->value = $value;
    }
}

class Tree
{
    public $root;

    function convert_to_binary_search_tree($array)
    {
        $branched_array = $this->convert_to_branch($array);
        for($i = 1; $i < count($branched_array); $i++)
        {
            $this->add_branch($branched_array[$i], $this->root);
        }
    }
function convert_to_branch($array)
    {
        $node_array = array();

        foreach($array as $value)
        {
            $node_array[] = new Branch($value);
        }
        $this->root = $node_array[0];
        return $node_array;
    }

    function add_branch($value, $start)
    {
        if($value->value > $start->value)
        {
            if($start->right)
            {
                $this->add_branch($value,$start->right);
            }
            else
            {
                $start->right = $value;
            }
        }
        else if ($value->value < $start->value)
        {
            if($start->left)
            {
                $this->add_branch($value, $start->left);
            }
            else
            {
                $start->left = $value;
            }
        }
        else
        {
            if($start->left == NULL)
            {
                $start->left = $value;
            }
            elseif($start->right == NULL)
            {
                $start->right = $value;
            }
            else
            {
                $this->add_branch($value, $start->left);
            }
        }
    }

}
$new_tree = new Tree();
$word_sorted_binary_tree = $new_tree->convert_to_binary_search_tree($words);




echo "root" . "<br>";
var_dump($new_tree->root);
echo "root left" . "<br>";
var_dump($new_tree->root->left);
echo "root right" . "<br>";
var_dump($new_tree->root->right);




?>