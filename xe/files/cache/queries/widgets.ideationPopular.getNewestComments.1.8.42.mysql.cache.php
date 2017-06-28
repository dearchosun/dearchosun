<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestComment");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srls)) {
${'module_srls5_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls5_argument'}->checkFilter('numbers');
${'module_srls5_argument'}->createConditionValue();
if(!${'module_srls5_argument'}->isValid()) return ${'module_srls5_argument'}->getErrorMessage();
} else
${'module_srls5_argument'} = NULL;if(${'module_srls5_argument'} !== null) ${'module_srls5_argument'}->setColumnType('number');

${'list_count8_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count8_argument'}->ensureDefaultValue('5');
if(!${'list_count8_argument'}->isValid()) return ${'list_count8_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

${'order_type7_argument'} = new SortArgument('order_type7', $args->order_type);
${'order_type7_argument'}->ensureDefaultValue('asc');
if(!${'order_type7_argument'}->isValid()) return ${'order_type7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls5_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, $order_type7_argument)
));
$query->setLimit(new Limit(${'list_count8_argument'}));
return $query; ?>