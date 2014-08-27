<?php

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

    function find_branch($value,$start)
    {
        if ($value == $start->value)
        {
            return TRUE;
        }
        else if ($value > $start->value && $start->right)
        {
            return $this->find_branch($value, $start->right);
        }
        else if ($value < $start->value && $start->left)
        {
            return $this->find_branch($value, $start->left);
        }
        else
        {
            return FALSE;
        }
    }


        // if ($value == $this->root)
        // {
        //     return $this->root;
        // }
        // else if ($value->value > $start->value)
        // {
        //     if ($this->)
        // }


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
$new_tree->convert_to_binary_search_tree(['apple', 'aaron', 'banana', 'ball', 'carrot']);


var_dump($new_tree->find_branch('ball', $new_tree->root)); // true

var_dump($new_tree->find_branch('bsada', $new_tree->root)); // false


// echo "root" . "<br>";
// var_dump($new_tree->root);
// echo "root left" . "<br>";
// var_dump($new_tree->root->left);
// echo "root right" . "<br>";
// var_dump($new_tree->root->right);



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
