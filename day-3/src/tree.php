<?php

interface TreeInterface
{
    public function init($array);
    public function getNode($id);
    public function getNodes($id);
    public function getParent($id);
    public function toString();// Print nested <ul, li>
    
}

// Create Node
class Node
{
    protected $id;
    protected $parentId;
    protected $name;

    // Constructor
    function __construct($id, $parentId, $name)
    {
        $this->id = $id;
        $this->parentId = $parentId;
        $this->name = $name;
    }

    // Getters
    function getId()
    {
        return $this->id;
    }

    
    function getParentId()
    {
        return $this->parentId;
    }

    
    function getName()
    {
        return $this->name;
    }
}

class Tree implements TreeInterface
{
    // Array to save the tree
    private $nodeList = [];

    // Khoi tao
    public function init($array)
    {
        foreach ($array as $node) {
            if (count($this->getNode($node['id'])) === 0) {
                array_push($this->nodeList, new Node($node['id'], $node['parent_id'], $node['name']));
            }
        }
    }

    public function getNode($id)
    {
        foreach ($this->nodeList as $node) {
            if ($node->getId() == $id) {
                return ['id' => $node->getId(), 'name' => $node->getName(), 'parent_id' => $node->getParentId()];
            }
        }

        return [];
    }

    public function getNodes($id)
    {
        $result = [];

        foreach ($this->getAllParents($id) as $node) {
            array_push($result, ['id' => $node->getId(), 'name' => $node->getName(), 'parent_id' => $node->getParentId()]);
        }

        // Find descendants
        array_push($result, $this->getNode($id));

        foreach ($this->getAllChild($id) as $node) {
            array_push($result, ['id' => $node->getId(), 'name' => $node->getName(), 'parent_id' => $node->getParentId()]);
        }

        return $result;
    }

    public function getAllChild($parentId)
    {
        $result = [];
        foreach ($this->nodeList as $node) {

            // Find children
            if ($node->getParentId() == $parentId) {
                array_push($result, $node);

                // Find descendants if exist
                if (count($this->getChild($node->getId())) > 0) {
                    foreach ($this->getAllChild($node->getId()) as $child) {
                        array_push($result, $child);
                    }                  
                }
            }
        }

        return $result;
    }

    public function getAllParents($childId) 
    {
        $result = [];

        foreach ($this->nodeList as $node) {
            if($node->getId() == $childId) {
                $child = $node;
            }
        }

        foreach ($this->nodeList as $node) {
            if ($node->getId() == $child->getParentId()) {
                $parent = $node;
            }          
        }

        if(isset($parent)) {
            if ($parent->getParentId() != 0) {
                foreach ($this->getAllParents($parent->getId()) as $node) {
                    array_push($result, $node);
                }            
            }  
            array_push($result, $parent);
        }      
        
        return $result;
    }

    public function getParent($id)
    {
        foreach ($this->nodeList as $node) {
            if ($node->getId() == $id) {

                return $this->getNode($node->getParentId());
            }
        }
    }

    public function getChild($id)
    {
        $child = [];
        foreach ($this->nodeList as $node) {
            if ($node->getParentId() == $id) {
                array_push($child, ['id' => $node->getId(), 'name' => $node->getName(), 'parent_id' => $node->getParentId()]);
            }
        }

        return $child;
    }

    public function toString()
    {
        return '<ul>'.$this->childToString(0).'</ul>';
    }

    public function childToString($parentId)
    {
        $str = "";
        foreach ($this->nodeList as $node) {
            if ($node->getParentId() == $parentId) {
                $str .= '<li>'. $node->getName();
                if (count($this->getChild($node->getId())) > 0) {                   
                    $str .= '<ul>'. $this->childToString($node->getId()) .'</ul>';
                }
                $str .= '</li>';          
            }
        }
        return $str;
    } 
}