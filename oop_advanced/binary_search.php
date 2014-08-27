<?php

class Branch
{
    public $int;
    public $left;
    public $right;

    function __construct($value)
    {
        $this->int = $value;
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
            $this->addBranch($branched_array[$i], $this->root);
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

    function addBranch($value, $start)
    {
        if($value->int > $start->int)
        {
            if($start->right)
            {
                $this->addBranch($value,$start->right);
            }
            else
            {
                $start->right = $value;
            }
        }
        else if ($value->int < $start->int)
        {
            if($start->left)
            {
                $this->addBranch($value, $start->left);
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
                $this->addBranch($value, $start->left);
            }
        }
    }

}
$new_tree = new Tree();
$new_tree->convert_to_binary_search_tree([24,6,96,100,150,95,13,5,0,12,15]);


echo "root" . "<br>";
var_dump($new_tree->root);
echo "root left" . "<br>";
var_dump($new_tree->root->left);
echo "root right" . "<br>";
var_dump($new_tree->root->right);



// $new_tree->addBranch(new Branch(30), $new_tree->root);
// $new_tree->addBranch(new Branch(31), $new_tree->root);
// $new_tree->addBranch(new Branch(6), $new_tree->root);
// $new_tree->addBranch(new Branch(7), $new_tree->root);
// $new_tree->addBranch(new Branch(5), $new_tree->root);
// $new_tree->addBranch(new Branch(30), $new_tree->root);
// // var_dump($new_tree->root->right);
// // var_dump($new_tree->root);
// // var_dump($new_tree->root->right->right);
// var_dump($new_tree->root->left->left);
// var_dump($new_tree->root->left->right);
// var_dump($new_tree->root->right->left);
?>
