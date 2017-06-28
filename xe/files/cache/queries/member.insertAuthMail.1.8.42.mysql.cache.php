<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAuthMail");
$query->setAction("insert");
$query->setPriority("");

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'user_id3_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id3_argument'}->checkNotNull();
if(!${'user_id3_argument'}->isValid()) return ${'user_id3_argument'}->getErrorMessage();
if(${'user_id3_argument'} !== null) ${'user_id3_argument'}->setColumnType('varchar');

${'auth_key4_argument'} = new Argument('auth_key', $args->{'auth_key'});
${'auth_key4_argument'}->checkNotNull();
if(!${'auth_key4_argument'}->isValid()) return ${'auth_key4_argument'}->getErrorMessage();
if(${'auth_key4_argument'} !== null) ${'auth_key4_argument'}->setColumnType('varchar');

${'new_password5_argument'} = new Argument('new_password', $args->{'new_password'});
${'new_password5_argument'}->checkNotNull();
if(!${'new_password5_argument'}->isValid()) return ${'new_password5_argument'}->getErrorMessage();
if(${'new_password5_argument'} !== null) ${'new_password5_argument'}->setColumnType('varchar');

${'is_register6_argument'} = new Argument('is_register', $args->{'is_register'});
${'is_register6_argument'}->ensureDefaultValue('N');
if(!${'is_register6_argument'}->isValid()) return ${'is_register6_argument'}->getErrorMessage();
if(${'is_register6_argument'} !== null) ${'is_register6_argument'}->setColumnType('char');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`user_id`', ${'user_id3_argument'})
,new InsertExpression('`auth_key`', ${'auth_key4_argument'})
,new InsertExpression('`new_password`', ${'new_password5_argument'})
,new InsertExpression('`is_register`', ${'is_register6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
));
$query->setTables(array(
new Table('`xe_member_auth_mail`', '`member_auth_mail`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>