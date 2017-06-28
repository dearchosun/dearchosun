<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srls)) {
${'module_srls1_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls1_argument'}->checkFilter('numbers');
${'module_srls1_argument'}->createConditionValue();
if(!${'module_srls1_argument'}->isValid()) return ${'module_srls1_argument'}->getErrorMessage();
} else
${'module_srls1_argument'} = NULL;if(${'module_srls1_argument'} !== null) ${'module_srls1_argument'}->setColumnType('number');

${'list_count4_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count4_argument'}->ensureDefaultValue('5');
if(!${'list_count4_argument'}->isValid()) return ${'list_count4_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

${'order_type3_argument'} = new SortArgument('order_type3', $args->order_type);
${'order_type3_argument'}->ensureDefaultValue('asc');
if(!${'order_type3_argument'}->isValid()) return ${'order_type3_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.*')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module`',"'board'","equal")
,new ConditionWithArgument('`modules`.`module_srl`',$module_srls1_argument,"in", 'and')
,new ConditionWithoutArgument('`documents`.`module_srl`','`modules`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, $order_type3_argument)
));
$query->setLimit(new Limit(${'list_count4_argument'}));
return $query; ?>