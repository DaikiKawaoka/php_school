<pre>
<?php 
$data = ['PHP', 'JavaScript', 'PHP', 'Java', 'C#', '15'];
var_dump(array_search('JavaScript', $data));
var_dump(array_search('PHP', $data));
var_dump(array_search('JAVA', $data));
var_dump(array_search(15, $data));
var_dump(array_search(15, $data, true));
