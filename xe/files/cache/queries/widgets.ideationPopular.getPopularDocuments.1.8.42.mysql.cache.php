<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPopularDocuments");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srls)) {
${'module_srls9_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls9_argument'}->checkFilter('number');
${'module_srls9_argument'}->createConditionValue();
if(!${'module_srls9_argument'}->isValid()) return ${'module_srls9_argument'}->getErrorMessage();
} else
${'module_srls9_argument'} = NULL;if(${'module_srls9_argument'} !== null) ${'module_srls9_argument'}->setColumnType('number');

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('5');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'sort_index10_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index10_argument'}->ensureDefaultValue('readed_count');
if(!${'sort_index10_argument'}->isValid()) return ${'sort_index10_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls9_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index10_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count11_argument'}));
return $query; ?>