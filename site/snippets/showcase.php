<?php

$categories = page('categories')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $categories = $categories->limit($limit);

$i = 0;

?>


<div class="container">
  <?php snippet('categories-showcase') ?>
</div>
