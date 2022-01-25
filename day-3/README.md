## OOP Tree

You need to implement the following tree interface:

```php
interface TreeInterface
{
    public function init($array);
    public function getNode($id);
    public function getNodes($id);
    public function getParent($id);
    public function toString(); // Print nested <ul, li>
}
```

Here is what you need to implement, and feel free to add any constructor, variables, extra
functions when needed.

```php
class Node
{
    protected $id;
    protected $parentId;
    protected $name;
}

class Tree implements TreeInterface
{
    ... YOUR CODE HERE ...
}
```

**Explain**: Each Tree will contain many nodes, whereas `$node->parentId = 0` means this node is connected to the tree root. The init function may be called as follow:

```php
$directNodes = [
    ['id' => 1, 'name' => "Node A",  'parent_id' => 0],
    ['id' => 2, 'name' => "Node B",  'parent_id' => 0],
    ['id' => 3, 'name' => "Node A1", 'parent_id' => 1],
    ['id' => 4, 'name' => "Node A2", 'parent_id' => 1],
];

$tree = new Tree();
$tree->init($directNodes);
```

In this case, `$tree->toString()` should output:

```html
<ul><li>A<ul><li>A1</li><li>A2</li></ul></li><li>B</li></ul>
```

in web, it will be:

<ul><li>A<ul><li>A1</li><li>A2</li></ul></li><li>B</li></ul>

and `$tree->get(2)` should return a array like

```php
['id' => 2, 'name' => "Node B", 'parent_id' => 0]
```
