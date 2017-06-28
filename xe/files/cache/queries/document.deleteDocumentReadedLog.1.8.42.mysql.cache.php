<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentReadedLog");
$query->setAction("delete");
$query->setPriority("");

${'document_srl23_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl23_argument'}->checkFilter('number');
${'document_srl23_argument'}->checkNotNull();
${'document_srl23_argument'}->createConditionValue();
if(!${'document_srl23_argument'}->isValid()) return ${'document_srl23_argument'}->getErrorMessage();
if(${'document_srl23_argument'} !== null) ${'document_srl23_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_readed_log`', '`document_readed_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl23_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>