-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 21 2014 г., 01:12
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `esnail_website`
--

-- --------------------------------------------------------

--
-- Структура таблицы `businesses`
--

CREATE TABLE IF NOT EXISTS `businesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `businesses`
--

INSERT INTO `businesses` (`id`, `name`, `user_id`) VALUES
(1, 'My 1st Business', 10),
(2, 'My Second Business', 10),
(3, 'My 3rd Business', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Структура таблицы `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `kind` varchar(15) NOT NULL DEFAULT 'm',
  `delivered` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` tinyint(1) NOT NULL DEFAULT '0',
  `held` tinyint(1) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `mails`
--

INSERT INTO `mails` (`id`, `subject`, `description`, `from`, `to`, `kind`, `delivered`, `viewed`, `held`, `archived`, `user_id`, `created_at`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 'France', 'Canada', 'm', 0, 1, 0, 0, 10, '2014-07-20 18:31:36'),
(2, 'Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet', 'Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. ', 'Russia', 'Belarus', 'm', 0, 1, 0, 0, 10, '2014-07-20 18:32:30'),
(3, 'Cras dapibus', 'Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.', 'Bulgaria', 'Poland', 'm', 0, 1, 0, 0, 10, '2014-07-20 18:33:29'),
(4, 'Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu', 'Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 'Lithuania', 'Canada', 'p', 0, 1, 0, 0, 10, '2014-07-20 18:34:21'),
(5, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 'Swiss', 'Ukraine', 'm', 0, 1, 0, 0, 10, '2014-07-20 18:45:28');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `excerpt` varchar(1500) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `added_on`, `excerpt`, `title`, `content`) VALUES
(4, '2012-04-21 10:51:17', '<p><span style="color: #002344; font-family: ''Droid Serif'', Tahoma, Arial, sans-serif; font-size: 13px; line-height: 19px;">It''s nice to see positive change happening in the world. A friend of mine sent me a link to this company in Switzerland which has begun to offer scanning and storage online. Unfortunately they are running the business on the same principle as Earth Class Mail, an Oregon based startup that offers a similar service as eSnail.ca.</span></p>', 'World''s Highest Paid Letter Opener', '<p>It''s nice to see positive change happening in the world. A friend of mine sent me a link to&nbsp;<a href="http://www.post.ch/en/post-startseite/post-swisspostbox.htm">this</a>&nbsp;company in Switzerland which has begun to offer scanning and storage online. Unfortunately they are running the business on the same principle as Earth Class Mail, an Oregon based startup that offers a similar service as eSnail.ca. Basically their service involves scanning the envelope- ONLY the envelope- and then asking the user to pay $1.50 just to send you a scanned copy of the envelope''s actual contents.</p>\n<p>While we wish our friends at Swiss Post and Earth Class Mail the best it seems to us rather silly to make our users wait a full day just to see the contents of their mail- let alone to charge $1.50 for us to use a letter opener. I can''t speak for everyone, but I open every piece of mail with my name on it- which still makes up the bulk of the mail I personally receive. If I kept an account at Earth Class Mail, It would drive me batty wondering what''s in the envelope each time I received and wondering if it was worth it to pay the $1.50 to open it.</p>\n<p>The only thing worse than having a frustrated customer is being a frustrated customer. So let us know how we''re doing.</p>\n<p>Until next entry, have a great day.</p>\n<p>Stephan DuVal<br />eSnail.ca Postmaster</p>'),
(5, '2012-05-02 10:51:56', '<p>A friend of mine who is into marketing once told me that Canada Post is one of the most valuable brands in existence. By that he meant not the service it provides but the goodwill that the name holds with its users who view it as a trustworthy and efficient service.</p>', 'The cost of a PO Box', '<p>A friend of mine who is into marketing once told me that Canada Post is one of the most valuable brands in existence. By that he meant not the service it provides but the goodwill that the name holds with its users who view it as a trustworthy and efficient service. Personally I like Canada Post. I prefer it to companies like UPS, DHL and TNT who principally provide the maddening service of posting those sticky notices telling you that you can''t have your package because you- as you were already aware- were not at home. Isn''t that what a postal box is for? Canada Post has never had trouble delivering or holding on to a package for weeks at a nearby postal outlet- but many of the big courier companies have actually returned packages without my consent because it was not convenient for them to deliver it at a time when I could sign for it.</p>\n<p>According to a Boston.com article, it seems that the US postal service is in a bit of&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none;" href="http://articles.boston.com/2012-04-17/business/31356274_1_mail-volume-postal-service-first-class-mail-delivery">trouble</a>&nbsp;lately due to online communication and bills.</p>\n<p>I hope that eSnail.ca is on the side of Canada Post, rather than being one of those companies that are slowly causing it to go the way of the Cotton Gin. Perhaps a day like today is good one to reaffirm that Canada Post is eSnail.ca''s first choice when it comes to forwarding packages and letters. We do this not because it is the most cost-effective option, (though it often is) but because it is the most convenient for our users and because Canada Post offers a high level of service for rural and remote addresses. Canada Post is a company with vision who puts service above convenience and profit. That''s exactly the kind of company eSnail.ca hopes to be.</p>\n<p>Have a great day,</p>\n<p>Stephan DuVal<br />eSnail.ca Postmaster</p>'),
(6, '2013-06-26 10:44:18', '<p>This has been a very exiciting month for us at eSnail.ca. &nbsp;Our Web traffic has tripled this month since we''ve startedd to reach out to Google users.</p>', 'Welcome new visitors', '<p>This has been a very exiciting month for us at eSnail.ca. &nbsp;Our Web traffic has tripled this month since we''ve startedd to reach out to Google users. &nbsp;We hope that in reaching our site you''ve been looping for. Up until this month our customers have mostly found about us through word of mouth and our poster campaigns.&nbsp;</p>\n<p>I''d like to thank Victor Avasiloaei for his hard work on the website and his advice on how to make the webpage searchable.</p>\n<p>We''ve also moved our scanning center to a new, larger, facility with a at number of additional security features.</p>'),
(7, '2013-08-23 18:55:59', '<p><span style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">Your mailing address says a lot about your company. Are you a startup working out of a basement or do you do business in a large commercial center?</span></p>', 'Every small business need a business address', '<p><span style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">Every small business needs an office mailing address. Your mailing address says a lot about your company. Are you a startup working out of a basement or do you do business in a large commercial center? &nbsp;For web-based companies a commercial address tells your customers where you come from and lend your company a brick and mortar image of trust and reliability. &nbsp;It''s part of your identity.</span></p>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">Stability is as important as trust in a small business environment.<br />\n<div>\n<div>&nbsp;</div>\n<div>If you work from home you might never get to meet the potential clients who sees a residential address on your website and feels reluctant to do business with someone who doesn''t have a private office. It''s about the idea that their business is safe with you because you''re here to stay.</div>\n<div>&nbsp;</div>\n<div>Virtual offices or pocket offices are a booming business in major business centers. They provide small startups or individuals with a desk and the resources of a small office for a fraction of the rent. It''s a great concept because its flexible for entrepreneurs. Still, the rent is often in the hundreds of dollars- which can be a lot if you move into a larger office and wish to maintain a permanent business address.</div>\n</div>\n</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">Even if its the right idea in the long term, &nbsp;rebranding, moving locations and renaming your business can hurt your company&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;"><a href="http://eSnail.ca">eSnail.ca</a>&nbsp;is working to create a flexible solution for small and medium businesses who are moving up fast but want their clients to know that they are here to stay.&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">Check out the plans we have to offer and see if</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">Your Company Name</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">\n<div><a href="x-apple-data-detectors://1">115 E Pender St</a></div>\n<div><a href="x-apple-data-detectors://1">Vancouver&lrm; BC&lrm; V6A 1T6</a></div>\n<div><a href="x-apple-data-detectors://1">Canada</a></div>\n</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">Is the right place for you.&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">Sincerely,</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">&nbsp;</div>\n<div style="font-family: ''.Helvetica NeueUI''; font-size: 18px; line-height: 24px; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.296875); -webkit-composition-fill-color: rgba(130, 98, 83, 0.0976563); -webkit-composition-frame-color: rgba(191, 107, 82, 0.496094); -webkit-text-size-adjust: auto;">Stephan DuVal</div>');

-- --------------------------------------------------------

--
-- Структура таблицы `plans`
--

CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `scans` int(8) NOT NULL,
  `names` int(8) NOT NULL DEFAULT '1',
  `monthFee` float NOT NULL,
  `yearFee` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `plans`
--

INSERT INTO `plans` (`id`, `name`, `description`, `scans`, `names`, `monthFee`, `yearFee`) VALUES
(1, 'Backpacker', 'Our On Call plan is a pay as you go service for those who receive very little mail or who would like to try out our service to see if it''s right for them.', 5, 1, 5, 50),
(2, 'Basic', 'Our basic plan suits the needs of digital natives who receive bills and notices in the mail but do most of their mailing online.', 20, 1, 15, 0),
(3, 'Personal', 'Perfect for the individual who travels often or works in remote locations.', 100, 1, 19, 0),
(4, 'Family', 'Our family plan offers the same features as our personal plan but for you can have up to six separate names on the same plan. Great for families large and small.', 100, 6, 25, 0),
(5, 'Business', 'Our eLetter mail management system is a great tool for small businesses who want to spend less time sorting mail and more time engaging with their clients.', 300, 99999, 54.99, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(10, 1),
(10, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `plan_id` int(8) NOT NULL DEFAULT '0',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `promo` varchar(20) NOT NULL,
  `blocked` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `plan_id`, `firstname`, `lastname`, `email`, `username`, `password`, `logins`, `last_login`, `promo`, `blocked`) VALUES
(10, 0, 'Stephan', 'DuVal', 'admin@esnail.com', 'admin@esnail.com', 'd974c9584319b7a3e087d9c0597eecacae4900d80eece56c3ca2878260b504ed', 3, 1405890377, '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
