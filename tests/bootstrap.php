<?php
$src = realpath(__DIR__ . '/../src') . '/';
require_once $src . 'ClosedMail.php';
require_once $src . 'MailAddress.php';
require_once $src . 'MailtoAddress.php';
require_once $src . 'NewMessageLinkAddress.php';

require_once $src . 'AddressBookGenerator.php';
require_once $src . 'Messages.php';
require_once $src . 'Message.php';
require_once $src . 'MessagesFromNewer.php';
require_once $src . 'SplMaxHeapForMessages.php';

require_once $src . 'Order.php';
require_once $src . 'OrderRepository.php';
