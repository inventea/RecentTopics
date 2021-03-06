<?php
/**
 *
 * @package Recent Topics Extension
 * Arabic translation by Taha Alhitary (www.alhitary.net)
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'					=> 'أحدث المواضيع',
	'RECENT_TOPICS_LIST'			=> 'العرض في "أحدث المواضيع" ',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'السماح بعرض مواضيع هذا المنتدى في قائمة "أحدث المواضيع"',

	'RT_CONFIG'						=> 'الإعدادات',
	'RT_ANTI_TOPICS'				=> 'المواضيع المُستبعدة ',
	'RT_ANTI_TOPICS_EXP'			=> 'اكتب علامة الفاصلة ", " بين أرقام المواضيع التي تريد عدم ظهورها في "أحدث المواضيع" (مثال : "7, 9")<br />اكتب القيمة "صفر" لتعطيل هذا الخيار.',
	'RT_MIN_TOPIC_LEVEL'			=> 'نوع المواضيع ',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'تحديد نوع المواضيع التي تريد عرضها. سيتم العرض من الأقل إلى الأكثر. <br />( اكتب القيمة صفر لعرض المواضيع العادية / 1 للمُثبتة / 2 للإعلانات / 3 للإعلانات العامة )',
	'RT_NUMBER'						=> 'عدد المواضيع ',
	'RT_NUMBER_EXP'					=> 'عدد "أحدث المواضيع" التي ستظهر في الصفحة الرئيسية للمنتدى.',
	'RT_PAGE_NUMBER'				=> 'عدد الصفحات ',
	'RT_PAGE_NUMBER_EXP'			=> 'تستطيع عرض الكثير من "أحدث المواضيع" باستخدام ترقيم الصفحات. اكتب رقم 1 لتعطيل هذا الخيار. القيمة صفر تعني أن عدد الصفحات ستكون كثيرة جداً بحسب احتياجها لعرض جميع المواضيع الموجودة في منتداك ( لا يُنصح بهذا ).',
	'RT_PARENTS'					=> 'إظهار المنتدى الأب ',
	'RT_PARENTS_EXP'				=> 'إظهار إسم "المنتدى الأب" في التفاصيل المذكورة تحت أسم الموضوع.',
	'RT_SORT_START_TIME'			=> 'Sort by topic start time',
	'RT_SORT_START_TIME_EXP'		=> 'Enable to sort recent topics by the starting time of the topic, instead of the last post time.',
	'RT_UNREADONLY'					=> 'عرض المواضيع الغير مقروءة فقط ',
	'RT_UNREADONLY_EXP'				=> 'تفعيل هذا الخيار يعني اظهار المواضيع الغير مقروءة فقط ( بغض النظر لو هذه المواضيع حديثة أو قديمة ). هذا الخيار يستخدم نفس اعدادات الطريقة العادية ( استبعاد المنتدىات/المواضيع..الخ ).<br />ملاحظة : هذا الخيار يظهر فقط للأعضاء المسجلين دخولهم للمنتدى. الزائرين سيُشاهدون القائمة العادية.',

	'RT_VIEW_ON'					=> 'إظهار أحدث المواضيع في :',
));
