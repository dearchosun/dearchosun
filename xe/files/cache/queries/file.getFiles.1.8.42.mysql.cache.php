<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl17_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl17_argument'}->checkFilter('number');
${'upload_target_srl17_argument'}->checkNotNull();
${'upload_target_srl17_argument'}->createConditionValue();
if(!${'upload_target_srl17_argument'}->isValid()) return ${'upload_target_srl17_argument'}->getErrorMessage();
if(${'upload_target_srl17_argument'} !== null) ${'upload_target_srl17_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid18_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid18_argument'}->createConditionValue();
if(!${'isvalid18_argument'}->isValid()) return ${'isvalid18_argument'}->getErrorMessage();
} else
${'isvalid18_argument'} = NULL;if(${'isvalid18_argument'} !== null) ${'isvalid18_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index19_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index19_argument'}->isValid()) return ${'sort_index19_argument'}->getErrorMessage();
} else
${'sort_index19_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl17_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid18_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index19_argument'}, "asc")
));
$query->setLimit();
return $query; ?>